@if ($errors->any())
   @foreach ($errors->all() as $error)
      <div class="alert alert-danger alrrt-dismissible">
         <button type="button" class="close" data-dismiss="alert">&times;</button>
         <strong>Error!</strong>{{$error}}
      </div>
   @endforeach
@endif
{{-- //------------------ --}}
@if (session('error'))
      <div class="alert alert-danger alrrt-dismissible">
         <button type="button" class="close" data-dismiss="alert">&times;</button>
         <strong>Error!</strong>{{section('error')}}    
      </div>
@endif

@if (session('success'))
      <div class="alert alert-success alrrt-dismissible">
         <button type="button" class="close" data-dismiss="alert">&times;</button>
         <strong>success:</strong>{{session('success')}}    
      </div>
@endif