<div>
        <div class="container-xxl flex-grow-1 container-p-y">
        <div class="container-xxl flex-grow-1 container-p-y pt-0 px-sm-2 px-0">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">لوحة التحكم /</span>المستخدمين
            </h4>
            <div class="card">
                <h5 class="card-header fs-4 fw-bolder">المستخدمين</h5>
                <div class="row d-sm-inline-flex mx-2">
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">بحث</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                            <input wire:model='search' type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31">
                            <span class="input-group-text btn btn-primary" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-3">
                        <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">نوع الحساب</label>
                        <select class= w-100 show-tick" id="selectpickerIcons" data-icon-base="bx"
                                data-tick-icon="bx-check" data-style="btn-default"  wire:model='type'>
                            <option data-icon="bx bx-list-check" value='0'>الكل</option>
                            <option data-icon="bx bx-user" value='3'>مستخدم</option>
                            <option data-icon="bx bx-user-pin" value='2'>موفر خدمة</option>
                            <option data-icon="bx bxs-user-account" value='1'>مدير</option>
                        </select>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-3">
                        <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">ترتيب حسب</label>
                        <select class= w-100 show-tick" id="selectpickerIcons" data-icon-base="bx"
                                data-tick-icon="bx-check" data-style="btn-default"  wire:model='sortFile'>
                            <option data-icon="bx bx-rename" value='name'>الاسم</option>
                            <option data-icon="bx bxs-watch" value ='created_at'>تاريخ التسجيل</option>
                            <option data-icon="bx bx-cart" value='orers'>عدد الطلبات</option>
                            <option data-icon="bx bx-star" value='stars'>اجمالي التقييمات</option>
                        </select>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-3">
                        <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">حالة الحساب</label>
                        <select class= w-100 show-tick" id="selectpickerIcons" data-icon-base="bx"
                                data-tick-icon="bx-check" data-style="btn-default" wire:model='active'>
                            <option data-icon="bx bx-list-check" value=0>الكل</option>
                            <option data-icon="bx bx-check" value='1'>مفعل</option>
                            <option data-icon="bx bx-block" value='2'>متوقف</option>
                            <option data-icon="bx bx-time" value=3>في انتظار تأكيد البريد</option>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div class="nav-align-top">
                        <ul class="nav nav-tabs border-bottom border-light mx-3 mb-3" role="tablist">
                            <li class="nav-item">
                                <button type="button" class="nav-link active fas fa-th-list fs-4" role="tab" data-bs-toggle="tab" data-bs-target="#navs-list" aria-controls="navs-top-home" aria-selected="true"></button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link fas fa-th-large fs-4" role="tab" data-bs-toggle="tab" data-bs-target="#navs-card" aria-controls="navs-top-profile" aria-selected="false"></button>
                            </li>
                        </ul>
                        <div class="tab-content shadow-none pt-0">
                            {{-- List View --}}
                            <div class="tab-pane fade active show" id="navs-list" role="tabpanel">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-hover mb-5">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>أسم المستخدم</th>
                                            <th>الايميل</th>
                                            <th>نوع الحساب</th>
                                            <th>تاريخ التسجيل</th>
                                            <th>الحالة</th>
                                            <th>عمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                        @forelse($users as $user )
                                                                                    <tr>
                                            <td>{{$loop->index+1 }}</td>
                                            <td>{{$user->name}} </td>
                                            <td>{{$user->email}}</td>
                                            <td><span class="badge bg-label-primary fs-6 me-1">
                                            {{$types[$user->type]}}
                                            </span></td>
                                            <td>2022-05-12</td>
                                            <td><span class="badge bg-success fs-6 me-1">
                                            {{ $user->is_active?'مفعل':'غير مفعل'}}                                            
                                            </span></td>
                                            <td>
                                                <form method="get" action="{{ route('admin.user.active',  $user->id ) }}">
                                                    <button type="button" class="btn btn-label-danger confirm">
                                                        @if($user->is_active)
                                                        <span class="tf-icons bx bx-block">
                                                        ايقاف
                                                        </span>&nbsp;
                                                        @else
                                                        <span class="">
                                                        تفعيل
                                                        </span>
                                                        @endif                                                        
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                            
                                        @endforelse

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- Card View --}}
                            <div class="tab-pane fade" id="navs-card" role="tabpanel">
                                <div class="row g-4">
                                    @forelse($users as $user )
                                                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                        <div class="card">
                                            <div class="card-body text-center shadow-sm">
                                                <div class="mx-auto mb-3">
                                                @if($user->image)
                                                    <img src="{{ asset("{$user->path}$user->image ") }}" alt="Avatar Image" class="rounded-circle w-px-100">
                                                @else
                                                    <img src="../../assets/img/avatars/3.png" alt="Avatar Image" class="rounded-circle w-px-100">
                                                @endif
                                                </div>

                                                <h5 class="mb-1 card-title"> {{$user->name}}</h5>

                                                <div class="d-flex align-items-center justify-content-center my-3 gap-2">
                                                    <span class="badge bg-label-primary fs-6 me-1">      
                                                        {{$types[$user->type]}}
                                                    </span>
                                                    <span class="badge bg-success fs-6 me-1">
                                                        {{ $user->is_active?'مفعل':'غير مفعل'}}                                            
                                                    </span>
                                                </div>
                                                <div class="d-flex align-items-center m-3 gap-2">
                                                    <span class="badge bg-label-secondary fs-6 me-1"><i class="bx bx-envelope"></i></span>
                                                    <span>{{$user->email}}</span>
                                                </div>

                                                <div class="d-flex align-items-center m-3 gap-2">
                                                    <span class="badge bg-label-secondary fs-6 me-1"><i class="bx bx-time"></i></span>
                                                    <span class="text-dark">{{$user->created_at}}</span>
                                                </div>

                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="javascript:;" class="btn btn-primary d-flex align-items-center me-3"><i class="bx bx-user-check me-1"></i>وصول</a>

                                                    <form method="get" action="{{ route('admin.user.active',  $user->id ) }}">
                                                        <button type="button" class="btn btn-label-danger confirm">
                                                        @if($user->is_active)
                                                        <span class="tf-icons bx bx-block">
                                                        ايقاف
                                                        </span>&nbsp;
                                                        @else
                                                        <span class="">
                                                        تفعيل
                                                        </span>
                                                        @endif 
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                        
                                    @endforelse

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation">
                    <ul class="pagination my-5 justify-content-center">
                                        {{ $users->links('pagination::bootstrap-5')   }}


                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
