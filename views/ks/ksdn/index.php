<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="ksdn-page">

    <!-- =========================================================
         HERO
    ========================================================== -->
    <!-- =========================================================
     HERO - KERJA SAMA DALAM NEGERI
========================================================= -->
    <section class="ksdn-hero hero-network-section">

        <!-- =====================================================
         INTERACTIVE NETWORK BACKGROUND
    ====================================================== -->
        <canvas
            id="heroNetworkCanvas"
            class="hero-network-canvas"
            aria-hidden="true"></canvas>


        <!-- =====================================================
         BACKGROUND OVERLAY
         Menjaga teks tetap mudah dibaca
    ====================================================== -->
        <div
            class="hero-network-overlay"
            aria-hidden="true"></div>


        <!-- =====================================================
         CENTER FOCUS / QUIET AREA
    ====================================================== -->
        <div
            class="hero-network-focus"
            aria-hidden="true"></div>


        <!-- =====================================================
         HERO CONTENT
    ====================================================== -->
        <div class="container">

            <div class="ksdn-hero-inner">

                <!-- =================================================
                 HERO INTRODUCTION
            ================================================== -->
                <div class="ksdn-hero-content text-center" data-aos="fade-down"
                    data-aos-offset="50"
                    data-aos-delay="0"
                    data-aos-duration="500"
                    data-aos-easing="ease-in-out-sine"
                    data-aos-mirror="false"
                    data-aos-once="false">

                    <h1 class="ksdn-hero-title">
                        Kerja Sama Dalam Negeri
                    </h1>


                    <p class="ksdn-hero-description">

                        Suatu kegiatan yang melibatkan interaksi Kementerian dengan
                        kementerian/lembaga, Pemerintah Daerah, dan Mitra Pembangunan
                        untuk saling memberi manfaat dalam mencapai tujuan bersama
                        dan dilakukan secara bersama-sama.

                    </p>


                    <a
                        href="#"
                        class="ksdn-regulation">

                        <i class="bi bi-journal-text"></i>

                        <span>
                            Permenaker RI No. 19 Tahun 2024
                        </span>

                    </a>

                </div>


                <!-- =================================================
                 STRATEGIC INFORMATION
            ================================================== -->
                <div class="row g-4 ksdn-strategic-row">


                    <!-- =============================================
                     TUJUAN STRATEGIS
                ============================================== -->
                    <div class="col-lg-6">

                        <article class="ksdn-strategic-card" data-aos="fade-up-right"
                            data-aos-offset="50"
                            data-aos-delay="0"
                            data-aos-duration="500"
                            data-aos-easing="ease-in-out-sine"
                            data-aos-mirror="false"
                            data-aos-once="false">

                            <div class="ksdn-strategic-heading">

                                <div class="ksdn-strategic-icon is-blue">

                                    <i class="bi bi-bullseye"></i>

                                </div>


                                <h2>
                                    TUJUAN STRATEGIS
                                </h2>

                            </div>


                            <p>

                                “Memperkuat sinergi dan kolaborasi kerja sama
                                dalam negeri secara efektif dan akuntabel guna
                                mendukung pembangunan ketenagakerjaan yang
                                berkelanjutan.”

                            </p>

                        </article>

                    </div>


                    <!-- =============================================
                     SEKTOR PRIORITAS
                ============================================== -->
                    <div class="col-lg-6">

                        <article class="ksdn-strategic-card" data-aos="fade-up-left"
                            data-aos-offset="50"
                            data-aos-delay="0"
                            data-aos-duration="500"
                            data-aos-easing="ease-in-out-sine"
                            data-aos-mirror="false"
                            data-aos-once="false">

                            <div class="ksdn-strategic-heading">

                                <div class="ksdn-strategic-icon is-gold">

                                    <i class="bi bi-layers"></i>

                                </div>


                                <h2>
                                    SEKTOR PRIORITAS
                                </h2>

                            </div>


                            <p>

                                “Sektor prioritas kerja sama dalam negeri meliputi
                                kompetensi dan penempatan tenaga kerja, hubungan
                                industrial, pengawasan ketenagakerjaan,
                                produktivitas, serta data dan sistem
                                ketenagakerjaan.”

                            </p>

                        </article>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================================
         TAB AREA
    ========================================================== -->
    <section class="ksdn-content">
        <div class="container">

            <!-- TAB NAVIGATION -->
            <div class="ksdn-tabs-wrapper"
                data-aos="fade-up"
                data-aos-offset="50"
                data-aos-delay="0"
                data-aos-duration="500"
                data-aos-easing="ease-in-out"
                data-aos-mirror="false"
                data-aos-once="false">

                <ul
                    class="nav nav-tabs ksdn-tabs"
                    id="ksdnTab"
                    role="tablist">

                    <li class="nav-item" role="presentation">

                        <button
                            class="nav-link active"
                            id="informasi-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#informasi"
                            type="button"
                            role="tab"
                            aria-controls="informasi"
                            aria-selected="true">
                            <i class="bi bi-info-circle-fill"></i>
                            <span>Informasi</span>
                        </button>

                    </li>


                    <li class="nav-item" role="presentation">

                        <button
                            class="nav-link"
                            id="dokumen-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#dokumen"
                            type="button"
                            role="tab"
                            aria-controls="dokumen"
                            aria-selected="false">
                            <i class="bi bi-card-list"></i>
                            <span>Jenis Dokumen Kerja Sama</span>
                        </button>

                    </li>


                    <li class="nav-item" role="presentation">

                        <button
                            class="nav-link"
                            id="pra-mou-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#pra-mou"
                            type="button"
                            role="tab"
                            aria-controls="pra-mou"
                            aria-selected="false">
                            <i class="bi bi-search"></i>
                            <span>Tahap Pra-MoU</span>
                        </button>

                    </li>

                </ul>

            </div>


            <!-- =====================================================
                 TAB CONTENT
            ====================================================== -->
            <div
                class="tab-content ksdn-tab-content"
                id="ksdnTabContent">

                <!-- =================================================
                     TAB 1 - INFORMASI
                ================================================== -->
                <div
                    class="tab-pane fade show active"
                    id="informasi"
                    role="tabpanel"
                    aria-labelledby="informasi-tab"
                    tabindex="0">

                    <!-- JENIS MITRA -->
                    <section class="ksdn-section">

                        <div class="ksdn-section-heading text-center" data-aos="fade-up"
                            data-aos-offset="50"
                            data-aos-delay="0"
                            data-aos-duration="500"
                            data-aos-easing="ease-in-out"
                            data-aos-mirror="false"
                            data-aos-once="false">

                            <h2>JENIS MITRA</h2>

                            <p>
                                Sinergi strategis dijalin dengan berbagai instansi
                                dan pemangku kepentingan guna memperluas dampak
                                positif pembangunan ketenagakerjaan di seluruh
                                Indonesia.
                            </p>

                        </div>


                        <div class="row g-4">

                            <!-- Kementerian -->
                            <div class="col-lg-4 col-md-6"
                                data-aos="fade-right"
                                data-aos-offset="50"
                                data-aos-delay="0"
                                data-aos-duration="500"
                                data-aos-easing="ease-in-out"
                                data-aos-mirror="true"
                                data-aos-once="false">

                                <article class="ksdn-partner-card is-blue">

                                    <div class="ksdn-card-heading">

                                        <div class="ksdn-box-icon blue">
                                            <i class="bi bi-building"></i>
                                        </div>

                                        <h3>KEMENTERIAN / LEMBAGA</h3>

                                    </div>

                                    <div class="ksdn-partner-stat">

                                        <strong class="blue-text ksdn-counter" data-target="43">0</strong>

                                        <span>MITRA AKTIF</span>

                                    </div>

                                    <p>
                                        Kementerian yang menyelenggarakan urusan
                                        pemerintahan di bidang ketenagakerjaan.
                                    </p>

                                </article>

                            </div>


                            <!-- Pemerintah Daerah -->
                            <div class="col-lg-4 col-md-6" data-aos="fade-up"
                                data-aos-offset="50"
                                data-aos-delay="0"
                                data-aos-duration="500"
                                data-aos-easing="ease-in-out"
                                data-aos-mirror="true"
                                data-aos-once="false">

                                <article class="ksdn-partner-card is-green">

                                    <div class="ksdn-card-heading">

                                        <div class="ksdn-box-icon green">
                                            <i class="bi bi-geo-alt"></i>
                                        </div>

                                        <h3>PEMERINTAH DAERAH</h3>

                                    </div>

                                    <div class="ksdn-partner-stat">

                                        <strong class="green-text ksdn-counter" data-target="30">0</strong>

                                        <span>MITRA AKTIF</span>

                                    </div>

                                    <p>
                                        Kepala daerah sebagai unsur penyelenggara
                                        pemerintah daerah yang memimpin pelaksanaan
                                        urusan pemerintahan.
                                    </p>

                                </article>

                            </div>


                            <!-- Mitra Pembangunan -->
                            <div class="col-lg-4 col-md-6" data-aos="fade-left"
                                data-aos-offset="50"
                                data-aos-delay="0"
                                data-aos-duration="500"
                                data-aos-easing="ease-in-out"
                                data-aos-mirror="true"
                                data-aos-once="false">

                                <article class="ksdn-partner-card is-gold">

                                    <div class="ksdn-card-heading">

                                        <div class="ksdn-box-icon gold">
                                            <i class="bi bi-people"></i>
                                        </div>

                                        <h3>MITRA PEMBANGUNAN</h3>

                                    </div>

                                    <div class="ksdn-partner-stat">

                                        <strong class="gold-text ksdn-counter" data-target="139">
                                            0
                                        </strong>

                                        <span>MITRA AKTIF</span>

                                    </div>

                                    <p>
                                        Mitra kerja sama yang meliputi badan hukum,
                                        asosiasi, perkumpulan, organisasi, lembaga
                                        swadaya, institusi, dan entitas lainnya.
                                    </p>

                                </article>

                            </div>

                        </div>

                    </section>


                    <!-- CAKUPAN -->
                    <section class="ksdn-section ksdn-scope-section">

                        <div class="ksdn-section-heading text-center" data-aos="fade-up"
                            data-aos-offset="50"
                            data-aos-delay="0"
                            data-aos-duration="500"
                            data-aos-easing="ease-in-out"
                            data-aos-mirror="true"
                            data-aos-once="false">

                            <h2>CAKUPAN KOLABORASI</h2>

                            <p>
                                Fokus ruang lingkup pelaksanaan kerja sama diarahkan
                                pada aspek-aspek esensial guna menciptakan ekosistem
                                ketenagakerjaan yang tangguh dan adaptif.
                            </p>

                        </div>


                        <div class="row g-3 g-lg-4">

                            <div class="col-lg-3 col-md-6">

                                <article class="ksdn-scope-card" data-aos="fade-up"
                                    data-aos-offset="50"
                                    data-aos-delay="0"
                                    data-aos-duration="500"
                                    data-aos-easing="ease-in-out"
                                    data-aos-mirror="true"
                                    data-aos-once="false">

                                    <div class="ksdn-scope-icon">
                                        <i class="bi bi-book"></i>
                                    </div>

                                    <h3>
                                        KOMPETENSI &amp; VOKASI
                                    </h3>

                                    <p>
                                        Pengembangan keterampilan dan peningkatan
                                        kompetensi tenaga kerja.
                                    </p>

                                </article>

                            </div>


                            <div class="col-lg-3 col-md-6">

                                <article class="ksdn-scope-card" data-aos="fade-up"
                                    data-aos-offset="50"
                                    data-aos-delay="0"
                                    data-aos-duration="500"
                                    data-aos-easing="ease-in-out"
                                    data-aos-mirror="true"
                                    data-aos-once="false">

                                    <div class="ksdn-scope-icon">
                                        <i class="bi bi-feather"></i>
                                    </div>

                                    <h3>
                                        PENEMPATAN KERJA
                                    </h3>

                                    <p>
                                        Perluasan kesempatan kerja dan penyerapan
                                        tenaga kerja.
                                    </p>

                                </article>

                            </div>


                            <div class="col-lg-3 col-md-6">

                                <article class="ksdn-scope-card" data-aos="fade-up"
                                    data-aos-offset="50"
                                    data-aos-delay="0"
                                    data-aos-duration="500"
                                    data-aos-easing="ease-in-out"
                                    data-aos-mirror="true"
                                    data-aos-once="false">

                                    <div class="ksdn-scope-icon">
                                        <i class="bi bi-globe2"></i>
                                    </div>

                                    <h3>
                                        HUBUNGAN INDUSTRIAL
                                    </h3>

                                    <p>
                                        Pengembangan kelembagaan dan penguatan
                                        hubungan industrial.
                                    </p>

                                </article>

                            </div>


                            <div class="col-lg-3 col-md-6">

                                <article class="ksdn-scope-card" data-aos="fade-up"
                                    data-aos-offset="50"
                                    data-aos-delay="0"
                                    data-aos-duration="500"
                                    data-aos-easing="ease-in-out"
                                    data-aos-mirror="true"
                                    data-aos-once="false">

                                    <div class="ksdn-scope-icon">
                                        <i class="bi bi-shield"></i>
                                    </div>

                                    <h3>
                                        PENGAWASAN &amp; DATA
                                    </h3>

                                    <p>
                                        Pengawasan ketenagakerjaan serta penguatan
                                        data dan sistem informasi.
                                    </p>

                                </article>

                            </div>

                        </div>

                    </section>

                </div>


                <!-- =================================================
                     TAB 2 - JENIS DOKUMEN
                ================================================== -->
                <div
                    class="tab-pane fade"
                    id="dokumen"
                    role="tabpanel"
                    aria-labelledby="dokumen-tab"
                    tabindex="0">

                    <section class="ksdn-section">

                        <div class="ksdn-section-heading text-center"
                            data-aos="fade-up"
                            data-aos-offset="50"
                            data-aos-delay="0"
                            data-aos-duration="500"
                            data-aos-easing="ease-in-out"
                            data-aos-mirror="false"
                            data-aos-once="false">
                            <h2>JENIS DOKUMEN KERJA SAMA</h2>
                        </div>


                        <div class="row g-4">

                            <!-- 1 -->
                            <div class="col-lg-6" data-aos="fade-right"
                                data-aos-offset="50"
                                data-aos-delay="0"
                                data-aos-duration="500"
                                data-aos-easing="ease-in-out"
                                data-aos-mirror="true"
                                data-aos-once="false">

                                <article class="ksdn-document-card is-blue">

                                    <div class="ksdn-document-title">

                                        <div class="ksdn-box-icon blue">
                                            <i class="bi bi-file-earmark-text"></i>
                                        </div>

                                        <h3>
                                            1. KESEPAHAMAN BERSAMA (MOU)
                                        </h3>

                                    </div>

                                    <p>
                                        Dokumen yang berisi kesepakatan bersama
                                        dan bersifat umum untuk melaksanakan
                                        kerja sama.
                                    </p>

                                    <div class="ksdn-document-note">
                                        <span>♨</span>
                                        Merujuk Pasal 1 angka 8 Permenaker
                                        No. 19 Tahun 2024
                                    </div>

                                </article>

                            </div>


                            <!-- 2 -->
                            <div class="col-lg-6" data-aos="fade-left"
                                data-aos-offset="50"
                                data-aos-delay="0"
                                data-aos-duration="500"
                                data-aos-easing="ease-in-out"
                                data-aos-mirror="true"
                                data-aos-once="false">

                                <article class="ksdn-document-card is-green">

                                    <div class="ksdn-document-title">

                                        <div class="ksdn-box-icon green">
                                            <i class="bi bi-suitcase-lg"></i>
                                        </div>

                                        <h3>
                                            2. PERJANJIAN KERJA SAMA (PKS)
                                        </h3>

                                    </div>

                                    <p>
                                        Dokumen yang berisi kesepakatan bersama
                                        dan bersifat teknis operasional untuk
                                        melaksanakan kerja sama.
                                    </p>

                                    <div class="ksdn-document-note">
                                        <span>♨</span>
                                        Merujuk Pasal 1 angka 9 Permenaker
                                        No. 19 Tahun 2024
                                    </div>

                                </article>

                            </div>


                            <!-- 3 -->
                            <div class="col-lg-6" data-aos="fade-right"
                                data-aos-offset="50"
                                data-aos-delay="0"
                                data-aos-duration="500"
                                data-aos-easing="ease-in-out"
                                data-aos-mirror="true"
                                data-aos-once="false">

                                <article class="ksdn-document-card is-gold">

                                    <div class="ksdn-document-title">

                                        <div class="ksdn-box-icon gold">
                                            <i class="bi bi-book"></i>
                                        </div>

                                        <h3>
                                            3. NOTA KESEPAKATAN
                                        </h3>

                                    </div>

                                    <p>
                                        Dokumen yang memuat kesepakatan antara
                                        Pemerintah Pusat dan Pemerintah Daerah
                                        atau antar Pemerintah Daerah yang bersifat
                                        teknis dan mengikat, sebagai tindak lanjut
                                        dari Kesepahaman Bersama.
                                    </p>

                                    <div class="ksdn-document-note">
                                        <span>♨</span>
                                        Merujuk Pasal 1 angka 11 Permendagri
                                        No. 22 Tahun 2020
                                    </div>

                                </article>

                            </div>


                            <!-- 4 -->
                            <div class="col-lg-6" data-aos="fade-left"
                                data-aos-offset="50"
                                data-aos-delay="0"
                                data-aos-duration="500"
                                data-aos-easing="ease-in-out"
                                data-aos-mirror="true"
                                data-aos-once="false">

                                <article class="ksdn-document-card is-purple">

                                    <div class="ksdn-document-title">

                                        <div class="ksdn-box-icon purple">
                                            <i class="bi bi-list-ul"></i>
                                        </div>

                                        <h3>
                                            4. RENCANA AKSI
                                        </h3>

                                    </div>

                                    <p>
                                        Dokumen operasional yang memuat sasaran
                                        strategis dan penjabaran rinci kegiatan
                                        kerja sama, digunakan sebagai acuan para
                                        pihak untuk melaksanakan, memantau, dan
                                        mengevaluasi capaian kerja sama.
                                    </p>

                                    <div class="ksdn-document-note">
                                        <span>💡</span>
                                        Sering disebut “Plan of Action”,
                                        “Joint Action Plan”, atau
                                        “Rencana Kerja Tahunan”.
                                    </div>

                                </article>

                            </div>


                            <!-- 5 -->
                            <div class="col-12" data-aos="fade-bottom"
                                data-aos-offset="50"
                                data-aos-delay="0"
                                data-aos-duration="500"
                                data-aos-easing="ease-in-out"
                                data-aos-mirror="true"
                                data-aos-once="false">

                                <article class="ksdn-document-card is-red   ">

                                    <div class="ksdn-document-title">

                                        <div class="ksdn-box-icon red">
                                            <i class="bi bi-lock"></i>
                                        </div>

                                        <h3>
                                            5. NON-DISCLOSURE AGREEMENT (NDA)
                                        </h3>

                                    </div>

                                    <p>
                                        Kontrak hukum antara para pihak yang
                                        terlibat kerja sama untuk melarang
                                        pengungkapan, penggunaan, atau penyebaran
                                        informasi rahasia yang diperoleh selama
                                        proses penjajakan, negosiasi, dan
                                        pelaksanaan kerja sama, di luar tujuan
                                        yang disepakati bersama.
                                    </p>

                                    <div class="ksdn-document-note">
                                        <span>⚠</span>
                                        Pelanggaran NDA dapat jadi dasar gugatan
                                        wanprestasi Pasal 1338 KUHPerdata dan
                                        tuntutan ganti rugi.
                                    </div>

                                </article>

                            </div>

                        </div>

                    </section>

                </div>


                <!-- =================================================
                     TAB 3 - PRA MOU
                ================================================== -->
                <div
                    class="tab-pane fade"
                    id="pra-mou"
                    role="tabpanel"
                    aria-labelledby="pra-mou-tab"
                    tabindex="0">

                    <section class="ksdn-section">

                        <!--
                            Ganti nama file ini sesuai asset Anda.
                            Simpan misalnya:
                            frontend/web/images/pra-mou-due-diligence.jpg
                        -->
                        <div class="ksdn-pra-image" data-aos="zoom-in"
                            data-aos-offset="200"
                            data-aos-delay="0"
                            data-aos-duration="500"
                            data-aos-easing="ease-in-out"
                            data-aos-mirror="false"
                            data-aos-once="false">

                            <?= Html::img(
                                '@web/images/Ilustrasi-tahap-pra-mou.png',
                                [
                                    'alt' => 'Due Diligence Sebelum Membangun Kerja Sama',
                                    'class' => 'img-fluid',
                                ]
                            ) ?>

                        </div>

                        <div data-aos="fade-up"
                            data-aos-offset="50"
                            data-aos-delay="0"
                            data-aos-duration="500"
                            data-aos-easing="ease-in-out"
                            data-aos-mirror="true"
                            data-aos-once="false">
                            <div class="ksdn-pra-heading text-center">

                                <h2>
                                    KNOW YOUR PARTNER SEBELUM DEAL!!
                                </h2>

                                <p>
                                    Sebelum Pembentukan MoU, lakukan 3 tahap awal
                                    ini untuk memitigasi risiko:
                                </p>

                            </div>

                            <div
                                class="ksdn-step-timeline"
                                id="ksdnStepTimeline">

                                <!-- GARIS TIMELINE -->
                                <div
                                    class="ksdn-step-line"
                                    aria-hidden="true">
                                    <span class="ksdn-step-line-progress"></span>
                                </div>


                                <!-- =====================================================
         STEP 1
    ====================================================== -->
                                <article
                                    class="ksdn-step-card step-blue"
                                    data-step-card>

                                    <span
                                        class="ksdn-step-marker"
                                        aria-hidden="true"></span>

                                    <div class="ksdn-step-title">

                                        <div class="ksdn-step-number">
                                            1
                                        </div>

                                        <h3>
                                            Due Diligence Mitra | Cek Profil &amp; Legalitas
                                        </h3>

                                    </div>

                                    <p>
                                        Ini fondasi utama. Jangan sampai MoU dengan
                                        mitra “fiktif”.
                                    </p>

                                    <ul>

                                        <li>
                                            <strong>Pelajari profil:</strong>
                                            Visi-misi, bidang usaha, rekam jejak proyek,
                                            struktur organisasi, reputasi di industri/media.
                                        </li>

                                        <li>
                                            <strong>Cek status legal:</strong>
                                            Pastikan berbadan hukum &amp; punya izin resmi.
                                            Verifikasi Akta Pendirian, NIB, NPWP, SIUP, dll.
                                            Cek ke AHU Online &amp; OSS.
                                        </li>

                                        <li>
                                            <strong>Cek status keuangan:</strong>
                                            Tidak sedang pailit/digugat
                                            (bisa via SIPP PN atau laporan keuangan publik).
                                        </li>

                                        <li>
                                            <strong>Cek daftar hitam:</strong>
                                            Pastikan tidak masuk blacklist LKPP,
                                            Bank Indonesia, atau Kementerian/Lembaga terkait.
                                        </li>

                                    </ul>

                                </article>


                                <!-- =====================================================
         STEP 2
    ====================================================== -->
                                <article
                                    class="ksdn-step-card step-gold"
                                    data-step-card>

                                    <span
                                        class="ksdn-step-marker"
                                        aria-hidden="true"></span>

                                    <div class="ksdn-step-title">

                                        <div class="ksdn-step-number">
                                            2
                                        </div>

                                        <h3>
                                            Analisis Kesesuaian &amp; Kapasitas Mitra
                                        </h3>

                                    </div>

                                    <p>
                                        Pastikan terdapat kesesuaian antara tujuan kerja sama
                                        dan kapasitas calon mitra.
                                    </p>

                                    <ul>

                                        <li>
                                            <strong>Keunggulan &amp; kompetensi:</strong>
                                            Identifikasi nilai tambah yang dapat diberikan
                                            serta kesesuaiannya dengan kebutuhan
                                            Kementerian/Lembaga.
                                        </li>

                                        <li>
                                            <strong>Kapasitas riil:</strong>
                                            Tinjau sumber daya manusia, teknologi,
                                            kemampuan finansial, jaringan, serta portofolio
                                            calon mitra.
                                        </li>

                                        <li>
                                            <strong>Rekam jejak:</strong>
                                            Telusuri pengalaman kerja sama sebelumnya
                                            dan potensi permasalahan yang pernah terjadi.
                                        </li>

                                        <li>
                                            <strong>Keselarasan nilai:</strong>
                                            Perhatikan budaya kerja, integritas,
                                            serta komitmen terhadap standar ketenagakerjaan
                                            dan lingkungan.
                                        </li>

                                    </ul>

                                </article>


                                <!-- =====================================================
         STEP 3
    ====================================================== -->
                                <article
                                    class="ksdn-step-card step-green"
                                    data-step-card>

                                    <span
                                        class="ksdn-step-marker"
                                        aria-hidden="true"></span>

                                    <div class="ksdn-step-title">

                                        <div class="ksdn-step-number">
                                            3
                                        </div>

                                        <h3>
                                            Penilaian Risiko Awal &amp; Persetujuan Internal
                                        </h3>

                                    </div>

                                    <ul>

                                        <li>
                                            <strong>Penilaian risiko:</strong>
                                            Identifikasi risiko hukum, reputasi,
                                            operasional, dan keuangan yang berpotensi
                                            timbul dalam pelaksanaan kerja sama.
                                        </li>

                                        <li>
                                            <strong>Persetujuan prinsip:</strong>
                                            Sampaikan hasil kajian kepada pimpinan
                                            untuk memperoleh persetujuan sebelum
                                            melanjutkan pembahasan teknis MoU.
                                        </li>

                                        <li>
                                            <strong>Cek konflik kepentingan:</strong>
                                            Pastikan tidak terdapat benturan dengan
                                            ketentuan internal maupun konflik kepentingan
                                            para pihak.
                                        </li>

                                    </ul>

                                </article>

                            </div>


                            <!-- ALERT -->
                            <div
                                class="ksdn-warning-box text-center"
                                data-aos="fade-up"
                                data-aos-offset="60"
                                data-aos-delay="100"
                                data-aos-duration="1000"
                                data-aos-easing="ease-out-cubic"
                                data-aos-mirror="true"
                                data-aos-once="false">

                                <strong>
                                    <i class="bi bi-exclamation-triangle-fill"></i>

                                    Intinya: Know Your Partner Dulu!
                                </strong>

                                <p>
                                    MoU itu mengikat. Kalau legalitas &amp; kapasitasnya
                                    bermasalah, risiko hukum &amp; reputasi akan ikut ke kita.

                                    <br>

                                    Due diligence di awal = mitigasi masalah di akhir.
                                </p>

                            </div>

                    </section>

                </div>

                <div class="ksdn-source">
                    <strong>Sumber:</strong>
                    Layanan Informasi Kerja Sama (LINKS)
                </div>
            </div>

        </div>
    </section>


    <!-- BACK TO TOP -->
    <button
        type="button"
        class="ksdn-back-top"
        id="ksdnBackTop"
        aria-label="Kembali ke atas">
        <i class="bi bi-chevron-up"></i>
    </button>

