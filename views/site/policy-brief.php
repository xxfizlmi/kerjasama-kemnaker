<?php
    
use yii\helpers\Html;

$this->title = 'Policy Brief';

$infographic = 'https://kerjasama.kemnaker.go.id/uploads/gambar_paper/pilar.jpeg';

$baseUrl = Yii::$app->request->baseUrl;

$this->registerCssFile(
    $baseUrl . '/css/policy-brief.css'
);

$this->registerJsFile(
    $baseUrl . '/js/policy-brief.js',
    [
        'position' => \yii\web\View::POS_END,
    ]
);
?>

<section class="policy-brief-page">
    <div class="container">

        <article class="policy-brief-article">

            <!-- =====================================================
     1. POLICY BRIEF HEADER
====================================================== -->
            <header class="policy-header">

                <div class="policy-accent-line"></div>

                <div class="policy-document-icon">
                    <i class="bi bi-file-earmark-text-fill"></i>
                </div>

                <h1 class="policy-main-title">
                    Analisis Perumusan Rekomendasi Kebijakan Kerja Sama Internasional
                    Kementerian Ketenagakerjaan
                </h1>

                <div class="policy-meta">

                    <div class="policy-meta-item">
                        <i class="bi bi-person-check-fill"></i>

                        <span>
                            <strong>
                                Lutfi, S.Sos., S.Kom., M.M.
                            </strong>
                        </span>
                    </div>


                    <div class="policy-meta-item">
                        <i class="bi bi-building"></i>

                        <span>
                            Biro Kerja Sama, Kemnaker RI
                        </span>
                    </div>


                    <div class="policy-meta-item">
                        <i class="bi bi-calendar-check-fill"></i>

                        <span>
                            Forum &amp; Perundingan Bilateral 2025
                        </span>
                    </div>

                </div>

            </header>


            <!-- =====================================================
                 2. EXECUTIVE SUMMARY
            ====================================================== -->
            <section class="policy-executive">

                <div class="policy-executive-heading">

                    <div class="policy-executive-icon">
                        <i class="bi bi-lightbulb-fill"></i>
                    </div>

                    <h2>Ringkasan Eksekif</h2>

                </div>

                <p>
                    Forum dan perundingan bilateral yang dilaksanakan
                    Kementerian Ketenagakerjaan sepanjang tahun 2025
                    menghasilkan berbagai informasi strategis mengenai
                    kebutuhan pasar kerja global, arah pengembangan
                    Sumber Daya Manusia (SDM), serta peluang kerja sama
                    internasional di bidang ketenagakerjaan.
                </p>

                <p>
                    Meskipun berbagai kerja sama telah berjalan dengan baik,
                    masih terdapat beberapa tantangan yang perlu mendapat
                    perhatian, antara lain belum adanya prioritas kerja sama
                    internasional yang terstruktur, belum tersedianya sistem
                    informasi kebutuhan pasar kerja internasional yang
                    terintegrasi, serta belum optimalnya pemanfaatan hasil
                    kerja sama internasional dalam mendukung kebijakan dan
                    program ketenagakerjaan nasional.
                </p>

                <p>
                    Berdasarkan temuan tersebut, policy brief ini mengusulkan
                    sebuah kerangka rekomendasi kebijakan yang disebut
                    <strong class="policy-primary-text">PILAR</strong>,
                    sebagai pendekatan untuk meningkatkan efektivitas kerja
                    sama internasional Kementerian Ketenagakerjaan.
                </p>

            </section>


            <!-- =====================================================
                 3. LATAR BELAKANG
            ====================================================== -->
            <section class="policy-section">

                <div class="policy-section-heading">
                    <h2>Latar Belakang</h2>
                </div>

                <div class="policy-prose">

                    <p>
                        Perubahan ekonomi global, perkembangan teknologi,
                        dan transformasi dunia kerja telah mengubah kebutuhan
                        tenaga kerja di berbagai negara. Saat ini, banyak
                        negara tidak hanya membutuhkan tenaga kerja dalam
                        jumlah besar, tetapi juga tenaga kerja yang memiliki
                        kompetensi spesifik, kemampuan beradaptasi, serta
                        keterampilan yang sesuai dengan kebutuhan industri
                        masa depan.
                    </p>

                    <p>
                        Sebagai negara dengan jumlah angkatan kerja mencapai
                        sekitar 153 juta orang pada tahun 2025, Indonesia
                        memiliki peluang besar untuk memanfaatkan perkembangan
                        tersebut melalui kerja sama internasional di bidang
                        ketenagakerjaan. Dalam beberapa tahun terakhir,
                        fokus kerja sama internasional Kementerian
                        Ketenagakerjaan bergeser melampaui isu penempatan
                        tenaga kerja, melingkupi aspek pengembangan kompetensi,
                        pelatihan vokasi, sertifikasi, dan peningkatan
                        kualitas SDM.
                    </p>

                </div>

            </section>


            <!-- =====================================================
                 4. TEMUAN UTAMA
            ====================================================== -->
            <section class="policy-section">

                <div class="policy-section-heading">
                    <h2>Temuan Utama</h2>
                </div>

                <p class="policy-section-intro">
                    Analisis terhadap berbagai forum dan perundingan
                    bilateral menunjukkan adanya tiga temuan utama:
                </p>


                <div class="policy-findings">

                    <!-- 01 -->
                    <div class="policy-finding-item">

                        <div class="policy-finding-marker">
                            <span>01</span>
                            <i class="bi bi-arrow-right"></i>
                        </div>

                        <div class="policy-finding-content">

                            <h3>
                                Pengembangan SDM Menjadi Fokus Utama
                                Kerja Sama Internasional
                            </h3>

                            <p>
                                Isu peningkatan kompetensi, pelatihan vokasi,
                                sertifikasi, dan pengembangan keterampilan
                                mendominasi pembahasan dengan negara mitra
                                seperti Jepang, Australia, dan Singapura.
                            </p>

                        </div>

                    </div>


                    <!-- 02 -->
                    <div class="policy-finding-item">

                        <div class="policy-finding-marker">
                            <span>02</span>
                            <i class="bi bi-arrow-right"></i>
                        </div>

                        <div class="policy-finding-content">

                            <h3>
                                Meningkatnya Kebutuhan Tenaga Kerja Terampil
                            </h3>

                            <p>
                                Terdapat tren kenaikan permintaan terhadap
                                tenaga kerja dengan kompetensi teknis khusus
                                (misal: skema Specified Skilled Worker / SSW).
                            </p>

                        </div>

                    </div>


                    <!-- 03 -->
                    <div class="policy-finding-item">

                        <div class="policy-finding-marker">
                            <span>03</span>
                            <i class="bi bi-arrow-right"></i>
                        </div>

                        <div class="policy-finding-content">

                            <h3>
                                Hasil Kerja Sama Belum Optimal Mendukung
                                Program Nasional
                            </h3>

                            <p>
                                Informasi kebutuhan kompetensi yang diperoleh
                                dari forum bilateral belum sepenuhnya diadopsi
                                ke dalam program pelatihan nasional.
                            </p>

                        </div>

                    </div>

                </div>

            </section>


            <!-- =====================================================
                 5. ANALISIS KEBIJAKAN
            ====================================================== -->
            <section class="policy-section">

                <div class="policy-section-heading">
                    <h2>Analisis Kebijakan</h2>
                </div>

                <div class="policy-prose">

                    <p>
                        Meskipun kerja sama internasional berkembang menjadi
                        sarana penting dalam menyerap informasi dan praktik
                        baik, tantangan mendasar masih ada pada aspek
                        perencanaan, pemanfaatan data, dan implementasi
                        kebijakan. Perjalanan kerja sama masih bersifat
                        responsif dan mengikuti peluang yang ditawarkan negara
                        mitra karena belum adanya peta arah prioritas nasional
                        yang baku. Diperlukan mekanisme integrasi sistematis
                        agar hasil kesepakatan internasional diterjemahkan
                        langsung ke dalam program pengembangan tenaga kerja
                        domestik secara konsisten.
                    </p>

                </div>

            </section>


            <!-- =====================================================
                 6. REKOMENDASI PILAR
            ====================================================== -->
            <section class="policy-section policy-pilar-section">

                <div class="policy-section-heading">
                    <h2>Rekomendasi Kebijakan: Kerangka PILAR</h2>
                </div>

                <p class="policy-section-intro">
                    Untuk menjembatani kesenjangan antara hasil kesepakatan
                    internasional dengan pengembangan tenaga kerja domestik,
                    diperlukan implementasi kerangka
                    <strong class="policy-primary-text">PILAR</strong>:
                </p>

                <!-- =====================================================
     INFOGRAPHIC PILAR
