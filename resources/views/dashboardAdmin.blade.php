@extends('layout.templateAdmin')

@section('title', 'Dashboard')

@section('style')
  <link rel="stylesheet" href="{{ URL::asset('/css/dashboardAdmin.css')}}">
  <link rel="stylesheet" href="../node_modules/chart.js/dist/Chart.min.css">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
  <script href="../assets/js/hs.chartjs.js"></script>
  <script>
    $(document).on('ready', function () {
      // initialization of chartjs
      $('.js-chart').each(function () {
        $.HSCore.components.HSChartJS.init($(this));
      });
    });
  </script>

@endsection

@section('container')
<div class="progress conten">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
<!-- End Bar Chart -->
@endsection

@section('script')
@endsection