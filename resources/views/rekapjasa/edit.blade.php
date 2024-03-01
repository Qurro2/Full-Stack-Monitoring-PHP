@extends('layouts.main') 
@section('main') 
<div id="sidebar" class="active"> 
    @include('rekapjasa.partials.sidebar') 
</div>
<div id="main" class="layout-navbar"> 
    @include('rekapjasa.partials.navbar') 
    <div id="main-content">
    <div class="page-heading">
      <section class="section">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Edit Data</h4>
          </div>
          <div class="card-body">
            <form class="form" action="/rekapjasa/{{ $rekap->id }}" method="POST" data-parsley-validate>
              @csrf
              @method('put')
              <div class="row">
                <div class="col-md-6 col-12">
                  <div class="form-group mandatory">
                    <label for="company-name-column" class="form-label">Tahun kegiatan</label>
                    <select class="form-select" name="tahun_kegiatan" id="basicSelect">
                      <option value="{{ $rekap->tahun_kegiatan }}">{{ $rekap->tahun_kegiatan }}</option>
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
                  <div class="form-group">
                      <label for="company-column" class="form-label">Kab / Kota</label>
                      <select class="choices form-select" name="kabupaten">
                          <option value="{{ $rekap->kabupaten }}">{{ $rekap->kabupaten }}</option>
                          @foreach ($kabupaten2 as $item)
                          <option value="{{ $item->name }}">{{ $item->name }}</option>
                          @endforeach
                      </select>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group mandatory">
                    <label for="lokasi-column" class="form-label">Product</label>
                    <select class="form-select" name="product" id="basicSelect">
                      <option value="Laporan" @if ($rekap->product == 'Laporan') selected @endif>Laporan</option>
                      <option value="PETA" @if ($rekap->product == 'PETA') selected @endif>PETA</option>
                      <option value="JASA" @if ($rekap->product == 'JASA') selected @endif>JASA</option>
                      <option value="GIS" @if ($rekap->product == 'GIS') selected @endif>GIS</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group mandatory">
                    <label for="sub-product-floating" class="form-label">Sub.product</label>
                    <input type="text" id="sub-product-floating" class="form-control" name="sub_product" placeholder="Sub.product" value="{{ $rekap->sub_product }}" data-parsley-required="true" />
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group mandatory">
                    <label for="pengerjaan-column" class="form-label">Tanggal Pengerjaan</label>
                    <input type="date" id="pengerjaan-column" class="form-control" name="tgl_pengerjaan" placeholder="Pengerjaan" value="{{ $rekap->tgl_pengerjaan }}" data-parsley-required="true" />
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="pengerjaan-column" class="form-label">Tanggal Selesai</label>
                    <input type="date" id="pengerjaan-column" class="form-control" name="tgl_selesai" placeholder="Selesai" value="{{ $rekap->tgl_selesai }}"/>
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group mandatory">
                    <label for="user-column" class="form-label">User</label>
                    <input type="text" id="user-column" class="form-control" name="user" placeholder="User" value="{{ $rekap->user }}" data-parsley-required="true" />
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group mandatory">
                    <label for="user-column" class="form-label">Status</label>
                    <input type="text" id="user-column" class="form-control" name="status" placeholder="Status" value="{{ $rekap->status }}" data-parsley-required="true" />
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="user-column" class="form-label">Link File</label>
                    <input type="text" id="user-column" class="form-control" name="file" value="{{ $rekap->file }}" placeholder="File"/>
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label
                    for="catatan_hafiz"
                    class="form-label"
                    >Catatan Hafiz</label
                  >
                  <textarea
                    class="form-control"
                    id="catatan_hafiz"
                    name="catatan_hafiz"
                    rows="3"
                  >{{ $rekap->catatan_hafiz }}</textarea>
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label
                    for="catatan1"
                    class="form-label"
                    >Catatan RF</label
                  >
                  <textarea
                    class="form-control"
                    id="catatan1"
                    name="catatan_1"
                    rows="3"
                  >{{ $rekap->catatan_1 }}</textarea>
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label
                    for="catatan2"
                    class="form-label"
                    >Catatan EGGI</label
                  >
                  <textarea
                    class="form-control"
                    id="catatan2"
                    name="catatan_2"
                    rows="3"
                  >{{ $rekap->catatan_2 }}</textarea>
                  </div>
                </div>
              </div>
              <div class="col-12 d-flex justify-content-end">
                <button type="submit" id="tambah" class="btn btn-outline-success me-2"> Submit </button>
                <a href="/rekapjasa/add" class="btn btn-outline-danger">Batal</a>
              </div>
            </form>
          </div>
        </div>

         </div>
      </section>
    </div> 
    @endsection
