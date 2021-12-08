<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Add Expert Service Rendered in Academic Journals/Books/Publication/Newsletter/Creative Works') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>
                    <a class="back_link" href="{{ route('expert-service-in-academic.index') }}"><i class="bi bi-chevron-double-left"></i>Back</a>
                </p>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('expert-service-in-academic.store' ) }}" method="post">
                            @csrf
                            @include('form', ['formFields' => $expertServiceAcademicFields, 'colleges' => $colleges])
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-0">
                                        <div class="d-flex justify-content-end align-items-baseline">
                                            <button type="submit" id="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>

            $('div .other_nature').hide();
            var other_nature = document.getElementById("other_nature");
            $('#nature').on('input', function(){
                var nature_name = $("#nature option:selected").text();
                if (nature_name == "Others") {
                    $('div .other_nature').show();
                    $('#other_nature').focus();
                }
                else {
                    $('div .other_nature').hide();
                }
            });
        </script>
        <script>
            $('#from').on('input', function(){
                var date = new Date($('#from').val());
                var day = date.getDate();
                var month = date.getMonth() + 1;
                var year = date.getFullYear();
                // alert([day, month, year].join('-'));
                // document.getElementById("target_date").setAttribute("min", [day, month, year].join('-'));
                document.getElementById('to').setAttribute('min', [year, month, day.toLocaleString(undefined, {minimumIntegerDigits: 2})].join('-'));
                $('#to').val([year, month, day.toLocaleString(undefined, {minimumIntegerDigits: 2})].join('-'));
            });

            function validateForm() {
                var isValid = true;
                $('.form-validation').each(function() {
                    if ( $(this).val() === '' )
                        isValid = false;
                });
                return isValid;
            }
        </script>
    @endpush
</x-app-layout>