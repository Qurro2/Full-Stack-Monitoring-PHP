@extends('layouts.main')
@section('main')
<div id="sidebar" class="active">
    @include('administrator.partials.sidebar')
  </div>
  <div id="main" class="layout-navbar">
    @include('administrator.partials.navbar')
    <div id="main-content">
      <div class="page-heading">
        <h3>Semua User Divisi</h3>
        <div class="row">
          <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body px-4 py-4-5">
                <div class="row">
                  <div
                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                  >
                    <div class="stats-icon purple mb-2">
                      <i class="iconly-boldShow"><i class="bi bi-code-slash"></i></i>
                    </div>
                  </div>
                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">
                      Total IT Dev
                    </h6>
                    <h6 class="font-extrabold mb-0">{{ $totalIT }}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body px-4 py-4-5">
                <div class="row">
                  <div
                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                  >
                    <div class="stats-icon blue mb-2">
                      <i class="iconly-boldProfile"><i class="bi bi-arrow-right-circle-fill"></i></i>
                    </div>
                  </div>
                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Sales Marketing</h6>
                    <h6 class="font-extrabold mb-0">{{ $totalSales }}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body px-4 py-4-5">
                <div class="row">
                  <div
                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                  >
                    <div class="stats-icon blue mb-2">
                      <i class="iconly-boldProfile"><i class="bi bi-arrow-right-circle-fill"></i></i>
                    </div>
                  </div>
                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Brand & Design</h6>
                    <h6 class="font-extrabold mb-0">{{ $totalBrand }}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body px-4 py-4-5">
                <div class="row">
                  <div
                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                  >
                    <div class="stats-icon green mb-2">
                      <i class="iconly-boldAdd-User"><i class="bi bi-check-circle-fill"></i></i>
                    </div>
                  </div>
                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Rekap Jasa</h6>
                    <h6 class="font-extrabold mb-0">{{ $totalRekap }}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section class="section">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">User Divisi List</h4>
            </div>
            <div class="card-body">
             <!-- table hover -->
             <div class="table-responsive">
                <table class="table" id="table1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Divisi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @forelse ($list as $item)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>
                        <div class="avatar avatar-md">
                          <img src="/{{ $item->photo }}" />
                        </div>
                        
                      </td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->email }}</td>
                      <td>
                          @switch($item->level ?? 'administrator')
                          @case("admin")
                              <span class="badge bg-success">ADMIN</span>
                              @break
                          @case("itdev")
                              <span class="badge bg-success">IT DEV</span>
                              @break
                          @case("marketing")
                              <span class="badge bg-success">SALES MARKETING</span>
                              @break
                          @case("brand")
                              <span class="badge bg-success">BRAND & DESIGN</span>
                              @break
                          @case("rekapjasa")
                              <span class="badge bg-success">REKAP JASA</span>
                              @break
                          @case("administrator")
                              <span class="badge bg-primary">ADMINISTRATOR</span>  
                              @break
                          @default
                              
                      @endswitch
                      </td>
                      <td>
                        @if ($item->level == "administrator")
                        <a href="" class="btn btn-outline-danger" hidden>Hapus</a>
                        @else
                        <form action="/delete/{{ $item->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-outline-danger">Hapus</button>
                        </form>
                        @endif
                      </td>
                  </tr> 
                @empty
                    <p>Data Masih Kosong !!!</p>
                @endforelse  
                
                
              </tbody>
              </table>
            </div>
            </div>
          </div>
        </section>
      </div>      
@endsection