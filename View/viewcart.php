
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>X-SHOP</title>
    <link rel="icon" href="./src/image/tealogo.png">
      <link rel="stylesheet" href="./src/css/cart.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="css/bootstrap.min.css"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
  </head>
  <body>
    <!-- top bar  -->
    <nav class="top_bar navbar navbar-expand-lg bg-light">
      <div class="content_top_bar container-fluid">
        <div class="logo_mid">
          <a class="text-decoration-none h2 text-success" href="index.php">X-<span class="h2 text-secondary">SHOP</span></a>
        </div>
        <div class="menu_top_bar">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="icon_top_bar"><i class="bx bx-user"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="icon">
              <i class="bx bxl-facebook"></i>
              <i class="bx bxl-twitter"></i>
              <i class="bx bxl-instagram"></i>
              <i class="bx bxl-google-plus"></i>
            </div>
            <ul class="navbar-nav me-3 mb-1">
              <li class="nav-item">
                <?php
                
                if(isset($_SESSION['user'])){
                    extract($_SESSION['user']);
                  ?>
                 
                 <div class=" btn_sn btn btn-outline-success "><a class="text-decoration-none" href="../index.php?act=dangnhap"
                  ><?=$user?></a</div>
              <?php

                }else{

                ?>
                <div class=" btn_sn btn btn-outline-success "><a class="text-decoration-none" href="../index.php?act=dangnhap"
                  >????ng Nh???p</a</div>
                      <?php  

                          }

                          ?>
              </li>
                 <button type="button" class=" btn_cart btn  btn-outline-success "> <a href="viewcart.php" class="d-flex align-items-center text-decoration-none">
                <span>Gi??? H??ng</span><i class="bx bx-cart-alt"></i>
              </a></button>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- end top bar -->

    <!-- menu  -->

    <nav class="navbar navbar-expand-lg bg-success fixed">
      <div class="content_0"></div>
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="../index.php"
                >Trang Ch???</a
              >
            </li>
            <li>
              <a class="nav-link active text-white" href="../index.php?act=gioithieu">Gi???i Thi???u</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link text-white"
                href="../index.php?act=sanpham"
              >
                S???n Ph???m
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="../index.php?act=lienhe">Li??n H???</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">G??p ??</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="../index.php?act=lienhe">H???i ????p</a>
            </li>
          </ul>
        </div>
        <form class="srch d-flex" role="search">
          <input
            class="form_control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
            required
          />
          <button class="btn_search" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <!-- end menu  -->

    <!-- banner silder  -->
    <div
      id="carouselExampleControls"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="./src/image/slideshow_1.jpg"
            class="d-block w-100"
            alt="..."
          />
        </div>
        <div class="carousel-item">
          <img
            src="./src/image/slideshow_2.jpg"
            class="d-block w-100"
            alt="..."
          />
        </div>
        <div class="carousel-item">
          <img
            src="./src/image/slideshow_3.jpg"
            class="d-block w-100"
            alt="..."
          />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- end banner slider  -->

    <!-- cart  -->
