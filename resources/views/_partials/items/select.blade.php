
<select class="form-select select-column-{{$direction}} my-1" data-direction="{{$direction}}" name="item_{{$direction}}" id="select-column-{{$direction}}">
    <option value="" selected>Seleccione</option>
    <option value="1" {{ old('item_'.$direction) == 1 ? 'selected' : '' }}>Texto</option>
    <option value="2" {{ old('item_'.$direction) == 2 ? 'selected' : '' }}>Galeria</option>
    <option value="3" {{ old('item_'.$direction) == 3 ? 'selected' : '' }}>Video</option>
    <option value="4" {{ old('item_'.$direction) == 4 ? 'selected' : '' }}>Documentos</option>
</select>

@error('item_'.$direction)
    <span class="text-danger">{{ $message }} </span>
@enderror