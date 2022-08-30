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

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="container-xxl flex-grow-1 container-p-y pt-0 px-sm-2 px-0">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">لوحة التحكم / </span>المجالات
            </h4>
            <div class="card position-relative">
                <h5 class="card-header fs-4 fw-bolder">المجالات</h5>
                <button type="button" class="btn btn-lg btn-primary position-absolute top-0 end-0 m-3" data-bs-toggle="modal" data-bs-target="#addCategory">
                    أضافة مجال&nbsp;<span class="tf-icons bx bx-book-add"></span>
                </button>
                <div class="modal fade" id="addCategory" tabindex="-1" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="{{route('category.store')}}" id="formAccountSettings" method="POST" 
                                class="fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" 
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="d-flex align-items-sm-center gap-4 flex-wrap">
                                        <img src="../../assets/img/backgrounds/event.jpg" alt="user-avatar"
                                             class="d-block rounded img-fluid h-px-150 w-px-150"
                                             style="object-fit: contain" id="uploadedImg">
                                        <div class="button-wrapper my-auto">
                                            <label for="upload" class="btn btn-primary me-2" tabindex="0">
                                                <span class="d-none d-sm-block">أضافة صورة</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input type="file" id="upload" class="account-file-input" name='image'
                                                       hidden="" accept="image/png, image/jpeg">
                                            </label>
                                        </div>
                                        <p class="text-muted mb-0">الصيغ المتاحة JPG, GIF أو PNG. الحد الأقصى
                                            800K</p>
                                    </div>
                                </div>
                                <hr class="my-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mb-3 col">
                                            <label for="name" class="form-label">أسم المجال</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                   placeholder="أسم المجال">
                                        </div>
                                        <div>
                                            <label for="exampleFormControlTextarea1" class="form-label">وصف
                                                المجال</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                      rows="3" placeholder="الوصف" name='description'></textarea>
                                        </div>


                                    </div>
                                    <div class="mt-2">
                                        <button type="submit" class="btn btn-primary me-2"> حفظ التعديل</button>
                                        <button type="button" class="btn btn-label-secondary"
                                                data-bs-dismiss="modal">إلغاء
                                        </button>
                                    </div>
                                    <div></div>
                                    <input type="hidden">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="nav-align-top">
                        <ul class="nav nav-tabs border-bottom border-light mx-3 mb-3" role="tablist">
                            <li class="nav-item">
                                <button type="button" class="nav-link active fas fa-th-list fs-4 bg-white" role="tab"
                                        data-bs-toggle="tab" data-bs-target="#navs-list" aria-controls="navs-top-home"
                                        aria-selected="true"></button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link fas fa-th-large fs-4 bg-white" role="tab"
                                        data-bs-toggle="tab" data-bs-target="#navs-card"
                                        aria-controls="navs-top-profile" aria-selected="false"></button>
                            </li>
                        </ul>
                        {{-- Tabs --}}
                        <div class="tab-content shadow-none pt-0">
                            {{-- List View --}}
                            <div class="tab-pane fade active show" id="navs-list" role="tabpanel">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-hover mb-5">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>أسم المجال</th>
                                            <th>تاريخ التسجيل</th>
                                            <th>عمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                        @forelse($categories as $category)
                                        <tr>
                                            <td>{{$loop->index+1 }}</td>
                                            
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->create_at}}</td>
                                            <td>
                                                <button type="button" class="btn btn-label-primary"
                                                 data-bs-toggle="modal" data-bs-target="#editeCategory1"
                                                  onclick="edit({{ $category }} , '{{ asset( $category->path ) }}' )" >
                                                    <span class="tf-icons bx bx-edit"></span>&nbsp; تعديل
                                                </button>

                                                <form class="d-inline-block" method="get" action="{{ route('category.del',$category->id) }}">
                                                    <button type="button" class="btn btn-label-danger confirm">
                                                        <span class="tf-icons bx bx-trash"></span>&nbsp; خذف
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                            <tr style='text-align: center;'>
                                            لا يوجد اصناف
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- Card View --}}
                            <div class="tab-pane fade" id="navs-card" role="tabpanel">
                                <div class="row g-4">
                                @forelse($categories as $category)
                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                        <div class="card border shadow-none">
                                            <div class="card-body text-center">
                                                <img class="mb-3" src="{{ asset("{$category->path}$category->image ") }}" height="60" alt="Help center articles">
                                                <h5>{{$category->name}}</h5>
                                                <p class="text-dark"> {{$category->description}} </p>
                                                <div class="d-flex align-items-center justify-content-around">
                                                    <button type="button" class="btn btn-label-primary" onclick="edit({{$category}},'{{ $category->path }}')">
                                                        <span class="tf-icons bx bx-edit"></span>&nbsp; تعديل
                                                    </button>

                                                    <form class="d-inline-block" method="get" action="{{ route('index') }}">
                                                        <button type="button" class="btn btn-label-danger confirm">
                                                            <span class="tf-icons bx bx-trash"></span>&nbsp; خذف
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                <div style='text-align: center;'>
                                    لا يوجد اصنااف
                                </div>
                                @endforelse

                                </div>
                            </div>
                        </div>
                        {{-- Modals --}}
                        <div>
                            <div class="modal fade" id="editeCategory1" tabindex="-1" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                             <form action="{{route('category.update')}}" id="formAccountSettings" method="POST" 
                                class="fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" 
                                enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body">
                                                <div class="d-flex align-items-sm-center gap-4 flex-wrap">
                                                    <img src="" alt="user-avatar" 
                                                         class="d-block rounded img-fluid h-px-150 w-px-150"
                                                         style="object-fit: contain" id="uploadedImg">
                                                    <div class="button-wrapper my-auto">
                                                        <label for="upload" class="btn btn-primary me-2" tabindex="0">
                                                            <span class="d-none d-sm-block">أضافة صورة</span>
                                                            <i class="bx bx-upload d-block d-sm-none"></i>
                                                            <input type="file" id="upload" class="account-file-input" name='image'
                                                                hidden="" accept="image/png, image/jpeg">
                                                        </label>
                                                    </div>
                                                    <p class="text-muted mb-0">الصيغ المتاحة JPG, GIF أو PNG. الحد الأقصى
                                                        800K</p>
                                                </div>
                                            </div>
                                            <input type="hidden"  name='id' value=''>

                                            <hr class="my-0">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="mb-3 col">
                                                        <label for="name" class="form-label">أسم المجال</label>
                                                        <input type="text" class="form-control" id="name" 
                                                               placeholder="أسم المجال" value="" name='name'>
                                                    </div>
                                                    <div>
                                                        <label for="exampleFormControlTextarea1" class="form-label">وصف
                                                            المجال</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                                  rows="3" placeholder="الوصف"
                                                                  name='description'
                                                                  > يمكنك الحصول على تصاميم عالية الجودة واختيار المصمم المناسب لطلب
                                        تصميمك </textarea>
                                                    </div>


                                                </div>
                                                <div class="mt-2">
                                                    <button type="submit" class="btn btn-primary me-2"> حفظ التعديل</button>
                                                    <button type="button" class="btn btn-label-secondary"
                                                            data-bs-dismiss="modal">إلغاء
                                                    </button>
                                                </div>
                                                <div></div>
                                                <input type="hidden">
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js') }}"></script>
    <script src="../../assets/js/extended-ui-sweetalert2.js"></script>
    <script src="../../assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
    <script>
        imgInp = document.getElementById('upload');
        imgView = document.getElementById('uploadedImg');
        reset = document.getElementById('reset');
        const r = imgView.src;

        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                imgView.src = URL.createObjectURL(file)
            }
        }

        reset.onclick = evt => {
            imgInp.value = "",
                imgView.src = r
        }
    </script>
    <script>
        $('.confirm').on('click',function(e){
            e.preventDefault();
            var form = $(this).parents('form');
            Swal.fire({
                title: "هل انت متأكد من المتابعة",
                text: "لن يمكنك التراجع عن هذا !",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonText: "نعم, قم بالحذف",
                customClass: {confirmButton: "btn btn-primary me-3", cancelButton: "btn btn-label-secondary"},
                buttonsStyling: !1
            }).then(function (t) {
                t.value ? Swal.fire({
                        icon: "success",
                        title: "محذوف!",
                        text: "لقد تم الحذف بنجاخ.",
                        customClass: {confirmButton: "btn btn-success"}
                    }, setTimeout(function(){

                        form.submit()
                    }, 1000)
                ) : t.dismiss === Swal.DismissReason.cancel && Swal.fire({
                    title: "تم الالغاء",
                    text: "تم الغاء العملية :)",
                    icon: "error",
                    customClass: {confirmButton: "btn btn-success"}
                })
            })
        });

    
        function edit(category,path=''){
            const img =  document.querySelector('#editeCategory1 .modal-dialog form img');
            const id =  document.querySelector('input[name=id]');
            const name =  document.querySelector('#editeCategory1 .modal-dialog form input#name[name=name]');
            const description =  document.querySelector('#editeCategory1 .modal-dialog form textarea[name=description]');

            console.log(id);
            id.value=category.id;
            name.value=category.name;
            img.src=path+'/'+category.image;
            description.innerText=category.description;

        }
    </script>
@endsection
