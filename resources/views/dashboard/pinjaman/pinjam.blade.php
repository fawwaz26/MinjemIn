<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

    {{-- template bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link type="text/css" href="assets/css/vendor-morris.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-bootstrap-datepicker.css" rel="stylesheet">

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="assets/css/dashboard.css" rel="stylesheet">

    <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet">

    <!-- Simplebar -->
    <link type="text/css" href="assets/vendor/simplebar.css" rel="stylesheet">
</head>

<body>
    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-fullbleed data-push data-responsive-width="992px" style="background-color: #F3FFE4" data-has-scrolling-region>

        <div class="mdk-drawer-layout__content">
            <!-- header-layout -->
            <div class="mdk-header-layout js-mdk-header-layout  mdk-header--fixed  mdk-header-layout__content--scrollable">
                <!-- header -->
                @include('dashboard.layout.navbar')

                <!-- isi konten -->
                {{-- @yield('content') --}}
                <div class="mdk-header-layout__content top-navbar mdk-header-layout__content--scrollable h-100">
                    <!-- main content -->
            
                    <div class="container-fluid">
                        <h2 class="fw-bold">Pinjaman</h2>

                        <form action="" method="get" >
                            @csrf
                            <div class="row justify-content-between mt-5 ml-3">

                            <div class="col-6">
                                <h3 class="mb-3 fw-bold">Pilih paket pinjaman :</h3>
                                <div class="col-6 ml-3 mt-4">
                                    <div class="mt-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                          <h3 style="font-size: 18px">Paket A - Rp 1.000.000</h3>  
                                        </label>
                                    </div>
                                    <div class="mt-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                          <h3 style="font-size: 18px">Paket B - Rp 2.000.000</h3>  
                                        </label>
                                    </div>
                                    <div class="mt-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                          <h3 style="font-size: 18px">Paket C - Rp 5.000.000</h3>  
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-6 my-2 fw-bold">
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">Nama Pemilik rekening :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4" required>                                      
                                </div>
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">Nama Bank :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4" required>                                      
                                </div>
                                <div class="point mb-3">
                                    <label for="nama" class="form-label" style="font-size: 18px">No Rekening :</label>
                                    <input type="nama" class="form-control border-top-0 border-end-0 border-start-0 " id="exampleNama" aria-describedby="namaHelp" style="background-color:#F3FFE4" required>                                      
                                </div>
                            </div>
                            </div>
                            
                            <div class="row d-flex justify-content-center align-content-center my-5">
                                <button type="" class="col-2 py-2 border-0 rounded-1 fw-bold" style="
                                    color: #4ABD78;
                                    background-color: #F3FFE4;
                                    box-shadow: -3px -3px 8px rgba(255, 255, 255, 0.03), 3px 3px 8px rgba(0, 0, 0, 0.2);                                
                                    ">
                                    pinjam
                                </button>
                            </div>
    
                        </form>
                    </div>


                </div>
                
            </div>
        </div>

        <!-- sidebar -->
        @include('dashboard.layout.sidebar')
    </div>



    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Simplebar -->
    <!-- Used for adding a custom scrollbar to the drawer -->
    <script src="assets/vendor/simplebar.js"></script>


    <!-- Vendor -->
    <script src="assets/vendor/Chart.min.js"></script>
    <script src="assets/vendor/moment.min.js"></script>


    <!-- APP -->
    <script src="assets/js/color_variables.js"></script>
    <script src="assets/js/app.js"></script>


    <script src="assets/vendor/dom-factory.js"></script>
    <!-- DOM Factory -->
    <script src="assets/vendor/material-design-kit.js"></script>
    <!-- MDK -->



    <script>
        (function() {
            'use strict';
            // Self Initialize DOM Factory Components
            domFactory.handler.autoInit()


            // Connect button(s) to drawer(s)
            var sidebarToggle = document.querySelectorAll('[data-toggle="sidebar"]')

            sidebarToggle.forEach(function(toggle) {
                toggle.addEventListener('click', function(e) {
                    var selector = e.currentTarget.getAttribute('data-target') || '#default-drawer'
                    var drawer = document.querySelector(selector)
                    if (drawer) {
                        if (selector == '#default-drawer') {
                            $('.container-fluid').toggleClass('container--max');
                        }
                        drawer.mdkDrawer.toggle();
                    }
                })
            })
        })()
    </script>


    <script src="assets/vendor/morris.min.js"></script>
    <script src="assets/vendor/raphael.min.js"></script>
    <script src="assets/vendor/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/datepicker.js"></script>

    <script>
        $(function() {
            window.morrisDashboardChart = new Morris.Area({
                element: 'morris-area-chart',
                data: [{
                        year: '2017-01',
                        a: 6352.27
                    },
                    {
                        year: '2017-02',
                        a: 4309.98
                    },
                    {
                        year: '2017-03',
                        a: 1465.98
                    },
                    {
                        year: '2017-04',
                        a: 1298.25
                    },
                    {
                        year: '2017-05',
                        a: 3209
                    },
                    {
                        year: '2017-06',
                        a: 2083
                    },
                    {
                        year: '2017-07',
                        a: 1285.23
                    },
                    {
                        year: '2017-08',
                        a: 1289
                    },
                    {
                        year: '2017-09',
                        a: 4430
                    },
                    {
                        year: '2017-10',
                        a: 8921.19
                    }
                ],
                xkey: 'year',
                ykeys: ['a'],
                labels: ['Earnings'],
                lineColors: ['#fff'],
                fillOpacity: '0.2',
                gridEnabled: true,
                gridTextColor: '#ffffff',
                resize: true
            });

        });
    </script>

{{-- <style>
    .form-check-label input{
        display: none;
    }
    label {
        padding: 10px;
        width: 200px;
        height: 100px;
        display: inline-block;
        /* border: 3px #4ABD78 solid; */
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 0 20px #c3c3c367;
        cursor: pointer;
    }
    span{
        color: #4ABD78;
        margin-top: 5px;
    }
    .form-check-label:checked{
        border: 3px #4ABD78 solid;
    }
</style> --}}


</body>

</html>