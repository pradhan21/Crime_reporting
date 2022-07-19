<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <table border=1 cellspacing=0 cellpadding=10>
            <tr>
                <td>#</td>
                <td>NAME</td>
                <td>email</td>
                <td>MAP</td>
            </tr>
            <?php
                include"connection.php";
                $rows=mysqli_query($conn,"SELECT * FROM details ORDER BY id DESC");
                $i = 1;
                foreach($rows as $row):

            ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email'] ?></td>
                <td style="width:450px; height:450px;"><iframe src="https://www.google.com/maps?q=<?php echo $row['latitude']; ?>,<?php echo $row['longitude']; ?>&hl=es;z=14&output=embed" frameborder="0" style="width:100%; height:100%;"></iframe></td>

            </tr>
            <?php endforeach; ?>
        </table>
    </body>
<html>