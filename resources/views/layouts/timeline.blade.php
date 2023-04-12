<div>
<canvas id="myChart" style="width:100%;"></canvas>

<script >

    var labels = ["Jan", "Feb", "Mar", "Apr", "May","June","July","Aug","Sept","Oct","Nov","Dec"];
    var users =   [{{$goodcounterjan}}, {{$goodcounterfeb}},{{$goodcountermar}},{{$goodcounterapr}}, {{$goodcountermay}},{{$goodcounterjune}}, {{$goodcounterjuly}},{{$goodcounteraug}}, {{$goodcountersep}}, {{$goodcounteroct}},{{$goodcounternov}},{{$goodcounterdec}}];
    var userss =   [{{$badcounterjan}},{{$badcounterjan}}, {{$badcountermar}},{{$badcounterapr}}, {{$badcountermay}},{{$badcounterjune}}, {{$badcounterjuly}}, {{$badcounteraug}},{{$badcountersep}}, {{$badcounteroct}},{{$badcounternov}},{{$badcounterdec}}];
    
  
  
    const data = {
        labels: labels,
        datasets: [{
            label: 'Good',
            backgroundColor: 'rgb(92,177,255)',
            borderColor: 'rgb(128, 255, 0)',
            data: users,

        },
        {
            label: 'Bad',
            backgroundColor: 'rgb(67,126,247)',
            borderColor: 'rgb(235, 49, 32)',
            data: userss,
        }



        ]
    };  
    
    const config = {  
        type: 'bar',  
        data: data, 
        options: {  
        scales: { 
            xAxes: [{
                stacked: true
            }],
            yAxes: [{
                stacked: true
            }]
        }
    }
    };
  
    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
</div>
