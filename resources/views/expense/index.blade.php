@extends('layouts.master')
@section('title')
  Expense List
@endsection
@section('content')
  <br>
  <br>

  <div class="col-md-12">
    <a href="{{ route('expense.create') }}" class="btn btn-primary btn-round pull-right">Create Expense</a>
      {!! Form::open(['route' => 'expense.index', 'method' => 'get']) !!}
    <div class="form-group">
    <label >Filter Expense:</label>
    <select class="col-md-4"  name="month">
          <option value="1">January</option>
          <option value="2">February</option>
          <option value="3">March</option>
          <option value="4">April</option>
          <option value="5">May</option>
          <option value="6">June</option>
          <option value="7">July</option>
          <option value="8">August</option>
          <option value="9">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select>

      <button type="submit" class="btn btn-sm btn-info">Filter</button>
      <button type="button" class="btn btn-sm btn-success" style="margin-left: 1%">Export</button>
    </div>
      {!! Form::close() !!}

  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Expense List</h4>
          <p class="card-category"> Here is the list of all Expense</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
              <th style="width: 10%">
                S.N.
              </th>
              <th style="width: 25%">
                Title
              </th>
              <th style="width: 25%">
                Date
              </th>
              <th style="width: 25%">
                Amount Spent
              </th>
              <th style="width: 25%">
                Remarks
              </th>
              <th style="width: 25%">
                Action
              </th>
              </thead>
              <tbody>
              <?php $count = 1; ?>
              @foreach($expenses as $expense)
                <tr>
                  <td>
                    {{$count++}}
                  </td>
                  <td>
                    {{$expense->title}}
                  </td>
                  <td>
                    {{$expense->expense_date}}
                    {{--<a href="/expense/{{$expense->id}}"> {{$expense->title}} </a>--}}
                  </td>
                  <td>
                    {{$expense->amount_spent}}
                  </td>
                  <td>
                    {{$expense->remarks}}
                  </td>
                  <td>
                    <a href="{{route('expense.edit',$expense->id)}}" title="edit" class="material-icons">edit</a>
                    {!! Form::open(['route' => ['expense.destroy', $expense->id], 'method' => 'POST']) !!}
                    {{method_field('DELETE')}}
                    {{csrf_field()}}
                    <button title="delete" id="delete-expense" class="material-icons"
                            style="color: purple; margin-left: 40%">delete
                    </button>
                    {!! Form::close() !!}
                    {{--<a href="{{route('users.destroy',$user->id)}}" title="delete" class="material-icons">delete</a>--}}
                  </td>
                </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

{{--@section('script')--}}
{{--<script type="text/javascript">--}}
{{--$('#delete-user').on('click', function(event){--}}
{{--event.preventDefault();--}}
{{--alert('sadfasdf');--}}
{{--});--}}
{{--</script>--}}
{{--@endsection--}}

