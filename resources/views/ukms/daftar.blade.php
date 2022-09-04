@extends('layouts.navbar')
@section('content')
{{-- action == route  --}}
<form class="pl-5" action="ukms/konfirmasi" method="POST">
    @csrf

      <legend>DAFTAR ANGGOTA HIMATIF</legend>
      <div class="mb-3" class="pl-5">
        <label for="npm" class="form-label">NPM</label>
        <input type="text" name="npm" id="npm" class="form-control" >
      </div>

      <div class="mb-3" class="pl-5">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" >
      </div>

      <div class="mb-3" class="pl-5">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" name="alamat" id="alamat" class="form-control" >
      </div>

      <div class="mb-3" class="pl-5">
        <label for="semester" class="form-label">Semester</label>
        <select id="semester" name="semester" class="form-select">
          <option>pilih semester</option>
          <option>1</option>
          <option>3</option>
          <option>5</option>
          <option>7</option>
        </select>
      </div>

      <div class="mb-3" class="pl-5">
        <label for="angkatan" class="form-label">Angkatan</label>
        <select id="angkatan" name="angkatan" class="form-select">
          <option>pilih angkatan</option>
          <option>2020</option>
          <option>2021</option>
          <option>2022</option>
        </select>
      </div>

      <div class="mb-3" class="pl-5">
        <label for="jabatan" class="form-label">Daftar Jabatan pilihan</label>
        <select id="jabatan" name="jabatan" class="form-select">
          <option>pilih posisi</option>
          <option>anggota bidang IT</option>
          <option>anggota bidang PSDM</option>
          <option>anggota bidang PM</option>
          <option>anggota bidang MINBAK</option>
          <option>anggota bidang KWU</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Daftar</button>
  </form>
  <br>
  <a class="pl-5" href="/"><button type="submit" class="btn btn-primary" >Cancle</button></a>
  @endsection