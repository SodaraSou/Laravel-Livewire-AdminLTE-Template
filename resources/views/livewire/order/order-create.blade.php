<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
</div>

@section('js')
    <script>
        $(document).ready(function() {
            $("#sidebar li a").removeClass("active");
            $("#order>a").addClass("active");
            $("#order").addClass("menu-open");
            $("#order-create").addClass("my-active");
        });
    </script>
@endsection
