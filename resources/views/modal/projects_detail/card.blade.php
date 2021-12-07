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
          <form action="{{ route('update_task') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $item->id }}">
            <div class="row g-3 mb-3">
              <div class="col">
                <select class="form-select form-select-sm border-0" style="color:gray; box-shadow:0;"
                  aria-label=".form-select-sm example" name="kelas_id">
                  <option value="{{ $item->kelas_id }}">{{ $item->kelas->kelas }}</option>
                  @foreach ($kelas as $item)
                    <option value="{{ $item->id }}">{{ $item->kelas }}</option>
                  @endforeach
                </select>
              </div>

              <div class="col">
                <div class="form-floating">
                  <input type="date" class="form-control border-0" name="dateline"
                    id="floatingInput" placeholder="">
                  <label for="floatingInput">Tanggal </label>
                </div>
              </div>
            </div>

            <h5><i class="bi bi-journal-text"></i> Notes</h5>
            <div class="mb-3">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button class="btn btn-primary btn-sm" style="float: right">Kirim</button>
            <div>
              <input type="file" class="form-control-file mb-2">
            </div>

            <div>
              <h5><i class="bi bi-stack-overflow"></i> Aktivitas</h5>
              <div class="card border-0">
                <div class="card-body mx-3">
                  <a class="dropdown-item d-flex" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img class="img-profile rounded-circle" src="images/user.png"
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
            <button class="btn btn-primary btn-sm mt-1" style="float: right">Simpan</button>
          </form>
        </div>

        <div class="modal-footer">
        </div>

      </div>
    </div>
  </div>

@endforeach
