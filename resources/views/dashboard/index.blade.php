@extends('layouts.master')
@section('title')
  Dashboard
  @endsection
@section('content')
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-info card-header-icon">
          <div class="card-icon">
            <i class="fa fa-user"></i>
          </div>
          <p class="card-category">Users</p>
          <h3 class="card-title">+{{ $userCount }}</h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="material-icons">update</i> Just Updated
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-success card-header-icon">
          <div class="card-icon">
            <i class="material-icons">store</i>
          </div>
          <p class="card-category">Expenditure</p>
          <h3 class="card-title">${{ $expenseTotal }}</h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="material-icons">money</i> Total
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-header card-header-warning">
          <h4 class="card-title">Employees Stats</h4>
          <p class="card-category">New Employees</p>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-hover">
            <thead class="text-warning">
            <th>S.N.</th>
            <th>Name</th>
            <th>Address</th>
            <th>Country</th>
            </thead>
            <tbody>
            <?php $count = 1; ?>
            @foreach($users as $user)
            <tr>
              <td>{{ $count++ }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->address ? $user->address : 'N/A' }}</td>
              <td>{{ $user->country ? $user->address : 'N/A' }}</td>
            </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  @endsection