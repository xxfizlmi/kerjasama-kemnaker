<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use yii\bootstrap5\Nav;
use yii\helpers\Html;
use yii\helpers\Url;


/*
|--------------------------------------------------------------------------
| HELPER UNTUK MEGA MENU COLUMN
|--------------------------------------------------------------------------
*/

function megaMenuColumn(
    string $title,
    array $links = [],
    string $description = ''
): string {

    $html = '<div class="mega-menu-column">';

    $html .= '<div class="mega-menu-title">'
        . Html::encode($title)
        . '</div>';

    foreach ($links as $link) {

        $html .= Html::a(
            Html::encode($link['label']),
            $link['url'],
            [
                'class' => 'mega-menu-link',
            ]
        );
    }

    if ($description !== '') {

        $html .= '<div class="mega-menu-description">'
            . Html::encode($description)
            . '</div>';
    }

    $html .= '</div>';

    return $html;
}

$items = [

    // =====================================================
    // BERANDA
    // =====================================================

    [
        'label' => 'Beranda',
        'url' => ['/site/index'],
    ],


    // =====================================================
    // EVENTS
    // =====================================================

    [
        'label' => 'Events',
        'url' => '#',

        'linkOptions' => [
            'class' => 'nav-link dropdown-toggle',
            'data-bs-toggle' => 'dropdown',
            'aria-expanded' => 'false',
        ],

        'items' => [

            megaMenuColumn(
                'Sidang',
                [
                    [
                        'label' => 'ILC Sesi Ke-114',
                        'url' => ['/event/ilc'],
                    ],
                ]
            ),

            megaMenuColumn(
                'Pengumuman',
                [
                    [
                        'label' => 'Inpassing JFAKS',
                        'url' => ['/pengumuman/inpassing'],
                    ],
                ]
            ),

            megaMenuColumn(
                'Workshop',
                [
                    [
                        'label' => 'Workshop on English',
                        'url' => ['/site/index'],
                    ],
                ]
            ),

            megaMenuColumn(
                'Kegiatan',
                [
                    [
                        'label' => 'Sosialisasi LINKS',
                        'url' => ['/site/index'],
                    ],
                    [
                        'label' => 'Monev KSDN Batch 1 2026',
                        'url' => ['/site/index'],
                    ],
                    [
                        'label' => 'Penyusunan Bahan ILC 114',
                        'url' => ['/site/index'],
                    ],
                    [
                        'label' => 'Kerja Sama Bilateral Indonesia dan Turki',
                        'url' => ['/site/index'],
                    ],
                    [
                        'label' => 'Monev KSDN Batch 2 2026',
                        'url' => ['/site/index'],
                    ],
                ]
            ),
        ],
    ],


    // =====================================================
    // KERJA SAMA
    // =====================================================

    [
        'label' => 'Kerja Sama',
        'url' => '#',

        'linkOptions' => [
            'class' => 'nav-link dropdown-toggle',
            'data-bs-toggle' => 'dropdown',
            'aria-expanded' => 'false',
        ],

        'items' => [

            megaMenuColumn(
                'Kategori Kerja Sama',
                [
                    [
                        'label' => 'Kerja Sama Dalam Negeri',
                        'url' => ['/ksdn'],
                    ],
                    [
                        'label' => 'Kerja Sama Bilateral',
                        'url' => ['/ksb'],
                    ],
                    [
                        'label' => 'Kerja Sama Regional',
                        'url' => ['/ksr'],
                    ],
                    [
                        'label' => 'Kerja Sama Multilateral',
                        'url' => ['/ksm'],
                    ],
                ]
            ),

            megaMenuColumn(
                'Bisnis Proses'
            ),

            megaMenuColumn(
                'Informasi',
                [],
                'Informasi kerja sama setiap bidang.'
            ),
        ],
    ],


    // =====================================================
    // POLICY BRIEF
    // =====================================================

    [
        'label' => 'Policy Brief',
        'url' => '#',

        'linkOptions' => [
            'class' => 'nav-link dropdown-toggle',
            'data-bs-toggle' => 'dropdown',
            'aria-expanded' => 'false',
        ],

        'items' => [

            megaMenuColumn(
                'Policy Brief',
                [
                    [
                        'label' => 'Analisis Perumusan Rekomendasi Kebijakan Kerja Sama Internasional',
                        'url' => ['/site/policy-brief'],
                    ],
                ]
            ),

            megaMenuColumn(
                'Informasi',
                [],
                'Informasi dokumen ringkas dan padat yang menyajikan analisis berbasis data mengenai suatu isu tertentu, disertai rekomendasi solusi konkret.'
            ),
        ],
    ],


    // =====================================================
    // TENTANG
    // =====================================================

    [
        'label' => 'Tentang',
        'url' => ['/about'],
    ],


    // =====================================================
    // FAQ
    // =====================================================

    [
        'label' => 'FAQ',
        'url' => ['/site/faq'],
    ],
];

?>

<header id="site-header">
    <nav class="site-navbar px-5">
        <div class="navbar-container px-5">
            <!-- Logo -->
            <a
                href="<?= Url::to(['/site/index']) ?>"
                class="navbar-brand-custom">

                <?= Html::img(
                    Url::to('@web/images/logo/logo_final.png'),
                    ['alt' => Yii::$app->name, 'class' => 'navbar-logo',]
                ) ?>

            </a>
            <!-- Desktop Navigation -->

            <div class="desktop-navigation">
                <?= Nav::widget([
                    'options' => [
                        'class' => 'navbar-nav-custom',
                    ],
                    'encodeLabels' => false,
                    'items' => $items,
                ]) ?>
            </div>


            <!-- Desktop Button -->

            <div class="desktop-actions">
                <?= Html::a('Masuk', ['/site/login'], ['class' => 'login-button',]) ?>
            </div>


            <!-- Mobile Hamburger -->

            <button
                type="button"
                class="hamburger-button"
                id="sidebarToggle"
                aria-label="Open navigation"
                aria-controls="navigationSidebar"
                aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>

        </div>

    </nav>


    <!-- Overlay -->

    <div
        class="sidebar-overlay"
        id="sidebarOverlay"></div>


    <!-- Right Sidebar -->

    <aside
        class="navigation-sidebar"
        id="navigationSidebar"
        aria-hidden="true">

        <!-- Sidebar Header -->

        <div class="sidebar-header">

            <a
                href="<?= Url::to(['/site/index']) ?>"
                class="sidebar-logo">

                <?= Html::img(
                    Url::to('@web/images/logo/logo_final.png'),
                    [
                        'alt' => Yii::$app->name,
                        'class' => 'navbar-logo',
                    ]
                ) ?>

            </a>

            <button
                type="button"
                class="sidebar-close"
                id="sidebarClose"
                aria-label="Close navigation">
                <span></span>
                <span></span>
            </button>

        </div>


        <!-- Sidebar Menu -->

        <div class="sidebar-content">

            <div class="sidebar-menu">

                <?= Nav::widget([
                    'options' => [
                        'class' => 'sidebar-nav',
                    ],

                    'encodeLabels' => false,

                    'items' => $items,
                ]) ?>

            </div>

        </div>


        <!-- Sidebar Footer -->

        <div class="sidebar-footer">

            <?= Html::a(
                'Masuk',
                ['/site/login'],
                [
                    'class' => 'login-button sidebar-login',
                ]
            ) ?>

        </div>

    </aside>
</header>