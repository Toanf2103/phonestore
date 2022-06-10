@extends('admin.layout', ['title' => 'Add User'])
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm người dùng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add User</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="{{ route("admin.user.save") }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin người dùng</h3>
                        </div>
                        <div class="card-body d-flex">
                            <div style="margin-right: 10%">
                                <div class="form-group">
                                    <label for="inputName">Họ</label>
                                    <input name="Ho" type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Tên</label>
                                    <input name="Ten" type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Giới tính</label>
                                    <select class="form-control" name="" id="">
                                        <option value="">Nam</option>
                                        <option value="">Nữ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">SĐT</label>
                                    <input name="SDT" type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Email</label>
                                    <input name="email" type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Địa chỉ</label>
                                    <input name="DiaChi" type="text" id="inputName" class="form-control">
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="inputName">Username</label>
                                    <input name="username" type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Password</label>
                                    <input name="password" type="text" id="inputName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Quyền</label>
                                    <select class="form-control" name="Quyen_id" id="inputName">
                                        @foreach($quyen as  $key => $vl)
                                            <option value="{{ $vl->MaQuyen }}">{{ $vl->TenQuyen }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Trạng Thái</label>
                                    <input name="TrangThai" type="text" id="inputName" class="form-control">

                                </div>
                                <div class="text-center d-flex">
                                    <div>
                                        <a href="{{route('admin.user.index')}}" class="btn btn-secondary">Hủy</a>
                                    </div>
                                    <div>
                                        <input type="submit" value="Thêm" class="btn btn-success float-right">
                                    </div>
                                </div>
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
