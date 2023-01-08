@extends('layouts.app2')
@section('content')
@section('produk','active')
<!-- Content Start -->
<div class="content">
    <h1 style="font-size: 1.5rem" class="text-center mt-2">Produk Bagi Undangan</h1>
    <hr>
    <div class="container-fluid p-0">
        <div class="col-12 col-md-8 offset-md-2">
            <form action="{{url('/produk/create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="produkName" class="form-label">Judul Produk</label>
                  <input type="text" name="produkName" class="form-control" id="image" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="file_path" class="form-label">Foto Produk</label>
                    <input class="form-control" name="file_path" type="file" id="file-upload" accept="image/*" onchange="previewImage(event);">
                    <img class="img-thumbnail" id="preview-selected-image">
                  </div>
                <div class="mb-3">
                  <label for="jenisProduk" class="form-label">Jenis Produk</label>
                  <select class="form-select" name="jenisProduk" aria-label="Default select example">
                    <option value="Undangan Web">Undangan Web</option>
                    <option value="Undangan Video">Undangan Video</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="demoProduk" class="form-label">Demo Produk</label>
                  <input type="text" name="demoProduk" class="form-control" id="exampleInputUmur">
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-primary tambah">Simpan Produk</button>
                </div>
              </form>
        </div>
    </div>
</div>
@stack('custom-script')
<script>
 const previewImage = (event) => {
    /**
     * Get the selected files.
     */
    const imageFiles = event.target.files;
    /**
     * Count the number of files selected.
     */
    const imageFilesLength = imageFiles.length;
    /**
     * If at least one image is selected, then proceed to display the preview.
     */
    if (imageFilesLength > 0) {
        /**
         * Get the image path.
         */
        const imageSrc = URL.createObjectURL(imageFiles[0]);
        /**
         * Select the image preview element.
         */
        const imagePreviewElement = document.querySelector("#preview-selected-image");
        /**
         * Assign the path to the image preview element.
         */
        imagePreviewElement.src = imageSrc;
        /**
         * Show the element by changing the display value to "block".
         */
        imagePreviewElement.style.display = "block";
    }
};
    // function previewImage(){
    //     const image = document.querySelector('image');
    //     const imgpreview = document.querySelector('.img-preview');

    //     imgpreview.style.display = 'block';

    //     const oFReader = new FileReader();
    //     oFReader.readAsDataURL(image.files[0]);

    //     oFReader.onload = function(oFREvent){
    //         imgpreview.src = oFREvent.target.result;
    //     }
    // }
</script>
@stack('link-script')
<!-- Navbar End -->
@endsection
