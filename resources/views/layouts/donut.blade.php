
<div>  
<canvas id="Donut" style="width:100%;"></canvas>
<br>
<br>
</div>


<script>



var xValues = ["Good", "Bad"];
var yValues = ['{{sizeof($GoodCount)}} ', '{{sizeof($badCount)}} '];
var barColors = [
  "#5cb1ff",
  "#437ef7"
  
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

