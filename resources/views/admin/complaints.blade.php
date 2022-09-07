@extends('layouts.dashboard')

@section('extra-style')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}">
<style>
    .active {
        color: #696cff !important;
    }

    .nav-tabs .nav-item .nav-link {
        border: #ddd 1px solid !important;
        background-color: #eee !important;
        box-shadow: 1px 1px #ccc !important;
    }

    .nav-tabs .nav-item .active {
        border: 0px !important;
        background-color: #fff !important;
        box-shadow: none !important;
    }

</style>
<link rel="stylesheet" href="../../assets/vendor/libs/animate-css/animate.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/sweetalert2/sweetalert2.css" />
@endsection

@section('content')

<livewire:report-search/>
@endsection

@section('scripts')
<script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
<script src="../../assets/js/extended-ui-sweetalert2.js"></script>
<script src="../../assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
<script>
    $('.confirm').on('click', function(e) {
        e.preventDefault();
        var form = $(this).parents('form');
        Swal.fire({
            title: "هل انت متأكد من المتابعة"
            , text: "لن يمكنك التراجع عن هذا !"
            , icon: "warning"
            , showCancelButton: !0
            , confirmButtonText: "نعم, قم بالحذف"
            , customClass: {
                confirmButton: "btn btn-primary me-3"
                , cancelButton: "btn btn-label-secondary"
            }
            , buttonsStyling: !1
        }).then(function(t) {
            t.value ? Swal.fire({
                icon: "success"
                , title: "محذوف!"
                , text: "لقد تم الحذف بنجاخ."
                , customClass: {
                    confirmButton: "btn btn-success"
                }
            }, setTimeout(function() {

                form.submit()
            }, 1000)) : t.dismiss === Swal.DismissReason.cancel && Swal.fire({
                title: "تم الالغاء"
                , text: "تم الغاء العملية :)"
                , icon: "error"
                , customClass: {
                    confirmButton: "btn btn-success"
                }
            })
        })
    });

</script>
@endsection
