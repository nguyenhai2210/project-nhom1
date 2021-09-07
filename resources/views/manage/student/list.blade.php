@extends('layout.master')
@section('content')
    
<h1>Danh sách sinh viên</h1>
<a href="{{url('manage/student/create')}}">Thêm</a>
<div >
            <table class="table ">
              <thead>
                <tr>
                  <th>Mã sinh viên</th>
                  <th>Tên sinh viên</th>
                  <th>Giới tính</th>
                  <th>Địa chỉ</th>
                  <th>Ngày sinh</th>
                  <th>SĐT</th>
                  <th>Mã Lớp</th>
                  <th>Hình thức nộp</th>
                  <th>Mã học bổng</th>
                  <th colspan="2">Hành động</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($student as $item)
                <tr>
                    <td>{{$item->MaSV}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->gender}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->dob}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->MaL}}</td>
                    <td>{{$item->MaHTN}}</td>
                    <td>{{$item->MaHB}}</td>
                    <td>
                        <a href="{{url('manage/student/edit/'.$item->MaSV)}}">Sửa</a>
                    </td>
                    <td>
                        <a href="{{url('manage/student/delete')}}">Xóa</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="11">Không có dữ liệu</td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>@endsection