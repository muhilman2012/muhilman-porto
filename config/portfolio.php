<?php

return [
    'name' => 'Muhammad Hilman',
    'role' => 'Web Developer & Konsultan Teknis',
    'email' => 'muhi7714@gmail.com',
    'github' => 'https://github.com/muhilman2012',
    'linkedin' => 'https://www.linkedin.com/in/muhilman2012/',
    'projects' => [
        'lapor-mas-wapres' => [
            'icon' => 'account_tree',
            'title' => 'Lapor Mas Wapres',
            'category' => 'GovTech',
            'summary' => 'Sistem pengelolaan pengaduan masyarakat, dari penerimaan laporan hingga tindak lanjut.',
            'role' => 'Pengembangan backend, integrasi, dan pemeliharaan produksi',
            'details' => [
                'Alur pengaduan' => 'Saya membangun alur penerimaan, verifikasi, klasifikasi, pelacakan, dan pelaporan agar pengelola bisa mengikuti status setiap aduan.',
                'Integrasi layanan' => 'Saya mengintegrasikan sistem dengan Dukcapil dan LAPOR!, serta mengembangkan layanan backend, basis data, dan API yang mendukung alur pengaduan.',
                'Modernisasi v2' => 'Setelah mengevaluasi tahun pertama operasional, saya menginisiasi pengembangan LMW v2 dengan perbaikan arsitektur, alur kerja pengelola, dan antarmuka.',
            ],
            'related' => ['lmw-whatsapp-api' => 'Studi kasus WhatsApp API & Mekari'],
            'link' => 'https://github.com/muhilman2012#featured-experience',
            'link_label' => 'Lihat pengalaman di GitHub',
        ],
        'lmw-whatsapp-api' => [
            'icon' => 'hub',
            'title' => 'WhatsApp API & Mekari',
            'category' => 'Integrasi Lapor Mas Wapres',
            'summary' => 'Integrasi WhatsApp pada Lapor Mas Wapres melalui webhook WhatsApp Business Platform langsung dan layanan Mekari.',
            'role' => 'Pengembangan backend untuk integrasi WhatsApp pada Lapor Mas Wapres',
            'details' => [
                'Webhook WhatsApp API langsung' => 'Saya membangun penerima webhook untuk memproses peristiwa dari WhatsApp Business Platform dan menghubungkannya dengan alur aplikasi Lapor Mas Wapres.',
                'Integrasi Mekari' => 'Saya juga menghubungkan layanan Mekari dengan backend Lapor Mas Wapres untuk kebutuhan komunikasi melalui WhatsApp.',
            ],
            'related' => ['lapor-mas-wapres' => 'Lihat studi kasus Lapor Mas Wapres'],
        ],
        'apart-care' => [
            'icon' => 'home',
            'title' => 'APART-CARE',
            'category' => 'Proyek Tugas Akhir',
            'summary' => 'Pelaporan gangguan fasilitas apartemen melalui QR, dengan tiket, SLA, dan perintah kerja digital.',
            'role' => 'Pengembangan aplikasi Laravel untuk tugas akhir kuliah',
            'details' => [
                'Pelaporan melalui QR' => 'Penghuni dapat memindai QR di titik fasilitas untuk membuat laporan publik tanpa akun.',
                'Alur pengelola' => 'Pengelola bekerja dari antrean tiket dan dapat memantau SLA serta meneruskan pekerjaan melalui perintah kerja digital.',
            ],
            'link' => 'https://github.com/muhilman2012/apart-care',
            'link_label' => 'Lihat repositori',
        ],
        'korpri-musical-challenge' => [
            'icon' => 'bolt',
            'title' => 'KORPRI Musical Challenge',
            'category' => 'Aplikasi Acara',
            'summary' => 'Penjurian, klasemen panggung, dan voting penonton untuk kompetisi musik.',
            'role' => 'Pengembangan aplikasi penjurian dan voting',
            'details' => [
                'Penjurian dan layar panggung' => 'Juri memasukkan nilai di panel mereka. Layar panggung menyediakan tampilan skor sementara dan klasemen peserta.',
                'Voting penonton' => 'Penonton mendukung peserta melalui ponsel dalam sesi voting dengan tenggat yang sama untuk semua perangkat.',
            ],
        ],
        'inaki' => [
            'icon' => 'web',
            'title' => 'INAKI',
            'category' => 'Website Organisasi',
            'summary' => 'Website Ikatan Nasional Analis Kebijakan untuk publikasi organisasi dan informasi keanggotaan.',
            'role' => 'Pengembangan website organisasi',
            'details' => [
                'Informasi dan publikasi' => 'Situs menyediakan profil organisasi, publikasi, dan direktori regulasi yang dapat diakses dari halaman publik.',
                'Keanggotaan' => 'Situs menyediakan informasi keanggotaan serta jalur untuk pendaftaran dan pengecekan status.',
            ],
            'link' => 'https://dev.inaki.or.id/',
            'link_label' => 'Kunjungi website INAKI',
        ],
    ],
];
