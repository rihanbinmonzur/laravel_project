@extends('layouts.app')
@sections('daTitle','add books')
@section('content')

    <div class="panel-body">
        <form action="{{ route('book.update', $book->id) }}" method="post" enctype="multipart/form-data"
            class="form-horizontal form-bordered">
            @csrf
            @method('patch')
            <h2>Add New Books</h2>
            <div class="form-group">
                <label for="name" class="col-md-3 control-label"> </label>
                <div class="col-md-6">
                    <input type="text" name="name" id="name" class="form-control" value="{{ $book->Name }}">
                </div>
            </div>

            <div class="row">

                <div class="col-md-3 ">
                    <div class="form-group form-inline">
                        <label for="price" class="control-label">Price</label>

                        <input type="number" name="price" id="price" step="0.01" class="form-control "
                            value="{{ $book->price }}">
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="form-group form-inline">
                        <label for="categ" class="control-label">Category id</label>
                        <input type="text" name="category_id" id="categ" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group form-inline">
                        <label for="isbn" class="control-label">Isbn</label>
                        <input type="number" name="isbn" id="isbn" class="form-control"
                            value="{{ $book->isbn }}">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group form-inline">
                        <label for="pages" class="control-label">Pages</label>
                        <input type="number" name="pages" id="pages" class="form-control"
                            value="{{ $book->pages }}">
                    </div>
                </div>
            </div>
            <br> <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group form-inline">
                        <label for="stock" class="control-label">Stock</label>
                        <input type="text" name="stock" id="isbn" class="form-control"
                            value="{{ $book->stock }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-inline">
                        <label for="lang">Language</label>
                        <input type="text" name="language" id="lang"value="{{ $book->language }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-inline">
                        <label for="format">Format</label>
                        <input type="text" name="format" id="format"value="{{ $book->format }}">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 form-inline">
                    <label for="desc" class="col-md-4 control-label">Description</label>

                    <input type="text" name="description" id="desc"
                        class="form-control"value="{{ $book->description }}">
                </div>
            </div>

            <div class="col-md-6 form-group">
                <div class="form-group form-inline">
                    <label for="pd">publisher Date</label>
                    <input type="date" name="pub_date" id="pd"value="{{ $book->pub_date }}">
                </div>
            </div>
            <div class="col-md-6 form-group">
                <div class="form-group form-inline">
                    <label for="edi">Edition</label>
                    <input type="text" name="edition" id="edi"value="{{ $book->edition }}">
                </div>
            </div>

            <br><br>
            <div class="form-group col-md-12">
                <label for="img" class="col-md-4 control-label">image</label>
                @if ($book->image_url)
                    <img src="{{ asset('uploads/' . $product->image_url) }}" alt="product image" width="100">
                @endif
                <input type="file" name="image_url" />

            </div>


            <div class="col-md-12 form-group" style="text-align:center">
                <button type="submit">Save</button>
            </div>

        </form>
    </div>
@endsection
