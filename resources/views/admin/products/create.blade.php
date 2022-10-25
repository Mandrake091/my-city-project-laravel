@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row justify-content-center flex-column align-content-center">
          <h1>Create</h1>
            <form action="{{ route('products.store') }}" method="POST" class="col-6" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                        placeholder="inserisci titolo" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Title</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}"
                        placeholder="inserisci prezzo" required>
                </div>
                <label for="publish_date">Date</label>

                <input type="date" id="publish_date" name="publish_date" value="2018-07-22">

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
