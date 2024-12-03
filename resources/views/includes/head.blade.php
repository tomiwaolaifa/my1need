<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>My1need | Home</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{ asset('assets/images/my1need_logo.svg') }}">

    <!-- jvectormap -->

    <link href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }} " rel="stylesheet">
    <link href="{{ asset('assets/plugins/fullcalendar/vanillaCalendar.css') }} " rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/plugins/morris/morris.css') }} " rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icon.css') }}"  rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}"  rel="stylesheet" type="text/css">


    <style>
        .notification-list .nav-link {
            padding: 0 10px;
            margin: 1rem 2rem;
            border: none;
            background: #FE5430;
            color: #fff;
            border-radius: 2rem;
            line-height: 50px;
            /* width: 30rem; */
        }


        .sidebar-inner {
            background: #070D2D;
        }

        #sidebar-menu {
            background-color: #070D2D;
            padding-top: 0px;
        }

        #sidebar-menu>ul>li>a.active {
            background: #fff;
            color: #FE5430;
        }

        #sidebar-menu>ul>li>a {
            background: #fff;
            color: #FE5430;
            padding: 16px 25px;
            font-size: 16px;
        }

        .logout-btn {
            position: absolute !important;
            bottom: 5rem;
            text-align: center;
            left: 50%;
            transform: translateX(-50%);
            width: 60%;
        }

        .logout-btn a{
            color: #fff !important;
        }

        #sidebar-menu,
        #sidebar-menu ul,
        #sidebar-menu li,
        #sidebar-menu a {
            position: unset;
        }


        .logout-btn a {
            background-color: #FE5430 !important;
            color: white;
            border: none;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            padding: 13px 25px !important;
            font-size: 16px;
            cursor: pointer;
            border-radius: 10px;
        }

        .logout-btn a:hover {
            background-color: #FE5430 !important;
            color: white !important;
        }

        .left .topbar-left {
            height: 25%;
        }

        .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .logo-large {
            height: unset;
        }

        .container-fluid {
            padding: 0px 30px;
        }

        .container-fluid .total-data {
            gap: 3rem;
        }

        .total-data .card-text {
            color: #070D2D;
            font-weight: 450;
            font-size: 15px;
        }


        .total-data .card-title {
            color: #FE5430;
        }



        #sidebar-menu>ul>li>a>i {
            color: #FE5430;
        }


        #sidebar-menu>ul>li>a.active i {
            color: #FE5430;
        }


        .nav-tabs {
            display: inline-block !important;
            border-bottom: none;
        }

        .nav-tabs .nav-item {
            margin-right: 3rem;
        }

        .nav-tabs .nav-item a {
            color: #FE543080 !important;
            font-size: 15px;
            font-weight: 700;
            background: none !important;
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            border: none !important;
            border-bottom: solid red !important;
            color: #FE5430 !important;
            border-radius: 0 !important;
        }

        .nav-tabs .nav-link {
            border: none;
        }

        .tabs-table {
            background: #070D2D;
            color: #fff;
        }

        .tabs-table th {
            padding: .75rem 1.2rem;
        }

        .table>tbody>tr>td,
        .table>tfoot>tr>td,
        .table>thead>tr>td {
            padding: 1.75rem 1.2rem;
            border: none;
            font-weight: 450;
        }

        .tabs-table i {
            margin-left: 3px;
            margin-right: 10px;
        }

        .card-body-posts .posts-country {
            color: #848383;
            font-weight: 450;
            /* clear: both; */
        }

        .card-body-posts h4 {
            color: #070D2D;
        }

        .card-body-posts .posts-solution {
            color: #FE5430;
            font-weight: 450;
        }

        .row-posts .card {
            margin-bottom: 30px;
            cursor: pointer;
        }

        .posts-solution-number {
            color: #070D2D;
            clear: both;
        }

        .user-need-details {
            display: flex;
            justify-content: space-between;
        }

        .user-need-detail {
            flex: 1;
            margin-right: 20px;
        }

        .modal-dialog {
            max-width: 650px;
        }

        .need-title {
            font-size: 25px;
        }

        .card-img-top{
            height: 150px; 
            object-fit: cover;
        }

    </style>

</head>