====================================================== -->
                <figure class="policy-infographic">

                    <button
                        type="button"
                        class="policy-infographic-button"
                        id="policyInfographicButton"
                        aria-label="Buka infografis Kerangka PILAR">

                        <?= Html::img(
                            $infographic,
                            [
                                'class' => 'policy-infographic-image',
                                'alt' => 'Kerangka Rekomendasi Kebijakan PILAR',
                            ]
                        ) ?>

                        <span class="policy-infographic-overlay">

                            <span class="policy-infographic-open">
                                <i class="bi bi-arrows-fullscreen"></i>
                                Buka Gambar
                            </span>

                        </span>

                    </button>

                    <figcaption>
                        Kerangka Rekomendasi Kebijakan PILAR
                    </figcaption>

                </figure>

                <!-- =================================================
                     7. PILAR DETAIL
                ================================================== -->
                <div class="policy-pilar-grid">

                    <!-- P -->
                    <div class="policy-pilar-card policy-pilar-blue">

                        <div class="policy-pilar-badge">
                            P
                        </div>

                        <div>
                            <h3>Peta Prioritas</h3>

                            <p>
                                Menyusun Peta Prioritas Kerja Sama
                                Internasional Ketenagakerjaan Tahun 2026–2030
                                (negara mitra, sektor, target).
                            </p>
                        </div>

                    </div>


                    <!-- I -->
                    <div class="policy-pilar-card policy-pilar-green">

                        <div class="policy-pilar-badge">
                            I
                        </div>

                        <div>
                            <h3>Intelligence of Labour</h3>

                            <p>
                                Mengembangkan sistem informasi pusat kebutuhan
                                pasar kerja internasional yang terintegrasi.
                            </p>
                        </div>

                    </div>


                    <!-- L -->
                    <div class="policy-pilar-card policy-pilar-orange">

                        <div class="policy-pilar-badge">
                            L
                        </div>

                        <div>
                            <h3>Link and Match</h3>

                            <p>
                                Menyusun Action Plan untuk diintegrasikan
                                ke program BLK, pelatihan vokasi, dan
                                pemagangan.
                            </p>
                        </div>

                    </div>


                    <!-- AR -->
                    <div class="policy-pilar-card policy-pilar-purple">

                        <div class="policy-pilar-badge">
                            A·R
                        </div>

                        <div>
                            <h3>Assessment &amp; Result</h3>

                            <p>
                                Menerapkan Outcome Based Monitoring and
                                Evaluation untuk mengukur dampak nyata
                                perluasan kerja.
                            </p>
                        </div>

                    </div>

                </div>

            </section>


            <!-- =====================================================
                 8. KESIMPULAN
            ====================================================== -->
            <section class="policy-section">

                <div class="policy-section-heading">
                    <h2>Kesimpulan</h2>
                </div>

                <div class="policy-prose">

                    <p>
                        Tantangan utama ke depan bukan lagi sekadar
                        memperbanyak kuantitas kesepakatan, melainkan
                        memastikan setiap kerja sama mampu menghasilkan data
                        dan praktik baik yang konkret. Kerangka
                        <strong class="policy-primary-text">PILAR</strong>
                        hadir sebagai instrumen strategis untuk menjembatani
                        hasil kerja sama internasional dengan kebutuhan
                        pembangunan ketenagakerjaan nasional, demi mendorong
                        peningkatan daya saing dan kualitas SDM Indonesia
                        di kancah global.
                    </p>

                </div>

            </section>


            <!-- =====================================================
     9. REFERENCES
