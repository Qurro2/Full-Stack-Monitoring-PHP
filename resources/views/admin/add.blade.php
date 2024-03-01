@extends('layouts.main')
@section('main')
    <div id="sidebar" class="active">
        @include('admin.partials.sidebar')
    </div>
    <div id="main" class="layout-navbar">
        @include('admin.partials.navbar')
        <div id="main-content">
            <div class="page-heading">
                <section class="section">
                    @if (\Session::has('success'))
                        <div class="alert alert-light-success color-success">
                            <i class="bi bi-check-circle"></i> {!! \Session::get('success') !!}
                        </div>
                    @endif
                    <!-- Button trigger for large size modal -->
                    <button type="button" class="btn btn-outline-success mb-3" data-bs-toggle="modal"
                        data-bs-target="#large"> TAMBAH DATA </button>
                    <!--large size Modal -->
                    <div class="modal fade text-left" id="large" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel17" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel17"> TAMBAH DATA </h4>
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
                                                            <form class="form" method="POST" action="/admin/add-itdev"
                                                                data-parsley-validate>
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-12 col-12">
                                                                        <div class="form-group mandatory">
                                                                            <label for="company-name-column" class="form-label">Tahun kegiatan</label>
                                                                            <select class="form-select" name="tahun" id="basicSelect">
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
                                                                    <div class="col-md-12 col-12">
                                                                        <div class="form-group mandatory">
                                                                            <label for="wilayah-column"
                                                                                class="form-label">Nama Paket Pekerjaan</label>
                                                                            <textarea name="nama_paket" class="form-control" id="nama_paket"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-12">
                                                                        <div class="form-group">
                                                                            <label for="Jenis-Pengadaan-column"
                                                                                class="form-label">Sub/Bidang</label>
                                                                            <input type="text" id="last-name-column"
                                                                                class="form-control" name="bidang"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-12">
                                                                        <div class="form-group">
                                                                            <label for="city-column"
                                                                                class="form-label">Ringkasan Lingkup Pekerjaan</label>
                                                                                <textarea name="ringkasan" class="form-control" id="ringkasan"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-12">
                                                                        <div class="form-group">
                                                                            <label for="company-column" class="form-label">Kab / Kota</label>
                                                                            <select class="choices form-select" name="kabupaten">
                                                                                @foreach ($kabupaten2 as $item)
                                                                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-12 col-12">
                                                                        <div class="form-group">
                                                                            <label for="company-column" class="form-label">Badan</label>
                                                                            <select class="choices form-select" name="nama_badan">
                                                                                @foreach ($badanlist as $item)
                                                                                <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                          </div>
                                                                      </div>
                                                                    <div class="col-md-12 col-12">
                                                                        <div class="form-group">
                                                                            <label for="Pihak-pengadaan-column"
                                                                                class="form-label">Alamat</label>
                                                                            <input type="text"
                                                                                id="alamat_telepon"
                                                                                class="form-control"
                                                                                name="alamat_telepon"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-12">
                                                                        <div class="form-group">
                                                                            <label for="no_kontrak"
                                                                                class="form-label">No Kontrak</label>
                                                                            <input type="text" id="no_kontrak"
                                                                                class="form-control" name="no_kontrak" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-12">
                                                                        <div class="form-group">
                                                                            <label for="Pptk-column"
                                                                                class="form-label">Tanggal Kontrak</label>
                                                                            <input type="date" name="tgl_kontrak" class="form-control" id="tgl_kontrak">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-12">
                                                                        <div class="form-group">
                                                                            <label for="Pptk-column"
                                                                                class="form-label">Nilai Kontrak</label>
                                                                            <input type="number" class="form-control" name="nilai_kontrak" id="nilai_kontrak">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-12">
                                                                        <div class="form-group  ">
                                                                            <label for="Pptk-column"
                                                                                class="form-label">Status Penyediaan</label>
                                                                            <input type="text" name="status_penyediaan" class="form-control" id="status_penyediaan">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-12">
                                                                        <div class="form-group">
                                                                            <label for="Pptk-column"
                                                                                class="form-label">Tgl Akhir
                                                                                Kontrak</label>
                                                                            <input type="date" class="form-control" name="tgl_akhir_kontrak" id="tgl_akhir_kontrak">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 col-12">
                                                                        <div class="form-group">
                                                                            <label for="Pptk-column" class="form-label">Batas Akhir
                                                                                Serah Terima</label>
                                                                            <input type="date" name="bast" id="bast" class="form-control">
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
                                            <button type="button" class="btn note-btn-primary me-1 mb-1"
                                                data-bs-dismiss="modal">
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
                            <h4 class="card-title">ADMIN</h4>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="table1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tahun</th>
                                            <th>Paket.Pekerjaan</th>
                                            <th>SUB/BIDANG</th>
                                            <th>Ringkasan</th>
                                            <th>KOTA/KAB</th>
                                            <th>Badan</th>
                                            <th>Alamat</th>
                                            <th>No.Kontrak</th>
                                            <th>Tgl.Kontrak</th>
                                            <th>Nilai.Kontrak</th>
                                            <th>SPDPP</th>
                                            <th>Tgl.Akhir.Kontrak</th>
                                            <th>BAST</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admin as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->tahun }}</td>
                                                
                                                <td>
                                                    <button type="button" class="btn btn-outline-primary btn-sm block"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modal{{ $item->id }}">
                                                        Detail
                                                    </button>

                                                    <!--Basic Modal -->
                                                    <div class="modal fade text-left" id="modal{{ $item->id }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="myModalLabel1">
                                                                        Nama Paket
                                                                    </h5>
                                                                    <button type="button" class="close rounded-pill"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                        <i data-feather="x"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>
                                                                        {{ $item->nama_paket }}
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-outline-danger"
                                                                        data-bs-dismiss="modal">
                                                                        Close
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $item->bidang }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-primary btn-sm block"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modalRingkasan{{ $item->id }}">
                                                        Detail
                                                    </button>

                                                    <!--Basic Modal -->
                                                    <div class="modal fade text-left" id="modalRingkasan{{ $item->id }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="myModalLabel1">
                                                                        Detail Ringkasan
                                                                    </h5>
                                                                    <button type="button" class="close rounded-pill"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                        <i data-feather="x"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>
                                                                        {{ $item->ringkasan }}
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-outline-danger"
                                                                        data-bs-dismiss="modal">
                                                                        Close
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $item->kabupaten }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-primary btn-sm block"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modalBadan{{ $item->id }}">
                                                        Detail
                                                    </button>

                                                    <!--Basic Modal -->
                                                    <div class="modal fade text-left" id="modalBadan{{ $item->id }}"
                                                        tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="myModalLabel1">
                                                                        Detail Nama Badan
                                                                    </h5>
                                                                    <button type="button" class="close rounded-pill"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                        <i data-feather="x"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>
                                                                        {{ $item->nama_badan }}
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-outline-danger"
                                                                        data-bs-dismiss="modal">
                                                                        Close
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $item->alamat_telepon }}</td>
                                                <td>{{ $item->no_kontrak }}</td>
                                                <td>{{ $item->tgl_kontrak }}</td>
                                                <td>{{ $item->nilai_kontrak }}</td>
                                                <td>{{ $item->status_penyediaan }}</td>
                                                <td>{{ $item->tgl_akhir_kontrak }}</td>
                                                <td>{{ $item->bast }}</td>
                                                <td>
                                                    <div
                                                    class="btn-group mb-3 btn-group-sm"
                                                    role="group"
                                                    aria-label="Basic example"
                                                  >
                                                  <a href="/admin/{{ $item->id }}/edit" class="btn icon btn-primary"><i class="bi bi-pencil"></i
                                                    ></a>
                                                    <form action="/admin/{{ $item->id }}" method="POST">
                                                      @csrf
                                                      @method('delete')
                                                      <button type="submit" id="tambah" class="btn btn-danger">
                                                        <i class="bi bi-trash"></i
                                                            >
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
