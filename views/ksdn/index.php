<?php

use yii\helpers\Html;

$title = 'Kerja Sama Dalam Negeri';

$description = 'Suatu kegiatan yang melibatkan interaksi Kementerian dengan kementerian/lembaga, Pemerintah Daerah, dan Mitra Pembangunan untuk saling memberi manfaat dalam mencapai tujuan bersama dan dilakukan secara bersama-sama';

$section = [
    [
        'TUJUAN STRATEGIS',
        '“Memperkuat sinergi dan kolaborasi kerja sama dalam negeri secara efektif dan akuntabel guna mendukung pembangunan ketenagakerjaan yang berkelanjutan.”',
        'bi bi-bullseye'
    ],
    [
        'SEKTOR PRIORITAS',
        '"Sektor prioritas kerja sama dalam negeri meliputi kompetensi dan penempatan tenaga kerja, hubungan industrial, pengawasan ketenagakerjaan, produktivitas, serta data dan sistem ketenagakerjaan."',
        'bi bi-bullseye'
    ]
];

$cards = [
    [
        'Jenis Mitra',
        'Sinergi strategis dijalin dengan berbagai instansi dan pemangku kepentingan guna memperluas dampak positif pembangunan ketenagakerjaan di seluruh Indonesia.',
        [
            'icon' => 'bi bi-bullseye',
            'name' => 'Kementerian / Lembaga',
            'count' => '0',
            'description' => 'Kementerian yang menyelenggarakan urusan pemerintahan di bidang ketenagakerjaan.'
        ],
        [
            'icon' => 'bi bi-bullseye',
            'name' => 'Pemerintah Daerah',
            'count' => '0',
            'description' => 'Kepala daerah sebagai unsur penyelenggara pemerintah daerah yang memimpin pelaksanaan urusan pemerintahan.'
        ],
        [
            'icon' => 'bi bi-bullseye',
            'name' => 'Mitra Pembangunan',
            'count' => '0',
            'description' => 'Mitra kerja sama yang meliputi badan hukum, asosiasi, perkumpulan, organisasi, lembaga swadaya, institusi, dan entitas lainnya.'
        ]
    ],
    [
        'Cakupan Kolaborasi',
        'Fokus ruang lingkup pelaksanaan kerja sama diarahkan pada aspek-aspek esensial guna menciptakan ekosistem ketenagakerjaan yang tangguh dan adaptif.',
        [
            'icon' => 'bi bi-bullseye',
            'name' => 'Kompetensi & Vokasi',
            'description' => 'Pengembangan keterampilan dan peningkatan kompetensi tenaga kerja.'
        ],
        [
            'icon' => 'bi bi-bullseye',
            'name' => 'Penempatan Kerja',
            'description' => 'Perluasan kesempatan kerja dan penyerapan tenaga kerja.'
        ],
        [
            'icon' => 'bi bi-bullseye',
            'name' => 'Hubungan Industrial',
            'description' => 'Perlindungan pekerja dan penguatan hubungan industrial.'
        ],
        [
            'icon' => 'bi bi-bullseye',
            'name' => 'Pengawasan & Data',
            'description' => 'Pengawasan ketenagakerjaan serta penguatan data dan sistem informasi.'
        ],
    ]
];

?>

