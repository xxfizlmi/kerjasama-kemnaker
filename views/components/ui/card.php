<?php

use yii\helpers\Html;

/**
 * @var string $id
 * @var string $image
 * @var string $name
 * @var string|null $title
 * @var string|null $description
 * @var string|null $status
 * @var string|null $mitra
 * @var string|null $pemerintah
 * @var int|null $documentCount
 * @var string|null $type
 */

$type = $type ?? null;
$documentCount = (int) ($documentCount ?? 0);

?>


<?php if ($type === 'ksb'): ?>

    <!-- =========================================================
         BILATERAL COUNTRY CARD
    ========================================================== -->
    <article class="ksb-country-card">

        <div class="ksb-country-flag">

            <?= Html::img(
                $image,
                [
                    'alt' => $name,
                    'loading' => 'lazy',
                ]
            ) ?>

        </div>


        <h3 class="ksb-country-name">
            <?= Html::encode($name) ?>
        </h3>


        <div class="ksb-country-count">

            <?= Html::encode($documentCount) ?>

            <?= $documentCount === 1
                ? 'Dokumen'
                : 'Dokumen' ?>

        </div>


        <?= Html::button(
            'Lihat Daftar <i class="bi bi-chevron-down"></i>',
            [
                'type' => 'button',
                'class' => 'ksb-country-button',
                'data-bs-toggle' => 'modal',
                'data-bs-target' => '#modal-' . $id,
            ]
        ) ?>

    </article>


<?php else: ?>

    <!-- =========================================================
         DEFAULT CARD
    ========================================================== -->

    <?= Html::beginTag(
        'article',
        [
            'class' =>
            'card border rounded-4 overflow-hidden text-center h-100 d-flex flex-column p-2',
            'style' => 'width:260px;',
        ]
    ) ?>


    <div class="d-flex flex-column align-items-center p-4">

        <?= Html::img(
            $image,
            [
                'alt' => $name,
                'loading' => 'lazy',
                'width' => 100,
                'height' => 100,
                'class' => 'object-fit-contain',
            ]
        ) ?>

    </div>


    <div class="d-flex flex-column align-items-center p-3 pt-0 flex-grow-1">

        <?= Html::tag(
            'h3',
            Html::encode($name),
            [
                'class' => 'h6 fw-bold mb-0',
            ]
        ) ?>


        <?php

        $additionalText = null;

        if (!empty($title)) {
            $additionalText = $title;
        } elseif (!empty($documentCount)) {
            $additionalText = $documentCount . ' Document';
        } elseif (!empty($description)) {
            $additionalText = $description;
        } elseif (!empty($mitra)) {
            $additionalText = $mitra;
        } elseif (!empty($pemerintah)) {
            $additionalText = $pemerintah;
        }

        ?>


        <?php if ($additionalText !== null): ?>

            <?= Html::tag(
                'p',
                Html::encode($additionalText),
                [
                    'class' =>
                    'text-secondary-2 small mt-3 mb-3 text-clamp-2',
                    'title' => $additionalText,
                ]
            ) ?>

        <?php endif; ?>


        <?= Html::button(
            Html::tag('span', 'Lihat Detail')
                . Html::tag(
                    'i',
                    '',
                    [
                        'class' => 'bi bi-arrow-right',
                        'aria-hidden' => 'true',
                    ]
                ),
            [
                'type' => 'button',
                'class' =>
                'btn btn-outline-primary rounded-pill d-inline-flex align-items-center gap-2 mt-auto small px-3',
                'data-bs-toggle' => 'modal',
                'data-bs-target' => '#modal-' . $id,
            ]
        ) ?>

    </div>

    <?= Html::endTag('article') ?>

<?php endif; ?>
<?php if (($type ?? '') === 'ksr'): ?>

    <article
        class="card ksr-region-card text-center h-100"
        role="button"
        tabindex="0"
        data-bs-toggle="modal"
        data-bs-target="#modal-<?= Html::encode($id) ?>">

        <div class="ksr-region-image">

            <?= Html::img(
                $image,
                [
                    'alt' => $name,
                    'loading' => 'lazy',
                    'class' => 'img-fluid object-fit-contain',
                ]
            ) ?>

        </div>

        <div class="ksr-region-content">

            <h3 class="ksr-region-name">
                <?= Html::encode($name) ?>
            </h3>

            <?php if (!empty($description)): ?>

                <p class="ksr-region-description">
                    <?= Html::encode($description) ?>
                </p>

            <?php endif; ?>

        </div>

    </article>

<?php else: ?>

    <!-- card default Anda yang sekarang -->

<?php endif; ?>