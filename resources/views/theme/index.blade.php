@extends('layouts.app')

@section('title')
    Theme
@endsection

@section('content')
    <div class="p-4">
        <livewire:theme.index />
    </div>
@endsection

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
