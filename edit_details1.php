<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Edit Student Details</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
  <style type="text/css">
      
      .font-robo {
        font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
      }

      .font-poppins {
        font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
      }

      .row {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
      }

      .row-space {
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -moz-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
      }

      .col-2 {
        width: -webkit-calc((100% - 30px) / 2);
        width: -moz-calc((100% - 30px) / 2);
        width: calc((100% - 30px) / 2);
      }

      @media (max-width: 767px) {
        .col-2 {
          width: 100%;
        }
      }
      .col-1 {
        width: -webkit-calc((70% - 30px));
        width: -moz-calc((70% - 30px));
        width: calc((70% - 30px));
      }

      @media (max-width: 50%) {
        .col-1 {
          width: 100%;
        }
      }

      /* ==========================================================================
         #BOX-SIZING
         ========================================================================== */
      /**
       * More sensible default box-sizing:
       * css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice
       */
      html {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
      }

      * {
        padding: 0;
        margin: 0;
      }

      *, *:before, *:after {
        -webkit-box-sizing: inherit;
        -moz-box-sizing: inherit;
        box-sizing: inherit;
      }

      /* ==========================================================================
         #RESET
         ========================================================================== */
      /**
       * A very simple reset that sits on top of Normalize.css.
       */
      body,
      h1, h2, h3, h4, h5, h6,
      blockquote, p, pre,
      dl, dd, ol, ul,
      figure,
      hr,
      fieldset, legend {
        margin: 0;
        padding: 0;
      }

      /**
       * Remove trailing margins from nested lists.
       */
      li > ol,
      li > ul {
        margin-bottom: 0;
      }

      /**
       * Remove default table spacing.
       */
      table {
        border-collapse: collapse;
        border-spacing: 0;
      }

      /**
       * 1. Reset Chrome and Firefox behaviour which sets a `min-width: min-content;`
       *    on fieldsets.
       */
      fieldset {
        min-width: 0;
        /* [1] */
        border: 0;
      }

      button {
        outline: none;
        background: none;
        border: none;
      }

      /* ==========================================================================
         #PAGE WRAPPER
         ========================================================================== */
      .page-wrapper {
        min-height: 100vh;
      }

      body {
        font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
        font-weight: 400;
        font-size: 14px;
      }

      h1, h2, h3, h4, h5, h6 {
        font-weight: 400;
      }

      h1 {
        font-size: 36px;
      }

      h2 {
        font-size: 30px;
      }

      h3 {
        font-size: 24px;
      }

      h4 {
        font-size: 18px;
      }

      h5 {
        font-size: 15px;
      }

      h6 {
        font-size: 13px;
      }

      /* ==========================================================================
         #BACKGROUND
         ========================================================================== */
      .bg-blue {
        background: #2c6ed5;
      }

      .bg-red {
        background: #fa4251;
      }

      .bg-gra-01 {
        background: linear-gradient(rgb(116, 194, 217),rgb(49, 182, 37));
        /*background: -webkit-linear-gradient(bottom, #fbc2eb 0%, #a18cd1 100%);
        background: -moz-linear-gradient(bottom, #fbc2eb 0%, #a18cd1 100%);
        background: -o-linear-gradient(bottom, #fbc2eb 0%, #a18cd1 100%);
        background: linear-gradient(to top, #fbc2eb 0%, #a18cd1 100%);*/
      }

      .bg-gra-02 {
        background: linear-gradient(to top, rgb(116, 194, 217),rgb(49, 182, 37));
        /*background: -webkit-linear-gradient(bottom left, #fc2c77 0%, #6c4079 100%);
        background: -moz-linear-gradient(bottom left, #fc2c77 0%, #6c4079 100%);
        background: -o-linear-gradient(bottom left, #fc2c77 0%, #6c4079 100%);
        background: linear-gradient(to top right, #fc2c77 0%, #6c4079 100%);*/
      }

      /* ==========================================================================
         #SPACING
         ========================================================================== */
      .p-t-100 {
        padding-top: 100px;
      }

      .p-t-130 {
        padding-top: 130px;
      }

      .p-t-180 {
        padding-top: 180px;
      }

      .p-t-20 {
        padding-top: 20px;
      }

      .p-t-15 {
        padding-top: 15px;
      }

      .p-t-10 {
        padding-top: 10px;
      }

      .p-t-30 {
        padding-top: 30px;
      }

      .p-b-100 {
        padding-bottom: 100px;
      }

      .m-r-45 {
        margin-right: 45px;
      }

      /* ==========================================================================
         #WRAPPER
         ========================================================================== */
      .wrapper {
        margin: 0 auto;
      }

      .wrapper--w960 {
        min-width: 90%;
        max-width: 960px;
      }

      .wrapper--w780 {
        min-width: 90%;
        max-width: 780px;
      }

      .wrapper--w680 {
        min-width: 90%;
        max-width: 680px;
      }

      /* ==========================================================================
         #BUTTON
         ========================================================================== */
      .btn {
        display: inline-block;
        line-height: 50px;
        padding: 0 50px;
        -webkit-transition: all 0.4s ease;
        -o-transition: all 0.4s ease;
        -moz-transition: all 0.4s ease;
        transition: all 0.4s ease;
        cursor: pointer;
        font-size: 18px;
        color: #fff;
        font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
      }

      .btn--radius {
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
      }

      .btn--radius-2 {
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
      }

      .btn--pill {
        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        border-radius: 20px;
      }

      .btn--green {
        background: #57b846;
      }

      .btn--green:hover {
        background: #4dae3c;
      }

      .btn--blue {
        background: #4272d7;
      }

      .btn--blue:hover {
        background: #3868cd;
      }

      /* ==========================================================================
         #DATE PICKER
         ========================================================================== */
      td.active {
        background-color: #2c6ed5;
      }

      input[type="date" i] {
        padding: 14px;
      }

      .table-condensed td, .table-condensed th {
        font-size: 14px;
        font-family: "Roboto", "Arial", "Helvetica Neue", sans-serif;
        font-weight: 400;
      }

      .daterangepicker td {
        width: 40px;
        height: 30px;
      }

      .daterangepicker {
        border: none;
        -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        display: none;
        border: 1px solid #e0e0e0;
        margin-top: 5px;
      }

      .daterangepicker::after, .daterangepicker::before {
        display: none;
      }

      .daterangepicker thead tr th {
        padding: 10px 0;
      }

      .daterangepicker .table-condensed th select {
        border: 1px solid #ccc;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        font-size: 14px;
        padding: 5px;
        outline: none;
      }

      /* ==========================================================================
         #FORM
         ========================================================================== */
      input {
        outline: none;
        margin: 0;
        border: none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        width: 100%;
        font-size: 14px;
        font-family: inherit;
      }

      .input--style-4 {
        line-height: 50px;
        background: #fafafa;
        -webkit-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
        -moz-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
        box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        padding: 0 20px;
        font-size: 16px;
        color: #666;
        -webkit-transition: all 0.4s ease;
        -o-transition: all 0.4s ease;
        -moz-transition: all 0.4s ease;
        transition: all 0.4s ease;
      }

      .input--style-4::-webkit-input-placeholder {
        /* WebKit, Blink, Edge */
        color: #666;
      }

      .input--style-4:-moz-placeholder {
        /* Mozilla Firefox 4 to 18 */
        color: #666;
        opacity: 1;
      }

      .input--style-4::-moz-placeholder {
        /* Mozilla Firefox 19+ */
        color: #666;
        opacity: 1;
      }

      .input--style-4:-ms-input-placeholder {
        /* Internet Explorer 10-11 */
        color: #666;
      }

      .input--style-4:-ms-input-placeholder {
        /* Microsoft Edge */
        color: #666;
      }

      .label {
        font-size: 16px;
        color: #555;
        text-transform: capitalize;
        display: block;
        margin-bottom: 5px;
      }

      .radio-container {
        display: inline-block;
        position: relative;
        padding-left: 30px;
        cursor: pointer;
        font-size: 16px;
        color: #666;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .radio-container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
      }

      .radio-container input:checked ~ .checkmark {
        background-color: #e5e5e5;
      }

      .radio-container input:checked ~ .checkmark:after {
        display: block;
      }

      .radio-container .checkmark:after {
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        width: 12px;
        height: 12px;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        background: #57b846;
      }

      .checkmark {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        left: 0;
        height: 20px;
        width: 20px;
        background-color: #e5e5e5;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        -webkit-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
        -moz-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
        box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
      }

      .checkmark:after {
        content: "";
        position: absolute;
        display: none;
      }

      .input-group {
        position: relative;
        margin-bottom: 22px;
      }

      .input-group-icon {
        position: relative;
      }

      .input-icon {
        position: absolute;
        font-size: 18px;
        color: #999;
        right: 18px;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        cursor: pointer;
      }

      /* ==========================================================================
         #SELECT2
         ========================================================================== */
      .select--no-search .select2-search {
        display: none !important;
      }

      .rs-select2 .select2-container {
        width: 100% !important;
        outline: none;
        background: #fafafa;
        -webkit-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
        -moz-box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
        box-shadow: inset 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
      }

      .rs-select2 .select2-container .select2-selection--single {
        outline: none;
        border: none;
        height: 50px;
        background: transparent;
      }

      .rs-select2 .select2-container .select2-selection--single .select2-selection__rendered {
        line-height: 50px;
        padding-left: 0;
        color: #555;
        font-size: 16px;
        font-family: inherit;
        padding-left: 22px;
        padding-right: 50px;
      }

      .rs-select2 .select2-container .select2-selection--single .select2-selection__arrow {
        height: 50px;
        right: 20px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -moz-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -moz-box-align: center;
        -ms-flex-align: center;
        align-items: center;
      }

      .rs-select2 .select2-container .select2-selection--single .select2-selection__arrow b {
        display: none;
      }

      .rs-select2 .select2-container .select2-selection--single .select2-selection__arrow:after {
        font-family: "Material-Design-Iconic-Font";
        content: '\f2f9';
        font-size: 24px;
        color: #999;
        -webkit-transition: all 0.4s ease;
        -o-transition: all 0.4s ease;
        -moz-transition: all 0.4s ease;
        transition: all 0.4s ease;
      }

      .rs-select2 .select2-container.select2-container--open .select2-selection--single .select2-selection__arrow::after {
        -webkit-transform: rotate(-180deg);
        -moz-transform: rotate(-180deg);
        -ms-transform: rotate(-180deg);
        -o-transform: rotate(-180deg);
        transform: rotate(-180deg);
      }

      .select2-container--open .select2-dropdown--below {
        border: none;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        border: 1px solid #e0e0e0;
        margin-top: 5px;
        overflow: hidden;
      }

      .select2-container--default .select2-results__option {
        padding-left: 22px;
      }

      /* ==========================================================================
         #TITLE
         ========================================================================== */
      .title {
        font-size: 24px;
        color: #525252;
        font-weight: 400;
        margin-bottom: 40px;
      }

      /* ==========================================================================
         #CARD
         ========================================================================== */
      .card {
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        background: #fff;
      }

      .card-4 {
        background: #fff;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
      }

      .card-4 .card-body {
        padding: 57px 65px;
        padding-bottom: 65px;
      }

      @media (max-width: 767px) {
        .card-4 .card-body {
          padding: 50px 40px;
        }
      }

    </style>
