{{-- <x-layout>
    <x-slot name="title">
        Login page
    </x-slot>
    <x-slot name="main">
        <div>
        <h1 id="heading" class="heading">User Login</h1>
         <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="staticEmail" value="email@example.com">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div>
    //<button onclick="changeColor()" type="button" class="btn btn-primary">Login</button>
    <button onclick="changeColor()" type="button" >Login</button>
    <button onclick="greenColor()" type="button" >Update color</button>
</div>

    </x-slot>
</x-layout> --}}


@extends('components.layout')

@section('title','This is login page')

@section('main')


<div class="main">
    <h1>User Login</h1>
    <form action="" method="get">
        <input type="text" placeholder="enter name">
        <br><br>
        <input type="password" placeholder="enter password">
        <br><br>
   <button type="button" class="btn btn-primary">Log-in</button>
    </form>
</div>

@endsection
