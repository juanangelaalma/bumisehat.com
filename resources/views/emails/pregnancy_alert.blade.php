<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            background-color: #CACED2;
            line-height: 1.4;
        }

        h1 {
            font-size: 28px;
            line-height: 35px;
            font-weight: bold;
            margin-right: 40px;
        }

        .email {
            background-color: white;
            margin: 10px;
            width: 500px;
        }

        .container {
            padding-top: 15px;
            padding-bottom: 15px;
            padding-right: 25px;
            padding-left: 25px;
        }

        .icon {
            border-radius: 100px;
            width: 50px;
        }

        .photo {
            border-radius: 100px;
            width: 50px;
            height: 50px;
        }

        .icon-small {
            height: 25px;
            width: 25px;
        }

        .flex {
            display: flex
        }

        .flex-col {
            flex-direction: column;
        }

        .justify-between {
            justify-content: space-between;
        }

        .align-center {
            align-items: center;
        }

        .justify-center {
            justify-content: center;
        }

        .text-center {
            text-align: center;
        }

        .text-secondary {
            color: #717171;
            font-size: 12px;
        }

        .btn-primary {
            margin: 5px;
            color: white;
            padding: 15px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            border-radius: 10px;
            background-color: #066F6A;
        }

        .btn-secondary {
            margin: 5px;
            background-color: white;
            color: #E7513B;
            padding: 15px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            border: 1px solid;
            border-color: #E7513B;
            text-decoration: none;
            border-radius: 10px;
        }

        .link {
            color: #FF8039;
            text-decoration: none;
        }

        .selengkapnya {
            display: block;
        }

        p.top {
            color: #6C757D;
            margin-top: 20px;
            font-weight: 500;
        }

        span.minggu {
            font-family: 'Arial';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 16px;
            margin: 0;
            /* identical to box height */
            margin-left: 7px;
            color: #6C757D;
            margin-bottom: 6px;
        }
        .judul {
            margin: 0;
            font-family: 'Arial';
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 18px;
            margin-left: 7px;
            color: #262727;
            margin-bottom: 6px;
        }
        .content {
            margin: 0;
            margin-left: 7px;
            color: #6C757D;
        }
        .mb-2 {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="flex justify-center">
        <div class="email">
            <div class="container">
                <div class="flex align-center">
                    <img src="{{ asset('images/icon/peduly-mini.png') }}" alt="">
                </div>
                <br>
                <p>
                    Hai <b>{{ $user->name }}</b> <br>
                </p>
                <br>
                <h1>
                    Udah cek kehamilanmu belum? 😁
                </h1>
                <p class="top">
                    Nih kami sajikan pengingat kehamilan, hanya untuk kamu
                </p>
                <br>
                <div class="flex">
                    <div style="height: 34px; width: 34px;">
                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect width="34" height="34" rx="17" fill="#FF8039" fill-opacity="0.54" />
                            <path
                                d="M22.0069 11.2356H20.4925V10.4785C20.4925 10.2776 20.4128 10.085 20.2708 9.94304C20.1288 9.80104 19.9362 9.72127 19.7353 9.72127C19.5345 9.72127 19.3419 9.80104 19.1999 9.94304C19.0579 10.085 18.9782 10.2776 18.9782 10.4785V11.2356H14.4351V10.4785C14.4351 10.2776 14.3553 10.085 14.2133 9.94304C14.0713 9.80104 13.8787 9.72127 13.6779 9.72127C13.4771 9.72127 13.2845 9.80104 13.1425 9.94304C13.0005 10.085 12.9207 10.2776 12.9207 10.4785V11.2356H11.4063C10.8039 11.2356 10.2261 11.475 9.80009 11.901C9.37409 12.327 9.13477 12.9047 9.13477 13.5072V22.5934C9.13477 23.1958 9.37409 23.7736 9.80009 24.1996C10.2261 24.6256 10.8039 24.8649 11.4063 24.8649H22.0069C22.6093 24.8649 23.1871 24.6256 23.6131 24.1996C24.0391 23.7736 24.2784 23.1958 24.2784 22.5934V13.5072C24.2784 12.9047 24.0391 12.327 23.6131 11.901C23.1871 11.475 22.6093 11.2356 22.0069 11.2356V11.2356ZM22.7641 22.5934C22.7641 22.7942 22.6843 22.9868 22.5423 23.1288C22.4003 23.2708 22.2077 23.3506 22.0069 23.3506H11.4063C11.2055 23.3506 11.0129 23.2708 10.8709 23.1288C10.7289 22.9868 10.6491 22.7942 10.6491 22.5934V17.2931H22.7641V22.5934ZM22.7641 15.7787H10.6491V13.5072C10.6491 13.3064 10.7289 13.1138 10.8709 12.9718C11.0129 12.8298 11.2055 12.75 11.4063 12.75H12.9207V13.5072C12.9207 13.708 13.0005 13.9006 13.1425 14.0426C13.2845 14.1846 13.4771 14.2644 13.6779 14.2644C13.8787 14.2644 14.0713 14.1846 14.2133 14.0426C14.3553 13.9006 14.4351 13.708 14.4351 13.5072V12.75H18.9782V13.5072C18.9782 13.708 19.0579 13.9006 19.1999 14.0426C19.3419 14.1846 19.5345 14.2644 19.7353 14.2644C19.9362 14.2644 20.1288 14.1846 20.2708 14.0426C20.4128 13.9006 20.4925 13.708 20.4925 13.5072V12.75H22.0069C22.2077 12.75 22.4003 12.8298 22.5423 12.9718C22.6843 13.1138 22.7641 13.3064 22.7641 13.5072V15.7787Z"
                                fill="#066F6A" />
                        </svg>
                    </div>
                    <div class="flex flex-col mb-2">
                        <span class="minggu">Minggu {{ $user["age_week"] }}</span>
                        <h4 class="judul">{{ $alert["title"] }}</h4>
                        <p class="content">
                            {{ strip_tags(substr($alert["content"], 0, 250), null) }} ...
                        </p>
                    </div>
                </div>
                <center>
                    <span class="selengkapnya">Selengkapnya</span>
                    <a href="{{ route('pregnancy.read', $alert["id"]) }}" class="btn-primary"><b>KLIK DISINI</b></a>
                </center>
                <br>
                <br>
                <p class="mb-2">
                    Biar lebih mudah, pastikan anda telah menekan tombol <a class="link"><b>Sudah</b></a>
                    pada saran yang kami berikan
                </p>
                <hr class="mb-2">
                <p class="text-secondary mb-2">
                    Email dibuat otomatis. Mohon tidak mengirimkan
                    balasan ke email ini. Jika membutuhkan bantuan,
                    silahkan hubungi <a href="" class="link"><b>Kontak Kami</b></a>
                </p>
                <hr class="mb-2">
                <p class="text-center text-secondary">
                    © {{ date('Y') }} {{ config('app.name') }}. All Right Reserved <br>
                </p>
            </div>
        </div>
    </div>
</body>

</html>
