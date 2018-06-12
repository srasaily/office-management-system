  @extends('layouts.master')
  @section('title')
    Users List
  @endsection
  @section('content')
    <div class="row">
    <div class="col-md-12">
      <a href="{{ route('users.create') }}" class="btn btn-primary btn-round pull-right">Create User</a>
    </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Users List</h4>
            <p class="card-category"> Here is the list of all users</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                <th style="width: 10%">
                  S.N.
                </th>
                <th style="width: 25%">
                  Name
                </th>
                <th style="width: 25%">
                  Email
                </th>
                <th style="width: 25%">
                  Address
                </th>
                <th style="width: 15%">
                  Action
                </th>
                </thead>
                <tbody>
                <?php $count = 1; ?>
                @foreach($users as $user)
                  <tr>
                    <td>
                      {{$count++}}
                    </td>
                    <td class="text-primary">
                      <a href="/users/{{$user->id}}"> {{$user->name}} </a>
                    </td>
                    <td>
                      {{$user->email}}
                    </td>
                    <td>
                      {{$user->address ? $user->address : 'N/A'}}
                    </td>
                    <td>
                      <a href="{{route('users.edit',$user->id)}}" title="edit" class="material-icons">edit</a>
                      {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'POST']) !!}
                      {{method_field('DELETE')}}
                      {{csrf_field()}}
                      <button title="delete" id="delete-user" class="material-icons" style="color: purple; margin-left: 40%">delete</button>
                      {!! Form::close() !!}
                      {{--<a href="{{route('users.destroy',$user->id)}}" title="delete" class="material-icons">delete</a>--}}
                    </td>
                  </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection

  {{--@section('script')--}}
    {{--<script type="text/javascript">--}}
      {{--$('#delete-user').on('click', function(event){--}}
        {{--event.preventDefault();--}}
        {{--alert('sadfasdf');--}}
      {{--});--}}
    {{--</script>--}}
    {{--@endsection--}}

