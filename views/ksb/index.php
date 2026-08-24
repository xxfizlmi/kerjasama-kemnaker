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
        'image' => '@web/images/countries/japan.png',
        'title' => 'JEPANG',
        'documentCount' => 6,
        'url' => ['/ksdn/detail', 'id' => 3],
    ],
    [
        'image' => '@web/images/countries/albania.png',
        'title' => 'ALBANIA',
        'documentCount' => 1,
        'url' => ['/ksdn/detail', 'id' => 3],
    ],
    [
        'image' => '@web/images/countries/palestine.png',
        'title' => 'PALESTINA',
        'documentCount' => 1,
        'url' => ['/ksdn/detail', 'id' => 3],
    ],
    [
        'image' => '@web/images/countries/turkey.png',
        'title' => 'TURKI',
        'documentCount' => 1,
        'url' => ['/ksdn/detail', 'id' => 3],
    ],
    [
        'image' => '@web/images/countries/swiss.png',
        'title' => 'SWISS',
        'documentCount' => 2,
        'url' => ['/ksdn/detail', 'id' => 3],
    ],
    [
        'image' => '@web/images/countries/singapore.png',
        'title' => 'SINGAPURA   ',
        'documentCount' => 2,
        'url' => ['/ksdn/detail', 'id' => 3],
    ],
    [
        'image' => '@web/images/countries/azerbaijan.png',
        'title' => 'AJERBAIJAN',
        'documentCount' => 2,
        'url' => ['/ksdn/detail', 'id' => 3],
    ],
    [
        'image' => '@web/images/countries/austria.png',
        'title' => 'AUSTRIA',
        'documentCount' => 2,
        'url' => ['/ksdn/detail', 'id' => 3],
    ],
    [
        'image' => '@web/images/countries/australia.png',
        'title' => 'AUSTRALIA',
        'documentCount' => 2,
        'url' => ['/ksdn/detail', 'id' => 3],
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

<?= Html::endTag('div') ?>