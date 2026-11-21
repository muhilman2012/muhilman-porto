<?php

return [
    'navigation' => [
        'home' => ['Beranda', 'Beranda', 'home'],
        'services' => ['Layanan', 'Layanan', 'handyman'],
        'about' => ['Tentang Saya', 'Tentang', 'person'],
        'stack' => ['Tech Stack', 'Stack', 'terminal'],
        'experience' => ['Pengalaman & Solusi', 'Proyek', 'work_outline'],
    ],
    'services' => [
        ['code', 'Pembuatan & Pengembangan Website', 'Membangun website baru atau mengembangkan fitur pada aplikasi yang sudah ada, sesuai kebutuhan pengguna dan alur kerja Anda.', ['Website organisasi dan portal publik', 'Aplikasi internal dan panel pengelolaan', 'Pengembangan fitur dan pelaporan']],
        ['plumbing', 'Konsultasi Teknis & Perbaikan Aplikasi', 'Membantu menelusuri kendala website dan aplikasi, menentukan penyebabnya, serta membahas langkah perbaikan.', ['Penelusuran error dan kendala akses', 'Pemeriksaan kueri dan konfigurasi', 'Review kode dan verifikasi perbaikan']],
        ['dns', 'Server & Deployment Website', 'Menyiapkan website agar dapat berjalan di server, beserta konfigurasi akses, pemantauan, dan prosedur pemeliharaan.', ['Penyiapan server dan konfigurasi website', 'HTTPS dan pemantauan layanan', 'Pencadangan dan pemulihan']],
        ['hub', 'Integrasi Sistem & Otomasi', 'Menghubungkan website dengan layanan lain dan mengurangi pekerjaan berulang melalui pertukaran data antar aplikasi.', ['Integrasi API dan webhook', 'Integrasi komunikasi WhatsApp', 'Sinkronisasi data antar aplikasi']],
    ],
    'featured_technologies' => ['PHP', 'Laravel', 'MySQL', 'Redis', 'Livewire', 'Tailwind CSS', 'Alpine.js', 'JavaScript', 'Vite', 'Docker', 'Nginx', 'Linux', 'Git', 'Postman', 'MinIO'],
    'stack' => [
        ['database', 'Backend & Basis Data', ['PHP 8.3+', 'Laravel', 'MySQL', 'Redis', 'REST API']],
        ['web', 'Antarmuka Web', ['Blade', 'Livewire', 'Tailwind CSS', 'Alpine.js', 'JavaScript', 'Bootstrap', 'Vite']],
        ['dns', 'Infrastruktur & Deployment', ['Docker', 'Nginx', 'Linux', 'Git', 'MinIO']],
        ['hub', 'Integrasi & Observabilitas', ['Webhooks', 'Queue', 'Laravel Reverb', 'Postman', 'Log aplikasi']],
    ],
    'questions' => [
        'Apakah bisa membantu website yang sudah berjalan?' => 'Saya dapat meninjau kebutuhan dan kendalanya terlebih dahulu. Sertakan teknologi yang digunakan, gejala masalah, dan perubahan yang diinginkan agar lingkup pekerjaan bisa ditentukan.',
        'Apa yang perlu disiapkan untuk konsultasi awal?' => 'Ceritakan alur yang ingin diperbaiki, batasan teknis, dan hasil yang diharapkan. Contoh tangkapan layar atau log yang sudah disamarkan dapat membantu.',
        'Bagaimana menentukan lingkup dan durasi pengerjaan?' => 'Lingkup dan durasi ditentukan setelah alur, dependensi, serta kriteria penerimaan disepakati.',
    ],
];

