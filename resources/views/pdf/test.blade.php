<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Certificate</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans|Pinyon+Script|Rochester');

    .cursive {
        font-family: 'Pinyon Script', cursive;
    }

    .sans {
        font-family: 'Open Sans', sans-serif;
    }

    .bold {
        font-weight: bold;
    }

    .block {
        display: block;
    }

    .underline {
        border-bottom: 1px solid #777;
        padding: 5px;
        margin-bottom: 15px;
    }

    .margin-0 {
        margin: 0;
    }

    .padding-0 {
        padding: 0;
    }

    .pm-empty-space {
        height: 40px;
        width: 100%;
    }

    body {
        padding: 20px 0;
        background: #ccc;
    }

    .pm-certificate-container {
        position: relative;
        width: 800px;
        height: 600px;
        background-color: #618597;
        padding: 30px;
        color: #333;
        font-family: 'Open Sans', sans-serif;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        background: -webkit-repeating-linear-gradient(45deg, #618597, #618597 1px, #b2cad6 1px, #b2cad6 2px);
        background: repeating-linear-gradient(90deg, #618597, #618597 1px, #b2cad6 1px, #b2cad6 2px);
    }

    .pm-certificate-container .outer-border {
        width: 794px;
        height: 594px;
        position: absolute;
        left: 50%;
        margin-left: -397px;
        top: 50%;
        margin-top: -297px;
        border: 2px solid #fff;
    }

    .pm-certificate-container .inner-border {
        width: 730px;
        height: 530px;
        position: absolute;
        left: 50%;
        margin-left: -365px;
        top: 50%;
        margin-top: -265px;
        border: 2px solid #fff;
    }

    .pm-certificate-container .pm-certificate-border {
        position: relative;
        width: 720px;
        height: 520px;
        padding: 0;
        border: 1px solid #E1E5F0;
        background-color: #ffffff;
        left: 50%;
        margin-left: -360px;
        top: 50%;
        margin-top: -260px;
    }

    .puc {
        position: absolute;
        top: 0;
        left: 0;
        width: 720px;
        height: 500px;
        backgroun-color: '#000000';
        opacity: .15;
    }

    .pm-certificate-container .pm-certificate-border .pm-certificate-block {
        width: 650px;
        height: 200px;
        position: relative;
        left: 50%;
        margin-left: -325px;
        top: 70px;
        margin-top: 0;
    }

    .pm-certificate-container .pm-certificate-border .pm-certificate-header {
        margin-bottom: 10px;
    }

    .pm-certificate-container .pm-certificate-border .pm-certificate-title {
        position: relative;
        top: 40px;
    }

    .pm-certificate-container .pm-certificate-border .pm-certificate-title h2 {
        font-size: 34px !important;
    }

    .pm-certificate-container .pm-certificate-border .pm-certificate-body {
        padding: 20px;
    }

    .pm-certificate-container .pm-certificate-border .pm-certificate-body .pm-name-text {
        font-size: 20px;
    }

    .pm-certificate-container .pm-certificate-border .pm-earned {
        margin: 15px 0 20px;
    }

    .pm-certificate-container .pm-certificate-border .pm-earned .pm-earned-text {
        font-size: 20px;
    }

    .pm-certificate-container .pm-certificate-border .pm-earned .pm-credits-text {
        font-size: 15px;
    }

    .pm-certificate-container .pm-certificate-border .pm-course-title .pm-earned-text {
        font-size: 20px;
    }

    .pm-certificate-container .pm-certificate-border .pm-course-title .pm-credits-text {
        font-size: 15px;
    }

    .pm-certificate-container .pm-certificate-border .pm-certified {
        font-size: 12px;
    }

    .pm-certificate-container .pm-certificate-border .pm-certified .underline {
        margin-bottom: 5px;
    }

    .pm-certificate-container .pm-certificate-border .pm-certificate-footer {
        width: 650px;
        height: 100px;
        position: relative;
        left: 50%;
        margin-left: -325px;
        bottom: -125px;
    }

    .pm-certificate-footer {
        display: flex;
    }

    .pm-certificate-footer div {}

    .qr {
        position: absolute;
        top: 0;
        left: 0;
        margin: 30px;
        width: 80px;
        height: 80px;
    }
</style>

<body>

    <div id="cert" class="container pm-certificate-container">
        <div class="outer-border"></div>
        <div class="inner-border"></div>

        <div class="pm-certificate-border col-12">
            <img id="qr"
                src="https://chart.googleapis.com/chart?cht=qr&chl={{ gethostbyname(gethostname()) }}/student/alumni-info/{{ session('id') }}&chs=160x160&chld=L|0"
                class="qr qr-code img-thumbnail img-responsive" />
            <img src="https://puc.ac.bd/Content/assets/Image/puc.png" class="puc" />
            <div class="row pm-certificate-header">
                <div class="pm-certificate-title cursive col-12 text-center">
                    <h2>Premier University, Chittagong</h2>
                </div>
            </div>
            <img id="" src=
    "https://chart.googleapis.com/chart?cht=qr&chl={{gethostbyname(gethostname())}}/student/alumni-info/{{session('id')}}&chs=160x160&chld=L|0"
            class="qr qr-code img-thumbnail img-responsive" />

            <div class="row pm-certificate-body">

                <div class="pm-certificate-block">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <!-- LEAVE EMPTY -->
                            </div>
                            <div class="pm-certificate-name underline margin-0 col-8 text-center">
                                <span class="pm-name-text bold">Graduation Certificate</span>
                            </div>
                            <div class="col-2">
                                <!-- LEAVE EMPTY -->
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <!-- LEAVE EMPTY -->
                            </div>
                            <div class="pm-earned col-8 text-center">
                                <span class="pm-earned-text padding-0 block cursive">
                                    This certificate aknowledges that
                                    <b> {{ session('name') }} </b>
                                    has ended BSc. in CSE with cgpa of {{ session('cgpa', '4.00') }}
                                </span>
                                <!-- <span class="pm-credits-text block bold sans">PD175: 1.0 Credit Hours</span> -->
                            </div>
                            <div class="col-2">
                                <!-- LEAVE EMPTY -->
                            </div>
                            <div class="col-12"></div>
                        </div>
                    </div>

                    <!-- <div class="col-12">
              <div class="row">
                <div class="col-2"></div>
                <div class="pm-course-title col-8 text-center">
                  <span class="pm-earned-text block cursive">while completing the training course entitled</span>
                </div>
                <div class="col-2"></div>
              </div>
            </div> -->
                    <!--
            <div class="col-12">
              <div class="row">
                <div class="col-2"></div>
                <div class="pm-course-title underline col-8 text-center">
                  <span class="pm-credits-text block bold sans">BPS PGS Initial PLO for Principals at Cluster Meetings</span>
                </div>
                <div class="col-2"></div>
              </div>
            </div> -->
                </div>

                <div class="col-12">
                    <div class="row">
                        <div class="pm-certificate-footer">
                            <div class="col-4 pm-certified col-4 text-center">
                                <span class="pm-credits-text block sans">-</span>
                                <span class="pm-empty-space block underline"></span>
                                <span class="bold block">Registrar </span>
                            </div>
                            <div class="col-4">

                            </div>
                            <div class="col-4 pm-certified col-4 text-center">
                                <span class="pm-credits-text block sans">Date Completed: {{ date('d-m-y') }}</span>
                                <span class="pm-empty-space block underline"></span>
                                <!-- <span class="bold block">DOB: </span> -->
                                <span class="bold block">Vice Chancellor</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>


<!--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Document</title>
</head>
<style>
    h1,h2,h3,h4,h5 {
        text-align: center;
    }
    body::after {
        content:'';
        background : #000000;
        width: 100%;
        height: 100%;
    }
</style>
<body style="border: 2px;border-style:solid; height: 100%">
    <div >
        <h1 >
            Certificate of completion
        </h1>
        <h5 style="text-align: center">
            This certificate ackknowledges that,

        </h5>
        <h2>
            {{ session('name') }}
        </h2>
        <h3>
            has successfully completed the requirements for graduation
            as prescribed by the board of education.
        </h3>
        <img src=
"https://chart.googleapis.com/chart?cht=qr&chl=http://192.168.0.2/alumni-info/{{ session('id') }}&chs=160x160&chld=L|0"
        class="qr-code img-thumbnail img-responsive" />
    </div>
</body>

</html> -->
