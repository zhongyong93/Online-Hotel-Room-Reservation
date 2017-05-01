
<!DOCTYPE html>
<html lang ="en">
<head>
    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>

    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>PHP Calendar Booking System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <!-- Favicons -->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/icons/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/icons/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/icons/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/icons/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/images/icons/favicon.png">


    <!-- HELPERS -->

    <link rel="stylesheet" type="text/css" href="assets/helpers/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/helpers/backgrounds.css">
    <link rel="stylesheet" type="text/css" href="assets/helpers/boilerplate.css">
    <link rel="stylesheet" type="text/css" href="assets/helpers/grid.css">
    <link rel="stylesheet" type="text/css" href="assets/helpers/spacing.css">
    <link rel="stylesheet" type="text/css" href="assets/helpers/typography.css">
    <link rel="stylesheet" type="text/css" href="assets/helpers/utils.css">
    <link rel="stylesheet" type="text/css" href="assets/helpers/colors.css">

    <!-- ELEMENTS -->

    <link rel="stylesheet" type="text/css" href="assets/elements/images.css">
    <link rel="stylesheet" type="text/css" href="assets/elements/buttons.css">
    <link rel="stylesheet" type="text/css" href="assets/elements/content-box.css">
    <link rel="stylesheet" type="text/css" href="assets/elements/forms.css">

    <!-- FRONTEND ELEMENTS -->
    <link rel="stylesheet" type="text/css" href="assets/frontend-elements/blog.css">
    <link rel="stylesheet" type="text/css" href="assets/frontend-elements/cta-box.css">
    <link rel="stylesheet" type="text/css" href="assets/frontend-elements/feature-box.css">
    <link rel="stylesheet" type="text/css" href="assets/frontend-elements/footer.css">
    <link rel="stylesheet" type="text/css" href="assets/frontend-elements/hero-box.css">
    <link rel="stylesheet" type="text/css" href="assets/frontend-elements/icon-box.css">
    <link rel="stylesheet" type="text/css" href="assets/frontend-elements/testimonial-box.css">

    <!-- ICONS -->

    <link rel="stylesheet" type="text/css" href="assets-minified/all-demo-test.css">
    <link rel="stylesheet" type="text/css" href="assets-minified/odds-ends.css">
    <link rel="stylesheet" type="text/css" href="assets/icons/fontawesome/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="assets/icons/linecons/linecons.css">


    <!-- WIDGETS -->

    <link rel="stylesheet" type="text/css" href="assets/widgets/dropdown/dropdown.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/theme-switcher/themeswitcher.css">

    <!-- FRONTEND WIDGETS -->


    <link rel="stylesheet" type="text/css" href="assets/widgets/owlcarousel/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="assets/widgets/fullpage/fullpage.css">

    <!-- SNIPPETS -->

    <link rel="stylesheet" type="text/css" href="assets/snippets/mobile-navigation.css">

    <!-- Frontend theme -->

    <link rel="stylesheet" type="text/css" href="assets/themes/frontend/layout.css">
    <link rel="stylesheet" type="text/css" href="assets/themes/frontend/color-schemes/default.css">

    <!-- Components theme -->

    <link rel="stylesheet" type="text/css" href="assets/themes/components/default.css">


    <!-- Frontend responsive -->


    <link rel="stylesheet" type="text/css" href="assets/helpers/frontend-responsive.css">

    <!-- JS Core -->

    <script type="text/javascript" src="assets/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-ui-position.js"></script>
    <script type="text/javascript" src="assets/js-core/transition.js"></script>
    <script type="text/javascript" src="assets/js-core/modernizr.js"></script>
    <script type="text/javascript" src="assets/js-core/jquery-cookie.js"></script>

    <script type="text/javascript" src="assets-minified/widgets/interactions-ui/resizable.js"></script>
    <script type="text/javascript" src="assets-minified/widgets/interactions-ui/draggable.js"></script>
    <script type="text/javascript" src="assets-minified/widgets/interactions-ui/sortable.js"></script>
    <script type="text/javascript" src="assets-minified/widgets/interactions-ui/selectable.js"></script>
    <script type="text/javascript" src="assets-minified/widgets/daterangepicker/moment.js"></script>
    <script type="text/javascript" src="assets-minified/widgets/calendar/calendar.js"></script>
    <script type="text/javascript" src="assets-minified/widgets/calendar/calendar-demo.js"></script>

    <script>
        $(document).ready(function () {

            //width = $(window).width();
            width = screen.width;

            if (width < 768) {

                $('.header-nav li').hide();


                $('.row, .myfooter').css({
                    'padding' : '10px'/*,
                     'padding-right' : '2px'*/

                });

            }

            $('#nav-toggle').click(function() {
                $('.header-nav li').show();
            });

        });
    </script>


    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>
    <script src="js/cycle.js"></script>

    
    <link rel='stylesheet' type='text/css' href='admin/fullcalendar/fullcalendar.print.css'
          media='print'/>
    <link rel='stylesheet' type='text/css' href='admin/fullcalendar/fullcalendar.css'/>
    <script type='text/javascript' src='admin/jquery/jquery-1.7.1.min.js'></script>
    <script type='text/javascript'
            src='admin/jquery/jquery-ui-1.8.17.custom.min.js'></script>
    <script type='text/javascript' src='admin/fullcalendar/fullcalendar.min.js'></script>
    <script type='text/javascript' src='admin/fullcalendar/gcal.js'></script>
        <script>
        $(document).ready(function () {

            $('#calendar').fullCalendar({

                header: {
                    left: 'prev,next',
                    center: 'title',
                    /*right: 'month,basicWeek,basicDay,agendaDay'*/
                    right: 'month,agendaWeek,agendaDay'
                },
                /*defaultView: 'agendaWeek',*/
                defaultView: 'month',
                allDaySlot: false,
                /*minTime: "00:00:00",
                 maxTime: "23:59:59",*/
                minTime: "00:00:00",
                maxTime: "23:30:00",
                slotDuration: "00:15:00",
                slotMinutes: "00:15:00",

                //displayEventTime: false,

                editable: true,

                eventRender: function (event, element) {
                    //var start = "\n" + moment(event.start).format("YYYY-MM-DD HH:mm") + "\n";
                    var start = moment(event.start).format("h:mma");
                    var end = moment(event.end).format("h:mma");
                    var description = event.description;
                    var location = event.location;
                    $(element).tooltip({
                        container: 'body',
                        html: true,
                        title: "Title: " + event.title + "<br/>" + start + " - " + end + "<br/>" + " Description: " + description + "<br/>" + " Location: " + location
                    });

                },

                
                eventSources: [

                                        {
                        /*googleCalendarApiKey: 'AIzaSyCYY5UpVNodQH1U5kiqrsZMNrco_7_8PVM',
                         googleCalendarId: 'vhce6412e9s21b7bv4mnauf914@group.calendar.google.com',*/
                        googleCalendarApiKey: 'AIzaSyCYY5UpVNodQH1U5kiqrsZMNrco_7_8PVM',
                        googleCalendarId: 'vhce6412e9s21b7bv4mnauf914@group.calendar.google.com',
                        color: 'red',
                        textColor: 'white'

                    },
                                        {
                        /*googleCalendarApiKey: 'AIzaSyCYY5UpVNodQH1U5kiqrsZMNrco_7_8PVM',
                         googleCalendarId: 'vhce6412e9s21b7bv4mnauf914@group.calendar.google.com',*/
                        googleCalendarApiKey: 'AIzaSyCYY5UpVNodQH1U5kiqrsZMNrco_7_8PVM',
                        googleCalendarId: 'kelchuk2@gmail.com',
                        color: 'red',
                        textColor: 'white'

                    },
                                        {                        url: 'events_public.php',
                        type: 'GET',
                        data: {},
                        error: function () {
                            alert('There was an error while fetching events!');
                        }
                                           }

                ]            });
        });
    </script>

    </head>

