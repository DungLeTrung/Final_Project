<div class="my-5 mx-5">
    <div class="d-flex justify-content-between mb-3">
        <div>
        </div>
        <div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createTourItenerary">
                Add New <i class="fas fa-plus"></i>
            </button>
        </div>
    </div>

    <table id="example" class="table table-striped table-bordered table-config">
        <colgroup>
            <col span="1" style="width: 5%;">
            <col span="1" style="width: 10%;">
            <col span="1" style="width: 15%;">
            <col span="1" style="width: 20%;">
            <col span="1" style="width: 40%;">
            <col span="1" style="width: 10%;">
        </colgroup>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tour</th>
                <th>Day</th>
                <th>Place</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($tourItinerary && $tourItinerary->count() > 0)
                @foreach ($tourItinerary as $itinerary)
                    <tr>
                        <td>{{ $itinerary->id }}</td>
                        <td>{{ $itinerary->tour->name ?? 'N/A' }}</td>
                        <td>{{ $itinerary->day }}</td>
                        <td>{{ $itinerary->place }}</td>
                        <td>{{ $itinerary->description }}</td>
                        <td>
                            <button class="btn btn-light editBtn" data-id="{{ $itinerary->id }}"
                                data-day="{{ $itinerary->day }}" data-place="{{ $itinerary->place }}" data-description="{{ $itinerary->description }}"
                                data-tour="{{ $itinerary->tour->id ?? '' }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="btn btn-light deleteBtn" data-id="{{ $itinerary->id }}"
                                data-url="{{ route('tour-itinerary.delete', $itinerary->id) }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>

<div class="modal fade" id="createTourItenerary" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-tour-normal">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Create Tour Itenerary</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex">
                    <div class="col-12">
                        <form id="createForm" method="POST" action="{{ route('tour-itinerary.execute') }}">
                            @csrf
                            <input type="hidden" name="id" id="itineraryId">
                            <div class="form-row">
                                <div class="form-col">
                                    <label for="day" class="form-label">Day</label>
                                    <input type="number" name="day" class="form-control" id="day" required>
                                </div>
                                <div class="form-col">
                                    <label for="place" class="form-label">Place</label>
                                    <input type="text" name="place" class="form-control" id="place" required>
                                </div>
                                <div class="form-col">
                                    <label for="description" class="form-label">Description</label>
                                    <input type="text" name="description" class="form-control" id="description" required>
                                </div>
                            </div>
                            <div class="form-row mt-3">
                                <div class="form-col">
                                    <label for="tour_id" class="form-label">Select Tour</label>
                                    <select name="tour_id" class="form-control" id="tour_id" required>
                                        @foreach ($tours as $tour)
                                            <option value="{{ $tour->id }}">{{ $tour->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3" id="saveBtn">Save</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "pagingType": "simple_numbers",
            "lengthMenu": [5, 10, 25, 50],
            "language": {
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "paginate": {
                    "previous": "<",
                    "next": ">"
                }
            }
        });

        $('#createForm').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: $(this).attr('action'),
                method: $(this).attr('method'),
                data: $(this).serialize(),
                success: function(response) {
                    $('#createTourItenerary').modal('hide');
                    showVanillaToast(response.message, 'success');
                    setTimeout(() => location.reload(), 1000);
                },
                error: function(xhr) {
                    formValidAjax(xhr);
                }
            });
        });

        $('.editBtn').on('click', function() {
            var id = $(this).data('id');
            var day = $(this).data('day');
            var place = $(this).data('place');
            var description = $(this).data('description');
            var tourId = $(this).data('tour');

            $('#itineraryId').val(id);
            $('#day').val(day);
            $('#place').val(place);
            $('#description').val(description);
            $('#tour_id').val(tourId);

            $('#createModalLabel').text('Edit Tour Itinerary');
            $('#createTourItenerary').modal('show');
        });

        $('.deleteBtn').on('click', function() {
            var itineraryId = $(this).data('id');
            var url = $(this).data('url');

            if (confirm('Are you sure you want to delete this itinerary?')) {
                $.ajax({
                    url: url,
                    method: 'DELETE',
                    data: {
                        "_token": $('meta[name="csrf-token"]').attr(
                            'content')
                    },
                    success: function(response) {
                        showVanillaToast(response.message, 'success');
                        setTimeout(() => location.reload(), 1000);
                    },
                    error: function(xhr) {
                        showVanillaToast('Error deleting itinerary', 'error');
                    }
                });
            }
        });

        $('#example').on('draw.dt', function() {
            $('.editBtn').off('click').on('click', function() {
                var id = $(this).data('id');
                var question = $(this).data('question');
                var answer = $(this).data('answer');
                var tourId = $(this).data('tour');

                $('#itineraryId').val(id);
                $('#question').val(question);
                $('#answer').val(answer);

                $('#createModalLabel').text('Edit Tour Itinerary');
                $('#createTourItinerary').modal('show');
            });

            $('.deleteBtn').off('click').on('click', function() {
                var itineraryId = $(this).data('id');
                var url = $(this).data('url');

                if (confirm('Are you sure you want to delete this itinerary?')) {
                    $.ajax({
                        url: url,
                        method: 'DELETE',
                        data: {
                            "_token": $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            showVanillaToast(response.message, 'success');
                            setTimeout(() => location.reload(), 1000);
                        },
                        error: function(xhr) {
                            showVanillaToast('Error deleting itinerary', 'error');
                        }
                    });
                }
            });
        });
    });
</script>
