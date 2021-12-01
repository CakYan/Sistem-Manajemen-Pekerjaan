<!-- Modal Card -->
@foreach ($proyeks as $item)

  <div class="modal fade" id="modal-card{{ $item->id }}" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Proyek</h5>
          <button type="button" class="btn-close" data-dismiss="modal"
            aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form action="{{ route('update_proyek') }}" method="POST" id="demo-form2">
            @csrf
            <input type="hidden" name="id" value="{{ $item->id }}">
            <div class="item form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-proyek">Nama
                Proyek<span class="required">:</span>
              </label>
              <div class="col-md-6 col-sm-6 ">
                <input type="text" name="nama_proyek" value="{{ $item->nama_proyek }}"
                  id="first-name" required="required" class="form-control "><span
                  style="color:red">@error('nama proyek'){{ $message }}@enderror</span>
                </div>
              </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="ketua_tim">Ketua
                  Tim<span class="required">:</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  {{-- <input type="text" name="ketua_tim" value="{{ $item->ketua_tim }}" id="ketua_tim"
                    required="required" class="form-control "> --}}
                  <select class="form-control select2-data" name="ketua_tim">
                    {{-- multiple="multiple"> --}}
                    {{-- <option value="">Pilih Karyawan</option> --}}
                    @foreach ($karyawans as $karyawan)
                      <option value="">{{ $karyawan->nama }}</option>
                    @endforeach
                  </select>
                  <span style="color:red">@error('ketua
                      tim'){{ $message }}@enderror</span>
                  </div>
                </div>

                <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-proyek">Anggota
                    tim<span class="required">:</span>
                  </label>
                  <div class="col-md-6 col-sm-61 ">
                    <input type="text" name="anggota" value="{{ $item->anggota }}" id="first-name"
                      required="required" class="form-control "><span
                      style="color:red">@error('anggota'){{ $message }}@enderror</span>
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama-proyek">Unit
                      Pengaju<span class="required">:</span>
                    </label>
                    <div class="col-md-6 col-sm-61 ">
                      <input type="text" name="unit_pengaju" value="{{ $item->unit_pengaju }}"
                        id="first-name" required="required" class="form-control "><span
                        style="color:red">@error('unit pengaju'){{ $message }}@enderror</span>
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align"
                        for="leader">Deskripsi<span class="required">:</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <textarea id="descr" required="required" class="form-control"
                          name="deskripsi">{{ $item->deskripsi }}</textarea><span
                          style="color:red">@error('deskripsi'){{ $message }}@enderror</span>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Mulai <span
                            class="required">:</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input id="date" class="date-picker form-control" name="tgl_mulai" placeholder=""
                            value="{{ $item->tgl_mulai }}" type="text" required="required" type="text"
                            {{-- onfocus="this.type='date'" --}} onmouseover="this.type='date'" onclick="this.type='date'"
                            {{-- onblur="this.type='text'" --}} onmouseout="timeFunctionLong(this)">
                          <span style="color:red">@error('tgl_mulai'){{ $message }}@enderror</span>
                            <script>
                              function timeFunctionLong(input) {
                                setTimeout(function() {
                                  input.type = 'text';
                                }, 60000);
                              }
                            </script>
                          </div>
                        </div>

                        <div class="item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal Selesai <span
                              class="required">:</span>
                          </label>
                          <div class="col-md-6 col-sm-6 ">
                            <input id="date" class="date-picker form-control" name="tgl_akhir" placeholder=""
                              value="{{ $item->tgl_akhir }}" type="text" required="required" type="text"
                              {{-- onfocus="this.type='date'" --}} onmouseover="this.type='date'" onclick="this.type='date'"
                              {{-- onblur="this.type='text'" --}} onmouseout="timeFunctionLong(this)">
                            <span style="color:red">@error('tgl_akhir'){{ $message }}@enderror</span>
                              <script>
                                function timeFunctionLong(input) {
                                  setTimeout(function() {
                                    input.type = 'text';
                                  }, 60000);
                                }
                              </script>
                            </div>
                          </div>

                          <div class="ln_solid"></div>
                          <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                              {{-- <a href="/projects" class="btn btn-primary" type="reset">Kembali</a> --}}
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                          </div>
                        </form>
                        {{-- END of FORM --}}

                      </div>

                      <div class="modal-footer">
                      </div>

                      <script>
                        // $(document).ready(function() {
                        //   $('.select2-data').select2();
                        // });
                        $(function() {
                          $('.select2-data').select2();
                        });
                      </script>

                      {{-- <script>
                        $('#ketua_tim').select2({
                          dropdownParent: $('#modal-card{id}')
                        });
                      </script> --}}

                    </div>
                  </div>
                </div>

              @endforeach