<body data-ng-app="admin-projects">

<div id="loading">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<div class="oe-clear"></div>

<!-- Bootstrap Datepicker -->

<!--<link rel="stylesheet" type="text/css" href="../assets-minified/widgets/datepicker/datepicker.css">-->
<script type="text/javascript"
        src="assets-minified/widgets/datepicker/datepicker.js"></script>
<script type="text/javascript">
    /* Datepicker bootstrap */

    $(function () {
        "use strict";
        $('.bootstrap-datepicker').bsdatepicker({
            format: 'mm-dd-yyyy'

        });
    });


</script>

<div id="page-wrapper" class="page-wrapper-cal-template"><div class="top-bar bg-topbar">
        <div class="container">
            <div class="float-left" >
                <a href="#" class="btn btn-sm bg-facebook tooltip-button oe-social" data-placement="bottom" title="Follow us on Facebook">
                    <i class="glyph-icon icon-facebook"></i>
                </a>
                <a href="#" class="btn btn-sm bg-google tooltip-button oe-social" data-placement="bottom" title="Follow us on Google+">
                    <i class="glyph-icon icon-google-plus"></i>
                </a>
                <a href="#" class="btn btn-sm bg-twitter tooltip-button oe-social" data-placement="bottom" title="Follow us on Twitter">
                    <i class="glyph-icon icon-twitter"></i>
                </a>

            </div>
            <div class="float-right user-account-btn dropdown" >

                <a href="tel://604-210-2010" class="btn btn-top btn-sm" title="Give us a call">
                    <i class="glyph-icon icon-phone"></i>
                    604-210-2010
                </a>
            </div>
        </div><!-- .container -->
    </div><!-- .top-bar -->
    <div class="main-header bg-header wow fadeInDown oe-header-bottom" >
        <div class="container">
            <a href="#" class="header-logo" title="Monarch - Create perfect presentation websites"></a><!-- .header-logo -->
            <div class="right-header-btn">
                <div id="mobile-navigation">
                    <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target=".header-nav"><span></span></button>
                </div>

            </div><!-- .header-logo -->
            <ul class="header-nav">
                <li>
                    <a class="oe-cal-template-1" href="index.php" title="PHPCalendarBooker Home Page">
                        Home
                        <i class="glyph-icon"></i>
                    </a>

                </li>
                <li>
                    <a class="oe-cal-template-1" href="cal-template.php" title="PHPCalendarBooker">
                        Event Calendar
                        <i class="glyph-icon"></i>
                    </a>

                </li>
                <li>
                                            <a class="oe-cal-template-1" href="admin/login.php" title="Hero sections">
                            Login
                            <i class="glyph-icon"></i>
                        </a>
                </li>



            </ul><!-- .header-nav -->
        </div><!-- .container -->
    </div><!-- .main-header --><!-- Owl carousel -->


    <script type="text/javascript"
            src="assets-minified/widgets/daterangepicker/moment.js"></script>
    <script type="text/javascript"
            src="assets-minified/widgets/daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript"
            src="assets-minified/widgets/daterangepicker/daterangepicker-demo.js"></script>

    <div class="row oe-cal-template-2 oe-social" >
        <h4 class="title-hero">
            Add &amp; Scheduled Event
        </h4>

        <p class="title-lead oe-social">Select start and end times.</p>

        <div   class="example-box-wrapper">

            <div class="input-prepend input-group demo-margin">
            <span class="add-on input-group-addon">
                <i class="glyph-icon icon-calendar"></i>
            </span>
                <input type="text" name="daterangepicker-time"
                       id="daterangepicker-time" class="form-control oe-cal-template-3" value="Select Times">
            </div>

            <script>
                $(document).ready(function () {
                    //console.log( "ready!" );
                    $(".applyBtn").click(function () {
                        var val1 = $("input[name=daterangepicker_start]").val();
                        var val2 = $("input[name=daterangepicker_end]").val();
                        var val3 = $("input[name=daterangepicker_title]").val();
                        var val4 = $("textarea[name=daterangepicker_textarea]").val();
                        $('#daterangepicker-time').val(val1 + " - " + val2);

                        $.ajax({

                            type: "POST",
                            cache: false,
                            url: "ajax/ajax-add-public.php",
                            data: {start: val1, end: val2, title: val3, notes: val4},

                            success: function (msg) {
                                alert(msg);
                                location.reload();
                                /*document.getElementById("vanillajs").innerHTML = msg;
                                 $("div#jqueryjs").html("<p>" + msg + "</p>");*/


                            }

                        });

                    });
                });
                //Apply

            </script>

        </div>


    </div>

    <div class="row"><div class="myButtonsList">
            <a href="cal-template.php"><button id="target1" class="btn btn-black">Calendar View</button></a>
            <a href="cal-template-list.php"><button id="target1" class="btn btn-purple">List View</button></a>
        </div></div>

    <div class="row">
