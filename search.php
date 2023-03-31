<?php
include("config2.php");
if(isset($_POST['input'])){
	$input= $_POST['input'];
	$query ="SELECT * FROM subscription WHERE m_no LIKE '{$input}%'";
	$result = mysqli_query($con, $query);
	if(mysqli_num_rows($result) > 0){?>
<table class="table table-bordered table-striped mt-4">
	<thead>
		<tr>
			
			<th>Membership No.</th>
			<th>Month</th>
			<th>Amount</th>
			<th>Date</th>
		</tr>
</thead>
<tbody>
<?php
while($row = mysqli_fetch_assoc($result)){
	
	$m_no = $row['m_no'];
	$month = $row['month'];
	$amount = $row['amount'];
	$created_at = $row['created_at'];
	?>
	<tr>
		
		<td><?php echo $m_no;?></td>
		<td><?php echo $month;?></td>
		<td><?php echo $amount;?></td>
		<td><?php echo $created_at;?></td>
		
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