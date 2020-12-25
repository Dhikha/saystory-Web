<?php
session_start();
$title = 'Say Story';
$harga = 12000;
$produk = array(
    1 => array(
        'namaproduk' => 'Signature Redvelvet Choco',
        'gambar' => 'redvelvet.jpg',
        'harga' => 12000
    ),
    2 => array(
        'namaproduk' => 'Signature Smoothies',
        'gambar' => 'smoothies.jpg',
        'harga' => 12000
    ),
    3 => array(
        'namaproduk' => 'Signature Choco Ding',
        'gambar' => 'chocoding.jpg',
        'harga' => 12000
    ),
    4 => array(
        'namaproduk' => 'Signature Coffee',
        'gambar' => 'signaturecoffee.jpg',
        'harga' => 12000
    ),
    5 => array(
        'namaproduk' => 'Signature Choco Taro',
        'gambar' => 'chocotaro.jpg',
        'harga' => 12000
    ),
    6 => array(
        'namaproduk' => 'Signature Coffee Mocca',
        'gambar' => 'coffeemocca.jpg',
        'harga' => 12000
    ),  
    7 => array(
        'namaproduk' => 'Signature Greentea Choco',
        'gambar' => 'greenteachoco.jpg',
        'harga' => 12000
    ),  
    8 => array(
        'namaproduk' => 'Signature Choco Brown Sugar',
        'gambar' => 'chocobrownsugar.jpg',
        'harga' => 14000
    ),  
    9 => array(
        'namaproduk' => 'Signature Special Greentea',
        'gambar' => 'specialgreentea.jpg',
        'harga' => 12000
    ),  
    10 => array(
        'namaproduk' => 'Signature Squash Strawberry Orange',
        'gambar' => 'squashstrawberry.jpg',
        'harga' => 12000
    ),  
    11 => array(
        'namaproduk' => 'Signature Special Redvelvet',
        'gambar' => 'specialredvelvet.jpg',
        'harga' => 12000
    ),  
    12 => array(
        'namaproduk' => 'Signature Special Taro',
        'gambar' => 'specialtaro.jpg',
        'harga' => 12000
    ),  
    13 => array(
        'namaproduk' => 'Signature Choco Nuttela',
        'gambar' => 'choconuttela.jpg',
        'harga' => 14000
    ),  
    14 => array(
        'namaproduk' => 'Signature Greentea Redvelvet',
        'gambar' => 'greentearedvelvet.jpg',
        'harga' => 14000
    ),  
    15 => array(
        'namaproduk' => 'Signature Creamy Mango',
        'gambar' => 'creamymango.jpg',
        'harga' => 14000
    ),  
    16 => array(
        'namaproduk' => 'Signature Redvelvet Taro',
        'gambar' => 'redvelvettaro.jpg',
        'harga' => 14000
    )
);

if (isset($_POST['page']) && isset($_POST['nama']) && isset($_POST['alamat']) && $_POST['page'] == 'preview') {
    $pesan = 'Halo Say Story, Saya ingin membeli :
    
[daftarbelanja]

Kirimkan kepada :
Nama : '.$_POST['nama'].'
Email : '.$_POST['email'].'
No. HP : '.$_POST['nohp'].'
Alamat : '.$_POST['alamat'].'
Kota : '.$_POST['kota'].'
Provinsi : '.$_POST['provinsi'].'
Kurir : Abang Grab

Terima kasih :)
';
    $belanja = '';
    foreach ($_SESSION['chart'] as $key => $value) {
        $belanja .=  '- '.$produk[$key]['namaproduk'].' sebanyak: '.$value;
        $jumlah = $jumlah + ($produk[$key]['harga']*$value);
    }
    $belanja .= '
    
