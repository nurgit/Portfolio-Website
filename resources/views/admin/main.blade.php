@extends('layouts.admin_layout')
@section('content')
     <!-- main ccontent ****************************** -->
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Main</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Main</li>
                </ol>
                
                
                <form action="{{route('admin.main.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PUT')}}
                    
                    <div class="row">
                        <div class="from-group col-md-3 mt-3">
                            <h3>Backgtound Image</h3>
                            <img style="height: 30vh" src="{{url($main->bc_img)}}" alt="" class="img-thumbnil">
                            <input type="file" id="bc_img" name="bc_img" class="bc_img mt-3">
                        </div>
                        <div style="margin-left: 5%" class="form-group col-md-4 mt-3">
                            <div>
                                <label for="title"><h4>Title</h4></label>
                                <input type="text" class="form-control" name="title" class="mt-3" value="{{($main->title)}}">
                            </div>
                            <div class="mt-4">
                                <label for="sub_title"><h4>Sub Title</h4></label>
                                <input type="text" class="form-control" name="sub_title" value="{{($main->sub_title)}}">
                            </div>
                            <div class="mt-4">
                                <h4>Upload Resume</h4>
                                <input type="file" id="resume" name="resume">
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="submit" name="submit" class="btn btn-primary mt-5">
                    </div>
                </form>
                
                {{-- <div style="height: 100vh"></div>    --}}
        </main>   
@endsection              