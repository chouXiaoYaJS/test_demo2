<!-- Stored in storage/view/child.blade.php -->

@extends('layouts.app')

@section('title', 'Page Title')
<p>123</p>
@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
