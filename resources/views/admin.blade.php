@extends('dashboard')
@section('content')

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if (isset($barangs) && !empty($barangs))
                                @foreach ($barangs as $key => $barang)
                                     @if(is_object($barang))
                                    <tr>
                                        <th scope="row">{{$key + 1}}</th>
                                        <td>{{ $barang->name }}</td>
                                        <td>{{ $barang->harga }}</td>
                                        <td>{{ $barang->stok }}</td>
                                        <td>
                                            <ul>
                                            <div class="row">
                                                <div class="col-4">
                                                    
                                                <a href="{{route('edit', $barang->id)}}" class="btn btn-warning">Edit</a>
                                                </div>
                                                <br>
                                                <br>
                                                <form action="{{ route('destroy')}}" method="post" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?');" >
                                                 <div class="col-4">
                                                 @csrf
                                                 <input type="hidden" name="id" value="{{ $barang->id }}" >
                                                 <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                                </div>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

@endsection