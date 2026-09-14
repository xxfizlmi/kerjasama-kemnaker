<?php

use yii\helpers\Html;

/** @var string $title */
/** @var string $description */
/** @var array $section */
?>

<?= Html::beginTag('section', [
    'class' => 'bg-primary-60 text-white py-5',
]) ?>

    <?= Html::beginTag('div', [
        'class' => 'container',
    ]) ?>

        <?= Html::beginTag('div', [
            'class' => 'row justify-content-center text-center',
        ]) ?>

            <?= Html::beginTag('div', [
                'class' => 'col-12 col-lg-9',
            ]) ?>

                <?= Html::tag(
                    'h1',
                    Html::encode($title),
                    [
                        'class' => 'display-5 fw-bold mb-3',
                    ]
                ) ?>

                <?= Html::tag(
                    'p',
                    Html::encode($description),
                    [
                        'class' => 'lead text-secondary mb-0',
                    ]
                ) ?>

            <?= Html::endTag('div') ?>

        <?= Html::endTag('div') ?>


        <?= Html::beginTag('div', [
            'class' => 'd-flex justify-content-center mt-4',
        ]) ?>

            <?= Html::a(
                '<i class="bi bi-journals me-2 text-warning"></i>' .
                    '<span>Permenaker RI No. 19 Tahun 2024</span>',
                'https://jdih.kemnaker.go.id/peraturan/Permenaker%20No.%2019%20Tahun%202024.pdf',
                [
                    'class' => 'btn btn-outline-light rounded-pill px-4',
                    'target' => '_blank',
                    'rel' => 'noopener noreferrer',
                ]
            ) ?>

        <?= Html::endTag('div') ?>


        <?= Html::beginTag('div', [
            'class' => 'row g-4 mt-4',
        ]) ?>

            <?php foreach ($highlights as $item): ?>

                <?= Html::beginTag('div', [
                    'class' => 'col-12 col-lg-6',
                ]) ?>

                    <?= Html::beginTag('article     ', [
                        'class' => 'h-100 p-5 rounded-4 border border-light border-opacity-10 bg-white bg-opacity-10 highlights',
                    ]) ?>

                        <?= Html::beginTag('div', [
                            'class' => 'd-flex align-items-center gap-3',
                        ]) ?>

                            <?= Html::beginTag('div', [
                                'class' => 'd-flex align-items-center justify-content-center flex-shrink-0 border border-light border-opacity-25 rounded-3' . ' ' . Html::encode($item['class'] ?? '') . ' i-hover',
                                'style' => 'width: 45px; height: 45px;',
                            ]) ?>

                                <?= Html::tag('i', '', [
                                    'class' => Html::encode($item['icon']) . ' ' . 'fs-4 fw-bold text-white',
                                    'aria-hidden' => 'true',
                                ]) ?>
                            <?= Html::endTag('div') ?>

                            <?= Html::tag(
                                'h2',
                                Html::encode($item['title']),
                                [
                                    'class' => 'h6 fw-bold mb-0',
                                ]
                            ) ?>

                        <?= Html::endTag('div') ?>

                        <?= Html::tag(
                            'p',
                            Html::encode($item['description'] ?? ''),
                            [
                                'class' => 'small text-secondary lh-lg mt-3 mb-0',
                            ]
                        ) ?>

                    <?= Html::endTag('article') ?>

                <?= Html::endTag('div') ?>

            <?php endforeach; ?>

        <?= Html::endTag('div') ?>

    <?= Html::endTag('div') ?>

<?= Html::endTag('section') ?>   