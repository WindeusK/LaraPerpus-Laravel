@extends('layout.main')

@section('content')
<section class="content">
  <center>
      <div class="container-fluid">
          <div class="row-cols-3 ">
            <div class="card mt-5">
              <h4 class="mt-3 ml-4 text-bold h5">Perpustakaan <a href="/login"><button class="btn btn-warning ml-2">Admin</button></a></h4>
              <h4 class="mt-3 ml-4 text-bold h5">Tabel Peminjaman</h4>
              <label for="" class="mt-4 ml-4">
                Judul_buku<input type="text" name="judul_buku" placeholder="data wajib diisi" class="ml-4 input-group-lg pl-5 text-sm-left">
              </label> 
               <label for="" class="mt-3 ml-4">
                jumlah <input type="number" name="jumlah" placeholder="data wajib diisi" class="ml-4 input-group-lg pl-5 text-sm-left">
              </label> 
               <label for="" class="mt-3 ml-4">
                id_peminjam <input type="text" name="id_peminjam" placeholder="data wajib diisi" class="ml-4 input-group-lg pl-5 text-sm-left">
              </label>
               <label for="" class="mt-3 ml-1 mr-2">
                tanggal_pinjam<input type="date" name="tanggal_pinjam" placeholder="data wajib diisi" class="ml-5 input-group-lg pl-5 text-sm-left">
              </label>
              <label for="" class="mt-3 ml-1 mr-2">
                batas_pinjam<input type="date" name="batas_pinjam" placeholder="data wajib diisi" class="ml-5 input-group-lg pl-5 text-sm-left">
              </label>
              <label for="" class="mt-4 ml-4 mb-4">
                <button class="btn btn-primary">Kirim</button>
              </label>
            </div>
          </div>
        </div>
  </center>
 
</section>
@endsection