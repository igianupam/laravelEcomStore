<button class="btn btn-sm btn-primary" type="button" id="addBtn">New Row </button>

<table class="table table-stripped" id="variantTable">

</table>

@push('scripts')
    <script>
        $(document).ready(function() {

            var heads;
            var data;
            var counter = 0;

            function generate_dynamically_html(counter) {

                let tr;
                let row;

                $.each(data, function(key, elements) {
                    let td = '<td>';

                    let select =
                        '<select class="form-select" name="attributes[' + counter +
                        '][' + heads[key].toLowerCase() +
                        ']" id="attribute_value1' + (
                            counter) + '" required>';
                    let option = '<option value="">Select Value</option>';
                    let attribute = '<input type="hidden" name="attributes[' +
                        key + '][parent]" id="attr_id1' + counter +
                        '" value="' + elements[0].attribute_id + '">';

                    $.each(elements, function(k, item) {
                        option += '<option value="' + item.id + '">' +
                            item.value + '</option>';
                    });

                    select = select + option + '</select>';
                    td += select + attribute + '</td>';
                    row += td;

                })

                row +=
                    '<td><input type="number" name="attributes[' + counter +
                    '][price]" id="price1" min="1" step="any" class="form-control" placeholder ="Enter Price"></td>';
                row +=
                    '<td><input type="number" name="attributes[' + counter +
                    '][units]" id="units1" min="1" step="any" class="form-control" placeholder ="Enter No Of Units"></td>';
                row +=
                    '<td><input type="number" name="attributes[' + counter +
                    '][sku_number]" id="sku1" min="1" step="any" class="form-control" placeholder ="Enter SKU Number"></td>';

                return tr += '<tr id="row-1">' + row + '</tr>';

            }

            $('#arrtibutesId').on('change', function() {
                let values = $(this).val(); // Get selected values (likely an array)

                // console.log('values', values);

                // generate_dynamically_html(counter, values)


                $.ajax({
                    url: "{{ route('admin.attribute.value') }}",
                    method: 'GET',
                    data: {
                        values: values
                    },
                    cache: false,
                    success: function(response) {
                        console.log('server-response', response);

                        let thead = '<thead class="">';

                        heads = response.heads;
                        data = response.data;

                        $.each(heads, function(key, element) {
                            thead += '<th>' + element + '</th>';
                        });

                        thead += '</thead>'; // closing table header


                        let tbody = generate_dynamically_html(counter);

                        let html = thead + tbody;
                        $('#variantTable').html(html);
                    }
                    error: function(error) {
                        console.warn(error);
                    }
                });


            });

            $('#addBtn').on('click', function() {
                let values = $('#arrtibutesId').val();
                generate_dynamically_html(counter, values)
                counter++;
            });

        });
    </script>
@endpush
