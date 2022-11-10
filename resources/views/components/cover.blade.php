@props(['field'])
<div class="filepond fp-bordered  fp-bordered {{ $field->has('multiple') ? 'fp-grid [--fp-grid:4]' : '' }} " wire:ignore>
    <input {{ $attributes->except('wire:model')->merge($field->attributes) }}
     x-init="() => {
        let ponp = FilePond.create($el);
        ponp.setOptions({
            allowReorder: true,
            acceptedFileTypes: ['image/png', 'image/jpeg'],
            server: {
                process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                    @this.upload('{{ $field->key }}', file, load, error, progress)
                },
                revert: (filename, file, metadata, load, error, progress, abort, transfer, options) => {
                    @this.removeUpload('{{ $field->key }}', filename, load)
                    @this.set('{{ $field->key }}', null)
                },
                remove: (source, load, error) => {
                    // Should somehow send `source` to server so server can remove the file with this source                   
                    @this.deleteUploadUrl('{{ $field->name }}', source)
                    // Can call the error method if something is wrong, should exit after
                    error('oh my goodness');
                    // Should call the load method when done, no parameters required
                    load();
                },
                load: (source, load, error, progress, abort, headers) => {
                    dd(source)
                },
            },
            onreorderfiles(files, origin, target, source){
                files.forEach(function(file,index) {
                    @this.reorderfiles(file.serverId,index) 
                });
               
            },
        });
        ponp.addFiles(@js($field->value))
    }" />
</div>
