@extends('layouts.main') 
@section('main') 
<div id="sidebar" class="active"> 
    @include('itdev.partials.sidebar') 
</div>
<div id="main" class="layout-navbar"> 
  @include('itdev.partials.navbar')  
    <div id="main-content">
    <div class="page-heading">
      <div class="page-title">
        <div class="row mb-3">
          <div class="col-12 col-md-6 order-md-1 order-last">
            <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"> Tambah Data </button>
          </div>
        </div>
        {{-- Modal Data IT Dev --}}
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle"> IT Dev </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <i data-feather="x"></i>
                </button>
              </div>
              <div class="modal-body">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <form class="form" action="/itdev/add-itdev"  method="POST" data-parsley-validate>
                        @csrf
                        <div class="row">
                          <div class="col-md-6 col-12">
                            <div class="form-group mandatory">
                              <label for="first-name-column" class="form-label">Tgl.Kontrak</label>
                              <input type="date" id="first-name-column" class="form-control" name="tgl_kontrak" data-parsley-required="true" />
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <fieldset class="form-group">
                              <label for="last-name-column" class="form-label">Produk</label>
                              <select class="form-select" name="produk" id="basicSelect"> @foreach ($response as $item) <option value="{{ $item->nama_produk }}">{{ $item->nama_produk }}</option> @endforeach </select>
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-12">
                            <fieldset class="form-group">
                              <label for="last-name-column" class="form-label">Work Type</label>
                              <select class="form-select" name="work_type" id="basicSelect"> 
                               
                                <option value="1">Project</option>
                                <option value="2">Maintanance</option>
                                <option value="3">Bugs</option>
                                <option value="4">Change Request</option> 

                              </select>
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-12">
                            <fieldset class="form-group">
                              <label for="last-name-column" class="form-label">Dev / Pic</label>
                              <select class="form-select" name="dev_pic" id="basicSelect"> @foreach ($devpic as $item) <option value="{{ $item->nama }}">{{ $item->nama }}</option> @endforeach </select>
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="form-group mandatory">
                              <label for="first-name-column" class="form-label">Tgl.Selesai</label>
                              <input type="date" id="first-name-column" class="form-control" name="tgl_selesai" data-parsley-required="true" />
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="company-column" class="form-label">Kab / Kota</label>
                                <select class="choices form-select" name="kabupaten">
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
                                <option value="1">LOW</option>
                                <option value="2">MEDIUM</option>
                                <option value="3">HIGHT</option>
                                <option value="4">URGENT</option>
                                <option value="5">UPDATE</option> 
                                <option value="6">DONE</option> 
                               </select>
                            </fieldset>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="form-group">
                              <label for="company-column" class="form-label">Bobot</label>
                              <input type="number" id="company-column" class="form-control" name="bobot" placeholder="Bobot" data-parsley-required="true" />
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <fieldset class="form-group">
                              <label for="last-name-column" class="form-label">Status</label>
                              <select class="form-select" id="basicSelect" name="status"> 
                                <option value="1">Prepare</option>
                                <option value="2">On Progress</option>
                                <option value="3">To be Confirmed</option>
                                <option value="4">Testing</option>
                                <option value="5">Update</option> 
                                <option value="6">Done</option> 
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
                                ></textarea>
                                <label>Isi Keterangan</label>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 d-flex justify-content-end">
                            <button type="submit" id="tambah" class="btn btn-primary me-1 mb-1"> Submit </button>
                            <button type="button" class="btn btn-light-secondary me-1 mb-1" data-bs-dismiss="modal">
                              <i class="bx bx-x d-block d-sm-none"></i>
                              <span class="d-none d-sm-block">Close</span>
                            </button>
                          </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- Tutup Modal --}}
      </div>
      <section class="section">
        @if (\Session::has('success'))
        <div class="alert alert-light-success color-success">
          <i class="bi bi-check-circle"></i> {!! \Session::get('success') !!}
        </div>
        @endif
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Data Monitoring IT Dev</h4>
          </div>
          <div class="card-body">
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
                    <th>Keterangan</th>
                    <th>Aksi</th>
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
                          <a href="/itdev/{{ $item->id }}/edit" class="btn icon btn-primary"><i class="bi bi-pencil"></i
                            ></a>
                            <form action="/itdev/{{ $item->id }}" method="POST">
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
                  @empty
                      <p>Data Masih Kosong !!!</p>
                  @endforelse  
                  
                  
                </tbody>
              </table>
            </div>
            </div>
        </div>
         </div>
      </section>
    </div> 
    @endsection
