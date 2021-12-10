<!-- Modal Card -->
@foreach ($tasks as $item)

  <div class="modal fade" id="modal-card{{ $item->id }}" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail {{ $item->nama_task }}</h5>
          <button type="button" class="btn-close" data-dismiss="modal"
            aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form action="">
            <div class="row g-3 mb-3">
              <div class="col">
                <select class="form-select form-select-sm border-0" style="color:gray; box-shadow:0;"
                  aria-label=".form-select-sm example">
                  <option value="1">Tugas</option>
                  <option value="2">Proses</option>
                  <option value="3">Selesai</option>
                </select>
              </div>
              <div class="col">
                <div class="form-floating">
                  <input type="text" class="form-control border-0" name="" id="floatingInput"
                    placeholder="NIK">
                  <label for="floatingInput">Masukan Nama </label>
                </div>
              </div>
              <div class="col">
                <div class="form-floating">
                  <input type="date" class="form-control border-0" name="" id="floatingInput"
                    placeholder="NIK">
                  <label for="floatingInput">Tanggal </label>
                </div>
              </div>
            </div>
            <h5><i class="bi bi-journal-text"></i> Notes</h5>
            <div class="mb-3">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button class="btn btn-primary btn-sm" style="float: right"> simpan</button>
            <div>
              <input type="file" class="form-control-file mb-2">
            </div>
            <div>
              <h5><i class="bi bi-stack-overflow"></i> Aktivitas</h5>
              <div class="row g-3 mb-3 ml-3">
                <div class="col">
                  <div class="message_wrapper">
                    <h6>Danur</h6>
                  </div>
                </div>
                <div class="col">
                  <h6> <a href="#"> <i class="fa fa-paperclip"></i> User Acceptance Test.doc </a></h6>
                </div>
                <div class="col">
                  <div class="date-wrapper">
                    <h6>16 Desember 2021</h6>
                  </div>
              </div>
              <div class="card border-0">
                <div class="card-body mx-3">
                  <a class="dropdown-item d-flex" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img class="img-profile rounded-circle" src="img/firmansyah.png"
                        alt="foto-profil">
                    </div>
                    <div>
                      <div class="text-truncate">
                        <h6>Nama User</h6>
                      </div>
                      <div class="small text-gray-600">
                        <p>Lorem ipsum dolor sit amet consectetur</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
              placeholder="Comment"></textarea>
            <button class="btn btn-primary btn-sm mt-1" style="float: right">Kirim</button>
          </form>
        </div>

        <div class="modal-footer">
        </div>

      </div>
    </div>
  </div>

@endforeach
