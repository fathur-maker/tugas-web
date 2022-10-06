<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: pages-login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Focus Admin: Creative Admin Dashboard</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="css/lib/jsgrid/jsgrid-theme.min.css" rel="stylesheet" />
    <link href="css/lib/jsgrid/jsgrid.min.css" type="text/css" rel="stylesheet" />
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/lib/weather-icons.css" rel="stylesheet" />
    <link href="css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> 
</head>

<body class="pace-done">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano has-scrollbar">
            <div class="nano-content active" style="right: -17px;" tabindex="0">
                <div class="logo"><a href="index.html">
                        <!-- <img src="images/logo.png" alt="" /> --><span>Focus</span>
                    </a></div>
                <ul class="d-block">
                    <li class="label">Features</li>
                    <li class="active open"><a class="sidebar-sub-toggle"><i class="ti-layout-grid4-alt"></i> Table <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul class="d-block" style="display: none;">
                            <li class="active"><a href="table-jsgrid.html" class="active">Editable </a></li>
                        </ul>
                    </li>
                    <li><a href="logout.php"><i class="ti-close" h></i> Logout</a></li>
                </ul>
            </div>
            <div class="nano-pane" style="display: none;">
                <div class="nano-slider" style="height: 590px; transform: translate(0px, 0px);"></div>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->


    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle is-active">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Recent Notifications</span>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="images/avatar/3.jpg" alt="">
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">5 members joined today </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="images/avatar/3.jpg" alt="">
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mariam</div>
                                                        <div class="notification-text">likes a photo of you</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="images/avatar/3.jpg" alt="">
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Tasnim</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="images/avatar/3.jpg" alt="">
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-email"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">2 New Messages</span>
                                        <a href="email.html">
                                            <i class="ti-pencil-alt pull-right"></i>
                                        </a>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="images/avatar/1.jpg" alt="">
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="images/avatar/2.jpg" alt="">
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="images/avatar/3.jpg" alt="">
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="images/avatar/2.jpg" alt="">
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">John
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-user"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-email"></i>
                                                    <span>Inbox</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-settings"></i>
                                                    <span>Setting</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-lock"></i>
                                                    <span>Lock Screen</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-power-off"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Table-Jsgrid</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="jsgrid-table-panel">
                                    <div id="jsGrid" class="jsgrid" style="position: relative; height: 100%; width: 100%;">
                                        <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                            <table class="jsgrid-table">
                                                <tbody>
                                                    <tr class="jsgrid-header-row">
                                                        <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Name</th>
                                                        <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable" style="width: 50px;">Age</th>
                                                        <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 200px;">Address</th>
                                                        <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 100px;">Country</th>
                                                        <th class="jsgrid-header-cell jsgrid-align-center" style="width: 100px;">Is Married</th>
                                                        <th class="jsgrid-header-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><span class="jsgrid-button jsgrid-mode-button jsgrid-insert-mode-button ti-plus" type="button" title=""></span></th>
                                                    </tr>
                                                    <tr class="jsgrid-filter-row" style="display: none;">
                                                        <td class="jsgrid-cell" style="width: 150px;"><input type="text"></td>
                                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;"><input type="number"></td>
                                                        <td class="jsgrid-cell" style="width: 200px;"><input type="text"></td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><select>
                                                                <option value="0"></option>
                                                                <option value="1">United States</option>
                                                                <option value="2">Canada</option>
                                                                <option value="3">United Kingdom</option>
                                                                <option value="4">France</option>
                                                                <option value="5">Brazil</option>
                                                                <option value="6">China</option>
                                                                <option value="7">Russia</option>
                                                            </select></td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" readonly=""></td>
                                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><span class="jsgrid-button jsgrid-search-button ti-search" type="button" title="Search"></span><span class="jsgrid-button jsgrid-clear-filter-button" type="button" title="Clear filter"></span></td>
                                                    </tr>
                                                    <tr class="jsgrid-insert-row" style="display: none;">
                                                        <td class="jsgrid-cell" style="width: 150px;"><input type="text"></td>
                                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;"><input type="number"></td>
                                                        <td class="jsgrid-cell" style="width: 200px;"><input type="text"></td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><select>
                                                                <option value="0"></option>
                                                                <option value="1">United States</option>
                                                                <option value="2">Canada</option>
                                                                <option value="3">United Kingdom</option>
                                                                <option value="4">France</option>
                                                                <option value="5">Brazil</option>
                                                                <option value="6">China</option>
                                                                <option value="7">Russia</option>
                                                            </select></td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"></td>
                                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><span class="jsgrid-button jsgrid-insert-button" type="button" title="Insert"></span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="jsgrid-grid-body" style="height: 873px;">
                                            <table class="jsgrid-table">
                                                <tbody>
                                                    <tr class="jsgrid-row">
                                                        <td class="jsgrid-cell" style="width: 150px;">Otto Clay</td>
                                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">61</td>
                                                        <td class="jsgrid-cell" style="width: 200px;">Ap #897-1459 Quam Avenue</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">China</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><span class="jsgrid-button jsgrid-edit-button ti-pencil" type="button" title="Edit"></span><span class="jsgrid-button jsgrid-delete-button ti-trash" type="button" title="Delete"></span></td>
                                                    </tr>
                                                    <tr class="jsgrid-alt-row">
                                                        <td class="jsgrid-cell" style="width: 150px;">Connor Johnston</td>
                                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">73</td>
                                                        <td class="jsgrid-cell" style="width: 200px;">Ap #370-4647 Dis Av.</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Russia</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><span class="jsgrid-button jsgrid-edit-button ti-pencil" type="button" title="Edit"></span><span class="jsgrid-button jsgrid-delete-button ti-trash" type="button" title="Delete"></span></td>
                                                    </tr>
                                                    <tr class="jsgrid-row">
                                                        <td class="jsgrid-cell" style="width: 150px;">Lacey Hess</td>
                                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">29</td>
                                                        <td class="jsgrid-cell" style="width: 200px;">Ap #365-8835 Integer St.</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Russia</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><span class="jsgrid-button jsgrid-edit-button ti-pencil" type="button" title="Edit"></span><span class="jsgrid-button jsgrid-delete-button ti-trash" type="button" title="Delete"></span></td>
                                                    </tr>
                                                    <tr class="jsgrid-alt-row">
                                                        <td class="jsgrid-cell" style="width: 150px;">Timothy Henson</td>
                                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">78</td>
                                                        <td class="jsgrid-cell" style="width: 200px;">911-5143 Luctus Ave</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United States</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><span class="jsgrid-button jsgrid-edit-button ti-pencil" type="button" title="Edit"></span><span class="jsgrid-button jsgrid-delete-button ti-trash" type="button" title="Delete"></span></td>
                                                    </tr>
                                                    <tr class="jsgrid-row">
                                                        <td class="jsgrid-cell" style="width: 150px;">Ramona Benton</td>
                                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">43</td>
                                                        <td class="jsgrid-cell" style="width: 200px;">Ap #614-689 Vehicula Street</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Brazil</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><span class="jsgrid-button jsgrid-edit-button ti-pencil" type="button" title="Edit"></span><span class="jsgrid-button jsgrid-delete-button ti-trash" type="button" title="Delete"></span></td>
                                                    </tr>
                                                    <tr class="jsgrid-alt-row">
                                                        <td class="jsgrid-cell" style="width: 150px;">Ezra Tillman</td>
                                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">51</td>
                                                        <td class="jsgrid-cell" style="width: 200px;">P.O. Box 738, 7583 Quisque St.</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United States</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><span class="jsgrid-button jsgrid-edit-button ti-pencil" type="button" title="Edit"></span><span class="jsgrid-button jsgrid-delete-button ti-trash" type="button" title="Delete"></span></td>
                                                    </tr>
                                                    <tr class="jsgrid-row">
                                                        <td class="jsgrid-cell" style="width: 150px;">Dante Carter</td>
                                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">59</td>
                                                        <td class="jsgrid-cell" style="width: 200px;">P.O. Box 976, 6316 Lorem, St.</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United States</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><span class="jsgrid-button jsgrid-edit-button ti-pencil" type="button" title="Edit"></span><span class="jsgrid-button jsgrid-delete-button ti-trash" type="button" title="Delete"></span></td>
                                                    </tr>
                                                    <tr class="jsgrid-alt-row">
                                                        <td class="jsgrid-cell" style="width: 150px;">Christopher Mcclure</td>
                                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">58</td>
                                                        <td class="jsgrid-cell" style="width: 200px;">847-4303 Dictum Av.</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United States</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><span class="jsgrid-button jsgrid-edit-button ti-pencil" type="button" title="Edit"></span><span class="jsgrid-button jsgrid-delete-button ti-trash" type="button" title="Delete"></span></td>
                                                    </tr>
                                                    <tr class="jsgrid-row">
                                                        <td class="jsgrid-cell" style="width: 150px;">Ruby Rocha</td>
                                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">62</td>
                                                        <td class="jsgrid-cell" style="width: 200px;">5212 Sagittis Ave</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Canada</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><span class="jsgrid-button jsgrid-edit-button ti-pencil" type="button" title="Edit"></span><span class="jsgrid-button jsgrid-delete-button ti-trash" type="button" title="Delete"></span></td>
                                                    </tr>
                                                    <tr class="jsgrid-alt-row">
                                                        <td class="jsgrid-cell" style="width: 150px;">Imelda Hardin</td>
                                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">39</td>
                                                        <td class="jsgrid-cell" style="width: 200px;">719-7009 Auctor Av.</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Brazil</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><span class="jsgrid-button jsgrid-edit-button ti-pencil" type="button" title="Edit"></span><span class="jsgrid-button jsgrid-delete-button ti-trash" type="button" title="Delete"></span></td>
                                                    </tr>
                                                    <tr class="jsgrid-row">
                                                        <td class="jsgrid-cell" style="width: 150px;">Jonah Johns</td>
                                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">28</td>
                                                        <td class="jsgrid-cell" style="width: 200px;">P.O. Box 939, 9310 A Ave</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Brazil</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><span class="jsgrid-button jsgrid-edit-button ti-pencil" type="button" title="Edit"></span><span class="jsgrid-button jsgrid-delete-button ti-trash" type="button" title="Delete"></span></td>
                                                    </tr>
                                                    <tr class="jsgrid-alt-row">
                                                        <td class="jsgrid-cell" style="width: 150px;">Herman Rosa</td>
                                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">49</td>
                                                        <td class="jsgrid-cell" style="width: 200px;">718-7162 Molestie Av.</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Russia</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><span class="jsgrid-button jsgrid-edit-button ti-pencil" type="button" title="Edit"></span><span class="jsgrid-button jsgrid-delete-button ti-trash" type="button" title="Delete"></span></td>
                                                    </tr>
                                                    <tr class="jsgrid-row">
                                                        <td class="jsgrid-cell" style="width: 150px;">Arthur Gay</td>
                                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">20</td>
                                                        <td class="jsgrid-cell" style="width: 200px;">5497 Neque Street</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Russia</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><span class="jsgrid-button jsgrid-edit-button ti-pencil" type="button" title="Edit"></span><span class="jsgrid-button jsgrid-delete-button ti-trash" type="button" title="Delete"></span></td>
                                                    </tr>
                                                    <tr class="jsgrid-alt-row">
                                                        <td class="jsgrid-cell" style="width: 150px;">Xena Wilkerson</td>
                                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">63</td>
                                                        <td class="jsgrid-cell" style="width: 200px;">Ap #303-6974 Proin Street</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United States</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><span class="jsgrid-button jsgrid-edit-button ti-pencil" type="button" title="Edit"></span><span class="jsgrid-button jsgrid-delete-button ti-trash" type="button" title="Delete"></span></td>
                                                    </tr>
                                                    <tr class="jsgrid-row">
                                                        <td class="jsgrid-cell" style="width: 150px;">Lilah Atkins</td>
                                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">33</td>
                                                        <td class="jsgrid-cell" style="width: 200px;">622-8602 Gravida Ave</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Brazil</td>
                                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                                        <td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><span class="jsgrid-button jsgrid-edit-button ti-pencil" type="button" title="Edit"></span><span class="jsgrid-button jsgrid-delete-button ti-trash" type="button" title="Delete"></span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="jsgrid-load-shader" style="display: none; position: absolute; inset: 0px; z-index: 1000;"></div>
                                        <div class="jsgrid-load-panel" style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please, wait...</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>











    <!-- jquery vendor -->
    <script src="js/lib/jquery.min.js"></script>
    <script src="js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="js/lib/menubar/sidebar.js"></script>
    <script src="js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <!-- bootstrap -->



    <!-- JS Grid Scripts Start-->
    <script src="js/lib/jsgrid/db.js"></script>
    <script src="js/lib/jsgrid/jsgrid.core.js"></script>
    <script src="js/lib/jsgrid/jsgrid.load-indicator.js"></script>
    <script src="js/lib/jsgrid/jsgrid.load-strategies.js"></script>
    <script src="js/lib/jsgrid/jsgrid.sort-strategies.js"></script>
    <script src="js/lib/jsgrid/jsgrid.field.js"></script>
    <script src="js/lib/jsgrid/fields/jsgrid.field.text.js"></script>
    <script src="js/lib/jsgrid/fields/jsgrid.field.number.js"></script>
    <script src="js/lib/jsgrid/fields/jsgrid.field.select.js"></script>
    <script src="js/lib/jsgrid/fields/jsgrid.field.checkbox.js"></script>
    <script src="js/lib/jsgrid/fields/jsgrid.field.control.js"></script>
    <script src="js/lib/jsgrid/jsgrid-init.js"></script>
    <!-- JS Grid Scripts End-->

    <script src="js/lib/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- scripit init-->







</body>

</html>