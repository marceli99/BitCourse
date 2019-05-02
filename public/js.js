var canvas = document.getElementById("myFirstChart");
var ctx = canvas.getContext('2d');

// Global Options:
 Chart.defaults.global.defaultFontColor = 'Tomato';
 Chart.defaults.global.defaultFontSize = 16;

// Data with datasets options
var data = {
    labels: ["One", "Two", "Tree", "Four", "Five", "Six", "Seven"],
      datasets: [
        {
            label: "Numbers !",
            fill: true,
            backgroundColor: "orange",
            borderColor: "tomato",
            data: [1, 2, 5, 4, 5, 6, 7],
        }
    ]
};
// Chart declaration with some options:
var myFirstChart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: {
        title: {
            fontSize: 20,
            display: true,
            text: 'My First Chart !'
        }
    }
})
