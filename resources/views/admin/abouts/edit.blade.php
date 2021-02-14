@extends('layouts.admin_layout')
@section('content')
     <!-- main ccontent ****************************** -->
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">About-Edit</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
                   <li class="breadcrumb-item"><a href="{{route('admin.abouts.list')}}">About-List</a></li>
                    <li class="breadcrumb-item active">About-Edit</li>
                </ol>
                
                
                <form action="{{route('admin.abouts.update',$abouts->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- {{method_field('PUT')}} // for file send--}}
                    
                    <div class="row" style="margin-left: 5%">

                        <div style=" " class="form-group col-md-6 mt-3">

                            <div class="mb-4">
                                <label for="title"><h4>Date</h4></label>
                                <input type="text" class="form-control" name="title1"  value="{{$abouts->title1}}">
                            </div>
                            <div class="mb-4">
                                <label for="sub_title"><h4>Title</h4></label>
                                <input type="text" class="form-control" name="title2" value="{{$abouts->title2}}">
                            </div>
                            <div class="mb-4">
                                <h3>Description</h3>
                            <textarea name="description" id="" cols="" rows="6" class="form-control">{{$abouts->description}}</textarea>
                            </div>
                        </div>
                        <div style="margin-left: 5%"  class="form-group  mt-3">
                            <div class="mb-4">
                                <h3>Image</h3>
                                <img style="height: 30vh" src="{{url($abouts->image)}}" alt="" class="img-thumbnil">
                                <br>

                                <input type="file" id="small_image" name="image" class="mt-2">
                            </div>
                        </div>
                    </div>
                    <div>
                        <input type="submit" name="submit" class="btn btn-primary mt-5"  style="margin-left: 5%">
                    </div>
                </form>
                
                {{-- <div style="height: 100vh"></div>    --}}
        </main>   
@endsection              