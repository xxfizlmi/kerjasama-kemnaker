<?php

namespace app\controllers;

class KsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionKsdn()
    {
        $data = [
            'hero' => [
                'title' => 'Kerja Sama Dalam Negeri',
                'description' => 'Suatu kegiatan yang melibatkan interaksi Kementerian dengan kementerian/lembaga, Pemerintah Daerah, dan Mitra Pembangunan untuk saling memberi manfaat dalam mencapai tujuan bersama dan dilakukan secara bersama-sama',
                'highlights' => [
                    [
                        'title' => 'TUJUAN STRATEGIS',
                        'description' => '“Memperkuat sinergi dan kolaborasi kerja sama dalam negeri secara efektif dan akuntabel guna mendukung pembangunan ketenagakerjaan yang berkelanjutan.”',
                        'icon' => 'bi bi-bullseye',
                        'class' => 'bg-blue'
                    ],
                    [
                        'title' => 'SEKTOR PRIORITAS',
                        'description' => '"Sektor prioritas kerja sama dalam negeri meliputi kompetensi dan penempatan tenaga kerja, hubungan industrial, pengawasan ketenagakerjaan, produktivitas, serta data dan sistem ketenagakerjaan."',
                        'icon' => 'bi bi-layers',
                        'class' => 'bg-warning'
                    ],
                ],

            ],
            'cards' => [
                [
                    'title' => 'Jenis Mitra',
                    'description' => 'Sinergi strategis dijalin dengan berbagai instansi dan pemangku kepentingan guna memperluas dampak positif pembangunan ketenagakerjaan di seluruh Indonesia.',
                    'items' => [
                        [
                            'icon' => 'bi bi-bullseye',
                            'name' => 'Kementerian / Lembaga',
                            'count' => '0',
                            'description' => 'Kementerian yang menyelenggarakan urusan pemerintahan di bidang ketenagakerjaan.'
                        ],
                        [
                            'icon' => 'bi bi-geo-alt',
                            'name' => 'Pemerintah Daerah',
                            'count' => '0',
                            'description' => 'Kepala daerah sebagai unsur penyelenggara pemerintah daerah yang memimpin pelaksanaan urusan pemerintahan.'
                        ],
                        [
                            'icon' => 'bi bi-people-fill',
                            'name' => 'Mitra Pembangunan',
                            'count' => '0',
                            'description' => 'Mitra kerja sama yang meliputi badan hukum, asosiasi, perkumpulan, organisasi, lembaga swadaya, institusi, dan entitas lainnya.'
                        ]
                    ],
                    [
                        'title' => 'Cakupan Kolaborasi',
                        'description' => 'Fokus ruang lingkup pelaksanaan kerja sama diarahkan pada aspek-aspek esensial guna menciptakan ekosistem ketenagakerjaan yang tangguh dan adaptif.',
                        'items' => [
                            'icon' => 'bi bi-book',
                            'name' => 'Kompetensi & Vokasi',
                            'description' => 'Pengembangan keterampilan dan peningkatan kompetensi tenaga kerja.'
                        ],
                        [
                            'icon' => 'bi bi-leaf-fill',
                            'name' => 'Penempatan Kerja',
                            'description' => 'Perluasan kesempatan kerja dan penyerapan tenaga kerja.'
                        ],
                        [
                            'icon' => 'bi bi-globe',
                            'name' => 'Hubungan Industrial',
                            'description' => 'Perlindungan pekerja dan penguatan hubungan industrial.',
                        ],
                        [
                            'icon' => 'bi bi-shield',
                            'name' => 'Pengawasan & Data',
                            'description' => 'Pengawasan ketenagakerjaan serta penguatan data dan sistem informasi.',
                        ],
                    ]
                ]
            ]
        ];
        return $this->render('ksdn/index', $data);
    }

    public function actionKsb()
    {
        $data = [
            'hero' => [
                'title' => 'Kerja Sama Dalam Negeri',
                'description' => 'Suatu kegiatan yang melibatkan interaksi Kementerian dengan kementerian/lembaga, Pemerintah Daerah, dan Mitra Pembangunan untuk saling memberi manfaat dalam mencapai tujuan bersama dan dilakukan secara bersama-sama',
                'highlights' => [
                    [
                        'title' => 'TUJUAN STRATEGIS',
                        'description' => 'meningkatkan kualitas dan daya saing tenaga kerja nasional, memperluas kesempatan kerja yang layak, serta memperkuat tata kelola dan diplomasi ketenagakerjaan yang inklusif, adaptif, dan berkelanjutan',
                        'icon' => 'bi bi-bullseye',
                        'class' => 'bg-blue'
                    ],
                    [
                        'title' => 'SEKTOR PRIORITAS',
                        'description' => 'pengembangan kompetensi dan produktivitas tenaga kerja, transformasi ketenagakerjaan digital dan hijau, penguatan hubungan industrial, serta peningkatan tata kelola dan kapasitas kelembagaan ketenagakerjaan',
                        'icon' => 'bi bi-layers',
                        'class' => 'bg-warning'
                    ],
                ],

            ],
            'cards' =>
            [
                [
                    'id' => 'japan',
                    'image' => '@web/images/countries/japan.png',
                    'name' => 'JEPANG',
                    'documentCount' => 6,
                    'items' => [
                        [
                            'title' => 'PENINGKATAN PENGIRIMAN DAN PENERIMAAN PESERTA MAGANG TEKNIS INDONESIA',
                            'description' => 'memanfaatkan sumber daya dan keunggulan Para Pihak guna mempromosikan secara efektif pengembangan, pengiriman, dan pen...',
                            'status' => 'Aktif',
                            'mitra' => 'Prefektur Kagawa',
                            'pemerintah' => 'Pemerintah'
                        ],
                        [
                            'title' => 'PENINGKATAN PENGIRIMAN DAN PENERIMAAN PESERTA MAGANG TEKNIS INDONESIA',
                            'description' => '1. penyediaan dukungan dalam proses pengembangan, pengiriman, dan penerimaan Peserta Magang Teknis Indonesia di Prefekt...',
                            'status' => 'Aktif',
                            'mitra' => 'Pemerintah Prefektur Ehime ',
                            'pemerintah' => 'Pemerintah'
                        ],
                        [
                            'title' => 'Memorandum Saling Pengertian antara Kementerian Ketenagakerjaan Republik Indonesia dan Pemerintah Prefektur Mie Jepang tentang Kerja Sama untuk Meningkatkan Pengiriman dan Penerimaan Peserta Pemagangan Teknis Indonesia ke Jepang',
                            'description' => 'Para Pihak sepakat untuk bekerja sama dalam kegiatan berikut: a. pemberian dukungan dalam proses pengembangan, pengirim...',
                            'status' => 'Aktif',
                            'mitra' => 'Prefektur Mie',
                            'pemerintah' => 'Pemerintah'
                        ],
                        [
                            'title' => 'Memorandum Kerja Sama antara Kementerian Ketenagakerjaan Republik Indonesia dan Badan Kerja Sama Internasional Jepang tentang Pengembangan Sumber Daya Manusia Tenaga Kerja Indonesia',
                            'description' => '',
                            'status' => 'Aktif',
                            'mitra' => 'JICA (Japan International Cooperation Agency) ',
                            'pemerintah' => 'Pemerintah Negara Asing'
                        ],
                        [
                            'title' => 'Memorandum Kerja Sama antara Sekretariat Jenderal Kementerian Ketenagakerjaan Republik Indonesia dan Pemerintah Prefektur Miyagi Jepang tentang Percepatan Penempatan dan Penerimaan Pemagangan Teknis Indonesia, Sfecified Skilled Workers dan Teknisi ke Jepang',
                            'description' => 'Tujuan dari Memorandum Kerja Sama (MOC) ini adalah untuk mempercepat fasilitasi yang lebih efektif bagi program pelatiha...',
                            'status' => 'Aktif',
                            'mitra' => 'Prefektur Miyagi',
                            'pemerintah' => 'Pemerintah'
                        ],
                        [
                            'title' => 'Memorandum Kerja Sama tentang Program Pelatihan Praktek Kerja Teknis antara Pemerintah Republik Indonesia dengan Pemerintah Jepang',
                            'description' => 'Tujuan kerjasama ini adalah untuk mentransfer keterampilan teknis, dll. dari Jepang ke Republik Indonesia secara tepat d...',
                            'status' => 'Aktif',
                            'mitra' => 'Pemerintah Jepang ',
                            'pemerintah' => 'Pemerintah'
                        ],
                    ],
                ],
                [
                    'id' => 'albania',
                    'image' => '@web/images/countries/albania.png',
                    'name' => 'ALBANIA',
                    'documentCount' => 1,
                    'items' => [
                        [
                            'title' => 'Pernyataan Kehendak antara Kementerian Ketenagakerjaan Republik Indonesia dan Kementerian Ekonomi, Kebudayaan dan Inovasi Republik Albania tentang Kerja Sama Tenaga Kerja dan Ketenagakerjaan',
                            'description' => 'Para pihak akan mengeksplorasi kolaborasi untuk mengembangkan pengaturan khusus di bidang kerja sama berikut: a. mening...',
                            'status' => 'Aktif',
                            'mitra' => 'Kementerian Ekonomi, Kebudayaan dan Inovasi Republik Albania',
                            'pemerintah' => 'Pemerintah'
                        ],
                    ],
                ],
                [
                    'id' => 'palestine',
                    'image' => '@web/images/countries/palestine.png',
                    'name' => 'PALESTINA',
                    'documentCount' => 1,
                    'items' => [
                        [
                            'title' => 'Pernyataan Kehendak antara Kementerian Ketenagakerjaan Republik Indonesia dan Kementerian Tenaga Kerja Negara Palestina tentang Kerja Sama di bidang Tenaga Kerja dan Pengembangan Kapasitas',
                            'description' => 'HEREBY DECLARE the Participants intention to establish a cooperation in the field of labor with the following scopes of...',
                            'status' => 'Aktif',
                            'mitra' => 'Kementerian Tenaga Kerja Negara Palestina',
                            'pemerintah' => 'Pemerintah Negara Asing'
                        ],
                    ],
                ],
                [
                    'id' => 'turkey',
                    'image' => '@web/images/countries/turkey.png',
                    'name' => 'TURKI',
                    'documentCount' => 1,
                    'items' => [
                        [
                            'title' => 'Nota Kesepahaman tentang Kerja Sama di Bidang Ketenagakerjaan antara Kementerian Ketenagakerjaan Republik Indonesia dan Kementerian Tenaga Kerja dan Jaminan Sosial Republik Turki',
                            'description' => 'Para Pihak memutuskan untuk bekerja sama dalam bidang-bidang berikut: a) hubungan kerja yang mencakup hubungan pekerja...',
                            'status' => 'Aktif',
                            'mitra' => 'Kementerian Tenaga Kerja dan Jaminan Sosial Republik Turki',
                            'pemerintah' => 'Pemerintah Negara Asing'
                        ],
                    ],
                ],
                [
                    'id' => 'swiss',
                    'image' => '@web/images/countries/swiss.png',
                    'name' => 'SWISS',
                    'documentCount' => 2,
                    'items' => [
                        [
                            'title' => 'Persetujuan antara Pemerintah Republik Indonesia dan Dewan Federal Swiss pada Pertukaran Profesional Muda',
                            'description' => '1. Persetujuan ini mengatur pertukaran warga negara Swiss dan Indonesial (dari kedua jenis kelamin) yang bekerja di nega...',
                            'status' => 'Aktif',
                            'mitra' => 'Pemerintah Jepang ',
                            'pemerintah' => 'Pemerintah Negara Asing'
                        ],
                        [
                            'title' => 'Memorandum Saling Pengertian antara Kementerian Ketenagakerjaan Republik Indonesia dan Departemen Federal Urusan Ekonomi, Pendidikan dan Penelitian Konfederasi Swiss tentang Kerja Sama di Bidang Tenaga Kerja dan Hubungan Kerja',
                            'description' => '1. Para Penandatangan akan bekerjasama di bidang sebagai berikut : a) Kebijakan pasar tenaga kerja; b) Hukum Ketenag...',
                            'status' => 'Aktif',
                            'mitra' => 'State Secretariat for Economic Affairs (SECO)',
                            'pemerintah' => 'Pemerintah Negara Asing'
                        ],
                    ],
                ],
                [
                    'id' => 'singapore',
                    'image' => '@web/images/countries/singapore.png',
                    'name' => 'SINGAPURA   ',
                    'documentCount' => 1,
                    'items' => [
                        [
                            'title' => 'Nota Kesepahaman antara Kementerian Koordinator Bidang Perekonomian Republik Indonesia dan Kementerian Perdagangan dan Perindustrian Republik Singapura tentang Program Tech:X Indonesia - Singapura',
                            'description' => 'Tujuan Nota Kesepahaman ("MOU") ini adalah untuk menetapkan kerangka kerja untuk Program Tech:X antara Indones...',
                            'status' => 'Aktif',
                            'mitra' => 'Kementerian Perdagangan dan Perindustrian Republik Singapura ',
                            'pemerintah' => 'Pemerintah Negara Asing'
                        ],
                    ],
                ],
                [
                    'id' => 'azerbaijan',
                    'image' => '@web/images/countries/azerbaijan.png',
                    'name' => 'AZERBAIJAN',
                    'documentCount' => 2,
                    'items' => [
                        [
                            'title' => 'Memorandum Saling Pengertian antara Kementerian Tenaga Kerja dan Perlindungan Sosial Penduduk Republik Azerbaijan dan Kementerian Ketenagakerjaan Republik Indonesia tentang Kerja Sama di Bidang Tenaga Kerja, Ketenagakerjaan, dan Perlindungan Sosial',
                            'description' => 'Para Pihak wajib bekerja sama dalam bidang-bidang utama berikut dalam kompetensinya sesuai dengan undang-undang nasional...',
                            'status' => 'Aktif',
                            'mitra' => 'Kementerian Tenaga Kerja dan Perlindungan Sosial Penduduk Republik Azerbaijan',
                            'pemerintah' => 'Pemerintah'
                        ],
                    ],
                ],
                [
                    'id' => 'austria',
                    'image' => '@web/images/countries/austria.png',
                    'name' => 'AUSTRIA',
                    'documentCount' => 2,
                    'items' => [
                        [
                            'title' => 'Memorandum Saling Pengertian antara Kementerian Ketenagakerjaan Republik Indonesia dan Kementerian Federal Tenaga Kerja dan Ekonomi Republik Austria tentang Kerja Sama Pelatihan Vokasi pada Pelatihan Berbasis Kerja',
                            'description' => '1. Memorandum Saling Pengertian ini (selanjutnya disebut MSP) merupakan kerangka kerja sama antara Para Pihak di bidang...',
                            'status' => 'Aktif',
                            'mitra' => 'Kementerian Federal Tenaga Kerja dan Ekonomi Republik Austria ',
                            'pemerintah' => 'Pemerintah Negara Asing'
                        ],
                    ],
                ],
                [
                    'id' => 'australia',
                    'image' => '@web/images/countries/australia.png',
                    'name' => 'AUSTRALIA',
                    'documentCount' => 2,
                    'items' => [
                        [
                            'title' => 'Memorandum Saling Pengertian (Sebagaimana Telah Diubah) antara Pemerintah Republik Indonesia dan Pemerintah Australia tentang Pilot Pertukaran Pengembangan Keterampilan',
                            'description' => 'Tujuan dari Memorandum Saling Pengertian (sebagaimana telah diubah) (MSP) ini adalah untuk: (a) menyelenggarakan Pilot...',
                            'status' => 'Aktif',
                            'mitra' => 'Pemerintah Australia',
                            'pemerintah' => 'Pemerintah'
                        ],
                    ],
                ],
            ],


        ];
        return $this->render('ksb/index', $data);
    }

    public function actionKsr()
    {
        $data = [
            'hero' => [
                'title' => 'Kerja Sama Regional',
                'description' => 'Kerja sama regional di bidang ketenagakerjaan merupakan kerja sama peningkatan sektor ketenagakerjaan yang dilaksanakan oleh pemerintah Indonesia dengan pemerintah negara lain atau organisasi internasional dalam konteks kesatuan kawasan untuk mendukung proses integrasi dan pertumbuhan ekonomi kawasan tersebut.',
                'highlights' => [
                    [
                        'title' => 'TUJUAN STRATEGIS',
                        'description' => '"Meningkatkan kualitas dan dampak kerja sama regional untuk mengembangkan kualitas keterampilan dan perlindungan hak tenaga kerja, memperluas kesempatan kerja, serta mendukung pembangunan ekosistem ketenagakerjaan nasional dan kawasan."',
                        'icon' => 'bi bi-bullseye',
                        'color' => 'bg-blue'
                    ],
                    [
                        'title' => 'SEKTOR PRIORITAS',
                        'description' => '"Ketenagakerjaan dan pelatihan vokasi, penempatan dan perluasan kesempatan kerja, hubungan industrial, keselamatan dan kesehatan kerja, serta produktivitas."',
                        'icon' => 'bi bi-bullseye',
                        'color' => 'bg-warning'
                    ],
                ],
            ],
            'cards' => [
                [
                    'id' => 'asean',
                    'image' => '@web/images/organization/asean.png',
                    'name' => 'ASEAN',
                    'title' => 'ASEAN Labour Ministers Meeting (ALMM)',
                    'description' => '-',
                    'items' => [
                        [
                            'title' => 'Senior Labour Officials Meeting (SLOM)',
                            'description' => 'Melalui SLOM, Kemnaker berperan sebagai focal point Indonesia dalam perumusan kebijakan, penyusunan pedoman regional, serta pertukaran praktik ketenagakerjaan antar negara anggota ASEAN.',
                        ],
                    ],
                    'url' => 'https://asean.org/photoparent/asean-labour-ministers-meeting-almm/',
                ],

                [
                    'id' => 'apec',
                    'image' => '@web/images/organization/apec.png',
                    'name' => 'APEC',
                    'title' => 'Human Resources Development Working Group (HRDWG)',
                    'description' => 'Tidak ada deskripsi',
                    'items' => [
                        [
                            'title' => 'Human Resources Development Working Group (HRDWG)',
                            'description' => 'Melalui HRDWG, Kemnaker terlibat dalam kegiatan dan proyek kerja sama yang berfokus pada pengembangan sumber daya manusia dan ketenagakerjaan, termasuk peningkatan keterampilan tenaga kerja, kesiapan menghadapi perubahan pasar kerja, serta pertukaran kebijakan dan praktik terbaik antar ekonomi anggota APEC.',
                        ],
                    ],
                    'url' => 'https://www.apec.org/',
                ],

                [
                    'id' => 'ipef',
                    'image' => '@web/images/organization/world.png',
                    'name' => 'IPEF',
                    'title' => 'Labour Rights Advisory Board (LRAB)',
                    'description' => 'Pilar IPEF Supply Chain mendorong kerja sama penguatan rantai pasok pada sektor-sektor yang menjadi kepentingan bersama untuk meningkatkan daya saing, ketangguhan, serta mengantisipasi dan merespon gangguan rantai pasok seiring dengan perlindungan hak-hak pekerja pada sektor rantai pasok regional.',
                    'items' => [
                        [
                            'title' => 'Supply Chain',
                            'description' => 'Melalui LRAB, Kemnaker berperan sebagai pengampu bidang perlindungan hak pekerja pada industri rantai pasok.',
                        ],
                    ],
                    'url' => '',
                ],

                [
                    'id' => 'imt-gt',
                    'image' => '@web/images/organization/imt-gt.png',
                    'name' => 'IMT-GT',
                    'title' => 'Working Group on Human Resources Development (WGHRD)',
                    'description' => 'Tidak ada deskripsi',
                    'items' => [
                        [
                            'title' => 'Working Group on Human Resources Development (WGHRD)',
                            'description' => 'Melalui WGHRD, Kemnaker terlibat dalam proyek dan kegiatan yang berfokus pada pengembangan keterampilan tenaga kerja, peningkatan kapasitas SDM kawasan perbatasan, serta pertukaran kebijakan dan praktik ketenagakerjaan antar negara anggota.',
                        ],
                    ],
                    'url' => 'https://imtgt.org/',
                ],

                [
                    'id' => 'acaft',
                    'image' => '@web/images/organization/world.png',
                    'name' => 'ACAFT',
                    'title' => 'WGTSD & WGTIS',
                    'description' => 'Tidak ada deskripsi.',
                    'items' => [
                        [
                            'title' => 'Working Group on Trade and Sustainable Development (WGTSD)',
                            'description' => 'Dalam perundingan ACAFTA, Kemnaker berperan menjaga dan merumuskan isu ketenagakerjaan dalam WG-TSD agar selaras dengan standar nasional dan prinsip perdagangan berkelanjutan.',
                        ],
                    ],
                    'url' => '',
                ],
            ],
        ];
        return $this->render('ksr/index', $data);
    }

    public function actionKsm()
    {
        $data = [
            'hero' => [
                'title' => 'Kerja Sama Multilateral',
                'description' => 'Kerja Sama multilateral dilaksanakan oleh lebih dari 2 (dua) negara dan/atau organisasi internasional tanpa memandang wilayah atau kawasan tertentu.',
                'highlights' => [
                    [
                        'title' => 'TUJUAN STRATEGIS',
                        'description' => 'Mendorong pertumbuhan ekonomi nasional melalui peningkatan kompetensi SDM, perluasan pasar kerja luar negeri, serta penguatan perlindungan tenaga kerja yang adaptif.',
                        'icon' => 'bi bi-bullseye',
                        'class' => 'bg-blue'
                    ],
                    [
                        'title' => 'SEKTOR PRIORITAS',
                        'description' => 'Akselerasi pelatihan vokasi berbasis industri, adaptasi ekonomi digital dan hijau, serta penciptaan hubungan industrial yang kondusif bagi investasi."',
                        'icon' => 'bi bi-layers',
                        'class' => 'bg-warning'
                    ],
                ],

            ],
            'cards' => [
                [
                    'id'    => 'brics',
                    'image' => '@web/images/organization/brics.png',
                    'name' => 'BRICS',
                    'title' => 'BRICS adalah forum kerja sama internasional yang terdiri dari Brasil, Rusia, Ind...',
                    'description' => '',
                    'status' => 'Aktif',
                    'items' => [
                        [
                            'title' => 'Working Group on Human Resources Development (WGHRD)',
                            'description' => 'BRICS adalah forum kerja sama internasional yang terdiri dari Brasil, Rusia, India, Tiongkok, dan Afrika Selatan. Forum ini bertujuan memperkuat kerja sama ekonomi, politik, dan pembangunan di antara negara-negara berkembang dan negara dengan ekonomi besar. BRICS menjadi wadah koordinasi kebijakan untuk mendorong pertumbuhan ekonomi yang inklusif dan tatanan global yang lebih seimbang. Kerja sama BRICS mencakup bidang keuangan, perdagangan, pembangunan, teknologi, dan ketenagakerjaan. Salah satu inisiatif pentingnya adalah pembentukan New Development Bank (NDB) untuk mendukung pembiayaan pembangunan. BRICS juga menekankan prinsip saling menghormati kedaulatan dan kepentingan nasional. Melalui BRICS, negara anggota berupaya memperkuat peran negara berkembang dalam tata kelola global.',
                        ],
                    ],
                ],
                [
                    'id'    => 'g20',
                    'image' => '@web/images/organization/g20.jpg',
                    'name' => 'G20',
                    'title' => 'G20 (Group of Twenty) adalah forum kerja sama internasional',
                    'description' => '',
                    'status' => 'Aktif',
                    'items' => [
                        [
                            'title' => 'Working Group on Human Resources Development (WGHRD)',
                            'description' => 'G20 (Group of Twenty) adalah forum kerja sama internasional yang mempertemukan 19 negara dengan perekonomian terbesar di dunia serta Uni Eropa untuk membahas isu-isu strategis global. Organisasi ini berfokus pada stabilitas ekonomi dan keuangan internasional, namun dalam perkembangannya juga membahas isu pembangunan, ketenagakerjaan, perubahan iklim, kesehatan, dan inklusivitas sosial. G20 tidak menghasilkan perjanjian yang mengikat secara hukum, tetapi berperan penting dalam koordinasi kebijakan dan pengambilan komitmen bersama antar negara anggota. Struktur G20 terdiri dari jalur utama seperti Sherpa Track dan Finance Track, serta melibatkan berbagai kelompok kerja dan engagement groups (misalnya B20, L20, C20). Melalui G20, negara-negara anggota berupaya memperkuat kerja sama global guna menghadapi tantangan ekonomi dan sosial dunia secara kolektif.',
                        ],
                    ],
                ],
                [
                    'id'    => 'globaldeal',
                    'image' => '@web/images/organization/globaldeal.jpg',
                    'name' => 'GLOBAL DEAL',
                    'title' => 'Global Deal adalah inisiatif kerja sama internasional yang bertujuan',
                    'description' => '',
                    'status' => 'Aktif',
                    'items' => [
                        [
                            'title' => 'Working Group on Human Resources Development (WGHRD)',
                            'description' => 'Global Deal adalah inisiatif kerja sama internasional yang bertujuan memperkuat dialog sosial dan perundingan bersama sebagai sarana untuk menciptakan pertumbuhan ekonomi yang inklusif dan pekerjaan yang layak. Inisiatif ini diluncurkan untuk mengurangi ketimpangan dan meningkatkan keadilan sosial di dunia kerja. Global Deal mempertemukan pemerintah, pengusaha, serikat pekerja, dan organisasi internasional. Fokus utamanya adalah mendorong kebijakan ketenagakerjaan yang adil, partisipatif, dan berkelanjutan. Global Deal juga menjadi wadah berbagi praktik baik dalam hubungan industrial. Inisiatif ini didukung oleh organisasi internasional seperti ILO dan OECD. Melalui Global Deal, negara dan pemangku kepentingan didorong untuk memperkuat kerja sama demi kesejahteraan pekerja dan stabilitas ekonomi.',
                        ],
                    ],
                ],
                [
                    'id'    => 'ilo',
                    'image' => '@web/images/organization/ilo.png',
                    'name' => 'International Labour Organization (ILO)',
                    'title' => '',
                    'description' => '',
                    'status' => 'Aktif',
                    'items' => [
                        [
                            'title' => 'Working Group on Human Resources Development (WGHRD)',
                            'description' => 'International Labour Organization (ILO) adalah badan khusus Perserikatan Bangsa-Bangsa yang bergerak di bidang ketenagakerjaan dan keadilan sosial. ILO bertujuan mempromosikan pekerjaan yang layak (decent work) bagi semua. Keunikan ILO terletak pada struktur tripartit, yang melibatkan pemerintah, pengusaha, dan pekerja dalam pengambilan keputusan. ILO menyusun dan mengawasi penerapan standar ketenagakerjaan internasional berupa konvensi dan rekomendasi. Selain itu, ILO memberikan bantuan teknis dan pengembangan kapasitas kepada negara anggota. ILO juga berperan dalam perlindungan hak-hak pekerja, penghapusan kerja paksa dan pekerja anak, serta peningkatan jaminan sosial. Melalui perannya, ILO berkontribusi pada terciptanya keadilan sosial dan pembangunan berkelanjutan di tingkat global.',
                        ],
                    ],
                ],
                [
                    'id'    => 'issa',
                    'image' => '@web/images/organization/issa.png',
                    'name' => 'International Social Security Association (ISSA)',
                    'title' => 'International Social Security Association (ISSA) adalah organisasi internasional...',
                    'description' => '',
                    'status' => 'Aktif',
                    'items' => [
                        [
                            'title' => 'Working Group on Human Resources Development (WGHRD)',
                            'description' => 'International Social Security Association (ISSA) adalah organisasi internasional yang menghimpun lembaga jaminan sosial dari berbagai negara. ISSA bertujuan meningkatkan kinerja sistem jaminan sosial agar lebih efektif, inklusif, dan berkelanjutan. Organisasi ini menjadi forum pertukaran pengetahuan, pengalaman, dan praktik terbaik dalam pengelolaan jaminan sosial. Bidang yang dicakup meliputi jaminan kesehatan, pensiun, kecelakaan kerja, dan perlindungan sosial lainnya. ISSA juga menyusun pedoman dan standar teknis bagi lembaga jaminan sosial. Melalui pelatihan, penelitian, dan kerja sama internasional, ISSA mendukung penguatan kapasitas institusi anggotanya. Dengan demikian, ISSA berperan penting dalam memperluas perlindungan sosial secara global.',
                        ],
                    ],
                ],
                [
                    'id'    => 'oki',
                    'image' => '@web/images/organization/oki.png',
                    'name' => 'Organisasi Kerjasama Islam (OKI)',
                    'title' => 'Organisasi Kerjasama Islam (OKI) adalah organisasi internasional',
                    'description' => '',
                    'status' => 'Aktif',
                    'items' => [
                        [
                            'title' => 'Working Group on Human Resources Development (WGHRD)',
                            'description' => 'Organisasi Kerjasama Islam (OKI) adalah organisasi internasional yang menghimpun negara-negara dengan mayoritas penduduk Muslim dari berbagai kawasan dunia. OKI bertujuan memperkuat solidaritas dan kerja sama antar negara anggota dalam bidang politik, ekonomi, sosial, budaya, dan ilmu pengetahuan. Organisasi ini juga berperan dalam melindungi kepentingan dan hak umat Islam di tingkat internasional. OKI mendorong perdamaian, stabilitas, dan dialog antar peradaban. Selain itu, OKI aktif menangani isu kemanusiaan dan pembangunan di negara anggota. Struktur OKI terdiri dari Konferensi Tingkat Tinggi, Dewan Menteri Luar Negeri, dan Sekretariat Jenderal. Keputusan OKI umumnya diambil melalui musyawarah dan konsensus. Melalui OKI, negara anggota berupaya memperkuat peran kolektif dunia Islam dalam tatanan global.',
                        ],
                    ],
                ],
                [
                    'id'    => 'oecd',
                    'image' => '@web/images/organization/oecd.png',
                    'name' => 'Organisation for Economic Co-operation and Development (OECD)',
                    'title' => 'Organisation for Economic Co-operation and Development (OECD) adalah organisasi...',
                    'description' => '',
                    'status' => 'Aktif',
                    'items' => [
                        [
                            'title' => 'Working Group on Human Resources Development (WGHRD)',
                            'description' => 'Organisation for Economic Co-operation and Development (OECD) adalah organisasi internasional yang beranggotakan negara-negara maju dan berkembang yang berkomitmen pada prinsip demokrasi dan ekonomi pasar. OECD bertujuan mendorong pertumbuhan ekonomi yang berkelanjutan, stabilitas keuangan, serta peningkatan kesejahteraan masyarakat. Organisasi ini menjadi forum bagi negara anggota untuk berbagi data, analisis, dan praktik terbaik dalam perumusan kebijakan publik. Bidang kerja OECD mencakup ekonomi, ketenagakerjaan, pendidikan, perpajakan, perdagangan, dan pembangunan. OECD juga menyusun standar dan rekomendasi kebijakan internasional yang diakui secara global. Keputusan OECD bersifat tidak mengikat, namun berpengaruh kuat terhadap kebijakan nasional. Melalui OECD, negara anggota memperkuat kerja sama internasional dalam menghadapi tantangan ekonomi dan sosial global.',
                        ],
                    ],
                ],
                [
                    'id'    => 'unfcc',
                    'image' => '@web/images/organization/unfcc.png',
                    'name' => 'United Nations Framework Convention on Climate Change (UNFCCC)',
                    'title' => 'United Nations Framework Convention on Climate Change (UNFCCC) adalah perjanjian...',
                    'description' => '',
                    'status' => 'Aktif',
                    'items' => [
                        [
                            'title' => 'Working Group on Human Resources Development (WGHRD)',
                            'description' => 'United Nations Framework Convention on Climate Change (UNFCCC) adalah perjanjian internasional di bawah Perserikatan Bangsa-Bangsa yang bertujuan menanggulangi perubahan iklim global. UNFCCC menjadi kerangka kerja bagi negara-negara dalam menstabilkan konsentrasi gas rumah kaca agar tidak membahayakan sistem iklim bumi. Konvensi ini mendorong kerja sama internasional dalam mitigasi, adaptasi, dan pendanaan iklim. UNFCCC juga menjadi payung bagi perjanjian penting seperti Protokol Kyoto dan Perjanjian Paris. Melalui mekanisme seperti Conference of the Parties (COP), negara pihak secara rutin meninjau dan memperkuat komitmen iklim mereka. UNFCCC menekankan prinsip tanggung jawab bersama namun berbeda (common but differentiated responsibilities). Melalui konvensi ini, komunitas global berupaya menghadapi dampak perubahan iklim secara kolektif dan berkelanjutan.',
                        ],
                    ],
                ],
                [
                    'id'    => 'wef',
                    'image' => '@web/images/organization/wef.png',
                    'name' => 'World Economic Forum (WEF)',
                    'title' => 'World Economic Forum (WEF) adalah organisasi internasional',
                    'description' => '',
                    'status' => 'Aktif',
                    'items' => [
                        [
                            'title' => 'Working Group on Human Resources Development (WGHRD)',
                            'description' => 'World Economic Forum (WEF) adalah organisasi internasional non-pemerintah yang berbasis di Swiss dan berfungsi sebagai forum dialog publik–swasta. WEF mempertemukan pemimpin negara, pelaku bisnis, akademisi, dan masyarakat sipil untuk membahas isu-isu global strategis. Organisasi ini bertujuan mendorong peningkatan kondisi dunia melalui kerja sama internasional. Fokus pembahasannya meliputi ekonomi global, pembangunan berkelanjutan, ketenagakerjaan, teknologi, dan perubahan iklim. Kegiatan paling dikenal adalah Annual Meeting di Davos. WEF tidak menghasilkan keputusan yang mengikat, tetapi berpengaruh dalam membentuk agenda dan arah kebijakan global. Melalui WEF, berbagai pemangku kepentingan didorong untuk berkolaborasi menghadapi tantangan dunia bersama.',
                        ],
                    ],
                ],
            ],
        ];
        return $this->render('ksm/index', $data);
    }
}
