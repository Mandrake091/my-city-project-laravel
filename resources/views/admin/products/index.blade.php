@extends('layouts.layout')
@include('partials.popupDelete')
@section('content')
    
    <div class="container">
        <div class="row">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Crea nuovo prodotto</a>
            <table class="table">
                <thead>
                    <tr class="text-black">
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Publish Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="text-black">
                            <td><a href="{{ route('products.show', $product->id) }}">{{ $product->id }}</a></td>
                            <td><a href="{{ route('products.show', $product->id) }}"> {{ $product->title }}</a></td>
                            <td>{{ $product->price }}€</td>
                            <td>{{ $product->publish_date }}</td>
                            <td><a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Modifica</a>
                            </td>
                            <td>
                             <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="boolpress.openModal(event, {{$product->id}})" class="btn btn-danger">
                                Elimina
                        </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
    <div class="container">
        {{ $products->links() }}
    </div>
@endsection
