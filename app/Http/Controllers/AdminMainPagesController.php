<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Main;

class AdminMainPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main=Main::first();
        return view('admin.main', compact('main'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|string',
            'sub_title'=>'required|string',
        ]);

        $main=Main::first();
        $main->title= $request->title;
        $main->sub_title= $request->sub_title;
        
        if($request->file('bc_img')){
            $img_file= $request->file('bc_img');
            $img_file->storeAs('public/img/','bc_img.'.$img_file->getClientOringinalExtnsion());
            $main->bc_img='stronge/img/bc_img.' .$img_file->getClientOringlnaExtnsion();
        }

        if($request->file('reaue')){
            $pdf_file= $request->file('reaue');
            $pdf_file->storeAs('public/pdf/','reaue.'.$pdf_file->getClientOringinalExtnsion());
            $main->reaue='stronge/img/reaue.' .$pdf_file->getClientOringlnaExtnsion();
        }
        $main->save();
        return redirect()->route('admin.main')->with('success', "main page data hasbeen Updated Successfully");
        
 
        
    }

    
}
