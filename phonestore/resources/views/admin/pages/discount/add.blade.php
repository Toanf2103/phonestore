@extends('admin.layout', ['title' => 'Add Discount'])
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm khuyến mãi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Discount</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="{{ route("admin.discount.save") }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin khuyến mãi</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Tên KM</label>
                                <input name="TenKM" type="text" id="inputName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Loại KM</label>
                                <input name="LoaiKM" type="text" id="inputName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputName">Giá trị KM</label>
                                <input name="GiaTriKM" type="text" id="inputName" class="form-control">
                            </div>
                            <div class="d-flex justify-content-between w-50">
                                <div class="form-group">
                                    <label for="inputName">Ngày bắt đầu</label>
                                    <input name="NgayBD" type="date" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Ngày kết thúc</label>
                                    <input name="NgayKT" type="date" id="inputName" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName">Trạng thái</label>
                                <input name="TrangThai" type="text" id="inputName" class="form-control">
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="{{route('admin.discount.index')}}" class="btn btn-secondary">Hủy</a>
                    <input type="submit" value="Thêm" class="btn btn-success float-right">
                </div>
            </div>
        </form>
    </section>
    <!-- /.content -->
@endsection
