@extends('admin.layout', ['title' => 'Edit Product'])
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chỉnh sửa sản phẩm {{ $product -> id }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Product</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="{{ route("admin.product.edit", $product->id) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin sản phẩm</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Tên sản phẩm</label>
                                <input value="{{ $product -> TenSP }}" name="TenSP" type="text" id="inputName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="mota">Mô tả</label>
                                <textarea name="MoTa" id="mota" class="form-control" rows="4">{{ $product -> MoTa }}</textarea>
                            </div>
                            <div class="form-group d-flex justify-content-between">
                                <div class="">
                                    <label for="inputStatus">Danh mục</label>
                                    <select name="DM_id" id="inputStatus" class="form-control custom-select">
                                        @foreach($cate as  $key => $vl)
                                            <option value="{{ $vl->id }}" {{ $vl->id == $product->DM_id ? "selected" : "" }}>
                                                {{ $vl->TenDM }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="">
                                    <label for="inputStatus">Thương hiệu</label>
                                    <select name="TH_id" id="inputStatus" class="form-control custom-select">
                                        @foreach($br as  $key => $vl)
                                            <option value="{{ $vl->id }}" {{ $vl->id == $product->TH_id ? "selected" : "" }}>
                                                {{ $vl->TenLSP }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="">
                                    <label for="inputStatus">Số lượng</label>
                                    <input value="{{ $product -> SoLuong }}" name="SoLuong" type="number" class="form-control">
                                </div>
                                <div class="">
                                    <label for="inputStatus">Đơn giá</label>
                                    <input value="{{ $product -> DonGia }}" name="DonGia" type="number" class="form-control">
                                </div>
                                <div>
                                    <div class="">
                                        <label for="inputStatus">Hình ảnh 1</label>
                                        <input value="{{ $product -> HinhAnh1 }}" name="HinhAnh1" type="file">
                                    </div>
                                    <div class="">
                                        <label for="inputStatus">Hình Ảnh 2</label>
                                        <input value="{{ $product -> HinhAnh2 }}" name="HinhAnh2" type="file">
                                    </div>
                                    <div class="">
                                        <label for="HinhAnh3">Hình Ảnh 3</label>
                                        <input value="{{ $product -> HinhAnh3 }}" name="HinhAnh3" type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputClientCompany">Mã Khuyến Mãi</label>
                                <select name="KM_id" id="inputStatus" class="form-control custom-select">
                                    @foreach($km as  $key => $vl)
                                        <option value="{{ $vl->id }}" {{ $vl->id == $product->KM_id ? "selected" : "" }}>
                                            {{ $vl->TenKM }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="tt">Trạng thái</label>
                                <select class="form-control" name="TrangThai" id="tt">
                                    <option selected value="1">Hiện</option>
                                    <option value="0">Ẩn</option>
                                </select>
                            </div>
                        </div>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
                <div class="d-block d-flex">
                    <a href="{{route('admin.product.index')}}" class="btn btn-secondary">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <button type="submit" class="btn btn-success float-right">
                        <i class="far fa-save"></i>
                    </button>
                </div>
        </form>
    </section>
    <!-- /.content -->
@endsection
