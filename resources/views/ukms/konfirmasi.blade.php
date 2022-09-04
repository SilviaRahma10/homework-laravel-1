@extends('layouts.navbar')
@section('content')
{{-- action == route  --}}
<form class="p-5">
    @csrf
    <fieldset disabled>
      <legend>PENDAFTARAN ANDA BERHASIL</legend>
      <h3>rekap data</h3>
      <div class="mb-3" class="pl-5">
        <label for="npm" class="form-label">NPM</label>
        <input type="text" name="npm" id="npm" class="form-control" placeholder="{{ $npm }}">
      </div>

      <div class="mb-3" class="pl-5">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control" placeholder="{{ $nama }}">
      </div>

      <div class="mb-3" class="pl-5">
        <label for="semester" class="form-label">Semester</label>
        <input type="text" name="semester" id="semester" class="form-control" placeholder="{{ $semester }}">
      </div>

      <div class="mb-3" class="pl-5">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="{{ $alamat }}">
      </div>

      <div class="mb-3" class="pl-5">
        <label for="alamat" class="form-label">Angkatan</label>
        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="{{ $angkatan }}">
      </div>

      <div class="mb-3" class="pl-5">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="{{ $jabatan }}">
      </div>

  </form>
  
</fieldset>
<a class="pl-5" href="/"><button type="submit" class="btn btn-primary" >back</button></a>

  @endsection