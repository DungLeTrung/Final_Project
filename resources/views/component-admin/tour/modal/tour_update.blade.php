<div class="breadcrumb mb-3 p-3" style="background-color: antiquewhite">
    <a style="color: orange; font-size: 1.5rem" href="{{ route('tour-management') }}">Tours</a>
    <span style="font-size: 1.5rem">&nbsp;>&nbsp;Update Tour</span>
</div>

<div class="container my-5 col-10">
    <h1>Update Tour</h1>
    <form id="updateForm" method="POST" data-tour-id="{{ $tour->id }}"
        action="{{ route('tour-management.update', $tour->id) }}" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <!-- Left Column -->
        <div class="row">
            <!-- Left Column: Image and Basic Info -->
            <div class="col-md-4">
                <div class="mb-4">
                    <label for="image" class="form-label">Thumbnail Image</label>
                    <input type="file" name="image" class="form-control" id="image" accept="image/*">
                    <img id="previewImage" src="{{ old('image', asset('storage/' . $tour->image)) }}"
                        class="img-thumbnail mt-3 w-100" alt="Preview Image">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name"
                        value="{{ old('name', $tour->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="number_of_guests" class="form-label">Number of Guests</label>
                    <input type="number" name="number_of_guests" class="form-control" id="number_of_guests"
                        value="{{ old('number_of_guests', $tour->number_of_guests) }}" required>
                </div>

                <div class="mb-3">
                    <label for="tourPrice" class="form-label">Tour Price</label>
                    <input type="text" name="tour_price" class="form-control" id="tourPrice"
                        value="{{ old('tour_price', $tour->tour_price) }}" required>
                </div>
            </div>

            <!-- Right Column: Tour Details -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="departureTime" class="form-label">Departure Time</label>
                        <input type="datetime-local" name="departure_time" class="form-control" id="departureTime"
                            value="{{ old('departure_time', \Carbon\Carbon::parse($tour->departure_time)->format('Y-m-d\TH:i')) }}"
                            required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="departurePoint" class="form-label">Departure Point</label>
                        <input type="text" name="departure_point" class="form-control" id="departurePoint"
                            value="{{ old('departure_point', $tour->departure_point) }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="duration" class="form-label">Duration</label>
                        <input type="text" name="duration" class="form-control" id="duration"
                            value="{{ old('duration', $tour->duration) }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="address"
                            value="{{ old('address', $tour->address) }}" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" id="description" rows="3" required>{{ old('description', $tour->description) }}</textarea>
                </div>

                <!-- Tour Type -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="tourType" class="form-label">Tour Type</label>
                        <select id="tourType" class="form-select" multiple name="tour_type[]" required>
                            @foreach ($tourType as $type)
                                <option value="{{ $type->id }}"
                                    {{ in_array($type->id, old('tour_type', explode(',', $tour->tour_type))) ? 'selected' : '' }}>
                                    {{ $type->type }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="faq" class="form-label">FAQ</label>
                        <select id="faq" class="form-select" multiple name="faq[]" required>
                            @foreach ($tourFaq as $faq)
                                <option value="{{ $faq->id }}"
                                    {{ in_array($faq->id, old('faq', explode(',', $tour->faq))) ? 'selected' : '' }}>
                                    {{ $faq->question }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Destination and Services -->
                <div class="mb-3">
                    <label for="destination" class="form-label">Destination</label>
                    <select id="destination" class="form-select" name="destination_id" required>
                        @foreach ($tourDestination as $destination)
                            <option value="{{ $destination->id }}"
                                {{ $destination->id == old('destination_id', $tour->destination_id) ? 'selected' : '' }}>
                                {{ $destination->city }} - {{ $destination->province }} - {{ $destination->country }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="services" class="form-label">Services</label>
                    <select id="services" class="form-select" multiple name="services[]" required>
                        @foreach ($tourService as $service)
                            <option value="{{ $service->id }}"
                                {{ in_array($service->id, old('services', $tour->services->pluck('id')->toArray())) ? 'selected' : '' }}>
                                {{ $service->service }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="tourRule" class="form-label">Tour Rule</label>
                    <textarea name="tour_rule" class="form-control" id="tourRule" rows="4" required>{{ old('tour_rule', $tour->tour_rule) }}</textarea>
                </div>
            </div>
        </div>

        <div class="row g-3">
            <label class="form-label">Album</label>
            <div class="col-3">
                <div class="file-upload-wrapper" id="fileUploadWrapper">
                    <i class="fas fa-plus file-upload-icon"></i>
                    <input type="file" class="custom-file-input" name="gallery_images[]" id="galleryImages"
                        accept="image/*" multiple>
                </div>
            </div>
            <div class="row mt-3 g-3" id="thumbnailContainer">
                @foreach ($tour->images as $image)
                    <div class="col-3" id="image-{{ $image->id }}">
                        <div class="thumbnail-container">
                            <img src="{{ asset('storage/' . $image->url) }}" class="img-thumbnail">
                            <button type="button" class="thumbnail-close"
                                onclick="deleteImage({{ $image->id }})">&times;</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Submit Button -->
        <div class="row">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update Tour</button>
            </div>
        </div>

    </form>
    <script>
        $(document).ready(function() {
            $('#updateForm').on('submit', function(e) {
                e.preventDefault();

                var formData = new FormData(this);

                var tourId = $('#updateForm').data(
                    'tour-id'); 
                formData.append('id', tourId);

                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        showVanillaToast(response.message, 'success');
                        setTimeout(() => {
                            window.location.href = response.redirect;
                        }, 3000);
                    },
                    error: function(xhr, status, error) {
                        formValidAjax(xhr);
                    }
                });
            });
        });

        document.getElementById('image').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const previewImage = document.getElementById('previewImage');

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                };

                reader.readAsDataURL(file);
            } else {
                previewImage.src = 'https://via.placeholder.com/150';
            }
        });

        document.getElementById('fileUploadWrapper').addEventListener('click', function() {
            document.getElementById('galleryImages').click();
        });

        $(document).ready(function() {
            $('#galleryImages').on('change', function() {
                var formData = new FormData();

                $.each(this.files, function(i, file) {
                    formData.append('gallery_images[]', file);
                });

                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: '{{ route('tour-management.update-gallery', $tour->id) }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(response) {
                        if (response.success) {
                            var newImages = response.images;
                            var thumbnailContainer = $('#thumbnailContainer');
                            thumbnailContainer.empty();

                            $.each(newImages, function(i, image) {
                                var imageUrl = '/storage/' + image.url;

                                var thumbnail = `
                                    <div class="col-3">
                                        <div class="thumbnail-container">
                                            <img src="${imageUrl}" class="img-thumbnail">
                                            <button type="button" class="thumbnail-close" onclick="deleteImage(${image.id})">&times;</button>
                                        </div>
                                    </div>`;
                                thumbnailContainer.append(thumbnail);
                            });
                        } else {
                            alert('Failed to upload images');
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('Error uploading images');
                    }
                });
            });
        });

        function deleteImage(imageId) {
            if (confirm("Are you sure you want to delete this image?")) {
                $.ajax({
                    url: '/tour/{{ $tour->id }}/delete-image/' +
                        imageId,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#image-' + imageId).remove();
                            showVanillaToast(response.message, 'success');
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('Error deleting the image');
                    }
                });
            }
        }
    </script>
</div>
