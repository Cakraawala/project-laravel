@extends('layout.app',['title'=>'Homepage'])
@section('content')
    <!---<x-alert>--->
    @component('components.alert')
    @slot('title')
        <strong> login </strong>
    @endslot

    Anda Belum Login

    @slot('footer')
        ini adalah footer
    @endslot

    @endcomponent

    <h1 align="center">Home</h1>
    <h3 align="center"> Halo Selamat Datang {{ $name }} </h3>
    @include('components.python')
@endsection
