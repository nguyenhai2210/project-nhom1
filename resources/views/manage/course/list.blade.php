@extends('layout.master')
@section('title','Danh sách khóa')
@section('content')
    

    <div style="margin:auto" class="col-md-8 order-md-1">
   
    <table class="table" border="1" >
        <h1>Danh sách khóa</h1>
        <a href="{{url('manage/course/insert')}}">Thêm</a>
        <thead>
            <tr>
              
                <th>Mã khóa</th>
                <th>Tên khóa</th>
                <th colspan="2">Hành động</th>
                
                
            </tr>
        </thead>
        <tbody>
            @forelse ($course as $item)
            <tr>
                <td>{{$item->MaK}}</td>
                <td>{{$item->name}}</td>
                <td>
                    <a href="{{url('manage/course/update')}}">Sửa</a>
                </td>
                <td>
                <a href="{{url('manage/course/delete')}}">Xóa</a>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="4">Không có dữ liệu</td>
                </tr>
            @endforelse
            
        </tbody>
    </table>
</div>
@endsection