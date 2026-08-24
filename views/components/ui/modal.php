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

<?= Html::tag(
    'h5',
    Html::encode($title),
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
            'alt' => $title,
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

<?= Html::endTag('div') ?>

<?= Html::endTag('div') ?>

<?= Html::endTag('div') ?>

<?= Html::endTag('div') ?>

<?= Html::endTag('div') ?>