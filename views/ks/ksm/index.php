<?php

use yii\helpers\Html;
use yii\helpers\Url;

/**
 * @var array $hero
 * @var array $cards
 */

?>

<div class="ksm-page">

    <!-- =========================================================
         HERO
    ========================================================== -->
    <section class="ksm-hero">

        <div class="container">

            <!-- Heading -->
            <div class="ksm-hero-heading text-center">

                <h1>
                    <?= Html::encode(
                        $hero['title']
                            ?? 'Kerja Sama Multilateral'
                    ) ?>
                </h1>

                <p>
                    <?= Html::encode(
                        $hero['description']
                            ?? 'Kerja Sama multilateral dilaksanakan oleh lebih dari 2 (dua) negara dan/atau organisasi internasional tanpa memandang wilayah atau kawasan tertentu.'
                    ) ?>
                </p>

            </div>


            <!-- =================================================
                 STRATEGIC CARDS
            ================================================== -->
            <div class="row g-4 ksm-strategic-row">

                <!-- Tujuan Strategis -->
                <div class="col-lg-6">

                    <article class="ksm-strategic-card">

                        <div class="ksm-strategic-heading">

                            <div class="ksm-strategic-icon blue">
                                <i class="bi bi-bullseye"></i>
                            </div>

                            <h2 class="blue">
                                TUJUAN STRATEGIS
                            </h2>

                        </div>

                        <p>
                            Mendorong pertumbuhan ekonomi nasional melalui
                            peningkatan kompetensi SDM, perluasan pasar kerja luar
                            negeri, serta penguatan perlindungan tenaga kerja yang
                            adaptif.
                        </p>

                    </article>

                </div>


                <!-- Sektor Prioritas -->
                <div class="col-lg-6">

                    <article class="ksm-strategic-card">

                        <div class="ksm-strategic-heading">

                            <div class="ksm-strategic-icon gold">
                                <i class="bi bi-layers-fill"></i>
                            </div>

                            <h2 class="gold">
                                SEKTOR PRIORITAS
                            </h2>

                        </div>

                        <p>
                            Akselerasi pelatihan vokasi berbasis industri,
                            adaptasi ekonomi digital dan hijau, serta penciptaan
                            hubungan industrial yang kondusif bagi investasi.
                        </p>

                    </article>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================================
         ORGANISASI MULTILATERAL
    ========================================================== -->
    <?= Html::beginTag('div', ['class' => 'container py-5',]) ?>
    <?= Html::beginTag('div', ['class' => 'row justify-content-center g-4',]) ?>
    <?php foreach ($cards as $card): ?>
        <?= Html::beginTag('div', ['class' => 'col-12 col-sm-6 col-lg-3',]) ?>
        <?= $this->render('../../components/ui/card', array_merge(
            $card,
            ['type' => 'ksm']
        )) ?>
        <?= Html::endTag('div') ?>
    <?php endforeach; ?>
    <?= Html::endTag('div') ?>
    <?= Html::endTag('div') ?>



    <!-- =========================================================
         MODALS
    ========================================================== -->
    <?php foreach ($cards as $card): ?>

        <?= $this->render(
            '../../components/ui/modal',
            array_merge(
                $card,
                [
                    'type' => 'ksm',
                    'card' => $card,
                ]
            )
        ) ?>

    <?php endforeach; ?>

</div>

<section class="ksm-partners py-5 overflow-hidden">

    <div class="container">

        <!-- JUDUL -->
        <div class="text-center mb-4">
            <?= Html::tag(
                'h2',
                'Situs Mitra Strategis',
                [
                    'class' => 'ksm-partners-title fw-bold mb-2',
                ]
            ) ?>
        </div>

        <!-- SLIDER -->
        <div class="ksm-partners-slider overflow-hidden">

            <div class="d-flex gap-3 strategic-partners-track py-3">

                <?php foreach (array_merge($cards, $cards) as $card): ?>

                    <?= Html::a(

                        Html::beginTag('div', [
                            'class' => 'card ksm-partner-card h-100',
                        ])

                            . Html::beginTag('div', [
                                'class' => 'card-body d-flex flex-column align-items-center justify-content-center text-center p-3',
                            ])

                            // LOGO
                            . Html::beginTag('div', [
                                'class' => 'ksm-partner-logo d-flex align-items-center justify-content-center mb-3',
                            ])

                            . Html::img(
                                Url::to($card['image']),
                                [
                                    'alt' => $card['name'],
                                    'class' => 'img-fluid object-fit-contain',
                                    'loading' => 'lazy',
                                ]
                            )

                            . Html::endTag('div')

                            // NAMA SINGKAT
                            . Html::tag(
                                'h6',
                                Html::encode($card['name']),
                                [
                                    'class' => 'ksm-partner-name fw-semibold mb-1',
                                ]
                            )

                            // NAMA LENGKAP
                            . Html::tag(
                                'p',
                                Html::encode($card['title']),
                                [
                                    'class' => 'ksm-partner-description text-clamp-2 mb-0',
                                ]
                            )

                            . Html::endTag('div')
                            . Html::endTag('div'),

                        $card['url'] ?? '#',
                        [
                            'class' => 'ksm-partner-link text-decoration-none flex-shrink-0',
                            'target' => '_blank',
                            'rel' => 'noopener noreferrer',
                            'aria-label' => 'Kunjungi situs ' . $card['name'],
                        ]
                    ) ?>

                <?php endforeach; ?>

            </div>

        </div>

    </div>

</section>