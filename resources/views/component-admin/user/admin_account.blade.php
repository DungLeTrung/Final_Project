<div class="my-5 mx-5">

    <table id="example" class="table table-striped table-bordered table-config">
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
            <tr>
                <td>1</td>
                <td><img src="https://via.placeholder.com/40" class="rounded-circle" alt="Avatar"></td>
                <td>Arlene McCoy</td>
                <td>August 2, 2013</td>
                <td>205.555.0100</td>
                <td>$5.22</td>
                <td>Arlene McCoy</td>
                <td><span class="status-success">Active</span></td>
                <td><span class="status-badge">Verifying</span></td>
                <td><button class="btn btn-light">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                    <button class="btn btn-light">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                    <button class="btn btn-light">
                        <i class="fa-solid fa-ban"></i>
                    </button>
                </td>
            </tr>
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
</script>
