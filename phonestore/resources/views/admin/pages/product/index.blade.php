@extends('admin.layout', ['title' => 'Product'])
@section('content')
    <style>
        .concac {
            display: inline;
            width: 2.5rem;
        }
    </style>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="font-weight-bold text-uppercase">Sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Sản phẩm</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="d-inline-block d-flex">
            <div>
                <form class="form-inline" id="form_input">
                    <input class="form-control" name="product" type="text" placeholder="Nhập sản phẩm cần tìm...">
                    <button class="btn-outline-dark btn" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <!-- Default box -->
        <div class="card">
            <div class="card-header d-flex">
                <div>
                    <h3 class="card-title">Tất cả</h3>
                </div>
                <div class="u-cursor-pt" style="margin-left: 30px">
                    <a href="{{ route("admin.product.add") }}">
                        <i class="fas fa-plus"></i>
                    </a>
                </div>
            </div>
            <div>
                @if(session('del'))
                    <div style="margin: 0px; padding: 0.5rem 1.25rem" class="alert alert-danger">
                        {{session('del')}}
                    </div>
                @endif
                @if(session('updated'))
                    <div style="margin: 0px; padding: 0.5rem 1.25rem" class="alert alert-default-success">
                        {{session('updated')}}
                    </div>
                @endif
                @if(session('add'))
                    <div style="margin: 0px; padding: 0.5rem 1.25rem" class="alert alert-default-success">
                        {{session('add')}}
                    </div>
                @endif
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>
                            <select style="border: none; font-weight: bold" onchange="sortCate_Product()"
                                    class="font-weight-bold" id="sortCate_Pr">
                                <option value="">Danh mục</option>
                                @foreach($list_cate as $key => $value )
                                    <option value="{{ $value -> TenDM }}">{{ $value -> TenDM }}</option>
                                @endforeach
                            </select>
                        </th>
                        <th>
                            <select style="border: none; font-weight: bold" onchange="sortBrand_Product()"
                                    class="font-weight-bold" id="sortBrand_Pr">
                                <option value="">Thương hiệu</option>
                                @foreach($list_brand as $key => $value )
                                    <option value="{{ $value -> TenLSP }}">{{ $value -> TenLSP }}</option>
                                @endforeach
                            </select>
                        </th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Khuyến mãi</th>
                        <th>
                            <select onchange="sortStatus_Product()" class="font-weight-bold" style="border: none; "
                                   name="" id="sortStatus_Pr">
                                <option value="">Trạng thái</option>
                                <option value="Ẩn">Ẩn</option>
                                <option value="Hiện">Hiện</option>
                            </select>
                        </th>
                        <th>
                        </th>
                    </tr>
                    </thead>
                    <tbody id="tbProduct">
                    @foreach($list_product as $key => $value)
                        <tr>
                            <td>
                                {{ $value -> id }}
                            </td>
                            <td>
                                <a>
                                    {{ $value -> TenSP }}
                                </a>
                                <br/>
                                <small>
                                    Created {{ $value -> created_at }}
                                </small>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="concac"
                                             src="{{ asset('public/backend/'. $value -> HinhAnh1) }}">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="concac"
                                             src="{{ asset('public/backend/'. $value -> HinhAnh2) }}">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="concac"
                                             src="{{ asset('public/backend/'. $value -> HinhAnh3) }}">
                                    </li>
                                </ul>
                            </td>
                            <td>{{ $value -> TenDM }}</td>
                            <td>{{ $value -> TenLSP }}</td>
                            <td class="">
                                {{ number_format(($value -> DonGia),0,',','.') }}
                                <small>VNĐ</small>
                            </td>
                            <td class="project-state">{{ $value -> SoLuong }}</td>
                            <td>{{ $value -> TenKM }}</td>
                            <td class="project-state">
                                @if($value -> TrangThai == 1)
                                    <a href="{{ route("admin.product.active",  $value -> id ) }}"><span
                                            class="badge badge-primary">Hiện</span></a>
                                @else
                                    <a href="{{ route("admin.product.active",  $value -> id ) }}"><span
                                            class="badge badge-secondary">Ẩn</span></a>
                                @endif
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{ route("admin.product.edit",  $value -> id ) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm"
                                   href="{{ route("admin.product.getDestroy",  $value -> id ) }}">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
@endsection
