{{-- Displays the error message with a condition --}}

@if(count($errors) > 0)
@foreach($errors->all() as $error)
<div class="alert alert-danger">
    {{$error}}
</div>
@endforeach
@endif

{{-- Display a success send on our redirection --}}

@if(session('success'))

<div class="alert alert-success">
    {{session('success')}}
</div>

@endif