====================================================== -->
            <section class="policy-references">

                <!-- Heading -->
                <div class="policy-reference-heading">

                    <i class="bi bi-bookmark-fill"></i>

                    <h2>
                        Sumber Data dan Referensi Resmi
                    </h2>

                </div>


                <!-- Reference List -->
                <ol class="policy-reference-list">

                    <!-- 1 -->
                    <li class="policy-reference-item">

                        <div class="policy-reference-content">

                            <h3>
                                Badan Pusat Statistik (BPS) – Keadaan
                                Ketenagakerjaan Indonesia Februari 2025
                            </h3>

                            <a
                                href="#"
                                class="policy-reference-link"
                                target="_blank"
                                rel="noopener noreferrer">
                                Tautan Referensi
                                <i class="bi bi-box-arrow-up-right"></i>
                            </a>

                        </div>

                    </li>


                    <!-- 2 -->
                    <li class="policy-reference-item">

                        <div class="policy-reference-content">

                            <h3>
                                Cabinet Office, Government of Japan – Annual Report
                                on the Ageing Society 2025
                            </h3>

                            <p>
                                Data populasi lansia Jepang dan kondisi ageing population.
                            </p>

                            <a
                                href="#"
                                class="policy-reference-link"
                                target="_blank"
                                rel="noopener noreferrer">
                                Tautan Referensi
                                <i class="bi bi-box-arrow-up-right"></i>
                            </a>

                        </div>

                    </li>


                    <!-- 3 -->
                    <li class="policy-reference-item">

                        <div class="policy-reference-content">

                            <h3>
                                Immigration Services Agency of Japan –
                                Foreign Worker Statistics 2025
                            </h3>

                            <p>
                                Data statistik pekerja asing dan pekerja Indonesia
                                di Jepang.
                            </p>

                            <a
                                href="#"
                                class="policy-reference-link"
                                target="_blank"
                                rel="noopener noreferrer">
                                Tautan Referensi
                                <i class="bi bi-box-arrow-up-right"></i>
                            </a>

                        </div>

                    </li>


                    <!-- 4 -->
                    <li class="policy-reference-item">

                        <div class="policy-reference-content">

                            <h3>
                                Department of Foreign Affairs and Trade Australia –
                                IA-CEPA
                            </h3>

                            <p>
                                Data kerja sama ekonomi dan mobilitas tenaga kerja
                                Indonesia–Australia.
                            </p>

                            <a
                                href="#"
                                class="policy-reference-link"
                                target="_blank"
                                rel="noopener noreferrer">
                                Tautan Referensi
                                <i class="bi bi-box-arrow-up-right"></i>
                            </a>

                        </div>

                    </li>


                    <!-- 5 -->
                    <li class="policy-reference-item">

                        <div class="policy-reference-content">

                            <h3>
                                Government of the United Kingdom –
                                UK–Indonesia Economic Cooperation
                            </h3>

                            <p>
                                Data kerja sama ekonomi dan pengembangan kemitraan
                                Indonesia–Inggris.
                            </p>

                            <a
                                href="#"
                                class="policy-reference-link"
                                target="_blank"
                                rel="noopener noreferrer">
                                Tautan Referensi
                                <i class="bi bi-box-arrow-up-right"></i>
                            </a>

                        </div>

                    </li>


                    <!-- 6 -->
                    <li class="policy-reference-item">

                        <div class="policy-reference-content">

                            <h3>
                                Dokumen dan Laporan Kerja Sama Internasional
                                Kementerian Ketenagakerjaan Tahun 2025
                            </h3>

                            <p>
                                Data kegiatan forum bilateral, kerja sama internasional,
                                dan pembahasan kerja sama ketenagakerjaan.
                            </p>

                        </div>

                    </li>

                </ol>

            </section>

        </article>

    </div>
</section>


<!-- =========================================================
     INFOGRAPHIC LIGHTBOX
========================================================= -->

<div
    class="policy-lightbox"
    id="policyLightbox"
    aria-hidden="true">
    <button
        type="button"
        class="policy-lightbox-close"
        id="policyLightboxClose"
        aria-label="Tutup gambar">
        <i class="bi bi-x-lg"></i>
    </button>

    <div class="policy-lightbox-content">

        <?= Html::img(
            $infographic,
            [
                'class' => 'policy-lightbox-image',
                'alt' => 'Kerangka Rekomendasi Kebijakan PILAR',
                'loading' => 'lazy',
            ]
        ) ?>

    </div>
</div>
