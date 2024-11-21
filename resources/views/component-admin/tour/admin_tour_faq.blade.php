<div class="my-5 mx-5">
    <div class="d-flex justify-content-between mb-3">
        <div>
        </div>
        <div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createTourFaq">
                Add New <i class="fas fa-plus"></i>
            </button>
        </div>
    </div>
    <table id="example" class="table table-striped table-bordered table-config">
        <colgroup>
            <col span="1" style="width: 5%;">
            <col span="1" style="width: 10%;">
            <col span="1" style="width: 20%;">
            <col span="1" style="width: 50%;">
            <col span="1" style="width: 10%;">
        </colgroup>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tour</th>
                <th>Question</th>
                <th>Answer</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($tourFaq && $tourFaq->count() > 0)
                @foreach ($tourFaq as $faq)
                    <tr>
                        <td>{{ $faq->id }}</td>
                        <td>{{ $faq->tour->name ?? 'N/A' }}</td>
                        <td>{{ $faq->question }}</td>
                        <td>{{ $faq->answer }}</td>
                        <td>
                            <button class="btn btn-light editBtn" data-id="{{ $faq->id }}"
                                data-question="{{ $faq->question }}" data-answer="{{ $faq->answer }}"
                                data-tour="{{ $faq->tour->id ?? '' }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                            <button class="btn btn-light deleteBtn" data-id="{{ $faq->id }}"
                                data-url="{{ route('tour-faq.delete', $faq->id) }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>

<div class="modal fade" id="createTourFaq" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Create Tour FAQ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex">
                    <div class="col-12">
                        <form id="createForm" method="POST" action="{{ route('tour-faq.execute') }}">
                            @csrf
                            <input type="hidden" name="id" id="w">
                            <!-- Hidden field to store the FAQ ID -->
                            <div class="form-row">
                                <div class="form-col">
                                    <label for="tour_id" class="form-label">Select Tour</label>
                                    <select name="tour_id" class="form-control" id="tour_id" required>
                                        @foreach ($tours as $tour)
                                            <option value="{{ $tour->id }}">{{ $tour->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-col">
                                    <label for="question" class="form-label">Question</label>
                                    <input type="text" name="question" class="form-control" id="question" required>
                                </div>
                                <div class="form-col">
                                    <label for="answer" class="form-label">Answer</label>
                                    <input type="text" name="answer" class="form-control" id="answer" required>
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
                    $('#createTourFaq').modal('hide');
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
            var question = $(this).data('question');
            var answer = $(this).data('answer');
            var tourId = $(this).data('tour');

            $('#faqId').val(id);
            $('#question').val(question);
            $('#answer').val(answer);
            $('#tour_id').val(tourId);

            $('#createModalLabel').text('Edit Tour FAQ');
            $('#createTourFaq').modal('show');
        });

        $('.deleteBtn').on('click', function() {
            var faqId = $(this).data('id');
            var url = $(this).data('url');

            if (confirm('Are you sure you want to delete this FAQ?')) {
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
                        showVanillaToast('Error deleting FAQ', 'error');
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

                $('#faqId').val(id);
                $('#question').val(question);
                $('#answer').val(answer);

                $('#createModalLabel').text('Edit Tour FAQ');
                $('#createTourFaq').modal('show');
            });

            $('.deleteBtn').off('click').on('click', function() {
                var faqId = $(this).data('id');
                var url = $(this).data('url');

                if (confirm('Are you sure you want to delete this FAQ?')) {
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
                            showVanillaToast('Error deleting FAQ', 'error');
                        }
                    });
                }
            });
        });
    });
</script>
