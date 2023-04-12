
@extends('layouts.app')
@section('content')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PantoMonitor | Dashboard</title>










 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



  <!-- Navbar -->
  @include('layouts.navigation')
   <!-- navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.sidebar')
  <!-- Content Wrapper. Contains page content -->



  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">


      <div class="container-fluid ">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
        
            <!-- small box -->
            <div class="small-box bg-success elevation-4">
              <div class="inner">
         

              <h3>{{sizeof($GoodCount)}}</h3>
    
                <p>Good</p>
              </div>
              <div class="icon">
                <i class="ion ion-checkmark-round"></i>
              </div>
              
            </div>
          </div>




          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning elevation-4">
              <div class="inner">

              
          
          
          <h3>{{sizeof($badCount)}} </h3>

              
              
           

                <p>Bad</p>
                
              </div>


              <div class="icon">
                <i class="ion ion-alert-circled"></i>
              </div>
             
            </div>
          </div>




          
          <!-- ./col -->

    
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary elevation-4">
              <div class="inner">

  
          <h3>{{sizeof($totalCount)}}</h3>
                <p>Total Entry</p>
              </div>


              <div class="icon">
                <i class="ion ion-android-done-all"></i>
              </div>
             
            </div>
          </div>



          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-teal elevation-4">
              <div class="inner">
              
              @foreach ($checkpower as $key =>$item)
                <h3> {{$item}}   </h3>
              @endforeach
              <p>Status</p>
              </div>


              <div class="icon">
                <i class="ion ion-clock"></i>
              </div>
             
            </div>
          </div>










         
          <!-- ./col -->
        </div>
        <!-- /.row -->

    


        <!-- Timeline -->
        <div class="card card-outline card-success elevation-3">
              <div class="card-header border-0">
                <h3 class="card-title">
                <i class="fas fa-regular fa-chart-bar"></i>
                   Timeline
                </h3>
              </div>

              @include('layouts.timeline')

        
            </div>
            <!-- Timeline END -->





        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-5 connectedSortable">
        
            
          
          <!-- Recent Photo -->
            <div class="card card-outline card-info elevation-3">
              <div class="card-header border-0 ">
                <h3 class="card-title">
                <i class="fa fa-solid fa-image"></i>  
                  Recent Photo                                              
                </h3>

              @foreach ($recentimgs as $key =>$item)
                <h5 class="text-right">  {{$item['Date']}}   </h5>
              @endforeach
              
              
              </div>
              

              <div class="card-body">
                <img src="{{$image}}" class="img-fluid" alt="Responsive image">
           
                
              </div>





            </div>
            <!-- Recent Photo END -->

          </section>
          <!-- /.Left col -->
       
              <!-- /.card-body-->
            
          <section class="col-lg-7 connectedSortable ">
            <!-- Total Assesment -->
            <div class="card card-outline card-primary elevation-3">
              <div class="card-header border-0">
                <h3 class="card-title">
                <i class="fas fa-map-marker-alt mr-1"></i>
                  Total Assesment
                </h3>
              </div>


              @include('layouts.donut')



                
              </div><!-- /.card-body -->
            </div>





                
              </div>





            </div>
            <!-- Total Assesment END -->

      




        
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 @include('layouts.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->

</body>


@endsection()

