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

<div style="color:white;" class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3  border-bottom box-shadow  bg-dark  ">

    <h5 class="my-0 mr-md-auto font-weight-normal"><a style="text-decoration: none;" href="{{url("/")}}"><img style="max-width: 40px;" src="{{url('/')}}/assets/images/logo.png"> RMSE</a></h5>
    <nav class="my-2 my-md-0 mr-md-3 ">
        <a class="p-2 text-white" href="#">ฟังก์ชั่นการใช้งาน</a>
        <a class="p-2 text-white" href="#">สนับสนุน</a>
        <a class="p-2 text-white" href="#">ค่าใช้จ่าย</a>
    </nav>

    @if(Auth::check())
        <a class="p-2 text-white" href="{{url("/dashboard")}}">คุณ {{Auth::user()->first_name}}</a>
        <a class="p-2 text-white" href="{{url("/logout")}}">ออกจากระบบ</a>
    @else
        <a class="btn btn-outline-light" href="{{url("/register")}}">สมัครสมาชิก</a>
        <a class="btn btn-outline-light" href="{{url("/login")}}">เข้าสู่ระบบ</a>
    @endif

</div>



<div class="container">



    @yield("content")



 
</div>


<!-- Bootstrap core JavaScript
================================================== -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script>
    $("#area_id").change(function(){

        $("#area-form").submit();

    });
</script>
<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>

