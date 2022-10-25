@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('products.update', $product->id) }}" method="product" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h1>Modifica dati</h1>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" class="text-white" id="title" name="title"
                        placeholder="inserisci titolo" value="{{ $product->title }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" class="text-white" id="price" name="price"
                        placeholder="inserisci prezzo" value="{{ $product->price }}€">
                </div>
                <div class="mb-3">
                    <label for="publish_date" class="form-label">Publish_date</label>
                    <input type="date" class="form-control"  id="publish_date" name="publish_date"
                        placeholder="inserisci data" value="{{ $product->publish_date }}">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection
