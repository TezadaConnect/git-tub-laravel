<x-app-layout>
    @section('title', 'Invention, Innovation & Creative Works |')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="font-weight-bold mr-2">Edit {{ $classification[0]->name }}</h3>
                <div class="mb-3">
                    <a class="back_link" href="{{ route('invention-innovation-creative.index') }}"><i class="bi bi-chevron-double-left"></i>Back to all Inventions, Innovation, & Creative Works</a>
                </div>
                {{-- Denied Details --}}
                @if ($deniedDetails = Session::get('denied'))
                <div class="alert alert-info" role="alert">
                    <i class="bi bi-exclamation-circle"></i> Remarks: {{ $deniedDetails->reason }}
                </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('invention-innovation-creative.update', $value['id']) }}" enctype="multipart/form-data" method="post" class="needs-validation" novalidate>
                            @csrf
                            @method('put')
                            @include('quarter-field')
                            @include('form', ['formFields' => $inventionFields, 'value' => $value, 'colleges' => $colleges, 'collegeOfDepartment' => $collegeOfDepartment])
                            <div class="col-md-12">
                                <div class="mb-0">
                                    <div class="d-flex justify-content-end align-items-baseline">
                                        <a href="{{ url()->previous() }}" class="btn btn-secondary mr-2">Cancel</a>
                                        <button type="submit" id="submit" class="btn btn-success">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3" id="documentsSection">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <h5 id="textHome" style="color:maroon">Supporting Documents</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6 style="color:maroon"><i class="far fa-file-alt mr-2"></i>Documents</h6>
                                <div class="row">
                                    @if (count($inventionDocuments) > 0)
                                        @foreach ($inventionDocuments as $document)
                                            @if(preg_match_all('/application\/\w+/', \Storage::mimeType('documents/'.$document['filename'])))
                                                <div class="col-md-12 mb-3 documents-display" id="doc-{{ $document['id'] }}">
                                                    <div class="card bg-light border border-maroon rounded-lg">
                                                        <div class="card-body">
                                                            <div class="row mb-3">
                                                                <div class="col-md-12">
                                                                    <div class="embed-responsive embed-responsive-1by1">
                                                                        <iframe  src="{{ route('document.view', $document['filename']) }}" width="100%" height="500px"></iframe>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <button class="btn btn-danger remove-doc" data-id="doc-{{ $document['id'] }}" data-link="{{ route('iicw.removedoc', $document['filename']) }}" data-toggle="modal" data-target="#deleteModal">Delete</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div class="col-md-4 offset-md-4 docEmptyMessage" style="display: none;">
                                            <h6 class="text-center">No Documents Attached</h6>
                                        </div>
                                    @else
                                        <div class="col-md-4 offset-md-4">
                                            <h6 class="text-center">No Documents Attached</h6>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6 style="color:maroon"><i class="far fa-image mr-2"></i>Images</h6>
                                <div class="row">
                                    @if(count($inventionDocuments) > 0)
                                        @foreach ($inventionDocuments as $document)
                                            @if(preg_match_all('/image\/\w+/', \Storage::mimeType('documents/'.$document['filename'])))
                                                <div class="col-md-6 mb-3 documents-display" id="doc-{{ $document['id'] }}">
                                                    <div class="card bg-light border border-maroon rounded-lg">
                                                        <a href="{{ route('document.display', $document['filename']) }}" data-lightbox="gallery" data-title="{{ $document['filename'] }}" target="_blank">
                                                            <img src="{{ route('document.display', $document['filename']) }}" class="card-img-top img-resize"/>
                                                        </a>
                                                        <div class="card-body">
                                                            <table class="table table-sm my-n3 text-center">
                                                                <tr>
                                                                    <th>
                                                                        <button class="btn btn-danger remove-doc" data-id="doc-{{ $document['id'] }}" data-link="{{ route('iicw.removedoc', $document['filename']) }}" data-toggle="modal" data-target="#deleteModal">Delete</button>
                                                                    </th>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                        <div class="col-md-4 offset-md-4 docEmptyMessage" style="display: none;">
                                            <h6 class="text-center">No Documents Attached</h6>
                                        </div>
                                    @else
                                        <div class="col-md-4 offset-md-4">
                                            <h6 class="text-center">No Documents Attached</h6>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Delete doc Modal --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="text-center">Are you sure you want to delete this document?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mb-2" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-danger mb-2 mr-2" id="deletedoc">Delete</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('dist/selectize.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('js/remove-document.js') }}"></script>
        <script src="{{ asset('js/spinner.js') }}"></script>
        <script>
                if ("{{ $value['funding_type'] }}" == 49) {
                    //Univ. Funded
                    $('#funding_agency').val("Polytechnic University of the Philippines");
                    $('#funding_agency').removeAttr('readonly');
                    $('#funding_agency').attr('required', true);
                }
                else if ("{{ $value['funding_type'] }}" == 50) {
                    //Self Funded
                    $('#funding_agency').val("");
                    $('#funding_agency').attr('readonly', true);
                    $('#funding_agency').removeAttr('required');
                }
                else { // External Funded
                    $('#funding_agency').removeAttr('readonly');
                    $('#funding_agency').attr('required', true);
                }

                /* STATUS On page load */
                if ("{{ $value['status'] }}" == 53) {
                    $('#end_date').attr('disabled', true);
                    $('#end_date').removeAttr('required');
                    $('#issue_date').attr('disabled', true);
                    $('#issue_date').removeAttr('required');
                }
        </script>
        <script>
            $('#end_date').on('change', function () {
                $('#end_date').datepicker('setStartDate', $('#start_date').val());
                $('#issue_date').datepicker('setStartDate', $('#end_date').val());
            });
        </script>
        <script>
            $('#funding_type').on('change', function (){
                if ($(this).val() == 49) {
                    //Univ. Funded
                    $('#funding_agency').val("Polytechnic University of the Philippines");
                    $('#funding_agency').removeAttr('readonly');
                    $('#funding_agency').attr('required', true);
                }
                else if ($(this).val() == 50) {
                    //Self Funded
                    $('#funding_agency').val("");
                    $('#funding_agency').attr('readonly', true);
                    $('#funding_agency').removeAttr('required');
                }
                else if ($(this).val() == 51) { // External Funded
                    $('#funding_agency').val("");
                    $('#funding_agency').removeAttr('readonly');
                    $('#funding_agency').attr('required', true);
                }
            });
        </script>
        <script>
            $('#status').on('change', function(){
                if ($(this).val() == 53) {
                    //Ongoing
                    $('#end_date').attr('disabled', true);
                    $('#end_date').removeAttr('required');
                    $('#issue_date').attr('disabled', true);
                    $('#issue_date').removeAttr('required');
                    $('#copyright_number').removeAttr('required');
                }
                else if ($(this).val() == 54) {
                    //Completed
                    $('#end_date').attr('required', true);
                    $('#end_date').removeAttr('disabled');
                    $('#issue_date').attr('required', true);
                    $('#copyright_number').attr('required', true);
                    $('#issue_date').removeAttr('disabled');
                    $('#end_date').datepicker('setStartDate', $('#start_date').val());
                    $('#end_date').focus();
                }
            });
        </script>

        <script>
            var report_category_id = 8;
            $('#description').empty().append('<option selected="selected" disabled="disabled" value="">Choose...</option>');
            $.get("{{ url('document-upload/description/8') }}", function (data){
                if (data != '') {
                    data.forEach(function (item){
                        $("#description")[0].selectize.addOption({value:item.name, text:item.name});
                    });
                }
            });
        </script>
    @endpush
</x-app-layout>
