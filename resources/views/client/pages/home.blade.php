@extends('client.layout.app')

@section('page-title',"Accueil")

@section('page-content')
<!-- ========== START OUR SERVICES SECTION ========== -->
@include('client.partials.home._service')
<!-- END OUR SERVICES SECTION -->

<!-- ========== START BANNER SECTION ========== -->
@include('client.partials.home._banner')
<!-- ========== END BANNER SECTION ========== -->

<!-- ========== START BLOG SECTION ========== -->
@include('client.partials.home._blog')
<!-- ========== END BLOG SECTION ========== -->
@endsection