<div class="page">

    <!-- =====================================================
         HERO
         ===================================================== -->

    <div class="ksdn-page">

        <?= $this->render('../components/ui/hero', [
            'title' => $title,
            'description' => $description,
            'section' => $section,
        ]) ?>

    </div>


    <!-- =====================================================
         CONTENT
         ===================================================== -->

    <div class="container py-4">

        <!-- =====================================================
             TAB NAVIGATION
             ===================================================== -->

        <ul
            class="nav nav-tabs justify-content-center"
            id="ksdnTab"
            role="tablist">

            <!-- INFORMASI -->
            <li class="nav-item" role="presentation">

                <?= Html::a(
                    Html::tag(
                        'i',
                        '',
                        [
                            'class' => 'bi bi-info-circle-fill me-2',
                            'aria-hidden' => 'true',
                        ]
                    ) . 'Informasi',
                    '#informasi',
                    [
                        'id' => 'informasi-tab',
                        'class' => 'nav-link active px-4 py-3',
                        'data-bs-toggle' => 'tab',
                        'role' => 'tab',
                        'aria-controls' => 'informasi',
                        'aria-selected' => 'true',
                    ]
                ) ?>

            </li>


            <!-- JENIS DOKUMEN -->
            <li class="nav-item" role="presentation">

                <?= Html::a(
                    Html::tag(
                        'i',
                        '',
                        [
                            'class' => 'bi bi-card-list me-2',
                            'aria-hidden' => 'true',
                        ]
                    ) . 'Jenis Dokumen Kerja Sama',
                    '#dokumen',
                    [
                        'id' => 'dokumen-tab',
                        'class' => 'nav-link px-4 py-3',
                        'data-bs-toggle' => 'tab',
                        'role' => 'tab',
                        'aria-controls' => 'dokumen',
                        'aria-selected' => 'false',
                    ]
                ) ?>

            </li>


            <!-- PRA-MOU -->
            <li class="nav-item" role="presentation">

                <?= Html::a(
                    Html::tag(
                        'i',
                        '',
                        [
                            'class' => 'bi bi-search me-2',
                            'aria-hidden' => 'true',
                        ]
                    ) . 'Tahap Pra-MoU',
                    '#pra-mou',
                    [
                        'id' => 'pra-mou-tab',
                        'class' => 'nav-link px-4 py-3',
                        'data-bs-toggle' => 'tab',
                        'role' => 'tab',
                        'aria-controls' => 'pra-mou',
                        'aria-selected' => 'false',
                    ]
                ) ?>

            </li>

        </ul>


        <!-- =====================================================
             TAB CONTENT
             ===================================================== -->

        <div
            class="tab-content"
            id="ksdnTabContent">

            <!-- =================================================
                 TAB INFORMASI
                 ================================================= -->

            <div
                class="tab-pane fade show active"
                id="informasi"
                role="tabpanel"
                aria-labelledby="informasi-tab"
                tabindex="0">

                <?= Html::beginTag('div', ['class' => 'my-5 ']) ?>

                <?php foreach ($cards as $card): ?>

                    <?php
                    $title = $card[0];
                    $description = $card[1];
                    $items = array_slice($card, 2);
                    ?>

                    <section class="mb-5">

                        <!-- CATEGORY HEADER -->
                        <div class="text-center mb-4">

                            <?= Html::tag(
                                'h2',
                                Html::encode($title),
                                [
                                    'class' => 'h5 fw-bold mb-2',
                                ]
                            ) ?>

                            <?= Html::tag(
                                'p',
                                Html::encode($description),
                                [
                                    'class' => 'text-secondary mb-0 mx-auto',
                                    'style' => 'max-width: 750px;',
                                ]
                            ) ?>

                        </div>

                        <!-- CARDS -->
                        <div class="row justify-content-center g-4">

                            <?php foreach ($items as $item): ?>

                                <div class="col-12 col-sm-6 col-lg-3 d-flex justify-content-center">

                                    <?= Html::beginTag('article', [
                                        'class' => 'card border rounded-4 overflow-hidden text-center h-100 w-100',
                                        'style' => 'max-width:260px;',
                                    ]) ?>

                                    <div class="card-body d-flex flex-column align-items-center p-4">

                                        <!-- ICON -->
                                        <?= Html::tag(
                                            'i',
                                            '',
                                            [
                                                'class' => $item['icon'] ?? 'bi bi-bullseye',
                                                'style' => 'font-size: 2rem;',
                                            ]
                                        ) ?>

                                        <!-- NAME -->
                                        <?= Html::tag(
                                            'h3',
                                            Html::encode($item['name']),
                                            [
                                                'class' => 'h6 fw-bold mt-3 mb-0',
                                            ]
                                        ) ?>

                                        <!-- DESCRIPTION -->
                                        <?php if (!empty($item['description'])): ?>

                                            <?= Html::tag(
                                                'p',
                                                Html::encode($item['description']),
                                                [
                                                    'class' => 'text-secondary small mt-3 mb-3 text-clamp-3',
                                                    'title' => $item['description'],
                                                ]
                                            ) ?>

                                        <?php endif; ?>

                                        <!-- COUNT -->
                                        <?php if (isset($item['count'])): ?>

                                            <?= Html::tag(
                                                'span',
                                                Html::encode($item['count']) . ' Document',
                                                [
                                                    'class' => 'small text-white bg-secondary px-3 py-1 rounded-pill mt-auto',
                                                ]
                                            ) ?>

                                        <?php endif; ?>

                                    </div>

                                    <?= Html::endTag('article') ?>

                                </div>

                            <?php endforeach; ?>

                        </div>

                    </section>

                <?php endforeach; ?>
                <?= Html::endTag('div') ?>  
            </div>


            <!-- =================================================
                 TAB JENIS DOKUMEN
                 ================================================= -->

            <div
                class="tab-pane fade"
                id="dokumen"
                role="tabpanel"
                aria-labelledby="dokumen-tab"
                tabindex="0">

                <div class="py-5 text-center">

                    <?php if (!empty($card)): ?>
                        <?= Html::tag(
                            'i',
                            '',
                            [
                                'class' => 'bi bi-card-list',
                                'style' => 'font-size: 3rem;',
                                'aria-hidden' => 'true',
                            ]
                        ) ?>

                        <?= Html::tag(
                            'h2',
                            'Jenis Dokumen Kerja Sama',
                            [
                                'class' => 'h5 fw-bold mt-3',
                            ]
                        ) ?>

                        <?= Html::tag(
                            'p',
                            'Informasi mengenai jenis dokumen kerja sama dalam negeri.',
                            [
                                'class' => 'text-secondary mb-0',
                            ]
                        ) ?>
                    <?php else : ?>
                        <?= Html::beginTag('div', ['class' => 'my-5 ']) ?>

                        <?php foreach ($cards as $card): ?>

                            <?php
                            $title = $card[0];
                            $description = $card[1];
                            $items = array_slice($card, 2);
                            ?>

                            <section class="mb-5">

                                <!-- CATEGORY HEADER -->
                                <div class="text-center mb-4">

                                    <?= Html::tag(
                                        'h2',
                                        Html::encode($title),
                                        [
                                            'class' => 'h5 fw-bold mb-2',
                                        ]
                                    ) ?>

                                    <?= Html::tag(
                                        'p',
                                        Html::encode($description),
                                        [
                                            'class' => 'text-secondary mb-0 mx-auto',
                                            'style' => 'max-width: 750px;',
                                        ]
                                    ) ?>

                                </div>

                                <!-- CARDS -->
                                <div class="row justify-content-center g-4">

                                    <?php foreach ($items as $item): ?>

                                        <div class="col-12 col-sm-6 col-lg-3 d-flex justify-content-center">

                                            <?= Html::beginTag('article', [
                                                'class' => 'card border rounded-4 overflow-hidden text-center h-100 w-100',
                                                'style' => 'max-width:260px;',
                                            ]) ?>

                                            <div class="card-body d-flex flex-column align-items-center p-4">

                                                <!-- ICON -->
                                                <?= Html::tag(
                                                    'i',
                                                    '',
                                                    [
                                                        'class' => $item['icon'] ?? 'bi bi-bullseye',
                                                        'style' => 'font-size: 2rem;',
                                                    ]
                                                ) ?>

                                                <!-- NAME -->
                                                <?= Html::tag(
                                                    'h3',
                                                    Html::encode($item['name']),
                                                    [
                                                        'class' => 'h6 fw-bold mt-3 mb-0',
                                                    ]
                                                ) ?>

                                                <!-- DESCRIPTION -->
                                                <?php if (!empty($item['description'])): ?>

                                                    <?= Html::tag(
                                                        'p',
                                                        Html::encode($item['description']),
                                                        [
                                                            'class' => 'text-secondary small mt-3 mb-3 text-clamp-3',
                                                            'title' => $item['description'],
                                                        ]
                                                    ) ?>

                                                <?php endif; ?>

                                                <!-- COUNT -->
                                                <?php if (isset($item['count'])): ?>

                                                    <?= Html::tag(
                                                        'span',
                                                        Html::encode($item['count']) . ' Document',
                                                        [
                                                            'class' => 'small text-white bg-secondary px-3 py-1 rounded-pill mt-auto',
                                                        ]
                                                    ) ?>

                                                <?php endif; ?>

                                            </div>

                                            <?= Html::endTag('article') ?>

                                        </div>

                                    <?php endforeach; ?>

                                </div>

                            </section>

                        <?php endforeach; ?>
                        <?= Html::endTag('div') ?>
                    <?php endif ?>

                </div>

            </div>


            <!-- =================================================
                 TAB PRA-MOU
                 ================================================= -->

            <div
                class="tab-pane fade"
                id="pra-mou"
                role="tabpanel"
                aria-labelledby="pra-mou-tab"
                tabindex="0">

                <div class="py-5 text-center">

                    <?= Html::tag(
                        'i',
                        '',
                        [
                            'class' => 'bi bi-search',
                            'style' => 'font-size: 3rem;',
                            'aria-hidden' => 'true',
                        ]
                    ) ?>

                    <?= Html::tag(
                        'h2',
                        'Tahap Pra-MoU',
                        [
                            'class' => 'h5 fw-bold mt-3',
                        ]
                    ) ?>

                    <?= Html::tag(
                        'p',
                        'Informasi mengenai tahapan sebelum pelaksanaan MoU.',
                        [
                            'class' => 'text-secondary mb-0',
                        ]
                    ) ?>

                </div>

            </div>

        </div>

    </div>

</div>