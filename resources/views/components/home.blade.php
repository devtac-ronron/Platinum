@extends('layouts.app')

@section('content')
        @include('includes.navbar')
        @include('includes.sidebar')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <router-view></router-view>
  </div>
@endsection
