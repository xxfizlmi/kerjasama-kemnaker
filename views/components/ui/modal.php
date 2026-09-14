<?php

use yii\helpers\Html;

/**
 * @var string $id
 * @var string $type
 * @var array $card
 */

$type = $type ?? '';

$isRegional = $type === 'ksr';
$isBilateral = $type === 'ksb';
$isMultilateral = $type === 'ksm';


/* =========================================================
   MODAL CLASS
========================================================= */

if ($isRegional) {

    $dialogClass =
        'modal-dialog modal-dialog-centered ksr-modal-dialog';

    $contentClass =
        'modal-content ksr-modal-content';
} elseif ($isBilateral) {

    $dialogClass =
        'modal-dialog modal-dialog-centered ksb-modal-dialog';

    $contentClass =
        'modal-content ksb-modal-content';
} elseif ($isMultilateral) {

    $dialogClass =
        'modal-dialog modal-dialog-centered ksm-modal-dialog';

    $contentClass =
        'modal-content ksm-modal-content';
} else {

    $dialogClass =
        'modal-dialog modal-dialog-centered modal-lg';

    $contentClass =
        'modal-content rounded-4 border-0 shadow';
}

?>


<?= Html::beginTag(
    'div',
    [
        'class' => 'modal fade',
        'id' => 'modal-' . $id,
        'tabindex' => '-1',
        'aria-labelledby' => 'modal-label-' . $id,
        'aria-hidden' => 'true',
    ]
) ?>


<?= Html::beginTag(
    'div',
    [
        'class' => $dialogClass,
    ]
) ?>


<?= Html::beginTag(
    'div',
    [
        'class' => $contentClass,
    ]
) ?>


<?php if ($isRegional): ?>

    <?= $this->render(
        '../../ks/ksr/modal-content',
        $card
    ) ?>


<?php elseif ($isBilateral): ?>

    <?= $this->render(
        '../../ks/ksb/modal-content',
        $card
    ) ?>


<?php elseif ($isMultilateral): ?>

    <?= $this->render(
        '../../ks/ksm/modal-content',
        $card
    ) ?>


<?php else: ?>

    <div class="modal-body">
        Konten modal tidak tersedia.
    </div>

<?php endif; ?>


<?= Html::endTag('div') ?>

<?= Html::endTag('div') ?>

<?= Html::endTag('div') ?>