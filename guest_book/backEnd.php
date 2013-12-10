<?php
include "config.php";
$rows = MessageDAO::getAllMessages();

?>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
<div class="span12 well" style="margin-top:100px">
    <center><b ><font size='7' face='calibre'>List Of Messages</font></b></center>
<table class="table table-strip table-bordered" style='margin-top:50px'>

    <tr>
<thead>
    <th class='header'><b>Id</b></th>
    <th class='blue header'><b>Name</b></th>
    <th class='green header'><b>Email</b></th>
    <th class='red header'><b>Message</b></th>
    <th class='yellow header'><b>Date Posted</b></th>
    <th class='blue header'><b>Approved</b></th>
    <th class='header'><b>Action</b></th>
</thead>
</tr>
<?php
 foreach($rows as $row):?>
    <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['name']?></td>
        <td><?=$row['email']?></td>
        <td><?=$row['message']?></td>
        <td><?=$row['date_posted']?></td>
        <td><?=$row['is_approve']?></td>
         <td><?php
            if($row['is_approve'] == 'N'){
                echo "<a href= 'approve.php?id=".$row['id']."' class='btn btn-primary'>Approve</a>";
            }else{
                echo "<a href= 'reject.php?id=".$row['id']."' class='btn btn-warning'>Reject</a>";
            }
        ?>&nbsp<a href="delete.php?id=<?=$row['id']?>" class="btn btn-danger">Delete</a></td>
    </tr>
   <?php endforeach;?>
<?php            
?>
<tr><td colspan="10"><a href="frontEnd.php" class="btn btn-success">Add new record</a>
</td></tr>
</table>
</div>