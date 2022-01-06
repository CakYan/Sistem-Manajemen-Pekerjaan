  <!-- Modal Edit Karyawan -->
  @foreach ($karyawans as $k)
    <div class="modal fade" id="modal-edit{{ $k->id }}" tabindex="-1"
      aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-dismiss="modal"
              aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <form action="{{ route('update_karyawan') }}" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{ $k->id }}">

              <div class="form-group  ">
                <label class="control-label col-sm-2 " for="nik">NIK</label>
                <div class="col-sm-10 mb-1">
                  <input type="number" name="nik" class="form-control" id="nik"
                    value="{{ $k->nik }}"><span
                    style="color:red">@error('nik'){{ $message }}@enderror</span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-2" for="nama">Nama</label>
                  <div class="col-sm-10 mb-1">
                    <input type="text" name="nama" class="form-control" id="nama"
                      value="{{ $k->nama }}"><span
                      style="color:red">@error('nama'){{ $message }}@enderror</span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-2" for="nama">Username</label>
                    <div class="col-sm-10 mb-1">
                      <input type="text" name="username" class="form-control" id="nama"
                        value="{{ $k->username }}"><span
                        style="color:red">@error('username'){{ $message }}@enderror</span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="unit">Unit</label>
                      <div class="col-sm-10 mb-1">
                        <input type="text" name="unit" class="form-control" id="unit"
                          value="{{ $k->unit }}"><span
                          style="color:red">@error('unit'){{ $message }}@enderror</span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-2" for="jabatan">Jabatan</label>
                        <div class="col-sm-10 mb-1">
                          <select class="form-control " name="jabatan_id"
                            value="{{ $k->jabatan->jabatan }}">
                            <option value="{{ $k->jabatan->id }}">{{ $k->jabatan->nama_jabatan }}
                            </option>
                            @foreach ($jabatans as $jabatan)
                              <option value="{{ $jabatan->id }}">
                                {{ $jabatan->nama_jabatan }}
                              </option>
                            @endforeach
                          </select>
                          <span style="color:red">@error('jabatan_id'){{ $message }}@enderror</span>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label col-sm-2" for="alamat">Alamat</label>
                          <div class="col-sm-10 mb-1">
                            <input type="text" name="alamat" class="form-control" id="alamat"
                              value="{{ $k->alamat }}"><span
                              style="color:red">@error('alamat'){{ $message }}@enderror</span>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email</label>
                            <div class="col-sm-10 mb-1">
                              <input type="text" name="email" class="form-control" id="email"
                                value="{{ $k->email }}"><span
                                style="color:red">@error('email'){{ $message }}@enderror</span>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-sm-2" for="no_telp">No Telepon</label>
                              <div class="col-sm-10 mb-1">
                                <input type="text" name="no_telp" class="form-control" id="no_telp"
                                  value="{{ $k->no_telp }}"><span
                                  style="color:red">@error('no_telp'){{ $message }}@enderror</span>
                                </div>
                              </div>

                              <div class="btn" style="float: right;">
                                <button type="submit" class="btn btn-primary btn-xs">Simpan</button>
                                <button class="btn btn-danger btn-xs" data-dismiss="modal">Kembali</button></a>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            {{-- <div class="btn" style="float: right;">
                            <button type="submit" class="btn btn-primary btn-xs">Simpan</button>
                            <button class="btn btn-danger btn-xs" data-dismiss="modal">Kembali</button></a>
                          </div> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
