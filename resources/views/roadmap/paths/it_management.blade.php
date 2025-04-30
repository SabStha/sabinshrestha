@extends('layouts.app')

@section('content')
<div class="container py-4 path-content">
    <h1 class="text-center mb-4 glitch-title">情報セキュリティ管理進捗</h1>
    <h2 class="text-center text-secondary mb-4">📘</p></h2>
    
    <!-- Navigation Buttons -->
    <div class="text-center mb-4">
        <button class="btn btn-primary me-2" id="finishedBtn">{{ __('messages.finished') }}</button>
        <button class="btn btn-outline-primary" id="planningBtn">{{ __('messages.planning_to_do') }}</button>
    </div>

    <!-- Finished Section -->
    <div id="finishedSection">
       
        <!-- Progress Bar -->
        <div class="progress mb-4" style="height: 25px;">
            <div id="progressBar" class="progress-bar bg-success" role="progressbar" style="width: 0%">
                0%
            </div>
        </div>

        <ul class="list-group">
            {{-- Sample topics, full list continues... --}}
            <li class="list-group-item bg-dark text-light"><strong>🔰 第1章 情報セキュリティ基礎</strong></li>
            
            {{-- 🎯 情報のCIA --}}
            <li class="list-group-item bg-black text-light">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <input type="checkbox" class="form-check-input me-2" id="topic-1">
                        <span class="me-2">🎯</span>
                        <span>情報のCIA</span>
                    </div>
                    <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-1">
                        詳細を見る
                    </button>
                </div>

                <div id="collapse-topic-1" class="collapse mt-2">
                    <div class="card card-body bg-secondary text-white">
                        <p>情報セキュリティにおける「機密性」「完全性」「可用性」の3要素を示す概念。データを守るための基本中の基本。</p>
                        <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-1')">英語を見る</button>
                        <div id="english-1" style="display:none;">
                            <p>The CIA triad represents Confidentiality, Integrity, and Availability — the three foundational principles of information security.</p>
                        </div>
                    </div>
                </div>
            </li>

            {{-- 🔑 情報資産と脆弱性 --}}
            <li class="list-group-item bg-black text-light">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <input type="checkbox" class="form-check-input me-2" id="topic-2">
                        <span class="me-2">🔑</span>
                        <span>情報資産と脆弱性</span>
                    </div>
                    <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-2">
                        詳細を見る
                    </button>
                </div>

                <div id="collapse-topic-2" class="collapse mt-2">
                    <div class="card card-body bg-secondary text-white">
                        <p>情報資産とは、組織にとって価値があるデータやシステム。脆弱性とは、それらを危険にさらす弱点や欠陥を指す。</p>
                        <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-2')">英語を見る</button>
                        <div id="english-2" style="display:none;">
                            <p>Information assets are valuable data and systems for an organization. Vulnerabilities are the weaknesses that can threaten them.</p>
                        </div>
                    </div>
                </div>
            </li>

            {{-- 👾 攻撃者 --}}
            <li class="list-group-item bg-black text-light">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <input type="checkbox" class="form-check-input me-2" id="topic-3">
                        <span class="me-2">👾</span>
                        <span>攻撃者</span>
                    </div>
                    <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-3">
                        詳細を見る
                    </button>
                </div>

                <div id="collapse-topic-3" class="collapse mt-2">
                    <div class="card card-body bg-secondary text-white">
                        <p>攻撃者とは、情報システムに侵入し、データの窃取、改ざん、破壊を行う個人、組織、または国家を指す。</p>
                        <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-3')">英語を見る</button>
                        <div id="english-3" style="display:none;">
                            <p>Attackers are individuals, groups, or states that attempt to breach systems to steal, alter, or destroy data.</p>
                        </div>
                    </div>
                </div>
            </li>

            {{-- ⚔️ 攻撃手法 --}}
            <li class="list-group-item bg-black text-light">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <input type="checkbox" class="form-check-input me-2" id="topic-4">
                        <span class="me-2">⚔️</span>
                        <span>攻撃手法</span>
                    </div>
                    <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-4">
                        詳細を見る
                    </button>
                </div>

                <div id="collapse-topic-4" class="collapse mt-2">
                    <div class="card card-body bg-secondary text-white">
                        <p>サイバー攻撃には様々な手法があり、マルウェア感染、フィッシング、DoS攻撃、ゼロデイ攻撃などが代表例です。</p>
                        <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-4')">英語を見る</button>
                        <div id="english-4" style="display:none;">
                            <p>Cyber attacks include various methods such as malware infection, phishing, denial-of-service attacks, and zero-day exploitation.</p>
                        </div>
                    </div>
                </div>
            </li>

            {{-- 🕷️ 脆弱性の種類 --}}
            <li class="list-group-item bg-black text-light">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <input type="checkbox" class="form-check-input me-2" id="topic-5">
                        <span class="me-2">🕷️</span>
                        <span>脆弱性の種類</span>
                    </div>
                    <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-5">
                        詳細を見る
                    </button>
                </div>

                <div id="collapse-topic-5" class="collapse mt-2">
                    <div class="card card-body bg-secondary text-white">
                        <p>脆弱性には、設計上の欠陥、ソフトウェアのバグ、設定ミス、人為的ミスなどが含まれます。</p>
                        <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-5')">英語を見る</button>
                        <div id="english-5" style="display:none;">
                            <p>Vulnerabilities include design flaws, software bugs, configuration errors, and human mistakes.</p>
                        </div>
                    </div>
                </div>
            </li>

            {{-- 🚫 不正アクセス --}}
            <li class="list-group-item bg-black text-light">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <input type="checkbox" class="form-check-input me-2" id="topic-6">
                        <span class="me-2">🚫</span>
                        <span>不正アクセス</span>
                    </div>
                    <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-6">
                        詳細を見る
                    </button>
                </div>

                <div id="collapse-topic-6" class="collapse mt-2">
                    <div class="card card-body bg-secondary text-white">
                        <p>許可されていないユーザーが、システムやネットワークにアクセスする行為。セキュリティ違反の典型例。</p>
                        <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-6')">英語を見る</button>
                        <div id="english-6" style="display:none;">
                            <p>Unauthorized users accessing systems or networks without permission — a classic example of security breaches.</p>
                        </div>
                    </div>
                </div>
            </li>

            {{-- 🚫 不正アクセス --}}
            <li class="list-group-item bg-black text-light">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <input type="checkbox" class="form-check-input me-2" id="topic-6">
                        <span class="me-2">🚫</span>
                        <span>不正アクセス</span>
                    </div>
                    <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-6">
                        詳細を見る
                    </button>
                </div>

                <div id="collapse-topic-6" class="collapse mt-2">
                    <div class="card card-body bg-secondary text-white">
                        <p>許可されていないユーザーが、システムやネットワークにアクセスする行為。セキュリティ違反の典型例。</p>
                        <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-6')">英語を見る</button>
                        <div id="english-6" style="display:none;">
                            <p>Unauthorized users accessing systems or networks without permission — a classic example of security breaches.</p>
                        </div>
                    </div>
                </div>
            </li>

            {{-- 🦹 侵入後の行動 --}}
            <li class="list-group-item bg-black text-light">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <input type="checkbox" class="form-check-input me-2" id="topic-8">
                        <span class="me-2">🦹</span>
                        <span>侵入後の行動</span>
                    </div>
                    <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-8">
                        詳細を見る
                    </button>
                </div>

                <div id="collapse-topic-8" class="collapse mt-2">
                    <div class="card card-body bg-secondary text-white">
                        <p>攻撃者がネットワーク内部でさらに権限を奪取し、重要情報を窃取するために行動を続ける段階。</p>
                        <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-8')">英語を見る</button>
                        <div id="english-8" style="display:none;">
                            <p>Stage where attackers move inside the network, escalate privileges, and steal sensitive data after initial intrusion.</p>
                        </div>
                    </div>
                </div>
            </li>

            {{-- 👂 盗聴 --}}
            <li class="list-group-item bg-black text-light">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <input type="checkbox" class="form-check-input me-2" id="topic-9">
                        <span class="me-2">👂</span>
                        <span>盗聴</span>
                    </div>
                    <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-9">
                        詳細を見る
                    </button>
                </div>

                <div id="collapse-topic-9" class="collapse mt-2">
                    <div class="card card-body bg-secondary text-white">
                        <p>通信内容を第三者が秘密裏に傍受する行為。主にWi-Fi盗聴やネットワークスニッフィングが含まれる。</p>
                        <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-9')">英語を見る</button>
                        <div id="english-9" style="display:none;">
                            <p>Unauthorized interception of communication, often through Wi-Fi eavesdropping or network sniffing.</p>
                        </div>
                    </div>
                </div>
            </li>

            {{-- 🎭 なりすまし --}}
            <li class="list-group-item bg-black text-light">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <input type="checkbox" class="form-check-input me-2" id="topic-10">
                        <span class="me-2">🎭</span>
                        <span>なりすまし</span>
                    </div>
                    <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-10">
                        詳細を見る
                    </button>
                </div>

                <div id="collapse-topic-10" class="collapse mt-2">
                    <div class="card card-body bg-secondary text-white">
                        <p>他人になりすましてシステムに不正アクセスしたり、信頼を悪用するサイバー犯罪手法。</p>
                        <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-10')">英語を見る</button>
                        <div id="english-10" style="display:none;">
                            <p>Cybercrime technique where an attacker impersonates another user to access systems illegally or exploit trust.</p>
                        </div>
                    </div>
                </div>
            </li>

            {{-- 🚧 サービス妨害 --}}
            <li class="list-group-item bg-black text-light">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <input type="checkbox" class="form-check-input me-2" id="topic-11">
                        <span class="me-2">🚧</span>
                        <span>サービス妨害</span>
                    </div>
                    <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-11">
                        詳細を見る
                    </button>
                </div>

                <div id="collapse-topic-11" class="collapse mt-2">
                    <div class="card card-body bg-secondary text-white">
                        <p>ネットワークやシステムの正常な動作を妨げ、サービスを利用不能にする攻撃（例：DDoS攻撃）。</p>
                        <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-11')">英語を見る</button>
                        <div id="english-11" style="display:none;">
                            <p>Attacks that disrupt normal operations of networks or systems, rendering services unavailable (e.g., DDoS attacks).</p>
                        </div>
                    </div>
                </div>
            </li>

            {{-- 💉 クロスサイトスクリプティング --}}
            <li class="list-group-item bg-black text-light">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <input type="checkbox" class="form-check-input me-2" id="topic-12">
                        <span class="me-2">💉</span>
                        <span>クロスサイトスクリプティング</span>
                    </div>
                    <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-12">
                        詳細を見る
                    </button>
                </div>

                <div id="collapse-topic-12" class="collapse mt-2">
                    <div class="card card-body bg-secondary text-white">
                        <p>悪意のあるスクリプトをWebサイトに埋め込み、閲覧者の情報を盗む攻撃手法。</p>
                        <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-12')">英語を見る</button>
                        <div id="english-12" style="display:none;">
                            <p>Technique where malicious scripts are injected into websites to steal information from users who view the page.</p>
                        </div>
                    </div>
                </div>
            </li>

            {{-- 🌐 DNSキャッシュポイズニング --}}
            <li class="list-group-item bg-black text-light">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <input type="checkbox" class="form-check-input me-2" id="topic-13">
                        <span class="me-2">🌐</span>
                        <span>DNSキャッシュポイズニング</span>
                    </div>
                    <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-13">
                        詳細を見る
                    </button>
                </div>

                <div id="collapse-topic-13" class="collapse mt-2">
                    <div class="card card-body bg-secondary text-white">
                        <p>DNSサーバーのキャッシュ情報を書き換え、ユーザーを偽のサイトに誘導する攻撃手法。</p>
                        <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-13')">英語を見る</button>
                        <div id="english-13" style="display:none;">
                            <p>Technique where DNS cache data is poisoned to redirect users to malicious or fake websites.</p>
                        </div>
                    </div>
                </div>
            </li>

            {{-- 🎣 ソーシャルエンジニアリング --}}
            <li class="list-group-item bg-black text-light">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <input type="checkbox" class="form-check-input me-2" id="topic-14">
                        <span class="me-2">🎣</span>
                        <span>ソーシャルエンジニアリング</span>
                    </div>
                    <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-14">
                        詳細を見る
                    </button>
                </div>

                <div id="collapse-topic-14" class="collapse mt-2">
                    <div class="card card-body bg-secondary text-white">
                        <p>人間の心理的な隙を突いて情報を盗み出す攻撃。例：なりすまし電話やフィッシングメール。</p>
                        <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-14')">英語を見る</button>
                        <div id="english-14" style="display:none;">
                            <p>Attacks exploiting human psychology to steal information, e.g., impersonation calls or phishing emails.</p>
                        </div>
                    </div>
                </div>
            </li>

            {{-- 💣 その他の攻撃手法 --}}
            <li class="list-group-item bg-black text-light">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <input type="checkbox" class="form-check-input me-2" id="topic-15">
                        <span class="me-2">💣</span>
                        <span>その他の攻撃手法</span>
                    </div>
                    <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-15">
                        詳細を見る
                    </button>
                </div>

                <div id="collapse-topic-15" class="collapse mt-2">
                    <div class="card card-body bg-secondary text-white">
                        <p>標的型攻撃、ゼロデイ攻撃、中間者攻撃など、その他多数の攻撃パターンが存在する。</p>
                        <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-15')">英語を見る</button>
                        <div id="english-15" style="display:none;">
                            <p>There are many other attack patterns including targeted attacks, zero-day exploits, and man-in-the-middle attacks.</p>
                        </div>
                    </div>
                </div>
            </li>

            {{-- 🚧 サービス妨害 --}}
            <li class="list-group-item bg-black text-light">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                <input type="checkbox" class="form-check-input me-2" id="topic-11">
                <span class="me-2">🚧</span>
                <span>サービス妨害</span>
                </div>
                <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-11">
                詳細を見る
                </button>
            </div>

            <div id="collapse-topic-11" class="collapse mt-2">
                <div class="card card-body bg-secondary text-white">
                <p>DoS攻撃やDDoS攻撃によって、ネットワークやサービスの正常な利用を妨害する攻撃手法。</p>
                <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-11')">英語を見る</button>
                <div id="english-11" style="display:none;">
                    <p>Denial of Service (DoS) and Distributed DoS (DDoS) attacks disrupt normal operations of networks and services.</p>
                </div>
                </div>
            </div>
            </li>

            {{-- 💉 クロスサイトスクリプティング --}}
            <li class="list-group-item bg-black text-light">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                <input type="checkbox" class="form-check-input me-2" id="topic-12">
                <span class="me-2">💉</span>
                <span>クロスサイトスクリプティング</span>
                </div>
                <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-12">
                詳細を見る
                </button>
            </div>

            <div id="collapse-topic-12" class="collapse mt-2">
                <div class="card card-body bg-secondary text-white">
                <p>悪意あるスクリプトをWebページに埋め込み、ユーザーのブラウザで実行させる攻撃。セッション乗っ取りや情報盗難の危険がある。</p>
                <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-12')">英語を見る</button>
                <div id="english-12" style="display:none;">
                    <p>Cross-Site Scripting (XSS) injects malicious scripts into web pages, which execute in the user's browser — often leading to session hijacking or data theft.</p>
                </div>
                </div>
            </div>
            </li>

            {{-- 🌐 DNSキャッシュポイズニング --}}
            <li class="list-group-item bg-black text-light">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                <input type="checkbox" class="form-check-input me-2" id="topic-13">
                <span class="me-2">🌐</span>
                <span>DNSキャッシュポイズニング</span>
                </div>
                <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-13">
                詳細を見る
                </button>
            </div>

            <div id="collapse-topic-13" class="collapse mt-2">
                <div class="card card-body bg-secondary text-white">
                <p>DNSサーバに偽の情報を登録し、ユーザーを偽サイトに誘導する攻撃。フィッシングやマルウェア感染に利用される。</p>
                <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-13')">英語を見る</button>
                <div id="english-13" style="display:none;">
                    <p>DNS cache poisoning tricks a DNS server into returning false information, redirecting users to malicious or fake websites.</p>
                </div>
                </div>
            </div>
            </li>

            {{-- 🎣 ソーシャルエンジニアリング --}}
            <li class="list-group-item bg-black text-light">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                <input type="checkbox" class="form-check-input me-2" id="topic-14">
                <span class="me-2">🎣</span>
                <span>ソーシャルエンジニアリング</span>
                </div>
                <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-14">
                詳細を見る
                </button>
            </div>

            <div id="collapse-topic-14" class="collapse mt-2">
                <div class="card card-body bg-secondary text-white">
                <p>人間の心理や行動を利用して情報を引き出す攻撃。電話やメールでのなりすましが典型的な例。</p>
                <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-14')">英語を見る</button>
                <div id="english-14" style="display:none;">
                    <p>Social engineering manipulates human behavior to extract information, often using impersonation via phone or email.</p>
                </div>
                </div>
            </div>
            </li>

            {{-- 💣 その他の攻撃手法 --}}
            <li class="list-group-item bg-black text-light">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                <input type="checkbox" class="form-check-input me-2" id="topic-15">
                <span class="me-2">💣</span>
                <span>その他の攻撃手法</span>
                </div>
                <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-15">
                詳細を見る
                </button>
            </div>

            <div id="collapse-topic-15" class="collapse mt-2">
                <div class="card card-body bg-secondary text-white">
                <p>バッファオーバーフロー、SQLインジェクション、ゼロデイ攻撃など多様な攻撃技術が存在する。</p>
                <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-15')">英語を見る</button>
                <div id="english-15" style="display:none;">
                    <p>Other attacks include buffer overflows, SQL injection, and zero-day exploits — each exploiting different system weaknesses.</p>
                </div>
                </div>
            </div>
            </li>

            {{-- 🎯 標的型攻撃 --}}
            <li class="list-group-item bg-black text-light">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                <input type="checkbox" class="form-check-input me-2" id="topic-16">
                <span class="me-2">🎯</span>
                <span>標的型攻撃</span>
                </div>
                <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-16">
                詳細を見る
                </button>
            </div>

            <div id="collapse-topic-16" class="collapse mt-2">
                <div class="card card-body bg-secondary text-white">
                <p>特定の組織や個人を狙って計画的に行われるサイバー攻撃。高度な準備と技術が使われる。</p>
                <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-16')">英語を見る</button>
                <div id="english-16" style="display:none;">
                    <p>Targeted attacks are premeditated cyberattacks aimed at a specific individual or organization using advanced techniques.</p>
                </div>
                </div>
            </div>
            </li>

            {{-- 🔒 ランサムウェア --}}
            <li class="list-group-item bg-black text-light">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                <input type="checkbox" class="form-check-input me-2" id="topic-17">
                <span class="me-2">🔒</span>
                <span>ランサムウェア</span>
                </div>
                <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-17">
                詳細を見る
                </button>
            </div>

            <div id="collapse-topic-17" class="collapse mt-2">
                <div class="card card-body bg-secondary text-white">
                <p>データを暗号化して使用不能にし、復号のために金銭（仮想通貨）を要求するマルウェア。</p>
                <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-17')">英語を見る</button>
                <div id="english-17" style="display:none;">
                    <p>Ransomware encrypts a victim's data and demands payment (often in cryptocurrency) to unlock it.</p>
                </div>
                </div>
            </div>
            </li>

            {{-- 📱 セキュリティ技術の広がり --}}
            <li class="list-group-item bg-black text-light">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                <input type="checkbox" class="form-check-input me-2" id="topic-18">
                <span class="me-2">📱</span>
                <span>セキュリティ技術の広がり</span>
                </div>
                <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-18">
                詳細を見る
                </button>
            </div>

            <div id="collapse-topic-18" class="collapse mt-2">
                <div class="card card-body bg-secondary text-white">
                <p>クラウド、IoT、モバイルなど多様な分野にセキュリティ対策が求められる時代に突入している。</p>
                <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-18')">英語を見る</button>
                <div id="english-18" style="display:none;">
                    <p>Security technologies now span across cloud, IoT, mobile, and many new environments — requiring broader protection strategies.</p>
                </div>
                </div>
            </div>
            </li>

            {{-- 🔐 暗号の基本 --}}
            <li class="list-group-item bg-black text-light">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                <input type="checkbox" class="form-check-input me-2" id="topic-19">
                <span class="me-2">🔐</span>
                <span>暗号の基本</span>
                </div>
                <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-19">
                詳細を見る
                </button>
            </div>

            <div id="collapse-topic-19" class="collapse mt-2">
                <div class="card card-body bg-secondary text-white">
                <p>暗号とは、情報を第三者に読まれないように変換する技術。通信やファイルの安全性を高める手段として使われる。</p>
                <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-19')">英語を見る</button>
                <div id="english-19" style="display:none;">
                    <p>Encryption transforms information to prevent unauthorized reading. It's essential for secure communication and file protection.</p>
                </div>
                </div>
            </div>
            </li>

            {{-- 🔑 共通鍵暗号 --}}
            <li class="list-group-item bg-black text-light">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                <input type="checkbox" class="form-check-input me-2" id="topic-20">
                <span class="me-2">🔑</span>
                <span>共通鍵暗号</span>
                </div>
                <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-20">
                詳細を見る
                </button>
            </div>

            <div id="collapse-topic-20" class="collapse mt-2">
                <div class="card card-body bg-secondary text-white">
                <p>暗号化と復号に同じ鍵を使う方式。高速だが鍵の安全な共有が課題。</p>
                <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-20')">英語を見る</button>
                <div id="english-20" style="display:none;">
                    <p>Symmetric-key encryption uses the same key for both encryption and decryption. It's fast, but key distribution is a major challenge.</p>
                </div>
                </div>
            </div>
            </li>

            {{-- 🗝️ 公開鍵暗号 --}}
            <li class="list-group-item bg-black text-light">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                <input type="checkbox" class="form-check-input me-2" id="topic-21">
                <span class="me-2">🗝️</span>
                <span>公開鍵暗号</span>
                </div>
                <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-21">
                詳細を見る
                </button>
            </div>

            <div id="collapse-topic-21" class="collapse mt-2">
                <div class="card card-body bg-secondary text-white">
                <p>暗号化と復号に別々の鍵（公開鍵と秘密鍵）を使う方式。鍵配布の安全性が高い。</p>
                <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-21')">英語を見る</button>
                <div id="english-21" style="display:none;">
                    <p>Public-key encryption uses two separate keys: a public key for encryption and a private key for decryption. It solves key distribution challenges.</p>
                </div>
                </div>
            </div>
            </li>

            {{-- 🛡️ 暗号関連技術 --}}
            <li class="list-group-item bg-black text-light">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                <input type="checkbox" class="form-check-input me-2" id="topic-22">
                <span class="me-2">🛡️</span>
                <span>暗号関連技術</span>
                </div>
                <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-22">
                詳細を見る
                </button>
            </div>

            <div id="collapse-topic-22" class="collapse mt-2">
                <div class="card card-body bg-secondary text-white">
                <p>ハッシュ関数、鍵配送技術、TLSなど、暗号を支える周辺技術やプロトコルが重要な役割を果たす。</p>
                <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-22')">英語を見る</button>
                <div id="english-22" style="display:none;">
                    <p>Hash functions, key exchange mechanisms, and protocols like TLS play critical roles in modern cryptographic systems.</p>
                </div>
                </div>
            </div>
            </li>

            {{-- 👤 認証の基本 --}}
            <li class="list-group-item bg-black text-light">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                <input type="checkbox" class="form-check-input me-2" id="topic-23">
                <span class="me-2">👤</span>
                <span>認証の基本</span>
                </div>
                <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-23">
                詳細を見る
                </button>
            </div>

            <div id="collapse-topic-23" class="collapse mt-2">
                <div class="card card-body bg-secondary text-white">
                <p>認証とは、ユーザーが正当な存在であることを確認する仕組み。IDとパスワードが基本形。</p>
                <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-23')">英語を見る</button>
                <div id="english-23" style="display:none;">
                    <p>Authentication verifies a user's identity. The most common method is using an ID and password combination.</p>
                </div>
                </div>
            </div>
            </li>

            {{-- 📱 ワンタイムパスワード --}}
            <li class="list-group-item bg-black text-light">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                <input type="checkbox" class="form-check-input me-2" id="topic-24">
                <span class="me-2">📱</span>
                <span>ワンタイムパスワード</span>
                </div>
                <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-24">
                詳細を見る
                </button>
            </div>

            <div id="collapse-topic-24" class="collapse mt-2">
                <div class="card card-body bg-secondary text-white">
                <p>一定時間または1回限り使用できるパスワード。使い回しを防ぎ、セキュリティを強化する。</p>
                <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-24')">英語を見る</button>
                <div id="english-24" style="display:none;">
                    <p>One-Time Passwords (OTP) are valid for a single use or a short time period, preventing password reuse and improving security.</p>
                </div>
                </div>
            </div>
            </li>

            {{-- ❌ パスワードの欠点 --}}
            <li class="list-group-item bg-black text-light">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                <input type="checkbox" class="form-check-input me-2" id="topic-25">
                <span class="me-2">❌</span>
                <span>パスワードの欠点</span>
                </div>
                <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-25">
                詳細を見る
                </button>
            </div>

            <div id="collapse-topic-25" class="collapse mt-2">
                <div class="card card-body bg-secondary text-white">
                <p>忘れやすい、推測されやすい、使い回されやすいなど、パスワードは多くの弱点を持つ認証手段。</p>
                <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-25')">英語を見る</button>
                <div id="english-25" style="display:none;">
                    <p>Passwords are prone to being forgotten, guessed, reused, or stolen — making them a weak form of authentication if used alone.</p>
                </div>
                </div>
            </div>
            </li>

            {{-- 👁️ バイオメトリクス --}}
            <li class="list-group-item bg-black text-light">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                <input type="checkbox" class="form-check-input me-2" id="topic-26">
                <span class="me-2">👁️</span>
                <span>バイオメトリクス</span>
                </div>
                <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-26">
                詳細を見る
                </button>
            </div>

            <div id="collapse-topic-26" class="collapse mt-2">
                <div class="card card-body bg-secondary text-white">
                <p>指紋・顔・虹彩など、生体情報を用いて本人確認を行う認証手段。パスワードに比べて安全性が高い。</p>
                <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-26')">英語を見る</button>
                <div id="english-26" style="display:none;">
                    <p>Biometrics use biological characteristics such as fingerprints, facial features, or iris patterns for authentication. More secure than passwords.</p>
                </div>
                </div>
            </div>
            </li>

            {{-- ✍️ デジタル署名 --}}
            <li class="list-group-item bg-black text-light">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                <input type="checkbox" class="form-check-input me-2" id="topic-27">
                <span class="me-2">✍️</span>
                <span>デジタル署名</span>
                </div>
                <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-27">
                詳細を見る
                </button>
            </div>

            <div id="collapse-topic-27" class="collapse mt-2">
                <div class="card card-body bg-secondary text-white">
                <p>送信者の真正性とデータの改ざんがないことを証明するために使われる公開鍵暗号の応用技術。</p>
                <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-27')">英語を見る</button>
                <div id="english-27" style="display:none;">
                    <p>Digital signatures are a public key cryptography technique used to verify sender authenticity and data integrity.</p>
                </div>
                </div>
            </div>
            </li>

            {{-- 📜 PKI --}}
            <li class="list-group-item bg-black text-light">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                <input type="checkbox" class="form-check-input me-2" id="topic-28">
                <span class="me-2">📜</span>
                <span>PKI</span>
                </div>
                <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-28">
                詳細を見る
                </button>
            </div>

            <div id="collapse-topic-28" class="collapse mt-2">
                <div class="card card-body bg-secondary text-white">
                <p>公開鍵基盤（PKI）は、デジタル証明書と認証局を用いて信頼された通信を可能にする仕組み。</p>
                <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-28')">英語を見る</button>
                <div id="english-28" style="display:none;">
                    <p>Public Key Infrastructure (PKI) provides a framework using digital certificates and Certificate Authorities (CAs) to enable secure communication.</p>
                </div>
                </div>
            </div>
            </li>

        </ul>

        <ul class="list-group">
            {{-- Sample topics, full list continues... --}}
            <li class="list-group-item bg-dark text-light"><strong>📊 第2章 情報セキュリティ管理</strong></li>
                    

            {{-- ⚖️ リスクマネジメント --}}
            <li class="list-group-item bg-black text-light">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                <input type="checkbox" class="form-check-input me-2" id="topic-29">
                <span class="me-2">⚖️</span>
                <span>リスクマネジメント</span>
                </div>
                <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-29">
                詳細を見る
                </button>
            </div>

            <div id="collapse-topic-29" class="collapse mt-2">
                <div class="card card-body bg-secondary text-white">
                <p>リスクを特定し、評価し、適切な対応を行う一連のプロセス。情報セキュリティの根幹を成す活動。</p>
                <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-29')">英語を見る</button>
                <div id="english-29" style="display:none;">
                    <p>Risk management is the process of identifying, evaluating, and responding to risks — essential for information security planning.</p>
                </div>
                </div>
            </div>
            </li>

            {{-- 📊 リスクアセスメントとその方法 --}}
            <li class="list-group-item bg-black text-light">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                <input type="checkbox" class="form-check-input me-2" id="topic-30">
                <span class="me-2">📊</span>
                <span>リスクアセスメントとその方法</span>
                </div>
                <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-30">
                詳細を見る
                </button>
            </div>

            <div id="collapse-topic-30" class="collapse mt-2">
                <div class="card card-body bg-secondary text-white">
                <p>リスクアセスメントには、定性的評価と定量的評価があり、脅威・脆弱性・影響度などの要素を考慮する。</p>
                <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-30')">英語を見る</button>
        <div id="collapse-topic-30" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>リスクアセスメントには、定性的評価と定量的評価があり、脅威・脆弱性・影響度などの要素を考慮する。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-30')">英語を見る</button>
            <div id="english-30" style="display:none;">
                <p>Risk assessment uses qualitative or quantitative methods to evaluate threats, vulnerabilities, and impact.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 📈 リスク特定、リスク分析、リスク評価 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-31">
            <span class="me-2">📈</span>
            <span>リスク特定、リスク分析、リスク評価</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-31">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-31" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>リスクマネジメントのステップ。特定→分析→評価の流れで、対応の優先順位付けに使われる。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-31')">英語を見る</button>
            <div id="english-31" style="display:none;">
                <p>Key steps in risk management: identify risks → analyze them → evaluate their severity to decide priority actions.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 🎯 リスク対応 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-32">
            <span class="me-2">🎯</span>
            <span>リスク対応</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-32">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-32" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>リスクへの対応には、回避・軽減・移転・受容の4種類がある。状況に応じて最適な方法を選択する。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-32')">英語を見る</button>
            <div id="english-32" style="display:none;">
                <p>Risk response includes avoidance, mitigation, transfer, or acceptance — the approach depends on cost, impact, and strategy.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 📋 ISMSとは --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-33">
            <span class="me-2">📋</span>
            <span>ISMSとは</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-33">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-33" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>情報セキュリティマネジメントシステム。ISO/IEC 27001を基準とし、組織的なセキュリティ運用を実現する枠組み。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-33')">英語を見る</button>
            <div id="english-33" style="display:none;">
                <p>ISMS (Information Security Management System) is a framework based on ISO/IEC 27001 for systematic security governance.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 📜 情報セキュリティポリシー --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-34">
            <span class="me-2">📜</span>
            <span>情報セキュリティポリシー</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-34">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-34" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>組織全体の情報セキュリティに関する基本的な考え方や方針を明文化した文書。全社員に周知されるべき。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-34')">英語を見る</button>
            <div id="english-34" style="display:none;">
                <p>A document outlining an organization's basic approach and principles for information security. Should be communicated to all employees.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 📑 情報セキュリティポリシー各文書の特徴 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-35">
            <span class="me-2">📑</span>
            <span>情報セキュリティポリシー各文書の特徴</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-35">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-35" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>基本方針（ポリシー）・対策基準（スタンダード）・実施手順（ガイドライン）の3層構造で運用される。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-35')">英語を見る</button>
            <div id="english-35" style="display:none;">
                <p>Security policy structure includes: Basic Policy, Security Standards, and Implementation Guidelines — forming a 3-tier system.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 🚨 CSIRT --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-36">
            <span class="me-2">🚨</span>
            <span>CSIRT</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-36">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-36" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>セキュリティインシデントの検知・対応・再発防止を行う専門チーム。社内CSIRTの設置が進んでいる。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-36')">英語を見る</button>
            <div id="english-36" style="display:none;">
                <p>CSIRT (Computer Security Incident Response Team) handles detection, response, and prevention of security incidents within organizations.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 🔍 システム監査 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-37">
            <span class="me-2">🔍</span>
            <span>システム監査</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-37">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-37" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>情報システムの運用・管理状況を第三者が評価し、改善点を明らかにする監査活動。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-37')">英語を見る</button>
            <div id="english-37" style="display:none;">
                <p>System audits are third-party evaluations of IT operations and controls to identify issues and recommend improvements.</p>
            </div>
            </div>
        </div>
        </li>

    </ul>

    <ul class="list-group">
        {{-- Sample topics, full list continues... --}}
        <li class="list-group-item bg-dark text-light"><strong>🛡️ 第3章 情報セキュリティ対策</strong></li>
    
        {{-- 🦠 マルウェア対策 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-38">
            <span class="me-2">🦠</span>
            <span>マルウェア対策</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-38">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-38" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>ウイルス、ワーム、トロイの木馬などのマルウェアからシステムを守るための対策。アンチウイルスソフトの導入など。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-38')">英語を見る</button>
            <div id="english-38" style="display:none;">
                <p>Measures to protect systems from malware such as viruses, worms, and trojans — typically via antivirus software and behavior detection.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 🧱 ファイアウォール --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-39">
            <span class="me-2">🧱</span>
            <span>ファイアウォール</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-39">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-39" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>内部ネットワークと外部ネットワークの間に設置し、許可された通信のみを通すセキュリティ機器。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-39')">英語を見る</button>
            <div id="english-39" style="display:none;">
                <p>A firewall controls traffic between internal and external networks by allowing only authorized communications.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 🔄 プロキシサーバとリバースプロキシ --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-40">
            <span class="me-2">🔄</span>
            <span>プロキシサーバとリバースプロキシ</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-40">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-40" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>プロキシはクライアント側を隠し、リバースプロキシはサーバ側を保護する。両方ともセキュリティ強化に有効。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-40')">英語を見る</button>
            <div id="english-40" style="display:none;">
                <p>A proxy hides client-side details, while a reverse proxy protects server-side infrastructure — both enhance security and control.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 🏰 DMZ --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-41">
            <span class="me-2">🏰</span>
            <span>DMZ</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-41">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-41" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>DMZ（DeMilitarized Zone）は外部公開サーバを内部ネットワークから分離するためのネットワーク構成。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-41')">英語を見る</button>
            <div id="english-41" style="display:none;">
                <p>A DMZ (DeMilitarized Zone) isolates public-facing servers from the internal network to prevent full access during breaches.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 🛡️ WAF --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-42">
            <span class="me-2">🛡️</span>
            <span>WAF</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-42">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-42" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>Web Application Firewall。Webアプリケーションへの攻撃（XSS、SQLiなど）を検知・遮断する防御装置。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-42')">英語を見る</button>
            <div id="english-42" style="display:none;">
                <p>WAF (Web Application Firewall) protects web apps by detecting and blocking attacks like XSS and SQL injection.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 🕵️ IDSとIPS --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-43">
            <span class="me-2">🕵️</span>
            <span>IDSとIPS</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-43">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-43" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>IDS（侵入検知システム）は攻撃を検知し、IPS（侵入防止システム）は攻撃を遮断する。両者は相補的に使用される。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-43')">英語を見る</button>
            <div id="english-43" style="display:none;">
                <p>IDS (Intrusion Detection System) detects attacks, while IPS (Intrusion Prevention System) blocks them — often used together.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 🔒 不正ログインの防止 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-44">
            <span class="me-2">🔒</span>
            <span>不正ログインの防止</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-44">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-44" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>ログイン試行の制限、多要素認証、CAPTCHA導入などが不正ログイン対策として有効。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-44')">英語を見る</button>
            <div id="english-44" style="display:none;">
                <p>Prevent unauthorized logins by limiting login attempts, using multi-factor authentication (MFA), and adding CAPTCHAs.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 🔐 情報漏えい対策 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-45">
            <span class="me-2">🔐</span>
            <span>情報漏えい対策</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-45">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-45" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>アクセス権限の最小化、ログ監視、暗号化、持ち出し制限などの多層的な対策が必要。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-45')">英語を見る</button>
            <div id="english-45" style="display:none;">
                <p>To prevent data leaks, apply layered security: least privilege access, logging, encryption, and restrictions on removable media.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 🔒 TLS（SSL） --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-46">
            <span class="me-2">🔒</span>
            <span>TLS（SSL）</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-46">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-46" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>TLSは通信データを暗号化するプロトコルで、SSLの後継。Webサイトの安全な接続に必須。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-46')">英語を見る</button>
            <div id="english-46" style="display:none;">
                <p>TLS is the successor to SSL, encrypting communications between clients and servers. Essential for secure websites.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 🌐 VPN --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-47">
            <span class="me-2">🌐</span>
            <span>VPN</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-47">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-47" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>仮想プライベートネットワーク。暗号化されたトンネルを通して、外部から安全に社内ネットワークへアクセスする仕組み。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-47')">英語を見る</button>
            <div id="english-47" style="display:none;">
                <p>VPN (Virtual Private Network) provides encrypted tunnels that allow secure remote access to internal networks.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 📡 ネットワーク管理術 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-48">
            <span class="me-2">📡</span>
            <span>ネットワーク管理術</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-48">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-48" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>IPアドレス管理、トラフィック監視、障害検知、ログ分析など、ネットワークの安全・安定運用に欠かせない管理技術。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-48')">英語を見る</button>
            <div id="english-48" style="display:none;">
                <p>Network management includes IP address control, traffic monitoring, fault detection, and log analysis — all essential for secure, stable operations.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 🏢 物理的セキュリティ対策 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-49">
            <span class="me-2">🏢</span>
            <span>物理的セキュリティ対策</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-49">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-49" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>建物の施錠、監視カメラ、入退室管理など、システムを物理的に守るための対策。サーバールームなどに必須。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-49')">英語を見る</button>
            <div id="english-49" style="display:none;">
                <p>Physical security includes door locks, surveillance cameras, and entry logs — critical for protecting server rooms and sensitive systems.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- ⚡ RASIS --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-50">
            <span class="me-2">⚡</span>
            <span>RASIS</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-50">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-50" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>可用性（Availability）、信頼性（Reliability）、保守性（Serviceability）、保全性（Integrity）、安全性（Security）の5要素。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-50')">英語を見る</button>
            <div id="english-50" style="display:none;">
                <p>RASIS stands for Reliability, Availability, Serviceability, Integrity, and Security — a framework for evaluating system robustness.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 💾 バックアップ --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-52">
            <span class="me-2">💾</span>
            <span>バックアップ</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-52">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-52" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>データ消失に備えたコピーを別媒体または別拠点に保存。世代管理・自動化が重要。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-52')">英語を見る</button>
            <div id="english-52" style="display:none;">
                <p>Backups are copies of data stored separately for recovery. Generational backups and automation are key to disaster preparedness.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 💽 ストレージ技術 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-53">
            <span class="me-2">💽</span>
            <span>ストレージ技術</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-53">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-53" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>HDD、SSD、RAID構成、SAN、NASなどの技術を活用して、安全で効率的なデータ保管を実現する。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-53')">英語を見る</button>
            <div id="english-53" style="display:none;">
                <p>Storage technologies like HDD, SSD, RAID, SAN, and NAS are used to store data securely and efficiently depending on system needs.</p>
            </div>
            </div>
        </div>
        </li>
    </ul>

    <ul class="list-group">
        {{-- Sample topics, full list continues... --}}
        <li class="list-group-item bg-dark text-light"><strong>⚖️  第4章 セキュリティ関連法規</strong></li>
    
        {{-- ©️ 知的財産権と個人情報の保護 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-54">
            <span class="me-2">©️</span>
            <span>知的財産権と個人情報の保護</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-54">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-54" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>著作権、商標権、特許権などの知的財産と、個人情報保護法に基づいた適切なデータ取扱いの理解が必要。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-54')">英語を見る</button>
            <div id="english-54" style="display:none;">
                <p>Understanding intellectual property rights (copyright, trademark, patents) and the Personal Information Protection Law is crucial for data governance.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- ⚖️ コンピュータ犯罪関連法規 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-55">
            <span class="me-2">⚖️</span>
            <span>コンピュータ犯罪関連法規</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-55">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-55" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>不正アクセス禁止法、電子計算機使用詐欺など、コンピュータを用いた犯罪行為を取り締まる法律群。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-55')">英語を見る</button>
            <div id="english-55" style="display:none;">
                <p>Laws like the Unauthorized Access Prohibition Act and Computer Fraud statutes govern and penalize criminal activities using IT systems.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 📜 サイバーセキュリティ基本法 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-56">
            <span class="me-2">📜</span>
            <span>サイバーセキュリティ基本法</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-56">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-56" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>日本政府が定めた国家的なサイバーセキュリティ対策の基本方針。NISCの設置、役割、産官学の連携などを定義。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-56')">英語を見る</button>
            <div id="english-56" style="display:none;">
                <p>The Cybersecurity Basic Act defines Japan's national strategy for cyber defense, including NISC's role and collaboration between government, academia, and industry.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 🌍 国際規格 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-57">
            <span class="me-2">🌍</span>
            <span>国際規格</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-57">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-57" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>ISO/IEC 27001など、国際的な情報セキュリティ管理の標準規格。グローバルな信頼性の確保に貢献。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-57')">英語を見る</button>
            <div id="english-57" style="display:none;">
                <p>International standards like ISO/IEC 27001 provide a globally trusted framework for managing information security.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- ☁️ クラウドサービス関連のガイドライン --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-58">
            <span class="me-2">☁️</span>
            <span>クラウドサービス関連のガイドライン</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-58">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-58" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>クラウドサービスの利用に関するセキュリティチェック項目や契約上の注意点などをまとめた各種ガイドライン。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-58')">英語を見る</button>
            <div id="english-58" style="display:none;">
                <p>Guidelines for cloud services include security requirements, vendor contract considerations, and risk assessments.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 👤 個人情報のガイドライン --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-59">
            <span class="me-2">👤</span>
            <span>個人情報のガイドライン</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-59">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-59" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>個人情報保護委員会や各省庁が示す、個人情報の取り扱いに関する実務的な指針とベストプラクティス。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-59')">英語を見る</button>
            <div id="english-59" style="display:none;">
                <p>Government-issued guidelines for properly handling personal data in business practices, including security and disclosure policies.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 📄 電子文書関連 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-60">
            <span class="me-2">📄</span>
            <span>電子文書関連</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-60">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-60" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>電子帳簿保存法やe-文書法に基づき、デジタル文書を合法的に保存・管理するためのルール。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-60')">英語を見る</button>
            <div id="english-60" style="display:none;">
                <p>Legal rules under Japanese law (e-Document Act) for storing digital records with integrity, traceability, and long-term accessibility.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 👷 労働関連の法規 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-61">
            <span class="me-2">👷</span>
            <span>労働関連の法規</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-61">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-61" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>システム管理者の深夜労働、ログ監視、勤務時間記録などに関わる労働基準法や労働安全衛生法など。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-61')">英語を見る</button>
            <div id="english-61" style="display:none;">
                <p>Labor laws related to system admin tasks: overtime, log monitoring, safety standards, and IT staff working conditions.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 🏢 各種標準化団体と国際規格 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-62">
            <span class="me-2">🏢</span>
            <span>各種標準化団体と国際規格</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-62">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-62" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>ISO、JIS、NISTなど、情報セキュリティに関する標準を定める主要な機関とその役割。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-62')">英語を見る</button>
            <div id="english-62" style="display:none;">
                <p>Key organizations like ISO, JIS, and NIST define global standards and frameworks for cybersecurity implementation and auditing.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 📋 マネジメントとオペレーションのガイドライン --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-63">
            <span class="me-2">📋</span>
            <span>マネジメントとオペレーションのガイドライン</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-63">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-63" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>セキュリティ運用の可視化、監査、教育体制などを整備するための指針。PDCAサイクルの実装も含む。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-63')">英語を見る</button>
            <div id="english-63" style="display:none;">
                <p>Guidelines for managing and operating security systems, including audits, awareness training, and applying the PDCA cycle.</p>
            </div>
            </div>
        </div>
        </li>
    </ul>

    <ul class="list-group">
        <li class="list-group-item bg-dark text-light"><strong>🌐 第5章 データベースとネットワーク</strong></li>
    
        {{-- 📋 マネジメントとオペレーションのガイドライン --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-63">
            <span class="me-2">📋</span>
            <span>マネジメントとオペレーションのガイドライン</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-63">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-63" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>セキュリティ運用の可視化、監査、教育体制などを整備するための指針。PDCAサイクルの実装も含む。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-63')">英語を見る</button>
            <div id="english-63" style="display:none;">
                <p>Guidelines for managing and operating security systems, including audits, awareness training, and applying the PDCA cycle.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 🔢 IPアドレス --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-65">
            <span class="me-2">🔢</span>
            <span>IPアドレス</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-65">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-65" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>インターネット上の機器を識別する番号。IPv4とIPv6があり、プライベート・グローバルIPなどの分類がある。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-65')">英語を見る</button>
            <div id="english-65" style="display:none;">
                <p>An IP address identifies devices on a network. There are IPv4 and IPv6 versions, and classifications like private and public IPs.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 🔄 TCPとUDP --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-66">
            <span class="me-2">🔄</span>
            <span>TCPとUDP</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-66">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-66" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>TCPは信頼性を重視する通信、UDPは速度を重視する通信。用途に応じて使い分ける。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-66')">英語を見る</button>
            <div id="english-66" style="display:none;">
                <p>TCP ensures reliable, ordered communication. UDP is faster but lacks delivery guarantees. Each fits different use cases.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 📡 主要なアプリケーション層プロトコル --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-67">
            <span class="me-2">📡</span>
            <span>主要なアプリケーション層プロトコル</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-67">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-67" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>HTTP、FTP、SMTP、DNSなど、ユーザーに近い層で使われる代表的な通信プロトコル。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-67')">英語を見る</button>
            <div id="english-67" style="display:none;">
                <p>Protocols like HTTP, FTP, SMTP, and DNS operate at the application layer — where users and services interact most.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 📶 無線LAN --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-68">
            <span class="me-2">📶</span>
            <span>無線LAN</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-68">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-68" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>無線LAN（Wi-Fi）は利便性が高いが、盗聴やなりすましのリスクがあるため、WPA3などの暗号化が重要。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-68')">英語を見る</button>
            <div id="english-68" style="display:none;">
                <p>Wi-Fi offers convenience but is prone to sniffing and spoofing — strong encryption like WPA3 is essential.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 💾 データベースの基礎 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-69">
            <span class="me-2">💾</span>
            <span>データベースの基礎</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-69">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-69" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>RDB（リレーショナルデータベース）が主流で、SQLを使ってデータ操作を行う。整合性や可用性の確保が重要。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-69')">英語を見る</button>
            <div id="english-69" style="display:none;">
                <p>Relational databases (RDBs) are the standard, using SQL to manage data. Ensuring data integrity and availability is essential.</p>
            </div>
            </div>
        </div>
        </li>

    </ul>

    <ul class="list-group">
        <li class="list-group-item bg-dark text-light"><strong>🏢　第6章 セキュリティの高める業務運用</strong></li>

        {{-- 📋 情報システム戦略の策定 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-70">
            <span class="me-2">📋</span>
            <span>情報システム戦略の策定</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-70">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-70" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>事業目標を達成するために、IT投資、業務プロセス、セキュリティを一体化させた中長期の戦略計画を立てる。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-70')">英語を見る</button>
            <div id="english-70" style="display:none;">
                <p>Build a mid-to-long term strategy that integrates IT investment, operations, and security to support business goals.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 👥 情報セキュリティ教育と意識向上 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-71">
            <span class="me-2">👥</span>
            <span>情報セキュリティ教育と意識向上</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-71">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-71" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>従業員一人ひとりが脅威を理解し、自主的に行動できるように教育・訓練・周知活動を行う。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-71')">英語を見る</button>
            <div id="english-71" style="display:none;">
                <p>Train and raise awareness so all employees understand threats and act securely without being told what to do every time.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 📆 運用体制とセキュリティプロセス --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-72">
            <span class="me-2">📆</span>
            <span>運用体制とセキュリティプロセス</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-72">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-72" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>日常業務において、インシデント対応、変更管理、構成管理などのプロセスを明文化し定着させる。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-72')">英語を見る</button>
            <div id="english-72" style="display:none;">
                <p>Establish and document daily operational processes — like incident response, change control, and configuration management.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 🔁 PDCAと継続的改善 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-73">
            <span class="me-2">🔁</span>
            <span>PDCAと継続的改善</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-73">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-73" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>Plan → Do → Check → Actのサイクルを回して、セキュリティ体制や運用の継続的な改善を実施する。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-73')">英語を見る</button>
            <div id="english-73" style="display:none;">
                <p>The PDCA cycle (Plan-Do-Check-Act) is used to drive ongoing improvement of security practices and systems.</p>
            </div>
            </div>
        </div>
        </li>

        {{-- 🧑‍💼 情報セキュリティ責任者の役割 --}}
        <li class="list-group-item bg-black text-light">
        <div class="d-flex align-items-center justify-content-between">
            <div>
            <input type="checkbox" class="form-check-input me-2" id="topic-74">
            <span class="me-2">🧑‍💼</span>
            <span>情報セキュリティ責任者の役割</span>
            </div>
            <button class="btn btn-sm btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-topic-74">
            詳細を見る
            </button>
        </div>

        <div id="collapse-topic-74" class="collapse mt-2">
            <div class="card card-body bg-secondary text-white">
            <p>セキュリティ責任者は、組織内で方針を策定し、体制を整え、教育を推進し、インシデント対応を指揮する中核的存在。</p>
            <button class="btn btn-outline-light btn-sm mb-2" type="button" onclick="toggleEnglish('english-74')">英語を見る</button>
            <div id="english-74" style="display:none;">
                <p>The security officer leads policy creation, team structure, training, and incident response — central to managing organizational risk.</p>
            </div>
            </div>
        </div>
        </li>

    </ul>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    const progressBar = document.getElementById('progressBar');

    checkboxes.forEach(function(checkbox) {
        const saved = localStorage.getItem(checkbox.id);
        if (saved === 'true') checkbox.checked = true;

        checkbox.addEventListener('change', function() {
            localStorage.setItem(checkbox.id, checkbox.checked);
            updateProgress();
        });
    });

    function updateProgress() {
        const total = checkboxes.length;
        const checked = Array.from(checkboxes).filter(c => c.checked).length;
        const percent = Math.round((checked / total) * 100);
        progressBar.style.width = percent + '%';
        progressBar.innerText = percent + '%';
    }

    updateProgress();
});

function toggleEnglish(id) {
    const english = document.getElementById(id);
    english.style.display = (english.style.display === 'none') ? 'block' : 'none';
}
</script>
@endsection
