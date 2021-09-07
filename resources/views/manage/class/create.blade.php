@extends('layout.master')
@section('title','Thêm lớp học')
@section('content')
    

<div class="col-md-8 order-md-1">
          <h4 class="mb-3">Thêm lớp học</h4>
          <form class="needs-validation" method="POST">
            @csrf
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Mã lớp</label>
                <input type="number" class="form-control" name="MaL" id="MaL" placeholder="Mã lớp" required>
                <div class="invalid-feedback">
                  Mã lớp không để trống
                </div>
            </div> 
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Tên lớp</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Tên lớp" required>
                <div class="invalid-feedback">
                  Tên lớp không để trống
                </div>
            </div> 
            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Khóa</label>
                <select class="custom-select d-block w-100" name="Mak" id="Mak" required="">
                  <option value="">Chọn...</option>
                @foreach ($course as $item)
                <option value="{{$item->MaK}}">{{$item->name}}</option>
                @endforeach
                </select>
                <div class="invalid-feedback">
                  Không để trống khóa
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">Ngành</label>
                <select class="custom-select d-block w-100" name="MaN" id="MaN" required="">
                  <option value="">Chọn...</option>
                  @foreach ($branch as $item)
                <option value="{{$item->MaN}}">{{$item->name}}</option>
                @endforeach
                </select>
                <div class="invalid-feedback">
                  Không để trống ngành
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">number</label>
                <input type="number" class="form-control" name="number" id="number" placeholder="Số lượng thành viên" required>
                <div class="invalid-feedback">
                  Không để trống
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Thêm</button>
          </form>
        </div>
        @endsection