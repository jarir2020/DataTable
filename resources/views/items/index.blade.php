@extends('layouts.item')

@section('content')
<div class="container">
    <h1>Items List</h1>
    <button class="btn btn-primary mb-3" id="addNewItem">Add New</button>

    <table id="itemsTable" class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>


<div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="itemForm">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Add Item</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var table = $('#itemsTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('items.index') }}',
        columns: [
            { data: 'name', name: 'name' },
            { data: 'description', name: 'description' },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            }
        ]
    });


    $('#addNewItem').click(function() {
        $('#itemModal').modal('show');
        $('#modalTitle').text('Add Item');
        $('#itemForm').trigger('reset');
        $('#itemForm').off('submit').on('submit', addItem);
    });


    function addItem(e) {
        e.preventDefault();
        let formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: '{{ route('items.store') }}',
            data: formData,
            success: function(response) {
                $('#itemModal').modal('hide');
                table.ajax.reload();
                alert(response.success);
            },
            error: function(response) {
                alert('Error adding item');
            }
        });
    }


    $('body').on('click', '.editItem', function() {
        var itemId = $(this).data('id');
        $.get("{{ route('items.index') }}" + '/' + itemId + '/edit', function(data) {
            $('#modalTitle').text('Edit Item');
            $('#itemModal').modal('show');
            $('#name').val(data.name);
            $('#description').val(data.description);

            $('#itemForm').off('submit').on('submit', function(e) {
                e.preventDefault();
                updateItem(e, itemId);
            });
        });
    });


    function updateItem(e, itemId) {
        e.preventDefault();
        let formData = $('#itemForm').serialize();

        $.ajax({
            type: 'PUT',
            url: '{{ route('items.index') }}' + '/' + itemId,
            data: formData,
            success: function(response) {
                $('#itemModal').modal('hide');
                table.ajax.reload();
                alert(response.success);
            },
            error: function(response) {
                alert('Error updating item');
            }
        });
    }


    $('body').on('click', '.deleteItem', function() {
        var itemId = $(this).data('id');
        if (confirm("Are you sure you want to delete this item?")) {
            $.ajax({
                type: 'DELETE',
                url: '{{ route('items.index') }}' + '/' + itemId,
                success: function(response) {
                    table.ajax.reload();
                    alert(response.success);
                },
                error: function(response) {
                    alert('Error deleting item');
                }
            });
        }
    });
});
</script>
@endpush

