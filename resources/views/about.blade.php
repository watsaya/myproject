@extends('layout')
@section('title','เกี่ยวกับเรา')
@section('content')
    <h1>เกี่ยวกับเรา</h1>
    <hr>
    <p>ผู้พัฒนาระบบ : {{$name}}</p>
    <p>วันเริ่มต้นพัฒนาโปรเจกค์ : {{$date}}</p>
    <a>Laravel คือ PHP Framework ตัวหนึ่งที่ใช้การออกแบบมาเพื่อพัฒนาเว็บแอปพลิเคชันในรูปแบบ MVC (Model Views
        Controller) ทำให้การเขียน Code ดูสะอาด สามารถอ่านและแก้ไขได้ง่าย แถมยังสามารถดาวน์โหลดมาใช้งานได้ฟรี ๆ
        โดยผู้พัฒนาคือ นาย Taylor Otwell ภายใต้ลิขสิทธิ์ของ MIT และ Source Code ได้ถูกเก็บไว้บน Host ของ Github</a>
@endsection
