@extends('layouts.dashboard')
@section('content')
<div class="card">
  <h5 class="card-header">Multilingual</h5>
  <div class="card-datatable table-responsive">
    <div id="DataTables_Table_3_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_3_length"><label>Show <select name="DataTables_Table_3_length" aria-controls="DataTables_Table_3" class="form-select"><option value="7">7</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="75">75</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"><div id="DataTables_Table_3_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control" placeholder="" aria-controls="DataTables_Table_3"></label></div></div></div><table class="dt-multilingual table border-top dataTable no-footer dtr-column" id="DataTables_Table_3" role="grid" aria-describedby="DataTables_Table_3_info">
      <thead>
        <tr role="row"><th class="control sorting_disabled sorting_asc" rowspan="1" colspan="1" style="width: 22.0312px; display: none;" aria-label=""></th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 79.2344px;" aria-label="Name: activate to sort column ascending">Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 114.156px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 80.9219px;" aria-label="Email: activate to sort column ascending">Email</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 70.3281px;" aria-label="Date: activate to sort column ascending">Date</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 94.5156px;" aria-label="Salary: activate to sort column ascending">Salary</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 91.6562px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100.156px;" aria-label="Actions">Actions</th></tr>
      </thead>
      <tbody>
              @forelse($users as $user)
            <tr >
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->is_active?'مفعل':'غير مفعل'}}</td>

            </tr>
        @empty

      <tr class="odd"><td valign="top" colspan="7" class="dataTables_empty">No data available in table</td>
      </tr>
        @endforelse
      </tbody>
    </table><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_info" id="DataTables_Table_3_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-12 col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_3_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_3_previous"><a href="#" aria-controls="DataTables_Table_3" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_3_next"><a href="#" aria-controls="DataTables_Table_3" data-dt-idx="1" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
  </div>
</div>

<div class="card">
  <h5 class="card-header">المستخدمين</h5>
  <div class="card-datatable table-responsive">
    <div id="DataTables_Table_3_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
    <div class="row">
    <div class="col-sm-12 col-md-6">
    <div class="dataTables_length" id="DataTables_Table_3_length">
    <label>عرض 
    <select name="DataTables_Table_3_length" aria-controls="DataTables_Table_3" class="form-select">
    <option value="7">7</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="75">75</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"><div id="DataTables_Table_3_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control" placeholder="" aria-controls="DataTables_Table_3"></label></div></div></div><table class="dt-multilingual table border-top dataTable no-footer dtr-column" id="DataTables_Table_3" role="grid" aria-describedby="DataTables_Table_3_info">
      <thead>
        <tr role="row">
        <th class="control sorting_disabled sorting_asc" 
        rowspan="1" colspan="1" style="width: 22.0312px; display: none;" aria-label=""></th><th class="sorting" 
        tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" colspan="1" style="width: 79.2344px;" 
        aria-label="Name: activate to sort column ascending">الاسم</th>
        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" rowspan="1" 
        colspan="1" style="width: 80.9219px;" 
        aria-label="Email: activate to sort column ascending">الاميل</th>
        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_3" 
        rowspan="1" colspan="1" style="width: 91.6562px;" 
        aria-label="Status: activate to sort column ascending">الحاله</th>
        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 100.156px;" 
        aria-label="Actions">الاجراءت</th></tr>
      </thead>
      <tbody>
            <tr class="odd">
      <td valign="top" colspan="7" class="dataTables_empty">لايوجد مستخدمين</td>
      </tr>
        @forelse($users as $user)
            <tr class="odd">
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->is_active?'مفعل':'غير مفعل'}}</td>

            </tr>
        @empty

        @endforelse
      </tbody>
    </table>
    <div class="row"><div class="col-sm-12 col-md-6">
    </div>
    <div class="col-sm-12 col-md-6">
    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_3_paginate">
    <ul class="pagination">
    <li class="paginate_button page-item previous disabled" id="DataTables_Table_3_previous">
    <a href="#" aria-controls="DataTables_Table_3" data-dt-idx="0" tabindex="0" class="page-link">
    السابق</a>
    </li>
    <li class="paginate_button page-item next disabled" id="DataTables_Table_3_next">
    <a href="#" aria-controls="DataTables_Table_3" data-dt-idx="1" tabindex="0" class="page-link">التالي</a>
    </li></ul></div></div></div></div>
  </div>
</div>
@endsection