@extends('layouts.admin_layout')
@section('content')
     <!-- main ccontent ****************************** -->
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Create</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Main</li>
                </ol>
                
                
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- {{method_field('PUT')}} // for file send--}}
                    
                    <div class="row">
                       
                        <div style="margin-left: 5%" class="form-group col-md-4 mt-3">
                            <div>
                                <label for="icone"><h4>Font Awesome Icone</h4></label>
                                <input type="text" class="form-control" name="title" class="mt-3" >
                            </div>
                            <div class="mt-4">
                                <label for="title"><h4>Title</h4></label>
                                <input type="text" class="form-control" name="sub_title" >
                            </div>
                            <div class="mt-4">
                                <label for="decriction"><h4>Decriction</h4></label>
                                <textarea type="text" class="form-control" name="decriction" ></textarea>
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