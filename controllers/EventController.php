<?php

namespace app\controllers;

use yii\web\NotFoundHttpException;

class EventController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionIlc()
    {
        return $this->render('ilc');
    }
    public function actionPengumuman()
    {
        return $this->render('pengumuman/inpassing');
    }

    public function actionDetail($slug)
    {
        $articles = $this->getArticles();

        if (!isset($articles[$slug])) {
            throw new NotFoundHttpException('Artikel tidak ditemukan.');
        }

        return $this->render('kegiatan/detail', [
            'article' => $articles[$slug],
            'slug' => $slug,
        ]);
    }


    private function getArticles()
    {
        return [

            /* =====================================================
             * 1. SOSIALISASI LINKS
             * ===================================================== */
            'sosialisasi-links' => [

                'title' => 'Sosialisasi Pemanfaatan Platform LINKS',

                'date' => '29 April 2026',

                'unit' => 'Biro Kerja Sama',

                'hero' => '@web/images/kegiatan/1777884411_RM216.jpeg',

                'content' => [

                    [
                        'type' => 'paragraph',
                        'dropcap' => true,
                        'html' => '
                            <strong>JAKARTA</strong> – Dalam upaya memperkuat tata kelola
                            kerja sama melalui penerapan <em>one gate system</em>,
                            Biro Kerja Sama Kementerian Ketenagakerjaan (Kemnaker)
                            menyelenggarakan sosialisasi pemanfaatan ekosistem platform
                            Layanan Informasi Kerja Sama (LINKS). Kegiatan ini dihadiri
                            oleh para administrator dan pegawai dari unit teknis di
                            lingkungan Kemnaker.
                        ',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '
                            Sistem LINKS hadir sebagai infrastruktur daring terpadu yang
                            memfasilitasi unit kerja untuk memantau, mendokumentasikan,
                            dan memetakan proses kerja sama mulai dari tahap penjajakan
                            hingga implementasi. Sesuai dengan arahan Menteri
                            Ketenagakerjaan dan Sekretaris Jenderal, platform ini
                            mengintegrasikan layanan Kerja Sama Dalam Negeri (KSDN)
                            sebagai kanal pelaksanaan dan pemantauan kerja sama.
                        ',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '
                            Fokus utama dalam sosialisasi kali ini adalah optimalisasi
                            penggunaan fitur unggah (<em>upload</em>) laporan implementasi
                            kerja sama. Pemanfaatan fitur ini dinilai sangat krusial agar
                            setiap laporan memiliki indikator keberhasilan yang terukur.
                        ',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '
                            "Selain tata cara teknis fitur unggah, kami juga menekankan
                            pada substansi kelengkapan data yang perlu diperhatikan oleh
                            para admin LINKS saat melaporkan progres implementasi,"
                            jelas perwakilan Biro Kerja Sama.
                        ',
                    ],

                    [
                        'type' => 'heading',
                        'text' => 'Persiapan Rapat Evaluasi Kerja Sama 2026',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '
                            Digitalisasi pelaporan melalui LINKS ini juga ditujukan untuk
                            mempermudah unit teknis dalam Rapat Evaluasi Kerja Sama
                            bersama mitra yang akan diselenggarakan pada
                            <strong>11 - 13 Mei 2026</strong> mendatang.
                        ',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '
                            Dengan optimalisasi LINKS, pendekatan pelaporan kini menjadi
                            lebih modern dan efisien. Peserta evaluasi tidak perlu lagi
                            menyusun bahan paparan manual seperti pada rapat-rapat
                            sebelumnya, melainkan langsung menyajikan data perkembangan
                            dari portal LINKS secara <em>real-time</em>.
                        ',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '
                            Sebagai langkah tindak lanjut, Biro Kerja Sama telah
                            menyiapkan 20 daftar mitra kerja sama prioritas yang
                            implementasinya perlu segera dilaporkan ke dalam sistem.
                        ',
                    ],

                ],

                'gallery' => [
                    '@web/images/kegiatan/1777884411_RM216.jpeg',
                    '@web/images/kegiatan/1777884411_-jUj7.jpeg',
                    '@web/images/kegiatan/1777884411_FC32X.jpeg',
                ],

            ],


            /* =====================================================
             * 2. MONEV KSDN BATCH I
             * ===================================================== */
            'monev-ksdn-batch-1-2026' => [

                'title' =>
                'Rapat Evaluasi Monitoring Kerja Sama Dalam Negeri Tahun 2026 (Batch I)',

                'date' => '13 May 2026',

                'unit' => 'Biro Kerja Sama',

                'hero' =>
                '@web/images/kegiatan/1779071910_8texx.jpg',

                'content' => [

                    [
                        'type' => 'paragraph',
                        'dropcap' => true,
                        'html' => '
                            <strong>JAKARTA</strong> – Dalam rangka meningkatkan efektivitas pelaksanaan kerja sama dalam negeri, Biro Kerja Sama menyelenggarakan kegiatan <strong>Rapat Evaluasi Monitoring Kerja Sama Dalam Negeri.</strong> Kegiatan ini dilaksanakan pada 11–13 Mei 2026 dengan metode hybrid, serta dihadiri oleh perwakilan unit kerja terkait, kementerian/lembaga, pemerintah daerah, dan mitra pembangunan. Kegiatan ini menjadi forum strategis untuk melakukan evaluasi terhadap pelaksanaan kerja sama yang telah berjalan, sekaligus memperkuat koordinasi dan sinergi antar pemangku kepentingan dalam mendukung pencapaian program pembangunan nasional
                        ',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '
                            Fokus pembahasan dalam kegiatan ini meliputi evaluasi pelaksanaan kerja sama dalam negeri yang telah berjalan, khususnya terhadap 20 Kesepahaman Bersama Prioritas, monitoring capaian program dan kegiatan, identifikasi berbagai kendala dan tantangan dalam implementasi kerja sama, serta pembahasan langkah-langkah tindak lanjut yang perlu dilakukan untuk meningkatkan efektivitas pelaksanaan kerja sama. Selain itu, para peserta juga membahas penguatan koordinasi antara unit kerja, kementerian/lembaga, pemerintah daerah, dan mitra pembangunan guna mendorong terciptanya sinergi yang lebih baik dalam mendukung pelaksanaan program pembangunan.
                        ',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '
                            Tujuan kegiatan ini adalah untuk mengevaluasi pelaksanaan kerja sama dalam negeri yang sedang berjalan, sekaligus mengidentifikasi berbagai hambatan dan tantangan yang dihadapi dalam pelaksanaannya di lapangan. Melalui kegiatan ini, Biro Kerja Sama bersama para pemangku kepentingan berupaya mengukur efektivitas program kerja sama yang telah dilaksanakan, menyusun rekomendasi perbaikan serta langkah tindak lanjut yang diperlukan, dan memperkuat sinergi antar lembaga, unit kerja, pemerintah daerah, serta mitra pembangunan agar kerja sama yang terjalin dapat berjalan lebih optimal, terarah, dan memberikan manfaat yang berkelanjutan.
                        ',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '
                            Pokok pembahasan dalam rapat ini mencakup penyampaian hasil monitoring pelaksanaan kerja sama dalam negeri pada 20 Kesepahaman Bersama Prioritas, evaluasi terhadap target dan realisasi kegiatan, serta pembahasan indikator keberhasilan kerja sama yang telah ditetapkan. Selain itu, rapat juga membahas berbagai kendala administratif maupun teknis yang dihadapi dalam pelaksanaan kerja sama, strategi peningkatan kualitas kerja sama ke depan, serta penyusunan rencana tindak lanjut dan penguatan koordinasi antar unit kerja, kementerian/lembaga, pemerintah daerah, dan mitra pembangunan.
                        ',
                    ],
                    [
                        'type' => 'paragraph',
                        'html' => '
                            Hasil yang diharapkan dari kegiatan ini adalah tersusunnya rekomendasi evaluasi pelaksanaan kerja sama dalam negeri sebagai bahan perbaikan ke depan. Kegiatan ini juga diharapkan dapat menghasilkan identifikasi tindak lanjut prioritas, penguatan mekanisme monitoring dan pelaporan, serta kesepakatan bersama dalam meningkatkan koordinasi antar unit kerja, kementerian/lembaga, pemerintah daerah, dan mitra pembangunan guna mendukung pelaksanaan kerja sama yang lebih efektif, terukur, dan berkelanjutan.
                        ',
                    ],
                    [
                        'type' => 'paragraph',
                        'html' => '
                            Melalui kegiatan Rapat Evaluasi Monitoring Kerja Sama Dalam Negeri ini, Biro Kerja Sama berharap tata kelola kerja sama dalam negeri dapat semakin ditingkatkan, khususnya dalam aspek perencanaan, pelaksanaan, monitoring, evaluasi, dan tindak lanjut. Sinergi antara unit kerja, kementerian/lembaga, pemerintah daerah, serta mitra pembangunan juga diharapkan semakin kuat, sehingga pelaksanaan kerja sama dapat berjalan lebih efektif, terarah, dan memberikan kontribusi nyata dalam mendukung pencapaian program serta peningkatan kualitas pelayanan yang lebih optimal.
                        ',
                    ],

                ],

                'gallery' => [
                    '@web/images/kegiatan/1779071910_8texx.jpg',
                    '@web/images/kegiatan/1778673047_i5Ts2.jpg',
                ],

            ],


            /* =====================================================
             * 3. PENYUSUNAN BAHAN ILC 114
             * ===================================================== */
            'penyusunan-bahan-ilc-114' => [

                'title' =>
                'Penyusunan Bahan Tripartit Indonesia untuk International Labour Conference (ILC) Sesi ke-114 Tahun 2026',

                'date' => '21 May 2026',

                'unit' => 'Biro Kerja Sama',

                'hero' =>
                '@web/images/kegiatan/1779680465_bYDQS.jpeg',


                'content' => [

                    [
                        'type' => 'paragraph',
                        'dropcap' => true,
                        'html' => '
                            <strong>Jakarta, 20 Mei 2026</strong> —
                            Kementerian Ketenagakerjaan Republik Indonesia melalui
                            Biro Kerja Sama menyelenggarakan Rapat Penyusunan Bahan
                            Tripartit Indonesia dalam rangka persiapan menghadiri
                            <strong>The 114th Session of the International Labour
                            Conference (ILC)</strong> yang akan berlangsung di Jenewa,
                            Swiss, pada 1–13 Juni 2026.
                        ',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '
                            Kegiatan ini mempertemukan unsur tripartit ketenagakerjaan
                            Indonesia yang terdiri dari unsur Pemerintah,
                            Serikat Pekerja/Serikat Buruh, dan unsur Pengusaha untuk
                            menyusun posisi serta bahan intervensi nasional Indonesia.
                        ',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '
                            Sekretaris Jenderal Kementerian Ketenagakerjaan dalam
                            pembukaannya menegaskan pentingnya sinergi tripartit dalam
                            memperkuat posisi Indonesia di forum ketenagakerjaan
                            internasional.
                        ',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => 'Adapun agenda utama yang menjadi fokus pembahasan meliputi:',
                    ],

                    [
                        'type' => 'ordered-list',

                        'items' => [

                            '
                            <strong>Standard-Setting Committee on Decent Work in the
                            Platform Economy</strong>, yang membahas penyusunan standar
                            internasional terkait pekerjaan layak dalam ekonomi
                            platform digital.
                            ',

                            '
                            <strong>General Discussion Committee: Advancing the
                            transformative agenda for gender equality in the world
                            of work</strong>, yang membahas penguatan kesetaraan gender
                            di dunia kerja.
                            ',

                            '
                            <strong>Recurrent Discussion Committee: Navigating change
                            through inclusive social dialogue</strong>, yang menyoroti
                            pentingnya penguatan dialog sosial yang inklusif.
                            ',

                            '
                            <strong>Committee on the Application of Standards (CAS)</strong>,
                            yang membahas penerapan standar ketenagakerjaan internasional.
                            ',

                        ],

                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '
                            Kementerian Ketenagakerjaan berharap melalui penyusunan bahan
                            tripartit ini, delegasi Indonesia dapat menyampaikan posisi
                            nasional yang konstruktif, inklusif, dan mencerminkan
                            semangat dialog sosial dalam sidang ILC ke-114.
                        ',
                    ],

                ],

                'gallery' => [
                    '@web/images/kegiatan/1779680465_bYDQS.jpeg',
                    '@web/images/kegiatan/1779680465_O0ukz.jpeg',
                    '@web/images/kegiatan/1779680515_HUu01.jpeg',
                ],

            ],


            /* =====================================================
             * 4. INDONESIA - TURKI
             * ===================================================== */
            'indonesia-turki-plan-of-action' => [

                'title' =>
                'Indonesia dan Turki menyepakati Plan of Action untuk memperkuat Kerja Sama Ketenagakerjaan',

                'date' => '24 June 2026',

                'unit' => 'Biro Kerja Sama',

                'hero' =>
                '@web/images/kegiatan/1787106887_GirHU.jpg',

                'content' => [

                    [
                        'type' => 'paragraph',
                        'dropcap' => true,
                        'html' => '
                            <strong>JAKARTA</strong> — Pemerintah Indonesia dan Turki
                            memperkuat kerja sama di bidang ketenagakerjaan melalui
                            Joint Action Plan 2026–2027 yang disepakati pada
                            The First Joint Working Commission (JWC).
                        ',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '
                            Pertemuan bilateral tersebut bertujuan membangun komitmen
                            untuk segera mengimplementasikan kerja sama dalam
                            Plan of Action yang mencakup berbagai kegiatan strategis
                            masing-masing kementerian.
                        ',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '
                            Indonesia juga menjajaki kerja sama dengan Turki untuk
                            mempelajari konsep <em>Model Factory</em> sebagai bagian
                            dari upaya transformasi balai pelatihan kerja Kemnaker.
                        ',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '
                            Pada JWC pertama juga dilakukan penandatanganan
                            <em>Protocol of the First Joint Working Commission</em>
                            yang memuat Joint Action Plan 2026–2027 sebagai implementasi
                            dari Memorandum of Understanding on Cooperation in the
                            Field of Labour.
                        ',
                    ],

                    [
                        'type' => 'quote',
                        'html' => '
                            "Saya meyakini bahwa kolaborasi yang semakin erat antara
                            Indonesia dan Turki tidak hanya akan memberikan manfaat
                            bagi kedua negara, tetapi juga dapat menjadi kontribusi
                            nyata dalam menghadirkan solusi bersama terhadap berbagai
                            tantangan ketenagakerjaan global."
                        ',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '
                            Ruang lingkup kerja sama tersebut mencakup sejumlah bidang
                            strategis yang diharapkan memberikan manfaat konkret bagi
                            peningkatan kualitas sumber daya manusia, penguatan
                            kelembagaan ketenagakerjaan, dan kesejahteraan pekerja
                            di kedua negara.
                        ',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '<strong>Biro Humas Kemnaker</strong>',
                    ],

                ],

                'gallery' => [
                    '@web/images/kegiatan/1787106887_GirHU.jpg',
                    '@web/images/kegiatan/1787106887_E0hbE.jpg',
                    '@web/images/kegiatan/1787106888_it1c4.jpg',
                ],

            ],


            /* =====================================================
             * 5. MONEV KSDN BATCH II
             * ===================================================== */
            'monev-ksdn-batch-2-2026' => [

                'title' =>
                'Rapat Evaluasi Monitoring Kerja Sama Dalam Negeri Tahun 2026 (Batch II)',

                'date' => '03 August 2026',

                'unit' => 'Biro Kerja Sama',

                'hero' =>
                '@web/images/kegiatan/1787109775_YygTC.jpeg',

                'content' => [

                    [
                        'type' => 'paragraph',
                        'dropcap' => true,
                        'html' => '
                            <strong>Bekasi, 4 Agustus 2026</strong> -
                            Kementerian Ketenagakerjaan melalui Biro Kerja Sama
                            melaksanakan Rapat Evaluasi dan Tindak Lanjut Kerja Sama
                            dengan Kementerian/Lembaga, Pemerintah Daerah, dan Mitra
                            Pembangunan Strategis pada 3–4 Agustus 2026 di Balai
                            Perluasan Kesempatan Kerja (BPKK) Bekasi, Jawa Barat.
                        ',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '
                            Kegiatan ini menjadi forum untuk mengevaluasi pelaksanaan
                            berbagai kerja sama sekaligus merumuskan tindak lanjut agar
                            kerja sama yang telah dibangun tidak berhenti pada
                            penandatanganan dokumen, tetapi memberikan manfaat dan
                            dampak nyata.
                        ',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '
                            Dalam rapat tersebut, seluruh unit teknis Kemnaker
                            menyampaikan perkembangan implementasi kerja sama, capaian
                            kegiatan, kendala yang dihadapi, serta rencana tindak lanjut.
                        ',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '
                            Salah satu fokus utama yang dibahas adalah perubahan
                            paradigma pengelolaan kerja sama dari yang berorientasi
                            pada kuantitas dokumen menjadi kerja sama yang berorientasi
                            pada hasil, manfaat, dan dampak nyata.
                        ',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '
                            Rapat juga membahas optimalisasi penggunaan platform LINKS
                            sebagai sarana pengelolaan kerja sama. Setiap penanggung
                            jawab kerja sama didorong untuk memperbarui status
                            implementasi dan mengunggah bukti dukung kegiatan.
                        ',
                    ],

                    [
                        'type' => 'paragraph',
                        'html' => '
                            Melalui evaluasi dan tindak lanjut tersebut,
                            Kementerian Ketenagakerjaan mendorong agar pelaksanaan
                            kerja sama ke depan semakin terukur, akuntabel, adaptif,
                            dan berkelanjutan.
                        ',
                    ],

                ],

                'gallery' => [
                    '@web/images/kegiatan/1787109775_YygTC.jpeg',
                    '@web/images/kegiatan/1787109775_RoDLC.jpeg',
                    '@web/images/kegiatan/1787109775_pBtRT.jpeg',
                ],

            ],

        ];
    }
}
