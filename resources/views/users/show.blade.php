@extends('layouts.master')
@section('title')
  Details
@endsection

@section('content')
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title">Employee Details</h4>
    </div>

      <div id="information">
        <div class="card-title">
          <h2>Details</h2>
        </div>
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
          </div>
          <div class="col-md-4">
            <div class="card card-profile">
              <div class="card-avatar">
                <img class="img" src="{{ $user->image? asset('storage/'.$user->image) :asset('storage/images/avatar.png') }}" alt="Profile Picture"/>
              </div>
              <div class="card-body">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
