
{{-- 
<div id="editor"></div>

@error('text')<span class="text-danger">{{ $message }}</span>@enderror

@push('extra-js')
<script>
    ClassicEditor
        .create( document.querySelector('#editor'),{
            removePlugins: [ 'MediaEmbed', 'Table', 'TableToolbar', 'ImageToolbar', 'EasyImage','ImageCaption','ImageStyle','ImageToolbar','ImageUpload' ],
        } )
        .catch( error => {
            console.error( error );
        } );

        // ClassicEditor.builtinPlugins.map( plugin => console.log(plugin.pluginName) );
</script>
@endpush --}}


<textarea name="texto" id="ckeditor" name="texto" class="form-control" rows="5">{{ old('texto') }}</textarea>
@error('texto')<span class="text-danger">{{ $message }}</span>@enderror





