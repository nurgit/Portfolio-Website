@extends('layouts.admin_layout')
@section('content')
     <!-- main ccontent ****************************** -->
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Portfolio-Edit</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">portfolio-Edit</li>
                </ol>
                
                
                <form action="{{route('admin.portfolios.update',$portfolios->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- {{method_field('PUT')}} // for file send--}}
                    
                    <div class="row">
                        <div class="from-group col-md-3 mt-3">
                            <h3>Big Image</h3>
                            <img style="height: 30vh" src="{{url($portfolios->big_image)}}" alt="" class="img-thumbnil">
                            <input type="file" id="big_image" name="big_image" class="bc_img mt-3">
                        </div>
                        <div class="from-group col-md-3 mt-3">
                            <h3>Small Image</h3>
                            <img style="height: 20vh" src="{{url($portfolios->small_image)}}" alt="" class="img-thumbnil">
                            <input type="file" id="small_image" name="small_image" class="bc_img mt-3">
                        </div>
                        <div style=" " class="form-group col-md-4 mt-3">
                            <div>
                                <label for="title"><h4>Title</h4></label>
                                <input type="text" class="form-control" name="title" class="mt-3" value="{{($portfolios->title)}}">
                            </div>
                            <div class="mt-4">
                                <label for="sub_title"><h4>Sub Title</h4></label>
                                <input type="text" class="form-control" name="sub_title" value="{{($portfolios->sub_title)}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">  
                        <div class="from-group col-md-6 mt-3">
                            <h3>Description</h3>
                            <textarea name="description" id="" cols="" rows="6" class="form-control">{{($portfolios->description)}}</textarea>
                        </div>  

                        <div style=" " class="form-group col-md-4 mt-3">
                            <div class="mb-4">
                                <label for="client"><h4>Client</h4></label>
                                <input type="text" class="form-control" name="client" value="{{($portfolios->client)}}">
                            </div>
                            <div class="mb-5">
                                <label for="category"><h4>Category</h4></label>
                                <input type="text" class="form-control" name="category" value="{{($portfolios->category)}}">
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