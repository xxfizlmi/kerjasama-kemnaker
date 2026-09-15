<?php

use yii\helpers\Html;
use yii\helpers\Url;

$baseUrl = Yii::$app->request->baseUrl;


$this->registerCssFile(
    $baseUrl . '/css/events/inpassing.css'
);

$this->registerJsFile(
    $baseUrl . '/js/inpassing.js',
    [
        'position' => \yii\web\View::POS_END,
    ]
);

$this->title = 'Inpassing JFAKS';

$viewCount = 637;

/*
|--------------------------------------------------------------------------
| File / media
|--------------------------------------------------------------------------
| Sesuaikan nama file dengan folder project Anda.
*/

$panduanPdf = $baseUrl . '/files/inpassing/panduan-siaks.pdf';

$videoRegistrasi =
    $baseUrl . '/videos/inpassing/registrasi.mp4';

$videoResetPassword =
    $baseUrl . '/videos/inpassing/reset-password.mp4';

$videoPengajuan =
    $baseUrl . '/videos/inpassing/pengajuan-inpassing.mp4';

?>

<div class="inpassing-page">

    <div class="container">

        <!-- =====================================================
             1. HEADER PENGUMUMAN
        ====================================================== -->
        <section class="inpassing-header-card">

            <div class="inpassing-header-title">

                <i class="bi bi-megaphone-fill"></i>

                <span>
                    PENGUMUMAN
                </span>

            </div>


            <h1 class="inpassing-main-title">
                Pelaksanaan Penyesuaian/Inpassing Jabatan Fungsional
                Analis Kerja Sama (JFAKS)
            </h1>


            <p class="inpassing-agency">
                Kementerian Ketenagakerjaan Republik Indonesia
            </p>


            <div class="inpassing-header-divider"></div>


            <div class="inpassing-header-meta">

                <span>
                    Tanggal Rilis: 2 April 2026
                </span>


                <span class="inpassing-view-count">

                    <i class="bi bi-eye-fill"></i>

                    <?= Html::encode($viewCount) ?> Kali Dilihat

                </span>

            </div>

        </section>


        <!-- =====================================================
             2. MAIN LAYOUT
        ====================================================== -->
        <div class="row g-4 align-items-start">

            <!-- =================================================
                 LEFT CONTENT
            ================================================== -->
            <div class="col-lg-8">

                <!-- =============================================
                     TABS
                ============================================== -->
                <div class="inpassing-tabs-wrapper">

                    <ul
                        class="nav nav-tabs inpassing-tabs"
                        id="inpassingTabs"
                        role="tablist">

                        <!-- Informasi -->
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

                                <span>
                                    Informasi
                                </span>
                            </button>

                        </li>


                        <!-- Jumlah Formasi -->
                        <li class="nav-item" role="presentation">

                            <button
                                class="nav-link"
                                id="formasi-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#formasi"
                                type="button"
                                role="tab"
                                aria-controls="formasi"
                                aria-selected="false">
                                <i class="bi bi-bar-chart-fill"></i>

                                <span>
                                    Jumlah<br>Formasi
                                </span>
                            </button>

                        </li>


                        <!-- Ketentuan -->
                        <li class="nav-item" role="presentation">

                            <button
                                class="nav-link"
                                id="ketentuan-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#ketentuan"
                                type="button"
                                role="tab"
                                aria-controls="ketentuan"
                                aria-selected="false">
                                <i class="bi bi-exclamation-circle-fill"></i>

                                <span>
                                    Ketentuan
                                </span>
                            </button>

                        </li>


                        <!-- Persyaratan -->
                        <li class="nav-item" role="presentation">

                            <button
                                class="nav-link"
                                id="persyaratan-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#persyaratan"
                                type="button"
                                role="tab"
                                aria-controls="persyaratan"
                                aria-selected="false">
                                <i class="bi bi-list-task"></i>

                                <span>
                                    Persyaratan
                                </span>
                            </button>

                        </li>


                        <!-- Panduan -->
                        <li class="nav-item" role="presentation">

                            <button
                                class="nav-link"
                                id="panduan-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#panduan"
                                type="button"
                                role="tab"
                                aria-controls="panduan"
                                aria-selected="false">
                                <i class="bi bi-list-ul"></i>

                                <span>
                                    Panduan
                                </span>
                            </button>

                        </li>


                        <!-- Video -->
                        <li class="nav-item" role="presentation">

                            <button
                                class="nav-link"
                                id="video-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#video"
                                type="button"
                                role="tab"
                                aria-controls="video"
                                aria-selected="false">
                                <i class="bi bi-camera-video-fill"></i>

                                <span>
                                    Video<br>Tutorial
                                </span>
                            </button>

                        </li>

                    </ul>

                </div>


                <!-- =============================================
                     TAB CONTENT
                ============================================== -->

                <div
                    class="tab-content inpassing-tab-content"
                    id="inpassingTabsContent">

                    <!-- =====================================================
         1. INFORMASI
    ====================================================== -->
                    <div
                        class="tab-pane fade show active"
                        id="informasi"
                        role="tabpanel"
                        aria-labelledby="informasi-tab"
                        tabindex="0">

                        <!-- Latar Belakang -->
                        <article class="inpassing-content-card">

                            <h2>
                                Latar Belakang
                            </h2>

                            <div class="inpassing-content-line"></div>

                            <p>
                                Dalam rangka merespons dinamika organisasi dan tuntutan
                                profesionalisme ASN, Kementerian Ketenagakerjaan memandang
                                perlu melakukan penataan SDM melalui penyesuaian/inpassing
                                Jabatan Fungsional Analis Kerja Sama (JFAKS). Langkah ini
                                merupakan bagian dari strategi penguatan kelembagaan untuk
                                menciptakan birokrasi yang lincah (agile) serta memastikan
                                setiap fungsi kerja sama dikelola oleh tenaga ahli yang
                                kompeten. Melalui kebijakan ini, diharapkan tercipta sinergi
                                antara pengembangan karir individu dengan pencapaian target
                                strategis kementerian di ranah nasional maupun internasional.
                            </p>

                        </article>


                        <!-- Dasar Hukum -->
                        <article class="inpassing-content-card">

                            <h2>
                                Dasar Hukum
                            </h2>

                            <div class="inpassing-content-line"></div>

                            <p>
                                Pelaksanaan inpassing ini didasarkan pada:
                            </p>

                            <ol class="inpassing-number-list">

                                <li>
                                    Peraturan MenPAN-RB Nomor 10 Tahun 2023 tentang
                                    Jabatan Fungsional Analis Kerja Sama
                                </li>

                                <li>
                                    Peraturan Menteri Sekretaris Negara Nomor 3 Tahun
                                    2024 tentang Petunjuk Pelaksanaan dan Petunjuk
                                    Teknis JFAKS
                                </li>

                                <li>
                                    Surat Deputi Bidang Administrasi Aparatur,
                                    Kementerian Sekretariat Negara, Nomor
                                    B-12/KSN/D-3/KP.01.03/02/2025 perihal
                                    Rekomendasi Fungsional Kebutuhan Analis Kerja Sama
                                    di Lingkungan Kementerian Ketenagakerjaan
                                </li>

                                <li>
                                    Surat Menteri Pendayagunaan Aparatur Negara dan
                                    Reformasi Birokrasi Nomor B/1570/M.SM.01.00/2026
                                    perihal Persetujuan Kebutuhan Jabatan Fungsional
                                    di Lingkungan Kementerian Ketenagakerjaan
                                </li>

                            </ol>

                        </article>


                        <!-- Sasaran -->
                        <article class="inpassing-content-card">

                            <h2>
                                Sasaran
                            </h2>

                            <div class="inpassing-content-line"></div>

                            <p>
                                Sasaran Pelaksanaan Inpassing Jabatan Fungsional
                                Analis Kerja Sama (JFAKS):
                            </p>

                            <p class="inpassing-indent">
                                Pegawai Negeri Sipil (PNS) di lingkungan Kementerian
                                Ketenagakerjaan yang menjalankan tugas dan fungsi
                                di bidang kerja sama
                            </p>

                        </article>

                    </div>


                    <!-- =====================================================
         2. JUMLAH FORMASI
    ====================================================== -->
                    <div
                        class="tab-pane fade"
                        id="formasi"
                        role="tabpanel"
                        aria-labelledby="formasi-tab"
                        tabindex="0">

                        <section class="inpassing-formasi-section">

                            <h2 class="inpassing-subtitle">
                                Peta Rencana Pemenuhan Kebutuhan
                            </h2>


                            <div class="table-responsive">

                                <table class="table inpassing-table inpassing-plan-table">

                                    <thead>

                                        <tr>

                                            <th
                                                rowspan="2"
                                                class="align-middle text-center">
                                                Jabatan
                                            </th>

                                            <th
                                                rowspan="2"
                                                class="align-middle text-center">
                                                Jenjang
                                            </th>

                                            <th
                                                colspan="5"
                                                class="text-center">
                                                Tahun Pemenuhan
                                            </th>

                                            <th
                                                rowspan="2"
                                                class="align-middle text-center">
                                                Total
                                            </th>

                                        </tr>


                                        <tr>

                                            <th>2025</th>
                                            <th>2026</th>
                                            <th>2027</th>
                                            <th>2028</th>
                                            <th>2029</th>

                                        </tr>

                                    </thead>


                                    <tbody>

                                        <tr>

                                            <th rowspan="4" class="align-middle text-center">
                                                Analis Kerja Sama
                                            </th>

                                            <th>
                                                Utama
                                            </th>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>

                                            <td>-</td>

                                        </tr>


                                        <tr>

                                            <th>
                                                Madya
                                            </th>

                                            <td>-</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>-</td>

                                            <td class="fw-bold">
                                                2
                                            </td>

                                        </tr>


                                        <tr>

                                            <th>
                                                Muda
                                            </th>

                                            <td>5</td>
                                            <td>5</td>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>

                                            <td class="fw-bold">
                                                10
                                            </td>

                                        </tr>


                                        <tr>

                                            <th>
                                                Pertama
                                            </th>

                                            <td>13</td>
                                            <td>-</td>
                                            <td>1</td>
                                            <td>-</td>
                                            <td>-</td>

                                            <td class="fw-bold">
                                                14
                                            </td>

                                        </tr>

                                    </tbody>

                                </table>

                            </div>


                            <!-- =================================================
                 PENEMPATAN
            ================================================== -->
                            <h2 class="inpassing-subtitle inpassing-placement-title">
                                Unit Kerja Penempatan
                            </h2>


                            <div class="table-responsive">

                                <table class="table inpassing-table inpassing-placement-table">

                                    <thead>

                                        <tr>

                                            <th class="text-center">
                                                No
                                            </th>

                                            <th>
                                                Jenjang
                                            </th>

                                            <th class="text-center">
                                                Kebutuhan
                                            </th>

                                            <th>
                                                Unit Kerja Penempatan
                                            </th>

                                        </tr>

                                    </thead>


                                    <tbody>

                                        <!-- Total -->
                                        <tr class="inpassing-table-total">

                                            <td></td>

                                            <th>
                                                Total JF Analis Kerja Sama
                                            </th>

                                            <th class="text-center">
                                                26
                                            </th>

                                            <td></td>

                                        </tr>


                                        <!-- Madya -->
                                        <tr class="inpassing-table-group">

                                            <th class="text-center">
                                                1
                                            </th>

                                            <th>
                                                Madya
                                            </th>

                                            <th class="text-center">
                                                2
                                            </th>

                                            <td></td>

                                        </tr>

                                        <tr>

                                            <td></td>
                                            <td></td>

                                            <td class="text-center">
                                                2
                                            </td>

                                            <td>
                                                Biro Kerja Sama
                                            </td>

                                        </tr>


                                        <!-- Muda -->
                                        <tr class="inpassing-table-group">

                                            <th class="text-center">
                                                2
                                            </th>

                                            <th>
                                                Muda
                                            </th>

                                            <th class="text-center">
                                                10
                                            </th>

                                            <td></td>

                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">5</td>
                                            <td>Biro Kerja Sama</td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">1</td>
                                            <td>Setditjen Binalavotas</td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">1</td>
                                            <td>Setditjen Binapenta &amp; PKK</td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">1</td>
                                            <td>
                                                Pusat Pengembangan Sumber Daya Manusia
                                                Ketenagakerjaan
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">1</td>
                                            <td>Pusat Pasar Kerja</td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">1</td>
                                            <td>Politeknik Ketenagakerjaan</td>
                                        </tr>


                                        <!-- Pertama -->
                                        <tr class="inpassing-table-group">

                                            <th class="text-center">
                                                3
                                            </th>

                                            <th>
                                                Pertama
                                            </th>

                                            <th class="text-center">
                                                14
                                            </th>

                                            <td></td>

                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">8</td>
                                            <td>Biro Kerja Sama</td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">1</td>
                                            <td>Setditjen Binalavotas</td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">1</td>
                                            <td>Setditjen Binapenta &amp; PKK</td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">1</td>
                                            <td>Setditjen PHI &amp; Jamsos</td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">1</td>
                                            <td>
                                                Pusat Pengembangan Sumber Daya Manusia
                                                Ketenagakerjaan
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">1</td>
                                            <td>Pusat Pasar Kerja</td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">1</td>
                                            <td>Politeknik Ketenagakerjaan</td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>


                            <p class="inpassing-source">
                                *Sumber : Surat Deputi Administrasi Aparatur Kemensetneg
                                No. B-12/KSN/D-3/KP.01.03/02/2025
                            </p>

                        </section>

                    </div>


                    <!-- =====================================================
         3. KETENTUAN
    ====================================================== -->
                    <div
                        class="tab-pane fade"
                        id="ketentuan"
                        role="tabpanel"
                        aria-labelledby="ketentuan-tab"
                        tabindex="0">

                        <section class="inpassing-text-section">

                            <h2 class="inpassing-subtitle">
                                A. Ketentuan Umum
                            </h2>


                            <ol class="inpassing-detail-list">

                                <li>
                                    Penyesuaian/Inpassing merupakan proses pengangkatan PNS
                                    dalam jabatan fungsional guna memenuhi kebutuhan organisasi
                                    sesuai dengan peraturan perundangan dalam jangka waktu
                                    tertentu.
                                </li>

                                <li>
                                    Instansi Pengguna JFAKS merupakan instansi pemerintah
                                    yang menggunakan JFAKS.
                                </li>

                                <li>
                                    Penyesuaian/inpassing ditujukan bagi PNS yang telah dan/atau
                                    masih menjalankan tugas di bidang Analis Kerja Sama.
                                </li>

                                <li>
                                    Pengangkatan dalam JFAKS melalui penyesuaian/inpassing
                                    maksimal berusia 56 (lima puluh enam) tahun pada saat
                                    pengangkatan.
                                </li>

                                <li>
                                    Penyesuaian/inpassing dilaksanakan melalui Sistem Informasi
                                    Analis Kerja Sama yang selanjutnya disingkat SIAKS dengan
                                    alamat

                                    <?= Html::a(
                                        'https://siaks.setneg.go.id',
                                        'https://siaks.setneg.go.id',
                                        [
                                            'target' => '_blank',
                                            'rel' => 'noopener noreferrer',
                                        ]
                                    ) ?>.
                                </li>

                                <li>
                                    SIAKS digunakan berdasarkan Buku Panduan Penggunaan
                                    Aplikasi SIAKS.
                                </li>

                                <li>
                                    Instansi Pengguna JFAKS yang telah memiliki penetapan
                                    kebutuhan JFAKS menyampaikan usulan pengangkatan dalam
                                    JFAKS melalui penyesuaian/inpassing kepada Pusat Pembinaan
                                    Analis Kerja Sama dengan format sebagaimana tercantum
                                    dalam Lampiran V Peraturan Menteri Sekretaris Negara
                                    Nomor 3 Tahun 2024 tentang Petunjuk Pelaksanaan dan
                                    Petunjuk Teknis Jabatan Fungsional Analis Kerja Sama
                                    melalui email

                                    <?= Html::a(
                                        'pusbin.aks@setneg.go.id',
                                        'mailto:pusbin.aks@setneg.go.id'
                                    ) ?>

                                    setelah mengirimkan pengajuan penyesuaian/inpassing pada
                                    SIAKS.
                                </li>

                                <li>
                                    Pusat Pembinaan Analis Kerja Sama melakukan seleksi dalam
                                    rangka pengisian JFAKS melalui penyesuaian/inpassing
                                    sebagai berikut:

                                    <ol type="a">

                                        <li>
                                            seleksi administrasi, melalui verifikasi dan
                                            penelitian terhadap dokumen persyaratan;
                                        </li>

                                        <li>
                                            seleksi kompetensi, melalui metode portofolio
                                            pengalaman dalam pelaksanaan tugas di bidang JFAKS.
                                        </li>

                                    </ol>
                                </li>

                                <li>
                                    Pusat Pembinaan Analis Kerja Sama memberikan rekomendasi
                                    pengangkatan dalam JFAKS melalui penyesuaian/inpassing
                                    kepada Instansi Pengguna.
                                </li>

                                <li>
                                    Instansi Pengguna melaksanakan pengangkatan JFAKS melalui
                                    penyesuaian dan memberikan angka kredit sesuai dengan
                                    ketentuan peraturan perundang-undangan.
                                </li>

                                <li>
                                    Instansi Pengguna menyampaikan Salinan Keputusan
                                    pengangkatan PNS dalam JFAKS kepada Instansi Pembina
                                    melalui email

                                    <?= Html::a(
                                        'pusbin.aks@setneg.go.id',
                                        'mailto:pusbin.aks@setneg.go.id'
                                    ) ?>.
                                </li>

                            </ol>


                            <p class="inpassing-source">
                                *Sumber : Surat Kepala Pusat Pembinaan Analis Kerja Sama
                                Nomor : B-02/KSN/Pusbin-AKS/KP.01.03/03/2026
                            </p>

                        </section>

                    </div>


                    <!-- =====================================================
         4. PERSYARATAN
    ====================================================== -->
                    <div
                        class="tab-pane fade"
                        id="persyaratan"
                        role="tabpanel"
                        aria-labelledby="persyaratan-tab"
                        tabindex="0">

                        <section class="inpassing-text-section">

                            <h2 class="inpassing-subtitle">
                                Dokumen Persyaratan
                            </h2>


                            <h3 class="inpassing-subheading">
                                1. Instansi Pengguna JFAKS
                            </h3>


                            <ol
                                class="inpassing-detail-list inpassing-alpha-list"
                                type="a">

                                <li>
                                    Dalam pengajuan penyesuaian/inpassing JFAKS,
                                    Instansi Pengguna JFAKS wajib memenuhi dokumen:

                                    <ol>

                                        <li>
                                            surat rekomendasi kebutuhan formasi JFAKS
                                            dari Pusat Pembinaan Analis Kerja Sama; dan
                                        </li>

                                        <li>
                                            surat persetujuan kebutuhan formasi JFAKS
                                            dari Kementerian Pendayagunaan Aparatur Negara
                                            dan Reformasi Birokrasi.
                                        </li>

                                    </ol>
                                </li>

                                <li>
                                    Selain dokumen persyaratan sebagaimana dimaksud pada
                                    huruf a., Instansi Pengguna JFAKS juga harus menyampaikan
                                    jumlah formasi yang akan digunakan untuk
                                    penyesuaian/inpassing JFAKS.
                                </li>

                                <li>
                                    Jumlah formasi sebagaimana dimaksud pada huruf b.
                                    mengacu pada rekomendasi kebutuhan JFAKS dalam waktu
                                    5 (lima) tahun pada tahun 2025 s.d 2026 dalam surat
                                    rekomendasi kebutuhan formasi JFAKS dari Pusat Pembinaan
                                    Analis Kerja Sama.
                                </li>

                                <li>
                                    Instansi Pengguna diperbolehkan untuk menggunakan
                                    formasi pada tahun selanjutnya atau tidak menggunakan
                                    formasi tahun 2025 s.d. 2026 dengan tidak mengubah
                                    formasi secara keseluruhan.
                                </li>

                                <li>
                                    Penyampaian dokumen persyaratan Instansi Pengguna JFAKS
                                    serta formasi yang akan digunakan untuk
                                    penyesuaian/inpassing JFAKS pada SIAKS.
                                </li>

                            </ol>


                            <!-- =============================================
                 CALON JFAKS
            ============================================== -->
                            <h3 class="inpassing-subheading inpassing-subheading-space">
                                2. Calon JFAKS
                            </h3>


                            <ol
                                class="inpassing-detail-list inpassing-alpha-list"
                                type="a">

                                <li>
                                    Calon JFAKS wajib memenuhi dokumen kelengkapan
                                    persyaratan penyesuaian/inpassing JFAKS.
                                </li>


                                <li>
                                    Dokumen kelengkapan persyaratan
                                    penyesuaian/inpassing JFAKS berupa:

                                    <ol>

                                        <li>
                                            keputusan pengangkatan PNS;
                                        </li>

                                        <li>
                                            keputusan pangkat terakhir;
                                        </li>

                                        <li>
                                            keputusan jabatan terakhir;
                                        </li>

                                        <li>
                                            surat keterangan sehat jasmani dan rohani
                                            dari dokter pemerintah atau rumah sakit
                                            pemerintah;
                                        </li>

                                        <li>
                                            ijazah terakhir sesuai kualifikasi;
                                        </li>

                                        <li>
                                            surat keterangan memiliki pengalaman dalam
                                            pelaksanaan tugas di bidang kerja sama paling
                                            singkat 2 (dua) tahun yang ditandatangani
                                            pimpinan unit kerja minimal eselon II;
                                        </li>

                                        <li>
                                            evaluasi kinerja tahunan pegawai paling rendah
                                            bernilai baik selama 2 (dua) tahun terakhir;
                                        </li>

                                        <li>
                                            surat pernyataan dari pejabat pimpinan tinggi
                                            pratama (eselon II) yang membidangi kepegawaian
                                            bahwa yang bersangkutan tidak sedang menjalani
                                            proses/dijatuhi hukuman disiplin PNS tingkat
                                            sedang atau berat dalam kurun waktu 2 (dua)
                                            tahun terakhir;
                                        </li>

                                        <li>
                                            dokumen PAK (Penetapan Angka Kredit);
                                        </li>

                                        <li>
                                            daftar riwayat hidup; dan
                                        </li>

                                        <li>
                                            portofolio pengalaman dalam pelaksanaan tugas
                                            di bidang JFAKS paling singkat 2 (dua) tahun,
                                            yang ditandatangani oleh PNS yang bersangkutan
                                            dan pimpinan unit kerja
                                            (sekurang-kurangnya 5 kegiatan penugasan AKS).
                                        </li>

                                    </ol>

                                </li>


                                <li>
                                    Surat keterangan sehat jasmani dan rohani dari dokter
                                    pemerintah atau rumah sakit pemerintah sebagaimana
                                    dimaksud pada huruf b angka 4) dapat dikeluarkan oleh
                                    klinik yang terdapat pada Instansi Pengguna dengan
                                    menggunakan kop Instansi Pengguna dan ditandatangani
                                    oleh dokter pemerintah yang bertugas pada klinik
                                    Instansi Pengguna.
                                </li>


                                <li>
                                    Surat keterangan memiliki pengalaman dalam pelaksanaan
                                    tugas di bidang kerja sama paling singkat 2 (dua) tahun
                                    yang ditandatangani pimpinan unit kerja minimal eselon II
                                    sebagaimana dimaksud pada huruf b angka 6)
                                    ditandatangani oleh pimpinan unit kerja calon JFAKS
                                    pada saat pengusulan.
                                </li>


                                <li>
                                    Surat pernyataan dari pejabat pimpinan tinggi pratama
                                    (eselon II) yang membidangi kepegawaian bahwa yang
                                    bersangkutan tidak sedang menjalani proses/dijatuhi
                                    hukuman disiplin PNS tingkat sedang atau berat dalam
                                    kurun waktu 2 (dua) tahun terakhir sebagaimana dimaksud
                                    pada huruf b angka 8) harus dibuat untuk masing-masing
                                    calon JFAKS.
                                </li>


                                <li>
                                    Pemberian angka kredit pada dokumen PAK sebagaimana
                                    dimaksud pada huruf b angka 9) mengacu pada Peraturan
                                    Badan Kepegawaian Negara Nomor 3 Tahun 2023 tentang
                                    Angka Kredit, Kenaikan Pangkat dan Jenjang Jabatan
                                    Fungsional.
                                </li>


                                <li>
                                    Daftar riwayat hidup sebagaimana dimaksud pada huruf b
                                    angka 10) dapat dibuat dengan format sesuai dengan
                                    Instansi Pengguna masing-masing.
                                </li>

                            </ol>


                            <!-- WARNING -->
                            <div class="inpassing-warning">

                                <i class="bi bi-exclamation-triangle"></i>

                                <div>

                                    <strong>
                                        PENTING:
                                    </strong>

                                    Semua dokumen persyaratan Calon JFAKS wajib
                                    diunggah/disimpan dengan format

                                    <strong>.pdf</strong>

                                    dengan ukuran maksimal

                                    <strong>2MB</strong>

                                    per dokumen.

                                </div>

                            </div>


                            <p class="inpassing-source">
                                *Sumber : Surat Kepala Pusat Pembinaan Analis Kerja Sama
                                Nomor : B-02/KSN/Pusbin-AKS/KP.01.03/03/2026
                            </p>

                        </section>

                    </div>


                    <!-- =====================================================
         5. PANDUAN
    ====================================================== -->
                    <div
                        class="tab-pane fade"
                        id="panduan"
                        role="tabpanel"
                        aria-labelledby="panduan-tab"
                        tabindex="0">

                        <section class="inpassing-guide-section">

                            <h2 class="inpassing-subtitle">
                                Prosedur Pendaftaran
                            </h2>


                            <p class="inpassing-guide-description">
                                Berikut adalah dokumen panduan tata cara pendaftaran
                                inpassing. Silakan pelajari dokumen di bawah ini:
                            </p>


                            <?= Html::a(
                                '<i class="bi bi-download"></i>
                 <span>Unduh Buku Panduan SIAKS (PDF)</span>',
                                $panduanPdf,
                                [
                                    'class' => 'inpassing-guide-download',
                                    'target' => '_blank',
                                    'rel' => 'noopener noreferrer',
                                ]
                            ) ?>


                            <div class="inpassing-pdf-wrapper">

                                <iframe
                                    src="<?= Html::encode($panduanPdf) ?>"
                                    class="inpassing-pdf-frame"
                                    title="Panduan Penggunaan SIAKS"
                                    loading="lazy"></iframe>

                            </div>

                        </section>

                    </div>


                    <!-- =====================================================
         6. VIDEO TUTORIAL
    ====================================================== -->
                    <div
                        class="tab-pane fade"
                        id="video"
                        role="tabpanel"
                        aria-labelledby="video-tab"
                        tabindex="0">

                        <section class="inpassing-video-section">

                            <h2 class="inpassing-video-title">
                                Video Panduan Pendaftaran
                            </h2>


                            <p class="inpassing-video-description">
                                Silakan pilih video tutorial yang ingin Anda pelajari:
                            </p>


                            <!-- VIDEO OPTIONS -->
                            <div
                                class="btn-group inpassing-video-selector"
                                role="group"
                                aria-label="Pilihan video tutorial">

                                <button
                                    type="button"
                                    class="btn active"
                                    data-video-src="<?= Html::encode($videoRegistrasi) ?>"
                                    data-video-title="Panduan Proses Pendaftaran">
                                    1. Cara Registrasi
                                </button>


                                <button
                                    type="button"
                                    class="btn"
                                    data-video-src="<?= Html::encode($videoResetPassword) ?>"
                                    data-video-title="Panduan Reset Password">
                                    2. Reset Password
                                </button>


                                <button
                                    type="button"
                                    class="btn"
                                    data-video-src="<?= Html::encode($videoPengajuan) ?>"
                                    data-video-title="Panduan Cara Pengajuan Inpassing">
                                    3. Cara Pengajuan Inpassing
                                </button>

                            </div>


                            <!-- PLAYER -->
                            <div class="inpassing-video-player">

                                <video
                                    id="inpassingVideoPlayer"
                                    controls
                                    preload="metadata">

                                    <source
                                        id="inpassingVideoSource"
                                        src="<?= Html::encode($videoRegistrasi) ?>"
                                        type="video/mp4">

                                    Browser Anda tidak mendukung video HTML5.

                                </video>

                            </div>


                            <div class="inpassing-video-status">

                                <i class="bi bi-play-fill"></i>

                                <strong>
                                    Sedang Memutar:
                                </strong>

                                <span id="inpassingVideoTitle">
                                    Panduan Proses Pendaftaran
                                </span>

                            </div>


                            <div class="inpassing-video-help">

                                <i class="bi bi-info-circle-fill"></i>

                                Kendala memutar video? Pastikan browser Anda mendukung
                                format <strong>.mp4</strong>.

                            </div>

                        </section>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 RIGHT SIDEBAR
            ================================================== -->
            <div class="col-lg-4">

                <aside class="inpassing-sidebar">


                    <!-- =========================================
                         JADWAL
                    ========================================== -->
                    <section class="inpassing-side-card schedule-card">

                        <h2 class="inpassing-side-title">

                            <i class="bi bi-calendar3"></i>

                            Jadwal Pelaksanaan

                        </h2>


                        <div class="schedule-list">

                            <div class="schedule-item">

                                <strong>
                                    Pendaftaran Inpassing
                                </strong>

                                <span>
                                    1 - 30 Apr 2026
                                </span>

                            </div>


                            <div class="schedule-item">

                                <strong>
                                    Verifikasi Berkas
                                </strong>

                                <span>
                                    1 - 31 Mei 2026
                                </span>

                            </div>


                            <div class="schedule-item">

                                <strong>
                                    Pengumuman Hasil Inpassing
                                </strong>

                                <span class="schedule-muted">
                                    To Be Confirmed
                                </span>

                            </div>


                            <div class="schedule-item">

                                <strong>
                                    Penyerahan Rekomendasi
                                </strong>

                                <span class="schedule-muted">
                                    To Be Confirmed
                                </span>

                            </div>


                            <div class="schedule-item">

                                <strong>
                                    Pengangkatan JF AKS
                                </strong>

                                <span>
                                    Okt - Des 2026
                                </span>

                            </div>

                        </div>

                    </section>


                    <!-- =========================================
                         FORMAT DOKUMEN
                    ========================================== -->
                    <section class="inpassing-side-card document-card">

                        <h2 class="inpassing-side-title">

                            <i class="bi bi-download"></i>

                            Format Dokumen

                        </h2>


                        <p class="inpassing-side-description">
                            Unduh format surat yang dibutuhkan:
                        </p>


                        <div class="document-list">

                            <?= Html::a(
                                '<i class="bi bi-file-earmark-fill"></i>
                                <span>Surat Pernyataan Tidak Dijatuhi Hukuman Disiplin</span>',
                                '#',
                                [
                                    'class' => 'document-download',
                                ]
                            ) ?>


                            <?= Html::a(
                                '<i class="bi bi-file-earmark-fill"></i>
                                <span>Surat Keterangan Pengalaman</span>',
                                '#',
                                [
                                    'class' => 'document-download',
                                ]
                            ) ?>


                            <?= Html::a(
                                '<i class="bi bi-file-earmark-fill"></i>
                                <span>Format Daftar Riwayat Hidup</span>',
                                '#',
                                [
                                    'class' => 'document-download',
                                ]
                            ) ?>


                            <?= Html::a(
                                '<i class="bi bi-file-earmark-fill"></i>
                                <span>Sample Cover Letter Portofolio Inpassing JFAKS</span>',
                                '#',
                                [
                                    'class' => 'document-download',
                                ]
                            ) ?>

                        </div>

                    </section>


                    <!-- =========================================
                         CATATAN
                    ========================================== -->
                    <section class="inpassing-side-card note-card">

                        <h2 class="inpassing-side-title">

                            <i class="bi bi-pin-angle-fill"></i>

                            Catatan Tambahan:

                        </h2>


                        <ol class="note-list">

                            <li>
                                Satu portofolio kegiatan bidang kerja sama dapat
                                memuat lebih dari satu berkas yang berupa Nota
                                Dinas, Surat Undangan, Matriks, Pointers, ToR,
                                Bahan Paparan, Laporan, dsb.
                            </li>

                            <li>
                                Satu <em>cover letter</em> dapat memuat minimal
                                5 (lima) kegiatan di bidang kerja sama.
                            </li>

                        </ol>

                    </section>


                    <!-- =========================================
                         DASAR HUKUM DOWNLOAD
                    ========================================== -->
                    <section class="inpassing-side-card legal-card">

                        <h2 class="inpassing-side-title">

                            <i class="bi bi-book-fill"></i>

                            Dasar Hukum

                        </h2>


                        <div class="legal-download-list">

                            <?= Html::a(
                                '<i class="bi bi-download"></i>
                                <span>
                                    Peraturan MenPAN-RB No. 10 Tahun 2023 ttg
                                    Jabatan Fungsional Analis Kerja Sama
                                </span>',
                                '#',
                                [
                                    'class' => 'legal-download-item',
                                ]
                            ) ?>


                            <?= Html::a(
                                '<i class="bi bi-download"></i>
                                <span>
                                    Peraturan Mensetneg No. 3 Tahun 2024 ttg
                                    Juklak dan Juknis JFAKS
                                </span>',
                                '#',
                                [
                                    'class' => 'legal-download-item',
                                ]
                            ) ?>


                            <?= Html::a(
                                '<i class="bi bi-download"></i>
                                <span>
                                    Surat Deputi Administrasi Aparatur
                                    Kemensetneg No. B-12/KSN/D-3/KP.01.03/02/2025
                                    perihal Rekomendasi JFAKS di Lingkungan
                                    Kemnaker
                                </span>',
                                '#',
                                [
                                    'class' => 'legal-download-item',
                                ]
                            ) ?>


                            <?= Html::a(
                                '<i class="bi bi-download"></i>
                                <span>
                                    Surat MenPAN-RB No. B/1570/M.SM.01.00/2026
                                    perihal Persetujuan Kebutuhan Jabatan
                                    Fungsional di Lingkungan Kemnaker
                                </span>',
                                '#',
                                [
                                    'class' => 'legal-download-item',
                                ]
                            ) ?>


                            <?= Html::a(
                                '<i class="bi bi-download"></i>
                                <span>
                                    Surat Kepala Pusat Pembinaan Analis Kerja
                                    Sama Nomor:
                                    B-02/KSN/Pusbin-AKS/KP.01.03/03/2026
                                </span>',
                                '#',
                                [
                                    'class' => 'legal-download-item',
                                ]
                            ) ?>

                        </div>

                    </section>


                    <!-- =========================================
                         PUSAT INFORMASI
                    ========================================== -->
                    <section class="inpassing-side-card contact-card">

                        <h2 class="inpassing-side-title">

                            <i class="bi bi-question-circle-fill"></i>

                            Pusat Informasi

                        </h2>


                        <p>
                            Jika terdapat kendala, silakan bergabung ke grup
                            WhatsApp berikut:
                        </p>


                        <?= Html::a(
                            '<i class="bi bi-phone-fill"></i>
                            <span>Gabung Grup WhatsApp</span>',
                            '#',
                            [
                                'class' => 'whatsapp-button',
                                'target' => '_blank',
                                'rel' => 'noopener noreferrer',
                            ]
                        ) ?>

                    </section>

                </aside>

            </div>

        </div>

    </div>


    <!-- =====================================================
         SCROLL TO TOP
    ====================================================== -->
    <button
        type="button"
        class="inpassing-scroll-top"
        id="inpassingScrollTop"
        aria-label="Kembali ke atas">
        <i class="bi bi-caret-up-fill"></i>
    </button>

</div>