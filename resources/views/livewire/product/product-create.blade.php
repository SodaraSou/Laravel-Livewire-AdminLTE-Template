@section('title')
    Create Product
@endsection

<div class="container p-0">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create Product</h3>
        </div>
        <form wire:submit='save'>
            <div class="card-body row">
                <div class="form-group col-12 col-md-6">
                    <label>Name</label>
                    <input wire:model='form.name' type="text" class="form-control" placeholder="Name">
                    @error('form.name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label>Set Number</label>
                    <input wire:model='form.set_number' type="text" class="form-control" placeholder="Set Number">
                    @error('form.set_number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label>Theme</label>
                    <select wire:model='form.theme_id' class="form-control">
                        <option value="">Select a theme</option>
                        @foreach ($themes as $theme)
                            <option wire:key='{{ $theme->id }}' value="{{ $theme->id }}">{{ $theme->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('form.theme_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label>Piece Count</label>
                    <input wire:model='form.piece_count' type="text" class="form-control" placeholder="Piece Count">
                    @error('form.piece_count')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label>Age Range</label>
                    <input wire:model='form.age_range' type="text" class="form-control" placeholder="Age Range">
                    @error('form.age_range')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label>Price</label>
                    <input wire:model='form.price' type="text" class="form-control" placeholder="Price">
                    @error('form.price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label>Release Date</label>
                    <input wire:model='form.release_date' type="date" class="form-control" placeholder="Price">
                    @error('form.release_date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-12 col-md-6">
                    <label>Stock Quantity</label>
                    <input wire:model='form.stock_quantity' type="text" class="form-control"
                        placeholder="Stock Quantity">
                    @error('form.stock_quantity')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</div>

@section('js')
    <script>
        $(document).ready(function() {
            $("#sidebar li a").removeClass("active");
            $("#product>a").addClass("active");
            $("#product").addClass("menu-open");
            $("#product-create").addClass("my-active");
        });
    </script>
@endsection
