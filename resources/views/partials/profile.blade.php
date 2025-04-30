<div class="profile-wrapper">
    <div class="profile-section avatar-section">
        <img src="{{ asset('images/avatar.JPEG') }}" alt="{{ __('messages.avatar_alt') }}" class="avatar"/>
        <div style="margin-top: 10px; font-family: 'Orbitron', sans-serif; font-size: 1.2rem; color: #00f0ff;">
            {{ __('messages.profile_name') }}
        </div>
    </div>
    <div class="profile-section progress-section">
        <canvas id="progressChart" width="300" height="200"></canvas>
    </div>
    
</div>