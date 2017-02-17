<html>
<head></head>
<body>
<table border="2">
    <thead>
    <tr>
        <th>Id</th>
        <th>Account Name</th>
        <th>Account Type</th>
        <th>Account No</th>
        <th>Created At</th>
        <th>Updated At</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <form method="post" action="/account">{{csrf_field()}}
            <td></td>
            <td><input type="text" name="account_name" placeholder="Account Name"></td>
            <td><input type="text" name="account_type" placeholder="Account Type"></td>
            <td><input type="text" name="account_no" placeholder="Account No"></td>
            <td><input type="submit" value="submit"></td>
        </form>
    </tr>
    <?php foreach ($accounts as $account) { ?>
    <tr>
        <td><?php echo $account->id ?></td>
        <td><?php echo $account->account_name ?></td>
        <td><?php echo $account->account_type ?></td>
        <td><?php echo $account->account_no ?></td>
        <td><?php echo $account->created_at ?></td>
        <td><?php echo $account->updated_at ?></td>
    </tr>
    <?php } ?>
    </tbody>
</table>

</body>

</html>