</div>


<?php

$js = <<<JS

const ksdnBackTop = document.getElementById('ksdnBackTop');

if (ksdnBackTop) {
    ksdnBackTop.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

JS;

$this->registerJs($js, \yii\web\View::POS_END);
?>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const canvas =
            document.getElementById('heroNetworkCanvas');

        if (!canvas) {
            return;
        }

        const section =
            canvas.closest('.hero-network-section');

        if (!section) {
            return;
        }

        const ctx =
            canvas.getContext('2d');

        if (!ctx) {
            return;
        }


        /* =========================================================
           CONFIGURATION
        ========================================================= */

        const CONFIG = {

            /* Jumlah titik */
            particleCount: {
                mobile: 55,
                tablet: 85,
                desktop: 120
            },

            /* Jarak maksimal garis */
            connectionDistance: {
                mobile: 95,
                desktop: 125
            },

            /* Kecepatan gerakan otomatis */
            particleSpeed: 1,

            /* Radius pengaruh cursor */
            mouseRadius: 235,

            /*
             * Kekuatan titik mengikuti cursor.
             * Naikkan jika ingin lebih agresif.
             */
            mouseParticleStrength: 18,

            /*
             * Kecepatan seluruh network mengikuti mouse.
             * 0.15 = lambat
             * 0.25 = sedang
             * 0.35 = cepat
             * 0.45 = sangat cepat
             */
            mouseFollowSpeed: 0.45,

            /* Jarak global network bergeser */
            globalMouseX: 10,
            globalMouseY: 10,

            /* Opacity garis */
            lineOpacity: 0.27,

            /* Area tenang di tengah */
            quietZoneX: 0.22,
            quietZoneY: 0.20,

            quietZoneProbability: 0.82
        };


        /* =========================================================
           STATE
        ========================================================= */

        const prefersReducedMotion =
            window.matchMedia(
                '(prefers-reduced-motion: reduce)'
            ).matches;


        let width = 0;
        let height = 0;

        let dpr =
            Math.min(
                window.devicePixelRatio || 1,
                2
            );

        let particles = [];

        let animationId = null;

        let resizeTimer = null;


        /* =========================================================
           MOUSE STATE
        ========================================================= */

        const mouse = {

            x: 0,
            y: 0,

            active: false,

            normalizedX: 0,
            normalizedY: 0
        };


        /*
         * Target = posisi yang ingin dicapai.
         * Current = posisi visual sekarang.
         *
         * Ini yang membuat gerakan cepat tetapi tetap smooth.
         */

        let targetOffsetX = 0;
        let targetOffsetY = 0;

        let currentOffsetX = 0;
        let currentOffsetY = 0;


        /* =========================================================
           RESIZE CANVAS
        ========================================================= */

        function resizeCanvas() {

            width =
                section.clientWidth;

            height =
                section.clientHeight;


            dpr =
                Math.min(
                    window.devicePixelRatio || 1,
                    2
                );


            canvas.width =
                Math.round(width * dpr);

            canvas.height =
                Math.round(height * dpr);


            canvas.style.width =
                width + 'px';

            canvas.style.height =
                height + 'px';


            ctx.setTransform(
                dpr,
                0,
                0,
                dpr,
                0,
                0
            );


            createParticles();
        }


        /* =========================================================
           QUIET ZONE
           Area tengah dibuat lebih sedikit titik.
        ========================================================= */

        function isInsideQuietZone(x, y) {

            const centerX =
                width * 0.5;

            const centerY =
                height * 0.42;


            const radiusX =
                width *
                CONFIG.quietZoneX;

            const radiusY =
                height *
                CONFIG.quietZoneY;


            const dx =
                (x - centerX) /
                radiusX;

            const dy =
                (y - centerY) /
                radiusY;


            return (
                dx * dx +
                dy * dy
            ) < 1;
        }


        /* =========================================================
           PARTICLE COUNT
        ========================================================= */

        function getParticleCount() {

            if (width < 576) {

                return CONFIG
                    .particleCount
                    .mobile;

            }


            if (width < 992) {

                return CONFIG
                    .particleCount
                    .tablet;

            }


            return CONFIG
                .particleCount
                .desktop;
        }


        /* =========================================================
           CREATE PARTICLES
        ========================================================= */

        function createParticles() {

            particles = [];


            const count =
                getParticleCount();


            let attempts = 0;

            const maxAttempts =
                count * 20;


            while (
                particles.length < count &&
                attempts < maxAttempts
            ) {

                attempts++;


                const x =
                    Math.random() *
                    width;

                const y =
                    Math.random() *
                    height;


                /*
                 * Kurangi titik di tengah.
                 */

                if (
                    isInsideQuietZone(x, y) &&
                    Math.random() <
                    CONFIG.quietZoneProbability
                ) {

                    continue;
                }


                /*
                 * Kecepatan random.
                 */

                const speed =
                    CONFIG.particleSpeed;


                particles.push({

                    x: x,
                    y: y,

                    vx: (
                        Math.random() -
                        0.5
                    ) * speed,

                    vy: (
                        Math.random() -
                        0.5
                    ) * speed,


                    /*
                     * Posisi yang benar-benar
                     * digambar ke canvas.
                     */

                    drawX: x,
                    drawY: y,


                    size: Math.random() *
                        1.6 +
                        1.25,

                    alpha: Math.random() *
                        0.32 +
                        0.30
                });

            }

        }


        /* =========================================================
           BACKGROUND GLOW
        ========================================================= */

        function drawBackgroundGlow() {

            const gradient =
                ctx.createRadialGradient(

                    width * 0.5,
                    height * 0.42,
                    0,

                    width * 0.5,
                    height * 0.42,

                    width * 0.40
                );


            gradient.addColorStop(
                0,
                'rgba(14, 78, 131, 0.04)'
            );


            gradient.addColorStop(
                0.55,
                'rgba(10, 51, 89, 0.025)'
            );


            gradient.addColorStop(
                1,
                'rgba(4, 19, 34, 0)'
            );


            ctx.fillStyle =
                gradient;


            ctx.fillRect(
                0,
                0,
                width,
                height
            );

        }


        /* =========================================================
           UPDATE GLOBAL MOUSE OFFSET
        ========================================================= */

        function updateMouseOffset() {

            /*
             * Nilai besar = jaringan lebih cepat
             * mengejar posisi mouse.
             */

            const followSpeed =
                CONFIG.mouseFollowSpeed;


            currentOffsetX +=
                (
                    targetOffsetX -
                    currentOffsetX
                ) *
                followSpeed;


            currentOffsetY +=
                (
                    targetOffsetY -
                    currentOffsetY
                ) *
                followSpeed;
        }


        /* =========================================================
           UPDATE PARTICLES
        ========================================================= */

        function updateParticles() {

            updateMouseOffset();


            particles.forEach(function(particle) {

                /* =============================================
                   AUTOMATIC MOVEMENT
                ============================================== */

                particle.x +=
                    particle.vx;

                particle.y +=
                    particle.vy;


                /* =============================================
                   SCREEN BOUNDARY
                ============================================== */

                if (particle.x < 0) {

                    particle.x = 0;
                    particle.vx *= -1;

                } else if (
                    particle.x > width
                ) {

                    particle.x = width;
                    particle.vx *= -1;

                }


                if (particle.y < 0) {

                    particle.y = 0;
                    particle.vy *= -1;

                } else if (
                    particle.y > height
                ) {

                    particle.y = height;
                    particle.vy *= -1;

                }


                /* =============================================
                   GLOBAL MOUSE MOVEMENT
                ============================================== */

                let desiredX =
                    particle.x +
                    currentOffsetX;

                let desiredY =
                    particle.y +
                    currentOffsetY;


                /* =============================================
                   LOCAL MOUSE INTERACTION
                ============================================== */

                if (mouse.active) {

                    const dx =
                        mouse.x -
                        desiredX;

                    const dy =
                        mouse.y -
                        desiredY;


                    const distance =
                        Math.sqrt(
                            dx * dx +
                            dy * dy
                        );


                    if (
                        distance <
                        CONFIG.mouseRadius
                    ) {

                        /*
                         * 1 saat sangat dekat mouse.
                         * 0 saat di batas radius.
                         */

                        const influence =
                            1 -
                            (
                                distance /
                                CONFIG.mouseRadius
                            );


                        /*
                         * Smooth falloff.
                         * Membuat efek lebih premium.
                         */

                        const smoothInfluence =
                            influence *
                            influence *
                            (
                                3 -
                                2 *
                                influence
                            );


                        /*
                         * Node sedikit tertarik
                         * ke arah cursor.
                         */

                        if (distance > 0) {

                            const directionX =
                                dx /
                                distance;

                            const directionY =
                                dy /
                                distance;


                            desiredX +=
                                directionX *
                                smoothInfluence *
                                CONFIG.mouseParticleStrength;


                            desiredY +=
                                directionY *
                                smoothInfluence *
                                CONFIG.mouseParticleStrength;

                        }

                    }

                }


                /*
                 * drawX / drawY dibuat sangat responsif.
                 *
                 * 0.45 = smooth
                 * 0.65 = cepat
                 * 0.8  = sangat cepat
                 */

                const visualFollow =
                    mouse.active ?
                    0.68 :
                    0.22;


                particle.drawX +=
                    (
                        desiredX -
                        particle.drawX
                    ) *
                    visualFollow;


                particle.drawY +=
                    (
                        desiredY -
                        particle.drawY
                    ) *
                    visualFollow;

            });

        }


        /* =========================================================
           DRAW CONNECTION LINES
        ========================================================= */

        function drawLines() {

            const maxDistance =
                width < 768 ?
                CONFIG
                .connectionDistance
                .mobile :
                CONFIG
                .connectionDistance
                .desktop;


            for (
                let i = 0; i < particles.length; i++
            ) {

                const p1 =
                    particles[i];


                for (
                    let j = i + 1; j < particles.length; j++
                ) {

                    const p2 =
                        particles[j];


                    const dx =
                        p1.drawX -
                        p2.drawX;

                    const dy =
                        p1.drawY -
                        p2.drawY;


                    const distanceSquared =
                        dx * dx +
                        dy * dy;


                    const maxDistanceSquared =
                        maxDistance *
                        maxDistance;


                    /*
                     * Lebih hemat daripada sqrt()
                     * untuk semua pasangan titik.
                     */

                    if (
                        distanceSquared >
                        maxDistanceSquared
                    ) {

                        continue;

                    }


                    const distance =
                        Math.sqrt(
                            distanceSquared
                        );


                    let opacity =
                        (
                            1 -
                            distance /
                            maxDistance
                        ) *
                        CONFIG.lineOpacity;


                    /*
                     * Garis dekat mouse sedikit
                     * lebih terang.
                     */

                    if (mouse.active) {

                        const middleX =
                            (
                                p1.drawX +
                                p2.drawX
                            ) / 2;

                        const middleY =
                            (
                                p1.drawY +
                                p2.drawY
                            ) / 2;


                        const mouseDx =
                            mouse.x -
                            middleX;

                        const mouseDy =
                            mouse.y -
                            middleY;


                        const mouseDistance =
                            Math.sqrt(
                                mouseDx *
                                mouseDx +
                                mouseDy *
                                mouseDy
                            );


                        if (
                            mouseDistance <
                            CONFIG.mouseRadius
                        ) {

                            opacity *= 1.35;

                        }

                    }


                    ctx.beginPath();


                    ctx.moveTo(
                        p1.drawX,
                        p1.drawY
                    );


                    ctx.lineTo(
                        p2.drawX,
                        p2.drawY
                    );


                    ctx.strokeStyle =
                        `rgba(
                        94,
                        215,
                        255,
                        ${opacity}
                    )`;


                    ctx.lineWidth = 1;


                    ctx.stroke();

                }

            }

        }


        /* =========================================================
           DRAW PARTICLES
        ========================================================= */

        function drawParticles() {

            particles.forEach(
                function(particle) {

                    let size =
                        particle.size;

                    let alpha =
                        particle.alpha;


                    /*
                     * Titik dekat cursor
                     * sedikit membesar/terang.
                     */

                    if (mouse.active) {

                        const dx =
                            mouse.x -
                            particle.drawX;

                        const dy =
                            mouse.y -
                            particle.drawY;


                        const distance =
                            Math.sqrt(
                                dx * dx +
                                dy * dy
                            );


                        if (
                            distance <
                            CONFIG.mouseRadius
                        ) {

                            const influence =
                                1 -
                                distance /
                                CONFIG.mouseRadius;


                            size +=
                                influence *
                                1.3;


                            alpha +=
                                influence *
                                0.25;

                        }

                    }


                    ctx.beginPath();


                    ctx.arc(
                        particle.drawX,
                        particle.drawY,
                        size,
                        0,
                        Math.PI * 2
                    );


                    ctx.fillStyle =
                        `rgba(
                        125,
                        229,
                        255,
                        ${Math.min(alpha, 0.95)}
                    )`;


                    ctx.shadowBlur =
                        9;


                    ctx.shadowColor =
                        'rgba(81, 211, 255, 0.40)';


                    ctx.fill();


                    ctx.shadowBlur =
                        0;

                }
            );

        }


        /* =========================================================
           ANIMATION LOOP
        ========================================================= */

        function animate() {

            ctx.clearRect(
                0,
                0,
                width,
                height
            );


            drawBackgroundGlow();

            updateParticles();

            drawLines();

            drawParticles();


            animationId =
                requestAnimationFrame(
                    animate
                );

        }


        /* =========================================================
           MOUSE / POINTER MOVE
        ========================================================= */

        function handlePointerMove(event) {

            const rect =
                section.getBoundingClientRect();


            mouse.x =
                event.clientX -
                rect.left;


            mouse.y =
                event.clientY -
                rect.top;


            mouse.active =
                true;


            /*
             * Nilai -1 sampai +1
             */

            mouse.normalizedX =
                (
                    mouse.x /
                    width -
                    0.5
                ) * 2;


            mouse.normalizedY =
                (
                    mouse.y /
                    height -
                    0.5
                ) * 2;


            /*
             * Seluruh jaringan mengikuti mouse.
             *
             * Minus = terasa seperti kamera/parallax.
             * Hilangkan minus kalau ingin jaringan
             * bergerak searah cursor.
             */

            targetOffsetX =
                mouse.normalizedX *
                CONFIG.globalMouseX;


            targetOffsetY =
                mouse.normalizedY *
                CONFIG.globalMouseY;

        }


        /* =========================================================
           POINTER LEAVE
        ========================================================= */

        function handlePointerLeave() {

            mouse.active =
                false;


            targetOffsetX =
                0;


            targetOffsetY =
                0;

        }


        /*
         * Event dipasang ke SECTION,
         * bukan ke canvas.
         *
         * Jadi mouse tetap terbaca ketika berada
         * di atas judul, tombol atau content hero.
         */

        section.addEventListener(
            'pointermove',
            handlePointerMove, {
                passive: true
            }
        );


        section.addEventListener(
            'pointerleave',
            handlePointerLeave
        );


        /* =========================================================
           WINDOW RESIZE
        ========================================================= */

        window.addEventListener(
            'resize',
            function() {

                clearTimeout(
                    resizeTimer
                );


                resizeTimer =
                    setTimeout(
                        function() {

                            if (animationId) {

                                cancelAnimationFrame(
                                    animationId
                                );

                            }


                            resizeCanvas();


                            if (
                                !prefersReducedMotion
                            ) {

                                animate();

                            } else {

                                drawBackgroundGlow();
                                drawLines();
                                drawParticles();

                            }

                        },
                        150
                    );

            }
        );


        /* =========================================================
           INITIALIZE
        ========================================================= */

        resizeCanvas();


        if (!prefersReducedMotion) {

            animate();

        } else {

            drawBackgroundGlow();
            drawLines();
            drawParticles();

        }

    });
