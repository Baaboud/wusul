@extends('layouts.app')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">User / View /</span> Account
        </h4>
        <div class="row">
            <!-- User Sidebar -->
            <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                <!-- User Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="user-avatar-section">
                            <div class=" d-flex align-items-center flex-column">
                                <img class="img-fluid rounded my-4" src="../../assets/img/avatars/10.png" height="110" width="110" alt="User avatar">
                                <div class="user-info text-center">
                                    <h4 class="mb-2">عاهد بابعير</h4>
                                    <span class="badge bg-label-secondary">مصمم</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around flex-wrap my-4 py-3">
                            <div class="d-flex justify-content-center pt-3">
                                <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser" data-bs-toggle="modal">وصـــــــول</a>
                                <a href="javascript:;" class="btn btn-label-danger suspend-user">طلب الخدمة</a>
                            </div>
                        </div>
                        <h5 class="pb-2 border-bottom mb-4">التفاصيل</h5>
                        <div class="info-container">
                            <ul class="list-unstyled">

                                <li class="mb-3">
                                    <span class="fw-bold me-2">اسم الخدمة :</span>
                                    <span>تصميم جرافيك</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">المجالات :</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">1:</span>
                                    <span>تصميم شعارات</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">2:</span>
                                    <span>تصميم كروت شخصية</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">3:</span>
                                    <span>تصميم لوحات ضوئية</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">4:</span>
                                    <span>تصميم سيره ذاتية</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">5:</span>
                                    <span>تصميم إعلانات ممنتجة</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-bold me-2">الخبرة :</span>
                                    <span>خبرة في المجال 15 سنة</span>
                                </li>


                            </ul>

                        </div>
                    </div>
                </div>
                <!-- /User Card -->
                <!-- Plan Card -->
                <div class="card mb-4">

                </div>
                <!-- /Plan Card -->
            </div>
            <!--/ User Sidebar -->


            <!-- User Content -->
            <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                <!-- User Pills -->

                <!--/ User Pills -->

                <!-- Project table -->

                <!-- /Project table -->

                <div class="row mb-5">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3">
                        <img class="card-img-top" src="../../assets/img/elements/18.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3">
                        <img class="card-img-top" src="../../assets/img/elements/18.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3">
                        <img class="card-img-top" src="../../assets/img/elements/18.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3">
                        <img class="card-img-top" src="../../assets/img/elements/18.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>

                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-3">
                            <img class="card-img-top" src="../../assets/img/elements/18.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="card mb-3">
                            <img class="card-img-top" src="../../assets/img/elements/18.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Invoice table -->

                <!-- /Invoice table -->
            </div>
            <!--/ User Content -->
        </div>

        <!-- Modal -->
        <!-- Edit User Modal -->

        <!--/ Edit User Modal -->

        <!-- Add New Credit Card Modal -->

        <!--/ Add New Credit Card Modal -->

        <!-- /Modal -->

    </div>
@endsection
