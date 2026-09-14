<?php

use yii\helpers\Html;

$this->title = 'Tentang';

$organizationImage = 'https://kerjasama.kemnaker.go.id/img/organisasi-ks.jpg';

?>

<!-- =========================================================
     1. HERO
========================================================= -->
<section class="about-hero">

    <div class="about-hero-overlay"></div>

    <div class="container">

        <div class="about-hero-content">

            <div class="about-ministry">
                <i class="bi bi-globe2"></i>
                <span>KEMENTERIAN KETENAGAKERJAAN RI</span>
            </div>

            <h1 class="about-hero-title">
                Biro Kerja Sama
            </h1>

            <p class="about-hero-description">
                Unit kerja strategis yang memfasilitasi dan mengelola kerja sama
                bidang ketenagakerjaan, dalam negeri, bilateral, regional,
                multilateral
            </p>

        </div>

    </div>

</section>


<!-- =========================================================
     2. LANDASAN KERJA
========================================================= -->
<section class="work-foundation-section">

    <div class="container">

        <!-- Header -->
        <div class="work-foundation-header">

            <span class="about-section-kicker">
                LANDASAN KERJA
            </span>

            <h2 class="work-foundation-title">
                Tugas &amp; Fungsi
            </h2>

        </div>


        <div class="row g-4 work-foundation-row">

            <!-- =================================================
                 LEFT
            ================================================== -->
            <div class="col-lg-5">

                <article class="main-task-card">

                    <div class="main-task-globe"></div>

                    <div class="main-task-content">

                        <div class="main-task-icon">
                            <i class="bi bi-layers-fill"></i>
                        </div>

                        <h3 class="main-task-title">
                            Tugas Utama
                        </h3>

                        <div class="main-task-divider"></div>

                        <p class="main-task-description">
                            "Biro Kerja Sama mempunyai tugas melaksanakan
                            koordinasi, pembinaan, dan fasilitasi pelaksanaan
                            kerja sama dalam dan luar negeri."
                        </p>

                    </div>

                </article>

            </div>


            <!-- =================================================
                 RIGHT
            ================================================== -->
            <div class="col-lg-7">

                <div class="row g-3 work-function-row">

                    <!-- 01 -->
                    <div class="col-md-6">

                        <article class="work-function-card">

                            <span class="work-function-number">
                                01
                            </span>

                            <h3 class="work-function-title">
                                Kerja Sama K/L, Pemda dan Mitra Pembangunan
                            </h3>

                            <p class="work-function-description">
                                Koordinasi, pembinaan, fasilitasi pelaksanaan,
                                dan pengembangan kerja sama antar
                                kementerian/lembaga, pemerintah daerah dan
                                mitra pembangunan.
                            </p>

                        </article>

                    </div>


                    <!-- 02 -->
                    <div class="col-md-6">

                        <article class="work-function-card">

                            <span class="work-function-number">
                                02
                            </span>

                            <h3 class="work-function-title">
                                Kerja Sama Bilateral
                            </h3>

                            <p class="work-function-description">
                                Koordinasi, pembinaan, fasilitasi pelaksanaan
                                dan pengembangan kerja sama bilateral.
                            </p>

                        </article>

                    </div>


                    <!-- 03 -->
                    <div class="col-md-6">

                        <article class="work-function-card">

                            <span class="work-function-number">
                                03
                            </span>

                            <h3 class="work-function-title">
                                Kerja Sama Multilateral
                            </h3>

                            <p class="work-function-description">
                                Koordinasi, pembinaan, fasilitasi pelaksanaan
                                dan pengembangan kerja sama multilateral.
                            </p>

                        </article>

                    </div>


                    <!-- 04 -->
                    <div class="col-md-6">

                        <article class="work-function-card">

                            <span class="work-function-number">
                                04
                            </span>

                            <h3 class="work-function-title">
                                Regional &amp; Admin KLN
                            </h3>

                            <p class="work-function-description">
                                Koordinasi, pembinaan, fasilitasi pelaksanaan
                                dan pengembangan kerja sama regional dan
                                pelaksanaan pelayanan administrasi kerja sama
                                luar negeri.
                            </p>

                        </article>

                    </div>


                    <!-- 05 -->
                    <div class="col-12">

                        <article
                            class="work-function-card work-function-card-wide">

                            <div class="work-function-wide-icon">
                                <i class="bi bi-briefcase-fill"></i>
                            </div>

                            <div class="work-function-wide-content">

                                <h3 class="work-function-title mb-0">

                                    <span class="work-function-wide-number">
                                        05.
                                    </span>

                                    Tata Usaha &amp; Rumah Tangga

                                </h3>

                                <p class="work-function-description">
                                    Pelaksanaan urusan ketatausahaan,
                                    kearsipan, dan rumah tangga Biro.
                                </p>

                            </div>

                        </article>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     3. STRUKTUR ORGANISASI