</script>

<?php

$aosJs = <<<'JS'

document.addEventListener('DOMContentLoaded', function () {

    if (typeof AOS === 'undefined') {
        return;
    }


    /* =========================================================
       AOS GLOBAL
    ========================================================= */

    AOS.init({
        duration: 1200,
        easing: 'ease-in-out',
        offset: 50,
        delay: 0,

        once: false,
        mirror: false,

        anchorPlacement: 'top-bottom'
    });


    /* =========================================================
       BOOTSTRAP TAB + REPLAY AOS
    ========================================================= */

    const tabButtons =
        document.querySelectorAll(
            '[data-bs-toggle="tab"]'
        );


    tabButtons.forEach(function (button) {


        /* =====================================================
           SEBELUM TAB DITAMPILKAN
           Reset AOS saat tab masih hidden.
        ====================================================== */

        button.addEventListener(
            'show.bs.tab',
            function (event) {

                const targetSelector =
                    event.target.getAttribute(
                        'data-bs-target'
                    );


                if (!targetSelector) {
                    return;
                }


                const targetPane =
                    document.querySelector(
                        targetSelector
                    );


                if (!targetPane) {
                    return;
                }


                const aosElements =
                    targetPane.querySelectorAll(
                        '[data-aos]'
                    );


                aosElements.forEach(
                    function (element) {

                        element.classList.remove(
                            'aos-animate'
                        );

                    }
                );

            }
        );


        /* =====================================================
           SETELAH TAB SUDAH TERBUKA
        ====================================================== */

        button.addEventListener(
            'shown.bs.tab',
            function (event) {

                const targetSelector =
                    event.target.getAttribute(
                        'data-bs-target'
                    );


                if (!targetSelector) {
                    return;
                }


                const targetPane =
                    document.querySelector(
                        targetSelector
                    );


                if (!targetPane) {
                    return;
                }


                /*
                 * Hitung ulang posisi AOS karena sebelumnya
                 * tab masih display:none.
                 */
                AOS.refreshHard();


                const aosElements =
                    targetPane.querySelectorAll(
                        '[data-aos]'
                    );


                /*
                 * RefreshHard kadang langsung menambahkan
                 * aos-animate karena elemen sudah berada
                 * dalam viewport.
                 *
                 * Maka reset sekali lagi.
                 */
                aosElements.forEach(
                    function (element) {

                        element.classList.remove(
                            'aos-animate'
                        );

                    }
                );


                /*
                 * Force browser membaca layout baru.
                 */
                void targetPane.offsetHeight;


                /*
                 * Replay AOS.
                 */
                requestAnimationFrame(
                    function () {

                        aosElements.forEach(
                            function (
                                element,
                                index
                            ) {

                                /*
                                 * Sedikit stagger supaya
                                 * animasi lebih elegan.
                                 */
                                setTimeout(
                                    function () {

                                        element.classList.add(
                                            'aos-animate'
                                        );

                                    },
                                    index * 90
                                );

                            }
                        );

                    }
                );

            }
        );

    });

});

