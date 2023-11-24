@include('superadmin.include.header')
    @include('superadmin.include.top_nav')
        <div id="layoutSidenav">
            @include('superadmin.include.sitenav')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        @yield('main_content')                       
                    </div>
                </main>
                @include('superadmin.include.footer')
            </div>
        </div>
@include('superadmin.include.script')