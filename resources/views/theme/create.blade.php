@extends('layouts.app')

@section('title')
    Create Theme
@endsection

@section('content')
    <div class="p-4">
        <livewire:theme.create />
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#sidebar li a").removeClass("active");
            $("#themes>a").addClass("active");
            $("#themes").addClass("menu-open");
            $("#themes-create").addClass("my-active");
        });
    </script>
@endsection
