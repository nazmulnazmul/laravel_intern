@include('admin.include.header')
    @include('admin.include.top_nav')
        <div id="layoutSidenav">
            @include('admin.include.sitenav')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        @yield('main_content')                       
                    </div>
                </main>
                @include('admin.include.footer')
            </div>
        </div>
@include('admin.include.script')