<div class="container-fluid my-5">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="card shadow-lg">
            <div class="row p-2 mt-3 justify-content-between mx-sm-2">
              <div class="col">
                <div class="row justify-content-start">
                  <div class="col">
                    <div class="logo_mid">
          <a class="text-decoration-none h2 text-success" href="index.php">X-<span class="h2 text-secondary">SHOP</span></a>
        </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mx-auto justify-content-center text-center">
              <div class="col-12 mt-3">
                <nav aria-label="breadcrumb" class="second"></nav>
              </div>
            </div>

            <div class="row justify-content-around">
              <div class="col-md-5">
                <div class="card border-0">
                  <div class="card-header pb-0">
                    <h2 class="card-title space">TH??? T???C THANH TO??N</h2>
                    <p class="card-text text-muted mt-4 space">
                      CHI TI???T V???N CHUY???N
                    </p>
                    <hr class="my-0" />
                  </div>
                  <div class="card-body">
                    <div class="row justify-content-between">
                      <div class="mt-0">
                        <p>
                          <b>322/90 M?? ????NH H?? N???I</b>
                        </p>
                      </div>
                      <div class="">
                        <p><b>moctraviet@gmail.com</b></p>
                      </div>
                    </div>
                    <div class="row mt-4">
                      <div class="col">
                        <p class="text-muted mb-2">CHI TI???T THANH TO??N</p>
                        <hr class="mt-0" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="NAME" class="small text-muted mb-1"
                        >T??N CH??? TH???</label
                      >
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        name="NAME"
                        id="NAME"
                        aria-describedby="helpId"
                        placeholder="MOCTRAVIET"
                      />
                    </div>
                    <div class="form-group">
                      <label for="NAME" class="small text-muted mb-1"
                        >S??? TH???</label
                      >
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        name="NAME"
                        id="NAME"
                        aria-describedby="helpId"
                        placeholder="0101 508 9999"
                      />
                    </div>
                    <div class="row no-gutters">
                      <div class="col-sm-6 pr-sm-2">
                        <div class="form-group">
                          <label for="NAME" class="small text-muted mb-1">
                            H???P L??? QUA</label
                          >
                          <input
                            type="text"
                            class="form-control form-control-sm"
                            name="NAME"
                            id="NAME"
                            aria-describedby="helpId"
                            placeholder="00/00"
                          />
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="NAME" class="small text-muted mb-1"
                            >H???P L??? QUA</label
                          >
                          <input
                            type="text"
                            class="form-control form-control-sm"
                            name="NAME"
                            id="NAME"
                            aria-describedby="helpId"
                            placeholder="..."
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row mb-md-5">
                      <div class="col">
                        <button
                          type="button"
                          name=""
                          id=""
                          class="btn btn-lg btn-block mt-4 px-1"
                        >
                          L??U TH??NG TIN
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="card border-0">
                  <div class="card-header card-2">
                    <p class="card-text text-muted mt-md-4 mb-2 space">
                      ????N H??NG C???A B???N
                      <span class="small text-muted ml-2 cursor-pointer"
                        >CH???NH S???A T??I MUA H??NG</span
                      >
                    </p>
                    <hr class="my-2" />
                  </div>
                  <div class="card-body pt-0">
                    <div class="row justify-content-between">
                      <div class="col-auto col-md-7">
                        <div class="media flex-column flex-sm-row">
                          <img
                            class="img-fluid"
                            src="./src/image/sp3.jpg"
                            width="62"
                            height="62"
                          />
                          <div class="media-body my-auto">
                            <div class="row">
                              <div class="col-auto">
                                <p class="mb-0"><b>Tr?? M??c C??u</b></p>
                                <small class="text-muted"
                                  >???? th??m v??o 1 ng??y tr?????c</small
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="pl-0 flex-sm-col col-auto my-auto">
                        <p class="boxed">2</p>
                      </div>
                      <div class="pl-0 flex-sm-col col-auto my-auto">
                        <p><b>500.000???</b></p>
                      </div>
                    </div>
                    <hr class="my-2" />
                    <div class="row justify-content-between">
                      <div class="col-auto col-md-7">
                        <div class="media flex-column flex-sm-row">
                          <img
                            class="img-fluid"
                            src="./src/image/sp5.jpg"
                            width="62"
                            height="62"
                          />
                          <div class="media-body my-auto">
                            <div class="row">
                              <div class="col">
                                <p class="mb-0"><b>Kyusu Teapot</b></p>
                                <small class="text-muted"
                                  >???? th??m v??o 4 ng??y tr?????c</small
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="pl-0 flex-sm-col col-auto my-auto">
                        <p class="boxed">1</p>
                      </div>
                      <div class="pl-0 flex-sm-col col-auto my-auto">
                        <p><b>300.000???</b></p>
                      </div>
                    </div>
                    <hr class="my-2" />
                    <div class="row justify-content-between">
                      <div class="col-auto col-md-7">
                        <div class="media flex-column flex-sm-row">
                          <img
                            class="img-fluid"
                            src="./src/image/sp8.jpg"
                            width="62"
                            height="62"
                          />
                          <div class="media-body my-auto">
                            <div class="row">
                              <div class="col">
                                <p class="mb-0">
                                  <b>H??? ?????ng Tr?? Hoa Sen_Eilong</b>
                                </p>
                                <small class="text-muted"
                                  >???? th??m v??o 1 tu???n tr?????c</small
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="pl-0 flex-sm-col col-auto my-auto">
                        <p class="boxed">1</p>
                      </div>
                      <div class="pl-0 flex-sm-col col-auto my-auto">
                        <p><b>270.000???</b></p>
                      </div>
                    </div>
                    <hr class="my-2" />
                    <div class="row">
                      <div class="col">
                        <div class="row justify-content-between">
                          <div class="col-4">
                            <p class="mb-1"><b>T???ng gi?? s???n ph???m</b></p>
                          </div>
                          <div class="flex-sm-col col-auto">
                            <p class="mb-1"><b>1.070.000???</b></p>
                          </div>
                        </div>
                        <div class="row justify-content-between">
                          <div class="col">
                            <p class="mb-1"><b>Ph?? v???n chuy???n</b></p>
                          </div>
                          <div class="flex-sm-col col-auto">
                            <p class="mb-1"><b>10.000???</b></p>
                          </div>
                        </div>
                        <div class="row justify-content-between">
                          <div class="col-4">
                            <p><b>T???ng gi?? ti???n</b></p>
                          </div>
                          <div class="flex-sm-col col-auto">
                            <p class="mb-1"><b>1.080.000???</b></p>
                          </div>
                        </div>
                        <hr class="my-0" />
                      </div>
                    </div>
                    <div class="row mb-5 mt-4">
                      <div class="col-md-7 col-lg-6 mx-auto">
                        <button
                          type="button"
                          class="btn btn-block btn-outline-primary btn-lg px-1"
                        >
                          THANH TO??N NGAY
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- foooter  -->

    <div class=""><footer class="text-center text-lg-start bg-light text-muted">
      <section
        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom bg-success text-white"
      >
        <div class="me-5 d-none d-lg-block ">
          <span>K???t n???i v???i ch??ng t??i tr??n c??c m???ng x?? h???i:</span>
        </div>
        <div>
          <a href="" class="me-4 text-reset">
            <i class="bx bxl-facebook"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="bx bxl-twitter"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="bx bxl-google"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="bx bxl-instagram"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="bx bxl-linkedin"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="bx bxl-github"></i>
          </a>
        </div>
      </section>
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4 text-success h3">
               <a class="text-decoration-none h2 text-success" href="index.php">X-<span class="h2 text-secondary">SHOP</span></a>
              </h6>
              <p>
                ???? t??? l??u tr?? kh??ng ch??? l?? m???t th??? ????? u???ng th??ng th?????ng m?? c??n ???????c coi nh?? m???t n??t v??n h??a . Tr?? d??ng ????? u???ng v?? th?????ng th???c c??c h????ng v??? ?????c bi???t, tr?? d??ng ????? l??m nh???ng m??n qu?? bi???u t???ng ?????y ?? ngh??a ..
              </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">S???n Ph???m</h6>
              <p>
                <a href="#!" class="text-reset text-decoration-none">Tr??</a>
              </p>
              <p>
                <a href="#!" class="text-reset text-decoration-none">Tr?? c???</a>
              </p>
              <p>
                <a href="#!" class="text-reset text-decoration-none">Tr?? T??m</a>
              </p>
              <p>
                <a href="#!" class="text-reset text-decoration-none">Tr?? M??c C??u</a>
              </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4">Li??n k???t</h6>
              <p>
                <a href="#!" class="text-reset text-decoration-none">?????nh Gi??</a>
              </p>
              <p>
                <a href="#!" class="text-reset text-decoration-none">C??i ?????t</a>
              </p>
              <p>
                <a href="#!" class="text-reset text-decoration-none">????n H??ng</a>
              </p>
              <p>
                <a href="#!" class="text-reset text-decoration-none">Tr??? Gi??</a>
              </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
              <p><i class="bx bxs-home me-3"></i> 322/90 M?? ????nh 2</p>
              <p>
                <i class="bx bxs-envelope me-3"></i>
                hailsph22054@fpt.edu.vn
              </p>
              <p><i class="bx bxs-phone me-3"></i> +84 0357.902.068</p>
              <p><i class="bx bxs-phone me-3"></i> +84 0793.193.723</p>
            </div>
          </div>
        </div>
      </section>
    </footer></div>

    <!-- end foooter  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <script src="js/main.js"></script>
  </body>
</html>