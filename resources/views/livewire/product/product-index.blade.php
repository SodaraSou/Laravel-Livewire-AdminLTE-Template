<div class="card card-primary">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="card-title">Products Table</h3>
            <div class="row">
                <div class="col-4">
                    <select wire:model.live='perPage' class="form-control mr-2" aria-label="Default select example">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                    </select>
                </div>
                <div class="col-8">
                    <input wire:model.live.debounce.500ms="search" type="text" class="form-control"
                        placeholder="Search Products" />
                </div>
            </div>
        </div>
    </div>
    <div class="card-body table-responsive">
        <table id="example2" class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>
                        <x-sort-button :name="'id'" :displayName="'ID'" :sortBy="$sortBy"
                            :sortDir="$sortDir"></x-sort-button>
                    </th>
                    <th>
                        Set Number
                    </th>
                    <th>
                        <x-sort-button :name="'name'" :displayName="'Name'" :sortBy="$sortBy"
                            :sortDir="$sortDir"></x-sort-button>
                    </th>
                    <th>
                        Theme
                    </th>
                    <th>
                        <x-sort-button :name="'price'" :displayName="'Price'" :sortBy="$sortBy"
                            :sortDir="$sortDir"></x-sort-button>
                    </th>
                    <th>
                        <x-sort-button :name="'stock_quantity'" :displayName="'Stock'" :sortBy="$sortBy"
                            :sortDir="$sortDir"></x-sort-button>
                    </th>
                    <th>
                        <x-sort-button :name="'created_at'" :displayName="'Created At'" :sortBy="$sortBy"
                            :sortDir="$sortDir"></x-sort-button>
                    </th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr wire:key='{{ $product->id }}'>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->set_number }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->theme->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock_quantity }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>{{ $product->updated_at }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer clearfix">
        {{ $products->links() }}
    </div>
</div>

@section('js')
    <script>
        $(document).ready(function() {
            $("#sidebar li a").removeClass("active");
            $("#product>a").addClass("active");
            $("#product").addClass("menu-open");
            $("#product-index").addClass("my-active");
        });
    </script>
@endsection
