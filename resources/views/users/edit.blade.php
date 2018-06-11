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
          <h4 class="card-title">Edit User</h4>
        </div>
        <div class="card-body">
          {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PATCH']) !!}
          {{csrf_field()}}
          @include('users.userForm', ['editAction' => true])
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@endsection