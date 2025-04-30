@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="text-center mb-4 glitch-title">{{ __('messages.eng_heading') }}</h1>
    <p class="text-center text-secondary mb-4">{{ __('messages.eng_subtitle') }}</p>
    
    <!-- Navigation Buttons -->
    <div class="text-center mb-4">
        <button class="btn btn-info me-2" id="finishedBtn">{{ __('messages.finished') }}</button>
        <button class="btn btn-outline-info" id="planningBtn">{{ __('messages.planning_to_do') }}</button>
    </div>

    <!-- Finished Section -->
    <div id="finishedSection">
        <div class="row g-4">
            <!-- Security Engineer Intro -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('seceng_images/sec_intro.png') }}" class="card-img-top" alt="{{ __('messages.eng_alt_intro') }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.eng_title_intro') }}</h5>
                        <p class="card-text">{{ __('messages.eng_text_intro') }}</p>
                        <a href="https://tryhackme.com/room/securityengineerintro" target="_blank" class="btn btn-outline-info w-100 mt-2">{{ __('messages.eng_btn_intro') }}</a>
                    </div>
                </div>
            </div>
            
            <!-- Security Principles -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('seceng_images/security_principles.png') }}" class="card-img-top" alt="{{ __('messages.eng_alt_arch') }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.eng_title_arch') }}</h5>
                        <p class="card-text">{{ __('messages.eng_text_arch') }}</p>
                        <a href="https://tryhackme.com/room/securityprinciples" target="_blank" class="btn btn-outline-info w-100 mt-2">{{ __('messages.eng_btn_arch') }}</a>
                    </div>
                </div>
            </div>
            
            <!-- Security Awareness -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('seceng_images/awareness.png') }}" class="card-img-top" alt="{{ __('messages.eng_alt_coding') }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.eng_title_coding') }}</h5>
                        <p class="card-text">{{ __('messages.eng_text_coding') }}</p>
                        <a href="https://tryhackme.com/room/securityawareness" target="_blank" class="btn btn-outline-info w-100 mt-2">{{ __('messages.eng_btn_coding') }}</a>
                    </div>
                </div>
            </div>
            
            <!-- Introduction to SIEM -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('seceng_images/siem_intro.png') }}" class="card-img-top" alt="{{ __('messages.eng_alt_threat') }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.eng_title_threat') }}</h5>
                        <p class="card-text">{{ __('messages.eng_text_threat') }}</p>
                        <a href="https://tryhackme.com/room/siem" target="_blank" class="btn btn-outline-info w-100 mt-2">{{ __('messages.eng_btn_threat') }}</a>
                    </div>
                </div>
            </div>
            
            <!-- MISP -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('seceng_images/misp.png') }}" class="card-img-top" alt="{{ __('messages.eng_alt_auto') }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.eng_title_auto') }}</h5>
                        <p class="card-text">{{ __('messages.eng_text_auto') }}</p>
                        <a href="https://tryhackme.com/room/misp" target="_blank" class="btn btn-outline-info w-100 mt-2">{{ __('messages.eng_btn_auto') }}</a>
                    </div>
                </div>
            </div>
            
            <!-- MITRE ATT&CK -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('seceng_images/mitre.png') }}" class="card-img-top" alt="{{ __('messages.eng_alt_intro') }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.eng_title_intro') }}</h5>
                        <p class="card-text">{{ __('messages.eng_text_intro') }}</p>
                        <a href="https://tryhackme.com/room/mitreattack" target="_blank" class="btn btn-outline-info w-100 mt-2">{{ __('messages.eng_btn_intro') }}</a>
                    </div>
                </div>
            </div>
            
            <!-- OpenCTI -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('seceng_images/opencti.png') }}" class="card-img-top" alt="{{ __('messages.eng_alt_arch') }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.eng_title_arch') }}</h5>
                        <p class="card-text">{{ __('messages.eng_text_arch') }}</p>
                        <a href="https://tryhackme.com/room/opencti" target="_blank" class="btn btn-outline-info w-100 mt-2">{{ __('messages.eng_btn_arch') }}</a>
                    </div>
                </div>
            </div>
            
            <!-- Pyramid of Pain -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('seceng_images/pyramid.png') }}" class="card-img-top" alt="{{ __('messages.eng_alt_coding') }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.eng_title_coding') }}</h5>
                        <p class="card-text">{{ __('messages.eng_text_coding') }}</p>
                        <a href="https://tryhackme.com/room/pyramidofpain" target="_blank" class="btn btn-outline-info w-100 mt-2">{{ __('messages.eng_btn_coding') }}</a>
                    </div>
                </div>
            </div>
            
            <!-- Cyber Kill Chain -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('seceng_images/killchain.png') }}" class="card-img-top" alt="{{ __('messages.eng_alt_threat') }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.eng_title_threat') }}</h5>
                        <p class="card-text">{{ __('messages.eng_text_threat') }}</p>
                        <a href="https://tryhackme.com/room/cyberkillchain" target="_blank" class="btn btn-outline-info w-100 mt-2">{{ __('messages.eng_btn_threat') }}</a>
                    </div>
                </div>
            </div>
            
            <!-- YARA -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('seceng_images/yara.png') }}" class="card-img-top" alt="{{ __('messages.eng_alt_auto') }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.eng_title_auto') }}</h5>
                        <p class="card-text">{{ __('messages.eng_text_auto') }}</p>
                        <a href="https://tryhackme.com/room/yara" target="_blank" class="btn btn-outline-info w-100 mt-2">{{ __('messages.eng_btn_auto') }}</a>
                    </div>
                </div>
            </div>
            
            <!-- DNS in Detail -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('seceng_images/dns_detail.png') }}" class="card-img-top" alt="{{ __('messages.eng_alt_intro') }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.eng_title_intro') }}</h5>
                        <p class="card-text">{{ __('messages.eng_text_intro') }}</p>
                        <a href="https://tryhackme.com/room/dns" target="_blank" class="btn btn-outline-info w-100 mt-2">{{ __('messages.eng_btn_intro') }}</a>
                    </div>
                </div>
            </div>
            
            <!-- HTTP in Detail -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('seceng_images/http_detail.png') }}" class="card-img-top" alt="{{ __('messages.eng_alt_arch') }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.eng_title_arch') }}</h5>
                        <p class="card-text">{{ __('messages.eng_text_arch') }}</p>
                        <a href="https://tryhackme.com/room/httpintroduction" target="_blank" class="btn btn-outline-info w-100 mt-2">{{ __('messages.eng_btn_arch') }}</a>
                    </div>
                </div>
            </div>
            
            <!-- How Websites Work -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('seceng_images/how_websites_work.png') }}" class="card-img-top" alt="{{ __('messages.eng_alt_coding') }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.eng_title_coding') }}</h5>
                        <p class="card-text">{{ __('messages.eng_text_coding') }}</p>
                        <a href="https://tryhackme.com/room/howthewebworks" target="_blank" class="btn btn-outline-info w-100 mt-2">{{ __('messages.eng_btn_coding') }}</a>
                    </div>
                </div>
            </div>
            
            <!-- OSI Model -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('seceng_images/osi_model.svg') }}" class="card-img-top" alt="{{ __('messages.eng_alt_threat') }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.eng_title_threat') }}</h5>
                        <p class="card-text">{{ __('messages.eng_text_threat') }}</p>
                        <a href="https://tryhackme.com/room/learnnetworking" target="_blank" class="btn btn-outline-info w-100 mt-2">{{ __('messages.eng_btn_threat') }}</a>
                    </div>
                </div>
            </div>
            
            <!-- Packets & Frames -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('seceng_images/packets_frames.svg') }}" class="card-img-top" alt="{{ __('messages.eng_alt_auto') }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.eng_title_auto') }}</h5>
                        <p class="card-text">{{ __('messages.eng_text_auto') }}</p>
                        <a href="https://tryhackme.com/room/networkfundamentals" target="_blank" class="btn btn-outline-info w-100 mt-2">{{ __('messages.eng_btn_auto') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Planning Section -->
    <div id="planningSection" style="display: none;">
    <div class="container py-5">
        <h2 class="text-center fw-bold mb-4">{{ __('messages.eng_planning_title') }}</h2>
        <p class="lead text-center text-muted mb-5">{{ __('messages.eng_planning_subtitle') }}</p>

        <div class="timeline">
            <!-- Step 1: Security Engineer -->
            <div class="timeline-item left">
                <div class="timeline-icon bg-success text-white">
                    <i class="{{ __('messages.eng_sec_engineer_icon') }}"></i>
                </div>
                <div class="timeline-content shadow-sm">
                    <h5>{{ __('messages.eng_sec_engineer_title') }}</h5>
                    <img src="{{ asset('seceng_images/security-engineer.svg') }}" class="img-fluid mb-2" alt="{{ __('messages.eng_sec_engineer_alt') }}">
                    <span class="badge bg-success">{{ __('messages.easy') }}</span>
                    <span class="badge bg-primary">{{ __('messages.path') }}</span>
                    <p class="mt-2">{{ __('messages.eng_sec_engineer_desc') }}</p>
                    <div class="progress mt-2">
                        <div class="progress-bar bg-success" style="width: {{ __('messages.eng_sec_engineer_progress') }}">{{ __('messages.eng_sec_engineer_progress') }}</div>
                    </div>
                    <a href="https://tryhackme.com/paths" target="_blank" class="btn btn-outline-primary btn-sm mt-2">{{ __('messages.start_learning') }}</a>
                </div>
            </div>

            <!-- Step 2: DevSecOps -->
            <div class="timeline-item right">
                <div class="timeline-icon bg-warning text-dark">
                    <i class="{{ __('messages.eng_devsecops_icon') }}"></i>
                </div>
                <div class="timeline-content shadow-sm">
                    <h5>{{ __('messages.eng_devsecops_title') }}</h5>
                    <img src="{{ asset('seceng_images/devsecops.svg') }}" class="img-fluid mb-2" alt="{{ __('messages.eng_devsecops_alt') }}">
                    <span class="badge bg-warning text-dark">{{ __('messages.intermediate') }}</span>
                    <span class="badge bg-primary">{{ __('messages.path') }}</span>
                    <p class="mt-2">{{ __('messages.eng_devsecops_desc') }}</p>
                    <a href="https://tryhackme.com/path/outline/devsecops" target="_blank" class="btn btn-outline-primary btn-sm mt-2">{{ __('messages.start_learning') }}</a>
                </div>
            </div>

            <!-- Step 3: Attacking and Defending AWS -->
            <div class="timeline-item left">
                <div class="timeline-icon bg-warning text-dark">
                    <i class="{{ __('messages.eng_aws_icon') }}"></i>
                </div>
                <div class="timeline-content shadow-sm">
                    <h5>{{ __('messages.eng_aws_title') }}</h5>
                    <img src="{{ asset('seceng_images/aws-defense.svg') }}" class="img-fluid mb-2" alt="{{ __('messages.eng_aws_alt') }}">
                    <span class="badge bg-warning text-dark">{{ __('messages.intermediate') }}</span>
                    <span class="badge bg-primary">{{ __('messages.path') }}</span>
                    <span class="badge bg-secondary">{{ __('messages.add_on') }}</span>
                    <p class="mt-2">{{ __('messages.eng_aws_desc') }}</p>
                    <a href="https://tryhackme.com/path/outline/attackinganddefendingaws" target="_blank" class="btn btn-outline-primary btn-sm mt-2">{{ __('messages.start_learning') }}</a>
                </div>
            </div>

            <!-- Step 4: Complete -->
            <div class="timeline-item right">
                <div class="timeline-icon bg-success text-white">
                    <i class="{{ __('messages.eng_complete_icon') }}"></i>
                </div>
                <div class="timeline-content shadow-sm">
                    <h5>{{ __('messages.complete_title') }}</h5>
                    <p class="mt-2">{{ __('messages.eng_complete_desc') }}</p>
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
        this.classList.add('btn-info');
        this.classList.remove('btn-outline-info');
        document.getElementById('planningBtn').classList.remove('btn-info');
        document.getElementById('planningBtn').classList.add('btn-outline-info');
    });

    document.getElementById('planningBtn').addEventListener('click', function() {
        document.getElementById('finishedSection').style.display = 'none';
        document.getElementById('planningSection').style.display = 'block';
        this.classList.add('btn-info');
        this.classList.remove('btn-outline-info');
        document.getElementById('finishedBtn').classList.remove('btn-info');
        document.getElementById('finishedBtn').classList.add('btn-outline-info');
    });
</script>
@endsection