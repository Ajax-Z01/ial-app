<div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var liveIndicator = document.getElementById("liveIndicator");
        
        var chartData = JSON.parse('<?php echo $dataOptic ?>');
        console.log(chartData);

        var ctx3a = document.getElementById("chartArusPemayar").getContext("2d");

        var gradientStroke1 = ctx3a.createLinearGradient(0, 230, 0, 50);
        gradientStroke1.addColorStop(1, "rgba(203,12,159,0.2)");
        gradientStroke1.addColorStop(0.2, "rgba(72,72,176,0.0)");
        gradientStroke1.addColorStop(0, "rgba(203,12,159,0)"); //purple colors

        var chartArusPemayar = new Chart(ctx3a, {
            type: "line",
            data: {
                labels: chartData.label,
                datasets: [
                    {
                        label: "Data Arus Pemayar",
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

        var ctx3b = document.getElementById("chartArusPemfokus").getContext("2d");

        var gradientStroke2 = ctx3b.createLinearGradient(0, 230, 0, 50);
        gradientStroke2.addColorStop(1, "rgba(20,23,39,0.2)");
        gradientStroke2.addColorStop(0.2, "rgba(72,72,176,0.0)");
        gradientStroke2.addColorStop(0, "rgba(20,23,39,0)"); //purple colors

        var chartArusPemfokus = new Chart(ctx3b, {
            type: "line",
            data: {
                labels: chartData.label,
                datasets: [
                    {
                        label: "Data Arus Pemfokus",
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

        var ctx3c = document.getElementById("chartTeganganPemayar").getContext("2d");

        var gradientStroke3 = ctx3c.createLinearGradient(0, 230, 0, 50);
        gradientStroke3.addColorStop(1, "rgba(255, 0, 0, 0.2)"); // Red color with opacity
        gradientStroke3.addColorStop(0.2, "rgba(72, 72, 176, 0.0)");
        gradientStroke3.addColorStop(0, "rgba(255, 0, 0, 0)"); // Red color with opacity

        var chartTeganganPemayar = new Chart(ctx3c, {
            type: "line",
            data: {
                labels: chartData.label,
                datasets: [
                    {
                        label: "Data Tegangan Pemayar",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#FF0000", // Red color
                        borderWidth: 3,
                        backgroundColor: gradientStroke3,
                        fill: true,
                        data: chartData.data3,
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


        var ctx3d = document.getElementById("chartTeganganPemfokus").getContext("2d");

        var gradientStroke4 = ctx3d.createLinearGradient(0, 230, 0, 50);
        gradientStroke4.addColorStop(1, "rgba(255, 193, 7, 0.2)"); // Yellow color with opacity
        gradientStroke4.addColorStop(0.2, "rgba(72, 72, 176, 0.0)");
        gradientStroke4.addColorStop(0, "rgba(255, 193, 7, 0)"); // Yellow color with opacity

        var chartTeganganPemfokus = new Chart(ctx3d, {
            type: "line",
            data: {
                labels: chartData.label,
                datasets: [
                    {
                        label: "Data Tegangan Pemfokus",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 0,
                        borderColor: "#FFC107", // Yellow color
                        borderWidth: 3,
                        backgroundColor: gradientStroke4,
                        fill: true,
                        data: chartData.data4,
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
            Livewire.on('refreshDataOptic', event => {
                var newData = JSON.parse(event.data);

                // Ambil nilai terakhir dari newData.label
                var lastLabel = newData.label[newData.label.length - 1];

                // Periksa apakah lastLabel berbeda dari label sebelumnya
                if (lastLabel !== chartArusPemayar.data.labels[chartArusPemayar.data.labels.length - 1]) {
                liveIndicator.classList.remove("text-red-500");
                liveIndicator.classList.add("text-green-500");
                } else {
                liveIndicator.classList.remove("text-green-500");
                liveIndicator.classList.add("text-red-500");
                }
                
                chartArusPemayar.data.labels = newData.label;
                chartArusPemayar.data.datasets[0].data = newData.data1;
                chartArusPemayar.update();

                chartArusPemfokus.data.labels = newData.label;
                chartArusPemfokus.data.datasets[0].data = newData.data2;
                chartArusPemfokus.update();

                chartTeganganPemayar.data.labels = newData.label;
                chartTeganganPemayar.data.datasets[0].data = newData.data3;
                chartTeganganPemayar.update();

                chartTeganganPemfokus.data.labels = newData.label;
                chartTeganganPemfokus.data.datasets[0].data = newData.data4;
                chartTeganganPemfokus.update();
            });
        });

        // Interval untuk memperbarui data secara berkala
        setInterval(() => {
            Livewire.emit('opticAdded');
        }, 10000);
    </script>
</div>
