<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<canvas id="myChart" style="width:100%;"></canvas>

<script>
var xValues = ["Jan", "Feb", "Mar", "Apr", "May","June","July","Aug"];
var yValues = [55, 49, 44, 24, 15,43,54,7,4];
var barColors = ["red", "green","blue","orange","brown","green","Yellow"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: false,
      text: "Timeline"
    }
  }
});
</script>
