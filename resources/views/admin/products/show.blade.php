@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Titolo: {{ $product->title }}</h5>
                    <p class="card-text" value="{{$product->price}}">Prezzo: {!! $product->price !!}€</p>
                     <p class="card-text" value="{{$product->publish_date}}">Publish_date: {!! $product->publish_date !!}</p>

                </div>
                  
            </div>
        </div>
    @endsection
