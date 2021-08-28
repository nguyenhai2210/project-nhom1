@extends('layout.master')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách ngành </title>
</head>
<body>
    <div style="margin-left:500px">
   
    <table border="1" >
        <h1>Danh sách ngành</h1>
        <thead>
            <tr>
              
                <th>Mã Ngành</th>
                <th>Tên Ngành</th>
                <th> <a href="{{url('/create')}}">Thêm</a></th>
                <th colspan="2">Sửa</th>
                
                
            </tr>
        </thead>
        <tbody>
            @forelse ($branch as $item)
            <tr>
                <td>{{$item->MaN}}</td>
                <td>{{$item->name}}</td>
            </tr>
            @empty
                
            @endforelse
            
        </tbody>
    </table>
</div>
</body>
</html>