@include('admin.include.head')

<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            @include('admin.include.nav_side')
            <main>
                <div class="container-fluid px-4">
                    <br>
                    <br>
                   <h3><strong>Add service</strong></h3>
                   <br>
                   @include('admin.services.add_service')
                   <br>
                   <br>
                   <br>
                    @include('admin.services.service_table')
                </div>
            </main>
            @include('admin.include.footer')
        </div>
    </div>
    @include('admin.include.script')
</body>

</html>