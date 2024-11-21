<div class="my-5 mx-5">
    <div class="d-flex justify-content-between mb-3">
        <div>
        </div>
        <div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createRoomService">
                Add New <i class="fas fa-plus"></i>
            </button>
        </div>
    </div>

    <table id="example" class="table table-striped table-bordered table-config">
        <colgroup>
            <col span="1" style="width: 5%;">
            <col span="1" style="width: 50%;">
            <col span="1" style="width: 10%;">
        </colgroup>
        <thead>
            <tr>
                <th>ID</th>
                <th>Service</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($roomService && $roomService->count() > 0)
                @foreach ($roomService as $service)
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>{{ $service->service }}</td>
                        <td>
                            <button class="btn btn-light editBtn" data-id="{{ $service->id }}"
                                data-service="{{ $service->service }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="btn btn-light deleteBtn" data-id="{{ $service->id }}"
                                data-url="{{ route('room-service.delete', $service->id) }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>

<div class="modal fade" id="createRoomService"tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width: 30vw; max-width: none">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Create Room Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex">
                    <div class="col-12">
                        <form id="createForm" method="POST" action="{{ route('room-service.execute') }}">
                            @csrf
                            <input type="hidden" name="id" id="serviceId">
                            <div class="form-row">
                                <div class="form-col">
                                    <label for="service" class="form-label">Service</label>
                                    <input type="text" name="service" class="form-control" id="service" required>
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
                    $('#createRoomService').modal('hide');
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
            var service = $(this).data('service');

            $('#serviceId').val(id);
            $('#service').val(service);

            $('#createModalLabel').text('Edit Room Service');
            $('#createRoomService').modal('show');
        });

        $('.deleteBtn').on('click', function() {
            var serviceId = $(this).data('id');
            var url = $(this).data('url');

            if (confirm('Are you sure you want to delete this Service?')) {
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
                        showVanillaToast('Error deleting Service', 'error');
                    }
                });
            }
        });

        $('#example').on('draw.dt', function() {
            $('.editBtn').off('click').on('click', function() {
                var id = $(this).data('id');
                var service = $(this).data('service');

                $('#serviceId').val(id);
                $('#service').val(service);

                $('#createModalLabel').text('Edit Room Service');
                $('#createRoomService').modal('show');
            });

            // Gán lại sự kiện cho nút delete
            $('.deleteBtn').off('click').on('click', function() {
                var serviceId = $(this).data('id');
                var url = $(this).data('url');

                if (confirm('Are you sure you want to delete this Service?')) {
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
                            showVanillaToast('Error deleting Service', 'error');
                        }
                    });
                }
            });
        });
    });
</script>