<form method="post" action="">
        <div class="col-md-2"><select class="form-control oe-cal-template-3" name="category">
                <option value="all">All Categories</option>
             <option value="1">Uncategorized</option> <option value="2">Rock Bands</option> <option value="3">Seminars</option>
        </select></div>
        <div class="col-md-1"><input class="form-control btn-azure" type="submit" name="myButton" value="Submit"></div>
        <div class="col-md-8"></div>
        </form>
    </div>

    <div class="oe-clear"></div>

    <div class="oe-cal-template-4" id='calendar'></div>

    <div class="row oe-social">

        <div class="col-md-12">

            <a href="tel://604-210-2010" id="noner" class="phonecall btn btn-top btn-sm" title="Give us a call">
                <i class="glyph-icon icon-phone"></i>
                604-210-2010
            </a>

            <div class="oe-cal-template-5">
                <img class="oe-fullwidth" src="assets/image-resources/full-bg/full-bg-4.jpg" alt="PHP Calendar"/>
            </div>

        </div>

    </div>


    <div class="hero-box hero-box-smaller bg-black font-inverse oe-cal-template-6">
        <div class="container">
            <div>
                <div>
                    <div class="testimonial-box-big">
                        <div class="testimonial-content">
                            <i class="glyph-icon icon-quote-left"></i>
                            <i class="glyph-icon icon-quote-right"></i>
                            <h1>PHP Calendar Booking System</h1>
                        </div>
                        <div class="testimonial-author-wrapper">
                            <div class="testimonial-author">
                                <h2><span>Take Bookings</span></h2>
                                <h3>Unlimited Users | Simple Member Control
                                </h3>
                                <p>Booking Time slots has never been easier!</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="large-padding pad25B">
        <div class="container pad25B row">
            <div class="col-md-4">
                <div class="icon-box icon-box-offset-large bg-default content-box icon-boxed">
                    <i class="icon-large glyph-icon bg-white border-default btn-border icon-linecons-star wow bounceInDown" data-wow-delay="1s"></i>
                    <h3 class="text-transform-upr icon-title wow fadeInUp">Member Bookings</h3>
                    <p class="icon-content wow fadeInUp">Any member can make bookings and edit their own bookings.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box icon-box-offset-large bg-default content-box icon-boxed">
                    <i class="icon-large glyph-icon bg-white border-default btn-border icon-linecons-eye wow bounceInDown" data-wow-delay="1.5s"></i>
                    <h3 class="text-transform-upr icon-title wow fadeInUp">Admin Control</h3>
                    <p class="icon-content wow fadeInUp">The admin can make bookings, assign bookings and change bookings.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-box icon-box-offset-large bg-default content-box icon-boxed">
                    <i class="icon-large glyph-icon bg-white border-default btn-border icon-linecons-thumbs-up wow bounceInDown" data-wow-delay="2s"></i>
                    <h3 class="text-transform-upr icon-title wow fadeInUp">Public Access</h3>
                    <p class="icon-content wow fadeInUp">Allow the public to book available time slots and the admin can handle it.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="cta-box-btn bg-yellow oe-cal-template-7">
        <div class="container">
            <a title="" class="btn bg-black oe-cal-template-8" href="#">
                Get Organized Today!
                <span></span>
            </a>
        </div>
    </div>

    <div class="main-footer clearfix oe-cal-template-9">

        <div class="footer-pane">
            <div class="container clearfix myfooter">
                <div class="logo">&copy; 2016 Sitemakin. All Rights Reserved.</div>
                <div class="footer-nav-bottom">
                    <a href="index.php" title="Portfolio">Home</a>
                    <a href="cal-template.php" title="Portfolio">Event Calendar</a>
                    <a href="admin/login.php" title="">Login</a>
                </div>
            </div>
        </div>
    </div></div>


