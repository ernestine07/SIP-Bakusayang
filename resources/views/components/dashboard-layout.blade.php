<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="{{asset('template/viewport')}}" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="{{asset('template/description')}}" content="au theme template">
    <meta name="{{asset('template/author')}}" content="Hau Nguyen">
    <meta name="{{asset('template/keywords')}}" content="au theme template">

    <!-- Fontfaces CSS-->
    <link href="{{asset('template/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('template/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('template/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('template/css/theme.css')}}" rel="stylesheet" media="all">


</head>

<body class="animsition">
    <div class="page-wrapper">
        @include('Layouts.navbar')
        {{$slot}}
        {{-- <div class="container px-4 px-lg-5"><div class="small text-center nav-item">Copyright by Ernestine Zefanya</div></div> --}}
    </div>
    <!-- Jquery JS-->
    <script src="{{asset('template/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('template/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('template/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('template/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('template/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('template/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('template/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('template/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('template/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('template/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('template/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('template/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('template/js/main.js')}}"></script>

    <!--export data tabel-->

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#data_user').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'excel',
                    ],
                    aoColumnDefs: [
                {"aTargets": [0], "bSortable": true},
                {"aTargets": [2], "asSorting": ["asc"], "bSortable": true},
            ],
            "language": {
                "url": "{{asset('template/datatable/bahasaindo.json')}}"
            }
                } );
            } );
            // var table = new DataTable('#data_user', {
            //     language: {
            //         // url: '//cdn.datatables.net/plug-ins/1.13.5/i18n/id.json',
            //         url: 'https://cdn.datatables.net/plug-ins/1.13.5/i18n/id.json',
            //     },
            // });
    //         $(document).ready(function ()
    // // DataTable
    //     var table = $('#data_user').DataTable({
    //         aoColumnDefs: [
    //             {"aTargets": [0], "bSortable": true},
    //             {"aTargets": [2], "asSorting": ["asc"], "bSortable": true},
    //         ],
    //         "language": {
    //             "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
    //         }
        
    // }));
        </script>

</body>

</html>
<!-- end document-->
