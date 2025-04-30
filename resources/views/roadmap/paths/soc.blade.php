@extends('layouts.app')

@section('content')
<div class="container py-4 path-content">
    <h1 class="text-center mb-4 glitch-title">{{ __('messages.heading') }}</h1>
    <p class="text-center text-secondary mb-4">{{ __('messages.subtitle') }}</p>
    
    <!-- Navigation Buttons -->
    <div class="text-center mb-4">
        <button class="btn btn-primary me-2" id="finishedBtn">{{ __('messages.finished') }}</button>
        <button class="btn btn-outline-primary" id="planningBtn">{{ __('messages.planning_to_do') }}</button>
    </div>

    <!-- Finished Section -->
    <div id="finishedSection">
        <div class="row g-4">
            <!-- Junior Security Analyst Intro -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/soc_images/junior_analyst.png') }}" alt="{{ __('messages.alt_junior') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.title_junior') }}</h5>
                        <p class="card-text">{{ __('messages.text_junior') }}</p>
                        <a href="https://tryhackme.com/room/juniorsecurityanalystintro" class="btn btn-outline-primary w-100 mt-2">{{ __('messages.btn_junior') }}</a>
                    </div>
                </div>
            </div>

            <!-- Defensive Security Intro -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/soc_images/Defensive.png') }}" alt="{{ __('messages.alt_defensive') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.title_defensive') }}</h5>
                        <p class="card-text">{{ __('messages.text_defensive') }}</p>
                        <a href="https://tryhackme.com/room/defensivesecurityintro" class="btn btn-outline-primary w-100 mt-2">{{ __('messages.btn_defensive') }}</a>
                    </div>
                </div>
            </div>

            <!-- Investigating with ELK 101 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/soc_images/elk_101.png') }}" alt="{{ __('messages.alt_elk') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.title_elk') }}</h5>
                        <p class="card-text">{{ __('messages.text_elk') }}</p>
                        <a href="https://tryhackme.com/room/investigatingwithelk" class="btn btn-outline-primary w-100 mt-2">{{ __('messages.btn_elk') }}</a>
                    </div>
                </div>
            </div>

            <!-- ItsyBitsy -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/soc_images/itsybitsy.png') }}" alt="{{ __('messages.alt_itsybitsy') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.title_itsybitsy') }}</h5>
                        <p class="card-text">{{ __('messages.text_itsybitsy') }}</p>
                        <a href="https://tryhackme.com/room/itsybitsy" class="btn btn-outline-primary w-100 mt-2">{{ __('messages.btn_itsybitsy') }}</a>
                    </div>
                </div>
            </div>

            <!-- Friday Overtime -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/soc_images/friday.png') }}" alt="{{ __('messages.alt_friday') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.title_friday') }}</h5>
                        <p class="card-text">{{ __('messages.text_friday') }}</p>
                        <a href="https://tryhackme.com/room/fridayovertime" class="btn btn-outline-primary w-100 mt-2">{{ __('messages.btn_friday') }}</a>
                    </div>
                </div>
            </div>

            <!-- Eviction -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/soc_images/eviction.png') }}" alt="{{ __('messages.alt_eviction') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.title_eviction') }}</h5>
                        <p class="card-text">{{ __('messages.text_eviction') }}</p>
                        <a href="https://tryhackme.com/room/eviction" class="btn btn-outline-primary w-100 mt-2">{{ __('messages.btn_eviction') }}</a>
                    </div>
                </div>
            </div>

            <!-- Trooper -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/soc_images/tropper.png') }}" alt="{{ __('messages.alt_trooper') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.title_trooper') }}</h5>
                        <p class="card-text">{{ __('messages.text_trooper') }}</p>
                        <a href="https://tryhackme.com/room/trooper" class="btn btn-outline-primary w-100 mt-2">{{ __('messages.btn_trooper') }}</a>
                    </div>
                </div>
            </div>

            <!-- Incident Handling with Splunk -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/soc_images/splunk.png') }}" alt="{{ __('messages.alt_splunk') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.title_splunk') }}</h5>
                        <p class="card-text">{{ __('messages.text_splunk') }}</p>
                        <a href="https://tryhackme.com/room/incidenthandlingwithsplunk" class="btn btn-outline-primary w-100 mt-2">{{ __('messages.btn_splunk') }}</a>
                    </div>
                </div>
            </div>

            <!-- Sysinternals -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/soc_images/sysinternals.png') }}" alt="{{ __('messages.alt_sysinternals') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.title_sysinternals') }}</h5>
                        <p class="card-text">{{ __('messages.text_sysinternals') }}</p>
                        <a href="https://tryhackme.com/room/sysinternals" class="btn btn-outline-primary w-100 mt-2">{{ __('messages.btn_sysinternals') }}</a>
                    </div>
                </div>
            </div>

            <!-- Core Windows Processes -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/soc_images/corewindow.png') }}" alt="{{ __('messages.alt_corewindows') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.title_corewindows') }}</h5>
                        <p class="card-text">{{ __('messages.text_corewindows') }}</p>
                        <a href="https://tryhackme.com/room/corewindowsprocesses" class="btn btn-outline-primary w-100 mt-2">{{ __('messages.btn_corewindows') }}</a>
                    </div>
                </div>
            </div>

            <!-- Windows Fundamentals -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/soc_images/windowsfundamental.svg') }}" alt="{{ __('messages.alt_windowsfundamentals') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.title_windowsfundamentals') }}</h5>
                        <p class="card-text">{{ __('messages.text_windowsfundamentals') }}</p>
                        <a href="https://tryhackme.com/room/windowsfundamentals1" class="btn btn-outline-primary w-100 mt-2">{{ __('messages.btn_windowsfundamentals') }}</a>
                    </div>
                </div>
            </div>

            <!-- Traffic Analysis -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/soc_images/traffic_analysis.png') }}" alt="{{ __('messages.alt_trafficanalysis') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.title_trafficanalysis') }}</h5>
                        <p class="card-text">{{ __('messages.text_trafficanalysis') }}</p>
                        <a href="https://tryhackme.com/room/trafficanalysisessentials" class="btn btn-outline-primary w-100 mt-2">{{ __('messages.btn_trafficanalysis') }}</a>
                    </div>
                </div>
            </div>

            <!-- Snort -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/soc_images/snort.png') }}" alt="{{ __('messages.alt_snort') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.title_snort') }}</h5>
                        <p class="card-text">{{ __('messages.text_snort') }}</p>
                        <a href="https://tryhackme.com/room/snort" class="btn btn-outline-primary w-100 mt-2">{{ __('messages.btn_snort') }}</a>
                    </div>
                </div>
            </div>

            <!-- Networking -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/soc_images/intronetwroking.png') }}" alt="{{ __('messages.alt_networking') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.title_networking') }}</h5>
                        <p class="card-text">{{ __('messages.text_networking') }}</p>
                        <a href="https://tryhackme.com/room/networkfundamentals" class="btn btn-outline-primary w-100 mt-2">{{ __('messages.btn_networking') }}</a>
                    </div>
                </div>
            </div>

            <!-- Summit -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/soc_images/summit.png') }}" alt="{{ __('messages.alt_summit') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.title_summit') }}</h5>
                        <p class="card-text">{{ __('messages.text_summit') }}</p>
                        <a href="https://tryhackme.com/room/soccapstone" class="btn btn-outline-primary w-100 mt-2">{{ __('messages.btn_summit') }}</a>
                    </div>
                </div>
            </div>

            <!-- Red Team Threat Intel -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/soc_images/redteamthreatintel.png') }}" alt="{{ __('messages.alt_redteam') }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.title_redteam') }}</h5>
                        <p class="card-text">{{ __('messages.text_redteam') }}</p>
                        <a href="https://tryhackme.com/room/redteamthreatintel" class="btn btn-outline-primary w-100 mt-2">{{ __('messages.btn_redteam') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Planning Section -->
    <div id="planningSection" style="display: none;">
        <div class="container py-5">
            <h2 class="text-center fw-bold mb-4">{{ __('messages.planning_title') }}</h2>
            <p class="lead text-center text-muted mb-5">{{ __('messages.planning_subtitle') }}</p>

            <div class="timeline">
                <!-- Step 1: SOC Level 1 -->
                <div class="timeline-item left">
                    <div class="timeline-icon bg-primary text-white">
                        <i class="fas fa-play"></i>
                    </div>
                    <div class="timeline-content shadow-sm">
                        <h5>{{ __('messages.soc_level1_title') }}</h5>
                        <img src="{{ asset('images/soc_images/SOCL1.svg') }}" class="img-fluid mb-2" alt="{{ __('messages.soc_level1_alt') }}">
                        <span class="badge bg-success">{{ __('messages.easy') }}</span>
                        <span class="badge bg-primary">{{ __('messages.path') }}</span>
                        <p class="mt-2">{{ __('messages.progress') }}: 34%</p>
                        <a href="https://tryhackme.com/path/outline/soclevel1" target="_blank" class="btn btn-outline-primary btn-sm">{{ __('messages.start_learning') }}</a>
                    </div>
                </div>

                <!-- Step 2: SAL1 -->
                <div class="timeline-item right">
                    <div class="timeline-icon bg-info text-white">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div class="timeline-content shadow-sm">
                        <h5>{{ __('messages.sal1_title') }}</h5>
                        <img src="{{ asset('images/soc_images/sal1.png') }}" class="img-fluid mb-2" alt="{{ __('messages.sal1_alt') }}">
                        <span class="badge bg-info">{{ __('messages.professional_certification') }}</span>
                        <p class="mt-2">{{ __('messages.validate_knowledge') }}</p>
                        <a href="https://tryhackme.com/certification/security-analyst-level-1" target="_blank" class="btn btn-outline-primary btn-sm">{{ __('messages.learn_more') }}</a>
                    </div>
                </div>

                <!-- Step 3: SOC Level 2 -->
                <div class="timeline-item left">
                    <div class="timeline-icon bg-danger text-white">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="timeline-content shadow-sm">
                        <h5>{{ __('messages.soc_level2_title') }}</h5>
                        <img src="{{ asset('images/soc_images/SOCL2.svg') }}" class="img-fluid mb-2" alt="{{ __('messages.soc_level2_alt') }}">
                        <span class="badge bg-danger">{{ __('messages.hard') }}</span>
                        <span class="badge bg-primary">{{ __('messages.path') }}</span>
                        <p class="mt-2">{{ __('messages.advance_skills') }}</p>
                        <a href="https://tryhackme.com/path/outline/soclevel2" target="_blank" class="btn btn-outline-primary btn-sm">{{ __('messages.start_learning') }}</a>
                    </div>
                </div>

                <!-- Step 4: Defending Azure -->
                <div class="timeline-item right">
                    <div class="timeline-icon bg-warning text-dark">
                        <i class="fab fa-microsoft"></i>
                    </div>
                    <div class="timeline-content shadow-sm">
                        <h5>{{ __('messages.azure_title') }}</h5>
                        <img src="{{ asset('images/soc_images/azuresecurity.svg') }}" class="img-fluid mb-2" alt="{{ __('messages.azure_alt') }}">
                        <span class="badge bg-warning text-dark me-1">{{ __('messages.intermediate') }}</span>
                        <span class="badge bg-secondary">{{ __('messages.path') }}</span>
                        <p class="mt-2">{{ __('messages.azure_description') }}</p>
                        <a href="https://tryhackme.com/path/outline/azuresecurity" target="_blank" class="btn btn-outline-primary btn-sm">{{ __('messages.start_learning') }}</a>
                    </div>
                </div>

                <!-- Step 5: Complete -->
                <div class="timeline-item left">
                    <div class="timeline-icon bg-success text-white">
                        <i class="fas fa-flag-checkered"></i>
                    </div>
                    <div class="timeline-content shadow-sm">
                        <h5>{{ __('messages.complete_title') }}</h5>
                        <p class="mt-2">{{ __('messages.complete_description') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Add JavaScript for button functionality -->
<script>
    document.getElementById('finishedBtn').addEventListener('click', function() {
        document.getElementById('finishedSection').style.display = 'block';
        document.getElementById('planningSection').style.display = 'none';
        this.classList.add('btn-primary');
        this.classList.remove('btn-outline-primary');
        document.getElementById('planningBtn').classList.remove('btn-primary');
        document.getElementById('planningBtn').classList.add('btn-outline-primary');
    });

    document.getElementById('planningBtn').addEventListener('click', function() {
        document.getElementById('finishedSection').style.display = 'none';
        document.getElementById('planningSection').style.display = 'block';
        this.classList.add('btn-primary');
        this.classList.remove('btn-outline-primary');
        document.getElementById('finishedBtn').classList.remove('btn-primary');
        document.getElementById('finishedBtn').classList.add('btn-outline-primary');
    });
</script>

@endsection