</head>

<body>
                        <?php
                        include 'dbConfig.php';
                        include 'connect.php';
                        if(isset($_GET['id']))
                        {
                        $regno=$_GET['id'];
                        $query="SELECT * FROM auto1 WHERE regno='$regno'";
                        $query_run=mysqli_query($conn,$query);
                        $check=mysqli_num_rows($query_run);

                    if($check>0){
                        while($row=mysqli_fetch_array($query_run))
                        {
                            ?>
                            <form action="update_edit.php?sem=<?php echo $row['sem']; ?>" method="POST">
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h1>Edit Details</h1>
                    <div class="row row-space">
                            <div class="col-1">
                                <div class="input-group">
                                  <input type="hidden" name="prik" value="<?php echo $regno;?>">
                                    <label class="label">Name</label>
                                    <input class="input--style-4" type="text" name="reg-info-1"value="<?php echo $row['name'];?>">
                                </div>
                            </div>
                          </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                  <input type="hidden" name="prik" value="<?php echo $regno;?>">
                                    <label class="label">Batch</label>
                                    <input class="input--style-4" type="text" name="reg-info-12"value="<?php echo $row['batch'];?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Course</label>
                                    <input class="input--style-4" type="text" name="reg-info-2"value="<?php echo $row['course'];?>">
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Sem</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="reg-info-3"value="<?php echo $row['sem'];?>">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" name="gender" value="Male">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender" value="Female">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Registered number:</label>
                                    <input class="input--style-4" type="disabled" name="reg-info-4" value="<?php echo $row['regno'];?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">E-mail:</label>
                                    <input class="input--style-4" name="reg-info-5" value="<?php echo $row['email'];?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Father Name:</label>
                                    <input class="input--style-4" type="disabled" name="fname" value="<?php echo $row['father'];?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Mother Name:</label>
                                    <input class="input--style-4" name="mname" value="<?php echo $row['mother'];?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone:</label>
                                    <input class="input--style-4" type="disabled" name="reg-info-6"value="<?php echo $row['phone_no'];?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Parent's mobile Number:</label>
                                    <input class="input--style-4"name="reg-info-7"value="<?php echo $row['parentphone1'];?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Alt Parent's Number:</label>
                                    <input class="input--style-4" name="reg-info-8"value="<?php echo $row['parentphone2'];?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Permanent address:</label>
                                    <input class="input--style-4" name="reg-info-9"value="<?php echo $row['address'];?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Residing Address:</label>
                                    <input class="input--style-4" name="reg-info-10"value="<?php echo $row['resaddress'];?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date of birth</label>
                                    <input class="input--style-4" type="date" name="reg-info-11"value="<?php echo $row['dob'];?>">
                                </div>
                            </div>
                        </div>
                        <h1><?php echo strtoupper($row['prevcourse'].' marks'); ?></h1>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"><?php echo $row['course1']; ?></label>
                                    <input class="input--style-4" name="gen-sub1"value="<?php echo $row['sub1'];?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"><?php echo $row['course2']; ?></label>
                                    <input class="input--style-4" name="gen-sub2"value="<?php echo $row['sub2'];?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"><?php echo $row['course3']; ?></label>
                                    <input class="input--style-4" name="gen-sub3"value="<?php echo $row['sub3'];?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"><?php echo $row['course4']; ?></label>
                                    <input class="input--style-4" name="gen-sub4"value="<?php echo $row['sub4'];?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"><?php echo $row['course5']; ?></label>
                                    <input class="input--style-4" name="gen-sub5"value="<?php echo $row['sub5'];?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"><?php echo $row['course6']; ?></label>
                                    <input class="input--style-4" name="gen-sub6"value="<?php echo $row['sub6'];?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"><?php echo $row['course7']; ?></label>
                                    <input class="input--style-4" name="gen-sub7"value="<?php echo $row['sub7'];?>">
                                </div>
                            </div>
                        </div>
                        
                            <?php
                              }
                              }
                              }
                            ?>
                          <?php
                          for ($j=1; $j<=3; $j++)
                           { 
                            $semi=$_GET['sem'];
                          if($uniq=$regno.$j."IAT".$semi){
                          $query2="SELECT * FROM auto_inter WHERE regnum='$regno' AND intruniq='$uniq'";
                          $query_run2=mysqli_query($conn,$query2);
                          $check2=mysqli_num_rows($query_run2);
                          if($check2>0)
                          {
                          while($row2=mysqli_fetch_array($query_run2))
                          {
                          
                            ?>
                            <h1>Internals-<?php echo $j; ?></h1>
                            <?php 
                              $subj="subj";
                              $marksub="marksub";
                              for( $i=1; $i<6; $i++)
                              {
                                if($row2['marksub'.$i]!=0)
                                {
                            ?>
                            <div class="row row-space">
                            <div class="col-1">
                                <div class="input-group">
                                    <label class="label"><?php echo $row2['subj'.$i];?>
                                      <input type="hidden" name="prik" value="<?php echo $regno;?>">
                                    </label>
                                    <input class="input--style-4" type="text" name="<?php echo $j; ?>int<?php echo $i ?>" value="<?php echo $row2['marksub'.$i];?>">
                                </div>
                            </div>
                        </div>
                                <?php 
                               } 
                             }
                             ?>
                             <div class="row row-space">
                            <div class="col-1">
                                <div class="input-group">
                                    <label class="label">Attendance:
                                      <input class="input--style-4" type="text" name="attend" value="<?php echo $row2['attendance'];?>">
                                    </label>
                                </div>
                            </div>
                        </div>
                             <?php
                             }
                           }
                         }
                           }
                           for ($j=1; $j<=2; $j++)
                           { 
                          if($uniq=$regno.$j."IAT".$semi){
                          $query2="SELECT * FROM auto_inter WHERE regnum='$regno' AND intruniq='$uniq'";
                          $query_run2=mysqli_query($conn,$query2);
                          $check2=mysqli_num_rows($query_run2);
                          if($check2>0)
                          {
                          while($row2=mysqli_fetch_array($query_run2))
                          {
                          ?>
                          <h1>Lab Internals-<?php echo $j; ?></h1>
                            <?php 
                              $lab="lab";
                              $marklab="marklab";
                              for( $i=1; $i<4; $i++)
                              {
                                if($row2['marklab'.$i]!=0)
                                {
                            ?>
                            <div class="row row-space">
                            <div class="col-1">
                                <div class="input-group">
                                    <label class="label"><?php echo $row2['lab'.$i];?>
                                      <input type="hidden" name="prik" value="<?php echo $regno;?>">
                                    </label>
                                    <input class="input--style-4" type="text" name="<?php echo $j; ?>labia<?php echo $i ?>" value="<?php echo $row2['marklab'.$i];?>">
                                </div>
                            </div>
                        </div>
                                <?php 
                               } 
                             }
                             }
                           }
                         }
                           }
                           ?>
                        
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Update</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</form>
    <?php include'editcss.php'; ?>
</body>
</html>
