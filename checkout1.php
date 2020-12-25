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
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script
            src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"
            crossorigin="anonymous"
        ></script>
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
                                href="file:///C:/Users/ASUS%20441/Downloads/BOOTSTRAP/website%20shopping/dist/index.html#!"
                                >Best Seller</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link js-scroll-trigger"
                                href="file:///C:/Users/ASUS%20441/Downloads/BOOTSTRAP/website%20shopping/dist/index.html#!"
                                >Menu</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link js-scroll-trigger"
                                href="file:///C:/Users/ASUS%20441/Downloads/BOOTSTRAP/website%20shopping/dist/index.html#!"
                                >About</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link js-scroll-trigger"
                                href="file:///C:/Users/ASUS%20441/Downloads/BOOTSTRAP/website%20shopping/dist/index.html#!"
                                >Team</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link js-scroll-trigger"
                                href="file:///C:/Users/ASUS%20441/Downloads/BOOTSTRAP/website%20shopping/dist/index.html#!"
                                >Contact</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" id="utama2">
            <div class="container container-page no-sidebar">
                <div class="container">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h2>Say Story | Checkout</h2>
                            <hr />
                            <div class="checkout-address-selection">
                                <div class="checkout-address-selection-header">
                                    <div
                                        class="checkout-address-selection-header-text"
                                        >
                                        <img
                                            class="img-fluid d-block mx-auto"
                                            src="assets/img/products/01-thumbnail.jpg"
                                            alt=""
                                        />
                                        <h5>Description :</h5>
                                        <br />
                                        <h3 class="text-uppercase" style="margin-right:200px; margin-bottom:-10px">
                                            PRICE: IDR 12.000
                                        </h3>
                                        <br />
                                        <a href="?beli=1" class="btn-lama" style="margin-top:-30px"
                                        type="button">
                                            <i
                                            class="fas fa-shopping-cart mr-1"
                                            aria-hidden="true"
                                            ></i>Buy Now
                                        </a>
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

                                        echo '<table class="table">
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
                                        <p style="color:black; font-size:20px; text-align:left; margin-left:400px; margin-top:40px;"><strong>Dikirimkan kepada :<br/></strong>
                                        Nama :'. $_POST['nama'].'<br/>
                                        Email :'. $_POST['email'].'<br/>
                                        No. HP :'. $_POST['nohp'].'<br/>
                                        Alamat :'. $_POST['alamat'].'<br/>
                                        Kota :'. $_POST['kota'].'<br/>
                                        Provinsi :'. $_POST['provinsi'].'</p>
                                        <p><a href="?submit=yes" class="btn-lama">ORDER SEKARANG</a></p>';
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>