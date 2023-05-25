<div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var chartData = JSON.parse('<?php echo $dataDummy ?>');
        console.log(chartData);

        var ctx5 = document.getElementById("chartDummy").getContext("2d");

        var gradientStroke1 = ctx5.createLinearGradient(0, 230, 0, 50);
        gradientStroke1.addColorStop(1, "rgba(203,12,159,0.2)");
        gradientStroke1.addColorStop(0.2, "rgba(72,72,176,0.0)");
        gradientStroke1.addColorStop(0, "rgba(203,12,159,0)"); //purple colors

        var gradientStroke2 = ctx5.createLinearGradient(0, 230, 0, 50);
        gradientStroke2.addColorStop(1, "rgba(20,23,39,0.2)");
        gradientStroke2.addColorStop(0.2, "rgba(72,72,176,0.0)");
        gradientStroke2.addColorStop(0, "rgba(20,23,39,0)"); //purple colors

        var chartDummy = new Chart(ctx5, {
            type: "line",
            data: {
                labels: chartData.label,
                datasets: [
                    {
                        label: "Data Dummy",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#cb0c9f",
                        borderWidth: 3,
                        backgroundColor: gradientStroke1,
                        fill: true,
                        data: chartData.data,
                        maxBarThickness: 6,
                    }
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    },
                },
                interaction: {
                    intersect: false,
                    mode: "index",
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: "#b2b9bf",
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: "normal",
                                lineHeight: 2,
                            },
                        },
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5],
                        },
                        ticks: {
                            display: true,
                            color: "#b2b9bf",
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: "normal",
                                lineHeight: 2,
                            },
                        },
                    },
                },
            },
        });

        // Event listener saat komponen Livewire selesai dimuat
        document.addEventListener('livewire:load', function () {
            // Event listener untuk menerima data terbaru dari Livewire
            Livewire.on('refreshChart', event => {
                var newData = JSON.parse(event.data);
                chartDummy.data.labels = newData.label;
                chartDummy.data.datasets[0].data = newData.data;
                chartDummy.update();
            });
        });

        // Interval untuk memperbarui data secara berkala
        setInterval(() => {
            Livewire.emit('dummyAdded');
        }, 1000);
    </script>
</div>