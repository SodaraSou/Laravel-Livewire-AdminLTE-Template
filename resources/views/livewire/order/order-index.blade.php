<div>
    {{-- Be like water. --}}
</div>

@section('js')
    <script>
        $(document).ready(function() {
            $("#sidebar li a").removeClass("active");
            $("#order>a").addClass("active");
            $("#order").addClass("menu-open");
            $("#order-index").addClass("my-active");
        });
    </script>
@endsection