<!-- FRONTEND ELEMENTS -->

<!-- Skrollr -->

<script type="text/javascript" src="assets/widgets/skrollr/skrollr.js"></script>

<!-- Owl carousel -->

<!-- HG sticky -->

<script type="text/javascript" src="assets/widgets/sticky/sticky.js"></script>

<!-- WOW -->

<script type="text/javascript" src="assets/widgets/wow/wow.js"></script>

<!-- VideoBG -->

<script type="text/javascript" src="assets/widgets/videobg/videobg.js"></script>
<script type="text/javascript" src="assets/widgets/videobg/videobg-demo.js"></script>

<!-- Mixitup -->

<script type="text/javascript" src="assets/widgets/mixitup/mixitup.js"></script>
<script type="text/javascript" src="assets/widgets/mixitup/isotope.js"></script>

<!-- WIDGETS -->

<!-- Bootstrap Dropdown -->

<script type="text/javascript" src="assets/widgets/dropdown/dropdown.js"></script>

<!-- Bootstrap Tooltip -->

<script type="text/javascript" src="assets/widgets/tooltip/tooltip.js"></script>

<!-- Bootstrap Popover -->

<script type="text/javascript" src="assets/widgets/popover/popover.js"></script>

<!-- Bootstrap Progress Bar -->

