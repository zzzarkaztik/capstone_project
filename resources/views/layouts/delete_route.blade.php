<div class="modal fade" id="delete_{{ $br->bus_route_id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete route ({{ $br->bus_route_id }}) {{ $br->origin }} to
                    {{ $br->destination }}?</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">Once this action is taken, it cannot be undone.
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <form action="/admin/routes/{{ $br->bus_route_id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Delete" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
