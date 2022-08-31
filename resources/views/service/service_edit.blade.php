@extends('layouts.dashboard')
@section('extra-style')
    <link rel="stylesheet" href="../../assets/vendor/libs/sweetalert2/sweetalert2.css" />
@endsection
@section('content')
    <div class="container-xxl flex-grow-1">
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">لوحة التحكم / الخدمات /</span> تعديل خدمة
        </h4>
        <div class="row">
            <!-- User Sidebar -->
            <div class="col-md-6">
                <!-- User Card -->
                <form>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="user-avatar-section">
                                <div class=" d-flex align-items-center flex-column">
                                    <div class="user-avatar-section">
                                        <div class=" d-flex align-items-center flex-column">
                                            <img id="uploadedImg" class="img-fluid rounded mx-4 w-75" src="{{ asset('assets/img/backgrounds/3.jpg') }}" height="100" width="100" alt="User avatar">
                                        </div>
                                    </div>
                                    <label for="upload" class="btn btn-primary my-4" tabindex="0">
                                        <span class="d-none d-sm-block">تعديل الصورة</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input type="file" id="upload" class="account-file-input" hidden
                                               accept="image/png, image/jpeg"/>
                                    </label>
                                </div>
                            </div>
                            <hr class="my-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <label for="name" class="form-label">أسم الخدمة</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               placeholder="أسم الخدمة" value="تصميم مواقع">
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label for="timeZones" class="form-label">المجال</label>
                                        <select id="selectpickerBasic" class="form-select selectpicker w-100" data-style="btn-default">
                                            <option value="" data-select2-id="2">أختر</option>
                                            <option value="Turkey">الكهرباء</option>
                                            <option value="Ukraine">التصميم</option>
                                            <option value="United Arab Emirates" selected>البرمجة</option>
                                            <option value="United Kingdom">النجارة</option>
                                            <option value="United States">الرياضة</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label for="timeZones" class="form-label">نوع الدفع</label>
                                        <select id="selectpickerBasic" class="form-select selectpicker w-100" data-style="btn-default">
                                            <option value="" data-select2-id="2">أختر</option>
                                            <option value="Turkey">رقمي</option>
                                            <option value="Ukraine" selected>دفع عند الاستلام</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-sm-12">
                                        <label for="timeZones" class="form-label">مدة التسليم</label>
                                        <select id="selectpickerBasic" class="form-select selectpicker w-100" data-style="btn-default">
                                            <option value="" data-select2-id="2">أختر</option>
                                            <option value="Turkey">يوم</option>
                                            <option value="Ukraine">يومين</option>
                                            <option value="United Arab Emirates">3 أيام</option>
                                            <option value="United Kingdom">4 أيام</option>
                                            <option value="United States">5 أيام</option>
                                            <option value="United States">6 أيام</option>
                                            <option value="United States"> أسبوع</option>
                                            <option value="United States" selected>أسبوعين</option>
                                            <option value="United States">3 أسابيع</option>
                                            <option value="United States">شهر</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label for="timeZones" class="form-label">المحافظة</label>
                                        <select id="selectpickerBasic" class="form-select selectpicker w-100" data-style="btn-default">
                                            <option value="" data-select2-id="2">أختر</option>
                                            <option value="" selected>حضرموت</option>
                                            <option value="">عدن</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-sm-6">
                                        <label for="timeZones" class="form-label">المدينة</label>
                                        <select id="selectpickerBasic" class="form-select selectpicker w-100" data-style="btn-default">
                                            <option value="" data-select2-id="2">أختر</option>
                                            <option value="Turkey" selected>المكلا</option>
                                            <option value="Ukraine">الشحر</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-sm-12">
                                        <label for="name" class="form-label">العنوان</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               placeholder="أسم الخدمة" value="فوه القديمة - بجانب ملعب النادي">
                                    </div>
                                    <div>
                                        <label for="exampleFormControlTextarea1" class="form-label">وصف
                                            الخدمة</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows="3" placeholder="الوصف">سوف اقوم بتنفيذ تصميم احترافى وجذاب لموقعك على منصه سله, تصميم وبرمجة موقع ووردبريس احترافي, تمصميم واجهات وتجربة المستخدم لموقعك الالكتروني بإحترافية.</textarea>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary mt-3 w-100"> حفظ التعديل</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--/ User Sidebar -->
            <!-- User Content -->
            <div class="col-md-6 bg-white">
                <div class="col-12 py-3 position-relative">
                    <div class="d-flex align-items-center mx-4 mb-3 justify-content-between flex-wrap">
                        <a href="#" class="d-flex align-items-center flex-wrap">
                            <div class="avatar avatar-sm me-2">
                                <img src="http://127.0.0.1:8000/assets/img/icons/unicons/laptop.png" alt="Avatar" class="rounded-circle">
                            </div>
                            <div class="me-2 text-body h5 mb-0">
                                نماذج اعمال
                            </div>
                        </a>
                        <button type="button" class="btn btn-lg btn-primary m-3" data-bs-toggle="modal"
                                data-bs-target="#addService">
                            أضافة نموذج عمل&nbsp;<span class="tf-icons bx bx-book-add"></span>
                        </button>
                    </div>

                    <div class="modal fade" id="addService" tabindex="-1" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">

                            <div class="modal-content">
                                <form>
                                    <div class="user-avatar-section mt-5">
                                        <div class=" d-flex align-items-center flex-column">
                                            <div class="user-avatar-section">
                                                <div class=" d-flex align-items-center flex-column">
                                                    <img id="cardUploadImg" class="img-fluid rounded mx-4 w-75" src="" alt="">
                                                </div>
                                            </div>
                                            <label for="cardUpload" class="btn btn-primary mt-3" tabindex="0">
                                                <span class="d-none d-sm-block bx bx-upload"> أضافة صورة</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input type="file" id="cardUpload" class="account-file-input" hidden="" accept="image/png, image/jpeg">
                                            </label>
                                            <div class="mb-4 col-md-10 px-5">
                                                <label for="name" class="form-label">أسم النموذج</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="أسم الخدمة">
                                                <button type="submit" class="btn btn-primary mt-3 w-100"> حفظ</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                        <div class="card mb-3 shadow">
                            <img class="card-img-top" src="../../assets/img/elements/18.jpg" alt="Card image cap">
                            <div class="card-body d-flex justify-content-between">
                                <h5 class="card-title">تصميم موقع طبخ</h5>
                            </div>
                            <form class="mb-3 mx-auto" method="get" action="#">
                                <button type="button" class="btn btn-label-danger confirm">
                                    <span class="tf-icons bx bx-trash"></span>&nbsp; حذف
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                        <div class="card mb-3 shadow">
                            <img class="card-img-top" src="../../assets/img/elements/18.jpg" alt="Card image cap">
                            <div class="card-body d-flex justify-content-between">
                                <h5 class="card-title">تصميم موقع طبخ</h5>
                            </div>
                            <form class="mb-3 mx-auto" method="get" action="#">
                                <button type="button" class="btn btn-label-danger confirm">
                                    <span class="tf-icons bx bx-trash"></span>&nbsp; حذف
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                        <div class="card mb-3 shadow">
                            <img class="card-img-top" src="../../assets/img/elements/18.jpg" alt="Card image cap">
                            <div class="card-body d-flex justify-content-between">
                                <h5 class="card-title">تصميم موقع طبخ</h5>
                            </div>
                            <form class="mb-3 mx-auto" method="get" action="#">
                                <button type="button" class="btn btn-label-danger confirm">
                                    <span class="tf-icons bx bx-trash"></span>&nbsp; حذف
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                        <div class="card mb-3 shadow">
                            <img class="card-img-top" src="../../assets/img/elements/18.jpg" alt="Card image cap">
                            <div class="card-body d-flex justify-content-between">
                                <h5 class="card-title">تصميم موقع طبخ</h5>
                            </div>
                            <form class="mb-3 mx-auto" method="get" action="#">
                                <button type="button" class="btn btn-label-danger confirm">
                                    <span class="tf-icons bx bx-trash"></span>&nbsp; حذف
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- Invoice table -->

                <!-- /Invoice table -->
            </div>
            <!--/ User Content -->
        </div>

    </div>
@endsection

@section('scripts')

    <script src="../../assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
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
    </script>
    <script>
        imgInp = document.getElementById('upload');
        imgView = document.getElementById('uploadedImg');
        imgInp2 = document.getElementById('cardUpload');
        imgView2 = document.getElementById('cardUploadImg');
        reset = document.getElementById('reset');
        const r = imgView.src;

        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                imgView.src = URL.createObjectURL(file)
            }
        }

        imgInp2.onchange = evt => {
            const [file] = imgInp2.files
            if (file) {
                imgView2.src = URL.createObjectURL(file)
            }
        }

        reset.onclick = evt => {
            imgInp.value = "",
                imgView.src = r
        }
    </script>
@endsection
