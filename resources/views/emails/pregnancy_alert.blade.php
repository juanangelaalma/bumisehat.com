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
                            <g clip-path="url(#clip0_423_348)">
                                <path
                                    d="M9.43787 23.7163C9.43787 19.4944 9.43787 15.2725 9.45314 11.0433C9.73031 10.4018 10.2493 10.2678 10.8954 10.3124C11.3972 10.347 11.9036 10.3193 12.4274 10.3193C12.4274 10.041 12.4003 9.79374 12.4374 9.5558C12.4605 9.40755 12.5446 9.22376 12.6645 9.14269C12.9588 8.9436 13.2909 9.19851 13.3011 9.61367C13.3068 9.84385 13.3021 10.0743 13.3021 10.2986C15.6111 10.2986 17.8815 10.2986 20.1656 10.2986C20.1656 10.0622 20.1636 9.84621 20.1661 9.63031C20.169 9.39234 20.3039 9.21824 20.5343 9.20114C20.7451 9.1855 20.9575 9.27648 20.9889 9.53342C21.0201 9.78835 21.0401 10.0446 21.0668 10.3193C21.7195 10.3193 22.3639 10.343 23.0053 10.3112C23.4561 10.2889 23.9865 10.841 23.9849 11.2589C23.9698 15.319 23.9689 19.3791 23.9854 23.4392C23.9872 23.9007 23.4286 24.4057 22.9936 24.404C18.8223 24.3884 14.6508 24.3943 10.4794 24.3952C10.0557 24.3953 9.76354 24.2109 9.58667 23.8408C9.56162 23.7884 9.48866 23.7573 9.43787 23.7163ZM10.3768 22.3313C10.3768 22.6139 10.3767 22.8965 10.3768 23.1791C10.3769 23.5464 10.377 23.5467 10.7644 23.5467C14.7401 23.5467 18.7157 23.5467 22.6914 23.5467C23.0953 23.5467 23.0963 23.5465 23.0963 23.1567C23.0966 20.6323 23.0966 18.1079 23.0959 15.5835C23.0959 15.4923 23.0877 15.4011 23.0832 15.3079C18.8397 15.3079 14.6175 15.3079 10.3768 15.3079C10.3768 17.6433 10.3768 19.9591 10.3768 22.3313ZM17.0879 14.4458C19.0859 14.4458 21.0838 14.4458 23.0963 14.4458C23.0963 13.3982 23.1003 12.3912 23.088 11.3843C23.0871 11.3114 22.9694 11.1791 22.9031 11.1773C22.2911 11.1612 21.6784 11.1678 21.0408 11.1678C21.0408 11.4397 21.0451 11.6823 21.0397 11.9247C21.0322 12.2653 20.8428 12.4773 20.564 12.4673C20.3047 12.458 20.1656 12.2685 20.1654 11.9238C20.1653 11.6741 20.1654 11.4244 20.1654 11.182C17.8548 11.182 15.5916 11.182 13.3001 11.182C13.3001 11.391 13.3163 11.5878 13.2949 11.7806C13.2783 11.9304 13.2576 12.116 13.1603 12.2112C13.0632 12.3061 12.8299 12.3828 12.7264 12.3328C12.5909 12.2672 12.4697 12.0793 12.4401 11.9264C12.3932 11.685 12.4276 11.429 12.4276 11.1674C11.8081 11.1674 11.2323 11.1751 10.6569 11.1634C10.4376 11.1589 10.3699 11.231 10.3726 11.4402C10.3829 12.2408 10.3768 13.0416 10.3768 13.8423C10.3768 14.0369 10.3768 14.2315 10.3768 14.4458C12.6175 14.4458 14.8234 14.4458 17.0879 14.4458Z"
                                    fill="#79C371" />
                            </g>
                            <defs>
                                <clipPath id="clip0_423_348">
                                    <rect width="14.6552" height="15.8276" fill="white"
                                        transform="translate(9.37927 8.79321)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                    <div class="flex flex-col mb-2">
                        <span class="minggu">Minggu {{ $user['age_week'] }}</span>
                        <h4 class="judul">{{ $alert['title'] }}</h4>
                        <p class="content">
                            {{ strip_tags(substr($alert['content'], 0, 250), null) }} ...
                        </p>
                    </div>
                </div>
                <center>
                    <span class="selengkapnya">Selengkapnya</span>
                    <a href="{{ route('pregnancy.read', $alert['id']) }}" class="btn-primary"><b>KLIK DISINI</b></a>
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
