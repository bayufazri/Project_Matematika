  <div class="card-body">
      <div class="form-group">
          <label for="kode_materi">Kode Materi</label>
          <input type="text" name="kode_materi" id="kode_materi" class="form-control"
              value="{{ old('kode_materi') ?? $materi->kode_materi }}">
      </div>
      @error('kode_materi')
          <span class=" text-danger">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
      <div class="form-group">
          <label for="sub_materi">Sub Materi</label>
          <input type="text" name="sub_materi" id="sub_materi" class="form-control"
              value="{{ old('sub_materi') ?? $materi->sub_materi }}">
      </div>
      @error('sub_materi')
          <span class="text-danger">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
      <div class="form-group">
          <label for="materi">Materi</label>
          <textarea id="materi" name="materi" class="form-control"
              style="height: 100px;">{{ old('materi') ?? $materi->materi }}</textarea>
      </div>
      @error('materi')
          <span class="text-danger">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
      <div class="form-grup">
          <label for="thumbnail">Thumbnail</label>
          <input type="file" name="thumbnail" class="form-control" id="thumbnail" />
      </div>
      @error('thumbnail')
          <span class="text-danger">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
  </div>
  <div class="card-footer">
      <a href="{{ route('materi.index') }}" class="btn btn-danger mr-2" style="border-radius: 0;">Back</a>
      <button type="submit" class="btn btn-success">{{ $submit ?? 'Update' }}</button>
  </div>
