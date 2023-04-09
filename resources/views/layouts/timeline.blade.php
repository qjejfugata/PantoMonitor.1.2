<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<canvas id="myChart" style="width:100%;"></canvas>

<script>
var xValues = ["Jan", "Feb", "Mar", "Apr", "May","June","July","Aug"];
var yValues = [55, 49, 44, 24, 15,43,54,7,4];
var barColors = ["red", "green","blue","orange","brown","green","Yellow"];

var xValuess = ["Jan", "Feb", "Mar", "Apr", "May","June","July","Aug"];
var yValuess = [35, 9, 24, 2, 5,3,4,72,42];
var barColors = ["red", "green","orange","blue","green","brown","red"];


new Chart("myChart", {
 
type: 'bar',
  data: 

  datasets: [
    {
      label: 'Dataset 1',
      data: Utils.numbers(NUMBER_CFG),
      backgroundColor: Utils.CHART_COLORS.red,
      stack: 'Stack 0',
    },
    {
      label: 'Dataset 2',
      data: Utils.numbers(NUMBER_CFG),
      backgroundColor: Utils.CHART_COLORS.blue,
      stack: 'Stack 0',
    },
  
  ]
  
  
  
  ,
  options: {
    plugins: {
      title: {
        display: true,
        text: 'Chart.js Bar Chart - Stacked'
      },
    },
    responsive: true,
    interaction: {
      intersect: false,
    },
    scales: {
      x: {
        stacked: true,
      },
      y: {
        stacked: true
      }
    }
  }
});





</script>
