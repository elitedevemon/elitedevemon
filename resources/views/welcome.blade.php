@extends('layouts.master')
@section('content')
  <div class="page page_wrap one-page-enabled h-m-enabled theme-style-dark">
    <!-- Preloader -->
    @include('components.preloader')

    <!-- background -->
    @include('components.background-video')

    <!-- Container -->
    <div class="opened layout-rounded-style layout-minimal-style container" data-animation-in="fadeInUp"
      data-animation-out="fadeOutUp">

      <!-- Header -->
      @include('components.header')

      <!-- Card - Started -->
      @include('components.card')

      <!-- sidebar overlay menu -->
      @include('components.overlay-sidebar-menu')

      <!-- Card - Main content -->
      @include('components.main-content')

    </div>
  </div>
@endsection
