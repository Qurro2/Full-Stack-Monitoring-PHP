@extends('layouts.main')
@section('main')
<div id="sidebar" class="active">
    @include('administrator.partials.sidebar')
  </div>
  <div id="main" class="layout-navbar">
    @include('administrator.partials.navbar')
    <div id="main-content">
      <div class="page-heading">
        <h3>My Profile</h3>
        <section class="section">
          <div class="card">
            <div class="card-body">
              @if (\Session::has('success'))
              <div class="alert alert-light-success color-success">
                <i class="bi bi-check-circle"></i> {!! \Session::get('success') !!}
              </div>
              @endif
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a
                    class="nav-link active"
                    id="profile-tab"
                    data-bs-toggle="tab"
                    href="#profile"
                    role="tab"
                    aria-controls="profile"
                    aria-selected="false"
                    >Profile</a
                  >
                </li>
                <li class="nav-item" role="presentation">
                  <a
                    class="nav-link"
                    id="contact-tab"
                    data-bs-toggle="tab"
                    href="#password"
                    role="tab"
                    aria-controls="contact"
                    aria-selected="false"
                    >Ganti Password</a
                  >
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div
                  class="tab-pane fade show active"
                  id="profile"
                  role="tabpanel"
                  aria-labelledby="profile-tab"
                >
                 <div class="row mt-4">
                  <form action="/change" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="col-lg-6">
                    <div class="card-image text-center">
                      <img src="/{{ auth()->user()->photo }}" class="rounded-circle" alt="Cinque Terre" width="200px"> 
                      <!-- Auto resize image file uploader -->
                      <input type="file" name="photo" class="form-control mt-3 mb-3" accept="image/jpeg,image/png"  />
                      @error('photo')
                            <div class="invalid-feedback ps-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="basicInput">Nama Lengkap</label>
                      <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        value="{{ auth()->user()->name }}"
                      />
                    </div>
                    <div class="form-group">
                      <label for="basicInput">Email</label>
                      <input
                        type="text"
                        class="form-control"
                        id="email"
                        name="email"
                        value="{{ auth()->user()->email }}"
                        placeholder="Enter email"
                      />
                    </div>
                    <input type="hidden" name="level" value="{{ auth()->user()->level }}" id="">
                    <button type="submit" class="btn btn-outline-success">Change</button>
                  </div>
                  </form>
                 </div>
                </div>
                <div
                  class="tab-pane fade"
                  id="password"
                  role="tabpanel"
                  aria-labelledby="contact-tab"
                >
                <div class="row mt-4">
                  <form action="/change" method="POST" enctype="multipart/form-data">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="basicInput">Password Baru</label>
                      <input
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                      />
                    </div>
                    <button type="submit" class="btn btn-outline-success">Change</button>
                  </div>
                  </form>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>      
@endsection