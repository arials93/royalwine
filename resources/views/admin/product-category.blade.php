@extends('admin.layout.master')

@section('title','Loại sản phẩm')

@push('styles')
{{-- <link href="assets/plugins/custom/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" /> --}}
@endpush

@section('subheader')
    @include('admin.layout.components.subheader',[
        'title' => [
            'title-subheader' => 'Loại sản phẩm', 'url-title-subheader' => route('admin.product-categories'),
        ]

    ],[
        'breadcrumbs' => [
            ['url' => route('admin.home'), 'page' => 'Trang chủ'],
            ['url' => route('admin.product-categories'), 'page' => 'Loại sản phẩm'],
        ]
    ])
@endsection

@section('main')
    
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Loại sản phẩm
            </h3>
        </div>

        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <a href="/manager" class="btn btn-clean btn-icon-sm">
                    <i class="la la-long-arrow-left"></i>
                    Quay lại
                </a>
                &nbsp;
                <div>
                    <a href="#" class="btn btn-brand btn-icon-sm">
                        <i class="flaticon2-plus"></i> Thêm mới
                    </a>
                </div>
            </div>
        </div>

    </div>
    <div class="kt-portlet__body">
        <!--begin::Section-->
        <div class="kt-section">
            <div class="kt-section__content">
                {{-- @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif --}}
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Hình</th>
                            <th>Tên</th>
                            <th>Mô tả</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <th style="width: 100px;"></th>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="w-100 d-flex">
                                    <a href="#" title="Sửa" class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                        <i class="la la-edit"></i>
                                    </a>
                    
                                    <form action="" method="POST">
                                        @method("DELETE")
                                        @csrf
                                        <button class="btn btn-sm btn-clean btn-icon btn-icon-md" type="submit"><i class="la la-trash"></i></button>
                                    </form>
                                </div>     
                            </td>
                        </tr>
                        {{-- @foreach ($cates as $item)
                        <tr>
                            <th>{{$item->id}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->describe}}</td>
                            <td>
                                <div class="w-100 d-flex">
                                    <a href="{{ route('product-categories.edit', $item->id) }}" title="Sửa" class="btn btn-sm btn-clean btn-icon btn-icon-md">
                                        <i class="la la-edit"></i>
                                    </a>
                    
                                    <form action="{{ route('product-categories.destroy', $item->id) }}" method="POST">
                                        @method("DELETE")
                                        @csrf
                                        <button class="btn btn-sm btn-clean btn-icon btn-icon-md" type="submit"><i class="la la-trash"></i></button>
                                    </form>
                                </div>     
                            </td>
                        </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
        <!--end::Section-->
    </div>
    <!--end::Form-->
</div>

@endsection

@push('scripts')
{{-- <script src="assets/plugins/custom/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables.net-bs4/js/dataTables.bootstrap4.js" type="text/javascript"></script>
<script src="assets/js/pages/crud/datatables/basic/paginations.js" type="text/javascript"></script> --}}
@endpush