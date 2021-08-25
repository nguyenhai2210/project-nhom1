@extends('home')

@section('title','Thông tin chi tiết sinh viên')

@section('content')
<table class="table caption-top">
  <caption>Danh sách sinh viên</caption>
  <thead>
    <tr>
      <th scope="col">Stt</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>USA</td>
      <td>Nam</td>
      <td>09123456</td>
      <td>1234@gmail.com</td>
      <td>#</td>
      <td>%</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Japan</td>
      <td>Nam</td>
      <td>09123456</td>
      <td>1234@gmail.com</td>
      <td>#</td>
      <td>%</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>Otto</td>
      <td>Nu</td>
      <td>09123456</td>
      <td>1234@gmail.com</td>
      <td>#</td>
      <td>%</td>
    </tr>
  </tbody>
</table>
@endsection