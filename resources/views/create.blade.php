<!-- create.blade.php -->

@extends('dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Barang</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nama</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"  required  autofocus>

                                    @if($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="harga" class="col-md-4 col-form-label text-md-right">Harga</label>

                                <div class="col-md-6">
                                    <input id="harga" type="number" class="form-control" name="harga" required autocomplete="harga">

                                    
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="harga" class="col-md-4 col-form-label text-md-right">Stok</label>

                                <div class="col-md-6">
                                    <input id="stok" type="number" class="form-control" name="stok" required>

                                    
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Create
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection