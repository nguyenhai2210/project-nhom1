@extends('layout.master')
@section('title','Thêm khóa')
@section('content')
    

<div style="margin-left:500px">
        <h1>Thêm khóa </h1>
    <form method="POST">
        @csrf
        {{-- <input type="text" name="Mak" placeholder="Nhập mã khóa"><br> --}}
        <input type="text" name="name" placeholder="Nhập tên khóa">
        <button type="submit">Thêm</button>
    </form>
</div>
@endsection