========================================================= -->
<section class="governance-section">

    <div class="container">

        <!-- Header -->
        <div class="governance-heading">

            <div>

                <span class="about-section-kicker">
                    HIRARKI &amp; TATA KELOLA
                </span>

                <h2 class="governance-title">
                    Struktur Organisasi
                </h2>

            </div>


            <button
                type="button"
                class="governance-view-link"
                data-bs-toggle="modal"
                data-bs-target="#organizationModal">
                <i class="bi bi-fullscreen"></i>

                <span>
                    Lihat Ukuran Penuh
                </span>
            </button>

        </div>


        <!-- =====================================================
             ORGANIZATION CARD
        ====================================================== -->
        <article class="organization-card">

            <!-- Image Area -->
            <div class="organization-image-area">

                <div class="organization-pattern"></div>


                <button
                    type="button"
                    class="organization-open-button"
                    data-bs-toggle="modal"
                    data-bs-target="#organizationModal">
                    <i class="bi bi-box-arrow-up-right"></i>

                    <span>
                        Buka Gambar
                    </span>
                </button>


                <div class="organization-image-wrapper">

                    <?= Html::img(
                        $organizationImage,
                        [
                            'class' => 'organization-image',
                            'alt' => 'Struktur Organisasi Biro Kerja Sama',
                            'loading' => 'lazy',
                        ]
                    ) ?>

                </div>

            </div>


            <!-- =================================================
                 INFORMATION
            ================================================== -->
            <div class="organization-information">

                <!-- Kepala Biro -->
                <div class="bureau-profile">

                    <div class="bureau-avatar">
                        <i class="bi bi-person-workspace"></i>
                    </div>

                    <div class="bureau-profile-content">

                        <span class="bureau-label">
                            KEPALA BIRO
                        </span>

                        <h3 class="bureau-name">
                            Ir. Muhammad Arif Hidayat, M.Eng., MPP.
                        </h3>

                    </div>

                </div>


                <!-- Statistics -->
                <div class="employee-stat-area">

                    <div class="employee-statistics">

                        <!-- Total -->
                        <div
                            class="employee-stat-card employee-stat-primary">

                            <div class="employee-stat-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>

                            <div class="employee-stat-content">

                                <strong class="employee-stat-number">
                                    42
                                </strong>

                                <span class="employee-stat-label">
                                    TOTAL PEGAWAI
                                </span>

                            </div>

                        </div>


                        <!-- ASN -->
                        <div
                            class="employee-stat-card employee-stat-green">

                            <div class="employee-stat-icon">
                                <i class="bi bi-person-vcard-fill"></i>
                            </div>

                            <div class="employee-stat-content">

                                <strong class="employee-stat-number">
                                    33
                                </strong>

                                <span class="employee-stat-label">
                                    ASN
                                </span>

                            </div>

                        </div>


                        <!-- Non ASN -->
                        <div
                            class="employee-stat-card employee-stat-brown">

                            <div class="employee-stat-icon">
                                <i class="bi bi-person-fill-gear"></i>
                            </div>

                            <div class="employee-stat-content">

                                <strong class="employee-stat-number">
                                    6
                                </strong>

                                <span class="employee-stat-label">
                                    NON-ASN
                                </span>

                            </div>

                        </div>


                        <!-- PPPK -->
                        <div
                            class="employee-stat-card employee-stat-purple">

                            <div class="employee-stat-icon">
                                <i class="bi bi-briefcase-fill"></i>
                            </div>

                            <div class="employee-stat-content">

                                <strong class="employee-stat-number">
                                    3
                                </strong>

                                <span class="employee-stat-label">
                                    PPPK
                                </span>

                            </div>

                        </div>

                    </div>


                    <p class="organization-update">

                        <i class="bi bi-arrow-repeat"></i>

                        <span>
                            Data diperbarui secara real-time dari Sibiro-KS
                        </span>

                    </p>

                </div>

            </div>

        </article>

    </div>

</section>


<!-- =========================================================
     MODAL STRUKTUR
========================================================= -->
<div
    class="modal fade organization-modal"
    id="organizationModal"
    tabindex="-1"
    aria-labelledby="organizationModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-xl modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <h2
                    class="modal-title"
                    id="organizationModalLabel">
                    Struktur Organisasi Biro Kerja Sama
                </h2>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Tutup"></button>

            </div>


            <div class="modal-body">

                <div class="organization-modal-image-wrapper">

                    <?= Html::img(
                        $organizationImage,
                        [
                            'class' => 'organization-modal-image',
                            'alt' => 'Struktur Organisasi Biro Kerja Sama',
                        ]
                    ) ?>

                </div>

            </div>

        </div>

    </div>

</div>