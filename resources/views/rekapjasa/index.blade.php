@extends('layouts.main')
@section('main')
<div id="sidebar" class="active">
    @include('rekapjasa.partials.sidebar')
  </div>
  <div id="main" class="layout-navbar">
    @include('rekapjasa.partials.navbar')
    <div id="main-content">
      <div class="page-heading">
        <h3>Jasa Statistik</h3>
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
                    <div class="stats-icon red mb-2">
                      <i class="iconly-boldProfile"><i class="bi bi-x-circle-fill"></i></i>
                    </div>
                  </div>
                  <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Not Aproved</h6>
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
                    <h6 class="text-muted font-semibold">Project Aproved</h6>
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
              <h4 class="card-title">Jasa Monitoring List</h4>
            </div>
            <div class="card-body">
             <!-- table hover -->
             <div class="table-responsive">
              <table class="table" id="table1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kegiatan</th>
                    <td>Kab/Kota</td>
                    <th>Product</th>
                    <th>Sub.product</th>
                    <th>Status</th>
                    <th>Pengerjaan</th>
                    <th>Selesai</th>
                    <th>User</th>
                    <th>Catatan.Hafiz</th>
                    <th>Catatan.RF</th>
                    <th>Catatan.EGGI</th>
                    <th>File</th>
                    <th>Aprove Status</th>
                  </tr>
                </thead>
                <tbody> 
                  @foreach ($rekap as $item) 
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->tahun_kegiatan }}</td>
                    <td>{{ $item->kabupaten }}</td>
                    <td>{{ $item->product }}</td>
                    <td>{{ $item->sub_product }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->tgl_pengerjaan }}</td>
                    <td>{{ $item->tgl_selesai }}</td>
                    <td>{{ $item->user }}</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary btn-sm block" data-bs-toggle="modal" data-bs-target="#modalCTT2{{ $item->id }}"> Detail </button>
                      <!--Basic Modal -->
                      <div class="modal fade text-left" id="modalCTT2{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="myModalLabel1"> Detail Catatan </h5>
                              <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>
                                {{$item->catatan_hafiz}}
                              </p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"> Close </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <button type="button" class="btn btn-outline-primary btn-sm block" data-bs-toggle="modal" data-bs-target="#modalM{{ $item->id }}"> Detail </button>
                      <!--Basic Modal -->
                      <div class="modal fade text-left" id="modalM{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="myModalLabel1"> Detail Catatan </h5>
                              <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>
                                {{$item->catatan_1}}
                              </p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"> Close </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <button type="button" class="btn btn-outline-primary btn-sm block" data-bs-toggle="modal" data-bs-target="#modal{{ $item->id }}"> Detail </button>
                      <!--Basic Modal -->
                      <div class="modal fade text-left" id="modal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="myModalLabel1"> Detail Catatan </h5>
                              <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>
                                {{$item->catatan_2}}
                              </p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"> Close </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td> @if ($item->file == NULL) Not Found @else <button type="button" class="btn btn-outline-warning btn-sm block" data-bs-toggle="modal" data-bs-target="#modalVisit{{ $item->id }}"> Visit </button>
                      <div class="modal fade text-left" id="modalVisit{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="myModalLabel1"> Link File </h5>
                              <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>
                                <a href="{{ $item->file }}" class="btn btn-outline-warning" target="_blank">Visit</a>
                              </p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"> Close </button>
                            </div>
                          </div>
                        </div>
                      </div> @endif
                    </td>
                    <td>
                      @if ($item->aprove_status == '0')
                      <span class="badge bg-danger">Not Aprove</span>
                      @else
                      <span class="badge bg-success">Aprove</span>
                      @endif
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