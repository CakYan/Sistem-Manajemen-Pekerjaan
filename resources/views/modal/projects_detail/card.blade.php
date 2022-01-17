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
          <form action="/update_task" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="task_id" value="{{ $item->id }}">
            <input type="hidden" name="nama_uploader" value="{{ session('nama') }}">
            <input type="hidden" name="foto_uploader" value="{{ session('foto') }}">
            <div class="row g-3 mb-3">
              <div class="col">
                <select class="form-control border-0" style="color:gray; box-shadow:0;"
                  aria-label=".form-select-sm example" name="kelas_id">
                  <option value="{{ $item->kelas_id }}">{{ $item->kelas->kelas }}</option>
                  @foreach ($kelas as $item)
                    <option value="{{ $item->id }}">{{ $item->kelas }}</option>
                  @endforeach
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
            <div class="card">
              <div class="form-group">
                <textarea class="form-control" name="note"></textarea>
              </div>
            </div>
            <div>
              <h5><i class="bi bi-stack-overflow"></i> Aktivitas</h5>
              @foreach ($pdfs as $p)
                @if ($p->task_id == $item->id)
                  <div class="card border-0">
                    <div class="card-body mx-3">
                      <span class="image">
                        <img src="{{ asset('storage/' . $p->foto_uploader) }}" widht="25"
                          height="25" alt="Profile Image"></span>
                      <span>
                        <span><b>{{ $p->nama_uploader }}</b></span>
                        <span class="time">{{ $p->created_at->diffForHumans() }}</span>
                      </span><br />
                      <span class="message">
                        {{ $p->comment }}
                      </span><br /><br />

                      <a href="/download/pdf/{{ $p->id }}"><i
                          class="fa fa-file"></i>{{ $p->file }}</a>
                      </span>
                    </div>
                  </div>
                @endif
              @endforeach
            </div>
            <div class="form-group">
              <b>Upload File</b><br />
              <input type="file" name="file">
            </div>



            <div class="form-group">
              <b>Comment</b>
              <textarea class="form-control" name="comment"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-sm mt-1"
              style="float: right">Simpan</button>
          </form>
        </div>

        <div class="modal-footer">
        </div>

      </div>
    </div>
  </div>

@endforeach
