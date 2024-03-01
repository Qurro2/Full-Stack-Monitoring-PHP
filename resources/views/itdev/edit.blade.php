@extends('layouts.main') 
@section('main') 
<div id="sidebar" class="active"> 
    @include('itdev.partials.sidebar') 
</div>
<div id="main" class="layout-navbar"> 
    @include('itdev.partials.navbar') 
    <div id="main-content">
    <div class="page-heading">
      <section class="section">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Edit Data</h4>
          </div>
          <div class="card-body">
            <form class="form" action="/itdev/{{ $itedt->id }}"  method="POST" data-parsley-validate>
              @method('put')
                @csrf
                <div class="row">
                  <div class="col-md-6 col-12">
                    <div class="form-group mandatory">
                      <label for="first-name-column" class="form-label">Tgl.Kontrak</label>
                      <input type="date" id="first-name-column" class="form-control" name="tgl_kontrak" value="{{ $itedt->tgl_kontrak }}" data-parsley-required="true" />
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <fieldset class="form-group">
                      <label for="last-name-column" class="form-label">Produk</label>
                      <select class="form-select" name="produk" id="basicSelect"> 
                        <option value="{{ $itedt->produk }}">{{ $itedt->produk }}</option>
                        @foreach ($response as $item) 
                        <option value="{{ $item->nama_produk }}">{{ $item->nama_produk }}</option> 
                        @endforeach 
                      </select>
                    </fieldset>
                  </div>
                  <div class="col-md-6 col-12">
                    <fieldset class="form-group">
                      <label for="last-name-column" class="form-label">Work Type</label>
                      <select class="form-select" name="work_type" id="basicSelect"> 
                        <option value="1" @if ($itedt->work_type == '1') selected @endif>Project</option>
                        <option value="2" @if ($itedt->work_type == '2') selected @endif>Maintanance</option>
                        <option value="3" @if ($itedt->work_type == '3') selected @endif>Bugs</option>
                        <option value="4" @if ($itedt->work_type == '4') selected @endif>Change Request</option> 

                      </select>
                    </fieldset>
                  </div>
                  <div class="col-md-6 col-12">
                    <fieldset class="form-group">
                      <label for="last-name-column" class="form-label">Dev / Pic</label>
                      <select class="form-select" name="dev_pic" id="basicSelect"> 
                        <option value="{{ $itedt->dev_pic }}">{{ $itedt->dev_pic }}</option>
                        @foreach ($devpic as $item) <option value="{{ $item->nama }}">{{ $item->nama }}</option> @endforeach </select>
                    </fieldset>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="company-column" class="form-label">Kab / Kota</label>
                        <select class="choices form-select" name="kabupaten">
                            <option>{{ $itedt->kabupaten }}</option>
                            @foreach ($kabupaten2 as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                      </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <fieldset class="form-group">
                      <label for="last-name-column" class="form-label">Priority</label>
                      <select class="form-select" id="basicSelect" name="priority"> 
                        <option value="1" @if ($itedt->priority == '1') selected @endif>LOW</option>
                        <option value="2" @if ($itedt->priority == '2') selected @endif>MEDIUM</option>
                        <option value="3" @if ($itedt->priority == '3') selected @endif>HIGHT</option>
                        <option value="4" @if ($itedt->priority == '4') selected @endif>URGENT</option>
                        <option value="5" @if ($itedt->priority == '5') selected @endif>UPDATE</option> 
                        <option value="6" @if ($itedt->priority == '6') selected @endif>DONE</option> 
                       </select>
                    </fieldset>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="company-column" class="form-label">Bobot</label>
                      <input type="number" id="company-column" class="form-control" name="bobot" value="{{ $itedt->bobot }}" placeholder="Bobot" data-parsley-required="true" />
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <fieldset class="form-group">
                      <label for="last-name-column" class="form-label">Status</label>
                      <select class="form-select" id="basicSelect" name="status"> 
                        <option value="1" @if ($itedt->status == '1') selected @endif>Prepare</option>
                        <option value="2" @if ($itedt->status == '2') selected @endif>On Progress</option>
                        <option value="3" @if ($itedt->status == '3') selected @endif>To be Confirmed</option>
                        <option value="4" @if ($itedt->status == '4') selected @endif>Testing</option>
                        <option value="5" @if ($itedt->status == '5') selected @endif>Update</option> 
                        <option value="6" @if ($itedt->status == '6') selected @endif>Done</option> 
                       </select>
                    </fieldset>
                  </div>
                  <div class="col-md-12 col-12">
                    <div class="form-group">
                      <label for="company-column" class="form-label">Keterangan</label>
                      <div class="form-group with-title mb-3">
                        <textarea
                          class="form-control"
                          id="keterangan"
                          name="keterangan"
                          rows="3"
                          data-parsley-required="true"
                        >{{ $itedt->keterangan }}</textarea>
                        <label>Isi Keterangan</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" id="tambah" class="btn btn-outline-success me-2"> Submit </button>
                    <a href="/itdev/add" class="btn btn-outline-danger">Batal</a>
                  </div>
                </form>
            
          </div>
        </div>
         </div>
      </section>
    </div> 
    @endsection
