{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <style>
    .card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 18px;
  }
    </style>
@stop

@section('content')
<div class="container">
    <div class="row">
    <div class="col-md-3">
      <a href="{{route('career_data.index')}}">
        <div class="card-counter primary">
        <i class="fa fa-address-book"></i>
        <span class="count-numbers">{{\App\CareerMessage::all()->where('is_seen',0)->count()}}</span>
        <span class="count-name">CV</span>
      </div>
    </a>
    </div>

    <div class="col-md-3">
    <a href="{{route('contact_us_data.index')}}">
      <div class="card-counter danger">
        <i class="fa fa-envelope"></i>
        <span class="count-numbers">{{\App\ContactUs::all()->where('is_seen',0)->count()}}</span>
        <span class="count-name">Message</span>
      </div>
    </a>
    </div>

 
  </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop