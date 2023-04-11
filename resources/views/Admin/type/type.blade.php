@include('admin.include.head')

<body class="sb-nav-fixed">
    @include('admin.include.nav')
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            @include('admin.include.nav_side')
            <main>
                <div class="container-fluid px-4">
                    <br>
                    <br>
                   <h3><strong>Add type</strong></h3>
                   <br>
                   @include('admin.type.add_type')
                   <br>
                   <br>
                   <br>
                    @include('admin.type.type_table')
                </div>
            </main>
            @include('admin.include.footer')
        </div>
    </div>
    @include('admin.include.script')
</body>

</html>