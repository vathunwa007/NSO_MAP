<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php include 'head.php'; ?>


  <style>
    .map {
      height: 800px;
      width: 100%;
      margin: 0;
      padding: 0;
      position: relative;

    }

    .ol-zoom {
      top: 34em;
      right: .5em;
      left: auto;
    }

    .rotate-north {
      top: 56em;
      right: .5em;
    }

    .customoption {
      position: absolute;
      top: 26em;
      right: .5em;
      width: 50px;
      background-color: rgba(255, 255, 255, .4);
      border-radius: 4px;
      padding: 2px;
      text-align: center;
    }

    .menuoption {
      position: absolute;
      top: 33em;
      right: .5em;
      width: 50px;
      background-color: rgba(255, 255, 255, .4);
      border-radius: 4px;
      padding: 2px;
      text-align: center;
    }

    .menuoption img {
      padding-top: 5px;
    }

    .ol-control {
      position: absolute;
      background-color: rgba(255, 255, 255, .4);
      border-radius: 4px;
      padding: 2px;
    }

    .ol-full-screen {
      top: 32em;
      right: .5em;
    }

    #panel {
      background-color: #A6BDCE;
    }

    .ol-toolbal {
      position: absolute;
      background-color: white;
      filter: drop-shadow(0 1px 4px rgba(0, 0, 0, 0.2));
      padding: 6px;
      border-radius: 5px;
      border: -7px solid #cccccc;
      width: 100%;
      top: 18.5em;
      /* left: 650px; */
      z-index: 99;
      height: 52px;
      margin-top: 0.3%;
    }

    .filter {
      position: absolute;
      z-index: 998;
      margin: 4% 1%;
      border-style: outset;
      border-width: 5px;
      border-color: #21d4c3;
    }

    #toolbal button {

      height: 50px;
      overflow: hidden;
      width: 145px;
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 0px 0px;
      transition: 0.3s;
    }
    #toolbal .dropdown-content button {
      background-color: #8dacbbb8;
    }


    #toolbal button:hover {
      background-color: #7EA6B9;

    }

    #menu-top button {
      background-color: #cccccc;
      border: none;
    }

    #menu-top button:hover {
      background-color: #7EA6B9;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #DBEEF4;
      right: 20px;
      top: 5px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      text-align: left;
      z-index: 9999;
    }

    .dropdown-content input {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
    }



    .dropdown-content a:hover {
      background-color: #ddd;

    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .t1 {
      left: 0px;
      top: 45px;
      width: 200px;

    }

    .t3 {
      left: 0px;
      top: 45px;
      width: 300px;

    }

    .t5 {
      left: 0px;
      top: 45px;
      width: 400px;

    }

    .t6 {
      left: 0px;
      top: 45px;
      width: 350px;
    }

    .t7 {
      right: 50px;
      top: 45px;
      width: 350px;
    }
  </style>

</head>

<body>
  <?php include 'navbar.php'; ?>
  <!------------------------------------------------------------------------------------>
  <div class="ml-3 clearfix" id="menu-top" style="display: inline;">
    <nav class="navbar navbar-light mt-n4 mb-n4" style="background-color: #FFF">
      <span class="navbar-text text-dark">
        <h5 class="">รายการข้อมูลสถิติที่เลือก</h5>
        <p class="ml-3">จำนวนเกษตรในเขตปฎิรูปที่ดิน</p>
      </span>
      <span>
        <button><img src="icon/image022.png" alt="" srcset="" width="35"></button>
        <button><img src="icon/image019.png" alt="" srcset="" width="35"></button>
        <button><img src="icon/image020.png" alt="" srcset="" width="35"></button>
        <button><img src="icon/image021.png" alt="" srcset="" width="35"></button>
      </span>
    </nav>
  </div>
  <!------------------------------------------------------------------------------------>
  <div id="wrapper">
    <!-- Sidebar Main Menu -->
    <?php require_once('menu-left.php'); ?>
    <div id="content-wrapper">
      <div class="">
        <!--------------------------------------------------------------------------------------------------------------------------------------------------------->

        <div id="map" class="map mt-n4">
          <div id="filter" class="btn btn-light btn-sm filter"> <i class="fa fa-filter fa-2x" style="color:#42ACA8;" aria-hidden="true"></i></div>
        </div>

        <div id="panel" class="ol-toolbal">
          <div id="toolbal" class="d-flex flex-row d-flex justify-content-end">
            <div class="dropdown">
              <button class="mt-n1" type="button"><strong>เวลา</strong> </button>
              <div class="dropdown-content t1">
                <div class="row">
                  <p class="col-6 text-center"><Strong>ปี พ.ศ. :</Strong></p>
                  <p class="col-6">2554</p>
                  <p class="col-6 text-center"><Strong>คาบเวลา:</Strong></p>
                  <p class="col-6">รายไตรมาส</p>
                  <p class="col-6 text-center"><Strong>ไตรมาสที่:</Strong></p>
                  <p class="col-6">1</p>

                </div>
                <button class="" style="width:100%;">ตกลง</button>
              </div>

            </div>
            <div class="dropdown">
              <button class="mt-n1" type="button"><strong>พื้นที่</strong> </button>
              <div class="dropdown-content t1">
                <div class="row">
                  <p class="col-6 text-center"><Strong>ระดับ :</Strong></p>
                  <p class="col-6">ภาค</p>

                </div>
                <button class="" style="width:100%;">ตกลง</button>
              </div>
            </div>
            <div class="dropdown">
              <button class="mt-n1" type="button"><strong>การจัดจำแนก</strong> </button>
              <div class="dropdown-content t3">
                <div class="row">
                  <p class="col-6 "><input type="checkbox" name="" id=""><Strong>เพศ:</Strong></p>
                  <p class="col-6">ชาย</p>
                  <p class="col-6 "><input type="radio" name="" id=""><Strong>ช่วงอายุแบบที่ 1:</Strong></p>
                  <p class="col-6">5-15 ปี</p>
                  <p class="col-6 "><input type="radio" name="" id=""><Strong>ช่วงอายุแบบที่ 2:</Strong></p>
                  <p class="col-6">15-59 ปี</p>
                  <p class="col-6 "><input type="checkbox"><Strong>การศึกษา :</Strong></p>
                  <p class="col-6">ประถมศึกษา</p>
                  <p class="col-6 "><input type="checkbox"><Strong>อาชีพ :</Strong></p>

                </div>
                <button class="" style="width:100%;">ตกลง</button>
              </div>
            </div>
            <div class="dropdown">
              <button class="mt-n1" type="button"><strong>แหล่งข้อมูล</strong> </button>
              <div class="dropdown-content t1">
                <div class="row">
                  <p class="col-4 text-center"><Strong>กรม :</Strong></p>
                  <p class="col-8">สำนักงานเศรษฐกิจการเกษตร</p>

                </div>
                <button class="" style="width:100%;">ตกลง</button>
              </div>
            </div>
            <div class="dropdown" style="border-right: 2px solid white;">
              <button class="mt-n1" type="button"><strong>อธิบายข้อมูล</strong> </button>
              <div class="dropdown-content t5">
                <div class="row">
                  <p class="col-6 "><Strong>หน่วยงานเจ้าของข้อมูล :</Strong></p>
                  <p class="col-6">สำนักงานเศรษฐกิจการเกษตร</p>
                  <p class="col-6 "><Strong>ความถี่ในการจัดเก็บ:</Strong></p>
                  <p class="col-6">รายปี</p>
                  <p class="col-6 "><Strong>ช่วงเวลาข้อมูล:</Strong></p>
                  <p class="col-6">2555-2559</p>
                  <p class="col-6 "><Strong>วิธีการได้มา:</Strong></p>
                  <p class="col-6">สำรวจ</p>
                  <p class="col-6 "><Strong>แหล่งที่มา:</Strong></p>
                  <p class="col-6">ศูนย์สารสนเทศยุทธศาสตร์ภาครัฐ</p>
                  <p class="col-6 "><Strong>การนำไปใช้ประโยชน์:</Strong></p>
                  <p class="col-6">xxxx</p>
                  <p class="col-6 "><Strong>คุณภาพข้อมูล:</Strong></p>
                  <p class="col-6">XXXXX</p>
                  <p class="col-6 "><Strong>สถิติทางการ:</Strong></p>
                  <p class="col-6">สาขาเกษตรและการประมง</p>
                  <p class="col-6 "><Strong>หน่วยนับ:</Strong></p>
                  <p class="col-6">จำนวน</p>
                  <p class="col-6 "><Strong>แหล่งข้อมูล:</Strong></p>
                  <p class="col-6">http://google.com</p>
                  <p class="col-6 "><Strong>หมายเหตุ:</Strong></p>
                  <p class="col-6"></p>

                </div>
                <button class="" style="width:100%;">ตกลง</button>
              </div>
            </div>

            <div class="dropdown">
              <button class="mt-n1 ml-5" type="button"><strong>องค์ความรู้</strong> </button>
              <div class="dropdown-content t6">
                <div class="row">
                  <div class="col-12">
                    <img src="icon/image270.png" alt="" width="25"><span>ลิงค์เว็บไซต์ที่เข้าถึงบทความหรือสิ่งพิมพ์ที่ใช้ข้อมูลสถิติตามรายการที่เลือกในการนำเสนอข้อมูลเพื่อเป็นองค์ความรู้ในการใช้ประโยชน์จากข้อมูลสถิติ</span>
                  </div>
                  <p class="col-12 text-primary">รายการเว็บไซต์(ไม่มี)</p>
                  <p class="col-4 text-center"><Strong>ลำดับ</Strong></p>
                  <p class="col-4 text-center"><Strong>หัวข้อ</Strong></p>
                  <p class="col-4 text-center"><Strong>เว็บลิงค์</Strong></p>
                  <p class="col-4 text-center">1</p>
                  <p class="col-4">การช่วยเหลือเกษตรไทย</p><a href="http://www.nso.go.th">www.nso.go.th</a>

                </div>
              </div>
            </div>
            <div class="dropdown ml-5">
              <button class="mt-n1 " type="button"><strong>ระบบสารสนเทศที่เกี่ยวข้อง</strong> </button>
              <div class="dropdown-content t7">
                <div class="row">
                  <div class="col-12">
                    <img src="icon/image270.png" alt="" width="25"><span>ลิงค์เว็บไซต์เข้าถึงระบบสารสนเทศที่เกี่ยวข้องกับรายการข้อมูลสถิติที่เลือก</span>
                  </div>
                  <p class="col-12 text-primary">รายการเว็บไซต์(ไม่มี)</p>
                  <p class="col-4 text-center"><Strong>ลำดับ</Strong></p>
                  <p class="col-4 text-center"><Strong>หัวข้อ</Strong></p>
                  <p class="col-4 text-center"><Strong>เว็บลิงค์</Strong></p>
                  <p class="col-4 text-center">1</p>
                  <p class="col-4">ระบบเกษตรกร 4.0</p><a href="http://www.nso.go.th">www.nso.go.th</a>

                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="options"> </div>
        <div class="info"></div>
        <div class="customoption">
          <a id="mouse"><img src="icon/image048.png" width="25"></a>
          <a id="zoom-out"><img src="icon/image046.png" width="25"></a>
          <a id="zoom-in"><img src="icon/image047.png" width="25"></a>
          <a id="fullscreen"><img src="icon/image045.png" width="25"></a>
        </div>
        <div class="rotate-north ol-unselectable ol-control ">
          <button><a href="#" data-toggle="tooltip" title="Thailand"><i class="fa fa-home text-light" aria-hidden="true"></i></a></button>
          <button><a href="#" data-toggle="tooltip" title="Line"><i class="fas fa-slash text-light" aria-hidden="true"></i></a></button>
          <button><a href="#" data-toggle="tooltip" title="Polygon"><i class="fas fa-draw-polygon text-light" aria-hidden="true"></i></a><span class="sr-only">Polygon</span></button>
          <button><a href="#" data-toggle="tooltip" title="Clear drawing"><i class="fas fa-times text-light" aria-hidden="true"></i></a></button>
        </div>

        <div class="menuoption">
          <a data-toggle="tooltip" title="ข้อมูลที่น่าสนใจ"><img src="icon/image050.png" alt=""></a>
          <div class="dropdown">
            <a class="" data-toggle="tooltip" title="Swipe Map"><img src="icon/image051.png" width="30"></a>

          </div>

          <div class="dropdown">
            <a data-toggle="tooltip" title="Slide Map"><img src="icon/image052.png" width="30"></a>
            <div class="dropdown-content" style="width:150px;">

            </div>
          </div>

          <div class="dropdown">
            <a data-toggle="tooltip" title="ค้นหาพื้นที่"><img src="icon/image057.png" width="30"></a>
            <div class="dropdown-content" style="width:150px;">

            </div>
          </div>

          <div class="dropdown">
            <a data-toggle="tooltip" title="ช่วงชั่นข้อมูล"><img src="icon/image053.png" width="30"></a>
            <div class="dropdown-content" style="width:150px;">

            </div>
          </div>

          <div class="dropdown">
            <a data-toggle="tooltip" title="ชั้นข้อมูลแผนที่"><img src="icon/image056.png" width="30"></a>
            <div class="dropdown-content" style="width:200px;">
              <input type="checkbox" name="layer" id="layer" value="mapstandard"><label for="layer">แบบ Manaul</label>
              <br>
              <input type="checkbox" name="layer" id="layer" value="OSMterrain"><label for="layer">แบบ Natural Breals</label>
              <br>
              <input type="checkbox" name="layer" id="layer" value="OSMtoner"><label for="layer">แบบ Equal Isterval</label>
              <br>
              <input type="checkbox" name="layer" id="layer" value="Thaichote"><label for="layer">แบบ Quanfile</label>
              <br>
              <input type="checkbox" name="layer" id="layer" value="Thaichote"><label for="layer">แบบ Standard Deviation</label>
              <br>
            </div>
          </div>

          <div class="dropdown">
            <a data-toggle="tooltip" title="รูปแบบแผนที่สถิติ"><img src="icon/image055.png" width="30"></a>
            <div class="dropdown-content" style="width:300px; top:-350px;">
              <p class="font-weight-bold">แผนที่สถิติ</p>
              <input type="checkbox" name="layer" id="layer" value="mapstandard"><label for="layer">Choropleth map</label>
              <br>
              <input type="checkbox" name="layer" id="layer" value="OSMterrain"><label for="layer">Nurmeric map</label>
              <br>
              <input type="checkbox" name="layer" id="layer" value="OSMtoner"><label for="layer">Pie Chart</label>
              <br>
              <input type="checkbox" name="layer" id="layer" value="Thaichote"><label for="layer">Proportion Cirde</label>
              <br>
              <p class="font-weight-bold">ชั้นข้อมูลแผนที่อื่นๆ</p>
              <p class="ml-3 font-weight-bold">เขตการปกครอง</p>
              <input type="checkbox" name="layer" id="layer" value="OSMwatercolor"><label for="layer">ภาค</label>
              <br>
              <input type="checkbox" name="layer" id="layer" value="OSMterrain"><label for="layer">จังหวัด</label>
              <br>
              <input type="checkbox" name="layer" id="layer" value="OSMtoner"><label for="layer">อำเภอ</label>
              <br>
              <input type="checkbox" name="layer" id="layer" value="Thaichote"><label for="layer">ตำบล</label>
              <br>
              <input type="checkbox" name="layer" id="layer" value="mapstandard"><label for="layer">เทศบาลและ อบต.</label>
              <br>
              <input type="checkbox" name="layer" id="layer" value="OSMterrain"><label for="layer">หมู่บ้าน</label>
              <br>
              <p class="font-weight-bold">ด้านสังคม</p>
              <input type="checkbox" name="layer" id="layer" value="OSMterrain"><label for="layer">ศูนย์ICTชุมชน</label>
              <br>
              <input type="checkbox" name="layer" id="layer" value="OSMtoner"><label for="layer">สถานศึกษาทั่วประเทศ</label>
              <br>
              <p class="font-weight-bold">ด้านเศรษฐกิจ</p>
              <p class="font-weight-bold">ด้านทรัพยาการธรรมชาติ และสิ่งแวดล้อม</p>
              <input type="checkbox" name="" id=""><label for="layer">พื้นที่น้ำท่วม</label>
            </div>
          </div>

          <div class="dropdown">
            <a data-toggle="tooltip" title="แผนที่พื้นหลัง"><img src="icon/image054.png" width="30"></a>
            <div class="dropdown-content" style="width:150px;top:-205px;">
              <p class="font-weight-bold">แผนที่แบบเปิด</p>
              <input type="radio" name="swipemap" id="0" value="mapstandard"><label for="0">Open Street Map</label>
              <p class="font-weight-bold">แผนที่แบบปิด</p>
              <p class="font-weight-bold">Bing Map</p>
              <input type="radio" name="swipemap" id="1" value="bing3"><label for="1">เส้นถนน</label>
              <br>
              <input type="radio" name="swipemap" id="2" value="bing0"><label for="2">แผนที่ภูมิประเทศ</label>
              <br>
              <input type="radio" name="swipemap" id="3" value="bing1"><label for="3">แผนที่ดาวเทียม</label>
              <br>
              <input type="radio" name="swipemap" id="4" value="bing2"><label for="4">แผนที่ผสม</label>
              <br>
              <p class="font-weight-bold">Google Map</p>
              <input type="radio" name="swipemap" id="5" value="Google Road Names"><label for="5">เส้นถนน</label>
              <br>
              <input type="radio" name="swipemap" id="6" value="Google Road Map"><label for="6">แผนที่ภูมิประเทศ</label>
              <br>
              <input type="radio" name="swipemap" id="7" value="Google Satellite"><label for="7">แผนที่ดาวเทียม</label>
              <br>
              <input type="radio" name="swipemap" id="8" value="Google Satellite & Roads"><label for="8">แผนที่ผสม</label>
              <br>
              <p class="font-weight-bold">แผนที่อื่นๆ</p>
              <input type="radio" name="swipemap" id="9" value="OpenstreetMaptoner"><label for="9">พื้นหลังสีขาว</label>
              <br>
              <input type="radio" name="swipemap" id="10" value="OpenMapdark"><label for="10">พื้นหลังสีดำ</label>
              <br>
              <input type="radio" name="swipemap" id="11" value="OpenstreetMapwatercolor"><label for="11">พื้นน้ำ</label>
              <br>
              <input type="radio" name="swipemap" id="12" value="Thaichote"><label for="12">ดาวเทียมไทยโชติ</label>
              <br>
            </div>
          </div>

        </div>

        <script type="text/javascript">
          var map = new ol.Map({
            target: 'map',
            controls: ol.control.defaults().extend([
              new ol.control.FullScreen()
            ]),
            features: [
              new ol.Feature({
                geometry: new ol.geom.Point(ol.proj.fromLonLat([4.35247, 50.84673]))
              })
            ],

            view: new ol.View({
              center: ol.proj.fromLonLat([100.4710, 13.7978]),
              zoom: 6
            })
          });

          const OpenstreetMapStandrad = new ol.layer.Tile({
            source: new ol.source.OSM(),
            title: 'mapstandard'
          });

          /*


          const OpenstreetMapGoogle = new ol.layer.Tile({
            source: new ol.source.OSM({
              url: 'http://mt1.google.com/vt/lyrs=m@113&hl=en&&x={x}&y={y}&z={z}',
            }),
            visible: false,
            title: 'streetMapGoogle'
          });
          const OpenMapGoogle = new ol.layer.Tile({
            source: new ol.source.OSM({
              url: 'http://mt0.google.com/vt/lyrs=y&hl=en&x={x}&y={y}&z={z}&s=Ga',
            }),
            visible: false,
            title: 'OpenMapGoogle'
          });*/
          //---------------------------------------mapsAll---------------------------------------------------------------------//
          const OpenstreetMapwatercolor = new ol.layer.Tile({
            title: 'OpenstreetMapwatercolor',
            source: new ol.source.OSM({
              url: 'http://tile.stamen.com/watercolor/{z}/{x}/{y}.jpg',
            }),
            visible: false,
          });
          const OpenstreetMaptoner = new ol.layer.Tile({
            title: 'OpenstreetMaptoner',
            source: new ol.source.OSM({
              url: 'http://tile.stamen.com/toner/{z}/{x}/{y}.png',
            }),
            visible: false,
          });
          const OpenMapdark = new ol.layer.Tile({
            title: 'OpenMapdark',
            source: new ol.source.TileJSON({
              url: 'https://api.maptiler.com/maps/darkmatter/tiles.json?key=O7dq18egPFS3MBQOEvHx',
            }),
            visible: false,
            attributions: "© MapTiler © OpenStreetMap contributors"
          });
          //----------------------------------------google-maps--------------------------------------------------------------//
          var googleLayerRoadNames = new ol.layer.Tile({
            title: "Google Road Names",
            source: new ol.source.TileImage({
              url: 'http://mt1.google.com/vt/lyrs=h&x={x}&y={y}&z={z}'
            }),
            visible: false,
          });

          var googleLayerRoadmap = new ol.layer.Tile({
            title: "Google Road Map",
            source: new ol.source.TileImage({
              url: 'http://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}'
            }),
            visible: false,
          });

          var googleLayerSatellite = new ol.layer.Tile({
            title: "Google Satellite",
            source: new ol.source.TileImage({
              url: 'http://mt1.google.com/vt/lyrs=s&hl=pl&&x={x}&y={y}&z={z}'
            }),
            visible: false,
          });

          var googleLayerHybrid = new ol.layer.Tile({
            title: "Google Satellite & Roads",
            source: new ol.source.TileImage({
              url: 'http://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}'
            }),
            visible: false,
          });

          var googleLayerTerrain = new ol.layer.Tile({
            title: "Google Terrain",
            source: new ol.source.TileImage({
              url: 'http://mt1.google.com/vt/lyrs=t&x={x}&y={y}&z={z}'
            }),
            visible: false,
          });

          var googleLayerHybrid2 = new ol.layer.Tile({
            title: "Google Terrain & Roads",
            source: new ol.source.TileImage({
              url: 'http://mt1.google.com/vt/lyrs=p&x={x}&y={y}&z={z}'
            }),
            visible: false,
          });

          var googleLayerOnlyRoad = new ol.layer.Tile({
            title: "Google Road without Building",
            source: new ol.source.TileImage({
              url: 'http://mt1.google.com/vt/lyrs=r&x={x}&y={y}&z={z}'
            }),
            visible: false,
          });
          //-----------------------------THAI-CHOTE------------------------------------------------------------//
          var Thaichote = new ol.layer.Tile({
            title: "Thaichote",
            source: new ol.source.TileImage({
              url: 'http://go-tiles1.gistda.or.th/mapproxy/wmts/thaichote/GLOBAL_WEBMERCATOR/{z}/{x}/{y}.png',
              attributions: "GISDA @COPPYRIGHT",
            }),
            visible: false,
          });
          //---------------------------------BingMap--------------------------------------------------------//
          const styles = [
            'RoadOnDemand',
            'Aerial',
            'AerialWithLabelsOnDemand',
            'CanvasDark',
            'OrdnanceSurvey'
          ];
          const bingmap = [];
          let i, ii;
          for (i = 0, ii = styles.length; i < ii; ++i) {
            bingmap.push(new ol.layer.Tile({
              title: "bing" + i,
              visible: false,
              preload: Infinity,
              source: new ol.source.BingMaps({
                key: 'AgbS6SXsli6OsqVKNjx2V7i1CFIKu6HkYal24RVwFlqkxnu4NtdSA828j8pq7P-X',
                imagerySet: styles[i]
                // use maxZoom 19 to see stretched tiles instead of the BingMaps
                // "no photos at this zoom level" tiles
                // maxZoom: 19
              })
            }));
          }
          //---------------------------------------------------------------------------------------------//
          const LayerGroup = new ol.layer.Group({
            layers: [
              OpenstreetMapStandrad, googleLayerRoadNames, googleLayerSatellite, googleLayerRoadmap, googleLayerHybrid,
              bingmap[0], bingmap[1], bingmap[2], bingmap[3], bingmap[4], Thaichote, OpenstreetMapwatercolor, OpenstreetMaptoner, OpenMapdark
            ]
          })
          //------------------------------------------------------------------------------------------//
          var selectmap = document.querySelectorAll('.dropdown-content > input[type=radio]')
          for (let selectmaps of selectmap) {
            selectmaps.addEventListener('change', function() {
              $('#map').addClass('animated  bounceInRight delay-0.9s');
              setInterval(deleteanimate, 1000);
              let selectmapvalue = this.value;
              LayerGroup.getLayers().forEach(function(element, index, array) {

                let baseselectlayer = element.get('title');
                element.setVisible(baseselectlayer === selectmapvalue);
                console.log(baseselectlayer, selectmapvalue)

              })

            });
          }

          function deleteanimate() {
            $('#map').removeClass('animated  bounceInRight delay-0.5s');

          }
          document.getElementById('zoom-out').onclick = function() {
            var view = map.getView();
            var zoom = view.getZoom();
            view.setZoom(zoom - 1);
          };

          document.getElementById('zoom-in').onclick = function() {
            var view = map.getView();
            var zoom = view.getZoom();
            view.setZoom(zoom + 1);
          };
          //---------------------------------------------startaddMap-------------------------------------------------------------//
          map.addLayer(LayerGroup);
        </script>
        <!-------------------------------------------------------------------------------------------------------------------------------------------------------->
      </div>
    </div>

  </div>
  <?php include 'footer.php'; ?>
</body>

</html>
<script>
  $(".sidebar").removeClass('toggled');
  $('#btnmenu1').click(function() {
    $(this).addClass("active");
    $('#btnmenu2').removeClass("active");

    $('#menu1').removeClass("hide");
    $('#menu2').addClass("hide");
  });
  $('#btnmenu2').click(function() {
    $(this).addClass("active");
    $('#btnmenu1').removeClass("active");

    $('#menu2').removeClass("hide");
    $('#menu1').addClass("hide");
  });
  /*$("#slideoff").click(function() {
    $('#sidebarToggle').click();
    var className = $('#checkclassul').attr("class");
    if (className == "sidebar navbar-nav toggled") {
      $('.tabcontent').css("display", "none")
      $('#toolbal').removeClass("justify-content-end");
      $('#toolbal').addClass("justify-content-around");
    } else {
      $('.tabcontent').css("display", "block");
      $('#toolbal').removeClas
      s("justify-content-around");
      $('#toolbal').addClass("justify-content-end");
    }
  });*/
  $("#slideoff").on('click', function(e) {
    e.preventDefault();
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
    var className = $('#checkclassul').attr("class");
    if (className == "sidebar navbar-nav toggled") {
      $('.tabcontent').css("display", "none")

      $('#toolbal').removeClass("justify-content-end");
      $('#toolbal').addClass("justify-content-around");
    } else {
      $('.tabcontent').css("display", "block");
      $('#toolbal').removeClas
      s("justify-content-around");
      $('#toolbal').addClass("justify-content-end");
    }
  });
  $("#filter").on('click', function(e) {
    e.preventDefault();
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
    $('#p1').css("display", "block")
    $('#toolbal').removeClass("justify-content-around");
    $('#toolbal').addClass("justify-content-end");

  });

  function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  /*
  $(".tablinks" ).click();
  */
</script>
<script>
  $('#pagemenu1').load("pagemenu1.php");
  $('#pagemenu2').load("pagemenu2.php");
  $('#pagemenu3').load("pagemenu3.php");
  $('#pagemenu4').load("pagemenu4.php");
  $('#pagemenu5').load("pagemenu5.php");
</script>