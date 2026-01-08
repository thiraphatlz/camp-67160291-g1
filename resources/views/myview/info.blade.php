@extends('template.default')

@section('title','ตารางสูตรคูณ');

@section('content')
    <form action="/calculate" method="post">
        @csrf
        <?php //echo isset($_GET['mynumber']) ? $_GET['mynumber'] : ''; ?>
        <input class="form-control" name="mynumber" type="number">
        <br>
        <button class="btn btn-success">Save</button>
    </form>
@endsection