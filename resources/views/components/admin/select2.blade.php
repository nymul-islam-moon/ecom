<select class="form-select select2" id="{{ $id }}" name="{{ $name }}" data-choices data-choices-search-false>
</select>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let selectElement = $('#{{ $id }}').select2({
            placeholder: '{{ $placeholder }}',
            ajax: {
                url: '{{ $route }}',
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    let data = { query: params.term };
                    @if ($dependsOn)
                        let dependsValue = $('#{{ $dependsOn }}').val();
                        if (dependsValue) {
                            data.dependency = dependsValue;
                        }
                    @endif
                    return data;
                },
                processResults: function (data) {
                    return {
                        results: data.map(function (item) {
                            return { id: item.id, text: item.name };
                        })
                    };
                },
                cache: true
            }
        });

        @if ($dependsOn)
            // Clear selection when dependency changes
            $('#{{ $dependsOn }}').on('change', function () {
                selectElement.val(null).trigger('change');
            });
        @endif
    });
</script>
