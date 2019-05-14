@extends('layout')
@section('content')


<h1 class="text-center">Shop</h1>

<p class="text-center">Today manu</p>
<div class="row">
    <div class="container">
        <div class="col-md-4">

            <div>
                <ul>
                    @foreach( $items as $iteam)
                    <li>{{ $iteam }}</li>
                    @endforeach
                </ul>
                <p> go back <a href="/">Home</a></p>
            </div>
        </div>
        <div class="col-md-8">


        </div>
    </div>
</div> @endsection