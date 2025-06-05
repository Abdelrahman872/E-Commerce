@include('dashboard.layouts.sidebar')


        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                @include('dashboard.layouts.header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->

            </div>
        {{-- </div> --}}
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('dashboard.layouts.footer')
