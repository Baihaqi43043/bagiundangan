@extends('layouts.app2')
@section('content')
@section('produk','active')
<!-- Content Start -->
<div class="content">
    <h1 style="font-size: 1.5rem" class="text-center mt-2">Produk Bagi Undangan</h1>
    <hr>
    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
          <a href="{{ url('/tambahproduk') }}" class="btn btn-primary">Tambah Produk</a>
        </div>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Jenis</th>
            <th scope="col">Link Demo</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ( $dataproduk as $produk )
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ !empty($produk->produkName) ? $produk->produkName : '' }}</td>
                <td>{{ !empty($produk->jenisProduk) ? $produk->jenisProduk : '' }}</td>
                <td>{{ !empty($produk->demoProduk) ? $produk->demoProduk : '' }}</td>
                <td><a href="{{url('/edit')}}/{{$produk->produkID}}/editproduk" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a> <a href="{{url('/produk')}}/{{$produk->produkID}}/hapus" class="btn btn-danger delete"  data-id="{{$produk->produkID}}" data-nama="{{ $produk->produkName }}"><i class="bi bi-trash-fill"></i></a></td>
              </tr>
            @endforeach
        </tbody>
      </table>
    </div>
</div>

<script>
    $('.delete').click( function(){
      var pinjamid = $(this).attr('data-id');
      var nama = $(this).attr('data-nama');
        swal({
            title: "Yakin Menghapus Data?",
            text: "Anda akan menghapus data produk dengan nama "+nama+" !",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              window.location = "/produk/"+pinjamid+"/hapus"
              swal("Data Berhasil Di hapus!", {
                icon: "success",
              });
            } else {
              swal("Data tidak jadi di hapus!");
            }
          });
    });
  </script>
<!-- Navbar End -->
@endsection
