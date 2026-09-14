<?php

use yii\helpers\Html;

/**
 * @var string $id
 * @var string $name
 * @var string|null $title
 * @var string|null $description
 * @var array|null $items
 * @var string|null $url
 */

$items = $items ?? [];


/* =========================================================
   PILAR
========================================================= */

$pillarText =
    $title
    ?? $description
    ?? '-';


/* =========================================================
   POSITION / INVOLVEMENT
========================================================= */

$positionTitle =
    $items[0]['title']
    ?? '';

$positionDescription =
    $items[0]['description']
    ?? '';

?>

<!-- =========================================================
     MODAL HEADER
========================================================= -->
<div class="ksr-modal-header">

    <h2
        class="ksr-modal-title"
        id="modal-label-<?= Html::encode($id) ?>">
        <?= Html::encode($name ?? '') ?>
    </h2>


    <?= Html::button(
        '',
        [
            'type' => 'button',
            'class' => 'btn-close btn-close-white ksr-modal-close',
            'data-bs-dismiss' => 'modal',
            'aria-label' => 'Tutup',
        ]
    ) ?>

</div>


<!-- =========================================================
     MODAL BODY
========================================================= -->
<div class="ksr-modal-body">

    <!-- =====================================================
         PILAR ORGANISASI
    ====================================================== -->
    <section class="ksr-modal-section">

        <span class="ksr-modal-label">
            PILAR ORGANISASI
        </span>

        <p class="ksr-modal-pillar">
            <?= Html::encode($pillarText) ?>
        </p>

        <span class="ksr-modal-dash">
            -
        </span>

    </section>


    <!-- Divider -->
    <div class="ksr-modal-divider"></div>


    <!-- =====================================================
         POSISI / KETERLIBATAN
    ====================================================== -->
    <section class="ksr-modal-section">

        <span class="ksr-modal-label">
            POSISI / KETERLIBATAN
        </span>


        <?php if (!empty($positionTitle)): ?>

            <h3 class="ksr-modal-position-title">
                <?= Html::encode(
                    $positionTitle
                ) ?>
            </h3>

        <?php endif; ?>


        <?php if (!empty($positionDescription)): ?>

            <p class="ksr-modal-position-text">
                <?= Html::encode(
                    $positionDescription
                ) ?>
            </p>

        <?php endif; ?>

    </section>


    <!-- =====================================================
         WEBSITE
    ====================================================== -->
    <?php if (!empty($url)): ?>

        <div class="ksr-modal-actions">

            <?= Html::a(
                '<i class="bi bi-box-arrow-up-right"></i> Website Resmi',
                $url,
                [
                    'class' => 'ksr-website-button',
                    'target' => '_blank',
                    'rel' => 'noopener noreferrer',
                ]
            ) ?>

        </div>

    <?php endif; ?>

</div>