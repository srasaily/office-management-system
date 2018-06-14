@extends('layouts.master')
@section('title')
  Attendance
@endsection
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
          <h4 class="card-title mt-0">Attendance</h4>
          <p class="card-category"> Here is the list of today's attendance of users</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead class="text-primary">
              <th style="width: 5%">S.N.</th>
              <th style="width: 10%">Name</th>
              <th style="width: 10%">Email</th>
              <th style="width: 10%">Attendance</th>
              </thead>
              <tbody>
              <?php $count = 1 ?>
              @foreach($users as $user)
                <tr>
                  <td>{{ $count++ }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{!! ($user->attendances()->whereDate('created_at', date("Y-m-d"))->first()) ? "<span style='color: green'> PRESENT</span>" : "<span style='color: red'>ABSENT</span>" !!}</td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
