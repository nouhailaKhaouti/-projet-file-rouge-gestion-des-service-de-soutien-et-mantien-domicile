@include('admin.include.head')

<body class="sb-nav-fixed">
    @include('admin.include.nav')
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            @include('admin.include.nav_side')
            <main>
            <br>
                    <br>
                    <br>
                    <br>
                <div class="col-xl-9 order-xl-3" algin="center">

                    <div class="card bg-secondary shadow">

                        <div class="card-header bg-white border-0">
                        <br>
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0"><strong> {{$upgrade->user->name}} </strong></h3>
                                </div>
                            </div>
                            <br>

                            <div class="card-body">
                                <form>
                                    <h6 class="heading-small text-muted mb-4">request information</h6>
                                    <div class="pl-lg-4">
                                        <div class="row">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-username">date</label>
                                                <br>
                                                <br>
                                                <div class="form-control form-control-alternative">{{optional($upgrade->created_at)->format('d/m/Y')}}</div>
                                            </div>
                                            <div class="row">
                                            <div class="form-group focused">
                                            <br>
                                                <label class="form-control-label" for="input-email" >CIN file</label>
                                                <br>
                                                <br>
                                                <a class="form-control form-control-alternative" href="{{url('download_cin',$upgrade->id)}}" >{{$upgrade->cin_file}}</a>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group focused">
                                            <br>
                                                <label class="form-control-label" for="input-first-name">certificat</label>
                                                <br>
                                                <br>
                                                <a class="form-control form-control-alternative" href="{{url('download_certificat',$upgrade->id)}}" >{{$upgrade->certificat}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            @include('admin.include.footer')
        </div>
    </div>
    @include('admin.include.script')
</body>

</html>