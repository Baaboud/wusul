@extends('layouts.dashboard')

@section('extra-style')
@endsection

@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="container-xxl flex-grow-1 container-p-y pt-0 px-sm-2 px-0">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">لوحة التحكم /</span> احصائيات النظام
            </h4>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-info">
                                    <p class="card-text">Session</p>
                                    <div class="d-flex align-items-end mb-2">
                                        <h4 class="card-title mb-0 me-2">58,352</h4>
                                        <small class="text-success">(+29%)</small>
                                    </div>
                                    <small>Last Week Analytics</small>
                                </div>
                                <div class="card-icon">
            <span class="badge bg-label-primary rounded p-2">
              <i class="bx bx-trending-up bx-sm"></i>
            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-info">
                                    <p class="card-text">Time On Site</p>
                                    <div class="d-flex align-items-end mb-2">
                                        <h4 class="card-title mb-0 me-2">28m 14s</h4>
                                        <small class="text-success">(+18%)</small>
                                    </div>
                                    <small>Last Week Analytics</small>
                                </div>
                                <div class="card-icon">
            <span class="badge bg-label-info rounded p-2">
              <i class="bx bx-time-five bx-sm"></i>
            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-info">
                                    <p class="card-text">Bounce Rate</p>
                                    <div class="d-flex align-items-end mb-2">
                                        <h4 class="card-title mb-0 me-2">62%</h4>
                                        <small class="text-danger">(-14%)</small>
                                    </div>
                                    <small>Last Week Analytics</small>
                                </div>
                                <div class="card-icon">
            <span class="badge bg-label-danger rounded p-2">
              <i class="bx bx-pie-chart-alt bx-sm"></i>
            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="card-info">
                                    <p class="card-text">Users</p>
                                    <div class="d-flex align-items-end mb-2">
                                        <h4 class="card-title mb-0 me-2">18,472</h4>
                                        <small class="text-success">(+42%)</small>
                                    </div>
                                    <small>Last Week Analytics</small>
                                </div>
                                <div class="card-icon">
            <span class="badge bg-label-success rounded p-2">
              <i class="bx bx-user bx-sm"></i>
            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h6 class="card-title m-0 me-2">Total Sales</h6>
                            <div class="dropdown">
                                <button class="btn btn-sm p-0" type="button" id="totalSalesList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Today <i class="bx bx-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalSalesList">
                                    <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <div class="avatar avatar-md border-5 border-light-primary rounded-circle mx-auto mb-4">
                                <span class="avatar-initial rounded-circle bg-label-primary"><i class="bx bx-trending-up bx-sm"></i></span>
                            </div>
                            <h3 class="card-title mb-1 me-2">8,352</h3>
                            <small class="d-block mb-2">12% of target</small>
                            <span class="text-success">+29% <i class="bx bx-chevron-up"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h6 class="card-title m-0 me-2">Referral Income</h6>
                            <div class="dropdown">
                                <button class="btn btn-sm p-0" type="button" id="referralsList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Today <i class="bx bx-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="referralsList">
                                    <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <div class="avatar avatar-md border-5 border-light-info rounded-circle mx-auto mb-4">
                                <span class="avatar-initial rounded-circle bg-label-info"><i class="bx bx-dollar bx-sm"></i></span>
                            </div>
                            <h3 class="card-title mb-1 me-2">$1,271</h3>
                            <small class="d-block mb-2">34% of target</small>
                            <span class="text-danger">-23% <i class="bx bx-chevron-down"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h6 class="card-title m-0 me-2">Customers</h6>
                            <div class="dropdown">
                                <button class="btn btn-sm p-0" type="button" id="customersList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Today <i class="bx bx-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="customersList" style="">
                                    <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <div class="avatar avatar-md border-5 border-light-success rounded-circle mx-auto mb-4">
                                <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-user bx-sm"></i></span>
                            </div>
                            <h3 class="card-title mb-1 me-2">24,680</h3>
                            <small class="d-block mb-2">29% of target</small>
                            <span class="text-success">+42% <i class="bx bx-chevron-up"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h6 class="card-title m-0 me-2">Orders Received</h6>
                            <div class="dropdown">
                                <button class="btn btn-sm p-0" type="button" id="orderReceivedList" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Today <i class="bx bx-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orderReceivedList">
                                    <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <div class="avatar avatar-md border-5 border-light-warning rounded-circle mx-auto mb-4">
                                <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bx-archive bx-sm"></i></span>
                            </div>
                            <h3 class="card-title mb-1 me-2">1,862</h3>
                            <small class="d-block mb-2">47% of target</small>
                            <span class="text-success">+82% <i class="bx bx-chevron-up"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
