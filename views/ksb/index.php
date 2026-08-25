<?php

use yii\helpers\Html;

$title = 'Kerja Sama Bilateral';

$description = 'Kerja Sama bilateral dilaksanakan oleh 2 (dua) pihak antara Kementerian dengan pemerintah negara asing dan/atau organisasi internasional.';

$section = [
    [
        'TUJUAN STRATEGIS',
        'meningkatkan kualitas dan daya saing tenaga kerja nasional, memperluas kesempatan kerja yang layak, serta memperkuat tata kelola dan diplomasi ketenagakerjaan yang inklusif, adaptif, dan berkelanjutan',
        'bi bi-bullseye',
    ],
    [
        'SEKTOR PRIORITAS',
        'pengembangan kompetensi dan produktivitas tenaga kerja, transformasi ketenagakerjaan digital dan hijau, penguatan hubungan industrial, serta peningkatan tata kelola dan kapasitas kelembagaan ketenagakerjaan

',
        'bi bi-bullseye',
    ],
];

$cards = [
    [
        'id' => 'japan',
        'image' => '@web/images/countries/japan.png',
        'name' => 'JEPANG',
        'documentCount' => 6,
        'items' => [
            [
                'title' => 'PENINGKATAN PENGIRIMAN DAN PENERIMAAN PESERTA MAGANG TEKNIS INDONESIA',
                'description' => 'memanfaatkan sumber daya dan keunggulan Para Pihak guna mempromosikan secara efektif pengembangan, pengiriman, dan pen...',
                'status' => 'Aktif',
                'mitra' => 'Prefektur Kagawa',
                'pemerintah' => 'Pemerintah'
            ],
            [
                'title' => 'PENINGKATAN PENGIRIMAN DAN PENERIMAAN PESERTA MAGANG TEKNIS INDONESIA',
                'description' => '1. penyediaan dukungan dalam proses pengembangan, pengiriman, dan penerimaan Peserta Magang Teknis Indonesia di Prefekt...',
                'status' => 'Aktif',
                'mitra' => 'Pemerintah Prefektur Ehime ',
                'pemerintah' => 'Pemerintah'
            ],
            [
                'title' => 'Memorandum Saling Pengertian antara Kementerian Ketenagakerjaan Republik Indonesia dan Pemerintah Prefektur Mie Jepang tentang Kerja Sama untuk Meningkatkan Pengiriman dan Penerimaan Peserta Pemagangan Teknis Indonesia ke Jepang',
                'description' => 'Para Pihak sepakat untuk bekerja sama dalam kegiatan berikut: a. pemberian dukungan dalam proses pengembangan, pengirim...',
                'status' => 'Aktif',
                'mitra' => 'Prefektur Mie',
                'pemerintah' => 'Pemerintah'
            ],
            [
                'title' => 'Memorandum Kerja Sama antara Kementerian Ketenagakerjaan Republik Indonesia dan Badan Kerja Sama Internasional Jepang tentang Pengembangan Sumber Daya Manusia Tenaga Kerja Indonesia',
                'description' => '',
                'status' => 'Aktif',
                'mitra' => 'JICA (Japan International Cooperation Agency) ',
                'pemerintah' => 'Pemerintah Negara Asing'
            ],
            [
                'title' => 'Memorandum Kerja Sama antara Sekretariat Jenderal Kementerian Ketenagakerjaan Republik Indonesia dan Pemerintah Prefektur Miyagi Jepang tentang Percepatan Penempatan dan Penerimaan Pemagangan Teknis Indonesia, Sfecified Skilled Workers dan Teknisi ke Jepang',
                'description' => 'Tujuan dari Memorandum Kerja Sama (MOC) ini adalah untuk mempercepat fasilitasi yang lebih efektif bagi program pelatiha...',
                'status' => 'Aktif',
                'mitra' => 'Prefektur Miyagi',
                'pemerintah' => 'Pemerintah'
            ],
            [
                'title' => 'Memorandum Kerja Sama tentang Program Pelatihan Praktek Kerja Teknis antara Pemerintah Republik Indonesia dengan Pemerintah Jepang',
                'description' => 'Tujuan kerjasama ini adalah untuk mentransfer keterampilan teknis, dll. dari Jepang ke Republik Indonesia secara tepat d...',
                'status' => 'Aktif',
                'mitra' => 'Pemerintah Jepang ',
                'pemerintah' => 'Pemerintah'
            ],
        ],
    ],
    [
        'id' => 'albania',
        'image' => '@web/images/countries/albania.png',
        'name' => 'ALBANIA',
        'documentCount' => 1,
        'items' => [
            [
                'title' => 'Pernyataan Kehendak antara Kementerian Ketenagakerjaan Republik Indonesia dan Kementerian Ekonomi, Kebudayaan dan Inovasi Republik Albania tentang Kerja Sama Tenaga Kerja dan Ketenagakerjaan',
                'description' => 'Para pihak akan mengeksplorasi kolaborasi untuk mengembangkan pengaturan khusus di bidang kerja sama berikut: a. mening...',
                'status' => 'Aktif',
                'mitra' => 'Kementerian Ekonomi, Kebudayaan dan Inovasi Republik Albania',
                'pemerintah' => 'Pemerintah'
            ],
        ],
    ],
    [
        'id' => 'palestine',
        'image' => '@web/images/countries/palestine.png',
        'name' => 'PALESTINA',
        'documentCount' => 1,
        'items' => [
            [
                'title' => 'Pernyataan Kehendak antara Kementerian Ketenagakerjaan Republik Indonesia dan Kementerian Tenaga Kerja Negara Palestina tentang Kerja Sama di bidang Tenaga Kerja dan Pengembangan Kapasitas',
                'description' => 'HEREBY DECLARE the Participants intention to establish a cooperation in the field of labor with the following scopes of...',
                'status' => 'Aktif',
                'mitra' => 'Kementerian Tenaga Kerja Negara Palestina',
                'pemerintah' => 'Pemerintah Negara Asing'
            ],
        ],
    ],
    [
        'id' => 'turkey',
        'image' => '@web/images/countries/turkey.png',
        'name' => 'TURKI',
        'documentCount' => 1,
        'items' => [
            [
                'title' => 'Nota Kesepahaman tentang Kerja Sama di Bidang Ketenagakerjaan antara Kementerian Ketenagakerjaan Republik Indonesia dan Kementerian Tenaga Kerja dan Jaminan Sosial Republik Turki',
                'description' => 'Para Pihak memutuskan untuk bekerja sama dalam bidang-bidang berikut: a) hubungan kerja yang mencakup hubungan pekerja...',
                'status' => 'Aktif',
                'mitra' => 'Kementerian Tenaga Kerja dan Jaminan Sosial Republik Turki',
                'pemerintah' => 'Pemerintah Negara Asing'
            ],
        ],
    ],
    [
        'id' => 'swiss',
        'image' => '@web/images/countries/swiss.png',
        'name' => 'SWISS',
        'documentCount' => 2,
        'items' => [
            [
                'title' => 'Persetujuan antara Pemerintah Republik Indonesia dan Dewan Federal Swiss pada Pertukaran Profesional Muda',
                'description' => '1. Persetujuan ini mengatur pertukaran warga negara Swiss dan Indonesial (dari kedua jenis kelamin) yang bekerja di nega...',
                'status' => 'Aktif',
                'mitra' => 'Pemerintah Jepang ',
                'pemerintah' => 'Pemerintah Negara Asing'
            ],
            [
                'title' => 'Memorandum Saling Pengertian antara Kementerian Ketenagakerjaan Republik Indonesia dan Departemen Federal Urusan Ekonomi, Pendidikan dan Penelitian Konfederasi Swiss tentang Kerja Sama di Bidang Tenaga Kerja dan Hubungan Kerja',
                'description' => '1. Para Penandatangan akan bekerjasama di bidang sebagai berikut : a) Kebijakan pasar tenaga kerja; b) Hukum Ketenag...',
                'status' => 'Aktif',
                'mitra' => 'State Secretariat for Economic Affairs (SECO)',
                'pemerintah' => 'Pemerintah Negara Asing'
            ],
        ],
    ],
    [
        'id' => 'singapore',
        'image' => '@web/images/countries/singapore.png',
        'name' => 'SINGAPURA   ',
        'documentCount' => 1,
        'items' => [
            [
                'title' => 'Nota Kesepahaman antara Kementerian Koordinator Bidang Perekonomian Republik Indonesia dan Kementerian Perdagangan dan Perindustrian Republik Singapura tentang Program Tech:X Indonesia - Singapura',
                'description' => 'Tujuan Nota Kesepahaman ("MOU") ini adalah untuk menetapkan kerangka kerja untuk Program Tech:X antara Indones...',
                'status' => 'Aktif',
                'mitra' => 'Kementerian Perdagangan dan Perindustrian Republik Singapura ',
                'pemerintah' => 'Pemerintah Negara Asing'
            ],
        ],
    ],
    [
        'id' => 'ajerbaijan',
        'image' => '@web/images/countries/azerbaijan.png',
        'name' => 'AJERBAIJAN',
        'documentCount' => 2,
        'items' => [
            [
                'title' => 'Memorandum Saling Pengertian antara Kementerian Tenaga Kerja dan Perlindungan Sosial Penduduk Republik Azerbaijan dan Kementerian Ketenagakerjaan Republik Indonesia tentang Kerja Sama di Bidang Tenaga Kerja, Ketenagakerjaan, dan Perlindungan Sosial',
                'description' => 'Para Pihak wajib bekerja sama dalam bidang-bidang utama berikut dalam kompetensinya sesuai dengan undang-undang nasional...',
                'status' => 'Aktif',
                'mitra' => 'Kementerian Tenaga Kerja dan Perlindungan Sosial Penduduk Republik Azerbaijan',
                'pemerintah' => 'Pemerintah'
            ],
        ],
    ],
    [
        'id' => 'austria',
        'image' => '@web/images/countries/austria.png',
        'name' => 'AUSTRIA',
        'documentCount' => 2,
        'items' => [
            [
                'title' => 'Memorandum Saling Pengertian antara Kementerian Ketenagakerjaan Republik Indonesia dan Kementerian Federal Tenaga Kerja dan Ekonomi Republik Austria tentang Kerja Sama Pelatihan Vokasi pada Pelatihan Berbasis Kerja',
                'description' => '1. Memorandum Saling Pengertian ini (selanjutnya disebut MSP) merupakan kerangka kerja sama antara Para Pihak di bidang...',
                'status' => 'Aktif',
                'mitra' => 'Kementerian Federal Tenaga Kerja dan Ekonomi Republik Austria ',
                'pemerintah' => 'Pemerintah Negara Asing'
            ],
        ],
    ],
    [
        'id' => 'australia',
        'image' => '@web/images/countries/australia.png',
        'name' => 'AUSTRALIA',
        'documentCount' => 2,
        'items' => [
            [
                'title' => 'Memorandum Saling Pengertian (Sebagaimana Telah Diubah) antara Pemerintah Republik Indonesia dan Pemerintah Australia tentang Pilot Pertukaran Pengembangan Keterampilan',
                'description' => 'Tujuan dari Memorandum Saling Pengertian (sebagaimana telah diubah) (MSP) ini adalah untuk: (a) menyelenggarakan Pilot...',
                'status' => 'Aktif',
                'mitra' => 'Pemerintah Australia',
                'pemerintah' => 'Pemerintah'
            ],
        ],
    ],
];


?>

<?= Html::beginTag('div', [
    'class' => 'page',
]) ?>

    <?= $this->render('../components/ui/hero', [
        'title' => $title,
        'description' => $description,
        'section' => $section,
    ]) ?>


    <?= Html::beginTag('div', [
        'class' => 'container py-5',
    ]) ?>

        <?= Html::beginTag('div', [
            'class' => 'row justify-content-center g-4',
        ]) ?>

            <?php foreach ($cards as $card): ?>

                <?= Html::beginTag('div', [
                    'class' => 'col-12 col-sm-6 col-lg-3',
                ]) ?>

                    <?= $this->render('../components/ui/card', $card) ?>

                <?= Html::endTag('div') ?>

            <?php endforeach; ?>

        <?= Html::endTag('div') ?>

    <?= Html::endTag('div') ?>
        <?php foreach ($cards as $card): ?>
        <?= $this->render('../components/ui/modal', array_merge($card, ['type' => 'ksb'])) ?>
    <?php endforeach; ?>

<?= Html::endTag('div') ?>