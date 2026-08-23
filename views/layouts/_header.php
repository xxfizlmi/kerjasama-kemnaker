<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use yii\bootstrap5\Nav;
use yii\helpers\Html;
use yii\helpers\Url;

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

            // SIDANG
            '<div class="mega-menu-column">

                <div class="mega-menu-title">
                    Sidang
                </div>

                <a
                    href="' . Url::to(['/site/index']) . '"
                    class="mega-menu-link">
                    ILC Sesi Ke-114
                </a>

            </div>',


            // PENGUMUMAN
            '<div class="mega-menu-column">

                <div class="mega-menu-title">
                    Pengumuman
                </div>

                <a
                    href="' . Url::to(['/site/index']) . '"
                    class="mega-menu-link">
                    Inpassing JFAKS
                </a>

            </div>',


            // WORKSHOP
            '<div class="mega-menu-column">

                <div class="mega-menu-title">
                    Workshop
                </div>

                <a
                    href="' . Url::to(['/site/index']) . '"
                    class="mega-menu-link">
                    Workshop on English
                </a>

            </div>',

            // Kegiatan
            '<div class="mega-menu-column">

                <div class="mega-menu-title">
                    KEGIATAN
                </div>

                <a
                    href="' . Url::to(['/site/index']) . '"
                    class="mega-menu-link">
                    Sosialisasi LINKS
                </a>
                <a
                    href="' . Url::to(['/site/index']) . '"
                    class="mega-menu-link">
                    Monev KSDN Batch 1 2026
                </a>
                <a
                    href="' . Url::to(['/site/index']) . '"
                    class="mega-menu-link">
                    Penyusunan Bahan ILC 114
                </a>
                <a
                    href="' . Url::to(['/site/index']) . '"
                    class="mega-menu-link">
                    Kerja Sama Bilateral Indonsia dan Turki
                </a>
                <a
                    href="' . Url::to(['/site/index']) . '"
                    class="mega-menu-link">
                    Monev KSDN Batch 2 2026
                </a>

            </div>',
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

            // Kategori Kerja Sama
            '<div class="mega-menu-column">

                <div class="mega-menu-title">
                    KATEGORI KERJA SAMA
                </div>

                <a
                    href="' . Url::to(['/site/index']) . '"
                    class="mega-menu-link">
                    Kerja Sama Dalam Negeri
                </a>
                <a
                    href="' . Url::to(['/site/index']) . '"
                    class="mega-menu-link">
                    Kerja Sama Bilateral
                </a>
                <a
                    href="' . Url::to(['/site/index']) . '"
                    class="mega-menu-link">
                    Kerja Sama Regional
                </a>
                <a
                    href="' . Url::to(['/site/index']) . '"
                    class="mega-menu-link">
                    Kerja Sama Multilateral
                </a>

            </div>',

            '<div class="mega-menu-column">

                <div class="mega-menu-title">
                    Bisnis Proses
                </div>

            </div>',


            '<div class="mega-menu-column">

                <div class="mega-menu-title">
                    Informasi
                </div>

                <div class="mega-menu-description">
                    Informasi kerja sama setiap bidang.
                </div>

            </div>',
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

            // Kategori Policy Brief
            '<div class="mega-menu-column">

                <div class="mega-menu-title">
                    Policy Brief
                </div>

                <a
                    href="' . Url::to(['/site/index']) . '"
                    class="mega-menu-link">
                    Analisis Perumusan Rekomendasi Kebijakan Kerja Sama Internasional
                </a>

            </div>',


            '<div class="mega-menu-column">

                <div class="mega-menu-title">
                    Informasi
                </div>

                <div class="mega-menu-description">
                    Informasi dokumen ringkas dan padat yang menyajikan analisis berbasis data mengenai suatu isu tertentu, disertai rekomendasi solusi konkret
                </div>

            </div>',
        ],
    ],

    // =====================================================
    // TENTANG
    // =====================================================

    [
        'label' => 'Tentang',
        'url' => ['/site/index'],
    ],


    // =====================================================
    // FAQ
    // =====================================================

    [
        'label' => 'FAQ',
        'url' => ['/site/index'],
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
                    [
                        'alt' => Yii::$app->name,
                        'class' => 'navbar-logo',
                    ]
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

                <?= Html::a(
                    'Masuk',
                    ['/site/login'],
                    [
                        'class' => 'login-button',
                    ]
                ) ?>

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