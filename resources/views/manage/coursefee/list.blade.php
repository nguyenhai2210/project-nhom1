@extends('layout.master')
@section('content')
    

<a href="{{url('manage/coursefee/create')}}">Thêm</a>
<div >
    <table class="table ">
        <thead>
            <tr>
                <th>Mã học phí</th>
                <th>Mã Ngành</th>
                <th>Số tiền</th>
                <th colspan="2">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($coursefee as $item)
                <tr>
                    <td>{{$item->MaHP}}</td>
                    <td>{{$item->MaN}}</td>
                    <td>{{$item->MaN}}</td>
                    <td>
                        <a href="{{url('manage/coursefee/edit')}}">Sửa</a>
                    </td>
                    <td>
                        <a href="{{url('manage/coursefee/delete')}}">Xóa</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Không có dữ liệu</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>@endsection