<script type="text/javascript" src="assets/widgets/progressbar/progressbar.js"></script>

<!-- Bootstrap Buttons -->

<script type="text/javascript" src="assets/widgets/button/button.js"></script>

<!-- Bootstrap Collapse -->

<script type="text/javascript" src="assets/widgets/collapse/collapse.js"></script>

<!-- Superclick -->

<script type="text/javascript" src="assets/widgets/superclick/superclick.js"></script>

<!-- Input switch alternate -->

<script type="text/javascript" src="assets/widgets/input-switch/inputswitch-alt.js"></script>

<!-- Slim scroll -->

<script type="text/javascript" src="assets/widgets/slimscroll/slimscroll.js"></script>

<!-- Content box -->

<script type="text/javascript" src="assets/widgets/content-box/contentbox.js"></script>

<!-- Overlay -->

<script type="text/javascript" src="assets/widgets/overlay/overlay.js"></script>

<!-- Widgets init for demo -->

<!-- remove this
<script type="text/javascript" src="assets/js-init/widgets-init.js"></script>

<script type="text/javascript" src="assets/js-init/frontend-init.js"></script>
-->
<!-- Theme layout -->

<script type="text/javascript" src="assets/themes/frontend/layout.js"></script>

<!-- Theme switcher -->

<script type="text/javascript" src="assets/widgets/theme-switcher/themeswitcher.js"></script>
<script>
    width_scroll = screen.width;

    if (width_scroll < 768) {

        $(window).load(function () {
            $("html,body").animate({ scrollTop: 0 }, "slow");
        });

    }
</script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-58426297-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>