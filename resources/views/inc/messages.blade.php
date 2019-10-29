@if(count($errors)>0)

@foreach($errors->all() as $error)
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{$error}}
    </div>
@endforeach
@endif

{{-- //to check for session succeess --}}
@if(session('success'))
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{session('success')}}
    </div>
@endif
{{--to check for any error --}}
@if(session('error'))
    <div class="alert alert-error">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{session('error')}}
    </div>
@endif
