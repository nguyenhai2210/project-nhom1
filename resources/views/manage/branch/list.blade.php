@extends('layout.master')
@section('content')
    

    <div style="margin:auto" class="col-md-8 order-md-1">
   
    <table class="table" border="1" >
        <h1>Danh sách ngành</h1>
        <a href="{{url('manage/branch/insert')}}">Thêm</a>
        <thead>
            <tr>
              
                <th>Mã Ngành</th>
                <th>Tên Ngành</th>
                <th colspan="2">Hành động</th>
                
                
            </tr>
        </thead>
        <tbody>
            @forelse ($branch as $item)
            <tr>
                <td>{{$item->MaN}}</td>
                <td>{{$item->name}}</td>
                <td>
                    <a href="{{url('manage/branch/update/'.$item->MaN)}}">Sửa</a>
                </td>
                <td>
                <a href="{{url('/create')}}">Xóa</a>
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
