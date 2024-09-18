<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body {
            background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
        }

        .contact-form {
            background: #fff;
            margin-top: 10%;
            margin-bottom: 5%;
            width: 70%;
        }

        .contact-form .form-control {
            border-radius: 1rem;
        }

        .contact-image {
            text-align: center;
        }

        .contact-image img {
            border-radius: 6rem;
            width: 11%;
            margin-top: -3%;
            /* transform: rotate(29deg); */
        }

        .contact-form form {
            padding: 14%;
        }

        .contact-form form .row {
            margin-bottom: -7%;
        }

        .contact-form h3 {
            margin-bottom: 8%;
            margin-top: -10%;
            text-align: center;
            color: #0062cc;
        }

        .contact-form .btnContact {
            width: 50%;
            border: none;
            border-radius: 1rem;
            padding: 1.5%;
            background: #dc3545;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
        }

        .btnContactSubmit {
            width: 50%;
            border-radius: 1rem;
            padding: 1.5%;
            color: #fff;
            background-color: #0062cc;
            border: none;
            cursor: pointer;
        }


        .ibm-plex-sans-arabic-thin {
            font-family: "IBM Plex Sans Arabic", sans-serif;
            font-weight: 100;
            font-style: normal;
        }

        .ibm-plex-sans-arabic-extralight {
            font-family: "IBM Plex Sans Arabic", sans-serif;
            font-weight: 200;
            font-style: normal;
        }

        .ibm-plex-sans-arabic-light {
            font-family: "IBM Plex Sans Arabic", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        .ibm-plex-sans-arabic-regular {
            font-family: "IBM Plex Sans Arabic", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .ibm-plex-sans-arabic-medium {
            font-family: "IBM Plex Sans Arabic", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        .ibm-plex-sans-arabic-semibold {
            font-family: "IBM Plex Sans Arabic", sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        .ibm-plex-sans-arabic-bold {
            font-family: "IBM Plex Sans Arabic", sans-serif;
            font-weight: 700;
            font-style: normal;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    @livewireStyles
</head>

<body>
   @livewire('Home')
    @livewireScripts
</body>

</html>