JS;


$this->registerJs(
    $aosJs,
    \yii\web\View::POS_END
);

?>

<?php

$tabSliderJs = <<<'JS'

document.addEventListener('DOMContentLoaded', function () {

    const tabs =
        document.getElementById('ksdnTab');

    if (!tabs) {
        return;
    }


    /* =====================================================
       UPDATE SLIDING FRAME
    ====================================================== */

    function updateTabIndicator(button) {

    if (!button) {
        return;
    }

    const tabsRect =
        tabs.getBoundingClientRect();

    const buttonRect =
        button.getBoundingClientRect();

    const left =
        buttonRect.left -
        tabsRect.left +
        tabs.scrollLeft;

    const width =
        buttonRect.width;

    const height =
        buttonRect.height;


    tabs.style.setProperty(
        '--tab-indicator-left',
        left + 'px'
    );

    tabs.style.setProperty(
        '--tab-indicator-width',
        width + 'px'
    );

    tabs.style.setProperty(
        '--tab-indicator-height',
        height + 'px'
    );
}


    /* =====================================================
       INITIAL ACTIVE TAB
    ====================================================== */

    function setInitialIndicator() {

        const activeButton =
            tabs.querySelector(
                '.nav-link.active'
            );

        updateTabIndicator(
            activeButton,
            false
        );

    }


    requestAnimationFrame(
        setInitialIndicator
    );


    /*
     * Jalankan lagi setelah seluruh font / asset selesai dimuat.
     * Ini menjaga ukuran frame tetap presisi.
     */
    window.addEventListener(
        'load',
        setInitialIndicator,
        {
            once: true
        }
    );


    /* =====================================================
       BOOTSTRAP TAB
       "show" dipakai agar frame mulai bergerak segera
       ketika user mengklik tab.
    ====================================================== */

    const buttons =
        tabs.querySelectorAll(
            '[data-bs-toggle="tab"]'
        );


    buttons.forEach(function (button) {

        button.addEventListener(
            'show.bs.tab',
            function (event) {

                updateTabIndicator(
                    event.target,
                    true
                );

            }
        );


        /*
         * Hitung ulang sesudah Bootstrap selesai mengganti tab.
         */
        button.addEventListener(
            'shown.bs.tab',
            function (event) {

                requestAnimationFrame(function () {

                    updateTabIndicator(
                        event.target,
                        true
                    );

                });

            }
        );

    });


    /* =====================================================
       WINDOW RESIZE
    ====================================================== */

    let resizeTimer = null;


    window.addEventListener(
        'resize',
        function () {

            clearTimeout(
                resizeTimer
            );


            resizeTimer =
                setTimeout(
                    function () {

                        const activeButton =
                            tabs.querySelector(
                                '.nav-link.active'
                            );


                        updateTabIndicator(
                            activeButton,
                            false
                        );

                    },
                    120
                );

        }
    );


    /* =====================================================
       HORIZONTAL SCROLL - MOBILE
    ====================================================== */

    let scrollFrame = null;


    tabs.addEventListener(
        'scroll',
        function () {

            if (scrollFrame) {
                cancelAnimationFrame(
                    scrollFrame
                );
            }


            scrollFrame =
                requestAnimationFrame(
                    function () {

                        const activeButton =
                            tabs.querySelector(
                                '.nav-link.active'
                            );


                        updateTabIndicator(
                            activeButton,
                            true
                        );

                    }
                );

        },
        {
            passive: true
        }
    );

});
document.addEventListener('DOMContentLoaded', function () {

    const counters =
        document.querySelectorAll('.ksdn-counter');

    if (!counters.length) {
        return;
    }


    function animateCounter(element) {

        const target =
            parseInt(
                element.dataset.target,
                10
            );

        const duration = 3000;

        let startTime = null;


        function updateCounter(timestamp) {

            if (!startTime) {
                startTime = timestamp;
            }


            const elapsed =
                timestamp - startTime;


            const progress =
                Math.min(
                    elapsed / duration,
                    1
                );


            /*
             * Ease-out supaya awal cepat,
             * lalu melambat ketika mendekati angka akhir.
             */
            const easedProgress =
                1 -
                Math.pow(
                    1 - progress,
                    3
                );


            const current =
                Math.floor(
                    easedProgress *
                    target
                );


            element.textContent =
                current.toLocaleString('id-ID');


            if (progress < 1) {

                requestAnimationFrame(
                    updateCounter
                );

            } else {

                element.textContent =
                    target.toLocaleString('id-ID');

            }

        }


        requestAnimationFrame(
            updateCounter
        );

    }


    const observer =
        new IntersectionObserver(
            function (entries, observer) {

                entries.forEach(
                    function (entry) {

                        if (
                            entry.isIntersecting &&
                            !entry.target.classList.contains(
                                'counter-started'
                            )
                        ) {

                            entry.target.classList.add(
                                'counter-started'
                            );


                            animateCounter(
                                entry.target
                            );


                            /*
                             * Hanya animasi 1 kali.
                             */
                            observer.unobserve(
                                entry.target
                            );

                        }

                    }
                );

            },
            {
                threshold: 0.45
            }
        );


    counters.forEach(
        function (counter) {

            observer.observe(
                counter
            );

        }
    );

});

