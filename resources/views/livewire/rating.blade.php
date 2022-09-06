<div>
    <button type="button" class="btn btn-primary d-grid w-100" data-bs-toggle="modal" 
    data-bs-target="#editeCategory1" >
        <span class="d-flex align-items-center justify-content-center text-nowrap"></span>&nbsp; تقييم الخدمة
    </button>
    <div class="modal fade" id="editeCategory1" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form id="formAccountSettings" method="POST" action="{{route('order.receiveOrder')}}" class="fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                    @csrf
                    <input type="hidden" name='id' value=''>
                    <hr class="my-0">
                    <div class="modal-header">
                        <h5 class="modal-title fs-5 fw-bolder" id="modalToggleLabel"> تقيييم الخدمه </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card-body">
                        <div>
                            <h5 class="mb-0 text-center text-warning">
                                <div class='div-stars-container' style="position: relative;">
                                    @for($i = 0; $i < 4; $i++) <input type="radio" name="stars" value="{{$i+1}}" id="" style="position: absolute ;top: 8px; opacity: 0; width: 25px">
                                        <i class="bx bx-star bx-sm"></i>
                                        @endfor
                                </div>
                            </h5>
                        </div>
                        <div class="mt-2 text-center">
                            <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">إلغاء
                            </button>
                        </div>
                        <div></div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
