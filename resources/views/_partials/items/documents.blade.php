<div class="my-3">
    <input class="form-control" type="file" id="formFileMultiple" name="documents" accept="application/pdf" multiple/>
</div>

@error('documents')<span class="text-danger">{{ $message }}</span>@enderror