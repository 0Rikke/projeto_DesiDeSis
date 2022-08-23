<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Biblioteca</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        {{-- <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style> --}}

        <style>
            *{
                margin: 0px;
                padding: 0px;
            }
            body{
                background:#2d3748;
            }
            .background{

                height: 100vh;
                background-image: url('https://i.pinimg.com/originals/b8/00/87/b800878ec9ca72ed7f4ebe64e4aa1832.jpg');
                -webkit-backdrop-filter: blur(10px);
                filter: blur(5px);

            }
            .bac { grid-area: fundo;}
            .but { grid-area: botao;}
            .log { grid-area: logo;}

            .grid{

                display: grid;
                grid-template-areas:
                'logo fundo fundo fundo fundo fundo'
                'botao fundo fundo fundo fundo fundo'
                'botao fundo fundo fundo fundo fundo';

            }
            .antialiased {
                z-index: 8000px ;
                font-family: 'Nunito', sans-serif;
                /* background-image: url('https://i.pinimg.com/originals/b8/00/87/b800878ec9ca72ed7f4ebe64e4aa1832.jpg') */
            }

            .log{

                color:#718096;

                text-align: center;

            }
            p{
                font-size: 60px;
                font-weight: bold

            }
        </style>
    </head>
    <body >

        <div class="grid ">
            <div class="log">
                <svg  version="1.0" xmlns="http://www.w3.org/2000/svg"
            width="200.000000pt" height="200.000000pt" viewBox="0 0 600.000000 600.000000"
            preserveAspectRatio="xMidYMid meet" >

            <g transform="translate(0.000000,600.000000) scale(0.100000,-0.100000)"
            fill="#FFFFFF" stroke="none">
            <path d="M2933 4285 c-29 -8 -70 -23 -90 -34 -21 -11 -209 -158 -418 -327
            -1067 -862 -1390 -1128 -1444 -1190 -139 -158 -112 -425 61 -610 66 -70 162
            -132 243 -157 65 -21 246 -47 625 -92 168 -20 440 -54 605 -75 802 -104 786
            -102 803 -87 10 8 384 312 832 677 448 365 845 689 882 719 52 42 69 63 74 88
            8 43 -22 95 -63 108 -17 6 -41 19 -52 29 -47 42 -79 227 -61 353 5 41 10 76
            10 78 0 1 33 29 73 60 39 32 78 65 85 73 28 36 2 111 -45 130 -25 10 -943 139
            -1583 221 -129 17 -268 35 -308 41 -97 13 -166 12 -229 -5z m774 -239 c474
            -63 714 -93 1078 -134 34 -4 58 -11 55 -17 -4 -9 -362 -303 -1286 -1056 l-291
            -237 -359 49 c-197 27 -577 78 -844 114 -267 36 -523 70 -568 76 -46 6 -80 15
            -75 19 4 4 208 169 453 367 245 197 573 462 728 588 304 246 350 281 397 294
            62 19 169 9 712 -63z m1047 -526 c8 -91 58 -245 95 -295 l29 -39 -87 -71
            c-124 -103 -1492 -1218 -1518 -1238 -20 -15 -69 43 -88 104 -25 85 -31 241
            -11 319 25 97 43 118 116 134 14 3 104 70 200 148 1032 845 1244 1017 1250
            1013 4 -2 10 -36 14 -75z m-2549 -946 c446 -59 813 -110 817 -113 4 -3 -2 -33
            -13 -66 -40 -120 -35 -300 12 -434 10 -30 18 -56 16 -57 -1 -1 -137 15 -302
            37 -165 22 -527 68 -805 104 -278 36 -535 72 -572 80 -131 28 -220 92 -265
            192 -30 65 -40 156 -23 207 33 102 159 173 285 161 22 -3 405 -52 850 -111z"/>
            </g>
            </svg>
            <p>Biblioteca</p>
            </div>

            <div class="background bac" >

            </div>

            @if (Route::has('login'))
                <div class="but my-auto mx-5">
                    @auth
                        <a href="{{ url('/index') }}" class="btn btn-primary btn-lg btn-block">Ir ao Site</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg btn-block">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-secondary  btn-lg btn-block">Register</a>
                        @endif
                    @endauth
                </div>
            @endif




        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    </body>
</html>
