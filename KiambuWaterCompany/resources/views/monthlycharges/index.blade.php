@extends('layouts.admin')
@section('content')
<br><br>
<div class="">
<div class= "box">
<div class= "box-header">
<h3 class="box-title">Monthly Bills</h3>
</div>

<div class="box-body">
<table class="table table-dark id=table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Month</th>
      <th scope="col">Previous Charges</th>
      <th scope="col">Current Charges</th>
      <th scope="col">Amount Due</th>
      <th scope="col">Modify </th>
    </tr>
  </thead>
<tbody>
  @foreach ($charges as $cha)
  <tr>
  <th scope ="row" {{$cha->id}}> </th>
  <td  {{$cha->Month}}> </th>
  <td  {{$cha->Previouscharges}}> </th>
  <td  {{$cha->Currentcharges}}> </th>

  <td> 
  <button  class="btn btn-primary">Update</button>
 
  
<button  class="btn btn-secondary">Delete</button>

  </td>
    </tr>

    @endforeach
  </tbody>
</table>

@endsection