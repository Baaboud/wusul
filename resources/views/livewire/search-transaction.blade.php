<div>
            <div class="row d-sm-inline-flex mx-2">
                <div class="col-lg-3 col-sm-6 mb-4">
                    <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">بحث</label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                        <input type="text" class="form-control" placeholder="بحث..." aria-label="Search..." aria-describedby="basic-addon-search31">
                        <span class="input-group-text btn btn-primary" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3">
                    <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">نوع الخدمة</label>
                    <select class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="bx" data-tick-icon="bx-check" data-style="btn-default">
                        <option data-icon="bx bx-list-check">الكل</option>
                        <option data-icon="bx bx-user">كهرباء</option>
                        <option data-icon="bx bx-user-pin">تقنية</option>
                        <option data-icon="bx bxs-user-account">صحة</option>
                    </select>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3">
                    <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">ترتيب حسب</label>
                    <select class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="bx" data-tick-icon="bx-check" data-style="btn-default">
                        <option data-icon="bx bx-rename">الاسم</option>
                        <option data-icon="bx bxs-watch">تاريخ التسجيل</option>
                        <option data-icon="bx bx-cart">عدد الطلبات</option>
                        <option data-icon="bx bx-star">اجمالي التقييمات</option>
                    </select>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3">
                    <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">حالة الخدمة</label>
                    <select class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="bx" data-tick-icon="bx-check" data-style="btn-default">
                        <option data-icon="bx bx-list-check">الكل</option>
                        <option data-icon="bx bx-check">مفعلة</option>
                        <option data-icon="bx bx-block">متوقفة</option>
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="nav-align-top">

                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover mb-5">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>رقم الفاتورة</th>
                                    <th>العملية</th>
                                    <th>الوصف</th>
                                    <th>التاريخ</th>
                                    <th>المبلغ</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @forelse($wallet->transactions as $transaction)
                                <tr>

                                    <td>{{$loop->index+1 }}</td>
                                    <td>{{$transaction->meta['payment']??''}}</td>
                                    @if($transaction->type=='deposit')

                                    <td><span class="badge bg-label-success pb-3 fs-6">ايداع</span></td>
                                    <td class="text-success">{{$transaction->meta['deposit']??''}}</td>
                                    @else
                                    <td><span class="badge bg-label-danger pb-3 fs-6">سحب</span></td>
                                    <td class="text-danger">{{$transaction->meta['pull']??''}}</td>
                                    @endif


                                    <td>{{\Carbon\Carbon::parse($transaction->created_at)->diffForHumans()}}</td>
                                    <td>{{$transaction->amount}}</td>
                                </tr>
                                @empty

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation">
                <ul class="pagination my-5 justify-content-center">
                    <li class="page-item first">
                        <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
                    </li>
                    <li class="page-item prev">
                        <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-left"></i></a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">2</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="javascript:void(0);">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">5</a>
                    </li>
                    <li class="page-item next">
                        <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-right"></i></a>
                    </li>
                    <li class="page-item last">
                        <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
                    </li>
                </ul>
            </nav></div>
