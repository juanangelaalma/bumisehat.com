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

        .image__wrapper {
            width: 100%;
            height: 300px;
            overflow: hidden;
            margin: 10px 0;
        }

        .image__pregnancy {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            border-radius: 0.3rem;
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
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="34" height="34" rx="17" fill="#FF8039" fill-opacity="0.54" />
                            <rect x="9.37927" y="9.37933" width="14.6552" height="15.8276"
                                fill="url(#pattern0)" />
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                    height="1">
                                    <use xlink:href="#image0_507_84"
                                        transform="translate(-0.012069) scale(0.00169279 0.0015674)" />
                                </pattern>
                                <image id="image0_507_84" width="605" height="638"
                                    xlink:href="data:image/png;base64,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+T/OP6MbpvB4J1J39DJKmcjL05sbg+f4K8ojDTnbuoM70rENnovx9wbjhWdpesHf5VFtWX54BFxOOz5q7mRbT6OX8xvWMVw2nWCc8LN+UE44rfD98nV8pBOeIak6c1OOE9a9XLZ1p67DulV97VeWER5Jl3UJ10VZ7nK2fV7C6YX1LesYHt2Gwxbv7Rm8jk+PV00zXs5VR+RhueV8heOHbSpcPuFnWbb1jFW4/ML1EtYty7av87C9hPUKpxWvp/BMTbjOw/HDZRmexcmi4YvX69nWM5mhuH10sq1tLDxTXG4L5TDldlHV1sPh4rYetrly+Lhe5fvxNhB/tZ5lW5dh1VmIctzwK6Cy3uWyCbfp+OvVcJusWmbhPK5lR9tk3RmRfra17dV9tRS3uXi5LAfjxG20qp3H/WDc9uLtKWwH8ftZNO14uy3rG55ZrjrzG18CUPYtWbZ9XxGesaw6sxSLt7FSVT9SdSYz7uvjbT0+c1p19rWqnwzHqdrPDTvbXtWPxO182xnI+x/erNLbMqFrfvz+FauPtl0HAGD6/vtnr606sNkVFjJ0AQDMG6ELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACABoQsAIAGhCwAgAaELACCBWYWuQ/lj74ymPdI1N6/svX7f6qG2ygcApq/Yv+dPz2m7Hjs1q9D1RP543oymPdJGLzsnf/pmW+UDANO33svObbkKT04y8kKGrmcO9X88E7oAYKEcOtT/ey1X4elJRp5l6GrNnff2fjV/+t026wAATNdg/96mRycZeSah65Jzu4/c/WBvFpNu5MH9vdfsu+G6t9989fs+0FolAICpKfbrxf69zTq86JzuQ5OMP5PQdcYp3XvbDF2FP75t/Td/YXnlrv/2j1c/32pFAICJ/MIfrFxe7NfbrseZp3a/Mcn4Mwldxx+TfX0W0x3T8X9069onr1i/7toXn7f0u++5/L39tisEAIznihuu++WP3rb+/vzlsW3XZdJ8M5PQtWe5c8csprsDx+Yr6gN/9bWNd371get+65i9nU8vdbNv+zkJAJhPxc9CbPSys5851P/JL93b+5UH9vcua7tOpTzf3DnJ+DMJXXv3ZH89i+nu1EOP9l9VhK/y7z/4s2vbrA4AsAvl+eYvJxl/JqHrg1es7j/ms9cWp+AunsX0AQAS+1qRbyaZwMz+DdBPvHL5U5/5m3WhCwDY9X7iVcufmnQaMwtdJx7f+Vj+9Cuzmj4AQConHte5ZdJpzCx0Hbc3+0T+9FT+OGFWZQAAJPDUINdMZGah6/p9q089sP/XPnLbXRu/OKsyAABm7bJLlz5S5JpJpzOz0FU4/bnd38syoQsA2L0O55nJzTR0veic7sfzp/vyxwWzLAcAYEbuH+SZic00dL3n8vf2vnL/de/92O3t/3Q/AMC43vya5X9X5JlpTGumoatw4nGd382f/s/88bxZlwUAMEXfz3PMB0YP1szMQ9f1+1affOLAdb9xy+3rvz7rsgAApuVNr1n+jSLHTGt6Mw9dhZOO6/x2/lT8753zUpQHADChBwb5ZWqShK48JT594JmVf/WRL6x9MEV5AACT+NnX7vnfivwyzWkmCV2FG69aveGHH/q1//HL9238dKoyAQDG9ZLzlz5+01WrUz9RlCx0FS45t/ureej6m/zlySnLBQBo6AcvPq/7q7OYcNLQdcOVq/ddsbbyjo9+Ye0/pywXAKCJn33tnnfkeeXeWUw7aegq3HTV6n9549PX/fhn71x/e+qyAQDq/L1XLP9OkVNmNf3koatwximda887vfuyB/b3LmujfACAUJ5LbivyySzLaCV0Xb9v9Zm39lfekoeuz+d/XtxGHQAABr7+Iy9eekueTw7OspBWQlfhg1esPnJVf+XNN39u7TP5n2e3VQ8A4Fnt2/t+bM+bi1wy64JaC12FD125+vU8eL3x5j9f+5P8z3PbrAsA8Kzz4L7/Yc9PF3kkRWGthq7Ch35+9a6rOyuX3/S5tVvyP1/Sdn0AgGeFr1zxY3vedMOVqw+mKrD10FUoZvhtnZUf+8t7Nj5830O917VdHwBgcV1wZvfzf/dFS2/5/StWH01Z7lyErkIx49fcvPL6i17Q/bef/OL6O9quDwCweN7w6uXfPvXkzv9S3NSXuuy5CV2FwQJ455XHrnzqI3+x9jv56+e2XScAYCE8/nOv3fP2G69avamtCsxV6Crd+IurN1+9vPLXdz/Y+4/+VyMAMImXXrD0J8W/Iiz+M06b9ZjL0FXIF8z9+dObrvzQytUf+cLav85fn9d2nQCAXeWBn3vtnn9141WrN7RdkcLchq5SsaCuOWblD5840H/nLbev/4v8rdParhMAMNe+96YfWf63Jx3f+c3r960eaLsypbkPXYXBAvuNtx238v88daD/9o/dvn5d/vcFLVcLAJgv9735NcvvO+G4zgd+f9/qE21XJrYrQldpsABX333+u37za9/uvfHhx3q/dNtdG2/J3zuh7boBAK146rJLlz58xind33vh2d1PvOfy9/barlCdXRW6SoMFWvyK/Z9cc/PK8QcPZW84eKj/hju+sfGTjzzef3n+fqflKgIAs9F//nM7X3rVRUufPnZv55PH7s0+ef2+1afbrlQTuzJ0hQYL+sODR/bWm1aev7aevXptvf+iQ2vZi7/zaO+Su+7vFf/b8XnZ4TNizooBwHx7avD4/qXnd7991qndu/fuyb66Z7lzz57l7Isp/k/iLOz60BUbrIiPDx4AAHNh4UIXAMA8EroAABIQugAAEhC6AAASELoAABIQugAAEhC6AAASELoAABIQugAAEhC6AAASELoAABL4/wEHTR1HtnE14wAAAABJRU5ErkJggg==" />
                            </defs>
                        </svg>
                    </div>
                    <div class="flex flex-col mb-2">
                        <span class="minggu">Minggu {{ $user['age_week'] }}</span>
                        <h4 class="judul">{{ $alert['title'] }}</h4>
                        <div class="image__wrapper">
                            <img class="image__pregnancy"
                                src="{{ asset('storage/uploads/pregnancy_alerts/thumbnails/' . $alert['image']) }}"
                                alt="">
                        </div>
                        <p class="content">
                            {{ strip_tags(substr($alert['content'], 0, 250), null) }} ...
                        </p>
                    </div>
                </div>
                <center>
                    <span class="selengkapnya">Selengkapnya</span>
                    <a href="{{ route('pregnancy.index') }}" class="btn-primary"><b>KLIK DISINI</b></a>
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
