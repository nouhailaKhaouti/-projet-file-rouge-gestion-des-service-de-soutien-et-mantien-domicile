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
                   <h3><strong>Add Category</strong></h3>
                   <br>
                   @include('admin.category.add_category')
                   <br>
                   <br>
                   <br>
                    @include('admin.category.category_table')
                </div>
            </main>
            @include('admin.include.footer')
        </div>
    </div>
    @include('admin.include.script')
</body>

</html>