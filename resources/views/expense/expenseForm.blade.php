<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label class="bmd-label-floating">Expense Date *</label>
      {{--<input type="text" class="form-control" name="username">--}}
     {!! Form::date('expense_date', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label class="bmd-label-floating">Title *</label>
{!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label class="bmd-label-floating">Amount Spent *</label>
{!! Form::text('amount_spent', null, ['class' => 'form-control']) !!}
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label>Remarks</label>
      <div class="form-group">
        <label class="bmd-label-floating">Write any remarks for this expenditure.</label>
        <textarea class="form-control" rows="5" name="remarks"></textarea>
        {{--{!! Form::text('About me', 'null', ''', ['class' => 'form-control']) !!}--}}
      </div>
    </div>
  </div>
</div>
<button type="submit" class="btn btn-primary pull-right">Create Expense</button>
<div class="clearfix"></div>