<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ifan Rifai Hardiyanto">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    <title>Ifan Rifai Hardiyanto - 1461900200 - Tugas Kegiatan 1</title>
</head>

<body>
    <nav class="navbar">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="{{'/home'}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{'/artikel'}}">Artikel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact_us.html">Contact Us</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <div class="media">
                        <img src="assets/img/Laravel.png" class="mr-3 size-img-laravel">
                        <div class="media-body">
                            <h5 class="mt-0">Laravel</h5>
                            <div class="post">
                                <p>
                                    Laravel merupakan salah satu framework yang paling populer di antara yang lainnya.
                                    Diperkenalkan pada tahun 2011, framework ini sangat powerfull untuk mengembangkan
                                    aplikasi atau situs web yang kompleks.
                                </p>
                                <p>
                                    Dengan berbagai tools yang canggih pengembangan web menggunakan laravel akan lebih
                                    cepat dan lancar, karena framework ini bisa menyederhanakan tugas-tugas seperti
                                    caching, security, routing, dan otentikasi.
                                </p>
                                <p>Kelebihan : </p>
                                <p>
                                <ul>
                                    <li>Memiliki syntax yang mudah dipahami dan dipelajari.</li>
                                    <li>Fungsionalitas intinya dapat dikembangkan dengan menggunakan add-ons.</li>
                                    <li>Menyediakan fungsi bawaan untuk mengelola routing, manajemen user, caching, dan
                                        lain sebagainya.</li>
                                    <li>Terintegrasi dengan library dan platform pihak ketiga, seperti AWS.</li>
                                    <li>Menjalankan task secara asynchronously di background untuk meningkatkan
                                        performa.</li>
                                </ul>
                                </p>
                                <p>Kekurangan : </p>
                                <p>
                                <ul>
                                    <li>Tidak Mudah dipahami untuk pertama kali.</li>
                                    <li>Update versinya terlalu cepat.</li>
                                    <li>File relatif lebih berat.</li>
                                    <li>Install di Server tidak semudah Codeigniter.</li>
                                    <li>Framework yang tergolong baru sehingga sedikit dokumentasi dan susah dipahami
                                        bagi pemula.</li>
                                    <li>Membutuhkan koneksi internet untuk instalasi dan mendownload library</li>
                                    <li>Tidak semua hosting cocok dengan Laravel</li>
                                    <li>Eksekusi yang lambat</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/iconify.min.js') }}"></script>
</body>

</html>