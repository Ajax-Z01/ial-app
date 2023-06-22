<div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var liveIndicator = document.getElementById("liveIndicator");

        var chartData = JSON.parse('<?php echo $dataVakum ?>');

        var ctx4a = document.getElementById("chartPenning").getContext("2d");

        var gradientStroke1 = ctx4a.createLinearGradient(0, 230, 0, 50);
        gradientStroke1.addColorStop(1, "rgba(203,12,159,0.2)");
        gradientStroke1.addColorStop(0.2, "rgba(72,72,176,0.0)");
        gradientStroke1.addColorStop(0, "rgba(203,12,159,0)"); //purple colors

        var chartPenning = new Chart(ctx4a, {
            type: "line",
            data: {
                labels: chartData.label,
                datasets: [
                    {
                        label: "Data Tekanan Penning Vakum",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#cb0c9f",
                        borderWidth: 3,
                        backgroundColor: gradientStroke1,
                        fill: true,
                        data: chartData.data1,
                        maxBarThickness: 6,
                    }
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                    display: true,
                    labels: {
                        font: {
                        size: 11,
                        family: "Open Sans",
                        style: "normal",
                        lineHeight: 2,
                        },
                    },
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

        var ctx4b = document.getElementById("chartPirani").getContext("2d");

        var gradientStroke2 = ctx4b.createLinearGradient(0, 230, 0, 50);
        gradientStroke2.addColorStop(1, "rgba(20,23,39,0.2)");
        gradientStroke2.addColorStop(0.2, "rgba(72,72,176,0.0)");
        gradientStroke2.addColorStop(0, "rgba(20,23,39,0)"); //purple colors

        var chartPirani = new Chart(ctx4b, {
            type: "line",
            data: {
                labels: chartData.label,
                datasets: [
                    {
                        label: "Data Tekanan Pirani Vakum",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#3A416F",
                        borderWidth: 3,
                        backgroundColor: gradientStroke2,
                        fill: true,
                        data: chartData.data2,
                        maxBarThickness: 6,
                    }
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                    display: true,
                    labels: {
                        font: {
                        size: 11,
                        family: "Open Sans",
                        style: "normal",
                        lineHeight: 2,
                        },
                    },
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
            Livewire.on('refreshDataVakum', event => {
                var newData = JSON.parse(event.data);

                // Ambil nilai terakhir dari newData.label
                var lastLabel = newData.label[newData.label.length - 1];

                // Periksa apakah lastLabel berbeda dari label sebelumnya
                if (lastLabel !== chartPenning.data.labels[chartPenning.data.labels.length - 1]) {
                liveIndicator.classList.remove("text-red-500");
                liveIndicator.classList.add("text-green-500");
                } else {
                liveIndicator.classList.remove("text-green-500");
                liveIndicator.classList.add("text-red-500");
                }
                
                chartPenning.data.labels = newData.label;
                chartPenning.data.datasets[0].data = newData.data1;
                chartPenning.update();

                chartPirani.data.labels = newData.label;
                chartPirani.data.datasets[0].data = newData.data2;
                chartPirani.update();
            });
        });

        // Interval untuk memperbarui data secara berkala
        setInterval(() => {
            Livewire.emit('vakumAdded');
        }, 3000);
    </script>
</div>
