<!DOCTYPE html>
<html lang="en">

<head>
    <title>Génération Saalih</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="core/main.css" rel='stylesheet' >
    
    <link href='../packages/core/main.css' rel='stylesheet' />
    <link href='../packages/daygrid/main.css' rel='stylesheet' />
    <link href='../packages/timegrid/main.css' rel='stylesheet' />
    <link href='../packages/list/main.css' rel='stylesheet'/>
    <script src='../packages/core/main.js'></script>   
</head>

<body class="goto-here">
    <div class="py-1 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start text-center align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            
                            <div class="icon mr-2 d-flex justify-content-center align-items-center text-lg-right"></span></div>
                            <span  class="text"><i class="icon icon-phone2 "></i> +221 777043769</span>
                            
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center text-lg-right"></span></div>
                            <span  class="text"><i class="icon icon-envelope"></i> contact@generationsaalih.com</span>                          
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center text-lg-right"></span></div>
                            <span  class="text"><i class="icon icon-map-marker"></i> Louga, Sénégal</span>       
                        </div>    
                    </div>         
                </div>
            </div>
        </div>
    </div>
    <!-- nav -->
    @include('nav')
    <!-- END nav -->

    <section>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var initialLocaleCode = 'en';
                var localeSelectorEl = document.getElementById('locale-selector');
                var calendarEl = document.getElementById('calendar');

                var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
                height: 'parent',
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                // customize the button names,
                // otherwise they'd all just say "list"
                views: {
                    listDay: { buttonText: 'list day' },
                    listWeek: { buttonText: 'list week' }
                },
                defaultView: 'listWeek',
                defaultView: 'dayGridMonth',
                defaultDate: '2020-06',
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [
                    {
                    title: 'Event tous les jours',
                    start: '2020-05-23',
                    },
                    {
                    title: 'Viste',
                    start: '2020-05-02',
                    end: '2020-05-03'
                    },
                    {
                    groupId: 999,
                    title: 'Event répéter',
                    start: '2020-05-05T16:00:00'
                    },
                    {
                    title: 'Formation sur GS MISSION, OBJECTIFS, PARTENAIRES, CAPITALISATION',
                    start: '2020-06-27T18:00:00',
                    end: '2020-06-27T19:00:00'
                    },
                    {
                    title: 'Formation des coordonnateurs sur GS FUNDS 1',
                    start: '2020-06-20T18:00:00'
                    },
                    {
                    title: 'Renouvellement des cellules GS Saint-louis',
                    start: '2020-07-04T10:00:00'
                    },
                    {
                    title: 'Renouvellement des cellules GS Mbour',
                    start: '2020-07-11T10:00:00'
                    },
                    {
                    title: 'Atélier national à Touba',
                    start: '2020-08-15T10:00:00'
                    },
                    {
                    title: 'Aniversaire',
                    start: '2020-05-20T07:00:00'
                    },
                    
                ]
                });

                calendar.render();
                // build the locale selector's options
                calendar.getAvailableLocaleCodes().forEach(function(localeCode) {
                var optionEl = document.createElement('option');
                optionEl.value = localeCode;
                optionEl.selected = localeCode == initialLocaleCode;
                optionEl.innerText = localeCode;
                localeSelectorEl.appendChild(optionEl);
                });

                // when the selected option changes, dynamically change the calendar option
                localeSelectorEl.addEventListener('change', function() {
                if (this.value) {
                    calendar.setOption('locale', this.value);
                }
                });
            });

        </script>
        <div id='top'>        
            Locales:
            <select id='locale-selector'></select>
        </div>



    
        <div id='calendar-container'>
            <div id='calendar'></div>
        </div>
    </section>

    
    <!-- footer -->
    @include('footer')
    <!-- end footer -->



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script src='../packages/core/locales-all.js'></script>
    <script src='../packages/core/main.js'></script>
    <script src='../packages/interaction/main.js'></script>
    <script src='../packages/daygrid/main.js'></script>
    <script src='../packages/timegrid/main.js'></script>
    <script src='../packages/list/main.js'></script>
    


</body>

</html>