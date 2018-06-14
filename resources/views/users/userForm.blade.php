<div class="row">
    <div class="col-md-4" style="margin-left: 30%">
      <div class="card card-profile">
        <div class="card-avatar">
          <img class="img" src="{{ isset($user) && $user->image   ? asset('storage/'.$user->image) : asset('default/avatar.png') }}"/>
        </div>
        <div class="card-body">
          <input type="file" name="image">
        </div>
        @if($errors->first('image'))
          <span style="color: red"> {{$errors->first('image')}}</span>
        @endif
      </div>
    </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label class="bmd-label-floating">Username *</label>
      {{--<input type="text" class="form-control" name="username">--}}
      {!! Form::text('username', null, ['class' => 'form-control']) !!} {{--laravel collective for model binding--}}
      @if($errors->first('username'))
        <span style="color: red"> {{$errors->first('username')}}</span>
      @endif
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label class="bmd-label-floating">Email *</label>
      {!! Form::text('email', null, ['class' => 'form-control']) !!}
      @if($errors->first('email'))
        <span style="color: red"> {{$errors->first('email')}}</span>
      @endif
    </div>
  </div>
</div>
@if ($editAction==false)
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label class="bmd-label-floating">Password *</label>
      {!! Form::password('password', ['class' => 'form-control']) !!}
      @if ($errors->first('password'))
        <span style="color: red"> {{$errors->first('password')}}</span>
      @endif
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label class="bmd-label-floating">Confirm Password *</label>
      {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
      @if ($errors->first('password_confirmation'))
        <span style="color: red"> {{$errors->first('password_confirmation')}}</span>
      @endif
    </div>
  </div>
</div>
@endif
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label class="bmd-label-floating">Name *</label>
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
      @if($errors->first('name'))
        <span style="color: red"> {{$errors->first('name')}}</span>
      @endif
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label class="bmd-label-floating">Address *</label>
      {!! Form::text('address', null, ['class' => 'form-control']) !!}
      @if($errors->first('address'))
        <span style="color: red"> {{$errors->first('address')}}</span>
      @endif
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label class="bmd-label-floating">City *</label>
      {!! Form::text('city', null, ['class' => 'form-control']) !!}
      @if($errors->first('city'))
        <span style="color: red"> {{$errors->first('city')}}</span>
      @endif
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label class="bmd-label-floating">Country *</label>
      {!! Form::text('country', null, ['class' => 'form-control']) !!}
      @if($errors->first('country'))
        <span style="color: red"> {{$errors->first('country')}}</span>
      @endif
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label>About Me</label>
      <div class="form-group">
        <label class="bmd-label-floating">Write something about yourself.</label>
        <textarea class="form-control" rows="5" name="about_me"></textarea>
        {{--{!! Form::text('About me', 'null', ''', ['class' => 'form-control']) !!}--}}
      </div>
    </div>
  </div>
</div>
<button type="submit" class="btn btn-primary pull-right">Save</button>
<div class="clearfix"></div>