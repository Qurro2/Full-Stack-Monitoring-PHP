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
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Edit Data</h4>
          </div>
          <div class="card-body">
            <form class="form" action="/admin/{{ $admin->id }}" method="POST" data-parsley-validate>
              @csrf
              @method('put')
              <div class="row">
                <div class="col-md-6 col-12">
                    <div class="form-group mandatory">
                        <label for="company-name-column" class="form-label">Tahun kegiatan</label>
                        <select class="form-select" name="tahun" id="basicSelect">
                          <option value="{{ $admin->tahun }}">{{ $admin->tahun }}</option>
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
                        <label for="wilayah-column"
                            class="form-label">Nama Paket Pekerjaan</label>
                        <textarea name="nama_paket" class="form-control" id="nama_paket">{{ $admin->nama_paket }}</textarea>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="Jenis-Pengadaan-column"
                            class="form-label">Sub/Bidang</label>
                        <input type="text" id="last-name-column"
                            class="form-control" value="{{ $admin->bidang }}" name="bidang"/>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="city-column"
                            class="form-label">Ringkasan Lingkup Pekerjaan</label>
                            <textarea name="ringkasan" class="form-control" id="ringkasan">{{ $admin->ringkasan }}</textarea>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="company-column" class="form-label">Kab / Kota</label>
                        <select class="choices form-select" name="kabupaten">
                            <option value="{{ $admin->kabupaten }}">{{ $admin->kabupaten }}</option>
                            @foreach ($kabupaten2 as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                      </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="company-column" class="form-label">Badan</label>
                        <select class="choices form-select" name="nama_badan">
                          <option value="{{ $admin->nama_badan }}">{{ $admin->nama_badan }}</option>
                            @foreach ($badanlist as $item)
                            <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                            @endforeach
                        </select>
                      </div>
                  </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="Pihak-pengadaan-column"
                            class="form-label">Alamat</label>
                        <input type="text"
                            id="alamat_telepon"
                            class="form-control"
                            name="alamat_telepon"
                            value="{{ $admin->alamat_telepon }}"
                            />
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="no_kontrak"
                            class="form-label">No Kontrak</label>
                        <input type="text" id="no_kontrak"
                            class="form-control" name="no_kontrak" value="{{ $admin->no_kontrak }}" />
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="Pptk-column"
                            class="form-label">Tanggal Kontrak</label>
                        <input type="date" name="tgl_kontrak" class="form-control" value="{{ $admin->tgl_kontrak }}" id="tgl_kontrak">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="Pptk-column"
                            class="form-label">Nilai Kontrak</label>
                        <input type="number" class="form-control" name="nilai_kontrak" id="nilai_kontrak" value="{{ $admin->nilai_kontrak }}">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group  ">
                        <label for="Pptk-column"
                            class="form-label">Status Penyediaan</label>
                        <input type="text" name="status_penyediaan" class="form-control" id="status_penyediaan" value="{{ $admin->status_penyediaan }}">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="Pptk-column"
                            class="form-label">Tgl Akhir
                            Kontrak</label>
                        <input type="date" class="form-control" name="tgl_akhir_kontrak" id="tgl_akhir_kontrak" value="{{ $admin->tgl_akhir_kontrak }}">
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="Pptk-column" class="form-label">Batas Akhir
                            Serah Terima</label>
                        <input type="date" name="bast" id="bast" class="form-control" value="{{ $admin->bast }}">
                    </div>
                </div>
            </div>
              <div class="col-12 d-flex justify-content-end">
                <button type="submit" id="tambah" class="btn btn-outline-success me-2"> Submit </button>
                <a href="/admin/add" class="btn btn-outline-danger">Batal</a>
              </div>
            </form>
          </div>
        </div>

         </div>
      </section>
    </div> 
    @endsection