TOTAL : '.number_format($jumlah);

    $pesan = str_replace('[daftarbelanja]', $belanja, $pesan);
    $url = 'https://wa.me/6282233777084?text='.rawurlencode($pesan);
    unset($_SESSION['chart']);
    header('Location:'.$url);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Say Story's Shop</title>
        <link rel="icon" type="image/x-icon" href="assets/img/logoutama.png" />
        <!-- Font Awesome icons (free version)-->
        <script
            src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"
            crossorigin="anonymous"
        ></script>
        
        <link
            href="font-awesome/font-awesome/css/font-awesome.min.css"
            rel="stylesheet"
            type="text/css"
        />
        
        <link
            href="font-awesome/font-awesome/css/font-awesome.css"
            rel="stylesheet"
            type="text/css"
        />
        <!-- Google fonts-->
        <link
            href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Caveat"
            rel="stylesheet"
            type="text/css"
        />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/styless.css" rel="stylesheet" />
        <link href="css/kirim1.css" rel="stylesheet" />
        <link href="cobahover.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a
                    class="navbar-brand js-scroll-trigger"
                    href="http://localhost/home/"
                >
                    <h2>Say Story's Shop</h2>
                </a>
                <button
                    class="navbar-toggler navbar-toggler-right"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarResponsive"
                    aria-controls="navbarResponsive"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item">
                            <a
                                class="nav-link js-scroll-trigger"
                                href="http://localhost/home/"
                                >Best Seller</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link js-scroll-trigger"
                                href="http://localhost/home/"
                                >Menu</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link js-scroll-trigger"
                                href="http://localhost/home/"
                                >About</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link js-scroll-trigger"
                                href="http://localhost/home/"
                                >Team</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link js-scroll-trigger"
                                href="http://localhost/home/"
                                >Contact</a
                            >
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/home/" class="demo-4" onclick="return confirm('Yakin ingin logout?')">
                                <span>
                                    <span>Logout</span>
                                    <span>Sure?</span>
                                    <span></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" id="utama2">
            <div class="container container-page no-sidebar">
                <a href="javascript:window.history.go(-1);" class="btn-lama" style="margin-top:18px; margin-bottom:-15px; margin-left:-530px; z-index:1; position:absolute"
                    type="button">
                    <i
                    class="fas fa-arrow-left mr-2"
                    aria-hidden="true" style="font-size: 22px; margin-bottom:-2px"
                    ></i>  Kembali
                </a>
                <div class="container">
                    <div class="jumbotron jumbotron-fluid" style="height:840px; margin-top:-100px">
                        <div class="container">
                            <h2 style="margin-top:-40px">Say Story | Checkout</h2>
                            <hr />
                            <div class="checkout-address-selection">
                                <div class="checkout-address-selection-header">
                                    <div
                                        class="checkout-address-selection-header-text"
                                        >
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <?php
                                        if (isset($_GET['beli']) && is_numeric($_GET['beli'])) {
                                            if (isset($_SESSION['chart'][$_GET['beli']])) {
                                                $_SESSION['chart'][$_GET['beli']]++;
                                            } else {
                                                $_SESSION['chart'][$_GET['beli']] = 1;
                                            }
                                        } elseif (isset($_GET['kurangi']) && is_numeric($_GET['kurangi'])) {
                                            if (isset($_SESSION['chart'][$_GET['kurangi']])) {
                                                $_SESSION['chart'][$_GET['kurangi']]--;
                                            }
                                        } elseif (isset($_GET['tambah']) && is_numeric($_GET['tambah'])) {
                                            if (isset($_SESSION['chart'][$_GET['tambah']])) {
                                                $_SESSION['chart'][$_GET['tambah']]++;
                                            }
                                        }

                                        echo '<table class="table" style="margin-top:-110px;">
                                        <thead>
                                        <tr><th style="padding-right:10px;">Nama Produk</th>
                                        <th style="padding-right:140px;">Jumlah</th>
                                        <th style="padding-right:130px;">Harga</th>
                                        </tr>
                                        </thead>
                                        </tbody>';
                                        $jumlah = 0;
                                        foreach ($_SESSION['chart'] as $key => $value) {
                                            echo '<tr><td style="padding-right:10px;">'.$produk[$key]['namaproduk'].'</td><td style="padding-right:140px;"><a href="?kurangi='.$key.'" data-toggle="tooltip" title="Kurangi">&#10134;</a> '.$value.' <a href="?tambah='.$key.'" data-toggle="tooltip" title="Tambah">&#10133;</a></td><td style="padding-right:130px;">'.number_format($produk[$key]['harga']*$value).'</td>
                                            <td>
                                                
                                            </td>
                                            </tr>';
                                            $jumlah = $jumlah + ($produk[$key]['harga']*$value);
                                        }

                                        echo '<tr><td colspan="2" style="padding-left:750px;"><b>Total</b></td><td style="padding-right:130px;"><b>'.number_format($jumlah).'</b></td></tr></tbody></table>';

                                        echo '
                                        <p style="color:black; font-size:20px; text-align:left; margin-left:430px; margin-top:40px;"><strong>Dikirimkan kepada :<br/></strong></p>
                                        <table class="table">
                                        <tr><td>Nama : '. $_POST['nama'].'<br/>
                                        <tr><td>Email : '. $_POST['email'].'<br/>
                                        <tr><td>No. HP : '. $_POST['nohp'].'<br/>
                                        <tr><td>Alamat : '. $_POST['alamat'].'<br/>
                                        <tr><td>Kota : '. $_POST['kota'].'<br/>
                                        <tr><td>Provinsi : '. $_POST['provinsi'].'
                                        </table>
                                        ';
                                        ?>
                                        <form action="" method="post">
                                            <input type="hidden" name="nama" value="<?php echo $_POST['nama'];?>">
                                            <input type="hidden" name="email" value="<?php echo $_POST['email'];?>">
                                            <input type="hidden" name="nohp" value="<?php echo $_POST['nohp'];?>">
                                            <input type="hidden" name="alamat" value="<?php echo $_POST['alamat'];?>">
                                            <input type="hidden" name="kota" value="<?php echo $_POST['kota'];?>">
                                            <input type="hidden" name="provinsi" value="<?php echo $_POST['provinsi'];?>">
                                            <input type="hidden" name="page" value="preview">
                                            <input type="submit" class="btn-lama text-right" value="ORDER SEKARANG" style="border-style:none; width:237px;"><i
                                            class="fab fa-whatsapp "
                                            aria-hidden="true" style="font-size:30px; position:absolute; color:white; margin-left:-220px; margin-top:13px"
                                            ></i>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Footer-->
        <footer class="footer py-4" style="height: 70px">
      <div class="container">
        <div class="row align-items-center">
          <div
            class="col-lg-4 text-lg-left tebal"
            style="font-size: 19px; font-weight: 650; margin-top: -35px"
          >
            Copyright © Say Story's Shop 2020
          </div>
          <div class="col-lg-4 my-3 my-lg-0">
            <a
              class="btn btn-dark btn-social mx-2"
              href="https://www.youtube.com/channel/UCOGimk62yPM_uMc6jozQl_g"
              target="_blank"
              style="width: 3.5rem; height: 3.5rem; margin-top: -35px"
              ><i class="fab fa-youtube" style="width: 25px; height: 25px"></i
            ></a>
            <a
              class="btn btn-dark btn-social mx-2"
              href="https://www.instagram.com/saystory.id/?hl=id"
              target="_blank"
              style="width: 3.5rem; height: 3.5rem; margin-top: -35px"
              ><i class="fab fa-instagram" style="width: 25px; height: 25px"></i
            ></a>
            <a
              class="btn btn-dark btn-social mx-2"
              href="https://web.facebook.com/Say-Story-1954984084627852/"
              target="_blank"
              style="width: 3.5rem; height: 3.5rem; margin-top: -35px"
              ><i
                class="fab fa-facebook-f"
                style="width: 25px; height: 25px"
              ></i
            ></a>
          </div>
          <div
            class="col-lg-4 text-lg-right tebal"
            style="font-size: 20px; font-weight: 600; margin-top: -35px"
          >
            <a
              class="mr-3"
              href="http://localhost/home/index2.html"
              style="text-decoration: none"
              >Privacy Policy</a
            >
            <a
              href="http://localhost/home/index3.html"
              style="text-decoration: none"
              >Our Location</a
            >
          </div>
        </div>
      </div>
    </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>