@extends('auth.layouts.auth')
@section('main')
<div class="container">
    <div class="row position-absolute top-50 start-50 translate-middle justify-content-center">
        <div class="col-lg-8 col-12 mt-5">
        <div class="card  Register">
            <div class="card-header">
              <h2 class="card-title text-center">REGISTER</h2>
            </div>
            <div class="card-content">
              <div class="card-body">
                <form class="form form-vertical" method="POST" action="/register">
                  @csrf
                  @method('post')
                  <div class="form-body">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group has-icon-left">
                          <label for="first-name-icon">Nama Lengkap</label>
                          <div class="position-relative">
                            <input
                              type="text"
                              class="form-control"
                              placeholder="Nama Lengkap"
                              id="nama_lengkap"
                              name="name"
                              data-parsley-required="true"
                            />
                            <div class="form-control-icon">
                              <i class="bi bi-person"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group has-icon-left">
                          <label for="email-id-icon">Email</label>
                          <div class="position-relative">
                            <input
                              type="email"
                              class="form-control"
                              placeholder="Email"
                              id="email-id-icon"
                              name="email"
                              data-parsley-required="true"
                            />
                            <div class="form-control-icon">
                              <i class="bi bi-envelope"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <input type="hidden" name="photo" value="storage/profile/profile_637da7bd58176.jpg">
                      <div class="col-12">
                        <div class="form-group has-icon-left">
                          <label for="email-id-icon">Role</label>
                          <div class="position-relative">
                            <select
                              type="select"
                              class="form-control"
                              placeholder="Role"
                              id="email-id-icon"
                              data-parsley-required="true"
                              name="level"
                            >
                            <option hidden></option>
                            <option value="admin">ADMIN</option>
                            <option value="itdev">IT DEV</option>
                            <option value="marketing">MARKETING</option>
                            <option value="brand">BRAND DESIGN</option>
                            <option value="rekapjasa">REKAP JASA</option>
                            
                                </select>
                            <div class="form-control-icon">
                              <i class="bi bi-stack"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group has-icon-left">
                          <label for="password-id-icon">Password</label>
                          <div class="position-relative">
                            <input
                              type="password"
                              class="form-control"
                              placeholder="Password"
                              id="password-id-icon"
                              name="password"
                              data-parsley-required="true"
                            />
                            <div class="form-control-icon">
                              <i class="bi bi-lock"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 d-flex justify-content-center mt-4">
                        <button
                          type="submit"
                          class="btn btn-primary me-1 mb-1"
                        >
                          REGISTER
                        </button>
                      </div>
                      <div class="row">
                        <div class="d-flex justify-content-center mt-4">
                          <p>Sudah Memiliki Akun ?<a href="/login"> Login</a> </p>
                        </div>
                      </div>
                      <div class="col-12 d-flex justify-content-center mt-3">
                        <p>PT. CITRACOM INTI PERSADA</p>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
@endsection