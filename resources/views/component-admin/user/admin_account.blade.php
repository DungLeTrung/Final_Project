<div class="my-5 mx-5">

    <table id="example" class="table table-striped table-bordered table-config">
        <colgroup>
            <col span="1" style="width: 5%;">
            <col span="1" style="width: 15%;">
            <col span="1" style="width: 10%;">
            <col span="1" style="width: 10%;">
            <col span="1" style="width: 10%;">
            <col span="1" style="width: 10%;">
            <col span="1" style="width: 10%;">
            <col span="1" style="width: 10%;">
            <col span="1" style="width: 10%;">
            <col span="1" style="width: 10%;">
        </colgroup>
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>User Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Active</th>
                <th>Verify</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->user_name }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->address }}</td>
                    <td id="status-{{ $user->id }}">
                        <span class="status-{{ $user->is_active ? 'success' : 'badge' }}">
                            {{ $user->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td>
                        <span class="status-{{ $user->is_verify ? 'success' : 'badge' }}">
                            {{ $user->is_verify ? 'Verified' : 'Unverified' }}
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-light toggle-ban-btn" data-id="{{ $user->id }}">
                            <i class="fa-solid fa-ban"></i> {{ $user->is_active ? 'Ban' : 'Unban' }}
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
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
    });

    $('.toggle-ban-btn').on('click', function() {
        var userId = $(this).data('id');
        var currentStatus = $('#status-' + userId).text().trim();
        var newStatus = currentStatus === 'Active' ? 'Inactive' :
        'Active';

        // Hiển thị thông báo confirm
        if (!confirm('Are you sure you want to ' + (newStatus === 'Active' ? 'unban' : 'ban') +
            ' this user?')) {
            return;
        }

        $.ajax({
            url: '{{ route('user.toggle-ban') }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                user_id: userId,
                status: newStatus
            },
            success: function(response) {
                if (newStatus === 'Active') {
                    $('.status-' + userId).text('Active').removeClass('badge').addClass('success');
                    $('.toggle-ban-btn[data-id="' + userId + '"]').text('Unban').removeClass(
                        'btn-danger').addClass('btn-success');
                } else {
                    $('.status-' + userId).text('Inactive').removeClass('success').addClass(
                    'badge');
                    $('.toggle-ban-btn[data-id="' + userId + '"]').text('Ban').removeClass(
                        'btn-success').addClass('btn-danger');
                }

                showVanillaToast(response.message, 'success');
                location.reload();
            },
            error: function(xhr) {
                showVanillaToast('Error occurred', 'error');
            }
        });
    });
</script>
