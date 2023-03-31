<?php
include("config2.php");
if(isset($_POST['input'])){
	$input= $_POST['input'];
	$query ="SELECT * FROM contact WHERE name LIKE '{$input}%'";
	$result = mysqli_query($con, $query);
	if(mysqli_num_rows($result) > 0){?>
<table class="table table-bordered table-striped mt-4">
	<thead>
		<tr>
			
			<th>Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Messages</th>
            
		</tr>
</thead>
<tbody>
<?php
while($row = mysqli_fetch_assoc($result)){
	
	$name = $row['name'];
	$email = $row['email'];
	$address = $row['address'];
    $messages = $row['messages'];
	?>
	<tr>
		
		<td><?php echo $name;?></td>
		<td><?php echo $email;?></td>
		<td><?php echo $address;?></td>
        <td><?php echo $messages;?></td>
        
	</tr>
	<?php
}
?>
</tbody>
</table>
<?php
}
else{
	echo "<h6 class-'text-danger text-center mt-3'> No data Found</h6>";
	}
}
?>