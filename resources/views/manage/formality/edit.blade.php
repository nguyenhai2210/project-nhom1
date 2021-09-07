@extends('layout.master')
@section('title','Sửa cách thức nộp tiền học')
@section('content')
    

<div class="col-md-8 order-md-1">
    <h4 class="mb-3">Sửa </h4>
    <form class="needs-validation" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
        <label for="firstName">Cách thức nộp tiền</label>
        <input type="number" value="{{$formality->CachThuc}}" class="form-control" name="name" id="name" placeholder="" required>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
        <label for="firstName">Mức giảm</label>
        <input type="number" value="{{$formality->MucGiam}}" class="form-control" name="num" id="num" placeholder="" required>
    </div>
    <hr class="mb-4">
    <button class="btn btn-primary btn-lg btn-block" type="submit">Sửa</button>
    </form>
</div>@endsection