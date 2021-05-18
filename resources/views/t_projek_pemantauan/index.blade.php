@extends('layouts.app_admin',[ 'title'=>'MAKLUMAT PERMOHONAN' , 'subTitle'=>'SENARAI PROJEK' ])

@section('content')

<div class="card">
    {{-- <div class="card-header">
    </div> --}}
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <canvas style="width:100%" id="myChart"></canvas>
            </div>
            <div class="col-sm-12 col-md-4 py-0">
                <canvas style="width:100%" id="myChart2"></canvas>
            </div>
        </div>
    </div>
</div>


@endsection


@section('jquery')



<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-piechart-outlabels"></script>

<script>

var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx,{
    type: 'outlabeledPie',
    data: {
        labels: ['BELUM MULA', 'PROSES PEROLEHAN', 'DALAM PEMBINAAN', 'SIAP'],
        datasets: [{
            data: [12, 19, 3, 5],
            backgroundColor: [
                'red',
                'blue',
                'gray',
                'green',
            ],
            hoverOffset: 5
      }]
  },
  options: {
        plugins: {
            zoomOutPercentage: 10,
            legend: true,
            outlabels: {
                text: '%p %v',
                color: 'white',
                stretch: 15,
                font: {
                    resizable: true,
                    minSize: 12,
                    maxSize: 17
                }
            }
        }
    }
});

</script>



@endsection
