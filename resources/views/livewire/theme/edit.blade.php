<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Theme</h3>
    </div>
    <form wire:submit='update'>
        <div class="card-body">
            <div class="form-group">
                <label>Name</label>
                <input wire:model='name' type="text" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</div>

@section('js')
    <script>
        $(document).ready(function() {
            $("#sidebar li a").removeClass("active");
            $("#themes>a").addClass("active");
            $("#themes").addClass("menu-open");
            $("#themes-index").addClass("my-active");
        });
    </script>
@endsection
