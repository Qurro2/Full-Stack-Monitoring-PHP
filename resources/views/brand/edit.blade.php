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
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Edit Data</h4>
          </div>
          <div class="card-body">
            <form class="form" action="/brand/{{ $brand->id }}" method="POST" data-parsley-validate>
              @csrf
              @method('put')
              <div class="row">
                <div class="col-md-6 col-12">
                  <div class="form-group mandatory">
                    <label for="company-name-column" class="form-label">Tahun kegiatan</label>
                    <select class="form-select" name="tahun_kegiatan" id="basicSelect">
                      <option>{{ $brand->tahun_kegiatan }}</option>
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
                    <input type="text" id="file-column" class="form-control" value="{{ $brand->file }}" placeholder="File" name="file" data-parsley-required="true" />
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
                      value="{{ $brand->product }}"
                      data-parsley-required="true"
                    />
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group mandatory">
                    <label for="sub-product-floating" class="form-label">Sub.product</label>
                    <input type="text" id="sub-product-floating" class="form-control" name="sub_product" value="{{ $brand->sub_product }}" placeholder="Sub.product" data-parsley-required="true" />
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group mandatory">
                    <label for="pengerjaan-column" class="form-label">Tanggal Pengerjaan</label>
                    <input type="date" id="pengerjaan-column" class="form-control" name="tgl_pengerjaan" value="{{ $brand->tgl_pengerjaan }}" placeholder="Pengerjaan" data-parsley-required="true" />
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group mandatory">
                    <label for="selesai-column" class="form-label">Tangal Selesai</label>
                    <input type="date" id="selesai-column" class="form-control" name="tgl_selesai" value="{{ $brand->tgl_selesai }}" data-parsley-required="true" />
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group mandatory">
                    <label for="user-column" class="form-label">User</label>
                    <input type="text" id="user-column" class="form-control" name="user" placeholder="User" value="{{ $brand->user }}" data-parsley-required="true" />
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
                    <option value="1" @if ($brand->status == '1') selected @endif>Prepare</option>
                    <option value="2" @if ($brand->status == '1') selected @endif>On Progres</option>
                    <option value="3" @if ($brand->status == '1') selected @endif>To Be Confirmed</option>
                    <option value="4" @if ($brand->status == '1') selected @endif>Testing</option>
                    <option value="5" @if ($brand->status == '1') selected @endif>Update</option>
                    <option value="6" @if ($brand->status == '1') selected @endif> Done</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label
                    for="catatan1"
                    class="form-label"
                    >Keterangan</label
                  >
                  <textarea
                    class="form-control"
                    id="catatan1"
                    name="keterangan"
                    rows="3"
                  >{{ $brand->keterangan }}</textarea>
                  </div>
                </div>
              </div>
              <div class="col-12 d-flex justify-content-end">
                <button type="submit" id="tambah" class="btn btn-outline-success me-2"> Submit </button>
                <a href="/brand/add" class="btn btn-outline-danger">Batal</a>
              </div>
            </form>
          </div>
        </div>

         </div>
      </section>
    </div> 
    @endsection
