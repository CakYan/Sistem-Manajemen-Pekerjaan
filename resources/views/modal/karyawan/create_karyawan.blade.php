<!-- Modal Add Karyawan -->
<div class="modal fade" id="modal-add" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Karyawan</h5>
        <button type="button" class="btn-close" data-dismiss="modal"
          aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form action="/add_karyawan" method="POST">
          @csrf

          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">NIK <span
                class="required">:</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="first-name" required="required" name='nik'
                class="form-control" style="width: 100%">
              <span style="color:red">@error('nik'){{ $message }}@enderror</span>
              </div>
            </div>

            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="member">Nama<span
                  class="required">:</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" id="first-name" required="required" name='nama'
                  class="form-control ">
                <span style="color:red">@error('nama'){{ $message }}@enderror</span>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="member">Username<span
                    class="required">:</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="first-name" required="required" name='username'
                    class="form-control ">
                  <span style="color:red">@error('username'){{ $message }}@enderror</span>
                  </div>
                </div>

                <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="member">Alamat<span
                      class="required">:</span>
                  </label>
                  <div class="col-md-6 col-sm-6 ">
                    <input type="text" id="first-name" required="required" name='alamat'
                      class="form-control ">
                    <span style="color:red">@error('alamat'){{ $message }}@enderror</span>
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="member">Email<span
                        class="required">:</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" id="first-name" required="required" name='email'
                        class="form-control ">
                      <span style="color:red">@error('email'){{ $message }}@enderror</span>
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="member">No
                        Telpon<span class="required">:</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="first-name" required="required" name='no_telp'
                          class="form-control ">
                        <span style="color:red">@error('no_telp'){{ $message }}@enderror</span>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-proyek">Unit<span
                            class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-61 ">
                          <select class="form-control " name="unit_id" value="">
                            <option value="">--Pilih--</option>
                            @foreach ($units as $unit)
                              <option value="{{ $unit->id }}">{{ $unit->nama_unit }}
                              </option>
                            @endforeach
                          </select>
                          <span style="color:red">@error('unit'){{ $message }}@enderror</span>
                          </div>
                        </div>

                        <div class="item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align" for="member">Jabatan<span
                              class="required">:</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <select class="form-control " name="jabatan_id" value="">
                              <option value="">--Pilih--</option>
                              @foreach ($jabatans as $jabatan)
                                <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}
                                </option>
                              @endforeach
                            </select>
                            <span style="color:red">@error('jabatan_id'){{ $message }}@enderror</span>
                            </div>
                          </div>

                          <div class="modal-footer">
                            <div class="btn" style="float: right;">
                              <button type="submit" class="btn btn-primary btn-xs">Simpan</button>
                              <button class="btn btn-danger btn-xs" data-dismiss="modal">Kembali</button>
                            </div>
                          </div>
                      </div>
                    </div>
