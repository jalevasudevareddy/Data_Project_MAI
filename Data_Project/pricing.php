<?php

session_start();
if (!(isset($_SESSION['username']))) {
    header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/sales-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Dec 2023 07:17:05 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sales</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/bootstrap1.min.css" />

    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="vendors/datepicker/date-picker.css" />
    <link rel="stylesheet" href="vendors/vectormap-home/vectormap-2.0.2.css" />

    <link rel="stylesheet" href="vendors/scroll/scrollable.css" />

    <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="vendors/morris/morris.css">

    <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="css/metisMenu.css">

    <link rel="stylesheet" href="css/style1.css" />
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
        }

        .pricing-cards {
            display: flex;
            justify-content: space-around;
            max-width: 1200px;
            margin: 50px auto;
        }

        .pricing-card {
            flex: 1;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 80px 36px 80px 36px;
            margin: 0 10px;
            text-align: center;

        }

        .pricing-card p {
            color: #666;
        }

        .pricing-card .price {
            font-size: 23px;
            color: #7c3a84;
            margin-top: 10px;
        }

        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #7c3a84;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 15px;
        }

        .credits {
            font-size: 25px;
            color: #7c3a84;
        }

        .avatar {
            /* height: 23%; */
            width: 35%;
            border-radius: 55px;
            margin: 58px 0px 27px 0px;
        }

        .name_email {
            color: #7c3a84;
            font-size: 20px;
        }

        .phone_num {
            color: #353135c9;
            size: 15px;
            font-weight: 600;
        }


        .card {
            box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
        }

        .avatar.sm {
            width: 2.25rem;
            height: 2.25rem;
            font-size: .818125rem;
        }

        .table-nowrap .table td,
        .table-nowrap .table th {
            white-space: nowrap;
        }

        .table>:not(caption)>*>* {
            padding: 0.75rem 1.25rem;
            border-bottom-width: 1px;
        }

        table th {
            font-weight: 600;
            background-color: #eeecfd !important;
        }

        .fa-arrow-up {
            color: #00CED1;
        }

        .fa-arrow-down {
            color: #FF00FF;
        }

        .fnt_size {
            font-size: 16px;
        }
    </style>


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

            <center>
                <img src="https://e7.pngegg.com/pngimages/84/165/png-clipart-united-states-avatar-organization-information-user-avatar-service-computer-wallpaper-thumbnail.png" class="avatar">
                <h3 class="name_email" id="show_name"></h3>
                <p class="phone_num" id="show_email"></p>
                <a class="phone_num" id="show_ph_num"></a>
            </center>


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
                                    <!-- <div class="search_field">
                                        <input type="text" placeholder="Search here...">
                                    </div>
                                    <button type="submit"> <img src="img/icon/icon_search.svg" alt> </button> -->
                                </form>
                            </div>
                            <span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="profile_info">
                                <img src="img/user.png" alt="#" style="width: 140%;">
                                <div class="profile_info_iner">
                                    <div class="profile_author_name">
                                        <h3><a id="show_profile_name" href="index.php">My Profile </a></h3>
                                    </div>
                                    <div class="profile_info_details">

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

                <div class="row pricing-cards">

                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="pricing-card card_pricing">
                            <h2 class="credits">Download Credits</h2>
                            <p>Perfect for individuals</p>
                            <div class="price">Rs 150/month</div>
                            <ul>
                                <li>Feature 1</li>
                                <li>Feature 2</li>
                                <li>Feature 3</li>
                            </ul>
                            <a href="#" class="cta-button">Upgrade</a>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <!-- Pricing Card 2 -->
                        <div class="pricing-card">
                            <h2 class="credits">Whatsapp Credits</h2>
                            <p>Great for small businesses</p>
                            <div class="price">Rs 200/month</div>
                            <ul>
                                <li>All Basic Plan features</li>
                                <li>Feature 4</li>
                                <li>Feature 5</li>
                            </ul>
                            <a href="#" class="cta-button">Upgrade</a>
                        </div>

                    </div>

                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <!-- Pricing Card 3 -->
                        <div class="pricing-card">
                            <h2 class="credits">Mail Credits</h2>
                            <p>For large enterprises</p>
                            <div class="price">Rs 175/month</div>
                            <ul>
                                <li>All Pro Plan features</li>
                                <li>Feature 6</li>
                                <li>Feature 7</li>
                            </ul>
                            <a href="#" class="cta-button">Upgrade</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row" style="padding:26px;">
                <div class="col-12 mb-3 mb-lg-5">
                    <div class="position-relative card table-nowrap table-card">
                        <!-- <div class="card-header align-items-center">
                    <h5 class="mb-0">Latest Transactions</h5>
                    <p class="mb-0 small text-muted">1 Pending</p>
                </div> -->
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="small text-uppercase bg-body text-muted">
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Invoice</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="align-middle">
                                        <td class="fnt_size">
                                            #57473829
                                        </td>
                                        <td class="fnt_size">13 Sep, 2021</td>
                                        <td class="fnt_size">Renee Sims</td>
                                        <td class="fnt_size">
                                            <div class="d-flex align-items-center">
                                                <!-- <span><i class="fa fa-arrow-up" aria-hidden="true"></i></span> -->
                                                <span>Rs 145</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge fs-6 fw-normal bg-tint-success text-success">Completed</span>
                                        </td>
                                        <td>
                                            <img class="download" src="img/download-solid-36.png">
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="fnt_size">
                                            #012458780
                                        </td>
                                        <td class="fnt_size" b>19 Aug, 2021</td>
                                        <td class="fnt_size">Tim cage</td>
                                        <td class="fnt_size">
                                            <div class="d-flex align-items-center">
                                                <!-- <span><i class="fa fa-arrow-down" aria-hidden="true"></i></span> -->
                                                <span>Rs 145</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge fs-6 fw-normal bg-tint-warning text-warning">Pending</span>
                                        </td>
                                        <td>
                                            <img class="download" src="img/download-solid-36.png">
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="fnt_size">
                                            #57473829
                                        </td>
                                        <td class="fnt_size">13 Sep, 2021</td>
                                        <td class="fnt_size">Renee Sims</td>
                                        <td class="fnt_size">
                                            <div class="d-flex align-items-center">
                                                <!-- <span><i class="fa fa-arrow-up" aria-hidden="true"></i></span> -->
                                                <span>Rs 145</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge fs-6 fw-normal bg-tint-success text-success">Completed</span>
                                        </td>
                                        <td>
                                            <img class="download" src="img/download-solid-36.png">
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="fnt_size">
                                            #57473829
                                        </td>
                                        <td class="fnt_size">13 Sep, 2021</td>
                                        <td class="fnt_size">Renee Sims</td>
                                        <td class="fnt_size">
                                            <div class="d-flex align-items-center">
                                                <!-- <span><i class="fa fa-arrow-up" aria-hidden="true"></i></span> -->
                                                <span>Rs 145</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge fs-6 fw-normal bg-tint-success text-success">Completed</span>
                                        </td>
                                        <td>
                                            <img class="download" src="img/download-solid-36.png">
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="fnt_size">
                                            #57473829
                                        </td>
                                        <td class="fnt_size">13 Sep, 2021</td>
                                        <td class="fnt_size">Renee Sims</td>
                                        <td class="fnt_size">
                                            <div class="d-flex align-items-center">
                                                <!-- <span><i class="fa fa-arrow-up" aria-hidden="true"></i></span> -->
                                                <span>Rs 145</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge fs-6 fw-normal bg-tint-success text-success">Completed</span>
                                        </td>
                                        <td>
                                            <img class="download" src="img/download-solid-36.png">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h3>Credit Summary</h3>
            <div class="row" style="padding:26px;">
                <div class="col-12 mb-3 mb-lg-5">
                    <div id="reportrange" style="background: #fff; cursor: pointer; width:300px; padding: 5px 10px; border: 1px solid #ccc;">
                        <i class="fa fa-calendar"></i>&nbsp;
                        <span></span> <i class="fa fa-caret-down"></i>
                    </div>
                    </br>
                    <div class="position-relative card table-nowrap table-card">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="small text-uppercase bg-body text-muted">
                                    <tr style="text-align:center;">
                                        <th>Date</th>
                                        <th>Whatsapp Credits</th>
                                        <th>Email Credits</th>
                                        <th>Download Credits</th>
                                    </tr>
                                </thead>
                                <tbody id="range_credit_data">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagenation_text">
            <p>5 out of 10000</p>
        </div>
        <ul class="pagination">
            <li class="page-item"><span class="page-link" id="previous_page">Previous</span></li>
            <li class="page-item"><span class="page-link" id="next_page">Next</span></li>
        </ul>

        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

        <!-- <script src="js/jquery1-3.4.1.min.js"></script> -->

        <script src="js/popper1.min.js"></script>

        <script src="js/bootstrap.min.html"></script>

        <script src="js/metisMenu.js"></script>

        <script src="vendors/count_up/jquery.waypoints.min.js"></script>

        <script src="vendors/chartlist/Chart.min.js"></script>

        <script src="vendors/count_up/jquery.counterup.min.js"></script>

        <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>

        <script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>

        <script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
        <script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
        <script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
        <script src="vendors/datatable/js/buttons.flash.min.js"></script>
        <script src="vendors/datatable/js/jszip.min.js"></script>
        <script src="vendors/datatable/js/pdfmake.min.js"></script>
        <script src="vendors/datatable/js/vfs_fonts.js"></script>
        <script src="vendors/datatable/js/buttons.html5.min.js"></script>
        <script src="vendors/datatable/js/buttons.print.min.js"></script>

        <script src="vendors/datepicker/datepicker.js"></script>
        <script src="vendors/datepicker/datepicker.en.js"></script>
        <script src="vendors/datepicker/datepicker.custom.js"></script>
        <script src="js/chart.min.js"></script>
        <script src="vendors/chartjs/roundedBar.min.js"></script>

        <script src="vendors/progressbar/jquery.barfiller.js"></script>

        <script src="vendors/tagsinput/tagsinput.js"></script>

        <script src="vendors/text_editor/summernote-bs4.js"></script>
        <script src="vendors/am_chart/amcharts.js"></script>

        <script src="vendors/scroll/perfect-scrollbar.min.js"></script>
        <script src="vendors/scroll/scrollable-custom.js"></script>

        <script src="vendors/vectormap-home/vectormap-2.0.2.min.js"></script>
        <script src="vendors/vectormap-home/vectormap-world-mill-en.js"></script>
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
    let name = "<?= $_SESSION['name'] ?>"
    let mail = "<?= $_SESSION['username'] ?>"
    let phone = "<?= $_SESSION['phone'] ?>"
    var start = 0
    var end = 5
    var data1 = []
    var obj1 = {}

    $('#show_profile_name').html(name)
    $('#show_name').html(name)
    $('#show_email').html(mail)
    $('#show_ph_num').html(phone)

    var range_credit_data = document.getElementById("range_credit_data")
    var show_all_data = document.getElementById("show_all_data")
    // var filterd_credit_data = document.getElementById("filterd_credit_data")
    var show_total_wc = document.getElementById("show_total_wc")
    var show_total_ec = document.getElementById("show_total_ec")
    var show_total_dc = document.getElementById("show_total_dc")

    var obj1 = {}

    $(function() {
        var start = moment();
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));

            // Fetch and display data based on the selected date range
            var startDate = start.format('YYYY-MM-DD');
            var endDate = end.format('YYYY-MM-DD');
            console.log(startDate, endDate)

            var settings = {
                "url": "Api/api.php",
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json"
                },
                "data": JSON.stringify({
                    "function": "filter_credit_data_date_range",
                    "start_date": startDate,
                    "end_date": endDate
                }),
            };

            $.ajax(settings).done(function(response) {
                var data = JSON.parse(response);
                var obj = JSON.parse(data);
                // showRangeCreditData(data1);
                show_data(obj)
            });
        }


        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);
    });

    function show_data(obj) {
        obj1 = obj;
        start = 0;
        end = 5;
        pagination()
    }

    function pagination() {
        range_credit_data.innerHTML = "";
        let input = "";
        console.log("obj1::", obj1);
        if (Array.isArray(obj1) && obj1.length > 0) {
            let hasNextPage = false;
            let currentPageStart = start + 1;
            let currentPageEnd = Math.min(start + 5, obj1.length);

            for (let i = start; i < end; i++) {
                if (obj1[i] && obj1[i].date) {
                    range_credit_data.innerHTML += `<tr style="text-align : center;"><td>${formatDate(obj1[i].date)}</td><td>${obj1[i].wc}</td><td>${obj1[i].ec}</td><td>${obj1[i].dc}</td></tr>`;
                    hasNextPage = true;
                } else {
                    hasNextPage = false;
                    break;
                }
            }
            if (!hasNextPage || obj1.length < 5) {
                document.getElementById("next_page").style.display = "none";
            } else {
                document.getElementById("next_page").style.display = "block";
            }
            if (start === 0) {
                document.getElementById("previous_page").style.display = "none";
            } else {
                document.getElementById("previous_page").style.display = "block";
            }
            document.querySelector(".pagenation_text p").innerText = `${currentPageStart}-${currentPageEnd} out of ${obj1.length}`;
        } else {
            range_credit_data.innerHTML = "<tr><td colspan='4'>No data found</td></tr>";
        }
    }



    next_page.addEventListener("click", () => {
        start = start + 5
        end = start + 5
        console.log("inside next: start: ", start)
        console.log("inside next: end: ", end)
        pagination()
    })

    previous_page.addEventListener("click", () => {
        if (start > 0) {
            start = start - 5
            end = end - 5
            console.log("inside pre: start: ", start)
            console.log("inside pre: end: ", end)
        }
        pagination()
    })

    function formatDate(dateString) {
        var date = new Date(dateString);
        var day = date.getDate();
        var monthIndex = date.getMonth();
        var year = date.getFullYear();
        var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
            "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
        ];
        return day + ' ' + monthNames[monthIndex] + ', ' + year;
    }

    function showRangeCreditData(data) {
        var rangeCreditData = document.getElementById("range_credit_data");
        rangeCreditData.innerHTML = "";

        if (Array.isArray(data) && data.length > 0) {
            const paginatedData = data.slice(start, end);

            paginatedData.forEach(function(row) {
                rangeCreditData.innerHTML += `
                <tr style="text-align : center;">
                    <td>${formatDate(row.date)}</td>
                    <td>${row.wc}</td>
                    <td>${row.ec}</td>
                    <td>${row.dc}</td>
                </tr>`;
            });
        } else {
            rangeCreditData.innerHTML = "<tr><td colspan='4'>No data found</td></tr>";
        }
    }

    // window.onload = function() {
    //     getTotCdtDetails();
    // };
</script>