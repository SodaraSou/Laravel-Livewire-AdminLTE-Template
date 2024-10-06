<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
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
