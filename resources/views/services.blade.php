@extends('layouts.app')

@section('extra-style')
    <link rel="stylesheet" href="../../assets/vendor/css/pages/page-help-center.css">
    <link rel="stylesheet" href="../../assets/vendor/libs/bootstrap-select/bootstrap-select.css">
    <style>
        .active {
            color: #696cff !important;
        }
        .nav-tabs .nav-item .nav-link {
            border: #eee 1px solid !important;
            background-color: #fff !important;
            /*box-shadow: 1px 1px #dddd !important;*/
        }

        .nav-tabs .nav-item .active {
            border: 0px !important;
            background-color: #e9e9FF !important;
            /*box-shadow: none !important;*/
        }
    </style>
@endsection

@section('content')

<livewire:services>
@endsection

@section('scripts')
    <script src="../../assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
    <script src="../../assets/js/ui-popover.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
@endsection
