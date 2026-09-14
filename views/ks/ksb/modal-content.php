<?php

use yii\helpers\Html;

/**
 * @var string $id
 * @var string $image
 * @var string $name
 * @var int $documentCount
 * @var array $items
 * @var string|null $url
 */

$documentCount = (int) ($documentCount ?? 0);

?>


<!-- =========================================================
     HEADER
========================================================= -->
<div class="ksb-modal-header">

    <div class="ksb-modal-title-wrap">

        <div class="ksb-modal-flag">

            <?= Html::img(
                $image,
                [
                    'alt' => $name,
                ]
            ) ?>

        </div>

        <h2
            class="ksb-modal-title"
            id="modal-label-<?= Html::encode($id) ?>">
            Kerja Sama: <?= Html::encode($name) ?>
        </h2>

    </div>


    <?= Html::button(
        '',
        [
            'type' => 'button',
            'class' => 'btn-close ksb-modal-close',
            'data-bs-dismiss' => 'modal',
            'aria-label' => 'Tutup',
        ]
    ) ?>

</div>


<!-- =========================================================
     BODY
========================================================= -->
<div class="ksb-modal-body">

    <p class="ksb-modal-summary">
        Ditemukan
        <?= Html::encode($documentCount) ?>
        dokumen kerja sama untuk negara ini.
    </p>


    <div class="ksb-modal-list">

        <?php if (!empty($items)): ?>

            <?php foreach ($items as $item): ?>

                <article class="ksb-modal-document">

                    <div class="ksb-modal-document-main">

                        <h3>
                            <?= Html::encode(
                                $item['title'] ?? ''
                            ) ?>
                        </h3>


                        <div class="ksb-modal-meta">

                            <?php if (!empty($item['mitra'])): ?>

                                <span>
                                    <i class="bi bi-briefcase-fill"></i>

                                    Mitra:
                                    <?= Html::encode(
                                        $item['mitra']
                                    ) ?>
                                </span>

                            <?php endif; ?>


                            <?php if (
                                !empty($item['mitra'])
                                && !empty($item['pemerintah'])
                            ): ?>

                                <span class="ksb-meta-separator"></span>

                            <?php endif; ?>


                            <?php if (!empty($item['pemerintah'])): ?>

                                <span>
                                    <i class="bi bi-tag-fill"></i>

                                    <?= Html::encode(
                                        $item['pemerintah']
                                    ) ?>
                                </span>

                            <?php endif; ?>

                        </div>


                        <?php if (!empty($item['description'])): ?>

                            <p class="ksb-modal-description">
                                <?= Html::encode(
                                    $item['description']
                                ) ?>
                            </p>

                        <?php endif; ?>

                    </div>


                    <?php if (!empty($item['status'])): ?>

                        <span class="ksb-status">
                            <?= Html::encode(
                                $item['status']
                            ) ?>
                        </span>

                    <?php endif; ?>

                </article>

            <?php endforeach; ?>

        <?php else: ?>

            <div class="ksb-modal-empty">

                Belum tersedia dokumen untuk negara ini.

            </div>

        <?php endif; ?>

    </div>

</div>


<?php if (!empty($url)): ?>

    <div class="ksb-modal-footer">

        <?= Html::a(
            'Website Resmi',
            $url,
            [
                'class' => 'btn btn-primary rounded-pill px-4',
                'target' => '_blank',
                'rel' => 'noopener noreferrer',
            ]
        ) ?>

    </div>

<?php endif; ?> 