<?php
session_start();
if (!(isset($_SESSION['username']))) {
    header('Location: login.php');
}


?>

<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sales</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap1.min.css" />
    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />
    <!-- <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" /> -->
    <!-- <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />
    <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />
    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" /> -->
    <!-- <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" /> -->

    <!-- <link rel="stylesheet" href="vendors/datepicker/date-picker.css" /> -->
    <link rel="stylesheet" href="vendors/vectormap-home/vectormap-2.0.2.css" />

    <!-- <link rel="stylesheet" href="vendors/scroll/scrollable.css" /> -->

    <!-- <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="vendors/morris/morris.css">

    <link rel="stylesheet" href="vendors/material_icon/material-icons.css" /> -->

    <link rel="stylesheet" href="css/metisMenu.css">

    <link rel="stylesheet" href="css/style1.css" />
    <!-- <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.2/xlsx.full.min.js"></script> -->
    <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script> -->
    <!-- <script lang="javascript" src="https://rawgit.com/SheetJS/js-xlsx/master/dist/xlsx.full.min.js"></script> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



</head>

<body class="crm_body_bg">


    <nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
        <div class="logo d-flex justify-content-between">
            <a href="index.html">
                <img src="img/Multiplierr.png" alt>
            </a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <span>Location</span>
                </a>
                <ul>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <span>State</span>
                        </a>
                        <ul>
                            <li>
                                <div class="chk_box" id="get_state_filter">

                                </div>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <span>City</span>
                        </a>
                        <ul>
                            <li>
                                <div class="chk_box" id="get_city_filter">


                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <span>Area Name</span>
                        </a>
                        <ul>
                            <li>
                                <div class="chk_box" id="get_area_filter">

                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <span>Speciality</span>
                </a>
                <ul>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <span>By Qualification</span>
                        </a>
                        <ul>
                            <li>
                                <div class="chk_box" id="qualification_check_filter">


                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <span>By Speciality</span>
                        </a>
                        <ul>
                            <li>
                                <div class="chk_box" id="speciality_check_filter">


                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <span>Demographic</span>
                </a>
                <ul>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <span>By Experience</span>
                        </a>
                        <ul>
                            <li>
                                <div class="chk_box" id="experience_check_filter">


                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <span>Gender</span>
                        </a>
                        <ul>
                            <li>
                                <div class="chk_box" id="gender_check_filter">

                                    <label class="container_1 text_lab">M
                                        <input type="checkbox" name="gender_filter_check" value="Male">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_1 text_lab">F
                                        <input type="checkbox" name="gender_filter_check" value="Female">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <span>NMC</span>
                </a>
                <ul>
                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false">
                            <span>By State Medical Council</span>
                        </a>
                        <ul>
                            <li>
                                <div class="chk_box" id="council_check_filter">


                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <section class="main_content dashboard_part large_header_bg">

        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="serach_field-area d-flex align-items-center">
                            <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here...">
                                    </div>
                                    <button type="submit"> <img src="img/icon/icon_search.svg" alt> </button>
                                </form>
                            </div>
                            <span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="profile_info">
                                <img src="img/user.png" alt="#" style="width: 140%;">
                                <div class="profile_info_iner">
                                    <div class="profile_author_name">
                                        <!-- <p>Neurologist </p> -->
                                        <h5 id="show_user_name"></h5>
                                    </div>
                                    <div class="profile_info_details">
                                        <a href="pricing.php">My Profile </a>
                                        <a href="#">Settings</a>
                                        <a href="logout.php">Log Out </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_content_iner overly_inner ">
            <div class="container-fluid p-0 ">

                <div class="row">
                    <div class="col-12">
                        <div class="page_title_box d-flex align-items-center justify-content-between">
                            <div class="page_title_left">
                                <!-- <h3 class="f_s_30 f_w_700 text_white">Dashboard</h3> -->
                                <h3 class="f_s_30 f_w_700 text_white"><span id="show_filter_result_count"></span> physicians out of <span id="show_overall_data"></span></h3>
                            </div>
                            <div class="credits_box">
                                <div class="whats_cre">
                                    Whatsapp Credits <br><br>
                                    <span id="show_whatsapp_credits"></span>
                                </div>
                                <div class="whats_cre">
                                    Email Credits <br><br>
                                    <span id="show_email_credits"></span>
                                </div>
                                <div class="whats_cre">
                                    Downloads Credits <br><br>
                                    <span id="show_download_credits"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="white_card card_height_100  mb_20">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Top doctor concentration by state</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body pb-0">
                                <div id="world-map-markers" class="dashboard_w_map"></div>
                                <div class="row justify-content-center mt_30">
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="single_progressbar">
                                                    <h6 class="f_s_14 f_w_400">Jharkhand</h6>
                                                    <div id="bar4" class="barfiller">
                                                        <div class="tipWrap">
                                                            <span class="tip"></span>
                                                        </div>
                                                        <span class="fill" data-percentage="81"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single_progressbar">
                                                    <h6>Chandigarh</h6>
                                                    <div id="bar5" class="barfiller">
                                                        <div class="tipWrap">
                                                            <span class="tip"></span>
                                                        </div>
                                                        <span class="fill" data-percentage="58"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single_progressbar">
                                                    <h6>Gujarat</h6>
                                                    <div id="bar6" class="barfiller">
                                                        <div class="tipWrap">
                                                            <span class="tip"></span>
                                                        </div>
                                                        <span class="fill" data-percentage="42"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single_progressbar">
                                                    <h6>Bihar</h6>
                                                    <div id="bar7" class="barfiller">
                                                        <div class="tipWrap">
                                                            <span class="tip"></span>
                                                        </div>
                                                        <span class="fill" data-percentage="55"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 card_height_100 mb_20">
                        <div class="white_card">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Top 4 Specialities</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body p-0">
                                <div class="card_container">
                                    <div id="platform_type_dates_donut" style="height:280px"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sales_unit_footer d-flex justify-content-between">
                            <div class="single_sales" id="show_speciality_count">
                                <p>
                                    <span style="
                                    display: inline-flex;
                                    border: 1px solid #7c3a84;
                                    border-radius: 25px;
                                    padding: 5px;
                                    background: #7c3a84;
                                "></span>
                                    General Practioner: <span>3598</span>
                                </p>
                                <p>
                                    <span style="
                                    display: inline-flex;
                                    border: 1px solid #a769af;
                                    border-radius: 25px;
                                    padding: 5px;
                                    background: #a769af;
                                "></span>
                                    Diabetologist: <span>2769</span>
                                </p>
                                <p>
                                    <span style="
                                    display: inline-flex;
                                    border: 1px solid #a769af;
                                    border-radius: 25px;
                                    padding: 5px;
                                    background: #a769af;
                                "></span>
                                    Dermatologist: <span>2074</span>
                                </p>

                                <p>
                                    <span style="
                                    display: inline-flex;
                                    border: 1px solid #a769af;
                                    border-radius: 25px;
                                    padding: 5px;
                                    background: #a769af;
                                    "></span>
                                    pulmonologist: <span>1559</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_20">
                            <div class="white_card_header">
                                <div class="row">
                                    <div class="main-title p-5 col-6">
                                        <h3 class="m-0">
                                            Doctor Campaign (Bulk/Individual)
                                        </h3>
                                    </div>
                                    <div class="tri_class col-6">
                                        <!-- Button trigger modal -->

                                        <p>
                                            <img src="img/whatsapp_logo.png" alt="" onclick="updateWhatappCredits()">
                                        </p>
                                        <p>
                                            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                                <img src="img/gmail_logo.png" alt="" onclick="updateEmailCredits()">
                                            </button>
                                        </p>
                                        <p>
                                            <img src="img/download_logo.png" alt="" onclick="updateDownloadCredits()">
                                        </p>
                                        <!-- <p id="whatsapp_campaign">
                                            <img src="img/whatsapp_logo.png" alt="">
                                        </p>
                                        <p id="email_campaign">
                                            <img src="img/gmail_logo.png" alt="">
                                        </p>
                                        <p id="download_button">
                                            <img src="img/download_logo.png" alt="">
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->

                            <div class="white_card_body ml-5 mr-5 mb-5" style="overflow-x: auto;">
                                <table class="table m-3">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="all_check"></th>
                                            <!-- <th>Message</th> -->
                                            <th>Name</th>
                                            <th>Specialty</th>
                                            <th>Gender</th>
                                            <th>Qualification</th>
                                            <th>Area Name</th>
                                            <th>City</th>
                                            <th>State</th>
                                            <th>MCI No</th>
                                            <th>Medical Council</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Passing Year</th>
                                            <th>Experience (In yrs)</th>
                                        </tr>
                                    </thead>
                                    <tbody id="show_all_data">

                                    </tbody>
                                </table>
                            </div>
                            <div class="pagenation_text">
                                <p>5 out of 10000</p>
                            </div>
                            <ul class="pagination">
                                <li class="page-item"><span class="page-link" id="previous_page">Previous</span></li>
                                <li class="page-item"><span class="page-link" id="next_page">Next</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2024 © Multiplier AI</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>

    <!-- <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
        Modal content
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Send Email</h4>
            </div>
            <div class="modal-body">
                <label for="subject">Subject:</label>
                <input type="text" class="form-control">
                <label for="subject">Message:</label>
                <textarea type="text" class="form-control"></textarea>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
         -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control">
                    <label for="subject">Message:</label>
                    <textarea type="text" class="form-control"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="email_campaign">Send</button>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="js/jquery1-3.4.1.min.js"></script>

    <script src="js/popper1.min.js"></script>


    <script src="js/metisMenu.js"></script>

    <!-- <script src="vendors/count_up/jquery.waypoints.min.js"></script> -->

    <script src="vendors/chartlist/Chart.min.js"></script>

    <!-- <script src="vendors/count_up/jquery.counterup.min.js"></script> -->

    <!-- <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script> -->

    <!-- <script src="vendors/owl_carousel/js/owl.carousel.min.js"></script> -->
    <!-- 
    <script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatable/js/dataTables.buttons.min.js"></script>-->
    <script src="vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="vendors/datatable/js/jszip.min.js"></script>
    <script src="vendors/datatable/js/pdfmake.min.js"></script>
    <script src="vendors/datatable/js/vfs_fonts.js"></script>
    <script src="vendors/datatable/js/buttons.html5.min.js"></script>
    <script src="vendors/datatable/js/buttons.print.min.js"></script>

    <!-- <script src="vendors/datepicker/datepicker.js"></script>
    <script src="vendors/datepicker/datepicker.en.js"></script>
    <script src="vendors/datepicker/datepicker.custom.js"></script> -->
    <script src="js/chart.min.js"></script>
    <script src="vendors/chartjs/roundedBar.min.js"></script>

    <script src="vendors/progressbar/jquery.barfiller.js"></script>

    <script src="vendors/tagsinput/tagsinput.js"></script>

    <script src="vendors/text_editor/summernote-bs4.js"></script>
    <script src="vendors/am_chart/amcharts.js"></script>

    <script src="vendors/scroll/perfect-scrollbar.min.js"></script>
    <script src="vendors/scroll/scrollable-custom.js"></script>

    <script src="vendors/vectormap-home/vectormap-2.0.2.min.js"></script>
    <!-- <script src="vendors/vectormap-home/vectormap-world-mill-en.js"></script> -->
    <script src="vendors/vectormap-home/vectormap-in-mill.js"></script>

    <script src="vendors/apex_chart/apex-chart2.js"></script>
    <script src="vendors/apex_chart/apex_dashboard.js"></script>
    <script src="vendors/echart/echarts.min.js"></script>
    <script src="vendors/chart_am/core.js"></script>
    <script src="vendors/chart_am/charts.js"></script>
    <script src="vendors/chart_am/animated.js"></script>
    <script src="vendors/chart_am/kelly.js"></script>
    <script src="vendors/chart_am/chart-custom.js"></script>

    <script src="js/dashboard_init.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>

