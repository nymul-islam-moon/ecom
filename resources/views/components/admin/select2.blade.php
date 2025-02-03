<div class="mb-3">
    <select class="form-select select2 @error($name) is-invalid @enderror" id="{{ $id }}"
        name="{{ $name }}" data-choices data-choices-search-false>
        @if ($selectedId && $selectedText)
            <option value="{{ $selectedId }}" selected>{{ $selectedText }}</option>
        @endif
    </select>

    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let selectElement = $('#{{ $id }}');

        selectElement.select2({
            placeholder: '{{ $placeholder }}',
            allowClear: true,
            ajax: {
                url: '{{ $route }}',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    let data = {
                        query: params.term
                    };
                    @if ($dependsOn)
                        let dependsValue = $('#{{ $dependsOn }}').val();
                        if (dependsValue) {
                            data.dependency = dependsValue;
                        }
                    @endif
                    return data;
                },
                processResults: function(data) {
                    return {
                        results: data.map(function(item) {
                            return {
                                id: item.id,
                                text: item.name
                            };
                        })
                    };
                },
                cache: true
            }
        });

        @if ($selectedId && $selectedText)
            // Ensure selected value is displayed in Select2 field
            let selectedOption = new Option('{{ $selectedText }}', '{{ $selectedId }}', true, true);
            selectElement.append(selectedOption).trigger('change');
        @endif

        @if ($dependsOn)
            // Clear selection when dependency changes
            $('#{{ $dependsOn }}').on('change', function() {
                selectElement.val(null).trigger('change');
            });
        @endif
    });
</script>
