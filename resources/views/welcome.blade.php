@extends('layouts.app')
@section('title', 'หน้าแรกของเว็บไซต์')
@section('content')
    <h1>บทความล่าสุด</h1>
    <hr>
    @foreach ($blogs as $item)
        <h1>{{ $item->title }}</h1>
        <p>{!!Str::limit ($item->content,100)!!}</p>
        <a href="/detail/{{$item->id}}">อ่านเพิ่มเติม</a>
        <hr>
    @endforeach
@endsection
