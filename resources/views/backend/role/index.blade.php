@extends('backend.template.index') @section('content')
<div
    class="m-portlet m-portlet--last m-portlet--head-lg m-portlet--responsive-mobile"
    id="main_portlet"
>
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                    User
                </h3>
            </div>
        </div>
        <div class="m-portlet__head-tools">
            @include('backend.shared._actionbtn')
        </div>
    </div>
    <div class="m-portlet__body">
        <!--begin: Datatable -->
        <table
            class="table table-striped- table-bordered table-hover table-checkable"
            id="m_table_1"
        >
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td></td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection @push('style')
<!--begin::Page Vendors Styles -->
<link
    href="{{
        asset('backend/assets/vendors/custom/datatables/datatables.bundle.css')
    }}"
    rel="stylesheet"
    type="text/css"
/>
@endpush @push('javascript')
<!--begin::Page Vendors -->
<script
    src="{{
        asset('backend/assets/vendors/custom/datatables/datatables.bundle.js')
    }}"
    type="text/javascript"
></script>
<!--end::Page Vendors -->

<!--begin::Page Scripts -->
<script
    src="{{
        asset(
            'backend/assets/demo/default/custom/crud/datatables/basic/basic.js'
        )
    }}"
    type="text/javascript"
></script>
<!--end::Page Scripts -->
@endpush
