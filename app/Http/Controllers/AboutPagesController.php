<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use Illuminate\Support\Facades\Storage;

class AboutPagesController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
       $abouts= About::all();
      return view ('admin.abouts.list',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title1'=>'required|string',
            'title2'=>'required|string',
            'image'=>'required|image',
            'description'=>'required|string',
        ]);

        $abouts= new About;
        $abouts->title1= $request->title1;
        $abouts->title2= $request->title2;
        // $portfolios->big_image=$request->big_image;
        // $portfolios->small_image= $request->small_image;
        $abouts->description= $request->description;
        
        $file=$request->file('image');
        storage::putFile('public/img',$file);
        $abouts->image="storage/img/".$file->hashName();

        $abouts->save();
        return redirect()->route('admin.abouts.create')->with('success','new About Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abouts=About::find($id);
        return view('admin.abouts.edit', compact('abouts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request,[
            'title'=>'required|string',
            'sub_title'=>'required|string',
            // 'big_image'=>'required|image',
            // 'small_image'=>'required|image',
            'description'=>'required|string',
            'client'=>'required|string',
            'category'=>'required|string',
        ]);

        $portfolios=Portfolio::find($id);
        $portfolios->title= $request->title;
        $portfolios->sub_title= $request->sub_title;
        // $portfolios->big_image=$request->big_image;
        // $portfolios->small_image= $request->small_image;
        $portfolios->description= $request->description;
        $portfolios->client= $request->client;
        $portfolios->category= $request->category;
        

        if($request->file('big_image')){
            $big_file=$request->file('big_image');
            storage::putFile('public/img',$big_file);
            $portfolios->big_image="storage/img/".$big_file->hashName(); 
        }
        if($request->file('small_image')){
            $small_file=$request->file('small_image');
            storage::putFile('public/img',$small_file);
            $portfolios->small_image="storage/img/".$small_file->hashName();

        }
        $portfolios->save();
        return redirect()->route('admin.portfolios.list')->with('success',' portfolios updated');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolios=Portfolio::find($id);
        @unlink(public_path($portfolios->big_image));// for image delete
        @unlink(public_path($portfolios->small_image));
        $portfolios->delete();
        return redirect()->route('admin.portfolios.list')->with('success',' Portfolio Deleted successfully');
    }
}
