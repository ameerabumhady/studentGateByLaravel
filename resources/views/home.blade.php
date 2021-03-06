@extends('layouts.app')
@section('title','Home')
@section('css')
    <style>
        .left { float: left;}
        .right { float: right;}
        #smile {
        position: relative;
        z-index: 0;
        background-color: yellow;
        border: 6px solid #222;
        width: 150px;
        height: 150px;
        border-radius: 100px;
        margin: 50px auto;
        box-shadow: 2px 2px 1px #B8B8B8;
        }
        .eye {
        position: relative;
        width: 30px;
        height: 30px;
        border-radius: 100px;
        background: #222;
        margin-top: 35px;
        margin-left: 33px;
        }
        .eye.right { margin-left: 0; margin-right: 33px; }
        .mouth {
        position: absolute;
        z-index: 1;
        top: 10px;
        left: 0;
        right: 0;
        height: 110px;
        width: 115px;
        margin: 0 auto;
        border-bottom: 8px solid #222;
        border-radius: 100%;
        }
    </style>
@endsection
@section('content')

<div class="card mb-4">
    <h2 class="text-center">Welcome to the Student Gates System</h2> 

    <div id="smile">
        <div class="eye left"></div>
        <div class="eye right"></div>
        <div class="mouth"></div>
    </div>

</div>

@endsection