@extends('layouts.app2')
@section('content')
@section('produk','active')
<!-- Content Start -->
<div class="content">
    <h1 style="font-size: 1.5rem" class="text-center mt-2">Edit Produk Bagi Undangan</h1>
    <hr>
    <div class="container-fluid p-0">
        <div class="col-12 col-md-8 offset-md-2">
            <form action="/produkedit/{{$edit->produkID}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="produkName" class="form-label">Judul Produk</label>
                  <input type="text" name="produkName" class="form-control" id="exampleInputnama" aria-describedby="emailHelp" value="{{ !empty($edit->produkName) ? $edit->produkName : '' }}">
                </div>
                <div class="mb-3">
                    <label for="file_path" class="form-label">Foto Produk</label>
                    <input class="form-control" value="{{ URL::asset('aploads/produks'.$edit->file_path) }}" name="file_path" type="file" id="formFile">
                    <div class="mt-2" style="width: 100px; height: 150px;">
                        <img class="img-thumbnail" src="{{ asset($edit->file_path) }}" alt="">
                    </div>
                  </div>
                <div class="mb-3">
                  <label for="jenisProduk" class="form-label mt-5">Jenis Produk</label>
                  <select class="form-select" name="jenisProduk" aria-label="Default select example">
                    <option value="Undangan Web" {{ !empty($edit->jenisProduk == 'Undangan Web') ? 'selected' : '' }} >Undangan Web</option>
                    <option value="Undangan Video" {{ !empty($edit->jenisProduk == 'Undangan Video') ? 'selected' : '' }}>Undangan Video</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="demoProduk" class="form-label">Demo Produk</label>
                  <input type="text" name="demoProduk" class="form-control" id="exampleInputUmur" value="{{ !empty($edit->produkName) ? $edit->demoProduk : '' }}">
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-primary tambah">Simpan Produk</button>
                </div>
              </form>
        </div>
    </div>
</div>
<!-- Navbar End -->
@endsection
