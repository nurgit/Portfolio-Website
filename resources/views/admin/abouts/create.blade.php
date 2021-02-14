@extends('layouts.admin_layout')
@section('content')
     <!-- main ccontent ****************************** -->
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Create</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Portfolios-Create</li>
                </ol>
                
                
                <form action="{{route('admin.abouts.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{method_field('PUT')}}
                    
                    <div class="row" style="margin-left: 5%">

                        <div style=" " class="form-group col-md-6 mt-3">
                            <div class="mb-4">
                                <h3>Image</h3>
                                {{-- <img style="height: 20vh" src="" alt="" class="img-thumbnil"> --}}

                                <input type="file" id="small_image" name="image" >
                            </div>
                            <div class="mb-4">
                                <label for="title"><h4>Date</h4></label>
                                <input type="text" class="form-control" name="title1"  value="">
                            </div>
                            <div class="mb-4">
                                <label for="sub_title"><h4>Title</h4></label>
                                <input type="text" class="form-control" name="title2" value="">
                            </div>
                            <div class="mb-4">
                                <h3>Description</h3>
                            <textarea name="description" id="" cols="" rows="6" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div style="margin-left: 5%">
                        <input type="submit" name="submit" class="btn btn-primary mb-4 mt-3" >
                    </div>
                </form>
                
                {{-- <div style="height: 100vh"></div>    --}}
        </main>   
@endsection              