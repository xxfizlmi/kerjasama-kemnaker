<?php

use yii\helpers\Html;

/**
 * @var array $hero
 * @var array $cards
 */

$totalDocuments = 0;

foreach ($cards as $card) {
    $totalDocuments += (int) ($card['documentCount'] ?? 0);
}

$totalCountries = count($cards);

?>

<div class="ksb-page">

    <!-- =========================================================
         HERO BILATERAL
    ========================================================== -->
    <section class="ksb-hero">

        <div class="container">

            <div class="ksb-hero-heading text-center">

                <h1>
                    <?= Html::encode(
                        $hero['title'] ?? 'Kerja Sama Bilateral'
                    ) ?>
                </h1>

                <p>
                    <?= Html::encode(
                        $hero['description']
                            ?? 'Kerja Sama bilateral dilaksanakan oleh 2 (dua) pihak antara Kementerian dengan pemerintah negara asing dan/atau organisasi internasional.'
                    ) ?>
                </p>

            </div>


            <!-- Strategic Information -->
            <div class="row g-4 g-lg-5 ksb-hero-strategic">

                <?php
                $highlights = $hero['highlights'] ?? [];

                $defaultHighlights = [
                    [
                        'title' => 'TUJUAN STRATEGIS',
                        'icon' => 'bi bi-flag-fill',
                        'class' => 'blue',
                        'description' =>
                        'meningkatkan kualitas dan daya saing tenaga kerja nasional, memperluas kesempatan kerja yang layak, serta memperkuat tata kelola dan diplomasi ketenagakerjaan yang inklusif, adaptif, dan berkelanjutan',
                    ],
                    [
                        'title' => 'SEKTOR PRIORITAS',
                        'icon' => 'bi bi-grid-fill',
                        'class' => 'gold',
                        'description' =>
                        'pengembangan kompetensi dan produktivitas tenaga kerja, transformasi ketenagakerjaan digital dan hijau, penguatan hubungan industrial, serta peningkatan tata kelola dan kapasitas kelembagaan ketenagakerjaan',
                    ],
                ];

                if (empty($highlights)) {
                    $highlights = $defaultHighlights;
                }
                ?>

                <?php foreach ($highlights as $index => $item): ?>

                    <div class="col-lg-6">

                        <article class="ksb-strategic-item <?= $index === 0 ? 'blue' : 'gold' ?>">

                            <h2>
                                <i class="<?= Html::encode(
                                                $item['icon']
                                                    ?? ($index === 0
                                                        ? 'bi bi-flag-fill'
                                                        : 'bi bi-grid-fill')
                                            ) ?>"></i>

                                <?= Html::encode(
                                    $item['title']
                                        ?? ($index === 0
                                            ? 'TUJUAN STRATEGIS'
                                            : 'SEKTOR PRIORITAS')
                                ) ?>
                            </h2>

                            <p>
                                <?= Html::encode(
                                    $item['description'] ?? ''
                                ) ?>
                            </p>

                        </article>

                    </div>

                <?php endforeach; ?>

            </div>


            <!-- Statistic -->
            <div class="ksb-hero-statistics">

                <div class="ksb-stat-item">

                    <i class="bi bi-file-earmark-fill"></i>

                    <span>
                        Total Dokumen Aktif:
                    </span>

                    <strong>
                        <?= Html::encode($totalDocuments) ?>
                    </strong>

                </div>

                <span class="ksb-stat-divider"></span>

                <div class="ksb-stat-country">

                    <i class="bi bi-globe-americas"></i>

                    <span>
                        Total Negara
                    </span>

                    <strong>
                        <?= Html::encode($totalCountries) ?>
                    </strong>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================================
         COUNTRY CARDS
    ========================================================== -->
    <section class="ksb-country-section">

        <div class="container">

            <div class="row g-4 justify-content-center">

                <?php foreach ($cards as $card): ?>

                    <div class="col-12 col-sm-6 col-lg-3">

                        <?= $this->render(
                            '../../components/ui/card',
                            array_merge(
                                $card,
                                [
                                    'type' => 'ksb',
                                ]
                            )
                        ) ?>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </section>


    <!-- =========================================================
         MODALS
    ========================================================== -->
    <?php foreach ($cards as $card): ?>

        <?= $this->render(
            '../../components/ui/modal',
            array_merge(
                $card,
                [
                    'type' => 'ksb',
                    'card' => $card,
                ]
            )
        ) ?>

    <?php endforeach; ?>

</div>