JS;


$this->registerJs(
    $tabSliderJs,
    \yii\web\View::POS_END
);

?>

<?php

$stepTimelineJs = <<<'JS'

document.addEventListener(
    'DOMContentLoaded',
    function () {

        const timeline =
            document.getElementById(
                'ksdnStepTimeline'
            );

        if (!timeline) {
            return;
        }


        const cards =
            Array.from(
                timeline.querySelectorAll(
                    '[data-step-card]'
                )
            );


        let ticking = false;

        /*
         * Untuk mengetahui arah scroll:
         * turun atau naik.
         */
        let lastScrollY =
            window.scrollY;


        /* =====================================================
           UPDATE TIMELINE
        ====================================================== */

        function updateTimeline() {

            ticking = false;


            /*
             * Jangan hitung saat tab Pra-MoU
             * masih display:none.
             */
            if (!timeline.offsetParent) {
                return;
            }


            const currentScrollY =
                window.scrollY;


            /*
             * Tentukan arah scroll.
             */
            const isScrollingDown =
                currentScrollY >=
                lastScrollY;


            const isScrollingUp =
                currentScrollY <
                lastScrollY;


            lastScrollY =
                currentScrollY;


            const rect =
                timeline.getBoundingClientRect();


            const viewportHeight =
                window.innerHeight;


            /*
             * Posisi ujung virtual timeline
             * di dalam viewport.
             */
            const triggerY =
                viewportHeight * 0.68;


            /*
             * Harus sama dengan top/bottom
             * pada .ksdn-step-line.
             */
            const lineTop =
                rect.top + 40;


            const lineBottom =
                rect.bottom - 40;


            const totalHeight =
                Math.max(
                    lineBottom - lineTop,
                    1
                );


            /* =================================================
               VERTICAL LINE PROGRESS
            ================================================== */

            let progress =
                (
                    triggerY -
                    lineTop
                ) /
                totalHeight;


            progress =
                Math.max(
                    0,
                    Math.min(
                        progress,
                        1
                    )
                );


            /*
             * Tidak memakai maxProgress lagi.
             *
             * Scroll turun:
             * progress membesar.
             *
             * Scroll naik:
             * progress mengecil.
             */
            timeline.style.setProperty(
                '--timeline-progress',
                progress
            );


            /* =================================================
               CARDS
            ================================================== */

            cards.forEach(
                function (card) {

                    const cardRect =
                        card.getBoundingClientRect();


                    /*
                     * Titik marker berada sekitar
                     * 40px dari atas card.
                     */
                    const revealPoint =
                        cardRect.top + 40;


                    /* =========================================
                       SCROLL TURUN
                    ========================================== */

                    if (isScrollingDown) {

                        /*
                         * Card baru dibuka ketika
                         * garis mencapai titik card.
                         *
                         * Card sebelumnya tidak ditutup.
                         */
                        if (
                            revealPoint <=
                            triggerY
                        ) {

                            card.classList.add(
                                'is-visible'
                            );

                        }

                    }


                    /* =========================================
                       SCROLL NAIK
                    ========================================== */

                    if (isScrollingUp) {

                        /*
                         * Ketika titik card kembali
                         * berada di bawah trigger,
                         * card ditutup.
                         *
                         * Urutannya otomatis:
                         *
                         * Step 3
                         * Step 2
                         * Step 1
                         */
                        if (
                            revealPoint >
                            triggerY
                        ) {

                            card.classList.remove(
                                'is-visible'
                            );

                        } else {

                            /*
                             * Card yang masih berada
                             * di atas trigger tetap terbuka.
                             */
                            card.classList.add(
                                'is-visible'
                            );

                        }

                    }

                }
            );

        }


        /* =====================================================
           REQUEST ANIMATION FRAME
        ====================================================== */

        function requestUpdate() {

            if (ticking) {
                return;
            }


            ticking = true;


            requestAnimationFrame(
                updateTimeline
            );

        }


        /* =====================================================
           SCROLL
        ====================================================== */

        window.addEventListener(
            'scroll',
            requestUpdate,
            {
                passive: true
            }
        );


        /* =====================================================
           RESIZE
        ====================================================== */

        window.addEventListener(
            'resize',
            requestUpdate
        );


        /* =====================================================
           BOOTSTRAP TAB
        ====================================================== */

        const praMouTab =
            document.getElementById(
                'pra-mou-tab'
            );


        if (praMouTab) {

            praMouTab.addEventListener(
                'shown.bs.tab',
                function () {

                    /*
                     * Reset posisi scroll reference
                     * supaya tidak salah membaca arah.
                     */
                    lastScrollY =
                        window.scrollY;


                    requestAnimationFrame(
                        function () {

                            requestUpdate();

                        }
                    );

                }
            );

        }


        /* =====================================================
           INITIAL
        ====================================================== */

        requestUpdate();

    }
);

JS;


$this->registerJs(
    $stepTimelineJs,
    \yii\web\View::POS_END
);

?>