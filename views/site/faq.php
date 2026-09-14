<?php

use yii\helpers\Html;

$this->title = 'FAQ';

?>

<!-- =========================================================
     1. FAQ HERO
========================================================= -->
<section class="faq-hero">

    <div class="container">

        <div class="faq-hero-content">

            <span class="faq-badge">
                PUSAT BANTUAN
            </span>

            <h1 class="faq-hero-title">
                Bagaimana kami bisa membantu?
            </h1>


            <!-- SEARCH -->
            <div class="faq-search-wrapper">

                <i class="bi bi-search faq-search-icon"></i>

                <input
                    type="search"
                    id="faqSearch"
                    class="faq-search-input"
                    placeholder="Cari kendala, topik, atau kata kunci..."
                    autocomplete="off"
                    aria-label="Cari FAQ">

                <button
                    type="button"
                    id="faqSearchClear"
                    class="faq-search-clear"
                    aria-label="Hapus pencarian"
                    hidden>
                    <i class="bi bi-x-circle-fill"></i>
                </button>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     2. FAQ CONTENT
========================================================= -->
<section class="faq-content-section">

    <div class="container">

        <div
            class="row g-4 faq-content-row"
            id="faqContentRow">

            <!-- =================================================
                 LEFT SIDEBAR
            ================================================== -->
            <div class="col-lg-2 faq-category-column">

                <aside class="faq-category-wrapper">

                    <h2 class="faq-category-heading">
                        KATEGORI TOPIK
                    </h2>


                    <div class="faq-category-list">

                        <button
                            type="button"
                            class="faq-category-item active"
                            data-category="ruang-lingkup">
                            <i class="bi bi-globe2"></i>

                            <span>
                                Ruang Lingkup
                            </span>
                        </button>


                        <button
                            type="button"
                            class="faq-category-item"
                            data-category="mitra">
                            <i class="bi bi-people"></i>

                            <span>
                                Mitra Kerja Sama
                            </span>
                        </button>


                        <button
                            type="button"
                            class="faq-category-item"
                            data-category="posisi">
                            <i class="bi bi-diagram-3"></i>

                            <span>
                                Posisi Biro
                            </span>
                        </button>


                        <button
                            type="button"
                            class="faq-category-item"
                            data-category="permohonan">
                            <i class="bi bi-send"></i>

                            <span>
                                Permohonan
                            </span>
                        </button>


                        <button
                            type="button"
                            class="faq-category-item"
                            data-category="dokumen">
                            <i class="bi bi-file-earmark-text"></i>

                            <span>
                                Dokumen (MoU/PKS)
                            </span>
                        </button>


                        <button
                            type="button"
                            class="faq-category-item"
                            data-category="tata-kelola">
                            <i class="bi bi-arrow-repeat"></i>

                            <span>
                                Tata Kelola
                            </span>
                        </button>


                        <button
                            type="button"
                            class="faq-category-item"
                            data-category="hukum">
                            <i class="bi bi-scales"></i>

                            <span>
                                Aspek Hukum
                            </span>
                        </button>


                        <button
                            type="button"
                            class="faq-category-item"
                            data-category="pendanaan">
                            <i class="bi bi-cash-stack"></i>

                            <span>
                                Pendanaan
                            </span>
                        </button>


                        <button
                            type="button"
                            class="faq-category-item"
                            data-category="akuntabilitas">
                            <i class="bi bi-check2-square"></i>

                            <span>
                                Akuntabilitas
                            </span>
                        </button>


                        <button
                            type="button"
                            class="faq-category-item"
                            data-category="monitoring">
                            <i class="bi bi-bar-chart"></i>

                            <span>
                                Monitoring &amp; Evaluasi
                            </span>
                        </button>


                        <button
                            type="button"
                            class="faq-category-item"
                            data-category="sanksi">
                            <i class="bi bi-exclamation-circle"></i>

                            <span>
                                Sanksi &amp; Sengketa
                            </span>
                        </button>

                    </div>

                </aside>

            </div>


            <!-- =================================================
                 RIGHT CONTENT
            ================================================== -->
            <div class="col-lg-10 faq-main-column">

                <main class="faq-main">


                    <!-- =========================================
                         SEARCH RESULT HEADER
                    ========================================== -->
                    <div
                        class="faq-search-result-header d-none"
                        id="faqSearchResultHeader">

                        <strong>
                            Hasil pencarian:
                            "<span id="faqSearchKeyword"></span>"
                        </strong>


                        <button
                            type="button"
                            id="faqSearchReset"
                            class="faq-search-reset">
                            Reset
                        </button>

                    </div>


                    <!-- =========================================
                         CATEGORY HEADER
                    ========================================== -->
                    <div
                        class="faq-main-header"
                        id="faqMainHeader">

                        <div class="faq-main-heading">

                            <div class="faq-main-icon">

                                <i
                                    class="bi bi-globe2"
                                    id="faqMainIcon"></i>

                            </div>

                            <h2 id="faqMainTitle">
                                Ruang Lingkup
                            </h2>

                        </div>


                        <p
                            class="faq-main-description"
                            id="faqMainDescription">
                            Cakupan area dan batasan program.
                        </p>

                    </div>


                    <!-- =========================================
                         ACCORDION
                    ========================================== -->
                    <div
                        class="faq-accordion"
                        id="faqAccordion">


                        <!-- =====================================
                             RUANG LINGKUP
                        ====================================== -->
                        <article
                            class="faq-item"
                            data-category="ruang-lingkup"
                            data-search="
                                apa saja ruang lingkup yang bisa
                                dikerjasamakan dengan kemnaker
                                pengembangan sdm pelatihan vokasi
                                sertifikasi kompetensi pendidikan
                                ketenagakerjaan penempatan perluasan kerja
                                informasi pasar kerja program padat karya
                                perlindungan tenaga kerja jaminan sosial
                                ketenagakerjaan k3 penguatan kelembagaan
                                riset inovasi kebijakan kerja sama
                                internasional bilateral regional multilateral
                            ">

                            <button
                                type="button"
                                class="faq-question"
                                aria-expanded="false">

                                <span>
                                    Apa saja ruang lingkup yang bisa
                                    dikerjasamakan dengan Kemnaker?
                                </span>

                                <span class="faq-question-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </span>

                            </button>


                            <div class="faq-answer">

                                <div class="faq-answer-inner">

                                    <ul class="faq-answer-list">

                                        <li>
                                            <strong>
                                                Pengembangan SDM:
                                            </strong>

                                            Pelatihan vokasi,
                                            sertifikasi kompetensi,
                                            dan pendidikan ketenagakerjaan.
                                        </li>


                                        <li>
                                            <strong>
                                                Penempatan &amp; Perluasan Kerja:
                                            </strong>

                                            Informasi pasar kerja,
                                            program padat karya,
                                            dan penempatan tenaga kerja.
                                        </li>


                                        <li>
                                            <strong>
                                                Perlindungan Tenaga Kerja:
                                            </strong>

                                            Jaminan sosial ketenagakerjaan
                                            dan K3.
                                        </li>


                                        <li>
                                            <strong>
                                                Penguatan Kelembagaan:
                                            </strong>

                                            Riset, inovasi, dan
                                            pengembangan kebijakan
                                            ketenagakerjaan.
                                        </li>


                                        <li>
                                            <strong>
                                                Kerja Sama Internasional:
                                            </strong>

                                            Bilateral, regional, dan
                                            multilateral dalam isu
                                            ketenagakerjaan.
                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </article>


                        <!-- =====================================
                             EMPTY STATE
                        ====================================== -->
                        <div
                            class="faq-empty-state"
                            id="faqEmptyState"
                            hidden>

                            <div class="faq-empty-icon">
                                <i class="bi bi-search"></i>
                            </div>

                            <h3 id="faqEmptyTitle">
                                Tidak ada hasil ditemukan
                            </h3>

                            <p id="faqEmptyText">
                                Coba gunakan kata kunci lain atau
                                pilih topik FAQ yang berbeda.
                            </p>

                        </div>

                    </div>

                </main>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     FLOATING HELP
