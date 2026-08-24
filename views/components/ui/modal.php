<?php

use yii\helpers\Html;

/**
 * @var string $id
 * @var string $image
 * @var string $title
 * @var string $description
 * @var array $items
 */
?>

<?= Html::beginTag('div', [
    'class' => 'modal fade',
    'id' => 'modal-' . $id,
    'tabindex' => '-1',
    'aria-labelledby' => 'modal-label-' . $id,
    'aria-hidden' => 'true',
]) ?>
<?= Html::beginTag('div', [
    'class' => 'modal-dialog modal-dialog-centered modal-lg',
]) ?>

<?= Html::beginTag('div', [
    'class' => 'modal-content rounded-4 border-0 shadow',
]) ?>

<!-- HEADER -->
<?= Html::beginTag('div', [
    'class' => 'modal-header border-1 px-5',
]) ?>
<?php switch ($type) {
    case 'ksr': ?>
        <?= Html::tag(
            'h5',
            Html::encode($name),
            [
                'class' => 'modal-title fw-bold',
                'id' => 'modal-label-' . $id,
            ]
        ) ?>
        <?= Html::button('', [
            'type' => 'button',
            'class' => 'btn-close',
            'data-bs-dismiss' => 'modal',
            'aria-label' => 'Close',
        ]) ?>

        <?= Html::endTag('div') ?>
        <!-- BODY -->
        <?= Html::beginTag('div', [
            'class' => 'modal-body px-4 px-md-5',
        ]) ?>
        <!-- LOGO -->
        <?= Html::beginTag('div', [
            'class' => 'text-left mb-4',
        ]) ?>

        <!-- <?= Html::img($image, [
                    'alt' => $name,
                    'width' => 100,
                    'height' => 100,
                    'class' => 'object-fit-contain mb-3',
                ]) ?> -->

        <?= Html::tag(
            'h4',
            'Pilar Organisasi',
            [
                'class' => 'fw-normal mb-2',
            ]
        ) ?>

        <?= Html::tag(
            'p',
            Html::encode($description),
            [
                'class' => 'text-secondary mb-0',
            ]
        ) ?>

        <?= Html::endTag('div') ?>

        <?= Html::tag('hr', '', [
            'class' => 'my-auto border-dashed',
        ]) ?>

        <!-- ITEMS -->
        <?php if (!empty($items)): ?>

            <?= Html::beginTag('div', [
                'class' => 'mt-4',
            ]) ?>

            <?php foreach ($items as $item): ?>

                <?= Html::beginTag('div', [
                    'class' => 'mb-4',
                ]) ?>

                <?= Html::tag(
                    'h5',
                    'Posisi / Keterlibatan',
                    [
                        'class' => 'fw-normal mb-2',
                    ]
                ) ?>

                <?php if (!empty($item['description'])): ?>

                    <?= Html::tag(
                        'p',
                        Html::encode($item['description']),
                        [
                            'class' => 'text-secondary mb-0 lh-lg',
                        ]
                    ) ?>

                <?php endif; ?>

                <?= Html::endTag('div') ?>

            <?php endforeach; ?>

            <?= Html::endTag('div') ?>

        <?php endif; ?>

        <?= Html::endTag('div') ?>


        <!-- FOOTER -->


        <?= Html::beginTag('div', [
            'class' => 'modal-footer border-0',
        ]) ?>

        <?php if (!empty($url)): ?>

            <?= Html::a(
                'Website Resmi',
                $url,
                [
                    'class' => 'btn btn-primary rounded-pill px-4',
                    'target' => '_blank',
                    'rel' => 'noopener noreferrer',
                ]
            ) ?>

        <?php endif; ?>



    <?php
        break;
    case 'ksm': ?>

        <?= Html::img($image, [
            'alt' => $name,
            // 'width' => 30,
            'height' => 40,
            'class' => 'object-fit-contain ',
        ]) ?>
        <?= Html::tag(
            'h5',
            Html::encode($name),
            [
                'class' => 'modal-title fw-bold ms-2',
                'id' => 'modal-label-' . $id,
            ]
        ) ?>
        <?= Html::button('', [
            'type' => 'button',
            'class' => 'btn-close',
            'data-bs-dismiss' => 'modal',
            'aria-label' => 'Close',
        ]) ?>

        <?= Html::endTag('div') ?>
        <!-- BODY -->
        <?= Html::beginTag('div', [
            'class' => 'modal-body px-2 px-md-3 border',
        ]) ?>
        <!-- LOGO -->
        <?= Html::beginTag('div', [
            'class' => 'text-left d-flex flex-row align-items-center  gap-3',
        ]) ?>

        <?= Html::tag(
            'p',
            Html::tag('i', '', ['class' => 'bi bi-check-lg me-2', 'aria-hidden' => 'true',]) . $status,
            [
                'class' => 'fw-normal mb-2 border bg-success text-white rounded-pill px-3 py-1 w-auto mt-2',
            ]
        ) ?>

        <?= Html::tag(
            'p',
            'Kerja Sama Multilateral',
            [
                'class' => 'text-secondary mb-0',
            ]
        ) ?>

        <?= Html::endTag('div') ?>

        <!-- ITEMS -->
        <?php if (!empty($items)): ?>

            <?= Html::beginTag('div', [
                'class' => 'mt-4',
            ]) ?>

            <?php foreach ($items as $item): ?>

                <?= Html::beginTag('div', [
                    'class' => 'mb-4',
                ]) ?>

                <?= Html::tag(
                    'h5',
                    'TENTANG ORGANISASI',
                    [
                        'class' => 'fw-normal mb-3 fs-5 ',
                    ]
                ) ?>

                <?php if (!empty($item['description'])): ?>

                    <?= Html::tag(
                        'p',
                        Html::encode($item['description']),
                        [
                            'class' => 'text-secondary mb-0 lh-lg px-3 border-start border-4 rounded border-primary',
                        ]
                    ) ?>

                <?php endif; ?>

                <?= Html::endTag('div') ?>

            <?php endforeach; ?>

            <?= Html::endTag('div') ?>

        <?php endif; ?>

        <?= Html::endTag('div') ?>


        <!-- FOOTER -->


        <?= Html::beginTag('div', [
            'class' => 'modal-footer border-0',
        ]) ?>

        <?php if (!empty($url)): ?>

            <?= Html::a(
                'Website Resmi',
                $url,
                [
                    'class' => 'btn btn-primary rounded-pill px-4',
                    'target' => '_blank',
                    'rel' => 'noopener noreferrer',
                ]
            ) ?>

        <?php endif; ?>



    <?php
        break;

    default:
    ?>

        <?= Html::tag('div', '', [
            'class' => 'mt-3 mb-3',
        ]) ?>

<?php
        break;
}
?>

<?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>
<?= Html::endTag('div') ?>