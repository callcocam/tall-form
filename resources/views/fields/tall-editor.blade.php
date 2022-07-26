<div wire:ignore class="form-group" x-data="{
    setUp() {
        let el = document.getElementById('{{ $field->id }}')
        el.addEventListener('change', (e) => {
            @this.set('{{ $field->key }}', e.target.value)
        })
    }
}" x-init="setUp">
    <label for="content">{{ $field->label }}</label>
    @error('{{ $field->name }}')
        <div class="validation--error">{{ $message }}</div>
    @enderror
    <input value="{{ data_get($data, $field->name) }}" name="{{ $field->name }}" id="{{ $field->id }}" type="text" />
    @push('scripts')
        <script>
            window.LarabergInit = (element, route, options = {}) => {
                const instance = axios.create({
                    headers: {
                        "Content-Type": "multipart/form-data"
                    }
                });
                const mediaUpload = ({
                    filesList,
                    onFileChange
                }) => {
                    Array.from(filesList).map(file => {
                        let data = new FormData()
                        data.append('file', file)
                        instance.post(route, data).then(response => {
                            onFileChange(response.data)
                        })
                    })
                }
                Laraberg.init('content', Object.assign({
                    mediaUpload
                }, options))
            }
            setTimeout(() => {
                LarabergInit('{{ $field->id }}', '{{ $field->route }}', @json($field->options))
            }, 500);
            document.addEventListener('load', () => {
                
                  console.log("Carregou...");
            })
        </script>
    @endpush

</div>
