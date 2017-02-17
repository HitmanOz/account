<html>
<head></head>
<body>
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
    <?php foreach ($bank as $file) { ?>
    <tr>
        <td><?php echo $file->id ?></td>
        <td><?php echo $file->name ?></td>
        <td><?php echo $file->account_no ?></td>
        <td><?php echo $file->current_balance ?></td>
        <td><?php echo $file->transaction_date ?></td>
        <td><?php echo $file->active ?></td>
        <td><?php echo $file->created_at ?></td>
        <td><?php echo $file->upated_at ?></td>
    </tr>
    <?php } ?>
    </tbody>
</table>

</body>

</html>