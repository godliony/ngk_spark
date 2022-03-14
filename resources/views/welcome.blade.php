@extends('layouts.app')
@section('title_page',' Main page ')
@section('content')
    <div class="container">
        
        <div class="d-flex justify-content-center"style="margin-bottom:20%">
                <h3>AGV supply component part</h3>
        </div>
        <a href="{{route('orderPart.index')}}"><div class="d-flex justify-content-center" style="margin-bottom: 10px">
            <button type="button" class="btn btn-info" style="width:100%"><h3>Order Part</h3></button>
        </div></a>
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-info" style="width:100%"><h3>Status AGV</h3></button>
        </div>
    </div>
@endsection