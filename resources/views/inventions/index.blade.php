<x-app-layout>
    @section('title', 'Invention, Innovation & Creative Works |')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="font-weight-bold mb-2">Inventions, Innovation & Creative Works</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                {{-- ========= ALERT DETAILS ========= --}}
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger" role="alert">
                        <i class="bi bi-exclamation-circle"></i> {{ $message }}
                    </div>
                @endif
                @if ($message = Session::get('edit_iicw_success'))
                <div class="alert alert-success alert-index">
                    <i class="bi bi-check-circle"></i> {{ $message }}
                </div>
                @endif
                @if ($message = Session::get('cannot_access'))
                <div class="alert alert-danger alert-index">
                    {{ $message }}
                </div>
                @endif
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-index">
                    {{ $message }}
                </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3 ml-1">
                            <div class="d-inline mr-2">
                                <a href="{{ route('invention-innovation-creative.create') }}" class="btn btn-success"><i class="bi bi-plus"></i> Add Invention, Innovation, or Creative Work</a>
                            </div>
                        </div>
                        <hr>
                        @include('instructions')
                        <div class="table-responsive" style="overflow-x:auto;">
                            <table class="table" id="invention_table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>College/Branch/Campus/Office</th>
                                        <th>Quarter</th>
                                        <th>Year</th>
                                        <th>Date Modified</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inventions as $invention)
                                    <tr class="tr-hover" role="button">
                                        <td onclick="window.location.href = '{{ route('invention-innovation-creative.show', $invention->id) }}' ">{{ $loop->iteration }}</td>
                                        <td onclick="window.location.href = '{{ route('invention-innovation-creative.show', $invention->id) }}' ">{{ $invention->title }}</td>
                                        <td onclick="window.location.href = '{{ route('invention-innovation-creative.show', $invention->id) }}' ">{{ $invention->status_name }}</td>
                                        <td onclick="window.location.href = '{{ route('invention-innovation-creative.show', $invention->id) }}' ">{{ $invention->college_name }}</td>
                                        <td class="{{ ($invention->report_quarter == $currentQuarterYear->current_quarter && $invention->report_year == $currentQuarterYear->current_year) ? 'to-submit' : '' }}" onclick="window.location.href = '{{ route('invention-innovation-creative.show', $invention->id) }}' ">
                                            {{ $invention->report_quarter }}
                                        </td>
                                        <td onclick="window.location.href = '{{ route('invention-innovation-creative.show', $invention->id) }}' ">
                                            {{ $invention->report_year }}
                                        </td>
                                        <td onclick="window.location.href = '{{ route('invention-innovation-creative.show', $invention->id) }}' ">
                                        <?php
                                            $updated_at = strtotime( $invention->updated_at );
                                            $updated_at = date( 'M d, Y h:i A', $updated_at );
                                            ?>
                                            {{ $updated_at }}
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="button-group">
                                                <a href="{{ route('invention-innovation-creative.show', $invention->id) }}" class="btn btn-sm btn-primary d-inline-flex align-items-center">View</a>
                                                <a href="{{ route('invention-innovation-creative.edit', $invention->id) }}" class="btn btn-sm btn-warning d-inline-flex align-items-center">Edit</a>
                                                <button type="button" value="{{ $invention->id }}" class="btn btn-sm btn-danger d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-iicw="{{ $invention->title }}">Delete</button>
                                                @if ($submissionStatus[8][$invention->id] == 0)
                                                    <a href="{{ url('submissions/check/8/'.$invention->id) }}" class="btn btn-sm btn-primary d-inline-flex align-items-center">Submit</a>
                                                @elseif ($submissionStatus[8][$invention->id] == 1)
                                                    <a href="{{ url('submissions/check/8/'.$invention->id) }}" class="btn btn-sm btn-success d-inline-flex align-items-center">Submitted {{ $submitRole[$invention->id] == 'f' ? 'as Faculty' : 'as Admin' }}</a>
                                                @elseif ($submissionStatus[8][$invention->id] == 2)
                                                    <a href="{{ route('invention-innovation-creative.edit', $invention->id) }}#upload-document" class="btn btn-sm btn-warning d-inline-flex align-items-center"><i class="bi bi-exclamation-circle-fill text-danger mr-1"></i> No Document</a>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Delete Modal --}}
    @include('delete')

    @push('scripts')
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js"></script>
     <script>
        window.setTimeout(function() {
            $(".alert-index").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 4000);

        $('#invention_table').DataTable();

         //Item to delete to display in delete modal
        var deleteModal = document.getElementById('deleteModal')
        deleteModal.addEventListener('show.bs.modal', function (event) {
          var button = event.relatedTarget
          var id = button.getAttribute('value')
          var iicwTitle = button.getAttribute('data-bs-iicw')
          var itemToDelete = deleteModal.querySelector('#itemToDelete')
          itemToDelete.textContent = iicwTitle

          var url = '{{ route("invention-innovation-creative.destroy", ":id") }}';
          url = url.replace(':id', id);
          document.getElementById('delete_item').action = url;

        });
     </script>
     @endpush
</x-app-layout>
