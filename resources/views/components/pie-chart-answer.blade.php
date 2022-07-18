<div id="chart"></div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var options = {
        chart: {
            type: 'pie',
            height: '400px',
            width: '100%'
        },
        series: [{{ $falseAnswer }}, {{ $trueAnswer }}],
        labels: ['Salah', 'Benar'],
        colors: ['#FF1752', '#0086FF'],
        legend: {
            position: 'bottom'
        }
    }

    var chart = new ApexCharts(document.querySelector("#chart"), options);

    chart.render();
</script>
