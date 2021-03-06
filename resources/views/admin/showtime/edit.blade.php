@extends('admin.template.master')
{{-- set title in website --}}
@section('title')
    Suất chiếu cho phim
@endsection

{{-- set title page --}}
@section('title-page')
    Suất chiếu cho phim
@endsection

{{-- set title direct --}}
@section('title-direct')
    Suất chiếu cho phim
@endsection

{{-- set content --}}
@section('content')
    {{-- thông báo --}}
    @include('admin.common.alert')
    {{-- Nội dung --}}
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <form role="form" method="POST" action="{{ route('movie-banner.update', ['id' => $showtimeDetail->id_banner]) }}">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Chỉnh sửa suất chiếu cho phim</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Chi nhánh</label>
                                    <select class="form-control" name="id_mv">
                                        @foreach ($branch as $item)
                                            <option value="{{ $item->id_branch }}" {{ $showtime->id_branch == $item->id_branch ? 'selected' : '' }}>{{ $item->branch_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Phim</label>
                                    <select class="form-control" name="id_mv">
                                        @foreach ($movie as $item)
                                            <option value="{{ $item->id_mv }}" {{ $showtime->id_mv == $item->id_mv ? 'selected' : '' }}>{{ $item->mv_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Loại suất chiếu</label>
                                    <select class="form-control" name="id_mv">
                                        @foreach ($type_showtime as $item)
                                            <option value="{{ $item->id_typest }}" {{ $showtime->id_typest == $item->id_typest ? 'selected' : '' }}>{{ $item->typest_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Ngày và giờ chiếu</label>
                                    <input type="file" value="{{ $showtimeDetail->datetime }}" id ="datetime" name="datetime" class="form-control">
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <a href="{{ route('showtime.index', ['id' => 1]) }}" class="btn btn-default">Quay lại</a>
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
