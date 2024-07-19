<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Personal - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
</head>
<body class="d-flex flex-column h-100 bg-light">
    <main class="flex-shrink-0">
        @include('layouts.navbar')
        <!-- Page Content-->
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Profile</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <!-- Experience Section-->
                    <section>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                            <!-- Download resume button -->
                            <a class="btn btn-primary px-4 py-3" href="#!">
                                <div class="d-inline-block bi bi-download me-2"></div>
                                Download Profile
                            </a>
                        </div>
                        @foreach ($jobs as $jb)
                        <!-- Experience Card 1-->
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-primary fw-bolder mb-2">{{ $jb->starting_year }} - {{ $jb->year_end }}</div>
                                            <div class="small fw-bolder">{{ $jb->field }}</div>
                                            <div class="small text-muted">{{ $jb->company }}</div>
                                            <div class="small text-muted">{{ $jb->address }}</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div>{{ $jb->work_description }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </section>
                    <!-- Education Section-->
                    <section>
                        <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                        <!-- Education Card 1-->
                        @foreach ($educations as $edtn)
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-secondary fw-bolder mb-2">{{ $edtn->tahun_mulai }} - {{ $edtn->tahun_selesai }}</div>
                                            <div class="mb-2">
                                                <div class="small fw-bolder">{{ $edtn->sekolah }}</div>
                                                <div class="small text-muted">{{ $edtn->lokasi }}</div>
                                            </div>
                                            <div class="fst-italic">
                                                <div class="small text-muted">{{ $edtn->status_kelulusan }}</div>
                                                <div class="small text-muted">{{ $edtn->jurusan }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div>{{ $edtn->deskripsi }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Education Card 2-->
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-secondary fw-bolder mb-2"> 2018 - 2020 </div>
                                            <div class="mb-2">
                                                <div class="small fw-bolder">SMK Negeri 1 Buko</div>
                                                <div class="small text-muted">Tataba</div>
                                            </div>
                                            <div class="fst-italic">
                                                <div class="small text-muted">082110044552</div>
                                                <div class="small text-muted">odenurshila@gmail.com</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div>SMK Negeri 1 Buko berkomitmen untuk terus meningkatkan kualitas pendidikan dan menciptakan 
                                            lingkungan belajar yang mendukung perkembangan siswa secara holistik.</div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="bg-light p-4 rounded-4">
                                            <div class="text-secondary fw-bolder mb-2"> 2022 - Sekarang</div>
                                            <div class="mb-2">
                                                <div class="small fw-bolder">Universitas Mercu Buana Yogyakarta</div>
                                                <div class="small text-muted">Fakultas Teknologi Informasi</div>
                                            </div>
                                            <div class="fst-italic">
                                                <div class="small text-muted">082110044552</div>
                                                <div class="small text-muted">odenurshila@gmail.com</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div>
                                        Fakultas Teknologi Informasi menawarkan kesempatan kepada generasi muda untuk meraih karir menantang, beragam, 
                                        dan kreatif dalam bidang teknologi informasi dan multimedia. Dalam era teknologi Informasi sekarang ini dunia usaha 
                                        banyak membutuhkan tenaga profesional dibidang teknologi Informasi berbasis multimedia sehingga masih tersedia banyak 
                                        peluang bagi lulusan Fakultas Teknologi Informasi.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Divider-->
                    <div class="pb-5"></div>
                   
