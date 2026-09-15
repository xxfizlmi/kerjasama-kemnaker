<?php

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\Url;

$this->title = $article['title'];

/* URL artikel sekarang */
$currentUrl = Url::current([], true);

$whatsappUrl =
    'https://wa.me/?text=' .
    rawurlencode(
        $article['title'] . ' ' . $currentUrl
    );


/* =========================================================
   Gallery Bootstrap Column
========================================================= */

$galleryCount =
    count($article['gallery'] ?? []);

if ($galleryCount === 1) {

    $galleryColumn = 'col-12';
} elseif ($galleryCount === 2) {

    $galleryColumn = 'col-md-6';
} else {

    $galleryColumn = 'col-md-4';
}

?>

<div class="event-detail-page">

    <div class="container">

        <article class="event-detail-article">


            <!-- =================================================
                 HEADER
            ================================================== -->
            <header class="event-detail-header">

                <h1 class="event-detail-title">
                    <?= Html::encode($article['title']) ?>
                </h1>


                <div class="event-detail-meta">

                    <span>

                        <i class="bi bi-calendar-fill"></i>

                        <?= Html::encode(
                            strtoupper($article['date'])
                        ) ?>

                    </span>


                    <span class="event-detail-meta-dot">
                        •
                    </span>


                    <span>

                        <i class="bi bi-building-fill"></i>

                        <?= Html::encode(
                            strtoupper($article['unit'])
                        ) ?>

                    </span>

                </div>


                <!-- SHARE -->
                <div class="event-detail-share">

                    <span>
                        Bagikan:
                    </span>


                    <?= Html::a(
                        '<i class="bi bi-whatsapp"></i>',
                        $whatsappUrl,
                        [
                            'class' =>
                            'event-share-button event-share-whatsapp',

                            'target' => '_blank',

                            'rel' =>
                            'noopener noreferrer',

                            'aria-label' =>
                            'Bagikan melalui WhatsApp',
                        ]
                    ) ?>


                    <button
                        type="button"
                        class="event-share-button event-share-copy"
                        data-url="<?= Html::encode($currentUrl) ?>"
                        aria-label="Salin tautan">

                        <i class="bi bi-link-45deg"></i>

                    </button>

                </div>

            </header>


            <!-- =================================================
                 HERO
            ================================================== -->
            <?php if (!empty($article['hero'])): ?>

                <figure class="event-detail-hero">

                    <?= Html::img(
                        Url::to($article['hero']),
                        [
                            'class' =>
                            'event-detail-hero-image',

                            'alt' =>
                            $article['title'],
                        ]
                    ) ?>

                </figure>

            <?php endif; ?>


            <!-- =================================================
                 BODY
            ================================================== -->
            <div class="event-detail-body">

                <?php foreach (
                    $article['content'] ?? []
                    as $block
                ): ?>

                    <?php

                    $type =
                        $block['type'] ?? 'paragraph';

                    ?>


                    <!-- PARAGRAPH -->
                    <?php if ($type === 'paragraph'): ?>

                        <p
                            class="event-detail-paragraph
                            <?= !empty($block['dropcap'])
                                ? 'event-detail-dropcap'
                                : '' ?>">

                            <?= HtmlPurifier::process(
                                $block['html'] ?? ''
                            ) ?>

                        </p>


                        <!-- HEADING -->
                    <?php elseif ($type === 'heading'): ?>

                        <h2 class="event-detail-subtitle">

                            <?= Html::encode(
                                $block['text'] ?? ''
                            ) ?>

                        </h2>


                        <!-- QUOTE -->
                    <?php elseif ($type === 'quote'): ?>

                        <blockquote class="event-detail-quote">

                            <?= HtmlPurifier::process(
                                $block['html'] ?? ''
                            ) ?>

                        </blockquote>


                        <!-- ORDERED LIST -->
                    <?php elseif (
                        $type === 'ordered-list'
                    ): ?>

                        <ol class="event-detail-list">

                            <?php foreach (
                                $block['items'] ?? []
                                as $item
                            ): ?>

                                <li>

                                    <?= HtmlPurifier::process(
                                        $item
                                    ) ?>

                                </li>

                            <?php endforeach; ?>

                        </ol>

                    <?php endif; ?>

                <?php endforeach; ?>

            </div>


            <!-- =================================================
                 DOCUMENTATION
            ================================================== -->
            <?php if (!empty($article['gallery'])): ?>

                <section class="event-gallery">

                    <div class="event-gallery-heading">

                        <i class="bi bi-camera-fill"></i>

                        <h2>
                            Dokumentasi Kegiatan
                        </h2>

                    </div>


                    <div class="row g-4">

                        <?php foreach (
                            $article['gallery']
                            as $index => $image
                        ): ?>

                            <div class="<?= $galleryColumn ?>">

                                <div class="event-gallery-item">

                                    <?= Html::img(
                                        Url::to($image),
                                        [
                                            'class' =>
                                            'event-gallery-image',

                                            'alt' =>
                                            'Dokumentasi ' .
                                                ($index + 1) .
                                                ' - ' .
                                                $article['title'],

                                            'loading' => 'lazy',
                                        ]
                                    ) ?>

                                </div>

                            </div>

                        <?php endforeach; ?>

                    </div>

                </section>

            <?php endif; ?>

        </article>

    </div>

</div>


<?php

/* =========================================================
   CSS
   Jika nanti sudah final, bisa dipindahkan ke event-detail.css
========================================================= */

$css = <<<CSS

.event-detail-page {
    padding: 38px 0 70px;
    background: #ffffff;
}

