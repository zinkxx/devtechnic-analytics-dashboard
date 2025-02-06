document.addEventListener("DOMContentLoaded", function () {
    fetch(ajaxurl + "?action=devtechnic_get_analytics")
        .then(response => response.json())
        .then(data => {
            let ctx = document.getElementById("analyticsChart").getContext("2d");
            new Chart(ctx, {
                type: "line",
                data: {
                    labels: ["7 Gün Önce", "6 Gün Önce", "5 Gün Önce", "Bugün"],
                    datasets: [{
                        label: "Ziyaretçi Sayısı",
                        data: data.map(row => row[1]),
                        backgroundColor: "rgba(75, 192, 192, 0.2)",
                        borderColor: "rgba(75, 192, 192, 1)",
                        borderWidth: 1
                    }]
                }
            });
        })
        .catch(error => console.error("Analytics verisi alınamadı:", error));
});
