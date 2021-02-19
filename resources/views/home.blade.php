@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos possimus reiciendis enim consequuntur ratione corporis esse quae illo cupiditate. Vel dolorum repudiandae, nihil odit soluta animi voluptate dolore saepe nisi?</p>
@endsection

@section('sidebar')
@parent
    <p>This is appended to the sidebar</p>
@endsection