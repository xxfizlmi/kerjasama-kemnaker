<?php

use yii\helpers\Html;

$title = 'Kerja Sama Regional';

$description = 'Kerja sama regional di bidang ketenagakerjaan merupakan kerja sama peningkatan sektor ketenagakerjaan yang dilaksanakan oleh pemerintah Indonesia dengan pemerintah negara lain atau organisasi internasional dalam konteks kesatuan kawasan untuk mendukung proses integrasi dan pertumbuhan ekonomi kawasan tersebut.';

$section = [
    [
        'TUJUAN STRATEGIS',
        '"Meningkatkan kualitas dan dampak kerja sama regional untuk mengembangkan kualitas keterampilan dan perlindungan hak tenaga kerja, memperluas kesempatan kerja, serta mendukung pembangunan ekosistem ketenagakerjaan nasional dan kawasan."',
        'bi bi-bullseye',
    ],
    [
        'SEKTOR PRIORITAS',
        '"Ketenagakerjaan dan pelatihan vokasi, penempatan dan perluasan kesempatan kerja, hubungan industrial, keselamatan dan kesehatan kerja, serta produktivitas."',
        'bi bi-bullseye',
    ],
];

$cards = [
    [
        'id' => 'asean',
        'image' => '@web/images/organization/asean.png',
        'name' => 'ASEAN',
        'title' => 'ASEAN Labour Ministers Meeting (ALMM)',
        'description' => '-',
        'items' => [
            [
                'title' => 'Senior Labour Officials Meeting (SLOM)',
                'description' => 'Melalui SLOM, Kemnaker berperan sebagai focal point Indonesia dalam perumusan kebijakan, penyusunan pedoman regional, serta pertukaran praktik ketenagakerjaan antar negara anggota ASEAN.',
            ],
        ],
        'url' => 'https://asean.org/photoparent/asean-labour-ministers-meeting-almm/',
    ],

    [
        'id' => 'apec',
        'image' => '@web/images/organization/apec.png',
        'name' => 'APEC',
        'title' => 'Human Resources Development Working Group (HRDWG)',
        'description' => 'Tidak ada deskripsi',
        'items' => [
            [
                'title' => 'Human Resources Development Working Group (HRDWG)',
                'description' => 'Melalui HRDWG, Kemnaker terlibat dalam kegiatan dan proyek kerja sama yang berfokus pada pengembangan sumber daya manusia dan ketenagakerjaan, termasuk peningkatan keterampilan tenaga kerja, kesiapan menghadapi perubahan pasar kerja, serta pertukaran kebijakan dan praktik terbaik antar ekonomi anggota APEC.',
            ],
        ],
        'url' => 'https://www.apec.org/',
    ],

    [
        'id' => 'ipef',
        'image' => '@web/images/organization/world.png',
        'name' => 'IPEF',
        'title' => 'Labour Rights Advisory Board (LRAB)',
        'description' => 'Pilar IPEF Supply Chain mendorong kerja sama penguatan rantai pasok pada sektor-sektor yang menjadi kepentingan bersama untuk meningkatkan daya saing, ketangguhan, serta mengantisipasi dan merespon gangguan rantai pasok seiring dengan perlindungan hak-hak pekerja pada sektor rantai pasok regional.',
        'items' => [
            [
                'title' => 'Supply Chain',
                'description' => 'Melalui LRAB, Kemnaker berperan sebagai pengampu bidang perlindungan hak pekerja pada industri rantai pasok.',
            ],
        ],
        'url' => '',
    ],

    [
        'id' => 'imt-gt',
        'image' => '@web/images/organization/imt-gt.png',
        'name' => 'IMT-GT',
        'title' => 'Working Group on Human Resources Development (WGHRD)',
        'description' => 'Tidak ada deskripsi',
        'items' => [
            [
                'title' => 'Working Group on Human Resources Development (WGHRD)',
                'description' => 'Melalui WGHRD, Kemnaker terlibat dalam proyek dan kegiatan yang berfokus pada pengembangan keterampilan tenaga kerja, peningkatan kapasitas SDM kawasan perbatasan, serta pertukaran kebijakan dan praktik ketenagakerjaan antar negara anggota.',
            ],
        ],
        'url' => 'https://imtgt.org/',
    ],

    [
        'id' => 'acaft',
        'image' => '@web/images/organization/world.png',
        'name' => 'ACAFT',
        'title' => 'WGTSD & WGTIS',
        'description' => 'Tidak ada deskripsi.',
        'items' => [
            [
                'title' => 'Working Group on Trade and Sustainable Development (WGTSD)',
                'description' => 'Dalam perundingan ACAFTA, Kemnaker berperan menjaga dan merumuskan isu ketenagakerjaan dalam WG-TSD agar selaras dengan standar nasional dan prinsip perdagangan berkelanjutan.',
            ],
        ],
        'url' => '',
    ],
];

?>

<div class="page">

    <!-- HERO -->
    <?= $this->render('../components/ui/hero', [
        'title' => $title,
        'description' => $description,
        'section' => $section,
    ]) ?>


    <!-- TITLE -->
    <?= Html::beginTag('div', ['class' => 'mt-5',]) ?>
    <?= Html::tag('h1', 'ORGANISASI REGIONAL', ['class' => 'text-center fw-bold',]) ?>
    <?= Html::endTag('div') ?>

    <!-- CARDS -->
    <?= Html::beginTag('div', ['class' => 'container py-5',]) ?>
    <?= Html::beginTag('div', ['class' => 'row justify-content-center g-4',]) ?>

    <?php foreach ($cards as $card): ?>
        <?= Html::beginTag('div', ['class' => 'col-12 col-sm-6 col-lg-3 d-flex justify-content-center',]) ?>
        <?= $this->render('../components/ui/card', array_merge(
            $card,
            ['type' => 'ksr']
        )) ?>
        <?= Html::endTag('div') ?>
    <?php endforeach; ?>
    <?= Html::endTag('div') ?>
    <?= Html::endTag('div') ?>

    <?php foreach ($cards as $card): ?>

        <?= $this->render('../components/ui/modal', array_merge(
            $card,
            ['type' => 'ksr']
        )) ?>

    <?php endforeach; ?>

</div>