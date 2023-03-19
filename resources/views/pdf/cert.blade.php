<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <title>Document</title>
</head>
<style>
    h1,
    h2,
    h3,
    h4,
    h5 {
        text-align: center;
        margin: 10px;
        padding: 10px;
    }

    .row {
        display: flex;
        flex-direction: row;
    }
    .col {
        display: flex;
    }
    .date {
        text-align: right;
        position: fixed;
        bottom: 60;
        right: 0;
    }
    .line {
        background: black;
        width: 100%;
        height: 2px;
    }
    .qr {
        position: absolute;
        top: 0;
        left: 0;
        margin: 10px;
        width: 80px;
        height: 80px;
    }

    .cursive {
        font-family: 'Pinyon Script', cursive;
    }

    .puc {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        backgroun-color: '#000000';
        opacity: .20;
    }
    .left {
        position: fixed;
        left: 0;
        margin-left: 10px;
    }
    .right {
        position: fixed;
        right: 0;
        margin-right: 10px;
        text-align: right;
    }
    .col1 {

    }

    body {
        height: 500px;
        /* border-style: double; */
        /* border: 2; */
    }
    .footer {
        position: fixed;
        bottom: 0;
        display: flex;
        flex-direction: column;
    }
    .p-10 {
        padding: 10px;
    }
    .m-10 {
        padding: 10px;
    }
    #student_image {
        position: absolute;
        top: 0;
        right: 0;
        margin: 10px;
        width: 80px;
        height: 80px;
    }

    @page {
        size: 720px 500px;
    }
</style>

<body>
    <img src="https://puc.ac.bd/Content/assets/Image/puc.png" class="puc" />
    <div class="row">
        <span>
            <img id="qr"
                src="https://chart.googleapis.com/chart?cht=qr&chl={{ gethostbyname(gethostname()) }}/student/alumni-info/{{ $student->id }}&chs=100x100&chld=L|0"
                class="qr qr-code img-thumbnail img-responsive" />
        </span>
        <h1 class="cursive">
            Premier University
        </h1>
        <span>
            <img id="student_image"
                src="{{public_path('storage/'.$student->image)}}"
                class="img-thumbnail img-responsive" />
        </span>
    </div>
    <div class="row">
        <h3>
            Graduation Certificate
        </h3>
        <span class="m-10">
            This certificate aknowledges that
            <b> {{ $student->name }} </b> 
            <b>{{ $student->roll }}</b>
            has ended BSc. in CSE with cgpa of {{ $student->cgpa }}
        </span>
    </div>
    <div class="footer">
    <div class="row">
            <span class="col1 left">
            <img width="100px" height="20px" src="F:\FINAL PROJECT\pucbd-1.3.0\pucbd-1.3.0\public\img\signature2.png" alt="">
                <div class="line"></div>
                <span>Controller of Examinations</span>
            </span>
            <span class="col1 right">
            <img width="100px" height="20px" src="F:\FINAL PROJECT\pucbd-1.3.0\pucbd-1.3.0\public\img\signature1.png" alt="">
                <div class="line"></div>
                <span>Vice Chancellor</span>
            </span>
        </div>
    </div>
</body>

</html>
