@extends('admin.layout', ['title' => 'Đơn hàng '.$order -> id ])
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="text-uppercase">Thông tin đơn hàng id: {{ $order -> id }}
                        @if($order -> TrangThai== 0)
                            <a href="{{ route('admin.order.action', $order -> id) }}">
                                <span class="badge badge-danger">Chờ xác nhận</span>
                            </a>
                        @elseif($order -> TrangThai== 1)
                            <span class="badge badge-warning">Chờ lấy hàng</span>
                        @elseif($order -> TrangThai== 2)
                            <span class="badge badge-primary">Đang giao</span>
                        @elseif($order -> TrangThai== 3)
                            <span class="badge badge-success">Đã giao</span>
                        @else
                            <span class="badge badge-secondary">Đã hủy</span>
                        @endif
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Đơn hàng</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header d-block">
                <div>
                    <h3 class="text-uppercase font-weight-bold card-title">
                        <i class="fas fa-dolly"></i>
                        Thông tin vận chuyển
                    </h3>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th>Tên người nhận</th>
                        <th>SĐT</th>
                        <th>Địa chỉ</th>
                        <th>PTTH</th>
                        <th>Ghi chú</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $order -> NguoiNhan }}</td>
                        <td>{{ $order -> SDT }}</td>
                        <td>{{ $order -> DiaChi }}</td>
                        <td>@if($order -> PhuongThucTT == 0)
                                Ship COD
                            @else
                                Banking
                            @endif</td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
            <div class="card">
                <div class="card-header d-block">
                    <div>
                        <h3 class="text-uppercase font-weight-bold card-title">
                            <i class="far fa-list-alt"></i>
                            Chi tiết đơn hàng
                        </h3>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã SP</th>
                            <th>Sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Giảm giá</th>
                            <th>Thành tiền</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody id="detail_order">
                        @include('admin.pages.ajax.list_product_order')
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <div>
                <a class="btn btn-secondary" href="{{route('admin.order.index')}}">
                    <i class="fas fa-chevron-left"></i>
                </a>
            </div>
        <!-- /.card -->
    </section>
@endsection
