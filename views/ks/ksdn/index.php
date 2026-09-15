<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<div class="ksdn-page">

    <!-- =========================================================
         HERO
    ========================================================== -->
    <section class="ksdn-hero">
        <div class="container">

            <div class="ksdn-hero-content text-center">

                <h1 class="ksdn-hero-title">
                    Kerja Sama Dalam Negeri
                </h1>

                <p class="ksdn-hero-description">
                    Suatu kegiatan yang melibatkan interaksi Kementerian dengan
                    kementerian/lembaga, Pemerintah Daerah, dan Mitra Pembangunan
                    untuk saling memberi manfaat dalam mencapai tujuan bersama
                    dan dilakukan secara bersama-sama
                </p>

                <a href="#" class="ksdn-regulation">
                    <i class="bi bi-journal"></i>
                    <span>Permenaker RI No. 19 Tahun 2024</span>
                </a>

            </div>


            <div class="row g-4 ksdn-strategic-row">

                <!-- Tujuan -->
                <div class="col-lg-6">
                    <article class="ksdn-strategic-card">

                        <div class="ksdn-strategic-heading">

                            <div class="ksdn-strategic-icon is-blue">
                                <i class="bi bi-bullseye"></i>
                            </div>

                            <h2>
                                TUJUAN STRATEGIS
                            </h2>

                        </div>

                        <p>
                            “Memperkuat sinergi dan kolaborasi kerja sama dalam
                            negeri secara efektif dan akuntabel guna mendukung
                            pembangunan ketenagakerjaan yang berkelanjutan.”
                        </p>

                    </article>
                </div>


                <!-- Sektor -->
                <div class="col-lg-6">
                    <article class="ksdn-strategic-card">

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
                            industrial, pengawasan ketenagakerjaan, produktivitas,
                            serta data dan sistem ketenagakerjaan.”
                        </p>

                    </article>
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
            <div class="ksdn-tabs-wrapper">

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

                        <div class="ksdn-section-heading text-center">

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
                            <div class="col-lg-4 col-md-6">

                                <article class="ksdn-partner-card">

                                    <div class="ksdn-card-heading">

                                        <div class="ksdn-box-icon blue">
                                            <i class="bi bi-building"></i>
                                        </div>

                                        <h3>
                                            KEMENTERIAN / LEMBAGA
                                        </h3>

                                    </div>

                                    <div class="ksdn-partner-stat">

                                        <strong class="blue-text">
                                            43
                                        </strong>

                                        <span>
                                            MITRA AKTIF
                                        </span>

                                    </div>

                                    <p>
                                        Kementerian yang menyelenggarakan urusan
                                        pemerintahan di bidang ketenagakerjaan.
                                    </p>

                                </article>

                            </div>


                            <!-- Pemerintah Daerah -->
                            <div class="col-lg-4 col-md-6">

                                <article class="ksdn-partner-card">

                                    <div class="ksdn-card-heading">

                                        <div class="ksdn-box-icon green">
                                            <i class="bi bi-geo-alt"></i>
                                        </div>

                                        <h3>
                                            PEMERINTAH DAERAH
                                        </h3>

                                    </div>

                                    <div class="ksdn-partner-stat">

                                        <strong class="green-text">
                                            30
                                        </strong>

                                        <span>
                                            MITRA AKTIF
                                        </span>

                                    </div>

                                    <p>
                                        Kepala daerah sebagai unsur penyelenggara
                                        pemerintah daerah yang memimpin pelaksanaan
                                        urusan pemerintahan.
                                    </p>

                                </article>

                            </div>


                            <!-- Mitra Pembangunan -->
                            <div class="col-lg-4 col-md-6">

                                <article class="ksdn-partner-card">

                                    <div class="ksdn-card-heading">

                                        <div class="ksdn-box-icon gold">
                                            <i class="bi bi-people"></i>
                                        </div>

                                        <h3>
                                            MITRA PEMBANGUNAN
                                        </h3>

                                    </div>

                                    <div class="ksdn-partner-stat">

                                        <strong class="gold-text">
                                            139
                                        </strong>

                                        <span>
                                            MITRA AKTIF
                                        </span>

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

                        <div class="ksdn-section-heading text-center">

                            <h2>CAKUPAN KOLABORASI</h2>

                            <p>
                                Fokus ruang lingkup pelaksanaan kerja sama diarahkan
                                pada aspek-aspek esensial guna menciptakan ekosistem
                                ketenagakerjaan yang tangguh dan adaptif.
                            </p>

                        </div>


                        <div class="row g-3 g-lg-4">

                            <div class="col-lg-3 col-md-6">

                                <article class="ksdn-scope-card">

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

                                <article class="ksdn-scope-card">

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

                                <article class="ksdn-scope-card">

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

                                <article class="ksdn-scope-card">

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


                    <div class="ksdn-source">
                        <strong>Sumber:</strong>
                        Layanan Informasi Kerja Sama (LINKS)
                    </div>

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

                        <div class="ksdn-section-heading text-center">
                            <h2>JENIS DOKUMEN KERJA SAMA</h2>
                        </div>


                        <div class="row g-4">

                            <!-- 1 -->
                            <div class="col-lg-6">

                                <article class="ksdn-document-card">

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
                            <div class="col-lg-6">

                                <article class="ksdn-document-card">

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
                            <div class="col-lg-6">

                                <article class="ksdn-document-card">

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
                            <div class="col-lg-6">

                                <article class="ksdn-document-card">

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
                            <div class="col-12">

                                <article class="ksdn-document-card">

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
                        <div class="ksdn-pra-image">

                            <?= Html::img(
                                '@web/images/Ilustrasi-tahap-pra-mou.png',
                                [
                                    'alt' => 'Due Diligence Sebelum Membangun Kerja Sama',
                                    'class' => 'img-fluid',
                                ]
                            ) ?>

                        </div>


                        <div class="ksdn-pra-heading text-center">

                            <h2>
                                KNOW YOUR PARTNER SEBELUM DEAL!!
                            </h2>

                            <p>
                                Sebelum Pembentukan MoU, lakukan 3 tahap awal
                                ini untuk memitigasi risiko:
                            </p>

                        </div>


                        <!-- STEP 1 -->
                        <article class="ksdn-step-card step-blue">

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


                        <!-- STEP 2 -->
                        <article class="ksdn-step-card step-gold">

                            <div class="ksdn-step-title">

                                <div class="ksdn-step-number">
                                    2
                                </div>

                                <h3>
                                    Analisis Kesesuaian &amp; Kapasitas Mitra
                                </h3>

                            </div>

                            <p>
                                Pastikan “klik” secara tujuan dan kemampuan.
                            </p>

                            <ul>
                                <li>
                                    <strong>Keunggulan &amp; kompetensi:</strong>
                                    Apa value yang dibawa? Sesuai dengan kebutuhan
                                    Kementerian/Lembaga?
                                </li>

                                <li>
                                    <strong>Kapasitas riil:</strong>
                                    Cek SDM, teknologi, finansial, jaringan.
                                    Jangan cuma lihat proposal. Minta portofolio mereka.
                                </li>

                                <li>
                                    <strong>Track record:</strong>
                                    Pernah bermasalah dengan mitra lain?
                                    Cek testimoni.
                                </li>

                                <li>
                                    <strong>Keselarasan nilai:</strong>
                                    Budaya kerja, integritas, komitmen terhadap
                                    standar kerja/lingkungan.
                                </li>
                            </ul>

                        </article>


                        <!-- STEP 3 -->
                        <article class="ksdn-step-card step-green">

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
                                    <strong>Risk assessment:</strong>
                                    Identifikasi risiko hukum, reputasi,
                                    operasional, keuangan jika kerja sama berjalan.
                                </li>

                                <li>
                                    <strong>Persetujuan prinsip:</strong>
                                    Sampaikan hasil kajian ke pimpinan untuk mendapat
                                    <em>green light</em> sebelum lanjut ke pembahasan
                                    teknis MoU.
                                </li>

                                <li>
                                    <strong>Cek konflik kepentingan:</strong>
                                    Pastikan tidak ada benturan dengan aturan
                                    internal atau relasi pribadi.
                                </li>
                            </ul>

                        </article>


                        <!-- ALERT -->
                        <div class="ksdn-warning-box text-center">

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


                        <div class="ksdn-source">
                            <strong>Sumber:</strong>
                            Layanan Informasi Kerja Sama (LINKS)
                        </div>

                    </section>

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