@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $err) 
        <p>{{$err}}</p>
        @endforeach
    </div>
@endif
@if (Session::has('warning'))
    <p class="alert alert-danger">{!! Session::get('warning') !!}</p>
@endif