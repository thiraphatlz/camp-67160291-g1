@extends('template.dafault')

@section('title','Result Page')
@section('content')
    <p>ชื่อ: {{ $fname }}</p>
    <p>สกุล: {{ $lname }}</p>
    <p>วัน/เดือน/ปีเกิด: {{ $dateofbirth }}</p>
    <p>อายุ: {{ $age }}</p>
    <p>เพศ: {{ $gender }}</p>
    <p>ที่อยู่: {{ $address }}</p>
    <p>สีที่ชอบ: {{ $favoritecolor }}</p>
    <p>แนวเพลงที่ชอบ: {{ $genre }}</p>
    <a href="{{ url('/') }}">Back</a>
@endsection