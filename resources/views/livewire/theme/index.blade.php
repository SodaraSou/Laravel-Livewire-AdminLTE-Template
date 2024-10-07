<div class="card card-primary">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="card-title">Themes Table</h3>
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
                        placeholder="Search Themes" />
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table id="example2" class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>
                        <x-sort-button :name="'id'" :displayName="'ID'" :sortBy="$sortBy"
                            :sortDir="$sortDir"></x-sort-button>
                    </th>
                    <th>
                        <x-sort-button :name="'name'" :displayName="'Name'" :sortBy="$sortBy"
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
                @foreach ($themes as $theme)
                    <tr wire:key='{{ $theme->id }}'>
                        <td>{{ $theme->id }}</td>
                        <td>{{ $theme->name }}</td>
                        <td>{{ $theme->created_at }}</td>
                        <td>{{ $theme->updated_at }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('themes.edit', $theme->id) }}" class="btn btn-primary mr-2">Edit</a>
                                <x-alert-modal :id='$theme->id'></x-alert-modal>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer clearfix">
        {{ $themes->links() }}
    </div>
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
