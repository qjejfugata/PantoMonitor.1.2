<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<div>
    <br>    
<canvas id="Donut" style="width:100%;"></canvas>

<br>
</div>

<script>
var xValues = ["Good", "Bad"];
var yValues = [55, 23];
var barColors = [
  "#b91d47",
  "#00aba9"
  
];

new Chart("Donut", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: false,
      text: "Assesment"
    }
  }
});
</script>

</body>