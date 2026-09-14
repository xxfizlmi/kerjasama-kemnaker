<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<!-- =========================================================
     HOME PAGE
========================================================= -->

<div class="home-page">

    <!-- =====================================================
         1. HERO
    ====================================================== -->
    <section class="home-hero">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">

                <!-- Left -->
                <div class="col-lg-6">
                    <div class="home-hero-content">

                        <div class="home-hero-kicker">
                            <span>BIRO KERJA SAMA</span>
                            <span class="home-hero-kicker-line"></span>
                        </div>

                        <h1 class="home-hero-title">
                            Collaborating for Impact Connecting for Growth
                        </h1>

                        <p class="home-hero-description">
                            "Kami tidak hanya menjalin hubungan (Connecting)
                            dan kolaborasi (Collaborating), tetapi kami memastikan
                            bahwa setiap hubungan tersebut membawa kemajuan (Growth)
                            dan setiap kerja sama menghasilkan perubahan nyata (Impact)"
                        </p>

                    </div>
                </div>

                <!-- Right -->
                <!-- Right -->
                <div class="col-lg-6    p-0">

                    <div
                        id="homeHeroCarousel"
                        class="carousel slide home-hero-carousel"
                        data-bs-ride="carousel"
                        data-bs-interval="5000"
                        data-bs-pause="hover">

                        <!-- =============================================
             SLIDES
        ============================================== -->
                        <div class="carousel-inner home-hero-media">


                            <!-- Slide 1 -->
                            <div class="carousel-item active">

                                <?= Html::img(
                                    '@web/images/hero-site/4-IMG_6037.jpg',
                                    [
                                        'class' => 'home-hero-image d-block w-100',
                                        'alt' => 'Kerja Sama Dalam Negeri',
                                    ]
                                ) ?>

                                <div class="home-hero-media-gradient"></div>

                                <div class="home-hero-media-content">

                                    <h2 class="home-hero-media-title">
                                        Penandatanganan Perjanjian Kejas Sama Ditjen Binapenta & PKK Kemnaker dengan Himpunan Psikologi Indonesia
                                    </h2>

                                    <div class="home-hero-media-source">
                                        <i class="bi bi-camera"></i>
                                        <span>Sumber: Biro Humas</span>
                                    </div>

                                </div>

                            </div>


                            <!-- Slide 2 -->
                            <div class="carousel-item">

                                <?= Html::img(
                                    '@web/images/hero-site/5-Mou-Tiktok.jpg',
                                    [
                                        'class' => 'home-hero-image d-block w-100',
                                        'alt' => 'Kerja Sama Kemnaker',
                                    ]
                                ) ?>

                                <div class="home-hero-media-gradient"></div>

                                <div class="home-hero-media-content">

                                    <h2 class="home-hero-media-title">
                                        Kerja Sama Dalam Negeri Kemnaker dengan Tiktok
                                    </h2>

                                    <div class="home-hero-media-source">
                                        <i class="bi bi-camera"></i>
                                        <span>Sumber: Biro Humas</span>
                                    </div>

                                </div>

                            </div>


                            <!-- Slide 3 -->
                            <div class="carousel-item">

                                <?= Html::img(
                                    '@web/images/hero-site/Mou_BPD HIPMI JAYA.jpg',
                                    [
                                        'class' => 'home-hero-image d-block w-100',
                                        'alt' => 'MoU BPD HIPMI JAYA',
                                    ]
                                ) ?>

                                <div class="home-hero-media-gradient"></div>

                                <div class="home-hero-media-content">

                                    <h2 class="home-hero-media-title">
                                        Kerja Sama Dalam Negeri Kemnaker dengan BPD HIPMI JAYA, 8 Juli 2026
                                    </h2>

                                    <div class="home-hero-media-source">
                                        <i class="bi bi-camera"></i>
                                        <span>Sumber: Biro Humas</span>
                                    </div>

                                </div>

                            </div>


                            <!-- Slide 4 -->
                            <div class="carousel-item">

                                <?= Html::img(
                                    '@web/images/hero-site/Mou_FPPI.jpg',
                                    [
                                        'class' => 'home-hero-image d-block w-100',
                                        'alt' => 'MoU FPPI',
                                    ]
                                ) ?>

                                <div class="home-hero-media-gradient"></div>

                                <div class="home-hero-media-content">

                                    <h2 class="home-hero-media-title">
                                        Penandatanganan Kerja Sama dengan FPPI
                                    </h2>

                                    <div class="home-hero-media-source">
                                        <i class="bi bi-camera"></i>
                                        <span>Sumber: Biro Humas</span>
                                    </div>

                                </div>

                            </div>

                        </div>


                        <!-- =============================================
             PAGINATION DOTS
        ============================================== -->
                        <div class="carousel-indicators home-hero-pagination">

                            <button
                                type="button"
                                data-bs-target="#homeHeroCarousel"
                                data-bs-slide-to="0"
                                class="active home-hero-dot"
                                aria-current="true"
                                aria-label="Slide 1"></button>

                            <button
                                type="button"
                                data-bs-target="#homeHeroCarousel"
                                data-bs-slide-to="1"
                                class="home-hero-dot"
                                aria-label="Slide 2"></button>

                            <button
                                type="button"
                                data-bs-target="#homeHeroCarousel"
                                data-bs-slide-to="2"
                                class="home-hero-dot"
                                aria-label="Slide 3"></button>

                            <button
                                type="button"
                                data-bs-target="#homeHeroCarousel"
                                data-bs-slide-to="3"
                                class="home-hero-dot"
                                aria-label="Slide 4"></button>

                        </div>


                        <!-- =============================================
             LEFT / RIGHT
             Opsional, hanya muncul saat hover
        ============================================== -->
                        <button
                            class="carousel-control-prev home-hero-control home-hero-control-prev"
                            type="button"
                            data-bs-target="#homeHeroCarousel"
                            data-bs-slide="prev"
                            aria-label="Sebelumnya">
                            <span class="carousel-control-prev-icon"></span>
                        </button>

                        <button
                            class="carousel-control-next home-hero-control home-hero-control-next"
                            type="button"
                            data-bs-target="#homeHeroCarousel"
                            data-bs-slide="next"
                            aria-label="Berikutnya">
                            <span class="carousel-control-next-icon"></span>
                        </button>

                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- =====================================================
         2. BERITA TERBARU
    ====================================================== -->
    <section class="home-news">
        <div class="container">

            <div class="home-section-header">
                <h2 class="home-section-title">
                    Berita Terbaru
                </h2>
            </div>


            <!-- Featured News -->
            <article class="home-news-featured">

                <div class="home-news-featured-image">

                    <?= Html::img(
                        '@web/images/hero-site/ex.jpg',
                        [
                            'class' => 'home-news-featured-img',
                            'alt' => '114th Session of the International Labour Conference',
                        ]
                    ) ?>

                </div>

                <div class="home-news-featured-content">

                    <div class="home-news-meta">
                        <span class="home-news-category">
                            Sidang
                        </span>

                        <span class="home-news-date">
                            1-12 Juni 2026
                        </span>
                    </div>

                    <h3 class="home-news-featured-title">
                        114th Session of the International Labour Conference
                    </h3>

                    <p class="home-news-featured-description">
                        Sidang tahunan Organisasi Perburuhan Internasional (ILO)
                        yang mempertemukan perwakilan tripartit dari setiap
                        negara anggota, yaitu pemerintah, pengusaha, dan pekerja.
                    </p>

                    <a href="<?= Url::toRoute(['event/ilc']) ?>" class="home-news-read-more">
                        Baca Selengkapnya &gt;
                    </a>

                </div>

            </article>


            <!-- News Cards -->
            <div class="row g-3 g-lg-4 home-news-grid">

                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="home-news-card">

                        <span class="home-news-card-category">
                            Kegiatan
                        </span>

                        <span class="home-news-card-date">
                            Rabu, 29 April 2026
                        </span>

                        <h3 class="home-news-card-title">
                            Pelaksanaan Sosialisasi Platform Links
                        </h3>

                    </a>
                </div>


                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="home-news-card">

                        <span class="home-news-card-category">
                            Pengumuman
                        </span>

                        <span class="home-news-card-date">
                            Selasa, 31 Maret 2026
                        </span>

                        <h3 class="home-news-card-title">
                            Pelaksanaan Inpassing Jabatan Fungsional
                            Analis Kerja Sama (JFAKS)
                        </h3>

                    </a>
                </div>


                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <a href="#" class="home-news-card">

                        <span class="home-news-card-category">
                            Workshop
                        </span>

                        <span class="home-news-card-date">
                            Selasa, 31 Maret 2026
                        </span>

                        <h3 class="home-news-card-title">
                            Penerbitan E-sertifikat-Workshop on English
                            for Professional Development
                        </h3>

                    </a>
                </div>

            </div>

        </div>
    </section>


    <!-- =====================================================
         3. INFORMASI LAINNYA
    ====================================================== -->
    <section class="home-information">
        <div class="container">

            <div class="home-information-header">
                <span class="home-information-bar"></span>

                <h2 class="home-information-title">
                    Informasi Lainnya
                </h2>
            </div>


            <div class="row g-4 home-information-grid">

                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <article class="home-information-card">

                        <div class="home-information-card-body">

                            <div>
                                <span class="home-information-label">
                                    INSPIRASI
                                </span>

                                <p class="home-information-date">
                                    14 Desember 2025
                                </p>

                                <h3 class="home-information-card-title">
                                    Seri 24 – Ketika Potensi Belum Bertemu Posisi
                                </h3>

                                <p class="home-information-description">
                                    Beberapa hari yang lalu, saya makan siang
                                    bersama seorang staf. Selalu lebih nikmat
                                    jika ada yang ikut menemani.......
                                </p>
                            </div>

                            <a
                                href="https://yassierli.com/2025/12/14/ketika-potensi-belum-bertemu-posisi/"
                                class="home-information-button"
                                target="_blank"
                                rel="noopener noreferrer">
                                BACA SELENGKAPNYA
                            </a>
                        </div>

                    </article>
                </div>


                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <article class="home-information-card">

                        <div class="home-information-card-body">

                            <div>
                                <span class="home-information-label">
                                    WEB KEMNAKER
                                </span>

                                <h3 class="home-information-card-title">
                                    Wujudkan Pemagangan Nasional
                                </h3>

                                <p class="home-information-description">
                                    Temukan tempat magang terbaik favoritmu,
                                    raih pengalaman berharga, dan bangun jejaring
                                    profesional sejak dini. Persiapkan dirimu
                                    menghadapi tantangan dunia kerja yang sesungguhnya
                                    dengan kompetensi mumpuni melalui program
                                    pemagangan nasional.
                                </p>
                            </div>

                            <a
                                href="https://kemnaker.go.id/"
                                class="home-information-button"
                                target="_blank"
                                rel="noopener noreferrer">
                                KUNJUNGI
                            </a>

                        </div>

                    </article>
                </div>


                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <article class="home-information-card">

                        <div class="home-information-card-body">

                            <div>
                                <span class="home-information-label">
                                    JDIH KEMNAKER
                                </span>

                                <h3 class="home-information-card-title">
                                    Pusat Informasi &amp; Produk Hukum
                                    Ketenagakerjaan
                                </h3>

                                <p class="home-information-description">
                                    Temukan berbagai peraturan perundang-undangan,
                                    kebijakan, dan informasi hukum terkini di bidang
                                    ketenagakerjaan secara mudah dan cepat melalui
                                    portal JDIH.
                                </p>
                            </div>

                            <a
                                href="https://jdih.kemnaker.go.id/"
                                class="home-information-button"
                                target="_blank"
                                rel="noopener noreferrer">
                                KUNJUNGI PORTAL
                            </a>

                        </div>

                    </article>
                </div>

            </div>

        </div>
    </section>


    <!-- =====================================================
         4. JENIS KERJA SAMA
    ====================================================== -->
    <section class="home-cooperation">
        <div class="container">

            <div class="home-cooperation-header">

                <h2 class="home-cooperation-title">
                    JENIS KERJA SAMA
                </h2>

                <span class="home-cooperation-line"></span>

            </div>


            <div class="row g-3 g-lg-4 home-cooperation-grid">

                <!-- Dalam Negeri -->
                <div class="col-lg-3 col-md-6">
                    <article class="home-cooperation-card">

                        <div class="home-cooperation-card-body">

                            <div>

                                <div class="home-cooperation-icon">
                                    <i class="bi bi-building"></i>
                                </div>

                                <h3 class="home-cooperation-card-title">
                                    <span>KERJA SAMA</span>
                                    <span>DALAM NEGERI</span>
                                </h3>

                                <p class="home-cooperation-description">
                                    Suatu kegiatan yang melibatkan interaksi
                                    Kementerian dengan kementerian dan lembaga
                                    lain untuk mencapai tujuan bersama.
                                </p>

                            </div>

                            <a href="<?= Url::toRoute(['/ksdn']) ?>" class="home-cooperation-button">
                                KUNJUNGI
                            </a>

                        </div>

                    </article>
                </div>


                <!-- Multilateral -->
                <div class="col-lg-3 col-md-6">
                    <article class="home-cooperation-card">

                        <div class="home-cooperation-card-body">

                            <div>

                                <div class="home-cooperation-icon">
                                    <i class="bi bi-globe2"></i>
                                </div>

                                <h3 class="home-cooperation-card-title">
                                    <span>KERJA SAMA</span>
                                    <span>MULTILATERAL</span>
                                </h3>

                                <p class="home-cooperation-description">
                                    Kerja Sama multilateral dilaksanakan oleh
                                    lebih dari 2 (dua) negara dan/atau organisasi
                                    internasional tanpa memandang wilayah atau
                                    kawasan tertentu.
                                </p>

                            </div>

                            <a href="<?= Url::toRoute(['/ksm']) ?>" class="home-cooperation-button">
                                KUNJUNGI
                            </a>

                        </div>

                    </article>
                </div>


                <!-- Bilateral -->
                <div class="col-lg-3 col-md-6">
                    <article class="home-cooperation-card">

                        <div class="home-cooperation-card-body">

                            <div>

                                <div class="home-cooperation-icon">
                                    <i class="bi bi-people"></i>
                                </div>

                                <h3 class="home-cooperation-card-title">
                                    <span>KERJA SAMA</span>
                                    <span>BILATERAL</span>
                                </h3>

                                <p class="home-cooperation-description">
                                    Kerja Sama bilateral dilaksanakan oleh
                                    2 (dua) pihak antara Kementerian dengan
                                    pemerintah negara asing dan/atau organisasi
                                    internasional.
                                </p>

                            </div>

                            <a href="<?= Url::toRoute(['/ksb']) ?>" class="home-cooperation-button">
                                KUNJUNGI
                            </a>

                        </div>

                    </article>
                </div>


                <!-- Regional -->
                <div class="col-lg-3 col-md-6">
                    <article class="home-cooperation-card">

                        <div class="home-cooperation-card-body">

                            <div>

                                <div class="home-cooperation-icon">
                                    <i class="bi bi-map"></i>
                                </div>

                                <h3 class="home-cooperation-card-title">
                                    <span>KERJA SAMA</span>
                                    <span>REGIONAL</span>
                                </h3>

                                <p class="home-cooperation-description">
                                    Kerja sama regional di bidang ketenagakerjaan
                                    merupakan kerja sama peningkatan sektor
                                    ketenagakerjaan dalam konteks kesatuan kawasan
                                    untuk mendukung integrasi dan pertumbuhan ekonomi.
                                </p>

                            </div>

                            <a href="<?= Url::toRoute(['/ksr']) ?>" class="home-cooperation-button">
                                KUNJUNGI
                            </a>

                        </div>

                    </article>
                </div>

            </div>

        </div>
    </section>

</div>