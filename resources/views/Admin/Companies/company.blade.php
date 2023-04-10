@include('admin.include.head')

<body class="sb-nav-fixed">
    @include('admin.include.nav')
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            @include('admin.include.nav_side')
            <main>
                <div class="container-fluid px-4">
                    @include('admin.Companies.company_table')
                </div>
            </main>
            @include('admin.include.footer')
        </div>
    </div>
    @include('admin.include.script')
</body>

</html>