@extends('layouts.main')
@section('main')
<div id="sidebar" class="active">
    @include('administrator.partials.sidebar')
  </div>
  <div id="main" class="layout-navbar">
    @include('administrator.partials.navbar')
    <div id="main-content">
      <div class="page-heading">
        <h3>IT DEV Statistics</h3>
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
                      Total Project
                    </h6>
                    <h6 class="font-extrabold mb-0">{{ $totalProject->count() }}</h6>
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
                    <h6 class="text-muted font-semibold">Prepare</h6>
                    <h6 class="font-extrabold mb-0">{{ $totalPending }}</h6>
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
                    <div class="stats-icon green mb-2">
                      <i class="iconly-boldAdd-User"><i class="bi bi-check-circle-fill"></i></i>
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
        </div>
        <section class="section">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">IT Dev Monitoring List</h4>
            </div>
            <div class="card-body">
             <!-- table hover -->
             <div class="table-responsive">
                <table class="table" id="table1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kabupaten</th>
                    <th>Kontrak</th>
                    <th>Produk</th>
                    <th>WorkType</th>
                    <th>Progress</th>
                    <th>Selesai</th>
                    <th>Dev/Pic</th>
                    <th>Priority</th>
                    <th>Bobot</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                @forelse ($itdev as $item)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ strtolower($item->kabupaten) }}</td>
                      <td>{{ $item->tgl_kontrak }}</td>
                      <td>{{ $item->produk }}</td>
                      <td>
                          @switch($item->work_type)
                          @case(1)
                              <span class="badge bg-success">Project</span>
                              @break
                          @case(2)
                              <span class="badge bg-warning">Maintanance</span>
                              @break
                          @case(3)
                              <span class="badge bg-danger">Bugs</span>
                              @break
                          @case(4)
                              <span class="badge bg-success">Change Request</span>
                              @break
                          @default
                              
                      @endswitch
                      </td>
                      <td>
                      @switch($item->status)
                          @case(1)
                              <div class="progress progress-primary mb-4 mt-4">
                              <div
                                class="progress-bar progress-label"
                                role="progressbar"
                                style="width: 0%"
                                aria-valuenow="0"
                                aria-valuemin="0"
                                aria-valuemax="100"
                              ></div>
                              </div>
                              @break
                          @case(2)
                          <div class="progress progress-danger mb-4 mt-4">
                              <div
                                class="progress-bar progress-label"
                                role="progressbar"
                                style="width: 30%"
                                aria-valuenow="30"
                                aria-valuemin="0"
                                aria-valuemax="100"
                              ></div>
                              </div>
                              @break
                          @case(3)
                          <div class="progress progress-primary mb-4 mt-4">
                              <div
                                class="progress-bar progress-label"
                                role="progressbar"
                                style="width: 50%"
                                aria-valuenow="50"
                                aria-valuemin="0"
                                aria-valuemax="100"
                              ></div>
                              </div>
                              @break
                          @case(4)
                          <div class="progress progress-secondary mb-4 mt-4">
                              <div
                                class="progress-bar progress-label"
                                role="progressbar"
                                style="width: 75%"
                                aria-valuenow="75"
                                aria-valuemin="0"
                                aria-valuemax="100"
                              ></div>
                              </div>
                              @break
                          @case(5)
                          <div class="progress progress-warning mb-4 mt-4">
                              <div
                                class="progress-bar progress-label"
                                role="progressbar"
                                style="width: 80%"
                                aria-valuenow="80"
                                aria-valuemin="0"
                                aria-valuemax="100"
                              ></div>
                              </div>
                              @break
                          @case(6)
                          <div class="progress progress-info mb-4 mt-4">
                              <div
                                class="progress-bar progress-label"
                                role="progressbar"
                                style="width: 100%"
                                aria-valuenow="100"
                                aria-valuemin="0"
                                aria-valuemax="100"
                              ></div>
                              </div>
                              @break  
                          @default
                              
                      @endswitch
                      </td>
                      <td>@if ($item->status == '6')
                        {{ $item->updated_at }}
                    @else
                        -
                    @endif</td>
                      <td><span class="badge bg-success">{{ $item->dev_pic }}</span></td>
                      <td>
                          @switch($item->priority)
                          @case(1)
                              <span class="badge bg-info">LOW</span>
                              @break
                          @case(2)
                              <span class="badge bg-success">MEDIUM</span>
                              @break
                          @case(3)
                              <span class="badge bg-warning">HIGH</span>
                              @break
                          @case(4)
                              <span class="badge bg-danger">URGENT</span>
                              @break
                          @case(5)
                              <span class="badge bg-info">UPDATE</span>
                              @break
                          @case(6)
                              <span class="badge bg-success">DONE</span>
                              @break
                          @default
                      @endswitch
                      </td>
                      <td>{{ $item->bobot }}</td>
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