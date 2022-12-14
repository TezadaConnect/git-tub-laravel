@php
    $nameOfPage = '';
    $nameOfPages = '';
    $v = '';
    if($version == 'faculty'){
        $nameOfPage = 'Special Task';
        $nameOfPages = 'Special Tasks';
        $v = 'faculty';
    }
    elseif ($version == 'admin') {
        $nameOfPage = 'Accomplishment Based on OPCR';
        $nameOfPages = 'Accomplishments Based on OPCR';
        $v = 'admin';
    }
@endphp
<x-app-layout>
    @section('title', $nameOfPage.' | ')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="font-weight-bold mr-2">Add {{ $nameOfPage }}</h3>
                <div class="mb-3">
                    <a class="back_link" href="{{ route('special-tasks.index').'?v='.$v }}"><i class="bi bi-chevron-double-left"></i>{{ __('Back to All '.$nameOfPages) }}</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('special-tasks.store').'?v='.$v }}" enctype="multipart/form-data" method="post" class="needs-validation" novalidate>
                            <div class="mt-2 mb-3">
                                <i class="bi bi-pencil-square mr-1"></i><strong>Instructions: </strong> Please fill in the necessary details. No abbreviations. All inputs with the symbol (<strong style="color: red;">*</strong>) are required.
                            </div>
                            <hr>
                            @csrf
                            @include('quarter-field')
                            @include('form', ['formFields' => $specialTaskFields])
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-0">
                                        <div class="d-flex justify-content-end align-items-baseline">
                                            <a href="{{ url()->previous() }}" class="btn btn-secondary mr-2">Cancel</a>
                                            <button type="submit" id="submit" class="btn btn-success">Save</button>
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
    <script src="{{ asset('dist/selectize.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/spinner.js') }}"></script>
    <script>
        $("#commitment_measure").selectize({
              maxItems: null,
              valueField: 'name',
              labelField: 'name',
              sortField: "name",
              options: @json($dropdown_options['commitment_measure']),
        });
    </script>
    <script>
        var report_category_id = 29;
        $('#description').empty().append('<option selected="selected" disabled="disabled" value="">Choose...</option>');

        setTimeout(() => {
            var urlre = "{{ url('document-upload/description/29') }}";
            $.get(urlre, function (data){
                if (data != '') {
                    data.forEach(function (item){
                        $("#description")[0].selectize.addOption({value:item.name, text:item.name});
                    });
                }
            });
        }, Math.floor(Math.random() * (2500 - 1) + 1));

    </script>
    @endpush
</x-app-layout>
