<!-- resources/views/admin/routes/index.blade.php -->
@extends('admin.admin-layout')

@section('content')
<div class="d-flex justify-content-between align-items-center my-4">
    <h2>Route Management</h2>
    <button class="btn btn-primary" onclick="toggleForm()">Add Route</button>
</div>
<div id="routeForm" class="card p-4" style="display: none;">
    @include('admin.routes.form')
</div>
<div class="route-list mt-4">
    <!-- Example route item -->
    <div class="card route-item mb-3">
        <div class="card-body d-flex justify-content-between align-items-center">
            <div>
                <h5 class="card-title">Route A</h5>
                <p class="card-text">Route Code: A1</p>
                <p class="card-text">Color: <span style="background-color: #ff0000; color: white; padding: 0 5px;">#ff0000</span></p>
            </div>
            <div>
                <button class="btn btn-info btn-sm mr-2">Edit</button>
                <button class="btn btn-danger btn-sm">Delete</button>
            </div>
        </div>
    </div>
    <!-- Add more route items here -->
</div>
@endsection

@section('scripts')
<script>
    function toggleForm() {
        var form = document.getElementById('routeForm');
        form.style.display = form.style.display === 'none' ? 'block' : 'none';
    }

    function addRouteItem() {
        var routeItems = document.getElementById('routeItems');
        var newItem = document.createElement('div');
        newItem.classList.add('form-group', 'route-item');
        newItem.innerHTML = `
            <label for="routeStreet">Route Street</label>
            <input type="text" class="form-control" name="routeStreet[]" placeholder="Enter street name">
            <button type="button" class="btn btn-danger btn-sm mt-2" onclick="removeRouteItem(this)">Remove</button>
        `;
        routeItems.appendChild(newItem);
    }

    function removeRouteItem(button) {
        var routeItem = button.parentElement;
        routeItem.remove();
    }

    function saveRoute() {
        // Save route logic
        alert('Route saved!');
        toggleForm();
    }
</script>
@endsection
