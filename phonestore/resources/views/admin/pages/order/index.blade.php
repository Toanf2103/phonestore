@extends('admin.layout', ['title' => 'Đơn hàng'])
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 text-uppercase">
                    <h1 class="font-weight-bold">Quản lí đơn hàng</h1>
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
                    <h3 class="font-weight-bold card-title">Tất cả</h3>
                </div>
            </div>
            <div>
                @if(session('updated'))
                    <div style="margin: 0px; padding: 0.5rem 1.25rem" class="alert alert-default-success">
                        {{session('updated')}}
                    </div>
                @endif
                @if(session('confirm'))
                    <div style="margin: 0px; padding: 0.5rem 1.25rem" class="alert alert-default-success">
                        {{session('del')}}
                    </div>
                @endif
                @if(session('cancel'))
                    <div style="margin: 0px; padding: 0.5rem 1.25rem" class="alert alert-danger">
                        {{session('updated')}}
                    </div>
                @endif
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th>Mã ĐH</th>
                        <th>Mã KH</th>
                        <th>Ngày tạo</th>
                        <th>Người nhận</th>
                        <th>SĐT</th>
                        <th>Địa chỉ</th>
                        <th>PTTH</th>
                        <th>Tổng tiền</th>
                        <th>
                            <select class="bg-dark form-control-sm font-weight-bold border-0" name="" id="sortStatus"
                                    onchange="sortStatus_Order()">
                                <option value="" selected>Trạng thái</option>
                                <option class="" value="Xác nhận">Chờ xác nhận</option>
                                <option class="" value="Chờ lấy hàng">Chờ lấy hàng</option>
                                <option class="" value="Đang giao">Đang giao</option>
                                <option class="" value="Đã giao">Đã giao</option>
                                <option class="" value="Đã hủy">Đã hủy</option>
                                <option class="" value="Trả hàng">Trả hàng</option>
                            </select>
                        </th>
                        <th>Xử lý</th>
                        <th style="">
                        </th>
                    </tr>
                    </thead>
                    <tbody id="tbOrder">
                    @foreach($list_order as $key => $value)
                        <tr>
                            <td>{{ $value -> id }}</td>
                            <td>{{ $value -> MaND }}</td>
                            <td>{{ $value -> updated_at }}</td>
                            <td>{{ $value -> NguoiNhan }}</td>
                            <td>{{ $value -> SDT }}</td>
                            <td>{{ $value -> DiaChi }}</td>
                            <td>
                                @if($value -> PhuongThucTT == 0)
                                    Ship COD
                                @else
                                    Banking
                                @endif
                            </td>
                            <td>{{ $value -> TongTien }}</td>
                            <td>
                                @if($value -> TrangThai== 0)
                                    <small class="text-danger">Chờ xác nhận</small>
                                @elseif($value -> TrangThai== 1)
                                    <small class="text-warning">Chờ lấy hàng</small>
                                @elseif($value -> TrangThai== 2)
                                    <small class="text-primary">Đang giao</small>
                                @elseif($value -> TrangThai== 3)
                                    <small class="text-success">Đã giao</small>
                                @elseif($value -> TrangThai== 4)
                                    <small class="text-secondary">Đã hủy</small>
                                @else
                                    <small class="text-light">Trả hàng</small>
                                @endif
                            </td>
                            <td>
                                @if($value -> TrangThai== 0)
                                    <a href="{{ route('admin.order.action', $value -> id) }}">
                                        <span class="badge badge-info">Xác nhận</span></a>
                                    <a href="{{ route('admin.order.cancel', $value -> id) }}">
                                        <span class="badge badge-danger">Hủy</span></a>
                                @elseif($value -> TrangThai== 1)
                                    <a href="{{ route('admin.order.action', $value -> id) }}">
                                        <span class="badge badge-warning">Vận chuyển</span></a>
                                    <a href="{{ route('admin.order.cancel', $value -> id) }}">
                                        <span class="badge badge-danger">Hủy</span></a>
                                @elseif($value -> TrangThai== 2)

                                    <a href="{{ route('admin.order.action', $value -> id) }}">
                                        <span class="badge badge-primary">Hoàn thành</span></a>
                                    <a href="{{ route('admin.order.returns', $value -> id) }}">
                                        <span class="badge badge-danger">GHKTC</span></a>
                                @elseif($value -> TrangThai== 3)
                                    <span class="badge badge-success">Đã giao</span>
                                @elseif($value -> TrangThai== 4)
                                    <span class="badge badge-secondary">Đơn hủy</span>
                                @else
                                    <span class="badge badge-light">GHKTC</span>
                                @endif
                            </td>
                            <td class="project-actions text-right">
                                <a href="{{ route("admin.order.detail",  $value -> id ) }}"
                                   class="btn btn-primary btn-sm">
                                    <i class="fas fa-folder"></i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm"
                                   href="{{ route("admin.order.edit",  $value -> id ) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>

        {{--        Xem chi tiết đơn hàng--}}
        <div id="detailOrder" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
             aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div>
                        <div class="modal-header bg-dark">
                            <h5 class="modal-title text-uppercase font-weight-bold" id="exampleModalLabel">Thêm sinh
                                viên</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="bg-dark" aria-hidden="true">x</span>
                            </button>
                        </div>
                        <div>
                            <table class="table">
                                <tr>
                                    <th>Mã sinh viên:</th>
                                    <td><input required maxlength="13" placeholder="Mã sinh viên"
                                               class="form-control" name="masv" type="text"></td>
                                </tr>
                                <tr>
                                    <th>Họ sinh viên:</th>
                                    <td><input required placeholder="Họ" class="form-control" name="hosv"
                                               type="text"></td>
                                </tr>
                                <tr>
                                    <th>Tên sinh viên:</th>
                                    <td><input required placeholder="Tên" class="form-control" name="tensv"
                                               type="text"></td>
                                </tr>
                                <tr>
                                    <th>Giới tính:</th>
                                    <td>
                                        <select required class="form-control" name="gioitinh">
                                            <option value="0">Nam</option>
                                            <option value="1">Nữ</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Phone:</th>
                                    <td><input maxlength="10" required placeholder="Số điện thoại"
                                               class="form-control" name="phone" type="text"></td>
                                </tr>
                                <tr>
                                    <th>Ngày sinh:</th>
                                    <td><input required placeholder="Ngày sinh" class="form-control"
                                               name="ngaysinh" type="date"></td>
                                </tr>
                                <tr>
                                    <th>Quê quán:</th>
                                    <td><input required placeholder="Tỉnh/Thành phố" class="form-control"
                                               name="quequan" type="text"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class=" d-inline d-flex">
                                        <button type="button" class="font-weight-bold btn btn-secondary"
                                                data-dismiss="modal">HỦY
                                        </button>
                                        <input class="font-weight-bold btn btn-primary" type="submit"
                                               value="THÊM">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- /.card -->
    </section>
@endsection
