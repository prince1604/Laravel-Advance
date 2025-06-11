{{-- <x-layout>
    <x-slot name="title">
        Home page
    </x-slot>
    <x-slot name="main">
        <div>
        <h1 class="heading">Home Page heading</h1>
        <h3>Sub heading for Home Page</h3>
        <p>Dummy paragraph text for Home Page</p>
    </div>
    </x-slot>
</x-layout> --}}


@extends('components.layout')

@section('title','This is Home Page')

@section('main')


<div class="main">
    <h1>User home page</h1>

   <h3>Sub heading for home page </h3>
   <p>Text for home page </p>

   <button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>

<button type="button" class="btn btn-link">Link</button>
</div>

@endsection
