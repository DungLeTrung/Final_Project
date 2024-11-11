<div class="collapse position-absolute" class="filterCollapse" id="filterCollapse"
    style="right: 20px; top: 60px; width: 20vw; z-index: 5;">
    <div class="card card-body shadow" style="overflow-x: auto">
        <div class="d-flex justify-content-between">
            <h4 style="color: #03387D">FILTER BY</h4>
            <h4 style="color: #C4C4C4; cursor: pointer">CLEAR</h4>
        </div>
        <!-- Budget Range Filter -->
        <div class="mb-3">
            <label style="font-size: 1.5rem; font-weight: bold" for="budgetRange" class="mb-3">Budget:</label>
            <div id="budgetRange" class="mb-3"></div>
            <div class="d-flex justify-content-between">
                <span style="font-size: 1.25rem" id="budgetMin"></span>
                <span style="font-size: 1.25rem" id="budgetMax"></span>
            </div>
        </div>
        <hr />
        <!-- Duration Filter -->
        <div class="mb-3">
            <label style="font-size: 1.5rem; font-weight: bold" class="form-label mb-3">Hotel Star:</label>
            <div class="form-check mb-3 ml-3">
                <div style="font-size: 1.25rem; color: rgb(224, 140, 49)">
                    <input style="cursor: pointer" class="form-check-input star-checkbox" type="checkbox" id="star5">
                </div>
                <label class="form-check-label" for="star5">
                    <div class="d-flex gap-3">
                        <i class="bi bi-star-fill" style="font-size: 1.25rem; color: rgb(224, 140, 49)"></i>
                        <i class="bi bi-star-fill" style="font-size: 1.25rem; color: rgb(224, 140, 49)"></i>
                        <i class="bi bi-star-fill" style="font-size: 1.25rem; color: rgb(224, 140, 49)"></i>
                        <i class="bi bi-star-fill" style="font-size: 1.25rem; color: rgb(224, 140, 49)"></i>
                        <i class="bi bi-star-fill" style="font-size: 1.25rem; color: rgb(224, 140, 49)"></i>
                    </div>
                </label>
            </div>
            <div class="form-check mb-3 ml-3">
                <div style="font-size: 1.25rem; color: rgb(224, 140, 49)">
                    <input style="cursor: pointer" class="form-check-input star-checkbox" type="checkbox" id="star4">
                </div>
                <label class="form-check-label" for="star4">
                    <div class="d-flex gap-3">
                        <i class="bi bi-star-fill" style="font-size: 1.25rem; color: rgb(224, 140, 49)"></i>
                        <i class="bi bi-star-fill" style="font-size: 1.25rem; color: rgb(224, 140, 49)"></i>
                        <i class="bi bi-star-fill" style="font-size: 1.25rem; color: rgb(224, 140, 49)"></i>
                        <i class="bi bi-star-fill" style="font-size: 1.25rem; color: rgb(224, 140, 49)"></i>
                    </div>
                </label>
            </div>
            <div class="form-check mb-3 ml-3">
                <div style="font-size: 1.25rem; color: rgb(224, 140, 49)">
                    <input style="cursor: pointer" class="form-check-input star-checkbox" type="checkbox" id="star3">
                </div>
                <label class="form-check-label" for="star3">
                    <div class="d-flex gap-3">
                        <i class="bi bi-star-fill" style="font-size: 1.25rem; color: rgb(224, 140, 49)"></i>
                        <i class="bi bi-star-fill" style="font-size: 1.25rem; color: rgb(224, 140, 49)"></i>
                        <i class="bi bi-star-fill" style="font-size: 1.25rem; color: rgb(224, 140, 49)"></i>
                    </div>
                </label>
            </div>
            <div class="form-check mb-3 ml-3">
                <div style="font-size: 1.25rem; color: rgb(224, 140, 49)">
                    <input style="cursor: pointer" class="form-check-input star-checkbox" type="checkbox" id="star2">
                </div>
                <label class="form-check-label" for="star2">
                    <div class="d-flex gap-3">
                        <i class="bi bi-star-fill" style="font-size: 1.25rem; color: rgb(224, 140, 49)"></i>
                        <i class="bi bi-star-fill" style="font-size: 1.25rem; color: rgb(224, 140, 49)"></i>
                    </div>
                </label>
            </div>
            <div class="form-check mb-3 ml-3">
                <div style="font-size: 1.25rem; color: rgb(224, 140, 49)">
                    <input style="cursor: pointer" class="form-check-input star-checkbox" type="checkbox" id="star1">
                </div>
                <label class="form-check-label" for="star1">
                    <div class="d-flex gap-3">
                        <i class="bi bi-star-fill" style="font-size: 1.25rem; color: rgb(224, 140, 49)"></i>
                    </div>
                </label>
            </div>
        </div>
        <hr />
        <!-- Type of Tours Filter -->
        <div class="mb-3">
            <label style="font-size: 1.5rem; font-weight: bold" class="form-label mb-3">Review Score:</label>
            <div class="mb-3 form-check ml-3">
                <div style="font-size: 1.25rem; color: rgb(224, 140, 49)">
                    <input style="cursor: pointer" class="form-check-input star-checkbox" type="checkbox" id="rate1">
                </div>
                <label style="font-size: 1.25rem; font-weight: 500" class="form-check-label"
                    for="rate1">Wonderful:
                    9.5+
                </label>
            </div>
            <div class="mb-3 form-check ml-3">
                <div style="font-size: 1.25rem; color: rgb(224, 140, 49)">
                    <input style="cursor: pointer" class="form-check-input star-checkbox" type="checkbox" id="rate2">
                </div>
                <label style="font-size: 1.25rem; font-weight: 500" class="form-check-label" for="rate2">Very
                    Good: 9+
                </label>
            </div>
            <div class="mb-3 form-check ml-3">
                <div style="font-size: 1.25rem; color: rgb(224, 140, 49)">
                    <input style="cursor: pointer" class="form-check-input star-checkbox" type="checkbox" id="rate3">
                </div>
                <label style="font-size: 1.25rem; font-weight: 500" class="form-check-label" for="rate3">Good:
                    8+
                </label>
            </div>
            <div class="mb-3 form-check ml-3">
                <div style="font-size: 1.25rem; color: rgb(224, 140, 49);">
                    <input style="cursor: pointer" class="form-check-input star-checkbox" type="checkbox" id="rate4">
                </div>
                <label style="font-size: 1.25rem; font-weight: 500" class="form-check-label" for="rate4">Pleasant:
                    7+
                </label>
            </div>
        </div>
        <hr />
        <div class="mb-3">
            <button type="button" class="btn btn-primary text-center"
                style="background-color: #ff6f3c; border: none; width: 100%; padding: 1rem; font-size: 1.25rem">
                Apply Filters
            </button>
        </div>
    </div>

</div>
