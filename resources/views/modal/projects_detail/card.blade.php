<!-- Modal Card -->
@foreach ($tasks as $item)

  <div class="modal fade" id="modal-card{{ $item->id }}" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail {{ $item->kelas->kelas }}</h5>
          <button type="button" class="btn-close" data-dismiss="modal"
            aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Kelas <span
                class="required">:</span>
            </label>
            <div class="col-md-6 col-sm-6 ">
              <input type="text" id="first-name" required="required" name='anggota'
                class="form-control " value="{{ $item->kelas->kelas }}">
            </div>
          </div>
        </div>

        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>

@endforeach