========================================================= -->
<div class="faq-floating-help">

    <span class="faq-floating-label">
        Butuh Bantuan?
    </span>

    <button
        type="button"
        class="faq-floating-button"
        aria-label="Butuh bantuan">
        <i class="bi bi-headset"></i>

        <span class="faq-floating-dot"></span>
    </button>

</div>


<?php

$faqJs = <<<'JS'

document.addEventListener('DOMContentLoaded', function () {

    /* =====================================================
       ELEMENT
    ====================================================== */

    const faqSearch =
        document.getElementById('faqSearch');

    const faqSearchClear =
        document.getElementById('faqSearchClear');

    const faqSearchReset =
        document.getElementById('faqSearchReset');

    const faqSearchResultHeader =
        document.getElementById('faqSearchResultHeader');

    const faqSearchKeyword =
        document.getElementById('faqSearchKeyword');

    const faqContentRow =
        document.getElementById('faqContentRow');

    const faqMainHeader =
        document.getElementById('faqMainHeader');

    const faqAccordion =
        document.getElementById('faqAccordion');

    const faqEmptyState =
        document.getElementById('faqEmptyState');

    const faqEmptyTitle =
        document.getElementById('faqEmptyTitle');

    const faqEmptyText =
        document.getElementById('faqEmptyText');

    const faqMainTitle =
        document.getElementById('faqMainTitle');

    const faqMainDescription =
        document.getElementById('faqMainDescription');

    const faqMainIcon =
        document.getElementById('faqMainIcon');


    if (!faqAccordion) {
        return;
    }


    const faqItems =
        Array.from(
            faqAccordion.querySelectorAll('.faq-item')
        );


    const categoryItems =
        Array.from(
            document.querySelectorAll('.faq-category-item')
        );


    let activeCategory =
        'ruang-lingkup';


    /* =====================================================
       CATEGORY DATA
    ====================================================== */

    const categoryData = {

        'ruang-lingkup': {
            title: 'Ruang Lingkup',
            description: 'Cakupan area dan batasan program.',
            icon: 'bi-globe2'
        },

        'mitra': {
            title: 'Mitra Kerja Sama',
            description: 'Pihak yang dapat menjadi mitra dalam pelaksanaan kerja sama.',
            icon: 'bi-people'
        },

        'posisi': {
            title: 'Posisi Biro',
            description: 'Peran dan kedudukan Biro Kerja Sama dalam pelaksanaan kerja sama.',
            icon: 'bi-diagram-3'
        },

        'permohonan': {
            title: 'Permohonan',
            description: 'Informasi mengenai proses dan mekanisme pengajuan kerja sama.',
            icon: 'bi-send'
        },

        'dokumen': {
            title: 'Dokumen (MoU/PKS)',
            description: 'Informasi mengenai dokumen dan kelengkapan kerja sama.',
            icon: 'bi-file-earmark-text'
        },

        'tata-kelola': {
            title: 'Tata Kelola',
            description: 'Ketentuan dan mekanisme tata kelola pelaksanaan kerja sama.',
            icon: 'bi-arrow-repeat'
        },

        'hukum': {
            title: 'Aspek Hukum',
            description: 'Ketentuan hukum dan landasan yang berkaitan dengan kerja sama.',
            icon: 'bi-scales'
        },

        'pendanaan': {
            title: 'Pendanaan',
            description: 'Informasi mengenai pembiayaan dan dukungan pendanaan kerja sama.',
            icon: 'bi-cash-stack'
        },

        'akuntabilitas': {
            title: 'Akuntabilitas',
            description: 'Pertanggungjawaban dalam pelaksanaan kerja sama.',
            icon: 'bi-check2-square'
        },

        'monitoring': {
            title: 'Monitoring & Evaluasi',
            description: 'Pemantauan dan evaluasi terhadap pelaksanaan kerja sama.',
            icon: 'bi-bar-chart'
        },

        'sanksi': {
            title: 'Sanksi & Sengketa',
            description: 'Ketentuan mengenai sanksi dan penyelesaian sengketa kerja sama.',
            icon: 'bi-exclamation-circle'
        }

    };


    /* =====================================================
       OPEN / CLOSE ITEM
    ====================================================== */

    function setItemOpen(item, open) {

        const question =
            item.querySelector('.faq-question');

        item.classList.toggle(
            'open',
            open
        );


        if (question) {

            question.setAttribute(
                'aria-expanded',
                open ? 'true' : 'false'
            );

        }

    }


    function closeAllItems() {

        faqItems.forEach(function (item) {

            setItemOpen(
                item,
                false
            );

        });

    }


    /* =====================================================
       EMPTY STATE
    ====================================================== */

    function showEmptyState(title, text) {

        if (!faqEmptyState) {
            return;
        }


        faqEmptyState.hidden =
            false;


        if (faqEmptyTitle) {
            faqEmptyTitle.textContent =
                title;
        }


        if (faqEmptyText) {
            faqEmptyText.textContent =
                text;
        }

    }


    function hideEmptyState() {

        if (faqEmptyState) {

            faqEmptyState.hidden =
                true;

        }

    }


    /* =====================================================
       CATEGORY
    ====================================================== */

    function loadCategory(categoryName) {

        activeCategory =
            categoryName;


        const data =
            categoryData[categoryName];


        /* Active sidebar */

        categoryItems.forEach(function (button) {

            button.classList.toggle(
                'active',
                button.dataset.category === categoryName
            );

        });


        /* Header */

        if (data) {

            if (faqMainTitle) {
                faqMainTitle.textContent =
                    data.title;
            }


            if (faqMainDescription) {
                faqMainDescription.textContent =
                    data.description;
            }


            if (faqMainIcon) {

                faqMainIcon.className =
                    'bi ' + data.icon;

            }

        }


        closeAllItems();


        let count =
            0;


        faqItems.forEach(function (item) {

            const isSameCategory =
                item.dataset.category === categoryName;


            item.hidden =
                !isSameCategory;


            if (isSameCategory) {
                count++;
            }

        });


        if (count === 0) {

            showEmptyState(
                'Konten sedang disiapkan',
                'Informasi untuk kategori ini akan tersedia pada pembaruan berikutnya.'
            );

        } else {

            hideEmptyState();

        }

    }


    categoryItems.forEach(function (button) {

        button.addEventListener(
            'click',
            function () {

                loadCategory(
                    button.dataset.category
                );

            }
        );

    });


    /* =====================================================
       ACCORDION
    ====================================================== */

    faqItems.forEach(function (item) {

        const question =
            item.querySelector('.faq-question');


        if (!question) {
            return;
        }


        question.addEventListener(
            'click',
            function () {

                const willOpen =
                    !item.classList.contains('open');


                closeAllItems();


                if (willOpen) {

                    setItemOpen(
                        item,
                        true
                    );

                }

            }
        );

    });


    /* =====================================================
       SEARCH
    ====================================================== */

    function performSearch() {

        if (!faqSearch) {
            return;
        }


        const keyword =
            faqSearch.value
                .trim()
                .toLowerCase();


        /*
         * Search kosong:
         * kembali ke category mode.
         */
        if (keyword === '') {

            faqContentRow.classList.remove(
                'is-searching'
            );


            faqSearchResultHeader.classList.add(
                'd-none'
            );


            faqMainHeader.classList.remove(
                'd-none'
            );


            faqSearchClear.hidden =
                true;


            loadCategory(
                activeCategory
            );


            return;
        }


        /* Search Mode */

        faqContentRow.classList.add(
            'is-searching'
        );


        faqSearchResultHeader.classList.remove(
            'd-none'
        );


        faqMainHeader.classList.add(
            'd-none'
        );


        faqSearchClear.hidden =
            false;


        faqSearchKeyword.textContent =
            faqSearch.value.trim();


        let resultCount =
            0;


        faqItems.forEach(function (item) {

            const dataSearch =
                (
                    item.dataset.search || ''
                ).toLowerCase();


            const question =
                item.querySelector(
                    '.faq-question'
                );


            const answer =
                item.querySelector(
                    '.faq-answer'
                );


            const questionText =
                question
                    ? question.textContent.toLowerCase()
                    : '';


            const answerText =
                answer
                    ? answer.textContent.toLowerCase()
                    : '';


            const fullText =
                dataSearch +
                ' ' +
                questionText +
                ' ' +
                answerText;


            const match =
                fullText.includes(keyword);


            item.hidden =
                !match;


            if (match) {

                resultCount++;

                /*
                 * Seperti screenshot asli:
                 * hasil pencarian langsung terbuka.
                 */
                setItemOpen(
                    item,
                    true
                );

            } else {

                setItemOpen(
                    item,
                    false
                );

            }

        });


        if (resultCount === 0) {

            showEmptyState(
                'Tidak ada hasil ditemukan',
                'Coba gunakan kata kunci pencarian yang berbeda.'
            );

        } else {

            hideEmptyState();

        }

    }


    if (faqSearch) {

        faqSearch.addEventListener(
            'input',
            performSearch
        );

    }


    /* =====================================================
       RESET SEARCH
    ====================================================== */

    function resetSearch() {

        if (!faqSearch) {
            return;
        }


        faqSearch.value =
            '';


        performSearch();


        faqSearch.focus();

    }


    if (faqSearchReset) {

        faqSearchReset.addEventListener(
            'click',
            resetSearch
        );

    }


    if (faqSearchClear) {

        faqSearchClear.addEventListener(
            'click',
            resetSearch
        );

    }


    /* =====================================================
       INITIAL
    ====================================================== */

    loadCategory(
        activeCategory
    );

});

JS;


$this->registerJs(
    $faqJs,
    \yii\web\View::POS_END
);

?>