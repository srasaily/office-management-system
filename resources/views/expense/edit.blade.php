@extends('layouts.master')
@section('title')
  Expenses
@endsection
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Create New Expense</h4>
        </div>
        <div class="card-body">
          {!! Form::model($expense, ['route' => ['expense.update', $expense->id], 'method' => 'PATCH']) !!}
          @include('expense.expenseForm')
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@endsection