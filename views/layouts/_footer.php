<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$footerItems = [
    [
        'subtitle' => 'ALAMAT KANTOR',
        'type' => 'address',
        'address' => 'Biro Kerja Sama Gedung Kementerian Ketenagakerjaan RI, Jl. Jenderal Gatot Subroto Kav. 51, Jakarta Selatan, DKI Jakarta.',
    ],

    [
        'subtitle' => 'AKSES CEPAT',
        'type' => 'links',
        'items' => [
            [
                'label' => 'Beranda',
                'url' => ['/site/index'],
            ],
            [
                'label' => 'Kerja Sama',
                'url' => ['/site/index'],
            ],
            [
                'label' => 'Bantuan (FAQ)',
                'url' => ['/site/index'],
            ],
        ],
    ],

    [
        'subtitle' => 'HUBUNGAN KAMI',
        'type' => 'contact',
        'items' => [
            [
                'icon' => 'bi bi-telephone',
                'label' => '(021) 525-5685',
            ],
            [
                'icon' => 'bi bi-envelope',
                'label' => 'kerjasama@kemnaker.go.id',
            ],
            [
                'icon' => 'bi bi-clock',
                'label' => 'Senin - Kamis (08:00 - 16:00)',
            ],
            [
                'icon' => '',
                'label' => 'Jumat (08:00 - 16:30)',
            ],
        ],
    ],

    [
        'subtitle' => 'KUNJUNGI KAMI',
        'type' => 'social',
        'items' => [
            [
                'icon' => 'bi bi-instagram',
                'label' => 'Instagram',
                'url' => '#',
            ],
        ],
    ],
];

?>

<footer class="site-footer">

    <!-- =====================================================
         FOOTER MAIN
         ===================================================== -->

    <div class="footer-container">

        <!-- BRAND -->
        <div class="footer-brand">

            <a
                href="<?= Url::to(['/site/index']) ?>"
                class="footer-logo-link">

                <?= Html::img(
                    Url::to('@web/images/logo/logo_final.png'),
                    [
                        'alt' => Yii::$app->name,
                        'class' => 'footer-logo',
                    ]
                ) ?>

            </a>

            <p class="footer-description">
                Layanan Informasi Kerja Sama
            </p>

        </div>


        <!-- FOOTER COLUMNS -->
        <div class="footer-columns">

            <?php foreach ($footerItems as $item): ?>

                <div class="footer-column">

                    <h3 class="footer-subtitle">
                        <?= Html::encode($item['subtitle']) ?>
                    </h3>


                    <?php if ($item['type'] === 'address'): ?>

                        <p class="footer-address">
                            <?= Html::encode($item['address']) ?>
                        </p>


                    <?php elseif ($item['type'] === 'links'): ?>

                        <nav class="footer-links">

                            <?php foreach ($item['items'] as $link): ?>

                                <?= Html::a(
                                    Html::encode($link['label']),
                                    $link['url'],
                                    [
                                        'class' => 'footer-link',
                                    ]
                                ) ?>

                            <?php endforeach; ?>

                        </nav>


                    <?php elseif ($item['type'] === 'contact'): ?>

                        <div class="footer-contact">

                            <?php foreach ($item['items'] as $contact): ?>

                                <div class="footer-contact-item">

                                    <?php if (!empty($contact['icon'])): ?>

                                        <i
                                            class="<?= Html::encode($contact['icon']) ?>"
                                            aria-hidden="true">
                                        </i>

                                    <?php endif; ?>

                                    <span>
                                        <?= Html::encode($contact['label']) ?>
                                    </span>

                                </div>

                            <?php endforeach; ?>

                        </div>


                    <?php elseif ($item['type'] === 'social'): ?>

                        <div class="footer-social">

                            <?php foreach ($item['items'] as $social): ?>

                                <?= Html::a(
                                    '<i class="' . Html::encode($social['icon']) . '" aria-hidden="true"></i>' .
                                        '<span>' . Html::encode($social['label']) . '</span>',
                                    $social['url'],
                                    [
                                        'class' => 'footer-social-link',
                                        'target' => '_blank',
                                        'rel' => 'noopener noreferrer',
                                    ]
                                ) ?>

                            <?php endforeach; ?>

                        </div>

                    <?php endif; ?>

                </div>

            <?php endforeach; ?>

        </div>

    </div>


    <!-- =====================================================
         FOOTER BOTTOM
         ===================================================== -->

    <div class="footer-bottom">

        <p>
            © <?= date('Y') ?> Biro Kerja Sama - Kemnaker RI.
            All Rights Reserved.
        </p>

        <p>
            Dikembangkan oleh Tim IT Biro Kerja Sama
        </p>

    </div>

</footer>