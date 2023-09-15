@section('title', 'Data ayah')
@section('pages', 'Data ayah')
@extends('layouts.admin.admin-app')
@section('content')

 <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h5 class="mb-0">Data ayah</h5>
            </div>
            <div class="table-responsive">
              <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Lengkap</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Agama</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tempat & Tanggal Lahir</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pekerjaan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat Kantor</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor Telepon Rumah</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor Telepon Kantor</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor Whatsapp</th>
                    
                  </tr>
                </thead>
                <tbody>
                @foreach($peserta as $item)
                  <tr>
                    <td class="text-sm font-weight-normal">{{ $item->user->email }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->keluarga->ayah->nama_lengkap }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->keluarga->ayah->agama }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->keluarga->ayah->tempat_lahir }} , {{ \Carbon\Carbon::parse($item->keluarga->ayah->tanggal_lahir)->isoFormat('Do MMMM YYYY')}}</td>
                    <td class="text-sm font-weight-normal">{{ $item->keluarga->ayah->pekerjaan }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->keluarga->ayah->alamat }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->keluarga->ayah->alamat_kantor }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->keluarga->ayah->nomor_telepon_rumah }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->keluarga->ayah->nomor_telepon_kantor }}</td>
                    <td class="text-sm font-weight-normal">{{ $item->keluarga->ayah->no_whatsapp }}</td>
                    
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

@endsection

