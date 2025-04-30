@extends('layouts.master')

@section('title', __('messages.meta_title'))

@section('content')
    @include('partials.profile', ['progress' => $progress])
    @include('partials.navigation')

    <div id="dynamic-content">
        @if(isset($pathContent))
            {!! $pathContent !!}
        @else
            @include('roadmap.paths.soc')
        @endif
    </div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const ctx = document.getElementById('progressChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['SOC Analyst', 'Pen Test', 'Sec Engineer', 'IT Mgmt'],
            datasets: [{ 
                label: 'Rooms Completed', 
                data: [
                    {{ $progress['soc'] }},
                    {{ $progress['pen'] }},
                    {{ $progress['eng'] }},
                    {{ $progress['mgmt'] }}
                ], 
                backgroundColor: [
                    'rgba(0,255,255,0.6)',
                    'rgba(255,99,132,0.6)',
                    'rgba(54,162,235,0.6)',
                    'rgba(255,206,86,0.6)'
                ], 
                borderColor: [
                    'rgba(0,255,255,1)',
                    'rgba(255,99,132,1)',
                    'rgba(54,162,235,1)',
                    'rgba(255,206,86,1)'
                ], 
                borderWidth: 1 
            }]
        },
        options: { 
            scales: { 
                y: { 
                    beginAtZero: true, 
                    max: 50, 
                    ticks: { 
                        color: '#f8f9fa' 
                    } 
                }, 
                x: { 
                    ticks: { 
                        color: '#f8f9fa' 
                    } 
                } 
            }, 
            plugins: { 
                legend: { 
                    labels: { 
                        color: '#f8f9fa' 
                    } 
                } 
            } 
        }
    });
});
</script>
@endsection