<script>
    var show_all_data = document.getElementById("show_all_data")
    var next_page = document.getElementById("next_page")
    var previous_page = document.getElementById("previous_page")
    // var download_button = document.getElementById("download_button")
    var email_campaign = document.getElementById("email_campaign")
    // var whatsapp_campaign = document.getElementById("whatsapp_campaign")
    var get_state_filter = document.getElementById("get_state_filter")
    var get_city_filter = document.getElementById("get_city_filter")
    var speciality_check_filter = document.getElementById("speciality_check_filter")
    var qualification_check_filter = document.getElementById("qualification_check_filter")
    var show_speciality_count = document.getElementById("show_speciality_count")
    var city_filter_val = document.getElementById("city_filter_val")
    var get_area_filter = document.getElementById("get_area_filter")
    var experience_check_filter = document.getElementById("experience_check_filter")
    var gender_check_filter = document.getElementById("gender_check_filter")
    var council_check_filter = document.getElementById("council_check_filter")
    var all_check = document.getElementById("all_check")
    var show_filter_result_count = document.getElementById("show_filter_result_count")
    var show_whatsapp_credits = document.getElementById("show_whatsapp_credits")

    var form = new FormData();
    var start = 0
    var end = 5
    var g_obj = []
    var state_filter_val = []
    var city_filter_val = []
    var area_filter_val = []
    var qualification_filter_val = []
    var speciality_filter_val = []
    var exp_filter_val = []
    var gender_filter_val = []
    var council_filter_val = []
    var campaign = Array()
    let xj = 0
    var obj1 = {}
    let username = "<?= $_SESSION['name'] ?>"
    // alert("<?= $_SESSION['dc'] ?>")
    $('#show_user_name').html(username)
    $('#show_download_credits').html("<?= $_SESSION['dc'] ?>")
    $('#show_email_credits').html("<?= $_SESSION['ec'] ?>")
    $('#show_whatsapp_credits').html("<?= $_SESSION['wc'] ?>")

    function show_data_without_filter() {
        var settings = {
            "url": "Api/api.php",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                "function": "all_data"
            }),
        };

        $.ajax(settings).done(function(response) {
            const obj = JSON.parse(response)
            $('#show_overall_data').text(obj.length)
            $('#show_filter_result_count').text(obj.length)
            show_data(obj)

        });
    }

    show_data_without_filter()

    function show_data(obj) {
        obj1 = obj

        pagination()

        // download_button.addEventListener("click", () => {
        //     // var jsonDataObject = eval(g_obj);
        //     get_checkedvalue()		
        //     let data = []
        //     for(let i = 0; i < g_obj.length; i++)
        //     {
        //         for(let j = 0; j < obj.length; j++)
        //         {
        //             if(obj[j].record_id == g_obj[i])
        //             {
        //                 data.push(obj[j])
        //                 break
        //             }
        //         }
        //     }
        //     dounload_excel(data);
        // })

    }

    all_check.addEventListener("click", () => {
        pagination()
    })

    function pagination() {
        show_all_data.innerHTML = ""
        let input = ""
        console.log("obj1::", obj1)
        let currentPageStart = start + 1;
        let currentPageEnd = Math.min(start + 5, obj1.length);
        for (let i = start; i < end; i++) {
            if (g_obj.includes(obj1[i].record_id)) {
                input = `<input value=${obj1[i].record_id} name='selected_doctors' type='checkbox' checked>`
            } else if (all_check.checked) {
                g_obj = []
                input = `<input value=${obj1[i].record_id} name='selected_doctors' type='checkbox' checked>`
            } else {
                input = `<input value=${obj1[i].record_id} name='selected_doctors' type='checkbox'>`
            }
            show_all_data.innerHTML += `<tr><td>${input}</td><td>${obj1[i].name}</td><td>${obj1[i].specialty}</td><td>${obj1[i].gender}</td><td>${obj1[i].qualification}</td><td>${obj1[i].area_name}</td><td>${obj1[i].city}</td><td>${obj1[i].state}</td><td>${obj1[i].mci_no}</td><td>${obj1[i].medical_council}</td><td>${obj1[i].mail}</td><td>${obj1[i].phone}</td><td>${obj1[i].passing_year}</td><td>${obj1[i].exp}</td></tr>`
        }
        if (start === 0) {
            document.getElementById("previous_page").style.display = "none";
        } else {
            document.getElementById("previous_page").style.display = "block";
        }
        document.querySelector(".pagenation_text p").innerText = `${currentPageStart}-${currentPageEnd} out of ${obj1.length}`;
    }

    function updateWhatappCredits() {
        get_checkedvalue();
        var wc_count = g_obj.length;

        var settings = {
            "url": "Api/api.php",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                "function": "updateWhatsappCredits",
                "wc_count": wc_count,
                "g_obj": g_obj
            }),
        };

        $.ajax(settings).done(function(response) {
            console.log(response)
            let obj = JSON.parse(response)
            let obj1 = JSON.parse(obj)
            console.log(obj1);
            show_whatsapp_credits.innerHTML = obj1.wc
        });

    }

    function updateEmailCredits() {
        get_checkedvalue();
        var wc_count = g_obj.length;

        var settings = {
            "url": "Api/api.php",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                "function": "updateEmailCredits",
                "wc_count": wc_count,
                "g_obj": g_obj
            }),
        };

        $.ajax(settings).done(function(response) {
            let obj = JSON.parse(response)
            let obj1 = JSON.parse(obj)
            console.log(obj);
            $('#show_email_credits').text(obj["ec"]);
            show_email_credits.innerHTML = obj1.ec
        });

    }

    function updateDownloadCredits() {
        get_checkedvalue();
        var wc_count = g_obj.length;

        var settings = {
            "url": "Api/api.php",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                "function": "updateDownloadCredits",
                "wc_count": wc_count,
                "g_obj": g_obj
            }),
        };

        $.ajax(settings).done(function(response) {
            let obj = JSON.parse(response)
            let obj1 = JSON.parse(obj)
            console.log(obj);
            $('#show_download_credits').text(obj["dc"]);
            show_download_credits.innerHTML = obj1.dc
        });

    }

    // whatsapp_campaign.addEventListener("click", () => {
    //     get_checkedvalue()
    //     run_campaign("phone")
    // })

    email_campaign.addEventListener("click", () => {
        get_checkedvalue()
        console.log(g_obj)
        run_campaign("mail")
    })

    next_page.addEventListener("click", () => {
        start = start + 5
        end = start + 5
        console.log("inside next: start: ", start)
        console.log("inside next: end: ", end)
        // get_checkedvalue()
        pagination()
    })

    previous_page.addEventListener("click", () => {
        if (start > 0) {
            start = start - 5
            end = end - 5
            // get_checkedvalue()
            console.log("inside pre: start: ", start)
            console.log("inside pre: end: ", end)
        }
        pagination()
    })

    function run_campaign(val) {
        for (let x = 0; x < g_obj.length; x++) {
            for (let y = 0; y < obj1.length; y++) {
                if (g_obj[x] == obj1[y].record_id) {
                    campaign[x] = {
                        "record_id": obj1[y].record_id,
                        val: obj1[y][val],
                        "name": obj1[y].name
                    }
                }
            }
        }
        // campaign[0] = {
        //     record_id: "aksdjfksd",
        //     val: "tabassum@multipliersolutions.com",
        //     name: "iouewoiweoi"
        // }
        // campaign[1] = {
        //     record_id: "aksdjfksd1",
        //     val: "yuvaraj@multipliersolutions.com",
        //     name: "iouewoiweoi1"
        // }
        console.log(campaign)
        console.log(val)
        if (val == "phone") {
            for (let z = 0; z < campaign.length; z++) {
                var settings = {
                    "url": "https://media.smsgupshup.com/GatewayAPI/rest?userid=2000193304&password=HprhoWmpW&send_to=7318729127&v=1.1&format=json&msg_type=TEXT&method=SENDMESSAGE&msg=Manipal+Hospitals%2C+Delhi+is+pleased+to+invite+you+for+an+Interactive+Session+on+Zoom+App+on+Saturday%2C+18th+November+by+Dr.+Khusbu+Goel%2C+Consultant+-+Neurology+from+Manipal+Hospitals%2C+Delhi+on+%27All+About+Epilipsy%27.+Catch+them+live+on+18th+November+at+04+PM.%0A%0ARegister+now+-+https%3A%2F%2Fmanipalhospitals.zoom.us%2Fwebinar%2Fregister%2FWN_XjryqybNS1G136sT7w5yWQ%0A%0AMeeting++ID%3A96122042197%0AFor+any+query%2Fhelp%2C+please+call%3A+8929802980%0A%0A%23ManipalHospitalDelhi+%23YourManipal+%23Neurology+%23Webinar",
                    "method": "GET",
                    "timeout": 0,
                };

                $.ajax(settings).done(function(response) {
                    console.log(response);
                });
            }
        }
        if (val == "mail") {
            for (let z = 0; z < campaign.length; z++) {
                console.log(campaign.val)
                var settings = {
                    "url": "https://multipliersolutions.com/mail/index.php",
                    "method": "POST",
                    "timeout": 0,
                    "headers": {
                        "from": "sarabjeet@multipliersolutions.com",
                        "subject": "Testing",
                        "mailto": "ganesh@multipliersolutions.com",
                        // "cc": "",
                        // "bcc": "",
                        "Content-Type": "application/text"
                    },
                    "data": "Hi",
                };

                $.ajax(settings).done(function(response) {
                    console.log(response);
                });
            }
        }
    }


    function get_checkedvalue() {
        var selected_doctors = document.querySelectorAll('input[name="selected_doctors"]:checked')
        var unchecked = document.querySelectorAll('input[name="selected_doctors"]')
        console.log(selected_doctors)
        xj = 0;
        g_obj = [];
        for (let i = 0; i < selected_doctors.length; i++) {
            if (!(g_obj.includes(selected_doctors[i].value))) {
                g_obj[xj] = selected_doctors[i].value
                xj++
            }
        }

        for (let j = 0; j < unchecked.length; j++) {
            if (!(unchecked[j].checked)) {
                if (g_obj.includes(unchecked[j].value)) {
                    // console.log("inside if")
                    g_obj.splice(j, 1)
                    xj--
                }
            }
        }
        // console.log(g_obj)
    }


    function dounload_excel(data) {
        var sheet = XLSX.utils.json_to_sheet(data);
        var workbook = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(workbook, sheet, "doctors data");

        XLSX.write(workbook, {
            bookType: 'xlsx',
            type: 'base64'
        })
        XLSX.writeFile(workbook, 'data.xlsx');
    }

    get_state_filter.addEventListener("click", () => {
        start = 0
        end = 5
        setTimeout(() => {

            var state_filter_check = document.querySelectorAll("input[name = 'state_filter_check']:checked")
            // alert("hello")
            state_filter_val = []
            console.log("state:", state_filter_check)
            for (let i = 0; i < state_filter_check.length; i++) {
                if (state_filter_check[i].checked) {
                    if (!(state_filter_val.includes(state_filter_check[i].value))) {
                        state_filter_val.push(state_filter_check[i].value)
                    }
                }
            }
            console.log(state_filter_val)

            function get_unique_city() {
                var settings = {
                    "url": "Api/api.php",
                    "method": "POST",
                    "timeout": 0,
                    "headers": {
                        "Content-Type": "application/json"
                    },
                    "data": JSON.stringify({
                        "function": "get_unique_city",
                        "states": state_filter_val
                    }),
                };

                $.ajax(settings).done(function(response) {
                    // console.log(response);
                    var obj = JSON.parse(response)
                    // console.log(obj)
                    if (state_filter_val.length != 0) {
                        get_city_filter.innerHTML = ""
                    }
                    for (let i = 0; i < obj['city'].length; i++) {
                        get_city_filter.innerHTML += `<label class="container_1 text_lab">${obj['city'][i]}
                                        <input type="checkbox" name="city_filter_check" value="${obj['city'][i]}">
                                        <span class="checkmark"></span>
                                    </label>`
                    }
                    $('#show_filter_result_count').html("5623")
                });
            }

            function speciality_graph_count() {
                var settings = {
                    "url": "Api/api.php",
                    "method": "POST",
                    "timeout": 0,
                    "headers": {
                        "Content-Type": "application/json"
                    },
                    "data": JSON.stringify({
                        "function": "get_top_specialities",
                        "state": state_filter_val
                    }),
                };

                $.ajax(settings).done(function(response) {
                    // console.log(response);
                    let obj = JSON.parse(response)
                    // console.log(obj[0])
                    show_speciality_count.innerHTML = ''
                    for (let i = 0; i < obj.length; i++) {
                        show_speciality_count.innerHTML += `<p>${obj[i].specialty}: <span>${obj[i].specialty_count}</span></p>`
                    }
                });
            }

            function show_state_filter_data() {
                var settings = {
                    "url": "Api/api.php",
                    "method": "POST",
                    "timeout": 0,
                    "headers": {
                        "Content-Type": "application/json"
                    },
                    "data": JSON.stringify({
                        "function": "get_state_filter",
                        "state": state_filter_val
                    }),
                };

                $.ajax(settings).done(function(response) {
                    // console.log(response);
                    let obj = JSON.parse(response)
                    show_data(obj)
                });
            }

            if (state_filter_val.length == 0) {
                show_data_without_filter()
            } else {
                get_unique_city()
                show_state_filter_data()
                speciality_graph_count()
            }
        }, 10)
    })

    get_city_filter.addEventListener("click", () => {
        start = 0
        end = 5
        setTimeout(() => {

            var city_filter_check = document.querySelectorAll("input[name = 'city_filter_check']:checked")
            // alert("hello")
            city_filter_val = []
            console.log("city:", city_filter_check)
            for (let i = 0; i < city_filter_check.length; i++) {
                if (city_filter_check[i].checked) {
                    if (!(city_filter_val.includes(city_filter_check[i].value))) {
                        city_filter_val.push(city_filter_check[i].value)
                    }
                }
            }
            console.log(city_filter_val)

            function get_unique_areaname() {
                var settings1 = {
                    "url": "Api/api.php",
                    "method": "POST",
                    "timeout": 0,
                    "headers": {
                        "Content-Type": "application/json"
                    },
                    "data": JSON.stringify({
                        "function": "get_unique_area",
                        "city": city_filter_val
                    }),
                };

                $.ajax(settings1).done(function(response) {
                    // console.log(response);
                    let obj = JSON.parse(response)
                    // console.log(obj)
                    if (city_filter_val.length != 0) {
                        get_area_filter.innerHTML = ""
                    }
                    for (let i = 0; i < obj['area_name'].length; i++) {
                        get_area_filter.innerHTML += `<label class="container_1 text_lab">${obj['area_name'][i]}
                                        <input type="checkbox" name="state_area_check" value="${obj['area_name'][i]}">
                                        <span class="checkmark"></span>
                                    </label>`
                    }
                });
            }

            function show_city_filter_data() {
                var settings = {
                    "url": "Api/api.php",
                    "method": "POST",
                    "timeout": 0,
                    "headers": {
                        "Content-Type": "application/json"
                    },
                    "data": JSON.stringify({
                        "function": "get_city_filter",
                        "city": city_filter_val
                    }),
                };

                $.ajax(settings).done(function(response) {
                    // console.log(response);
                    let obj = JSON.parse(response)
                    show_data(obj)
                });
            }

            if (state_filter_val.length == 0) {
                show_data_without_filter()
            } else {
                get_unique_areaname()
                show_city_filter_data()
            }
        }, 10)
    })

    get_area_filter.addEventListener("click", () => {
        start = 0
        end = 5
        setTimeout(() => {
            var city_filter_check = document.querySelectorAll("input[name = 'state_area_check']:checked")
            area_filter_val = []
            console.log("area:", city_filter_check)
            for (let i = 0; i < city_filter_check.length; i++) {
                if (city_filter_check[i].checked) {
                    if (!(area_filter_val.includes(city_filter_check[i].value))) {
                        area_filter_val.push(city_filter_check[i].value)
                    }
                }
            }
            console.log(area_filter_val)


            function show_area_filter_data() {
                var settings = {
                    "url": "Api/api.php",
                    "method": "POST",
                    "timeout": 0,
                    "headers": {
                        "Content-Type": "application/json"
                    },
                    "data": JSON.stringify({
                        "function": "get_area_filter",
                        "area": area_filter_val
                    }),
                };

                $.ajax(settings).done(function(response) {
                    // console.log(response);
                    let obj = JSON.parse(response)
                    show_data(obj)
                });
            }

            if (area_filter_val.length == 0) {
                show_data_without_filter()
            } else {
                show_area_filter_data()
            }
        }, 10)
    })

    qualification_check_filter.addEventListener("click", () => {
        start = 0
        end = 5
        setTimeout(() => {

            var qualificatio_check = document.querySelectorAll("input[name = 'qualificatio_check']:checked")
            // alert("hello")
            qualification_filter_val = []
            console.log("Qualification:", qualificatio_check)
            for (let i = 0; i < qualificatio_check.length; i++) {
                if (qualificatio_check[i].checked) {
                    if (!(qualification_filter_val.includes(qualificatio_check[i].value))) {
                        qualification_filter_val.push(qualificatio_check[i].value)
                    }
                }
            }
            console.log(qualification_filter_val)

            // function get_unique_areaname()
            // {
            //     var settings1 = {
            //         "url": "Api/api.php",
            //         "method": "POST",
            //         "timeout": 0,
            //         "headers": {
            //             "Content-Type": "application/json"
            //         },
            //         "data": JSON.stringify({
            //             "function": "get_unique_area",
            //             "city": city_filter_val
            //         }),
            //     };

            //     $.ajax(settings1).done(function (response) {
            //         console.log(response);
            //         let obj = JSON.parse(response)
            //         console.log(obj)
            //         if(city_filter_val.length != 0)
            //         {
            //             get_area_filter.innerHTML = ""
            //         }
            //         for(let i = 0; i < obj['area_name'].length; i++)
            //         {
            //             get_area_filter.innerHTML += `<label class="container_1 text_lab">${obj['area_name'][i]}
            //                             <input type="checkbox" name="state_area_check" value="${obj['area_name'][i]}">
            //                             <span class="checkmark"></span>
            //                         </label>`
            //         }
            //     });
            // }

            // function speciality_graph_count()
            // {
            //     var settings = {
            //         "url": "Api/api.php",
            //         "method": "POST",
            //         "timeout": 0,
            //         "headers": {
            //             "Content-Type": "application/json"
            //         },
            //         "data": JSON.stringify({
            //             "function": "get_top_specialities",
            //             "state": state_filter_val
            //         }),
            //     };

            //     $.ajax(settings).done(function (response) {
            //         // console.log(response);
            //         let obj = JSON.parse(response)
            //         // console.log(obj[0])
            //         show_speciality_count.innerHTML = ''
            //         for(let i = 0; i < obj.length; i++)
            //         {
            //             show_speciality_count.innerHTML += `<p>${obj[i].specialty}: <span>${obj[i].specialty_count}</span></p>`
            //         }
            //     });
            // }

            function qualification_filter_data() {
                var settings = {
                    "url": "Api/api.php",
                    "method": "POST",
                    "timeout": 0,
                    "headers": {
                        "Content-Type": "application/json"
                    },
                    "data": JSON.stringify({
                        "function": "qualification_filter",
                        "qualification": qualification_filter_val
                    }),
                };

                $.ajax(settings).done(function(response) {
                    console.log(response);
                    let obj = JSON.parse(response)
                    show_data(obj)
                });
            }

            if (qualification_filter_val.length == 0) {
                show_data_without_filter()
            } else {
                // get_unique_city()
                // get_unique_areaname()
                qualification_filter_data()
                // speciality_graph_count()
            }
        }, 10)
    })

    speciality_check_filter.addEventListener("click", () => {
        start = 0
        end = 5
        setTimeout(() => {

            var speciality_check = document.querySelectorAll("input[name = 'speciality_check']:checked")
            // alert("hello")
            speciality_filter_val = []
            console.log("Speciality:", speciality_check)
            for (let i = 0; i < speciality_check.length; i++) {
                if (speciality_check[i].checked) {
                    if (!(speciality_filter_val.includes(speciality_check[i].value))) {
                        speciality_filter_val.push(speciality_check[i].value)
                    }
                }
            }
            console.log(speciality_filter_val)

            // function get_unique_areaname()
            // {
            //     var settings1 = {
            //         "url": "Api/api.php",
            //         "method": "POST",
            //         "timeout": 0,
            //         "headers": {
            //             "Content-Type": "application/json"
            //         },
            //         "data": JSON.stringify({
            //             "function": "get_unique_area",
            //             "city": city_filter_val
            //         }),
            //     };

            //     $.ajax(settings1).done(function (response) {
            //         console.log(response);
            //         let obj = JSON.parse(response)
            //         console.log(obj)
            //         if(city_filter_val.length != 0)
            //         {
            //             get_area_filter.innerHTML = ""
            //         }
            //         for(let i = 0; i < obj['area_name'].length; i++)
            //         {
            //             get_area_filter.innerHTML += `<label class="container_1 text_lab">${obj['area_name'][i]}
            //                             <input type="checkbox" name="state_area_check" value="${obj['area_name'][i]}">
            //                             <span class="checkmark"></span>
            //                         </label>`
            //         }
            //     });
            // }

            // function speciality_graph_count()
            // {
            //     var settings = {
            //         "url": "Api/api.php",
            //         "method": "POST",
            //         "timeout": 0,
            //         "headers": {
            //             "Content-Type": "application/json"
            //         },
            //         "data": JSON.stringify({
            //             "function": "get_top_specialities",
            //             "state": state_filter_val
            //         }),
            //     };

            //     $.ajax(settings).done(function (response) {
            //         // console.log(response);
            //         let obj = JSON.parse(response)
            //         // console.log(obj[0])
            //         show_speciality_count.innerHTML = ''
            //         for(let i = 0; i < obj.length; i++)
            //         {
            //             show_speciality_count.innerHTML += `<p>${obj[i].specialty}: <span>${obj[i].specialty_count}</span></p>`
            //         }
            //     });
            // }

            function speciality_filter_data() {
                var settings = {
                    "url": "Api/api.php",
                    "method": "POST",
                    "timeout": 0,
                    "headers": {
                        "Content-Type": "application/json"
                    },
                    "data": JSON.stringify({
                        "function": "speciality_filter",
                        "speciality": speciality_filter_val
                    }),
                };

                $.ajax(settings).done(function(response) {
                    console.log(response);
                    let obj = JSON.parse(response)
                    show_data(obj)
                });
            }

            if (speciality_filter_val.length == 0) {
                show_data_without_filter()
            } else {
                // get_unique_city()
                // get_unique_areaname()
                speciality_filter_data()
                // speciality_graph_count()
            }
        }, 10)
    })

    experience_check_filter.addEventListener("click", () => {
        start = 0
        end = 5
        setTimeout(() => {

            var exp_check = document.querySelectorAll("input[name = 'exp_check']:checked")
            // alert("hello")
            exp_filter_val = []
            console.log("Experience: ", exp_check)
            for (let i = 0; i < exp_check.length; i++) {
                if (exp_check[i].checked) {
                    if (!(exp_filter_val.includes(exp_check[i].value))) {
                        exp_filter_val.push(exp_check[i].value)
                    }
                }
            }
            console.log(exp_filter_val)

            // function get_unique_areaname()
            // {
            //     var settings1 = {
            //         "url": "Api/api.php",
            //         "method": "POST",
            //         "timeout": 0,
            //         "headers": {
            //             "Content-Type": "application/json"
            //         },
            //         "data": JSON.stringify({
            //             "function": "get_unique_area",
            //             "city": city_filter_val
            //         }),
            //     };

            //     $.ajax(settings1).done(function (response) {
            //         console.log(response);
            //         let obj = JSON.parse(response)
            //         console.log(obj)
            //         if(city_filter_val.length != 0)
            //         {
            //             get_area_filter.innerHTML = ""
            //         }
            //         for(let i = 0; i < obj['area_name'].length; i++)
            //         {
            //             get_area_filter.innerHTML += `<label class="container_1 text_lab">${obj['area_name'][i]}
            //                             <input type="checkbox" name="state_area_check" value="${obj['area_name'][i]}">
            //                             <span class="checkmark"></span>
            //                         </label>`
            //         }
            //     });
            // }

            // function speciality_graph_count()
            // {
            //     var settings = {
            //         "url": "Api/api.php",
            //         "method": "POST",
            //         "timeout": 0,
            //         "headers": {
            //             "Content-Type": "application/json"
            //         },
            //         "data": JSON.stringify({
            //             "function": "get_top_specialities",
            //             "state": state_filter_val
            //         }),
            //     };

            //     $.ajax(settings).done(function (response) {
            //         // console.log(response);
            //         let obj = JSON.parse(response)
            //         // console.log(obj[0])
            //         show_speciality_count.innerHTML = ''
            //         for(let i = 0; i < obj.length; i++)
            //         {
            //             show_speciality_count.innerHTML += `<p>${obj[i].specialty}: <span>${obj[i].specialty_count}</span></p>`
            //         }
            //     });
            // }

            function exp_filter_data() {
                var settings = {
                    "url": "Api/api.php",
                    "method": "POST",
                    "timeout": 0,
                    "headers": {
                        "Content-Type": "application/json"
                    },
                    "data": JSON.stringify({
                        "function": "exp_filter",
                        "exp": exp_filter_val
                    }),
                };

                $.ajax(settings).done(function(response) {
                    console.log(response);
                    let obj = JSON.parse(response)
                    show_data(obj)
                });
            }

            if (exp_filter_val.length == 0) {
                show_data_without_filter()
            } else {
                // get_unique_city()
                // get_unique_areaname()
                exp_filter_data()
                // speciality_graph_count()
            }
        }, 10)
    })

    gender_check_filter.addEventListener("click", () => {
        start = 0
        end = 5
        setTimeout(() => {

            var gender_filter_check = document.querySelectorAll("input[name = 'gender_filter_check']:checked")
            console.log(gender_filter_check)
            gender_filter_val = []
            console.log("Gender: ", gender_filter_val)

            for (let i = 0; i < gender_filter_check.length; i++) {
                if (gender_filter_check[i].checked) {
                    if (!(gender_filter_val.includes(gender_filter_check[i].value))) {
                        gender_filter_val.push(gender_filter_check[i].value)
                    }
                }
            }

            console.log(gender_filter_val)

            // function get_unique_areaname()
            // {
            //     var settings1 = {
            //         "url": "Api/api.php",
            //         "method": "POST",
            //         "timeout": 0,
            //         "headers": {
            //             "Content-Type": "application/json"
            //         },
            //         "data": JSON.stringify({
            //             "function": "get_unique_area",
            //             "city": city_filter_val
            //         }),
            //     };

            //     $.ajax(settings1).done(function (response) {
            //         console.log(response);
            //         let obj = JSON.parse(response)
            //         console.log(obj)
            //         if(city_filter_val.length != 0)
            //         {
            //             get_area_filter.innerHTML = ""
            //         }
            //         for(let i = 0; i < obj['area_name'].length; i++)
            //         {
            //             get_area_filter.innerHTML += `<label class="container_1 text_lab">${obj['area_name'][i]}
            //                             <input type="checkbox" name="state_area_check" value="${obj['area_name'][i]}">
            //                             <span class="checkmark"></span>
            //                         </label>`
            //         }
            //     });
            // }

            // function speciality_graph_count()
            // {
            //     var settings = {
            //         "url": "Api/api.php",
            //         "method": "POST",
            //         "timeout": 0,
            //         "headers": {
            //             "Content-Type": "application/json"
            //         },
            //         "data": JSON.stringify({
            //             "function": "get_top_specialities",
            //             "state": state_filter_val
            //         }),
            //     };

            //     $.ajax(settings).done(function (response) {
            //         // console.log(response);
            //         let obj = JSON.parse(response)
            //         // console.log(obj[0])
            //         show_speciality_count.innerHTML = ''
            //         for(let i = 0; i < obj.length; i++)
            //         {
            //             show_speciality_count.innerHTML += `<p>${obj[i].specialty}: <span>${obj[i].specialty_count}</span></p>`
            //         }
            //     });
            // }

            function gender_filter_data() {
                var settings = {
                    "url": "Api/api.php",
                    "method": "POST",
                    "timeout": 0,
                    "headers": {
                        "Content-Type": "application/json"
                    },
                    "data": JSON.stringify({
                        "function": "gender_filter",
                        "gender": gender_filter_val
                    }),
                };

                $.ajax(settings).done(function(response) {
                    console.log(response);
                    let obj = JSON.parse(response)
                    show_data(obj)
                });
            }

            if (gender_filter_val.length == 0) {
                show_data_without_filter()
            } else {
                // get_unique_city()
                // get_unique_areaname()
                gender_filter_data()
                // speciality_graph_count()
            }
        }, 10)
    })

    council_check_filter.addEventListener("click", () => {
        start = 0
        end = 5
        setTimeout(() => {

            var council_check = document.querySelectorAll("input[name = 'council_check']:checked")
            console.log(council_check)
            council_filter_val = []
            // console.log("Council: ", council_filter_val)

            for (let i = 0; i < council_check.length; i++) {
                if (council_check[i].checked) {
                    if (!(council_filter_val.includes(council_check[i].value))) {
                        council_filter_val.push(council_check[i].value)
                    }
                }
            }

            console.log(council_filter_val)

            // function get_unique_areaname()
            // {
            //     var settings1 = {
            //         "url": "Api/api.php",
            //         "method": "POST",
            //         "timeout": 0,
            //         "headers": {
            //             "Content-Type": "application/json"
            //         },
            //         "data": JSON.stringify({
            //             "function": "get_unique_area",
            //             "city": city_filter_val
            //         }),
            //     };

            //     $.ajax(settings1).done(function (response) {
            //         console.log(response);
            //         let obj = JSON.parse(response)
            //         console.log(obj)
            //         if(city_filter_val.length != 0)
            //         {
            //             get_area_filter.innerHTML = ""
            //         }
            //         for(let i = 0; i < obj['area_name'].length; i++)
            //         {
            //             get_area_filter.innerHTML += `<label class="container_1 text_lab">${obj['area_name'][i]}
            //                             <input type="checkbox" name="state_area_check" value="${obj['area_name'][i]}">
            //                             <span class="checkmark"></span>
            //                         </label>`
            //         }
            //     });
            // }

            // function speciality_graph_count()
            // {
            //     var settings = {
            //         "url": "Api/api.php",
            //         "method": "POST",
            //         "timeout": 0,
            //         "headers": {
            //             "Content-Type": "application/json"
            //         },
            //         "data": JSON.stringify({
            //             "function": "get_top_specialities",
            //             "state": state_filter_val
            //         }),
            //     };

            //     $.ajax(settings).done(function (response) {
            //         // console.log(response);
            //         let obj = JSON.parse(response)
            //         // console.log(obj[0])
            //         show_speciality_count.innerHTML = ''
            //         for(let i = 0; i < obj.length; i++)
            //         {
            //             show_speciality_count.innerHTML += `<p>${obj[i].specialty}: <span>${obj[i].specialty_count}</span></p>`
            //         }
            //     });
            // }

            function council_filter_data() {
                var settings = {
                    "url": "Api/api.php",
                    "method": "POST",
                    "timeout": 0,
                    "headers": {
                        "Content-Type": "application/json"
                    },
                    "data": JSON.stringify({
                        "function": "council_filter",
                        "medical_council": council_filter_val
                    }),
                };

                $.ajax(settings).done(function(response) {
                    console.log(response);
                    let obj = JSON.parse(response)
                    show_data(obj)
                });
            }

            if (council_filter_val.length == 0) {
                show_data_without_filter()
            } else {
                // get_unique_city()
                // get_unique_areaname()
                council_filter_data()
                // speciality_graph_count()
            }
        }, 10)
    })

    function show_state() {
        var settings = {
            "url": "Api/api.php",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                "function": "get_unique_state"
            }),
        };

        $.ajax(settings).done(function(response) {
            // console.log(response);
            const obj = JSON.parse(response)
            // console.log(obj["state"])
            for (let i = 0; i < obj['state'].length; i++) {
                get_state_filter.innerHTML += `<label class="container_1 text_lab">${obj['state'][i]}
                                <input type="checkbox" name="state_filter_check" value="${obj['state'][i]}">
                                <span class="checkmark"></span>
                            </label>`
            }
            // get_state_filter.innerHTML += `<button class="read_more_button" onclick="myFunction()" id="myBtn">Read more</button>`

        });
    }

    // function show_city()
    // {
    //     var settings = {
    //         "url": "Api/api.php",
    //         "method": "POST",
    //         "timeout": 0,
    //         "headers": {
    //             "Content-Type": "application/json"
    //         },
    //         "data": JSON.stringify({
    //             "function": "get_city_data"
    //         }),
    //     };

    //     $.ajax(settings).done(function (response) {
    //         console.log(response);
    //         const obj = JSON.parse(response)
    //         console.log(obj["city"])
    //         for(let i = 0; i < obj['city'].length; i++)
    //         {
    //             get_city_filter.innerHTML += `<label class="container_1 text_lab">${obj['city'][i]}
    //                             <input type="checkbox" name="city_filter_check" value="${obj['city'][i]}">
    //                             <span class="checkmark"></span>
    //                         </label>`
    //         }

    //     });
    // }

    // function show_area()
    // {
    //     var settings = {
    //         "url": "Api/api.php",
    //         "method": "POST",
    //         "timeout": 0,
    //         "headers": {
    //             "Content-Type": "application/json"
    //         },
    //         "data": JSON.stringify({
    //             "function": "get_area_data"
    //         }),
    //     };

    //     $.ajax(settings).done(function (response) {
    //         console.log(response);
    //         const obj = JSON.parse(response)
    //         console.log(obj["area"])
    //         for(let i = 0; i < obj['area'].length; i++)
    //         {
    //             get_area_filter.innerHTML += `<label class="container_1 text_lab">${obj['area'][i]}
    //                             <input type="checkbox" name="state_area_check" value="${obj['area'][i]}">
    //                             <span class="checkmark"></span>
    //                         </label>`
    //         }

    //     });
    // } 

    function show_speciality() {
        var settings = {
            "url": "Api/api.php",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                "function": "show_uniqe_speciality"
            }),
        };

        $.ajax(settings).done(function(response) {
            console.log(response);
            const obj = JSON.parse(response)
            console.log("speciality check:", obj["speciality"])
            for (let i = 0; i < obj['speciality'].length; i++) {
                speciality_check_filter.innerHTML += `<label class="container_1 text_lab">${obj['speciality'][i]}
                                <input type="checkbox" name="speciality_check" value="${obj['speciality'][i]}">
                                <span class="checkmark"></span>
                            </label>`
            }

        });
    }

    function show_qualification() {
        var settings = {
            "url": "Api/api.php",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                "function": "show_unique_qualification"
            }),
        };

        $.ajax(settings).done(function(response) {
            console.log(response);
            const obj = JSON.parse(response)
            // console.log(obj["speciality"])
            for (let i = 0; i < obj['qulalification'].length; i++) {
                qualification_check_filter.innerHTML += `<label class="container_1 text_lab">${obj['qulalification'][i]}
                                <input type="checkbox" name="qualificatio_check" value="${obj['qulalification'][i]}">
                                <span class="checkmark"></span>
                            </label>`
            }

        });
    }

    function show_experiene() {
        var settings = {
            "url": "Api/api.php",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                "function": "show_unique_exprience"
            }),
        };

        $.ajax(settings).done(function(response) {
            console.log("experience: ", response);
            const obj = JSON.parse(response)
            // console.log(obj["speciality"])
            for (let i = 0; i < obj['exp'].length; i++) {
                experience_check_filter.innerHTML += `<label class="container_1 text_lab">${obj['exp'][i]}
                                <input type="checkbox" name="0" value="${obj['exp'][i]}">
                                <span class="checkmark"></span>
                            </label>`
            }

        });
    }

    function show_unique_medicalcouncil() {
        var settings = {
            "url": "Api/api.php",
            "method": "POST",
            "timeout": 0,
            "headers": {
                "Content-Type": "application/json"
            },
            "data": JSON.stringify({
                "function": "show_unique_medicalcouncil"
            }),
        };

        $.ajax(settings).done(function(response) {
            // console.log("experience: ",response);
            const obj = JSON.parse(response)
            // console.log(obj["speciality"])
            for (let i = 0; i < obj['medical_council'].length; i++) {
                council_check_filter.innerHTML += `<label class="container_1 text_lab">${obj['medical_council'][i]}
                                <input type="checkbox" name="council_check" value="${obj['medical_council'][i]}">
                                <span class="checkmark"></span>
                            </label>`
            }

        });
    }

    show_speciality()
    show_state()
    // show_city()
    // show_area()
    show_qualification()
    show_unique_medicalcouncil()
    show_experiene()
</script>