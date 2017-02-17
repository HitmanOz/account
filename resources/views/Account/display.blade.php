<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container ">
    <div class="jumbotron text-center"><h3><b>This is account table.</b></h3></div>

<table class="table table-bordered table-striped table-hover table-condensed">
    <thead>
    <tr>
        <th>Id</th>
        <th>Account Name</th>
        <th>Account Type</th>
        <th>Account No</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Action</th>
    </tr>
    </thead>

    <tbody>
    @if(isset($account_edit))
    <tr>
        <form method="post" action="/account/edit/{{$account_edit->id}}">{{csrf_field()}}
            <td></td>
            <td><input type="text" class="form-control" name="account_name" value="{{$account_edit->account_name}}"></td>
            <td><input type="text" class="form-control" name="account_type" value="{{$account_edit->account_type}}"></td>
            <td><input type="text"class="form-control" name="account_no" value="{{$account_edit->account_no}}"></td>
            <td><input type="submit" class="btn btn-info" value="update"></td>
        </form>

    </tr>
    @else
        <tr>
        <form method="post" action="/account">{{csrf_field()}}
            <td></td>
            <td><input type="text" class="form-control" name="account_name" placeholder="Account Name"></td>
            <td><input type="text" class="form-control" name="account_type" placeholder="Account Type"></td>
            <td><input type="text"class="form-control" name="account_no" placeholder="Account No"></td>
            <td><input type="submit" class="btn btn-info" value="submit"></td>
        </form>
    </tr>
    @endif

     @foreach ($accounts as $account)
    <tr>
        <td>{{ $account->id }}</td>
        <td>{{ $account->account_name }} </td>
        <td>{{ $account->account_type }}</td>
        <td>{{ $account->account_no }}</td>
        <td>{{ $account->created_at }}</td>
        <td>{{ $account->updated_at }}</td>
        <td><a href="/account/delete/{{ $account->id }}" title="Delete this value" onclick="return confirm('Are you sure to delete')"><button class="btn btn-danger">Delete</button></a>
            <a href="/account/edit/{{ $account->id }}" title="Edit this value"><button class="btn btn-primary">Edit</button></a></td>
    </tr>
     @endforeach
    </tbody>
</table>
</div>

</body>

</html>