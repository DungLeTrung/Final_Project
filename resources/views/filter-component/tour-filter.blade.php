<div class="collapse position-absolute" class="filterCollapse" id="filterCollapse" style="right: 20px; top: 30px; width: 25vw; z-index: 5;">
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
        <hr/>
        <!-- Duration Filter -->
        <div class="mb-3">
            <label style="font-size: 1.5rem; font-weight: bold" class="form-label mb-3">Duration:</label>
            <div class="mb-3 form-check ml-3">
                <div style="font-size: 1.25rem; color: rgb(224, 140, 49)">
                    <input style="cursor: pointer" class="form-check-input" type="checkbox" id="duration1">
                </div>
                <label style="font-size: 1.25rem; font-weight: 500" class="form-check-label" for="duration1">0 - 3 days</label>
            </div>
            <div class="mb-3 form-check ml-3">
                <div style="font-size: 1.25rem; color: rgb(224, 140, 49)">
                    <input style="cursor: pointer" class="form-check-input" type="checkbox" id="duration2">
                </div>
                <label style="font-size: 1.25rem; font-weight: 500" class="form-check-label" for="duration2">3 - 5 days</label>
            </div>
            <div class="mb-3 form-check ml-3">
                <div style="font-size: 1.25rem; color: rgb(224, 140, 49)">
                    <input style="cursor: pointer"  class="form-check-input" type="checkbox" id="duration3">
                </div>
                <label style="font-size: 1.25rem; font-weight: 500" class="form-check-label" for="duration3">5 - 7 days</label>
            </div>
            <div class="mb-3 form-check ml-3">
                <div style="font-size: 1.25rem; color: rgb(224, 140, 49)">
                    <input style="cursor: pointer" class="form-check-input" type="checkbox" id="duration4">
                </div>
                <label style="font-size: 1.25rem; font-weight: 500" class="form-check-label" for="duration4">Over 1 week</label>
            </div>
        </div>
        <hr/>
        <!-- Type of Tours Filter -->
        <div class="mb-3">
            <label style="font-size: 1.5rem; font-weight: bold" class="form-label mb-3">Type of Tours:</label>
            <div class="mb-3 form-check ml-3">
                <div style="font-size: 1.25rem; color: rgb(224, 140, 49)">
                    <input style="cursor: pointer"  class="form-check-input" type="checkbox" id="type1">
                </div>
                <label style="font-size: 1.25rem; font-weight: 500" class="form-check-label" for="type1">City-Break</label>
            </div>
            <div class="mb-3 form-check ml-3">
                <div style="font-size: 1.25rem; color: rgb(224, 140, 49)">
                    <input style="cursor: pointer"  class="form-check-input" type="checkbox" id="type2">
                </div>
                <label style="font-size: 1.25rem; font-weight: 500" class="form-check-label" for="type2">Wildlife</label>
            </div>
            <div class="mb-3 form-check ml-3">
                <div style="font-size: 1.25rem; color: rgb(224, 140, 49)">
                    <input style="cursor: pointer"  class="form-check-input" type="checkbox" id="type3">
                </div>
                <label style="font-size: 1.25rem; font-weight: 500" class="form-check-label" for="type3">Cultural</label>
            </div>
            <div class="mb-3 form-check ml-3">
                <div style="font-size: 1.25rem; color: rgb(224, 140, 49)">
                    <input style="cursor: pointer"  class="form-check-input" type="checkbox" id="type4">
                </div>
                <label style="font-size: 1.25rem; font-weight: 500" class="form-check-label" for="type4">Adventure</label>
            </div>
            <div class="mb-3 form-check ml-3">
                <div style="font-size: 1.25rem; color: rgb(224, 140, 49)">
                    <input style="cursor: pointer"  class="form-check-input" type="checkbox" id="type5">
                </div>
                <label style="font-size: 1.25rem; font-weight: 500" class="form-check-label" for="type5">Eco Tourism</label>
            </div>
        </div>
        <hr/>
        <div class="mb-3">
            <button type="button" class="btn btn-primary text-center" style="background-color: #ff6f3c; border: none; width: 100%; padding: 1rem; font-size: 1.25rem">
                Apply Filters
            </button>
        </div>
    </div>

</div>
