@extends('admin.layout', ['title' => 'Edit Order'])
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chỉnh sửa đơn hàng {{ $order -> id }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Order</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="{{ route("admin.order.edit", $order -> id ) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin đơn hàng</h3>
                        </div>
                        <div class="card-body w-50">
                            <div class="form-group">
                                <label for="kh">Mã KH</label>
                                <input readonly value="{{ $order -> MaND }}" name="" type="text" id="kh"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Người nhận</label>
                                <input required value="{{ $order -> NguoiNhan }}" name="NguoiNhan" type="text"
                                       id="inputName"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="SĐT">SĐT</label>
                                <input value="{{ $order -> SDT }}" name="SDT" type="text" id="SĐT"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="dc">Địa chỉ</label>
                                <input value="{{ $order -> DiaChi }}" name="DiaChi" type="text" id="dc"
                                       class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="PTTT"></label>
                                <select class="form-control" name="PhuongThucTT" id="PTTT">
                                    @if($order -> PhuongThucTT == 0)
                                        <option selected value="0">Ship COD</option>
                                        <option value="1">Banking</option>
                                    @else
                                        <option value="0">Ship COD</option>
                                        <option selected value="1">Banking</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Tổng tiền</label>
                                <input value="{{ $order -> TongTien }}" name="TongTien" type="text" id="inputName"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="TrangThai">Trạng thái</label>
                                <select class="form-control" name="TrangThai" id="TrangThai">
                                    @if($order -> TrangThai == 0)
                                        <option selected value="0">Chờ xác nhận</option>
                                        <option value="1">Chờ lấy hàng</option>
                                        <option value="2">Đang giao</option>
                                        <option value="3">Đã giao</option>
                                        <option value="4">Đã hủy</option>
                                    @elseif($order -> TrangThai == 1)
                                        <option value="0">Chờ xác nhận</option>
                                        <option selected value="1">Chờ lấy hàng</option>
                                        <option value="2">Đang giao</option>
                                        <option value="3">Đã giao</option>
                                        <option value="4">Đã hủy</option>
                                    @elseif($order -> TrangThai == 2)
                                        <option value="0">Chờ xác nhận</option>
                                        <option value="1">Chờ lấy hàng</option>
                                        <option selected value="2">Đang giao</option>
                                        <option value="3">Đã giao</option>
                                        <option value="4">Đã hủy</option>
                                    @elseif($order -> TrangThai == 3)
                                        <option value="0">Chờ xác nhận</option>
                                        <option value="1">Chờ lấy hàng</option>
                                        <option value="2">Đang giao</option>
                                        <option selected value="3">Đã giao</option>
                                        <option value="4">Đã hủy</option>
                                    @else
                                        <option value="0">Chờ xác nhận</option>
                                        <option value="1">Chờ lấy hàng</option>
                                        <option value="2">Đang giao</option>
                                        <option value="3">Đã giao</option>
                                        <option selected value="4">Đã hủy</option>
                                    @endif
                                </select>
                            </div>
                            <div class="d-flex">
                                <a href="{{route('admin.order.index')}}" class="btn btn-secondary">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                <button class="btn-success btn" type="submit">
                                    <i class="far fa-save"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
@endsection
