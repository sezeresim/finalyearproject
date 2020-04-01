var v1 = document.getElementById("pie-chart").getAttribute("data-surveys");
var v2 = document.getElementById("pie-chart").getAttribute("data-users");
new Chart(document.getElementById("pie-chart"),
    {

    type: 'pie',
    data: {
        labels: ["Katılımcılar", "Katılmayanlar"],
        datasets: [{
            backgroundColor: ["#00cd10","#c40025"],
            data: [v1,v2]
        }]
    },
    options: {
        title: {
            display: true,
        }
    }
});