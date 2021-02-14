@extends('layouts.admin_layout')
@section('content')
     <!-- main ccontent ****************************** -->
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">List of About</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">About-List</li>
                </ol>
                
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Date</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if (count($abouts)>0)
                            @foreach ($abouts as $about)
                                <tr>
                                    <th scope="row">{{$about->id}}</th>
                                    <td>{{$about->title1}}</td>
                                    <td>{{$about->title2}}</td>
                                    <td>{{Str::limit(strip_tags($about->description),40)}}</td>
                                    <td>
                                        <img style="height: 10vh" src="{{url($about->image)}}" alt="big_image">
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="">
                                                <a href="{{route('admin.abouts.edit',$about->id)}}" class="btn btn-primary p-2 m-1">Edit</a>
                                            </div>

                                            <div class="">
                                                <form action="{{route('admin.abouts.destroy',$about->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" name="submit" value="Delete" class="btn btn-danger p-2 m-1">
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>    
                            @endforeach
                        @endif
                    </tbody>
                  </table>  
                
                
                {{-- <div style="height: 100vh"></div>    --}}
        </main>   
@endsection              