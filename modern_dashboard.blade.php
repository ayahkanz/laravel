@extends('layout.utama')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/magnews2/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/magnews2/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/magnews2/vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/magnews2/vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/magnews2/css/util.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/magnews2/css/main.css') }}">
    <style>
        :root {
            /* Color Palette - Abu-abu, Biru Soft, Kuning */
            --primary-gray: #E8EEF2;
            --secondary-gray: #C5D3E0;
            --accent-blue: #5B9BD5;
            --accent-yellow: #FFD966;
            --text-dark: #2C3E50;
            --shadow-color: rgba(91, 155, 213, 0.15);
            --white: #FFFFFF;
        }

        /* Card Menu - Prisma Effect */
        .card-menu {
            min-height: 320px !important;
            background: linear-gradient(145deg, #F5F7FA 0%, #E8EEF2 100%);
            border: 3px solid var(--secondary-gray) !important;
            border-radius: 24px !important;
            box-shadow: 
                0 8px 16px rgba(91, 155, 213, 0.1),
                0 4px 8px rgba(0, 0, 0, 0.05),
                inset 0 1px 0 rgba(255, 255, 255, 0.8) !important;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            transform-style: preserve-3d;
        }

        /* Shine Effect pada Card */
        .card-menu::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 217, 102, 0.15),
                transparent
            );
            transition: left 0.6s ease;
            z-index: 1;
        }

        .card-menu:hover::before {
            left: 100%;
        }

        .card-menu:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 
                0 16px 32px rgba(91, 155, 213, 0.2),
                0 8px 16px rgba(0, 0, 0, 0.08),
                inset 0 1px 0 rgba(255, 255, 255, 0.9) !important;
            border-color: var(--accent-blue) !important;
        }

        /* Button Styling */
        .btn-uii {
            background: linear-gradient(135deg, #5B9BD5, #7BA9D9);
            border: none;
            color: white;
            padding: 12px 24px;
            border-radius: 20px !important;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 
                0 4px 12px rgba(91, 155, 213, 0.25),
                0 2px 4px rgba(0, 0, 0, 0.1);
            font-weight: 600;
            letter-spacing: 0.3px;
        }

        .btn-uii::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                90deg, 
                transparent, 
                rgba(255, 217, 102, 0.3), 
                transparent
            );
            transition: all 0.5s ease;
        }

        .btn-uii:hover {
            background: linear-gradient(135deg, #7BA9D9, #FFD966);
            color: var(--text-dark);
            box-shadow: 
                0 6px 16px rgba(91, 155, 213, 0.35),
                0 3px 6px rgba(255, 217, 102, 0.2);
            transform: translateY(-2px);
        }

        .btn-uii:hover::before {
            left: 100%;
        }

        .fitur {
            overflow-y: scroll;
            height: 1px;
        }

        /* Card Headline */
        .card-headline {
            background: white;
            border: 2px solid var(--secondary-gray);
            border-radius: 16px;
            min-height: 35px;
            max-height: 85px;
            overflow: hidden;
            box-shadow: 
                0 2px 8px rgba(91, 155, 213, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.9);
        }

        /* Image Wrapper */
        .card-body img {
            transition: transform 0.3s ease;
            position: relative;
            z-index: 2;
        }

        .card-body:hover img {
            transform: scale(1.05);
        }

        /* Text Color Class */
        .color-blue-uii {
            background: linear-gradient(45deg, #5B9BD5, #7BA9D9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 700;
        }

        /* List Items */
        .fa-ul li {
            margin-bottom: 8px;
            transition: all 0.3s ease;
            color: var(--text-dark);
        }

        .fa-ul li:hover {
            transform: translateX(8px);
            color: var(--accent-blue);
        }

        .fa-ul .color-blue-uii {
            background: linear-gradient(45deg, #5B9BD5, #FFD966);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Collapse Card */
        .collapse .card {
            border: none;
            background: linear-gradient(145deg, #FAFBFC 0%, #F0F4F8 100%);
            border-radius: 16px;
            box-shadow: 
                0 2px 8px rgba(91, 155, 213, 0.08),
                inset 0 1px 0 rgba(255, 255, 255, 0.9);
        }

        /* HR Divider */
        hr {
            background: linear-gradient(
                90deg, 
                transparent, 
                rgba(91, 155, 213, 0.3), 
                transparent
            );
            height: 2px;
            border: none;
            opacity: 1;
        }

        /* Image Wrapper for Consistent Sizing */
        .img-wrapper {
            height: 150px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
        }

        .img-wrapper img {
            max-width: 150px; 
            max-height: 150px; 
            object-fit: contain;
        }

        /* Card Text Styling */
        .card-text {
            font-size: 20px; 
            font-weight: 600; 
            background: linear-gradient(45deg, var(--accent-blue), var(--accent-yellow)); 
            -webkit-background-clip: text; 
            -webkit-text-fill-color: transparent;
        }

        /* User Type Text */
        .user-type-text {
            font-size: 16px; 
            letter-spacing: 0.5px;
            color: var(--text-dark);
        }

        /* Additional Smooth Animations */
        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Button Group Spacing */
        .btn-group-custom {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 8px;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .card-menu {
                min-height: 280px !important;
            }
            
            .btn-uii {
                padding: 10px 20px;
                font-size: 14px;
            }
        }
    </style>
@endsection

@section('content')
    <section class="col-12 color-black pl-0 pr-0">

        <!-- Row 1 -->
        <div class="row col-sm-12 pb-0 pl-0 pr-0 pl-md-4 pr-md-4 pt-4" style="margin:auto;">

            {{-- SIM NKMD --}}
            <div class="col-md-4 mb-md-0 mb-3 pl-0 pr-0 pl-md-2 pr-md-2">
                <div class="card-menu bg-color-white mb-0 shadow p-4 text-center" style="margin:auto;">
                    <div class="card-body p-0">
                        <div class="img-wrapper">
                            <img src="{{ asset('assets/image/nkmd.png') }}" alt="SIM NKMD">
                        </div>
                        <p class="card-text mt-3 mb-4">SIM - NKMD</p>
                        <hr class="mb-3">
                        <h4 class="color-blue-uii mb-0 user-type-text">
                            Untuk dosen, staff dan mahasiswa
                        </h4>
                        <hr class="mt-3 mb-4">
                        <div class="btn-group-custom">
                            <a class="btn btn-uii" data-toggle="collapse" href="#collapseMenuNkmd" role="button" aria-expanded="false" aria-controls="collapseMenuNkmd">
                                <span class="fas fa-list mr-2"></span>Daftar Fitur
                            </a>
                            <a href="{{ nkmd_url() }}">
                                <button class="btn btn-uii">
                                    <span class="fas fa-sign-in-alt mr-2"></span>Login NKMD
                                </button>
                            </a>
                        </div>
                        <div class="collapse mt-3" id="collapseMenuNkmd">
                            <div class="card card-body text-left pt-2 pb-2 pl-1 pr-1">
                                <ul class="fa-ul">
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-clipboard color-blue-uii"></i></span>Kuisioner Online</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-file-archive color-blue-uii"></i></span>Repository Soal Ujian</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-poll-h color-blue-uii"></i></span>Penilaian Mata Kuliah</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-spell-check color-blue-uii"></i></span>Kinerja Mengajar Dosen</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- SIM SURAT --}}
            <div class="col-md-4 mb-md-0 mb-5 pl-0 pr-0 pl-md-2 pr-md-2 mt-3">
                <div class="card-menu bg-color-white mb-0 shadow p-4 text-center" style="margin:auto;">
                    <div class="card-body p-0">
                        <div class="img-wrapper">
                            <img src="{{ asset('assets/image/surat.png') }}" alt="SIM Surat">
                        </div>
                        <p class="card-text mt-3 mb-4">SIM - Surat Tugas</p>
                        <hr class="mb-3">
                        <h4 class="color-blue-uii mb-0 user-type-text">
                            Untuk dosen dan staff
                        </h4>
                        <hr class="mt-3 mb-4">
                        <div class="btn-group-custom">
                            <a class="btn btn-uii" data-toggle="collapse" href="#collapseMenuSurat" role="button" aria-expanded="false" aria-controls="collapseMenuSurat">
                                <span class="fas fa-list mr-2"></span>Daftar Fitur
                            </a>
                            <a href="{{ surat_url() }}">
                                <button class="btn btn-uii">
                                    <span class="fas fa-sign-in-alt mr-2"></span>Login Surat
                                </button>
                            </a>
                        </div>
                        <div class="collapse mt-3" id="collapseMenuSurat">
                            <div class="card card-body text-left pt-2 pb-2 pl-1 pr-1">
                                <ul class="fa-ul">
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-cogs color-blue-uii"></i></span>Global Setting Surat</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-mail-bulk color-blue-uii"></i></span>Surat Tugas</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-mail-bulk color-blue-uii"></i></span>SPJ (Coming Soon)</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-mail-bulk color-blue-uii"></i></span>Surat Keterangan (Coming Soon)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- SIM PORTOFOLIO --}}
            <div class="col-md-4 mb-md-0 mb-5 pl-0 pr-0 pl-md-2 pr-md-2 mt-3">
                <div class="card-menu bg-color-white mb-0 shadow p-4 text-center" style="margin:auto;">
                    <div class="card-body p-0">
                        <div class="img-wrapper">
                            <img src="{{ asset('assets/image/portofolio.png') }}" alt="SIM Portofolio">
                        </div>
                        <p class="card-text mt-3 mb-4">SIM - Portofolio</p>
                        <hr class="mb-3">
                        <h4 class="color-blue-uii mb-0 user-type-text">
                            Untuk dosen dan staff
                        </h4>
                        <hr class="mt-3 mb-4">
                        <div class="btn-group-custom">
                            <a class="btn btn-uii" data-toggle="collapse" href="#collapseMenuPortofolio" role="button" aria-expanded="false" aria-controls="collapseMenuPortofolio">
                                <span class="fas fa-list mr-2"></span>Daftar Fitur
                            </a>
                            <a href="{{ portofolio_url() }}">
                                <button class="btn btn-uii">
                                    <span class="fas fa-sign-in-alt mr-2"></span>Login Portofolio
                                </button>
                            </a>
                        </div>
                        <div class="collapse mt-3" id="collapseMenuPortofolio">
                            <div class="card card-body text-left pt-2 pb-2 pl-1 pr-1">
                                <ul class="fa-ul">
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Data Pengajaran</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Data Penelitian</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Data Pengabdian pada Masyarakat</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Data Dakwah Islamiyah</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Data Publikasi</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Data Aktivitas Penunjang</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- SIM DISPOSISI --}}
            <div class="col-md-4 mb-md-0 mb-5 pl-0 pr-0 pl-md-2 pr-md-2 mt-3">
                <div class="card-menu bg-color-white mb-0 shadow p-4 text-center" style="margin:auto;">
                    <div class="card-body p-0">
                        <div class="img-wrapper">
                            <img src="{{ asset('assets/image/disposisi.png') }}" alt="SIM Disposisi">
                        </div>
                        <p class="card-text mt-3 mb-4">SIM - Disposisi</p>
                        <hr class="mb-3">
                        <h4 class="color-blue-uii mb-0 user-type-text">
                            Untuk dosen dan staff
                        </h4>
                        <hr class="mt-3 mb-4">
                        <div class="btn-group-custom">
                            <a class="btn btn-uii" data-toggle="collapse" href="#collapseMenuDisposisi" role="button" aria-expanded="false" aria-controls="collapseMenuDisposisi">
                                <span class="fas fa-list mr-2"></span>Daftar Fitur
                            </a>
                            <a href="{{ disposisi_url() }}">
                                <button class="btn btn-uii">
                                    <span class="fas fa-sign-in-alt mr-2"></span>Login Disposisi
                                </button>
                            </a>
                        </div>
                        <div class="collapse mt-3" id="collapseMenuDisposisi">
                            <div class="card card-body text-left pt-2 pb-2 pl-1 pr-1">
                                <ul class="fa-ul">
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Disposisi Surat</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Surat Keluar</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Ekspedisi Surat</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- SIM PEMESANAN SURAT (SISO) --}}
            <div class="col-md-4 mb-md-0 mb-5 pl-0 pr-0 pl-md-2 pr-md-2 mt-3">
                <div class="card-menu bg-color-white mb-0 shadow p-4 text-center" style="margin:auto;">
                    <div class="card-body p-0">
                        <div class="img-wrapper">
                            <img src="{{ asset('assets/image/siso.png') }}" alt="SIM SISO">
                        </div>
                        <p class="card-text mt-3 mb-4">SIM - Pemesanan Surat (SISO)</p>
                        <hr class="mb-3">
                        <h4 class="color-blue-uii mb-0 user-type-text">
                            Untuk mahasiswa
                        </h4>
                        <hr class="mt-3 mb-4">
                        <div class="btn-group-custom">
                            <a class="btn btn-uii" data-toggle="collapse" href="#collapseMenuSiso" role="button" aria-expanded="false" aria-controls="collapseMenuSiso">
                                <span class="fas fa-list mr-2"></span>Daftar Fitur
                            </a>
                            <a href="https://siso.fit.uii.ac.id">
                                <button class="btn btn-uii">
                                    <span class="fas fa-sign-in-alt mr-2"></span>Login SISO
                                </button>
                            </a>
                        </div>
                        <div class="collapse mt-3" id="collapseMenuSiso">
                            <div class="card card-body text-left pt-2 pb-2 pl-1 pr-1">
                                <ul class="fa-ul">
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pemesanan Surat (Mahasiswa)</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Pemesanan Surat</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- SIM SPMU --}}
            <div class="col-md-4 mb-md-0 mb-5 pl-0 pr-0 pl-md-2 pr-md-2 mt-3">
                <div class="card-menu bg-color-white mb-0 shadow p-4 text-center" style="margin:auto;">
                    <div class="card-body p-0">
                        <div class="img-wrapper">
                            <img src="{{ asset('assets/image/spmu.png') }}" alt="SIM SPMU">
                        </div>
                        <p class="card-text mt-3 mb-4">SIM - SPMU</p>
                        <hr class="mb-3">
                        <h4 class="color-blue-uii mb-0 user-type-text">
                            Untuk dosen dan staff
                        </h4>
                        <hr class="mt-3 mb-4">
                        <div class="btn-group-custom">
                            <a class="btn btn-uii" data-toggle="collapse" href="#collapseMenuSpmu" role="button" aria-expanded="false" aria-controls="collapseMenuSpmu">
                                <span class="fas fa-list mr-2"></span>Daftar Fitur
                            </a>
                            <a href="{{ spmu_url() }}">
                                <button class="btn btn-uii">
                                    <span class="fas fa-sign-in-alt mr-2"></span>Login SPMU
                                </button>
                            </a>
                        </div>
                        <div class="collapse mt-3" id="collapseMenuSpmu">
                            <div class="card card-body text-left pt-2 pb-2 pl-1 pr-1">
                                <ul class="fa-ul">
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengajuan SPMU</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Approval SPMU</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pencatatan LPJ</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Monitoring RKAT</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- SIM FASILITAS --}}
            <div class="col-md-4 mb-md-0 mb-5 pl-0 pr-0 pl-md-2 pr-md-2 mt-3">
                <div class="card-menu bg-color-white mb-0 shadow p-4 text-center" style="margin:auto;">
                    <div class="card-body p-0">
                        <div class="img-wrapper">
                            <img src="{{ asset('assets/image/fasilitas.png') }}" alt="SIM Fasilitas">
                        </div>
                        <p class="card-text mt-3 mb-4">SIM - Fasilitas</p>
                        <hr class="mb-3">
                        <h4 class="color-blue-uii mb-0 user-type-text">
                            Untuk dosen dan staff
                        </h4>
                        <hr class="mt-3 mb-4">
                        <div class="btn-group-custom">
                            <a class="btn btn-uii" data-toggle="collapse" href="#collapseMenuFasilitas" role="button" aria-expanded="false" aria-controls="collapseMenuFasilitas">
                                <span class="fas fa-list mr-2"></span>Daftar Fitur
                            </a>
                            <a href="{{ fasilitas_url() }}">
                                <button class="btn btn-uii">
                                    <span class="fas fa-sign-in-alt mr-2"></span>Login Fasilitas
                                </button>
                            </a>
                        </div>
                        <div class="collapse mt-3" id="collapseMenuFasilitas">
                            <div class="card card-body text-left pt-2 pb-2 pl-1 pr-1">
                                <ul class="fa-ul">
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Peminjaman Ruang</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Peminjaman Mobil Dinas</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Permintaan Souvenir</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Permintaan Konsumsi Rapat</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- SIM Transfer --}}
            <div class="col-md-4 mb-md-0 mb-5 pl-0 pr-0 pl-md-2 pr-md-2 mt-3">
                <div class="card-menu bg-color-white mb-0 shadow p-4 text-center" style="margin:auto;">
                    <div class="card-body p-0">
                        <div class="img-wrapper">
                            <img src="{{ asset('assets/image/transfer.png') }}" alt="SIM Transfer">
                        </div>
                        <p class="card-text mt-3 mb-4">SIM Transfer (SIK FTI)</p>
                        <hr class="mb-3">
                        <h4 class="color-blue-uii mb-0 user-type-text">
                            Untuk dosen dan staff
                        </h4>
                        <hr class="mt-3 mb-4">
                        <div class="btn-group-custom">
                            <a class="btn btn-uii" data-toggle="collapse" href="#collapseMenuTransfer" role="button" aria-expanded="false" aria-controls="collapseMenuTransfer">
                                <span class="fas fa-list mr-2"></span>Daftar Fitur
                            </a>
                            <a href="{{ transfer_url() }}">
                                <button class="btn btn-uii">
                                    <span class="fas fa-sign-in-alt mr-2"></span>Login SIM Transfer
                                </button>
                            </a>
                        </div>
                        <div class="collapse mt-3" id="collapseMenuTransfer">
                            <div class="card card-body text-left pt-2 pb-2 pl-1 pr-1">
                                <ul class="fa-ul">
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Daftar Riwayat Transfer</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Notifikasi Transfer SIK</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Data Transfer Fakultas</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Rekap Transfer</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- SIM Rapat --}}
            <div class="col-md-4 mb-md-0 mb-5 pl-0 pr-0 pl-md-2 pr-md-2 mt-3">
                <div class="card-menu bg-color-white mb-0 shadow p-4 text-center" style="margin:auto;">
                    <div class="card-body p-0">
                        <div class="img-wrapper">
                            <img src="{{ asset('assets/image/rapat.png') }}" alt="SIM Rapat">
                        </div>
                        <p class="card-text mt-3 mb-4">SIM Rapat</p>
                        <hr class="mb-3">
                        <h4 class="color-blue-uii mb-0 user-type-text">
                            Untuk dosen dan staff
                        </h4>
                        <hr class="mt-3 mb-4">
                        <div class="btn-group-custom">
                            <a class="btn btn-uii" data-toggle="collapse" href="#collapseMenuRapat" role="button" aria-expanded="false" aria-controls="collapseMenuRapat">
                                <span class="fas fa-list mr-2"></span>Daftar Fitur
                            </a>
                            <a href="{{ rapat_url() }}">
                                <button class="btn btn-uii">
                                    <span class="fas fa-sign-in-alt mr-2"></span>Login SIM Rapat
                                </button>
                            </a>
                        </div>
                        <div class="collapse mt-3" id="collapseMenuRapat">
                            <div class="card card-body text-left pt-2 pb-2 pl-1 pr-1">
                                <ul class="fa-ul">
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Penjadwalan Rapat</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Notulensi Rapat</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Monitoring Kehadiran</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- SIM Kinerja --}}
            <div class="col-md-4 mb-md-0 mb-5 pl-0 pr-0 pl-md-2 pr-md-2 mt-3">
                <div class="card-menu bg-color-white mb-0 shadow p-4 text-center" style="margin:auto;">
                    <div class="card-body p-0">
                        <div class="img-wrapper">
                            <img src="{{ asset('assets/image/kinerja.png') }}" alt="SIM Kinerja">
                        </div>
                        <p class="card-text mt-3 mb-4">SIM Kinerja</p>
                        <hr class="mb-3">
                        <h4 class="color-blue-uii mb-0 user-type-text">
                            Untuk dosen dan staff
                        </h4>
                        <hr class="mt-3 mb-4">
                        <div class="btn-group-custom">
                            <a class="btn btn-uii" data-toggle="collapse" href="#collapseMenuKinerja" role="button" aria-expanded="false" aria-controls="collapseMenuKinerja">
                                <span class="fas fa-list mr-2"></span>Daftar Fitur
                            </a>
                            <a href="{{ kinerja_url() }}">
                                <button class="btn btn-uii">
                                    <span class="fas fa-sign-in-alt mr-2"></span>Login SIM Kinerja
                                </button>
                            </a>
                        </div>
                        <div class="collapse mt-3" id="collapseMenuKinerja">
                            <div class="card card-body text-left pt-2 pb-2 pl-1 pr-1">
                                <ul class="fa-ul">
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Penilaian Kinerja</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Monitoring Aktivitas</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Laporan Kinerja</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- SIM TA --}}
            <div class="col-md-4 mb-md-0 mb-5 pl-0 pr-0 pl-md-2 pr-md-2 mt-3">
                <div class="card-menu bg-color-white mb-0 shadow p-4 text-center" style="margin:auto;">
                    <div class="card-body p-0">
                        <div class="img-wrapper">
                            <img src="{{ asset('assets/image/ta.png') }}" alt="SIM Tugas Akhir">
                        </div>
                        <p class="card-text mt-3 mb-4">SIM - Tugas Akhir</p>
                        <hr class="mb-3">
                        <h4 class="color-blue-uii mb-0 user-type-text">
                            Untuk dosen, staff dan mahasiswa
                        </h4>
                        <hr class="mt-3 mb-4">
                        <div class="btn-group-custom">
                            <a class="btn btn-uii" data-toggle="collapse" href="#collapseMenuTA" role="button" aria-expanded="false" aria-controls="collapseMenuTA">
                                <span class="fas fa-list mr-2"></span>Daftar Fitur
                            </a>
                            <a href="{{ ta_url() }}">
                                <button class="btn btn-uii">
                                    <span class="fas fa-sign-in-alt mr-2"></span>Login TA
                                </button>
                            </a>
                        </div>
                        <div class="collapse mt-3" id="collapseMenuTA">
                            <div class="card card-body text-left pt-2 pb-2 pl-1 pr-1">
                                <ul class="fa-ul">
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pendaftaran TA</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Unggah Dokumen Kelengkapan TA</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Bimbingan TA</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Log Book TA</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Penilaian Pendadaran</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- SIM KP --}}
            <div class="col-md-4 mb-md-0 mb-5 pl-0 pr-0 pl-md-2 pr-md-2 mt-3">
                <div class="card-menu bg-color-white mb-0 shadow p-4 text-center" style="margin:auto;">
                    <div class="card-body p-0">
                        <div class="img-wrapper">
                            <img src="{{ asset('assets/image/kp.png') }}" alt="SIM Kerja Praktik">
                        </div>
                        <p class="card-text mt-3 mb-4">SIM - Kerja Praktik</p>
                        <hr class="mb-3">
                        <h4 class="color-blue-uii mb-0 user-type-text">
                            Untuk dosen, staff dan mahasiswa
                        </h4>
                        <hr class="mt-3 mb-4">
                        <div class="btn-group-custom">
                            <a class="btn btn-uii" data-toggle="collapse" href="#collapseMenuKP" role="button" aria-expanded="false" aria-controls="collapseMenuKP">
                                <span class="fas fa-list mr-2"></span>Daftar Fitur
                            </a>
                            <a href="{{ kp_url() }}">
                                <button class="btn btn-uii">
                                    <span class="fas fa-sign-in-alt mr-2"></span>Login KP
                                </button>
                            </a>
                            <a href="{{ kp_v2_url() }}">
                                <button class="btn btn-uii">
                                    <span class="fas fa-sign-in-alt mr-2"></span>Login KP V2
                                </button>
                            </a>
                        </div>
                        <div class="collapse mt-3" id="collapseMenuKP">
                            <div class="card card-body text-left pt-2 pb-2 pl-1 pr-1">
                                <ul class="fa-ul">
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Registrasi KP</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Unggah Dokumen Kelengkapan KP</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Bimbingan KP</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Log Book KP</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Seminar KP</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- SIM Disertasi --}}
            <div class="col-md-4 mb-md-0 mb-5 pl-0 pr-0 pl-md-2 pr-md-2 mt-3">
                <div class="card-menu bg-color-white mb-0 shadow p-4 text-center" style="margin:auto;">
                    <div class="card-body p-0">
                        <div class="img-wrapper">
                            <img src="{{ asset('assets/image/disertasi.png') }}" alt="SIM Disertasi">
                        </div>
                        <p class="card-text mt-3 mb-4">SIM - Disertasi</p>
                        <hr class="mb-3">
                        <h4 class="color-blue-uii mb-0 user-type-text">
                            Untuk dosen, staff dan mahasiswa
                        </h4>
                        <hr class="mt-3 mb-4">
                        <div class="btn-group-custom">
                            <a class="btn btn-uii" data-toggle="collapse" href="#collapseMenuDisertasi" role="button" aria-expanded="false" aria-controls="collapseMenuDisertasi">
                                <span class="fas fa-list mr-2"></span>Daftar Fitur
                            </a>
                            <a href="{{ disertasi_url() }}">
                                <button class="btn btn-uii">
                                    <span class="fas fa-sign-in-alt mr-2"></span>Login Disertasi
                                </button>
                            </a>
                        </div>
                        <div class="collapse mt-3" id="collapseMenuDisertasi">
                            <div class="card card-body text-left pt-2 pb-2 pl-1 pr-1">
                                <ul class="fa-ul">
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pendaftaran Disertasi</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Bimbingan Disertasi</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Logbook Disertasi</li>
                                    <li style="font-size:16px"><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Ujian dan Nilai</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection

@section('javascript')
    <script src="{{ asset('assets/magnews2/vendor/animsition/js/animsition.min.js') }}"></script>
    <script src="{{ asset('assets/magnews2/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('assets/magnews2/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/magnews2/js/main.js') }}"></script>
@endsection