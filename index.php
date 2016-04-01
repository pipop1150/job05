<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/css/slide.css" />
  <link rel="stylesheet" href="assets/css/custom-nav-tabs.css" />

  <!-- JS -->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.js"></script>

</head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">LOGO</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">หน้าแรก</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">ตัวอย่างโพย
              <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#poll1">แบบที่ 1</a></li>
              <li><a href="#poll2">แบบที่ 2</a></li>
              <li><a href="#poll3">แบบที่ 3</a></li>
            </ul>
          </li>
          <li><a href="#...">...</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#login">Login</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <!-- N-navbar -->

  <!-- Header Carousel -->
  <header id="myCarousel" class="carousel slide" style="margin-bottom: 20px;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
          <div class="item active">
              <div class="fill" style="background-image:url('http://www.playonepiece.me/uploads/article/images/one_piece_luffy_by_cheing.jpg');"></div>
              <div class="carousel-caption">
                  <h2>Caption 1</h2>
              </div>
          </div>
          <div class="item">
              <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
              <div class="carousel-caption">
                  <h2>Caption 2</h2>
              </div>
          </div>
          <div class="item">
              <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
              <div class="carousel-caption">
                  <h2>Caption 3</h2>
              </div>
          </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="icon-prev"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-next"></span>
      </a>
  </header>
  <script>
  $('.carousel').carousel({
      interval: 5000 //changes the speed
  })
  </script>
  <!-- NHeader Carousel -->

  <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
      <li class="active"><a href="#new" data-toggle="tab">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แบบใหม่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
      <li><a href="#old" data-toggle="tab">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แบบเก่า&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  </ul>

  <!-- content -->
  <div class="tab-content">
    <!-- content new -->
    <div class="tab-pane active" id="new">
      <div class="container-fluid">
        <div class="row" style="margin-top: 20px; margin-bottom: 20px">
          <div class="col-xs-6">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3 class="panel-title">รอบเช้า</h3>
                </div>
                <div class="panel-body">
                  <!-- row 1 -->
                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li><a>1 หน้ากระดาษ +สกอร์รวม</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><img src="assets/images/word.png" /></a></li>
                        <li><a href="#"><img src="assets/images/excel32.png" /></a></li>
                      </ul>
                    </div>
                  </nav>

                  <!-- row 2 -->
                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li><a>2 หน้ากระดาษ +สกอร์รวม</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><img src="assets/images/word.png" /></a></li>
                        <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                      </ul>
                    </div>
                  </nav>

                  <!-- row 3 -->
                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li><a>1 หน้ากระดาษ ธรรมดา</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><img src="assets/images/word.png" /></a></li>
                        <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                      </ul>
                    </div>
                  </nav>

                  <!-- row 3.1 -->
                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li><a>2 หน้ากระดาษ ธรรมดา</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><img src="assets/images/word.png" /></a></li>
                        <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                      </ul>
                    </div>
                  </nav>

                  <!-- row 4 -->
                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li><a>1 หน้ากระดาษ แนวนอน</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><img src="assets/images/word.png" /></a></li>
                        <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                      </ul>
                    </div>
                  </nav>

                  <!-- row 5 -->
                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li><a>เรียงตามเวลา</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><img src="assets/images/word.png" /></a></li>
                        <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                      </ul>
                    </div>
                  </nav>

                  <!-- row 6 -->
                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li><a>ราคา 1.9 +สกอร์รวม</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><img src="assets/images/word.png" /></a></li>
                        <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                      </ul>
                    </div>
                  </nav>

                  <!-- row 7 -->
                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li><a>ราคา 1.9 ธรรมดา</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><img src="assets/images/word.png" /></a></li>
                        <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                      </ul>
                    </div>
                  </nav>

                  <!-- row 8 -->
                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li><a>ราคา 1.9 เรียงตามเวลา</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><img src="assets/images/word.png" /></a></li>
                        <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                      </ul>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-6">
            <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-heading text-center">
                      <h3 class="panel-title">รอบเย็น</h3>
                  </div>

                  <div class="panel-body">
                    <!-- row 1 -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <ul class="nav navbar-nav">
                          <li><a>1 หน้ากระดาษ +สกอร์รวม</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><img src="assets/images/word.png" /></a></li>
                          <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                        </ul>
                      </div>
                    </nav>

                    <!-- row 2 -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <ul class="nav navbar-nav">
                          <li><a>2 หน้ากระดาษ +สกอร์รวม</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><img src="assets/images/word.png" /></a></li>
                          <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                        </ul>
                      </div>
                    </nav>

                    <!-- row 3 -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <ul class="nav navbar-nav">
                          <li><a>1 หน้ากระดาษ ธรรมดา</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><img src="assets/images/word.png" /></a></li>
                          <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                        </ul>
                      </div>
                    </nav>

                    <!-- row 3.1 -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <ul class="nav navbar-nav">
                          <li><a>2 หน้ากระดาษ ธรรมดา</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><img src="assets/images/word.png" /></a></li>
                          <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                        </ul>
                      </div>
                    </nav>

                    <!-- row 4 -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <ul class="nav navbar-nav">
                          <li><a>1 หน้ากระดาษ แนวนอน</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><img src="assets/images/word.png" /></a></li>
                          <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                        </ul>
                      </div>
                    </nav>

                    <!-- row 5 -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <ul class="nav navbar-nav">
                          <li><a>เรียงตามเวลา</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><img src="assets/images/word.png" /></a></li>
                          <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                        </ul>
                      </div>
                    </nav>

                    <!-- row 6 -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <ul class="nav navbar-nav">
                          <li><a>ราคา 1.9 +สกอร์รวม</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><img src="assets/images/word.png" /></a></li>
                          <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                        </ul>
                      </div>
                    </nav>

                    <!-- row 7 -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <ul class="nav navbar-nav">
                          <li><a>ราคา 1.9 ธรรมดา</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><img src="assets/images/word.png" /></a></li>
                          <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                        </ul>
                      </div>
                    </nav>

                    <!-- row 8 -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <ul class="nav navbar-nav">
                          <li><a>ราคา 1.9 เรียงตามเวลา</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><img src="assets/images/word.png" /></a></li>
                          <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                        </ul>
                      </div>
                    </nav>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Ncontent new -->

    <!-- content old -->
    <div class="tab-pane" id="old">
      <div class="container-fluid">
        <div class="row" style="margin-top: 20px; margin-bottom: 20px">
          <div class="col-xs-6">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3 class="panel-title">รอบเช้า</h3>
                </div>
                <div class="panel-body">
                  <!-- row 1 -->
                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li><a>1 หน้ากระดาษ +สกอร์รวม</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><img src="assets/images/word.png" /></a></li>
                        <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                      </ul>
                    </div>
                  </nav>

                  <!-- row 2 -->
                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li><a>2 หน้ากระดาษ +สกอร์รวม</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><img src="assets/images/word.png" /></a></li>
                        <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                      </ul>
                    </div>
                  </nav>

                  <!-- row 3 -->
                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li><a>1 หน้ากระดาษ ธรรมดา</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><img src="assets/images/word.png" /></a></li>
                        <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                      </ul>
                    </div>
                  </nav>

                  <!-- row 3.1 -->
                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li><a>2 หน้ากระดาษ ธรรมดา</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><img src="assets/images/word.png" /></a></li>
                        <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                      </ul>
                    </div>
                  </nav>

                  <!-- row 4 -->
                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li><a>1 หน้ากระดาษ แนวนอน</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><img src="assets/images/word.png" /></a></li>
                        <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                      </ul>
                    </div>
                  </nav>

                  <!-- row 5 -->
                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li><a>เรียงตามเวลา</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><img src="assets/images/word.png" /></a></li>
                        <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                      </ul>
                    </div>
                  </nav>

                  <!-- row 6 -->
                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li><a>ราคา 1.9 +สกอร์รวม</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><img src="assets/images/word.png" /></a></li>
                        <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                      </ul>
                    </div>
                  </nav>

                  <!-- row 7 -->
                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li><a>ราคา 1.9 ธรรมดา</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><img src="assets/images/word.png" /></a></li>
                        <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                      </ul>
                    </div>
                  </nav>

                  <!-- row 8 -->
                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <ul class="nav navbar-nav">
                        <li><a>ราคา 1.9 เรียงตามเวลา</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><img src="assets/images/word.png" /></a></li>
                        <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                      </ul>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-6">
            <div class="col-md-12">
              <div class="panel panel-default">
                  <div class="panel-heading text-center">
                      <h3 class="panel-title">รอบเย็น</h3>
                  </div>

                  <div class="panel-body">
                    <!-- row 1 -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <ul class="nav navbar-nav">
                          <li><a>1 หน้ากระดาษ +สกอร์รวม</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><img src="assets/images/word.png" /></a></li>
                          <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                        </ul>
                      </div>
                    </nav>

                    <!-- row 2 -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <ul class="nav navbar-nav">
                          <li><a>2 หน้ากระดาษ +สกอร์รวม</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><img src="assets/images/word.png" /></a></li>
                          <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                        </ul>
                      </div>
                    </nav>

                    <!-- row 3 -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <ul class="nav navbar-nav">
                          <li><a>1 หน้ากระดาษ ธรรมดา</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><img src="assets/images/word.png" /></a></li>
                          <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                        </ul>
                      </div>
                    </nav>

                    <!-- row 3.1 -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <ul class="nav navbar-nav">
                          <li><a>2 หน้ากระดาษ ธรรมดา</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><img src="assets/images/word.png" /></a></li>
                          <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                        </ul>
                      </div>
                    </nav>

                    <!-- row 4 -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <ul class="nav navbar-nav">
                          <li><a>1 หน้ากระดาษ แนวนอน</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><img src="assets/images/word.png" /></a></li>
                          <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                        </ul>
                      </div>
                    </nav>

                    <!-- row 5 -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <ul class="nav navbar-nav">
                          <li><a>เรียงตามเวลา</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><img src="assets/images/word.png" /></a></li>
                          <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                        </ul>
                      </div>
                    </nav>

                    <!-- row 6 -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <ul class="nav navbar-nav">
                          <li><a>ราคา 1.9 +สกอร์รวม</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><img src="assets/images/word.png" /></a></li>
                          <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                        </ul>
                      </div>
                    </nav>

                    <!-- row 7 -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <ul class="nav navbar-nav">
                          <li><a>ราคา 1.9 ธรรมดา</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><img src="assets/images/word.png" /></a></li>
                          <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                        </ul>
                      </div>
                    </nav>

                    <!-- row 8 -->
                    <nav class="navbar navbar-default">
                      <div class="container-fluid">
                        <ul class="nav navbar-nav">
                          <li><a>ราคา 1.9 เรียงตามเวลา</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="#"><img src="assets/images/word.png" /></a></li>
                          <li><a href="#"><img src="assets/images/excel.png" /></a></li>
                        </ul>
                      </div>
                    </nav>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Ncontent old -->
  </div>
  <script>
    $('#tabs').tab();
  </script>
  <!-- Ncontent -->

</body>
</html>
