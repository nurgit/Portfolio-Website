@extends('layouts.admin_layout')
@section('content')
     <!-- main ccontent ****************************** -->
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">List of Services</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashbord')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Services-List</li>
                </ol>
                
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Icone</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @if (count($services)>0)
                            @foreach ($services as $service)
                                <tr>
                                    <th scope="row">{{$service->id}}</th>
                                    <td>{{$service->icone}}</td>
                                    <td>{{$service->title}}</td>
                                    <td>{{Str::limit(strip_tags($service->description),40)}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <a href="{{route('admin.services.edit',$service->id)}}" class="btn btn-primary">Edit</a>
                                            </div>
                                            <div class="col-sm-2">
                                                {{-- <form action="{{route('admin.services.delete',$service->id)}}">
                                                    <input type="submet" name="submit" value="Delete" class="btn btn-danger">
                                                </form> --}}
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