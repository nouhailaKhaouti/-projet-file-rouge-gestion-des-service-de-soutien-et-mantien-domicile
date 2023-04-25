@include('admin.include.head')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<body class="sb-nav-fixed">
    @include('admin.include.nav')
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            @include('admin.include.nav_side')
            @include('admin.include.body')
            @include('admin.include.footer')
        </div>
    </div>
    @include('admin.include.script')
</body>

</html>