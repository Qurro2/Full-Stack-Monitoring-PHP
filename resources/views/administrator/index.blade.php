@extends('layouts.main')
@section('main')
<div id="sidebar" class="active">
    @include('administrator.partials.sidebar')
  </div>
  <div id="main" class="layout-navbar">
    @include('administrator.partials.navbar')
    <div id="main-content">
      <div class="page-heading">
        <h3>Dashboard Statistik</h3>
        <div class="row">
          <div class="col-6 col-lg-4 col-md-6">
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
          <div class="col-6 col-lg-4 col-md-6">
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
          <div class="col-6 col-lg-4 col-md-6">
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
          <div class="col-12 col-lg-4 col-md-4">
            <div class="card">
              <div class="card-header">
                <h4>Grafik Chart IT Dev</h4>
              </div>
              <div class="card-body">
                <div id="chart-visitors-profile"></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="card">
              <div class="card-header">
                <h4>Grafik Chart Brand & Design</h4>
              </div>
              <div class="card-body">
                <div id="chart-brand"></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-md-4">
            <div class="card">
              <div class="card-header">
                <h4>Grafik Chart Sales</h4>
              </div>
              <div class="card-body">
                <div id="chart-sales"></div>
              </div>
            </div>
          </div>
        </div>
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
@push('sales')
<script>
  let optionsSales = {
        series: [
          {{ $totalDataSales }},{{ $totalNoHP }}
        ],
        labels: ["Database", "NoHp Terkumpul"],
        colors: ["#f5a105", "#db04db"],
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
    var chartSales2 = new ApexCharts(
        document.getElementById("chart-sales"),
        optionsSales
      )
      chartSales2.render()
</script>
@endpush
@push('brand')
<script>
  let optionsBrand = {
        series: [
          {{ $totalOnPBrand }},{{ $totalDoneBrand }}
        ],
        labels: ["On Progress", "Done"],
        colors: ["#0aeafa", "#17e610"],
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
    var chartBrand = new ApexCharts(
        document.getElementById("chart-brand"),
        optionsBrand
      )
      chartBrand.render()
</script>
@endpush