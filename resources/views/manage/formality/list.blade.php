@extends('layout.master')
@section('content')
    

<a href="{{url('manage/formality/create')}}">Thêm</a>
<div >
    <table class="table ">
        <thead>
            <tr>
                <th>Id</th>
                <th>Cách thức nộp tiền</th>
                <th>Mức giảm</th>
                <th colspan="2">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($formality as $item)
                <tr>
                    <td>{{$item->MaHTN}}</td>
                    <td>{{$item->CachThuc}}</td>
                    <td>{{$item->MucGiam}}</td>
                    <td>
                        <a href="{{url('manage/formality/edit')}}">Sửa</a>
                    </td>
                    <td>
                        <a href="{{url('manage/formality/delete')}}">Xóa</a>
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