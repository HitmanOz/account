@extends('Command.layout')
@section('content')
    @section('jumbotron')
        This is Transaction Table.
        @endsection

<table border="2">
    <thead>

    <tr>
        <th>Id</th>
        <th> Name</th>
        <th>Account No</th>
        <th>Current Balance</th>
        <th>Transaction Date</th>
        <th>Active</th>
        <th>Created_At</th>
        <th>Updated At</th>
    </tr>
    </thead>

    <tbody>
   @if(isset($action_edit))
    <tr>
        <form method="post" action="/transactiondetail/edit/{{$action_edit->id}}"->{{csrf_field()}}
            <td></td>
            <td><input type="text" name="name" value="{{$action_edit->name}}"></td>
            <td><input type="number" name="account_no" value="{{$action_edit->account_no}}" ></td>
            <td><input type="number" name="current_balance" value="{{$action_edit->current_balance}}" ></td>
            <td><input type="date" name="transaction_date" value="{{$action_edit->transaction_date}}" ></td>
                       <td><input type="submit" value="update"></td>
        </form>
    </tr>
    @else
    <tr>
        <form method="post" action="/transactiondetail">{{csrf_field()}}
            <td></td>
            <td><input type="text" name="name" placeholder="Name"></td>
            <td><input type="number" name="account_no" placeholder="Account No"></td>
            <td><input type="number" name="current_balance" placeholder="Current Balance"></td>
            <td><input type="date" name="transaction_date" placeholder="Transaction Date"></td>
            <td></td>
            <td></td>
            <td><input type="submit" value="submit"></td>
        </form>
    </tr>
   @endif

     @foreach ($bank as $file)
    <tr>
        <td>{{ $file->id}}</td>
        <td> {{$file->name}}</td>
        <td>{{$file->account_no }}</td>
        <td>{{$file->current_balance}} </td>
        <td> {{$file->transaction_date }}</td>
        <td>{{$file->active }} </td>
        <td> {{$file->created_at}} </td>
        <td>{{$file->upated_at}} </td>
        <td><a href="/transactiondetail/delete/{{$file->id}}"title="Delete this value" onclick="return confirm('Are you sure.')"><button>Delete</button></a>
            <a href="/transactiondetail/edit/{{$file->id}}"title="Edit this value"><button>Edit</button></a></td>
    </tr>
         @endforeach
    </tbody>
</table>

@endsection