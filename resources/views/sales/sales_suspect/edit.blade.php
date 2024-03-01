@extends('layouts.main') 
@section('main') 
<div id="sidebar" class="active"> 
    @include('sales.partials.sidebar') 
</div>
<div id="main" class="layout-navbar"> 
    @include('sales.partials.navbar') 
    <div id="main-content">
    <div class="page-heading">
      <section class="section">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Edit Data</h4>
          </div>
          <div class="card-body">
            <form class="form" action="/sales_suspect/{{ $suspect->id }}"  method="POST" data-parsley-validate>
              @csrf
              @method('put')
              <div class="row">
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="city-column" class="form-label"
                      >Provinsi</label
                    >
                    <input
                      type="text"
                      id="form-group"
                      class="form-control"
                      placeholder=""
                      name="provinsi"
                      value="{{ $suspect->provinsi }}"
                      data-parsley-required="true"
                    />
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="country-floating" class="form-label"
                      >Kab/Kota</label
                    >
                    <input
                      type="text"
                      id="form-group"
                      class="form-control"
                      placeholder=""
                      name="kabupaten"
                      value="{{ $suspect->kabupaten }}"
                      data-parsley-required="true"
                    />
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="company-column" class="form-label"
                      >Nama Kontak</label
                    >
                    <input
                      type="text"
                      id="form-group"
                      class="form-control"
                      placeholder=""
                      name="nama_kontak"
                      value="{{ $suspect->nama_kontak }}"
                    />
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="company-column" class="form-label"
                      >Jabatan</label
                    >
                    <input
                      type="text"
                      id="form-group"
                      class="form-control"
                      placeholder=""
                      name="jabatan"
                      value="{{ $suspect->jabatan }}"
                    />
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="company-column" class="form-label"
                      >Instansi</label
                    >
                    <input
                      type="text"
                      id="form-group"
                      class="form-control"
                      placeholder=""
                      name="instansi"
                      value="{{ $suspect->instansi }}"
                    />
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="company-column" class="form-label"
                      >Pusat</label
                    >
                    <input
                      type="text"
                      id="form-group"
                      class="form-control"
                      placeholder=""
                      name="pusat_pemerintahan"
                      value="{{ $suspect->pusat_pemerintahan }}"
                    />
                  </div>
                </div>
                <div class="col-lg-12 col-12 mt-5">
                  <p>Kontak</p>
                  
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="company-column" class="form-label"
                      >No HP 1</label
                    >
                    <input
                      type="number"
                      id="form-group"
                      class="form-control"
                      placeholder=""
                      name="nohp1"
                      value="{{ $suspect->nohp1 }}"
                    />
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="company-column" class="form-label"
                      >No HP 2</label
                    >
                    <input
                      type="number"
                      id="form-group"
                      class="form-control"
                      placeholder=""
                      name="nohp2"
                      value="{{ $suspect->nohp2 }}"
                    />
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="company-column" class="form-label"
                      >Email</label
                    >
                    <input
                      type="email"
                      id="form-group"
                      class="form-control"
                      placeholder=""
                      name="email"
                      {{ $suspect->email }}
                    />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 d-flex justify-content-end">
                  <a href="/sales_suspect" class="btn btn-outline-danger me-1 mb-1">Close</a>
                  <button
                    type="submit"
                    class="btn btn-outline-success me-1 mb-1"
                  >
                    Submit
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
         </div>
      </section>
    </div> 
    @endsection
