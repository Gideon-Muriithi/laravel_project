@extends('layouts.admin')

@section('styles')
    <style>
        .modal-danger>.modal-dialog>.modal-content>.modal-header,
        .modal-danger>.modal-dialog>.modal-content>form>.modal-footer{
            background: red;
        }
    </style>
@stop

@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Customers</h3>
                    <div class="card-tools">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Add New
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table  class="table">
                        <thead>
                        <tr>
                            <th>Account Number</th>
                            <th>Account Name</th>
                            <th>PhoneNumber</th>
                            <th>ID Number</th>
                            <th>Description</th>
                            <th>Modify</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $cus)
                            <tr>
                                <td>{{$cus-> AccountNumber}}</td>
                                <td>{{$cus-> AccountName}}</td>
                                <td>{{$cus-> PhoneNumber}}</td>
                                <td>{{$cus-> IdNumber}}</td>
                                <td>{{$cus-> Description}}</td>
                                <td><button class="btn btn-info" data-myAccountName="{{$cus->AccountName}}" data-cusid={{$cus->id}}
                                            onclick="editModal({{ $cus->id}})">Edit</button>

                                <!-- <button class="btn btn-danger" data-cusid={{$cus->id}} data-toggle="modal" data-target="#delete">Delete</button> -->
                                    <button class="btn btn-danger" data-cusid={{$cus->id}} onclick="deleteModal({{ $cus->id}})">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel">New Customer</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span 
      aria-hidden="true">&times;</span></button>
    </div>
      <form action="{{route('customers.store')}}" method="post">
          {{csrf_field()}}
          <div class="modal-body">
              <input type="hidden" name="customers_id" id="" value="">
              <div class="modal-body">
                  <label for="AccountNumber">Account Number</label>
                  <input type="number" class="form control" name="AccountNumber" id="">
              </div>
              <div class="modal-body">
                  <label for="AccountName">Account Name</label>
                  <input type="text" class="form control" name="AccountName" id="">
              </div>
              <div class="modal-body">
                  <label for="PhoneNumber">Phone Number</label>
                  <input type="number" class="form control" name="PhoneNumber" id="">
              </div>
              <div class="modal-body">
                  <label for="IdNumber">ID Number</label>
                  <input type="number" class="form control" name="IdNumber" id="">
              </div>
              <div class="form-group">
                  <label for="des">Description</label>
                  <textarea name="description" id="des" cols="20" rows="5" class="form-control"></textarea>
              </div>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save </button>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel">Edit Customer Details</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span 
      aria-hidden="true">&times;</span></button>
    </div>
      <form action="{{route('customers.update')}}" method="post">
          @csrf
          <div class="modal-body">
          <input type="hidden" name="customers_id" id="cus_id_1" value="">
              <div class="modal-body">
                  <label for="AccountNumber">Account Number</label>
                  <input type="number" class="form control" name="AccountNumber" id="AccountNumber">
              </div>
              <div class="modal-body">
                  <label for="Account_Name">Account Name</label>
                  <input type="text" class="form control" name="AccountName" id="Account_Name">
              </div>
              <div class="modal-body">
                  <label for="PhoneNumber">Phone Number</label>
                  <input type="number" class="form control" name="PhoneNumber" id="PhoneNumber">
              </div>
              <div class="modal-body">
                  <label for="IdNumber">ID Number</label>
                  <input type="number" class="form control" name="IdNumber" id="IdNumber">
              </div>
              <div class="form-group">
                  <label for="des">Description</label>
                  <textarea name="description" id="des" cols="20" rows="5" class="form-control"></textarea>
              </div>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Changes </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Modal -->
<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span 
      aria-hidden="true">&times;</span></button>
    </div>
      <form action="{{route('customers.destroy')}}" method="post">
          <!-- {{method_field ('delete')}} -->
          <!-- {{csrf_field()}} -->
          @csrf
          <div class="modal-body">
          <input type="hidden" name="customers_id" id="cus_id_2" value="">
          <p class="text-center">
              Are you sure you want to delete this?
          </p>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
          <button type="submit" class="btn btn-warning">Yes </button>
          </div>
         </form>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    function deleteModal(customer_id){
      $('#cus_id_2').val(customer_id);
      $('#delete').modal('show');
    }

    function editModal(customer_id){
      var base_url = '{{ route('customers.index') }}';
      var url = base_url + '/get_customer'+'/'+customer_id;

      axios.get(url)
        .then(function (res){
          console.log(res);

          $('#Account_Name').val(res.data.customer.AccountName);
          $('#PhoneNumber').val(res.data.customer.PhoneNumber);
          $('#AccountNumber').val(res.data.customer.AccountNumber);
          $('#des').html(res.data.customer.Description);
          $('#IdNumber').val(res.data.customer.IdNumber);
          $('#cus_id_1').val(res.data.customer.id);
          $('#edit').modal('show');
        })
    }
  </script>
@endsection