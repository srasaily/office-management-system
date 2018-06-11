@extends ('layouts.master')
@section('title')
  Profile
@endsection
@section('page-header')
  Profile
@endsection
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Create User</h4>
        </div>
        <div class="card-body">
          <br>
          {!! Form::open(['route' => 'users.store', 'method' => 'post', 'files' => true]) !!}
          @include('users.userForm', ['editAction' => false])
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@endsection
