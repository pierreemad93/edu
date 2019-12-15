@extends('back-end.layout.app')
@php
    $moduleName='User';
    $pageTitle = $moduleName .' Edit';
    $pageDes= "Here you can  edit  ". $moduleName;
@endphp
@section('title')
    {{$pageTitle}}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">{{$pageTitle}}</h4>
                    <p class="card-category">{{$pageDes}}</p>
                </div>
                <div class="card-body">
                    <form action="{{route('users.update' , ['id' => $row->id])}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('put')}}
                        @include('back-end.users.form')
                        <button type="submit" class="btn btn-primary pull-right">Update user</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
        {{--
                <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="img" src="../assets/img/faces/marc.jpg">
                            </a>
                        </div>
                        <div class="card-body">
                            <h6 class="card-category">CEO / Co-Founder</h6>
                            <h4 class="card-title">Alec Thompson</h4>
                            <p class="card-description">
                                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p>
                            <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                        </div>
                    </div>
                </div>
                --}}
    </div>
@endsection
