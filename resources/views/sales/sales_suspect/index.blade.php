@extends('layouts.main') 
@section('main') 
<div id="sidebar" class="active"> 
    @include('sales.partials.sidebar') 
</div>
<div id="main" class="layout-navbar"> 
  @include('sales.partials.navbar')  
    <div id="main-content">
    <div class="page-heading">
      <h3>Sales Suspect Statistik</h3>
        <div class="row">
          <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body px-4 py-4-5">
                <div class="row">
                  <div
                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start"
                  >
                    <div class="stats-icon purple mb-2">
                      <i class="iconly-boldShow"><i class="bi bi-hdd-rack-fill"></i></i>
                    </div>
                  </div>
                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">
                      Total Database
                    </h6>
                    <h6 class="font-extrabold mb-0">{{ $totalData }}</h6>
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
                      <i class="iconly-boldProfile"><i class="bi bi-people-fill"></i></i>
                    </div>
                  </div>
                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Total Nama Kontak</h6>
                    <h6 class="font-extrabold mb-0">{{ $totalNama->count() }}</h6>
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
                    <div class="stats-icon green">
                      <i class="iconly-boldAdd-User"><i class="bi bi-phone-fill"></i>
                    </i>
                    </div>
                  </div>
                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Total NO HP</h6>
                    <h6 class="font-extrabold mb-0">{{ $totalNoHP }}</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3 col-md-6">
            <div class="card">
              <div class="card-header">
                <h4>Grafik Chart</h4>
              </div>
              <div class="card-body">
                <div id="chart-visitors-profile"></div>
              </div>
            </div>
          </div>
        </div>
      <section class="section">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Database Sales Suspect</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
            <table class="table" id="table1">
                <thead>
                  <tr>
                    <th>NO</th>
                    <th>PROVINSI</th>
                    <th>KAB/KOTA</th>
                    <th>PUSAT</th>
                    <th>NAMAKONTAK</th>
                    <th>JABATAN</th>
                    <th>INSTANSI</th>
                    <th>NOHP1</th>
                    <th>NOHP2</th>
                    <th>EMAIL</th>
                    <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($suspect as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->provinsi }}</td>
                        <td>{{ $item->kabupaten }}</td>
                        <td>{{ $item->pusat_pemerintahan }}</td>
                        <td>{{ $item->nama_kontak }}</td>
                        <td>{{ $item->jabatan }}</td>
                        <td>{{ $item->instansi }}</td>
                        <td>{{ $item->nohp1 }}</td>
                        <td>{{ $item->nohp2 }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                          <div
                          class="btn-group mb-3 btn-group-sm"
                          role="group"
                          aria-label="Basic example"
                        >
                        <a href="/sales_suspect/{{ $item->id }}/edit" class="btn icon btn-primary"><i class="bi bi-pencil"></i
                          ></a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            </div>
        </div>
         </div>
      </section>
    </div> 
    @endsection
    @push('js')
    <script>
      let optionsVisitorsProfile = {
            series: [
              {{ $totalData }},{{ $totalNoHP }}
            ],
            labels: ["Total Database", "Total No HP"],
            colors: ["#435ebe", "#58eb34"],
            chart: {
              type: "donut",
              width: "100%",
              height: "350px",
            },
            legend: {
              position: "bottom",
            },
            plotOptions: {
              pie: {
                donut: {
                  size: "30%",
                },
              },
            },
          }
        var chartVisitorsProfile = new ApexCharts(
            document.getElementById("chart-visitors-profile"),
            optionsVisitorsProfile
          )
        chartVisitorsProfile.render()
    </script>
    @endpush