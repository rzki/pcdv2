<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/daihatsu.png') }}">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="{{ asset('material') }}/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    {{-- FontAwesome --}}
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <!-- jQuery UI CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap5.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">


    </head>
    <body class="{{ $class ?? '' }}">
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('layouts.page_templates.auth')
        @endauth
        @guest()
            @include('layouts.page_templates.guest')
        @endguest

        <!--   Core JS Files   -->
        <script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
        <script src="{{ asset('material') }}/js/core/popper.min.js"></script>
        <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script>
        <script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!-- jQuery UI JS -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <!-- Plugin for the momentJs  -->
        <script src="{{ asset('material') }}/js/plugins/moment.min.js"></script>
        <!--  Plugin for Sweet Alert -->
        {{-- <script src="{{ asset('material') }}/js/plugins/sweetalert2.js"></script> --}}
        <!-- Forms Validations Plugin -->
        {{-- <script src="{{ asset('material') }}/js/plugins/jquery.validate.min.js"></script> --}}
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        {{-- <script src="{{ asset('material') }}/js/plugins/nouislider.min.js"></script> --}}
        <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('material') }}/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/dataTables.bootstrap5.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/datatables.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/buttons.dataTables.min.js') }}"></script>
        <script src="{{ asset('js/buttons.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('js/dataTables.scroller.min.js') }}"></script>
        <script src="{{ asset('js/scroller.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('js/jszip.min.js') }}"></script>
        <script src="{{ asset('js/pdfmake.min.js') }}"></script>
        <script src="{{ asset('js/vfs_fonts.js') }}"></script>
        <script src="{{ asset('js/chart.js') }}"></script>
        <script src="{{ asset('js/chartjs-plugin-datalabels.js') }}"></script>
        <script src="{{ asset('js/index.bundle.min.js') }}"></script>

        {{-- Clock & Date --}}
        <script>
            window.setInterval(function () {
            $('#date').html(moment().format('dddd, MMMM Do Y'))
            });
        </script>
        <script>
            window.setInterval(function () {
                $('#clock').html(moment().format('H:mm:ss'))
            }, 1000);
        </script>
        <script>
            $(document).ready(function() {
                window.setTimeout(function() {
                    $(".alert").fadeTo(250, 0).slideUp(250, function(){
                        $(this).remove();
                    });
                }, 500);
            });
        </script>

        @include('sweetalert::alert')
        @stack('js')

        {{-- SWAL Create Confirm --}}
        @yield('userCreateConfirm')
        @yield('employeeListCreateConfirm')
        @yield('kpiCreateConfirm')
        @yield('bestAttCreateConfirm')
        @yield('bestQCCCreateConfirm')
        @yield('bestSSCreateConfirm')
        @yield('volumeKAPCreateConfirm')
        @yield('volumeSAPCreateConfirm')
        @yield('volumeTotalCreateConfirm')
        @yield('modelCreateConfirm')
        @yield('typeCreateConfirm')
        @yield('otdSAPCreateConfirm')
        @yield('otdKAPCreateConfirm')
        @yield('sopCCRCreateConfirm')
        @yield('sopDPCreateConfirm')
        @yield('sopVPCreateConfirm')
        @yield('sopVAICreateConfirm')

        {{-- SWAL Edit & Reset Confirm --}}
        @yield('userEditConfirm')
        @yield('employeeListEditConfirm')
        @yield('employeeListPicEditConfirm')
        @yield('kpiEditConfirm')
        @yield('bestAttEditConfirm')
        @yield('bestQCCEditConfirm')
        @yield('bestSSEditConfirm')
        @yield('volumeTotalEditConfirm')
        @yield('volumeTotalSAPEditConfirm')
        @yield('volumeTotalKAPEditConfirm')
        @yield('modelEditConfirm')
        @yield('typeEditConfirm')
        @yield('otdSAPEditConfirm')
        @yield('otdKAPEditConfirm')
        @yield('profileEditConfirm')
        @yield('passwordEditConfirm')
        @yield('pictureEditConfirm')
        @yield('sopCCREditConfirm')
        @yield('sopDPEditConfirm')
        @yield('sopVPEditConfirm')
        @yield('sopVAIEditConfirm')
        @yield('userManageResetConfirm')
        @yield('pictureResetConfirm')

        {{-- SWAL Delete Confirm --}}
        @yield('userManageDeleteConfirm')
        @yield('employeeListDeleteConfirm')
        @yield('achieveL1DeleteConfirm')
        @yield('achieveL2DeleteConfirm')
        @yield('planningDeliveryDeleteConfirm')
        @yield('kpiDeleteConfirm')
        @yield('bestAttDeleteConfirm')
        @yield('bestQCCDeleteConfirm')
        @yield('bestSSDeleteConfirm')
        @yield('volumeTotalDeleteConfirm')
        @yield('volumeSAPDeleteConfirm')
        @yield('volumeKAPDeleteConfirm')
        @yield('modelSAPDeleteConfirm')
        @yield('modelKAPDeleteConfirm')
        @yield('typeSAPDeleteConfirm')
        @yield('typeKAPDeleteConfirm')
        @yield('otdSAPDeleteConfirm')
        @yield('otdKAPDeleteConfirm')
        @yield('dailyReportL1DeleteConfirm')
        @yield('hourlyReportL1DeleteConfirm')
        @yield('summaryReportL1DeleteConfirm')
        @yield('dailyReportL2DeleteConfirm')
        @yield('hourlyReportL2DeleteConfirm')
        @yield('summaryReportL2DeleteConfirm')
        @yield('delayUnitDeleteConfirm')
        @yield('asakaiDeleteConfirm')
        @yield('report77DeleteConfirm')
        @yield('bodDeleteConfirm')
        @yield('eomDeleteConfirm')
        @yield('sopCCRDeleteConfirm')
        @yield('sopDPDeleteConfirm')
        @yield('sopVPDeleteConfirm')
        @yield('sopVAIDeleteConfirm')

        {{-- Table --}}
        @yield('kpiTable')
        @yield('bdayTable')
        @yield('attTable')
        @yield('ssTable')
        @yield('qccTable')
        @yield('pcdTable')
        @yield('p4Table')
        @yield('dpr1Table')
        @yield('dpr2Table')
        @yield('dprL1Table')
        @yield('dprL2Table')
        @yield('userTable')
        @yield('otdSAPTable')
        @yield('otdKAPTable')
        @yield('planDeliveryTable')
        @yield('volumeTotalMDPTable')
        @yield('volumeSAPMDPTable')
        @yield('volumeKAPMDPTable')
        @yield('perModelSAPTable')
        @yield('perModelKAPTable')
        @yield('perTypeSAPTable')
        @yield('perTypeKAPTable')
        @yield('dailyProdReportL1Table')
        @yield('dailyProdReportL2Table')
        @yield('hourlyReportL1Table')
        @yield('hourlyReportL2Table')
        @yield('summaryReportL2Table')
        @yield('summaryReportL1Table')
        @yield('ccrTable')
        @yield('dailyPlanTable')
        @yield('vehiclePlanTable')
        @yield('vaiTable')
        @yield('report77Table')
        @yield('delayUnitTable')
        @yield('asakaiTable')
        @yield('bodTable')
        @yield('eomTable')

        {{-- Chart --}}
        @yield('otdSAPChart')
        @yield('otdKAPChart')
        @yield('achieveL1Chart')
        @yield('achieveL2Chart')
        @yield('otdChartSAP')
        @yield('otdChartKAP')
        @yield('OTDChart')
        @yield('OTD2Chart')
        @yield('Line1Chart')
        @yield('Line2Chart')
        @yield('volumeTotalActualChart')
        @yield('volumeTotalOPRChart')
        @yield('volumeTotalForecastChart')
        @yield('volumeSAPActualChart')
        @yield('volumeSAPOPRChart')
        @yield('volumeSAPForecastChart')
        @yield('volumeKAPActualChart')
        @yield('volumeKAPOPRChart')
        @yield('volumeKAPForecastChart')
        @yield('chartAssyLine1Day')
        @yield('chartDeliveryLine1')
        @yield('chartAssyLine1Night')
        @yield('chartDeliveryLine1Night')
        @yield('chartAssyLine2Day')
        @yield('chartDeliveryLine2')
        @yield('chartAssyLine2Night')
        @yield('chartDeliveryLine2Night')
        @yield('chartTotalTypeSAP')
        @yield('chartTotalTypeKAP')
        @yield('chartTotalModelSAP')
        @yield('chartTotalModelKAP')
        @yield('dailySAP')
        @yield('dailyKAP')
        @yield('datepickerTotalVolume')
        @yield('datePickerSAP')
        @yield('datePickerKAP')
    </body>
</html>
