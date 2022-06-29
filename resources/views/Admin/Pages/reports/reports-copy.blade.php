@extends('Admin.Layout.master')

@section('content')
<div class="container-fluid">
    <div class="content_right_area">
        <div class="frm_area_1">
            <h4>Reports</h4>

            <canvas id="myChart" width="400" height="400"></canvas>
        </div>
    </div>
</div>
@endsection

@section('css')
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('myChart').getContext('2d');
const labels = [];
const item_total = [];
const total_units = [0,0,0];
<?php foreach ($orders as $key => $value): ?>
	labels.push("{{$value->item_desc}}")
	item_total.push({{$value->item_total}})
	total_units.push({{$value->total_units}})
<?php endforeach ?>
console.log(labels)
console.log(item_total)
console.log(total_units)

var mybarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: labels,
    datasets: [{
      label: 'Total Units',
      backgroundColor: "#030367",
      data: item_total
    }, {
      label: 'Total Price',
      backgroundColor: "#670001",
      data: total_units
    }]
  },

  options: {
  	indexAxis: 'y',
    legend: {
      display: true,
      ticks: {
      	beginAtZero: true   // minimum value will be 0.
      },
      position: 'top',
      labels: {
        fontColor: "#000080",
      }
    },
    
  }
});

</script>
@endsection