@php

function checkRouteActive($route)
{
    if (Route::current()->uri == $route) {
        return 'active';
    }
}
@endphp

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <link href="{{ url('public/home') }}/img/ti.png" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ url('public/company') }}/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{ url('public/company') }}/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('public/company') }}/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{ url('public/company') }}/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{ url('public/company') }}/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="{{ url('public/company') }}/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet"
        href="{{ url('public/company') }}/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ url('public/company') }}/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="{{ url('public/company') }}/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ url('public/company') }}/assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css"
        href="{{ url('public/company') }}/assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css"
        href="{{ url('public/company') }}/assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css"
        href="{{ url('public/company') }}/assets/vendor/datatables/css/fixedHeader.bootstrap4.css">

    <link rel="stylesheet" href="{{ url('public/company') }}/assets/vendor/summernote/css/summernote-bs4.css">
    <title>PUSAKA</title>
</head>

<body>


    <div class="dashboard-main-wrapper">
        @include('layout.perusahaan.comheader')

        @include('layout.perusahaan.comsidebar')

        <div class="dashboard-wrapper">
            @yield('content')

            @include('layout.perusahaan.comfooter')
        </div>
    </div>

    <script src="{{ url('public/company') }}/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="{{ url('public/company') }}/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="{{ url('public/company') }}/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="{{ url('public/company') }}/assets/libs/js/main-js.js"></script>
    <script src="{{ url('public/company') }}/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <script src="{{ url('public/company') }}/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <script src="{{ url('public/company') }}/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="{{ url('public/company') }}/assets/vendor/charts/morris-bundle/morris.js"></script>
    <script src="{{ url('public/company') }}/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="{{ url('public/company') }}/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="{{ url('public/company') }}/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="{{ url('public/company') }}/assets/libs/js/dashboard-ecommerce.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('public/company') }}//assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('public/company') }}//assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ url('public/company') }}//assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>


    <script src="{{ url('public/company') }}/assets/vendor/summernote/js/summernote-bs4.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2({
                tags: true
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300

            });
        });
    </script>
</body>

</html>
