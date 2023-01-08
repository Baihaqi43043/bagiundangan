@extends('layouts.app2')
@section('content')
@section('produk','active')
<!-- Content Start -->
<div class="content">
    <h1 style="font-size: 1.5rem" class="text-center mt-2">Produk Bagi Undangan</h1>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <button type="button" class="btn btn-primary">Primary</button
        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    </div>
</div>
<!-- Navbar End -->
@endsection
