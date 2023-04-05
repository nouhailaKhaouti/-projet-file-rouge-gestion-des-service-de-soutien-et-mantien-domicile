@include('Admin.include.sidenav')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('Admin.include.navbar')
    <div class="container-fluid py-4">
        <div class="row">
            @include('Admin.include.card')
            @include('Admin.include.BigCard')
        </div>
         @include('Admin.include.table')
        @include('Admin.include.progress')

        @include('Admin.include.footer')
    </div>
</main>
</body>

</html>