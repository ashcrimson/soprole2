
 <div class="form-floating my-3">
    <input type="text" name="video" class="form-control" id="video" placeholder="url" autocomplete="new-password" value="{{ old('video') }}">
    <label for="new_password">URL</label>
</div>

@error('video')<span class="text-danger">{{ $message }}</span>@enderror


