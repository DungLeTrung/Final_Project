<div class="my-5 mx-5">
    <div class="d-flex justify-content-between mb-3">
        <div>
        </div>
        <div> <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createTourType">
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
                <th>Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($tourType && $tourType->count() > 0)
                @foreach ($tourType as $faq)
                    <tr>
                        <td>{{ $faq->id }}</td>
                        <td>{{ $faq->type }}</td>
                        <td>
                            <button class="btn btn-light editBtn" data-id="{{ $faq->id }}"
                                data-type="{{ $faq->type }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="btn btn-light deleteBtn" data-id="{{ $faq->id }}"
                                data-url="{{ route('tour-type.delete', $faq->id) }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>

<div class="modal fade" id="createTourType" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width: 30vw; max-width: none">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Create Tour Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex">
                    <div class="col-12">
                        <form id="createForm" method="POST" action="{{ route('tour-type.execute') }}">
                            @csrf
                            <input type="hidden" name="id" id="typeId">
                            <div class="form-row">
                                <div class="form-col">
                                    <label for="type" class="form-label">Type</label>
                                    <input type="text" name="type" class="form-control" id="type" required>
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
                    $('#createTourType').modal('hide');
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
            var type = $(this).data('type');

            $('#typeId').val(id);
            $('#type').val(type);

            $('#createModalLabel').text('Edit Tour Type');
            $('#createTourType').modal('show');
        });

        $('.deleteBtn').on('click', function() {
            var serviceId = $(this).data('id');
            var url = $(this).data('url');

            if (confirm('Are you sure you want to delete this Type?')) {
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
                        showVanillaToast('Error deleting Type', 'error');
                    }
                });
            }
        });

        $('#example').on('draw.dt', function() {
            $('.editBtn').off('click').on('click', function() {
                var id = $(this).data('id');
                var type = $(this).data('type');

                $('#typeId').val(id);
                $('#type').val(type);

                $('#createModalLabel').text('Edit Tour Type');
                $('#createTourType').modal('show');
            });

            $('.deleteBtn').off('click').on('click', function() {
                var typeId = $(this).data('id');
                var url = $(this).data('url');

                if (confirm('Are you sure you want to delete this Type?')) {
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
                            showVanillaToast('Error deleting Type', 'error');
                        }
                    });
                }
            });
        });
    });
</script>
