@include('admin.include.head')

<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            @include('admin.include.nav_side')
            <main>
                <div class="container-fluid px-4">
                    <br>
                    <br>
                   <h3><strong>Add tag</strong></h3>
                   <br>
                   @include('admin.Tags.add_tag')
                   <br>
                   <br>
                   <br>
                    @include('admin.Tags.tag_table')
                </div>
            </main>
            @include('admin.include.footer')
        </div>
    </div>
    @include('admin.include.script')
</body>

</html>