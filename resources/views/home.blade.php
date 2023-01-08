</body>

</html>
@extends('layouts.app')
<style>
    .btn-home {
        width: 300.47px;
        height: 64.58px;
        border: none;
        background: #083AA9;
        border-radius: 10px;
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 38px;
        color: #FFFFFF;
        transition: 0.2s;
    }

    .btn-home:hover {
        filter: drop-shadow(5px 5px 4px #083AA9);
        transition: 0.3s;
    }

    #home {
        background: linear-gradient(247.6deg, rgba(255, 231, 204, 0.26) 1.51%, #FFE7CC 93.99%, #FFE7CC 94.88%);
        height: 100vh;
        position: relative;
        top: 0px;
    }

    .homeconten {
        z-index: 2;
    }




    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 600px) {
        .btn-home {
            height: 37px;
            width: 150px;
            font-size: 12px;
        }

        .homeconten {
            position: absolute;
            bottom: 20px;
            text-align: justify;
        }
    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {}

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {}

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {}

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {}

</style>

@section('content')
<section id="home" class="position-absolute top-0 w-100">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-sm-12 col-lg-6 my-auto homeconten">
                <h1>Undangan Website Untuk
                    Pernikahan Impianmu</h1>
                <p>
                    Jangan mau dibatasi jarak untuk menyebar undangan pernikahan impianmu. Dengan pingit, undanganmu
                    akan dibuat dan disebar secara online
                </p>
                <button class="btn-home">PESAN SEKARANG</button>
            </div>
            <div class="">
                <img src="{{ asset('assets/homeimage.png') }}" alt=""
                    class="imghero position-absolute end-0 top-0 h-100 ">
            </div>
        </div>
    </div>
</section>
@endsection
