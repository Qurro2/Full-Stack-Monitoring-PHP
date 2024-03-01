@extends('layouts.main')
@section('main')
<div id="sidebar" class="active">
    @include('brand.partials.sidebar')
  </div>
  <div id="main" class="layout-navbar">
    @include('brand.partials.navbar')
    <div id="main-content">
      <div class="page-heading">
        <h3>Brand & Design Statistik</h3>
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
                      Total Data
                    </h6>
                    <h6 class="font-extrabold mb-0">{{ $totalData->count() }}</h6>
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
                      <i class="iconly-boldProfile"><i class="bi bi-arrow-up-circle-fill"></i></i>
                    </div>
                  </div>
                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">On Progress</h6>
                    <h6 class="font-extrabold mb-0">{{ $totalOnP }}</h6>
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
                      <i class="iconly-boldAdd-User"><i class="bi bi-check-circle-fill"></i>
                    </i>
                    </div>
                  </div>
                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Project Done</h6>
                    <h6 class="font-extrabold mb-0">{{ $totalDone }}</h6>
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
              <h4 class="card-title">Brand & Design Monitoring List</h4>
            </div>
            <div class="card-body">
             <!-- table hover -->
             <div class="table-responsive">
              <table class="table" id="table1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kegiatan</th>
                    <th>Product</th>
                    <th>Sub.product</th>
                    <th>Status</th>
                    <th>JenisFile</th>
                    <th>Tgl.Pengerjaan</th>
                    <th>Tgl.Selesai</th>
                    <th>User</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                 
                      @foreach ($brand as $item)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->tahun_kegiatan }}</td>
                        <td>{{ $item->product }}</td>
                        <td>{{ $item->sub_product }}</td>
                        <td>
                          @switch($item->status)
                              @case(1)
                                  <button class="btn btn-sm btn-outline-danger">Prepare</button>
                                  @break
                              @case(2)
                                  <button class="btn btn-sm btn-outline-warning">On Progress</button>
                                  @break
                              @case(3)
                                  <button class="btn btn-sm btn-outline-info">To Be Confirmed</button>
                                  @break
                              @case(4)
                                  <button class="btn btn-sm btn-outline-success">Testing</button>
                                  @break
                              @case(5)
                                  <button class="btn btn-sm btn-outline-info">Update</button>
                                  @break
                              @case(6)
                                  <button class="btn btn-sm btn-outline-success">Done</button>
                                  @break
                              @default
                                  
                          @endswitch
                      </td>
                        <td>{{ $item->file }}</td>
                        <td>{{ $item->tgl_pengerjaan }}</td>
                        <td> @if ($item->status == '6') {{ $item->updated_at }} @else - @endif </td>
                        <td>{{ $item->user }}</td>
                        <td>
                          <button
                          type="button"
                          class="btn btn-outline-primary btn-sm block"
                          data-bs-toggle="modal"
                          data-bs-target="#modal{{ $item->id }}"
                        >
                          Detail
                        </button>
    
                        <!--Basic Modal -->
                        <div
                          class="modal fade text-left"
                          id="modal{{ $item->id }}"
                          tabindex="-1"
                          role="dialog"
                          aria-labelledby="myModalLabel1"
                          aria-hidden="true"
                        >
                          <div
                            class="modal-dialog modal-dialog-scrollable modal-dialog-centered"
                            role="document"
                          >
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel1">
                                  Detail Keterangan
                              </h5>
                                <button
                                  type="button"
                                  class="close rounded-pill"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                >
                                  <i data-feather="x"></i>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>
                                  {{$item->keterangan}}
                                </p>
                              </div>
                              <div class="modal-footer">
                                <button
                                  type="button"
                                  class="btn btn-outline-danger"
                                  data-bs-dismiss="modal"
                                >
                                  Close
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>    
                      </td>
                    </tr>
                      @endforeach
                  
                </tbody>
              </table>
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
          {{ $totalOnP }},{{ $totalDone }}
        ],
        labels: ["On Progress", "Done"],
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