.event-detail-article {
    width: 100%;
    max-width: 870px;
    margin: 0 auto;
}


/* =========================================================
   HEADER
========================================================= */

.event-detail-header {
    margin-bottom: 34px;
    text-align: center;
}

.event-detail-title {
    max-width: 850px;
    margin: 0 auto 18px;

    color: #071b35;

    font-size: clamp(29px, 3.2vw, 38px);
    font-weight: 800;
    line-height: 1.08;

    letter-spacing: .2px;
}

.event-detail-meta {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;

    gap: 10px;

    color: #677588;

    font-size: 12px;
    letter-spacing: .8px;
}

.event-detail-meta span {
    display: inline-flex;
    align-items: center;
    gap: 7px;
}

.event-detail-meta i {
    color: #75869a;
}

.event-detail-meta-dot {
    display: inline-block !important;
}


/* =========================================================
   SHARE
========================================================= */

.event-detail-share {
    display: flex;
    align-items: center;
    justify-content: center;

    gap: 10px;

    margin-top: 39px;

    color: #586676;

    font-size: 12px;
    font-weight: 600;
}

.event-share-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    width: 36px;
    height: 36px;

    padding: 0;

    border: 0;
    border-radius: 50%;

    color: #ffffff;

    font-size: 17px;

    text-decoration: none;

    cursor: pointer;

    transition:
        transform .2s ease,
        box-shadow .2s ease;
}

.event-share-button:hover {
    transform: translateY(-2px);
    color: #ffffff;
}

.event-share-whatsapp {
    background: #11c969;
}

.event-share-copy {
    background: #4c596b;
}


/* =========================================================
   HERO
========================================================= */

.event-detail-hero {
    width: 100%;
    margin: 0 0 34px;
}

.event-detail-hero-image {
    display: block;

    width: 100%;
    height: auto;

    max-height: 560px;

    object-fit: cover;

    border-radius: 11px;
}


/* =========================================================
   ARTICLE BODY
========================================================= */

.event-detail-body {
    color: #15243a;

    font-size: 16px;
    line-height: 1.82;
}

.event-detail-paragraph {
    margin: 0 0 22px;

    text-align: justify;
}

.event-detail-paragraph strong {
    font-weight: 700;
}

.event-detail-paragraph em {
    font-style: italic;
}


/* drop cap */

.event-detail-dropcap::first-letter {
    float: left;

    margin:
        2px 8px 0 0;

    color: #0ba7ec;

    font-size: 47px;
    font-weight: 800;

    line-height: .8;
}


/* subtitle */

.event-detail-subtitle {
    margin: 25px 0 8px;

    color: #14243b;

    font-size: 17px;
    font-weight: 800;

    line-height: 1.45;
}


/* ordered list */

.event-detail-list {
    margin:
        6px 0 24px;

    padding-left: 21px;
}

.event-detail-list li {
    margin-bottom: 14px;

    padding-left: 3px;

    text-align: justify;
}


/* quote */

.event-detail-quote {
    margin: 25px 0;

    padding-left: 0;

    border: 0;

    color: #26354a;

    font-style: italic;

    text-align: justify;
}


/* =========================================================
   GALLERY
========================================================= */

.event-gallery {
    margin-top: 44px;
}

.event-gallery-heading {
    display: flex;
    align-items: center;

    gap: 12px;

    margin-bottom: 20px;

    padding-bottom: 10px;

    border-bottom: 2px solid #edf1f5;
}

.event-gallery-heading i {
    color: #08a6eb;
    font-size: 18px;
}

.event-gallery-heading h2 {
    margin: 0;

    color: #12243b;

    font-size: 18px;
    font-weight: 800;
}

.event-gallery-item {
    width: 100%;
    height: 205px;

    overflow: hidden;

    background: #f4f5f6;
}

.event-gallery-image {
    display: block;

    width: 100%;
    height: 100%;

    object-fit: cover;

    transition: transform .3s ease;
}

.event-gallery-item:hover .event-gallery-image {
    transform: scale(1.025);
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 767.98px) {

    .event-detail-page {
        padding: 28px 0 55px;
    }

    .event-detail-title {
        font-size: 28px;
    }

    .event-detail-share {
        margin-top: 28px;
    }

    .event-detail-hero {
        margin-bottom: 25px;
    }

    .event-detail-hero-image {
        max-height: none;
    }

    .event-detail-body {
        font-size: 14px;
        line-height: 1.75;
    }

    .event-detail-paragraph,
    .event-detail-list li,
    .event-detail-quote {
        text-align: left;
    }

    .event-detail-dropcap::first-letter {
        font-size: 39px;
    }

    .event-gallery-item {
        height: 250px;
    }
}

CSS;

$this->registerCss($css);


/* =========================================================
   COPY LINK
========================================================= */

$js = <<<JS

document.addEventListener('DOMContentLoaded', function () {

    const copyButton =
        document.querySelector('.event-share-copy');

    if (!copyButton) {
        return;
    }

    copyButton.addEventListener('click', async function () {

        const url =
            copyButton.dataset.url;

        if (!url) {
            return;
        }

        try {

            await navigator.clipboard.writeText(url);

            const icon =
                copyButton.querySelector('i');

            if (icon) {

                icon.className =
                    'bi bi-check-lg';

                setTimeout(function () {

                    icon.className =
                        'bi bi-link-45deg';

                }, 1500);

            }

        } catch (error) {

            window.prompt(
                'Salin tautan berikut:',
                url
            );

        }

    });

});

JS;

$this->registerJs(
    $js,
    \yii\web\View::POS_END
);

?>