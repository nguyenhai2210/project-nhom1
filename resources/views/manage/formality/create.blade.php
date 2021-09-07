@extends('layout.master')
@section('title','Thêm cách thức nộp tiền học')
@section('content')
    

<div class="col-md-8 order-md-1">
    <h4 class="mb-3">Thêm </h4>
    <form class="needs-validation" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
        <label for="firstName">Cách thức nộp tiền</label>
        <input type="number" class="form-control" name="name" id="name" placeholder="" required>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
        <label for="firstName">Mức giảm</label>
        <input type="number" class="form-control" name="num" id="num" placeholder="" required>
    </div>
    <hr class="mb-4">
    <button class="btn btn-primary btn-lg btn-block" type="submit">Thêm</button>
    </form>
</div>@endsection