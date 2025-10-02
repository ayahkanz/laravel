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
            /* Industrial Color Palette */
            --primary-grey: #2C3E50;
            --secondary-grey: #34495E;
            --light-grey: #7F8C8D;
            --accent-blue: #3498DB;
            --accent-yellow: #F39C12;
            --dark-grey: #1A252F;
            --metal-grey: #95A5A6;
            --concrete-grey: #BDC3C7;
            --steel-blue: #5D6D7E;
            --warning-yellow: #E67E22;
            --text-light: #ECF0F1;
            --shadow-dark: rgba(26, 37, 47, 0.3);
        }

        /* Industrial Card Design */
        .card-menu {
            min-height: 320px !important;
            background: linear-gradient(145deg, #34495E 0%, #2C3E50 100%);
            border: 3px solid var(--metal-grey) !important;
            border-radius: 8px !important;
            box-shadow: 
                0 8px 16px var(--shadow-dark),
                0 4px 8px rgba(0, 0, 0, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.1) !important;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            transform-style: preserve-3d;
        }

        /* Industrial Metal Texture Effect */
        .card-menu::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.05) 50%, transparent 70%),
                linear-gradient(90deg, transparent 0%, rgba(255, 255, 255, 0.03) 50%, transparent 100%);
            background-size: 20px 20px, 40px 40px;
            pointer-events: none;
            z-index: 1;
        }

        /* Industrial Hover Effect */
        .card-menu:hover {
            transform: translateY(-4px) scale(1.02);
            box-shadow: 
                0 12px 24px var(--shadow-dark),
                0 6px 12px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 255, 255, 0.15) !important;
            border-color: var(--accent-blue) !important;
        }

        /* Industrial Button Styling */
        .btn-uii {
            background: linear-gradient(135deg, var(--primary-grey), var(--secondary-grey));
            border: 2px solid var(--metal-grey);
            color: var(--text-light);
            padding: 12px 24px;
            border-radius: 4px !important;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 
                0 4px 8px var(--shadow-dark),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-size: 12px;
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
                rgba(52, 152, 219, 0.3), 
                transparent
            );
            transition: all 0.5s ease;
        }

        .btn-uii:hover {
            background: linear-gradient(135deg, var(--accent-blue), var(--steel-blue));
            color: var(--text-light);
            border-color: var(--accent-yellow);
            box-shadow: 
                0 6px 12px var(--shadow-dark),
                0 0 0 1px var(--accent-yellow),
                inset 0 1px 0 rgba(255, 255, 255, 0.2);
            transform: translateY(-1px);
        }

        .btn-uii:hover::before {
            left: 100%;
        }

        /* Industrial Card Headline */
        .card-headline {
            background: linear-gradient(145deg, var(--concrete-grey), var(--light-grey));
            border: 2px solid var(--metal-grey);
            border-radius: 4px;
            min-height: 35px;
            max-height: 85px;
            overflow: hidden;
            box-shadow: 
                0 2px 4px var(--shadow-dark),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
        }

        /* Industrial Image Wrapper */
        .img-wrapper {
            height: 150px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
            background: linear-gradient(145deg, var(--dark-grey), var(--primary-grey));
            border: 2px solid var(--metal-grey);
            border-radius: 4px;
            box-shadow: inset 0 2px 4px var(--shadow-dark);
        }

        .img-wrapper img {
            max-width: 120px; 
            max-height: 120px; 
            object-fit: contain;
            filter: brightness(1.1) contrast(1.1);
        }

        /* Industrial Text Styling */
        .card-text {
            font-size: 20px; 
            font-weight: 700; 
            background: linear-gradient(45deg, var(--accent-blue), var(--accent-yellow)); 
            -webkit-background-clip: text; 
            -webkit-text-fill-color: transparent;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .color-blue-uii {
            background: linear-gradient(45deg, var(--accent-blue), var(--accent-yellow));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 700;
        }

        .user-type-text {
            font-size: 14px; 
            letter-spacing: 0.8px;
            color: var(--text-light);
            text-transform: uppercase;
            font-weight: 500;
        }

        /* Industrial List Items */
        .fa-ul li {
            margin-bottom: 8px;
            transition: all 0.3s ease;
            color: var(--text-light);
            font-size: 14px;
        }

        .fa-ul li:hover {
            transform: translateX(8px);
            color: var(--accent-yellow);
        }

        .fa-ul .color-blue-uii {
            background: linear-gradient(45deg, var(--accent-blue), var(--accent-yellow));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Industrial Collapse Card */
        .collapse .card {
            border: 2px solid var(--metal-grey);
            background: linear-gradient(145deg, var(--secondary-grey), var(--primary-grey));
            border-radius: 4px;
            box-shadow: 
                0 4px 8px var(--shadow-dark),
                inset 0 1px 0 rgba(255, 255, 255, 0.05);
        }

        /* Industrial HR Divider */
        hr {
            background: linear-gradient(
                90deg, 
                transparent, 
                var(--metal-grey), 
                var(--accent-blue),
                var(--accent-yellow),
                var(--metal-grey),
                transparent
            );
            height: 2px;
            border: none;
            opacity: 1;
        }

        /* Industrial Button Group */
        .btn-group-custom {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 8px;
        }

        /* Industrial Section Background */
        .col-12 {
            background: linear-gradient(135deg, var(--dark-grey), var(--primary-grey));
            min-height: 100vh;
        }

        /* Industrial Row Styling */
        .row {
            background: transparent;
        }

        /* Industrial Typography */
        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Industrial Responsive Design */
        @media (max-width: 768px) {
            .card-menu {
                min-height: 280px !important;
            }
            
            .btn-uii {
                padding: 10px 16px;
                font-size: 11px;
            }

            .card-text {
                font-size: 18px;
            }
        }

        /* Industrial Loading Animation */
        @keyframes industrialPulse {
            0% { box-shadow: 0 0 0 0 rgba(52, 152, 219, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(52, 152, 219, 0); }
            100% { box-shadow: 0 0 0 0 rgba(52, 152, 219, 0); }
        }

        .card-menu:hover {
            animation: industrialPulse 2s infinite;
        }

        /* Industrial Grid Pattern Overlay */
        .card-menu::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 20px 20px;
            pointer-events: none;
            z-index: 1;
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
                                    <li><span class="fa-li"><i class="fas fa-clipboard color-blue-uii"></i></span>Kuisioner Online</li>
                                    <li><span class="fa-li"><i class="fas fa-file-archive color-blue-uii"></i></span>Repository Soal Ujian</li>
                                    <li><span class="fa-li"><i class="fas fa-poll-h color-blue-uii"></i></span>Penilaian Mata Kuliah</li>
                                    <li><span class="fa-li"><i class="fas fa-spell-check color-blue-uii"></i></span>Kinerja Mengajar Dosen</li>
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
                                    <li><span class="fa-li"><i class="fas fa-cogs color-blue-uii"></i></span>Global Setting Surat</li>
                                    <li><span class="fa-li"><i class="fas fa-mail-bulk color-blue-uii"></i></span>Surat Tugas</li>
                                    <li><span class="fa-li"><i class="fas fa-mail-bulk color-blue-uii"></i></span>SPJ (Coming Soon)</li>
                                    <li><span class="fa-li"><i class="fas fa-mail-bulk color-blue-uii"></i></span>Surat Keterangan (Coming Soon)</li>
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
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Data Pengajaran</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Data Penelitian</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Data Pengabdian pada Masyarakat</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Data Dakwah Islamiyah</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Data Publikasi</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Data Aktivitas Penunjang</li>
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
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Disposisi Surat</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Surat Keluar</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Ekspedisi Surat</li>
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
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pemesanan Surat (Mahasiswa)</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Pemesanan Surat</li>
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
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengajuan SPMU</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Approval SPMU</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pencatatan LPJ</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Monitoring RKAT</li>
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
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Peminjaman Ruang</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Peminjaman Mobil Dinas</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Permintaan Souvenir</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Permintaan Konsumsi Rapat</li>
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
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Daftar Riwayat Transfer</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Notifikasi Transfer SIK</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pengelolaan Data Transfer Fakultas</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Rekap Transfer</li>
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
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Penjadwalan Rapat</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Notulensi Rapat</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Monitoring Kehadiran</li>
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
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Penilaian Kinerja</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Monitoring Aktivitas</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Laporan Kinerja</li>
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
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pendaftaran TA</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Unggah Dokumen Kelengkapan TA</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Bimbingan TA</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Log Book TA</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Penilaian Pendadaran</li>
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
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Registrasi KP</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Unggah Dokumen Kelengkapan KP</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Bimbingan KP</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Log Book KP</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Seminar KP</li>
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
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Pendaftaran Disertasi</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Bimbingan Disertasi</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Logbook Disertasi</li>
                                    <li><span class="fa-li"><i class="fas fa-hand-point-right color-blue-uii"></i></span>Ujian dan Nilai</li>
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