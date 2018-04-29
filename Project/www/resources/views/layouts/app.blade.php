<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>ระบบการจัดการการสำรองพื้นที่</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url("/")}}/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url("/")}}/assets/css/pricing.css" rel="stylesheet">

<body>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">

    <h5 class="my-0 mr-md-auto font-weight-normal"><a style="text-decoration: none;" href="{{url("/")}}"><img style="max-width: 40px;" src="{{url('/')}}/assets/images/logo.png"> ระบบการจัดการการสำรองพื้นที่</a></h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">ฟังชั่นการใช้งาน</a>
        <a class="p-2 text-dark" href="#">สนับสนุน</a>
        <a class="p-2 text-dark" href="#">ค่าใช้จ่าย</a>
    </nav>

    @if(Auth::check())
        <a class="p-2 text-dark" href="{{url("/dashboard")}}">คุณ {{Auth::user()->first_name}}</a>
        <a class="p-2 text-dark" href="{{url("/logout")}}">ออกจากระบบ</a>
    @else
        <a class="btn btn-outline-primary" href="{{url("/register")}}">สมัครสมาชิก</a>
        <a class="btn btn-outline-primary" href="{{url("/login")}}">เข้าสู่ระบบ</a>
    @endif

</div>



<div class="container">



    @yield("content")




    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                <small class="d-block mb-3 text-muted">© 2017-2018</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Resource</a></li>
                    <li><a class="text-muted" href="#">Resource name</a></li>
                    <li><a class="text-muted" href="#">Another resource</a></li>
                    <li><a class="text-muted" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>

<script src="{{url("/")}}/assets/js/bootstrap.min.js"></script>
<script src="{{url("/")}}/assets/js/vendor/holder.min.js"></script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>


