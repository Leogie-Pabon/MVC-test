<?php include "views/includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <br>
    <br>
    <title>Admin Dashboard</title>
    <!-- Include jQuery and DataTables CSS and JS files -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" href="<?php echo URL;?>public/styles/bootstrap.css">
	<link rel="stylesheet" href="<?php echo URL;?>public/styles/bootstrap-icons.css">
	<link rel="stylesheet" href="<?php echo URL;?>public/styles/custom.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
</head>
<body>

<main class="text-center">
    <div id="content" class="mx-auto">
        <center><h1>ADMIN DASHBOARD</h1></center>
        <br>
        <br>
        <hr>
        <center><h1>USERS</h1></center>
        <div style="padding: 50px"; class="table-container">
            <table id="usertable" class="table table-bordered display compact" style="width:100%">
                <thead>
                    <tr>
                        <th>UserID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($user as $userData): ?>
                        <tr>
                            <td><?= $userData['user_id']; ?></td>
                            <td><?= $userData['first_name']; ?></td>
                            <td><?= $userData['last_name']; ?></td>
                            <td><?= $userData['email']; ?></td>
                            <td><?= $userData['password']; ?></td>
                            <td><?= $userData['type']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <hr>

    <div id="content" class="mx-auto">
        <center><h1>Requests</h1></center>
        <div style="padding: 50px"; class="table-container">
            <table id="phonetable" class="table table-bordered display compact" style="width:100%">
                <thead>
                    <tr>
                        <th>idnumber</th>
                        <th>firstame</th>
                        <th>lastname</th>
                        <th>natureofrequest</th>
                        <th>position</th>
                        <th>gmail</th>
                        <th>amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Iphones as $disData): ?>
                        <tr>
                            <td><?= $disData['idnumber']; ?></td>
                            <td><?= $disData['firstname']; ?></td>
                            <td><?= $disData['lastname']; ?></td>
                            <td><?= $disData['natureofrequest']; ?></td>
                            <td><?= $disData['position']; ?></td>
                            <td><?= $disData['gmail']; ?></td>
                            <td><?= $disData['amount']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</main>

<script>
    $(document).ready(function () {
        // Initialize DataTable for users
        $("#usertable").DataTable();
        // Initialize DataTable for phones
        $("#phonetable").DataTable();
    });

    
</script>

</body>
</html>
<?php
include 'views/includes/footer.php';
?>
