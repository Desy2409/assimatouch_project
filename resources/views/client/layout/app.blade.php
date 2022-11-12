<!DOCTYPE html>
<html lang="en">

{{-- ========== START HEAD SECTION ========== --}}
@include('client.partials.head')
{{-- ========== END HEAD SECTION ========== --}}

<body class="page-index">

    {{-- ========== START NAVBAR SECTION ========== --}}
    @include('client.partials.navbar')
    {{-- ========== END NAVBAR SECTION ========== --}}

    <!-- ======= START GOAL SECTION ======= -->
    @include('client.partials.home._goal')
    <!-- END GOAL SECTION -->

    {{-- ======= START MAIN SECTION ======= --}}
    <main id="main">
        @yield('page-content')
    </main>
    {{-- ======= END MAIN SECTION ======= --}}

    <!-- ======= START FOOTER SECTION ======= -->
    @include('client.partials.footer')
    <!-- END FOOTER SECTION -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    @include('client.partials.script')

</body>

</html>
