<?php

use yii\helpers\Html;

/**
 * @var string $id
 * @var string $image
 * @var string $name
 * @var string|null $status
 * @var string|null $description
 * @var array|null $items
 */

$items = $items ?? [];


/*
 * Deskripsi utama organisasi.
 *
 * Prioritas:
 * - item pertama
 * - description card
 */
$organizationDescription =
    $items[0]['description']
    ?? $description
    ?? '';

?>

<!-- =========================================================
     HEADER
========================================================= -->
<div class="ksm-modal-header">

    <div class="ksm-modal-title-wrap">

        <div class="ksm-modal-logo">

            <?= Html::img(
                $image,
                [
                    'alt' => $name,
                ]
            ) ?>

        </div>


        <h2
            class="ksm-modal-title"
            id="modal-label-<?= Html::encode($id) ?>">
            <?= Html::encode($name) ?>
        </h2>

    </div>


    <?= Html::button(
        '',
        [
            'type' => 'button',
            'class' => 'btn-close ksm-modal-close',
            'data-bs-dismiss' => 'modal',
            'aria-label' => 'Tutup',
        ]
    ) ?>

</div>


<!-- =========================================================
     BODY
========================================================= -->
<div class="ksm-modal-body">

    <!-- Status -->
    <div class="ksm-modal-status-row">

        <?php if (!empty($status)): ?>

            <span class="ksm-status">

                <i class="bi bi-check-lg"></i>

                <?= Html::encode($status) ?>

            </span>

        <?php endif; ?>


        <span class="ksm-modal-category">
            Kerja Sama Multilateral
        </span>

    </div>


    <!-- Heading -->
    <h3 class="ksm-modal-section-title">
        TENTANG ORGANISASI
    </h3>


    <!-- Description Box -->
    <div class="ksm-modal-description-box">

        <p>
            <?= Html::encode(
                $organizationDescription
            ) ?>
        </p>

    </div>

</div>


<!-- =========================================================
     FOOTER
========================================================= -->
<div class="ksm-modal-footer">

    <?= Html::button(
        'Tutup',
        [
            'type' => 'button',
            'class' => 'ksm-modal-close-button',
            'data-bs-dismiss' => 'modal',
        ]
    ) ?>

</div>