@extends('layout.master')
@section('content')
    

<div class="row pl-4 w-100 d-flex justify-content-center align-items-center">
         <div class="row"><h4 class="mb-3">Sửa sinh viên</h4></div>
  
          <form class="needs-validation" method="POST">
            @csrf
            
            <div class="form-group">
              <label for="name">Tên sinh viên</label>
              <input value="{{$student->name}}" type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Tên sinh viên">
              
            </div>
          
            <div class="form-group">
              <label for="gender">Giới tính</label>
              <select value="{{$student->gender}}" class="form-control" name="gender" id="gender">
                <option value="1">Nam</option>
                <option value="0">Nữ</option>
               
              </select>
            </div>
            
            <div class="row">
              
              
              <div class="row">
                  <div class="col-md-6 mb-3">
                      <label for="firstName">Địa chỉ</label>
                      <input value="{{$student->address}}" type="text" class="form-control" name="address" id="address" placeholder="Địa chỉ"
                          required>
                  </div>
              </div>
            
              <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstName">Ngày sinh</label>
                    <input value="{{$student->dob}}" type="date" class="form-control" name="dob" id="dob" placeholder="" required>
                </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                  <label for="firstName">SĐT</label>
                  <input value="{{$student->phone}}" type="text" class="form-control" name="phone" id="phone" placeholder="Số điện thoại"
                      required>
              </div>
          </div>
            
            <div class="row w-100">
              <div class="col-md-5 mb-3">
                <label for="country">Lớp học</label>
                <select class="custom-select d-block w-100" name="MaL" id="MaL" required="">
                  <option value="">Chọn...</option>
                @foreach ($class as $item)
                <option  {{$student->MaL == $item->MaL?"selected":""}} value="{{$item->MaL}}">{{$item->NameClass}}</option>
                @endforeach
                </select>               
              </div>
              <div >
                <label for="state">Học phí</label>
                <select class="custom-select d-block w-100" name="MaN" id="MaN" required="">
                  <option value="">Chọn...</option>
                  @foreach ($formality as $item)
                  <option  {{$student->MaHTN == $item->MaHTN?"selected":""}} value="{{$item->MaHTN}}">{{$item->Cachthuc}}</option>
                @endforeach
                </select>
              </div>
            </div>
            <div >
                <label for="state">Học bổng</label>
                <select class="custom-select d-block w-100" name="MaN" id="MaN" required="">
                    <option value="">Chọn...</option>
                    @foreach ($scholarship as $item)
                    <option  {{$student->MaHB == $item->MaHB?"selected":""}} value="{{$item->MaHB}}">{{$item->MucHB}}</option>
                    @endforeach
                </select>
              </div>
            </div>
            <hr class="mb-4">
            <button  class="btn btn-primary btn-lg btn-block" type="submit">Sửa</button>
          </form>
        </div>@endsection