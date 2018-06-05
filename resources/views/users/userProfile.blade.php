<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label class="bmd-label-floating">Username *</label>
      <input type="text" class="form-control" name="username">
      @if($errors->first('username'))
        <span style="color: red"> {{$errors->first('username')}}</span>
      @endif
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label class="bmd-label-floating">Email *</label>
      <input type="email" class="form-control" name="email">
      @if($errors->first('email'))
        <span style="color: red"> {{$errors->first('email')}}</span>
      @endif
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label class="bmd-label-floating">Name *</label>
      <input type="text" class="form-control" name="name">
      @if($errors->first('name'))
        <span style="color: red"> {{$errors->first('name')}}</span>
      @endif
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label class="bmd-label-floating">Address *</label>
      <input type="text" class="form-control" name="address">
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
      <input type="text" class="form-control" name="city">
      @if($errors->first('city'))
        <span style="color: red"> {{$errors->first('city')}}</span>
      @endif
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label class="bmd-label-floating">Country *</label>
      <input type="text" class="form-control" name="country">
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
      </div>
    </div>
  </div>
</div>
<button type="submit" class="btn btn-primary pull-right">Update Profile</button>
<div class="clearfix"></div>