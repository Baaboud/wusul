<div>
   <div class="container-xxl flex-grow-1">
        <div class="container-xxl flex-grow-1 container-p-y pt-0 px-sm-2 px-0">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">لوحة التحكم / </span>الخدمات
            </h4>
            <div class="card">
                <h5 class="card-header fs-4 fw-bolder">الطلبات</h5>
                <div class="row d-sm-inline-flex mx-2">
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">بحث</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                             <input type="text" class="form-control form-control-lg"
                               placeholder="ادخل اسم الخدمة او اسم موفر الخدمة" aria-label="Search"
                               aria-describedby="basic-addon1" wire:model='search'>
                            <span class="input-group-text btn btn-primary" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-3">
                        <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">نوع الخدمة</label>
                        <select class="form-select w-100 " wire:model='category'>
                                <option data-icon="bx bx-list-check" value='0' >الكل</option>
                                @forelse($categories as $category)
                                    <option data-icon="bx bx-list-check" value="{{$category->id}}" > {{$category->name}}</option>
                                @empty

                                @endforelse
                        </select>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-3">
                        <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">ترتيب حسب</label>
                       <select class="form-select w-100 show-tick" id="selectpickerIcons" data-icon-base="bx"
                                    data-tick-icon="bx-check" data-style="btn-default" wire:model='sortFile'>
                            <option data-icon="bx bx-rename" value='name'>الاسم</option>
                            <option data-icon="bx bxs-watch" value ='created_at'>تاريخ التسجيل</option>
                        </select>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-3">
                        <label for="selectpickerIcons" class="form-label fs-6 fw-bolder">حالة الطلب</label>
                        <select class="form-select w-100 show-tick" id="selectpickerIcons" data-icon-base="bx"
                                data-tick-icon="bx-check" data-style="btn-default" wire:model='status'>
                            <option value='0' data-icon="bx bx-list-check">الكل</option>
                            <option value='1' data-icon="bx bx-news" >جديد</option>
                            <option value='2' data-icon="bx bx-wallet">انتظار الدفع</option>
                            <option value='3' data-icon="bx bx-check">مكتمل</option>
                            <option value='4' data-icon="bx bx-stop">تم الغاءه</option>
                            <option value='5' data-icon="bx bx-block">مرفوض</option>
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
                                    <th>اسم العميل</th>
                                    <th>أسم الخدمة</th>
                                    <th>نوع الخدمة</th>
                                    <th>تاريخ الطلب</th>
                                    <th>تاريخ التسليم المتوقع</th>
                                    <th>الحالة</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                @forelse($orders as $order)
                                <tr>
                                    <td>
                                <a href="{{route('order.show',$order->id)}}">
                                    {{$loop->index+1 }}
                                </a>
                                    </td>
                                    <td>{{$order->user->name}}</td>
                                    <td>   {{$order->service->name}} </td>
                                    <td><span class="badge bg-label-primary fs-6 me-1">{{$order->service->category->name}}</span></td>
                                    <td>{{\Carbon\Carbon::parse($order->created_at)->diffForHumans()}}</td>
                                    <td>{{\Carbon\Carbon::parse($order->date)->diffForHumans()}}</td>
                                    <td>
                                        <span class="badge bg-{{ $type[1][(int)$order->status-1] }} fs-6">{{ $type[0][(int)$order->status -1] }}</span>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="10" class="text-center py-3 text-danger fs-4 position-relative">
                                        <p class="text-center py-3 text-danger fs-4">
                                                        لا يوجد نتائج
                                        </p>
                                        <img src="{{ asset('img/noResultFound.png') }}" class="h-px-200 w-auto mx-auto">
                                    </td>
                                </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                 <nav aria-label="Page navigation text-center">
                    {{ $orders->links('pagination::bootstrap-5')   }}

                </nav>
            </div>
        </div>
    </div>
</div>
