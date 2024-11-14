<div class="my-5 mx-5">
    <div class="d-flex justify-content-between mb-3">
        <div>
        </div>
        <div>
            <button class="btn btn-primary">Add New <i class="fas fa-plus"></i></button>
        </div>
    </div>

    <table id="example" class="table table-striped table-bordered table-config">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Number Of Guests</th>
                <th>Departure Time</th>
                <th>Departure Point</th>
                <th>Duration</th>
                <th>Address</th>
                <th>Destination</th>
                <th>Description</th>
                <th>Tour Price</th>
                <th>Tour Type</th>
                <th>Tour Rule</th>
                <th>FAQ</th>
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
                <td>August 2, 2013</td>
                <td>205.555.0100</td>
                <td>$5.22</td>
                <td>$5.22</td>
                <td>$5.22</td>
                <td>$5.22</td>
                <td>$5.22</td>
                <td><button class="btn btn-light">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                    <button class="btn btn-light">
                        <i class="fa-solid fa-trash"></i>
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
