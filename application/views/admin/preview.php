<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
    <title>kulinerBantul</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://localhost/KulinerBantul/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.css">
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>

</head>

<body>
    <div class="containerr">
        <nav>
        </nav>
        <div class="nav-gradient"></div>
        <!-- end header -->
        <?php if ($this->uri->segment(4) === 'klr1587608474') : ?>
            <div class="content">
                <div class="post">
                    <div class="post-container">
                        <div class="post-content-header">
                            <img src="https://firebasestorage.googleapis.com/v0/b/kuliner-bantul.appspot.com/o/user%2Fprofile%2FCapturasd.PNG?alt=media&token=7edd81a1-20cc-448a-a23d-bdade39f83f6" alt="">
                            <p><?= $post['judul_post'] ?></p>
                            <i class="fas fa-ellipsis-v"></i>
                        </div>
                        <div class="post-content-img">
                            <div id="carouselExampleControls<?= $post['id_post'] ?>" data-interval="false" class="carousel slide">
                                <div class="carousel-inner">
                                    <?php foreach ($this->PostModel->get_gambar_post($post['id_post'])->result_array() as $gambar) : ?>
                                        <div class="carousel-item">
                                            <img style="max-width: 700px;max-height:300px" src="<?= $gambar['gambar'] ?>">
                                        </div>
                                    <?php endforeach  ?>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls<?= $post['id_post'] ?>" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls<?= $post['id_post'] ?>" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="post-content-caption">
                            <p class="nama"><?= $post['nama_user'] ?></p>
                            <span style="font-size:13px;word-wrap:break-word;" class="caption"><?= $post['konten'] ?></span>

                        </div>
                        <div class="post-content-info">
                            <div class="alamat">
                                <i class="fas fa-map-marker-alt"></i>
                                <P style="font-size: 13px"><?= $post['alamat'] ?></P>
                                <div class="map">
                                    <button style="margin-right:5px;" data-judul="<?= $post['judul_post'] ?>" data-longitude="<?= $post['longitude'] ?>" data-latitude="<?= $post['latitude'] ?>" data-toggle="modal" data-target="#mapmodal" id="btnmap" class="btn btn-sm btn-primary "><i class="fas fa-globe btnmap ml-2"></i></button>
                                </div>
                            </div>
                            <div class="jam-buka">
                                <i class="far fa-clock"></i>
                                <p style="font-weight: bold"><?= $post['jam_buka'] ?></p>
                            </div>
                            <div class="mobile-map">
                                <i class="fas fa-map-marked-alt"></i>
                                <p>lihat lokasi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="event-header" style="width: 100%">
                        <button onclick="javascript:history.go(-1)" class="btn btn-lg btn-primary">KEMBALI</button>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="content">
                <div class="post">

                    <button onclick="javascript:history.go(-1)" style="text-align: center" class="btn btn-lg btn-primary">KEMBALI</button>

                </div>
                <div class="event">
                    <h3 class="event-header">Event Yang Akan Datang</h3>
                    <div class="event-container">
                        <div class="event-content-header">
                            <img src="<?= $post['image'] ?>" alt="">
                            <p><?= $post['judul_post'] ?></p>
                            <i class="fas fa-ellipsis-v"></i>
                        </div>
                        <div class="event-content-img">
                            <div id="carouselExampleControls<?= $post['id_post'] ?>" data-interval="false" class="carousel slide">
                                <div class="carousel-inner">
                                    <?php foreach ($this->PostModel->get_gambar_post($post['id_post'])->result_array() as $gambar) : ?>
                                        <div class="carousel-item">
                                            <img style="max-width: 700px;max-height:300px" src="<?= $gambar['gambar'] ?>">
                                        </div>
                                    <?php endforeach  ?>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls<?= $post['id_post'] ?>" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls<?= $post['id_post'] ?>" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="event-content-caption">
                            <p class="nama"><?= $post['nama_user'] ?></p>
                            <p class="caption"><?= $post['konten'] ?>
                            </p>
                        </div>
                        <div class="event-content-info">
                            <div class="alamat">
                                <i class="fas fa-map-marker-alt"></i>
                                <p><?= $post['alamat'] ?></p>
                            </div>
                            <hr>
                            <div class="tanggal">
                                <i class="far fa-calendar-alt"></i>
                                <p><?= $post['tanggal'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>
        <!-- Modal -->
        <div class="modal fade" id="mapmodal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="maphome" class="map">
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- footer -->
        <div class="mobile-menu">
            <a class="fas fa-lg fa-home"></a>
            <a class="fas fa-lg fa-bell"></a>
            <a class="fas fa-lg fa-compass"></a>
            <a><img src="http://localhost/KulinerBantul/assets/img/default.jpg"></a>
        </div>
        <!-- end footer -->
    </div>
    <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-storage.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="http://localhost/KulinerBantul/assets/js/script.js"></script>
    <script>
    </script>
</body>

</html>