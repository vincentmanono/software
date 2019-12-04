<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // DB::beginTransaction();
        $this->validate($request,[
            'name'=>'required|unique:products,name',
            'image'=>'required|image',
            'url'=>"required",
            'price'=>'required|numeric',
            'description'=>"string|required",
            'version'=>'required|string',

        ]); //status  1 == available  while 0 == not available

        $image = $request->image;
        $image_name =  time() . $image->getClientOriginalName();

        // $pathImage = Storage::putFileAs('softwares/images', $request->file('image'), $image_name);
        $request->file('image')->storeAs('public/images', $image_name);
        $image = $image_name; //Storing the public path for the image for record in the database

        $software = $request->url;
        $fileSize = filesize($software);
        $software_name =  time() . $software->getClientOriginalName();

        // $pathFile = Storage::putFileAs('softwares/softwares', $request->file('url'), $software_name);
        $request->file('url')->storeAs('public/softwares/softwares', $software_name);

        $software = $software_name; //Storing the public path for the image for record in the database
       $store =  Product::create([
           'category_id'=>$request->category_id,
            'name' => $request->name,
            'image' => $image,
            'url' => $software_name,
            'price' => $request->price,
            'description' => $request->description,
            'size' => $fileSize,
            'version' => $request->version,
            'status' =>"0"
            ]);


        // dd($image_name);

       //
       if ($store) {
           return redirect()->back()->with("success","software added successfully");
        //    DB::commit();
       } else {
           # code...
        //    DB::rollback();
           return redirect()->back()->withInput();
       }







    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

    }


    public function update(Request $request, $id)
    {
         // DB::beginTransaction();
      $this->validate($request,[
            'name'=>'required|',
            'image'=>'image|nullable',
            'url'=>"file|nullable",
            'price'=>'required|numeric',
            'description'=>"string|required",
            'version'=>'required|string',
            'status'=>"required|numeric|regex:/^[0-1]/|max:1"

        ]); //status  1 == available  while 0 == not available



           if ( file_exists($request->file('image')) ) {
               # code...
            $image = $request->image;
            $image_name =  time() . $image->getClientOriginalName();

            // $pathImage = Storage::putFileAs('softwares/images', $request->file('image'), $image_name);
            // $previousName = DB::select('select image from products where id = ?', [$id]);
            // Storage::delete('public/images/'.$previousName);
           $imagePath = $request->file('image')->storeAs('public/images', $image_name);
        //    $resize = Image::make( public_path("storage/ima") )
            $image =  $image_name ; //Storing the public path for the image for record in the database
           }else {
             // $image =  DB::select('select image from products where id = ?', [$id]);
              $image = Product::find($id)->image;


           }

           if (file_exists($request->url) ) {

            $software = $request->url;
            $fileSize = filesize($software);


            $software_name =  time() . $software->getClientOriginalName();
            // $pathFile = Storage::putFileAs('softwares/softwares', $request->file('url'), $software_name);
            // $previousName = DB::select('select url from products where id = ?', [$id]);
            // Storage::delete('public/softwares/softwares/'.$previousName);

           $softwarePath = $request->file('url')->storeAs('public/softwares/softwares', $software_name);
            $software =  $software_name ;//Storing the public path for the image for record in the database

           } else {
               # code...

              $software = Product::find($id)->url;
              $fileSize = Product::find($id)->size;
           }




        $store = Product::where('id', $id)
                    ->update([
                    'category_id'=>$request->category_id,
                    'name' => $request->name,
                    'image' => $image  ,
                    'url' => $software  ,
                    'price' => $request->price,
                    'description' => $request->description,
                    'size' =>$fileSize ,
                    'version' => $request->version,
                    'status' => $request->status

                    ]);


        // dd($image_name);

       //
       if ($store) {
           return redirect()->back()->with("success","software update successfully");
        //    DB::commit();
       } else {
           # code...
        //    DB::rollback();
           return redirect()->back()->withInput();
       }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $software = Product::findOrfail($id);
        if(Storage::delete('public/storage/images'.'/'.$software->image) || Storage::delete('public/storage/softwares/softwares'.'/'.$software->image)){
            $software->delete();

            return redirect()->back()->with('success', 'software Deleted');
          }else {
            $software->delete();
            return redirect()->back()->with('success', 'software Deleted');

          }


    }
}
