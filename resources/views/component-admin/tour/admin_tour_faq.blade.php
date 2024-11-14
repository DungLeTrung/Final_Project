<div class="my-5 mx-5">
    <div class="d-flex justify-content-between mb-3">
        <div>
        </div>
        <div>
            <button class="btn btn-primary">Add New <i class="fas fa-plus"></i></button>
        </div>
    </div>

    <table id="example" class="table table-striped table-bordered table-config">
        <colgroup>
            <col span="1" style="width: 5%;">
            <col span="1" style="width: 20%;">
            <col span="1" style="width: 55%;">
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
            <tr>
                <td>1</td>
                <td>ABC</td>
                <td>ABC</td>
                <td>BlaBla</td>
                <td>
                    <button class="btn btn-light">
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
