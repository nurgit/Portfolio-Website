<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Portfolio;
class PortfolioPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
       $services= Service::all();
      return view ('admin.services.list',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolios.create');
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
            'title'=>'required|string',
            'sub_title'=>'required|string',
            'big_image'=>'required|image',
            'small_image'=>'required|image',
            'description'=>'required|string',
            'client'=>'required|string',
            'category'=>'required|string',
        ]);

        $portfolios= new Portfolio;
        $portfolios->title= $request->title;
        $portfolios->sub_title= $request->sub_title;
        // $portfolios->big_image=$request->big_image;
        // $portfolios->small_image= $request->small_image;
        $portfolios->description= $request->description;
        $portfolios->client= $request->client;
        $portfolios->category= $request->category;
        
        $big_file=$request->file('big_image');
        storage::putFile('public/img',$big_file);
        $portfolios->big_image="storage/img/".$big_file->hashName();

        $small_file=$request->file('small_image');
        storage::putFile('public/img',$small_file);
        $portfolios->small_image="storage/img/".$small_file->hashName();

        $portfolios->save();
        return redirect()->route('admin.services.create')->with('success','new Service Created');
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
        $services=Service::find($id);
        return view('admin.services.edit', compact('services'));
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
            'icone'=>'required|string',
            'title'=>'required|string',
            'description'=>'required|string',
        ]);

        $service=Service::find($id);
        $service->icone= $request->icone;
        $service->title= $request->title;
        $service->description=$request->description;
        $service->save();
        return redirect()->route('admin.services.list')->with('success','service Update successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services=Service::find($id);
        $services->delete();
        return redirect()->route('admin.services.list')->with('success',' service Deleted successfully');
    }
}
