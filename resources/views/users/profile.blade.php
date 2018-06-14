@extends('layouts.master')
@section('title')
  Profile
@endsection
@section('content')
  <div class="row">
    <div class="col-md-12">
      <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-round pull-right">Edit Profile</a>
    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title">Profile</h4>
    </div>
    <div id="information">
      <br><br>
      <div class="row">
        <div class="col-md-8">
          <div class="tim-typo">
            <span class="tim-note" style="color:#4e555b; font-size: large">Username</span>
            <p class="text-primary" style="font-size: medium">
              {{$user->username ? $user->username : 'N/A'}}
            </p>
          </div>
          <div class="tim-typo">
            <span class="tim-note" style="color:#4e555b; font-size: large">Email</span>
            <p class="text-primary" style="font-size: medium">
              {{$user->email}}
            </p>
          </div>
          <div class="tim-typo">
            <span class="tim-note" style="color:#4e555b; font-size: large">Name</span>
            <p class="text-primary" style="font-size: medium">
              {{$user->name ? $user->name : 'N/A'}}
            </p>
          </div>
          <div class="tim-typo">
            <span class="tim-note" style="color:#4e555b; font-size: large">Address</span>
            <p class="text-primary" style="font-size: medium">
              {{$user->address ? $user->address : 'N/A'}}
            </p>
          </div>
          <div class="tim-typo">
            <span class="tim-note" style="color:#4e555b; font-size: large">City</span>
            <p class="text-primary" style="font-size: medium">
              {{$user->city ? $user->city : 'N/A'}}
            </p>
          </div>
          <div class="tim-typo">
            <span class="tim-note" style="color:#4e555b; font-size: large">Country</span>
            <p class="text-primary" style="font-size: medium">
              {{$user->country ? $user->country : 'N/A'}}
            </p>
          </div>
          <div class="tim-typo">
            <span class="tim-note" style="color:#4e555b; font-size: large">About me</span>
            <p class="text-primary" style="font-size: medium">
              {{$user->about_me ? $user->about_me : 'N/A'}}
            </p>
          </div>
          <div class="tim-typo">
            <span class="tim-note" style="color:#4e555b; font-size: large">Attendance</span>
          <div class="col-md-12">
            @if ($user->attendances()->whereDate('created_at', date('Y-m-d')))
              <span style="color:green">PRESENT</span>
            @else
            <a href="{{ route('attendance.markUserPresent') }}" class="btn btn-success btn-round">Mark</a>
          @endif
          </div>
          </div>
          </div>
          <div class="col-md-4">
            <div class="card card-profile">
              <div class="card-avatar">
                <img class="img"
                     src="{{ $user->image? asset('storage/'.$user->image) :asset('storage/images/avatar.png') }}"
                     alt="Profile Picture"/>
              </div>
              <div class="card-body">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
