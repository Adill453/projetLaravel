<div class="card mt-4">
    <div class="card-header">
        Products per Category
    </div>
    <div class="card-body" style="height: 400px;">
        <canvas id="categoryChart"></canvas>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('categoryChart');
        if (!ctx) {
            console.error('Canvas element not found');
            return;
        }

        const categoryChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($categoryLabels) !!},
                datasets: [{
                    label: '# of Products',
                    data: {!! json_encode($productCounts) !!},
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    },
                    tooltip: {
                        enabled: true,
                        mode: 'index',
                        intersect: false
                    }
                },
                animation: {
                    duration: 1000
                }
            }
        });
    });
</script>
@endpush
