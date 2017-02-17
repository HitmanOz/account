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
             <?php foreach ($accounts as $account) { ?>
             <tr>
        <td><?php echo $account->id ?></td>
        <td><?php echo $account->account_name ?></td>
        <td><?php echo $account->account_type ?></td>
        <td><?php echo $account->account_no ?></td>
        <td><?php echo $account->created_at ?></td>
        <td><?php echo $account->upated_at ?></td>
    </tr>
             <?php } ?>
    </tbody>
</table>

</body>

</html>