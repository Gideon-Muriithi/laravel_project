@extends('layouts.admin')
@section('content')
<br><br>
<div class="">
<div class= "box">
<div class= "box-header">
<h3 class="box-title">Monthly Units Consumed</h3>
</div>

<div class="box-body">
<table class="table table-dark id=table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Year</th>
      <th scope="col">Month</th>
      <th scope="col">Previous Units</th>
      <th scope="col">Current Units</th>
      <th scope="col">Units Due</th>
      <th scope="col">Modify </th>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>
@endsection