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
          <h4 class="card-title">Create Profile</h4>
        </div>
        <div class="card-body">
          {!! Form::open(['route' => 'users.store', 'method' => 'post']) !!}
          @include('users.userProfile')
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@endsection