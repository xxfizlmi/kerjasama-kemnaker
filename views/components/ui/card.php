<?php

use yii\helpers\Html;

/**
 * @var string $id
 * @var string $image
 * @var string $title
 * @var string|null $subtitle
 * @var int|null $documentCount
 * @var string $type
 */
?>

<?= Html::beginTag('article', [
    'class' => 'card border rounded-4 overflow-hidden text-center h-100 d-flex flex-column p-2',
    'style' => 'width:260px;',
]) ?>

<!-- IMAGE -->
<?= Html::beginTag('div', [
    'class' => 'd-flex flex-column align-items-center p-4',
]) ?>

<?= Html::beginTag('div', [
    'class' => 'd-flex justify-content-center',
]) ?>

<?= Html::img($image, [
    'alt' => $name,
    'loading' => 'lazy',
    'width' => 100,
    'height' => 100,
    'class' => 'object-fit-contain',
]) ?>

<?= Html::endTag('div') ?>

<?= Html::endTag('div') ?>


<!-- CONTENT -->
<?= Html::beginTag('div', [
    'class' => 'd-flex flex-column align-items-center p-3 pt-0 flex-grow-1',
]) ?>

<?= Html::tag(
    'h3',
    Html::encode($name),
    [
        'class' => 'h6 fw-bold mb-0',
    ]
) ?>

<?php if (!empty($title)) : ?>

    <?= Html::tag(
        'p',
        Html::encode($title),
        [
            'class' => 'text-secondary small mt-3 mb-3 text-clamp-2',
            'title' => $title,
        ]
    ) ?>
<?php elseif (!empty($documentCount)) : ?>

    <?= Html::tag(
        'p',
        Html::encode($documentCount) . ' ' . 'Document',
        [
            'class' => 'small mt-3 mb-3 text-clamp-2 border text-white bg-secondary px-3 py-1 rounded-pill ',
            'title' => $documentCount,
        ]
    ) ?>

<?php endif; ?>
<!-- BUTTON -->
<?= Html::button(
    Html::tag('span', 'Lihat Detail') .
        Html::tag('i', '', [
            'class' => 'bi bi-arrow-right',
            'aria-hidden' => 'true',
        ]),
    [
        'type' => 'button',
        'class' => 'btn btn-outline-primary rounded-pill d-inline-flex align-items-center gap-2 mt-auto small px-3',
        'data-bs-toggle' => 'modal',
        'data-bs-target' => '#modal-' . $id,
    ]
) ?>

<!-- <?= Html::endTag('div') ?> -->

<?= Html::endTag('article') ?>