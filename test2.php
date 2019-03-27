<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>โปรแกรมคํานวณหา...</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <link rel="icon" type="image/png" href="calicon.png" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <style>
    body {
        font-family: 'Prompt', 'Raleway', serif;
        font-size: 48px;
    }

    h6 {
        color: #666666;
    }
    </style>
    <script language="javascript">
    function fncSubmit() {
        if (document.form1.A.value == "") {
            alert('กรุณากรอกข้อมูล A');
            document.form1.A.focus();
            return false;
        }
        if (document.form1.C.value == "") {
            alert('กรุณากรอกข้อมูล C');
            document.form1.C.focus();
            return false;
        }
        document.form1.submit();
    }
    </script>
    <script type="text/javascript">
    function redirect(url) {
        window.location.href = url;
    }
    </script>
</head>


<?php
$A = $_POST['A'];
$B = 2.58;
$C = $_POST['C'];
$C2 = $_POST['C2'];
$D = 748.86;
$E = 500;
$B2 = 10.13;
$E2 = 242.19;
// if($A != "" and $B != "")
// {

// $cal = $A / $B * $C +$DE ;

// }

?>


<body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">

        <a class="navbar">
            <img src="logo_dit.png" width="100" height="100" alt="">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <h1>&nbsp สำนักงานสาขาชั่งตวงวัด</h1>
                    <h6>&nbsp&nbsp&nbsp&nbsp เขต1-4 พิษณุโลก - กรมการค้าภายใน</h6>
                </li>
            </ul>
        </a>
        <a class="navbar">
            <img src="tel.png" width="50" height="50" alt="">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <h3>055-322606</h3>
                    <h6>&nbsp www.dit.go.th/region/CBWM14</h6>
                </li>
            </ul>
        </a>


    </nav>

    <!-- <div class="col-sm-6"> -->
    <div class="container"><br>
        <br>
        <div class="card">
            <div class="card-header">

                <h6>โปรแกรมการคำนวณ 2</h6>
            </div>
            <div class="card-body">

                <form id="form1" name="form1" method="post" onSubmit="JavaScript:return fncSubmit();">
                    <div class="form-group">
                        <h5>Operator</h5>
                        <select class="custom-select" name="opt_math" onchange="redirect(this.value);">
                            <option value="------">-----
                            <option value="test.php">1
                            <option value="test2.php">2


                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <h5>ระยะทาง A3</h5>
                        <input class="form-control" type="text" name="A" id="A" placeholder="กิโลเมตร">
                    </div>
                    <div class="form-group">
                        <h5>ระยะทาง A2</h5>
                        <input class="form-control" type="text" name="C" id="C" placeholder="กิโลเมตร">
                    </div>
                    <div class="form-group">
                        <h5>ระยะทางขากลับ A1</h5>
                        <input class="form-control" type="text" name="C2" id="C2" placeholder="กิโลเมตร">
                    </div>
                    <div class="form-group">
                        <h5>ค่าน้ำมัน</h5>
                        <input class="form-control" type="text" name="#" id="#" placeholder="บาท">
                    </div>
                    <div class="form-group">
                        <h5>ค่าบำรุงรักษา</h5>
                        <input class="form-control" type="text" name="#" id="#" placeholder="บาท">
                    </div>
                    <input class="btn btn-info" type="submit" name="submit" id="submit" value="คำนวณ" />
                    <input type="reset" class="btn btn-default" value="ล้างข้อมูล">
                </form>
                <h2>Result : <?php
                        if ($_REQUEST['opt_math']=="formula1"){
                        echo $A / $B * $C +$D +$E ;
                    }
                    else if ($_REQUEST['opt_math']=="formula2"){
                        echo $A / $B2 * $C +$E2 +$E;
                    }
                    ?></h2>

            </div>
        </div>
        <br>
    </div>


</body>

</html>