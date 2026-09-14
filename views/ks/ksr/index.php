<?php

use yii\helpers\Html;

/**
 * @var array $hero
 * @var array $cards
 */

?>

<div class="ksr-page">

    <!-- =========================================================
         HERO
    ========================================================== -->
    <section class="ksr-hero">
        <div class="container">

            <div class="ksr-hero-heading text-center">

                <h1>
                    <?= Html::encode(
                        $hero['title'] ?? 'Kerja Sama Regional'
                    ) ?>
                </h1>

                <p>
                    <?= Html::encode(
                        $hero['description']
                            ?? 'Kerja sama regional di bidang ketenagakerjaan merupakan kerja sama peningkatan sektor ketenagakerjaan yang dilaksanakan oleh pemerintah Indonesia dengan pemerintah negara lain atau organisasi internasional dalam konteks kesatuan kawasan untuk mendukung proses integrasi dan pertumbuhan ekonomi kawasan tersebut.'
                    ) ?>
                </p>

                <a
                    href="https://jdih.kemnaker.go.id/peraturan/Permenaker%20No.%2019%20Tahun%202024.pdf"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="ksr-regulation">
                    <i class="bi bi-journal-text"></i>

                    <span>
                        PERMENAKER RI NO. 19 TAHUN 2024
                    </span>
                </a>

            </div>


            <!-- =================================================
                 STRATEGIC CARDS
            ================================================== -->
            <div class="row g-4 ksr-strategic-row">

                <!-- Tujuan -->
                <div class="col-lg-6">

                    <article class="ksr-strategic-card">

                        <div class="ksr-strategic-icon blue">
                            <i class="bi bi-bullseye"></i>
                        </div>

                        <h2>
                            TUJUAN STRATEGIS
                        </h2>

                        <p>
                            "Meningkatkan kualitas dan dampak kerja sama regional
                            untuk mengembangkan kualitas keterampilan dan
                            perlindungan hak tenaga kerja, memperluas kesempatan
                            kerja, serta mendukung pembangunan ekosistem
                            ketenagakerjaan nasional dan kawasan."
                        </p>

                    </article>

                </div>


                <!-- Sektor -->
                <div class="col-lg-6">

                    <article class="ksr-strategic-card">

                        <div class="ksr-strategic-icon gold">
                            <i class="bi bi-layers-fill"></i>
                        </div>

                        <h2>
                            SEKTOR PRIORITAS
                        </h2>

                        <p>
                            "Ketenagakerjaan dan pelatihan vokasi, penempatan
                            dan perluasan kesempatan kerja, hubungan industrial,
                            keselamatan dan kesehatan kerja, serta produktivitas."
                        </p>

                    </article>

                </div>

            </div>

        </div>
    </section>


    <!-- =========================================================
         ORGANISASI REGIONAL
    ========================================================== -->
    <section class="ksr-organizations">
        <div class="container">

            <div class="ksr-section-heading text-center">

                <h2>
                    ORGANISASI REGIONAL
                </h2>

                <span></span>

            </div>


            <div class="row g-4">

                <?php foreach ($cards as $card): ?>

                    <div class="col-12 col-sm-6 col-lg-3">

                        <button
                            type="button"
                            class="ksr-organization-card"
                            data-bs-toggle="modal"
                            data-bs-target="#modal-<?= Html::encode($card['id']) ?>">

                            <!-- Logo -->
                            <div class="ksr-organization-logo">

                                <?= Html::img(
                                    $card['image'],
                                    [
                                        'alt' => $card['name'],
                                        'loading' => 'lazy',
                                    ]
                                ) ?>

                            </div>


                            <!-- Name -->
                            <h3>
                                <?= Html::encode(
                                    $card['name'] ?? ''
                                ) ?>
                            </h3>


                            <!-- Subtitle -->
                            <?php
                            $subtitle =
                                $card['title']
                                ?? $card['description']
                                ?? '';
                            ?>

                            <?php if (!empty($subtitle)): ?>

                                <p>
                                    <?= Html::encode($subtitle) ?>
                                </p>

                            <?php endif; ?>

                        </button>

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
                    'type' => 'ksr',
                    'card' => $card,
                ]
            )
        ) ?>

    <?php endforeach; ?>

</div>