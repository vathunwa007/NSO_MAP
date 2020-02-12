<?php
$page = (!isset($_GET['pageNum'])) ? 0 : $_GET['pageNum'];


switch ($page) {
    case 1:
        $activeP1 = 'active';
        $showdorpdowP1 = 'show';
        break;
    case 2:
        $activeP2 = 'active';;
        $showdorpdowP2 = 'show';
        break;
    case 3:
        $activeP3_1 = 'active';;
        $showdorpdowP3 = 'show';
        break;
    case 4:
        $activeP3_2 = 'active';;
        $showdorpdowP3 = 'show';
        break;
    case 5:
        $activeP3_3 = 'active';
        $showdorpdowP3 = 'show';
        break;
    case 6:
        $activeP4 = 'active';
        $showdorpdowP4 = 'show';
        break;
    case 7:
        $activeP5 = 'active';
        $showdorpdowP5 = 'show';
        break;
    case 8:
        $activeP6_1 = 'active';
        $showdorpdowP6 = 'show';
        break;
    case 9:
        $activeP6_2 = 'active';
        $showdorpdowP6 = 'show';
        break;
    case 10:
        $activeP7 = 'active';
        $showdorpdowP7 = 'show';
        break;
    case 11:
        $activeP8  = 'active';
        $showdorpdowP8 = 'show';
        break;
}
?>

<!-- Sidebar Main Menu -->

<ul class="sidebar navbar-nav toggled " id="checkclassul">
    <div class="tab d-flex justify-content-around" style="height: 50px;">
        <button class="tabmenu active" id="btnmenu1" onclick=""><strong>รายการข้อมูลสถิติ</strong></button>
        <button class="tabmenu" id="btnmenu2" onclick=""><strong>รายการยอดนิยม</strong></button>
        <a class="mt-1 pr-2" id="slideoff" href="#" type="button">
            <i class="fas fa-times fa-1x text-danger"></i>

        </a>

    </div>
    <div class="" id="menu1">
        <div class="tab d-flex justify-content-around ">
            <button class="tablinks active" onclick="openCity(event, 'p1')">รายการข้อมูลสถิติ</button>
            <button class="tablinks" onclick="openCity(event, 'p2')">รายการยอดนิยม</button>
            <button class="tablinks" onclick="openCity(event, 'p3')">รายการตามหน่วยงาน</button>
            <button class="tablinks" onclick="openCity(event, 'p4')">รายการตามประเภทค่าสถิติ</button>
            <button class="tablinks" onclick="openCity(event, 'p5')">ค้นหารายการสถิติ</button>

        </div>
    </div>
    <div class="hide" id="menu2">
        <div class="tab d-flex justify-content-around ">
            <button class="tablinks" onclick="openCity(event, 'p2_1')">menu2</button>
            <button class="tablinks" onclick="openCity(event, 'p2_2')">menu2</button>
            <button class="tablinks" onclick="openCity(event, 'p2_3')">menu2</button>
            <button class="tablinks" onclick="openCity(event, 'p2_4')">menu2</button>
            <button class="tablinks" onclick="openCity(event, 'p2_5')">menu2</button>

        </div>
    </div>

    <!-- Tab content -->
    <div id="p1" class="tabcontent" style="display: block;">
        <div id="pagemenu1"></div>

    </div>

    <div id="p2" class="tabcontent">
        <div id="pagemenu2"></div>
    </div>

    <div id="p3" class="tabcontent">
        <div id="pagemenu3"></div>
    </div>
    <div id="p4" class="tabcontent">
        <div id="pagemenu4"></div>
    </div>
    <div id="p5" class="tabcontent">
        <div id="pagemenu5"></div>
    </div>


</ul>