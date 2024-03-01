@extends('layouts.main') 
@section('main') 
<div id="sidebar" class="active"> 
  @include('brand.partials.sidebar') 
</div>
<div id="main" class="layout-navbar"> 
  @include('brand.partials.navbar') 
  <div id="main-content">
    <div class="page-heading">
      <section class="section">
        @if (\Session::has('success'))
        <div class="alert alert-light-success color-success">
          <i class="bi bi-check-circle"></i> {!! \Session::get('success') !!}
        </div>
        @endif
        <!-- Button trigger for large size modal -->
        <button type="button" class="btn btn-outline-warning mb-3" data-bs-toggle="modal" data-bs-target="#large"> TAMBAH DATA </button>
        <!--large size Modal -->
        <div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17"> Brand & Design </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <i data-feather="x"></i>
                </button>
              </div>
              <div class="modal-body">
                <section id="multiple-column-form">
                  <div class="row match-height">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-content">
                          <div class="card-body">
                            <form class="form" action="/brand/add-itdev" method="POST" data-parsley-validate>
                              @csrf
                              <div class="row">
                                <div class="col-md-6 col-12">
                                  <div class="form-group mandatory">
                                    <label for="company-name-column" class="form-label">Tahun kegiatan</label>
                                    <select class="form-select" name="tahun_kegiatan" id="basicSelect">
                                      <option hidden></option>
                                      <option value="2010">2010</option>
                                      <option value="2011">2011</option>
                                      <option value="2012">2012</option>
                                      <option value="2013">2013</option>
                                      <option value="2014">2014</option>
                                      <option value="2015">2015</option>
                                      <option value="2016">2016</option>
                                      <option value="2017">2017</option>
                                      <option value="2018">2018</option>
                                      <option value="2019">2019</option>
                                      <option value="2020">2020</option>
                                      <option value="2021">2021</option>
                                      <option value="2022">2022</option>
                                      <option value="2023">2023</option>
                                      <option value="2024">2024</option>
                                      <option value="2025">2025</option>
                                      <option value="2026">2026</option>
                                      <option value="2027">2027</option>
                                      <option value="2028">2028</option>
                                      <option value="2029">2029</option>
                                      <option value="2030">2030</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <div class="form-group mandatory">
                                    <label for="file-column" class="form-label">JENIS FILE</label>
                                    <input type="text" id="file-column" class="form-control" placeholder="File" name="file" data-parsley-required="true" />
                                  </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <div class="form-group">
                                    <label for="city-column" class="form-label"
                                      >Product</label
                                    >
                                    <input
                                      type="text"
                                      id="product"
                                      class="form-control"
                                      placeholder="Product"
                                      name="product"
                                      data-parsley-required="true"
                                    />
                                  </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <div class="form-group mandatory">
                                    <label for="sub-product-floating" class="form-label">Sub.product</label>
                                    <input type="text" id="sub-product-floating" class="form-control" name="sub_product" placeholder="Sub.product" data-parsley-required="true" />
                                  </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <div class="form-group mandatory">
                                    <label for="pengerjaan-column" class="form-label">Tanggal Pengerjaan</label>
                                    <input type="date" id="pengerjaan-column" class="form-control" name="tgl_pengerjaan" placeholder="Pengerjaan" data-parsley-required="true" />
                                  </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <div class="form-group mandatory">
                                    <label for="selesai-column" class="form-label">Tangal Selesai</label>
                                    <input type="date" id="selesai-column" class="form-control" name="tgl_selesai" data-parsley-required="true" />
                                  </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <div class="form-group mandatory">
                                    <label for="user-column" class="form-label">User</label>
                                    <input type="text" id="user-column" class="form-control" name="user" placeholder="User" data-parsley-required="true" />
                                  </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <div class="form-group">
                                    <label for="company-column" class="form-label"
                                      >Status</label
                                    >
                                    <select
                                      type="text"
                                      id="form-select"
                                      class="form-select"
                                      placeholder="Status"
                                      data-parsley-required="true"
                                      name="status"
                                    >
                                    <option hidden></option>
                                    <option value="1">Prepare</option>
                                    <option value="2">On Progres</option>
                                    <option value="3">To Be Confirmed</option>
                                    <option value="4">Testing</option>
                                    <option value="5">Update</option>
                                    <option value="6">Done</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-6 col-12">
                                  <div class="form-group with-title mb-3">
                                    <textarea
                                      class="form-control"
                                      id="exampleFormControlTextarea1"
                                      rows="3"
                                      name="keterangan"
                                    ></textarea>
                                    <label>Keterangan</label>
                                  </div>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </section>
              </div>
              <div class="modal-footer">
                <div class="row">
                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-1 mb-1"> Submit </button>
                    <button type="button" class="btn note-btn-primary me-1 mb-1" data-bs-dismiss="modal">
                      <i class="bx bx-x d-block d-sm-none"></i>
                      <span class="d-none d-sm-block">Close</span>
                    </button>
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">BRAND & DESIGN</h4>
          </div>
          
          <div class="card-body">
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
                    <th>Pengerjaan</th>
                    <th>Selesai</th>
                    <th>User</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
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
                        <td>{{ $item->tgl_selesai }}</td>
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
                      <td>
                        <div
                        class="btn-group mb-3 btn-group-sm"
                        role="group"
                        aria-label="Basic example"
                      >
                      <a href="/brand/{{ $item->id }}/edit" class="btn icon btn-primary"><i class="bi bi-pencil"></i
                        ></a>
                        <form action="/brand/{{ $item->id }}" method="POST">
                          @csrf
                          @method('delete')
                          <button type="submit" id="tambah" class="btn btn-danger">
                            <i class="bi bi-trash"></i>
                        </button>
                        </form>
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