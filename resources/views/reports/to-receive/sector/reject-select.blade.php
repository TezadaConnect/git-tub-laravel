<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Return Accomplishment Reports') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('sector.reject-selected') }}" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p>
                                            <a class="back_link" href="{{ route('sector.index') }}"><i class="bi bi-chevron-double-left"></i>Back</a>
                                        </p>
                                        @foreach ($reportIds as $row)
                                        <hr>
                                            <input type="hidden" value="{{ $row }}" name="report_id[]">
                                            <button type="button" class="btn btn-primary button-view mb-2" id="viewButton"
                                                data-url="{{ route('document.view', ':filename') }}" data-accept="{{ route('sector.accept', ':id') }}"
                                                data-id="{{ $row }}" data-toggle="modal"
                                                data-target="#viewReport">
                                                View Accomplishment
                                            </button>
                                            <br>
                                            <label>Remarks:</label><span style='color: red'></span>

                                            <input type="text" class="form-control" name="reason_{{ $row }}" required>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-0">
                                        <div class="d-flex justify-content-end align-items-baseline">
                                            <button type="submit" id="submit" class="btn btn-danger">Return</button>
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
    <div class="modal fade" id="viewReport" tabindex="-1" aria-labelledby="viewReportLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewReportLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <table class="table table-sm table-borderless" id="columns_value_table">
                        </table>
                    </div>
                </div>
                <hr>
                <div class="row justify-content-center">
                    <div class="col-md-11 h5 font-weight-bold">Documents:</div>
                    <div class="col-md-11" id="data_documents">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
           $('.button-view').on('click', function(){
                var catID = $(this).data('id');
                var link = $(this).data('url');
                var countColumns = 0;

                var labellink = "{{ url('reports/report-category/:id') }}";
				var link = labellink.replace(':id', catID);
                $.get(link, function (data){
                    document.getElementById('viewReportLabel').innerHTML = data;
                        // $('#viewReportLabel').text(data);
                });
                var url = "{{ url('reports/data/:id') }}";
				var newlink = url.replace(':id', catID);
				$.get(newlink, function (data){
                    Object.keys(data).forEach(function(k){
                        countColumns = countColumns + 1;
                        $('#columns_value_table').append('<tr id="row-'+countColumns+'" class="d-flex report-content"></tr>')
                        $('#row-'+countColumns).append('<td class="report-content font-weight-bold">'+k+':</td>');
                        $('#row-'+countColumns).append('<td class="report-content">'+data[k]+'</td>');
                    });
                });
                var urldoc = "{{ url('reports/docs/:id') }}";
				var newlinkdoc = urldoc.replace(':id', catID);
				$.get(newlinkdoc, function (data) {
                    data.forEach(function (item){
                        var newlink = link.replace(':filename', item)
                        $('#data_documents').append('<a href="'+newlink+'" target="_blank" class="report-content h5 m-1 btn btn-primary">'+item+'<a/>');
                    });
                });
            });

            $('#viewReport').on('hidden.bs.modal', function(event) {
                $('.report-content').remove();
            });
        </script>

    @endpush
</x-app-layout>
