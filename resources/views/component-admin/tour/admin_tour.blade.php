<div class="my-5 mx-5">
    <div class="d-flex justify-content-between mb-3">
        <div>
        </div>
        <div>
            <a href="{{ route('tour-management.create') }}" class="btn btn-primary">
                Add New <i class="fas fa-plus"></i>
            </a>
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
            @foreach ($tours as $tour)
                <tr>
                    <td>{{ $tour->id }}</td>
                    <td><img src="{{ asset('storage/' . $tour->image) }}" class="rounded-circle"
                            style="width: 100%; height: auto; object-fit: cover;" alt="Tour Image"></td>
                    <td>{{ $tour->name }}</td>
                    <td>{{ $tour->number_of_guests }}</td>
                    <td>{{ $tour->departure_time }}</td>
                    <td>{{ $tour->departure_point }}</td>
                    <td>{{ $tour->duration }}</td>
                    <td>{{ $tour->address }}</td>
                    <td>{{ $tour->destination->city . ', ' . $tour->destination->province . ', ' . $tour->destination->country }}
                    </td>
                    <td>{{ $tour->description }}</td>
                    <td>{{ $tour->tour_price }}</td>
                    <td>{{ implode(', ', array_map(fn($typeId) => $tourType->firstWhere('id', $typeId)->type, explode(',', $tour->tour_type))) }}
                    </td>
                    <td>{{ $tour->tour_rule }}</td>
                    <td>
                        {{ implode(
                            ', ',
                            array_map(function ($faqId) use ($tourFaq) {
                                $faq = $tourFaq->firstWhere('id', $faqId);
                                return $faq ? $faq->question : 'N/A';
                            }, explode(',', $tour->faq)),
                        ) }}
                    </td>
                    <td>
                        <a href="{{ route('tour-management.edit', $tour->id) }}" class="btn btn-light">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <button class="btn btn-light deleteBtn" data-id="{{ $tour->id }}"
                            data-url="{{ route('tour-management.delete', $tour->id) }}">
                            <i class="fa-solid fa-trash"></i>
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

        $('.deleteBtn').on('click', function() {
            var serviceId = $(this).data('id');
            var url = $(this).data('url');

            if (confirm('Are you sure you want to delete this ?')) {
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
    });
</script>
