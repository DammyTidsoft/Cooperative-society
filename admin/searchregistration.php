<?php
include("config2.php");
if(isset($_POST['input'])){
	$input= $_POST['input'];
	$query ="SELECT * FROM registration WHERE fname LIKE '{$input}%'";
	$result = mysqli_query($con, $query);
	if(mysqli_num_rows($result) > 0){?>
<table class="table table-bordered table-striped mt-4">
	<thead>
		<tr>
			
			<th>Fullname</th>
			<th>sex</th>
			<th>age</th>
			<th>Date of Birth</th>
            <th>Present Home Address</th>
            <th>Present Contact Address</th>
            <th>Email</th>
            <th>(I)Next of kin</th>
            <th>Contact Address</th>
            <th>Relationship</th>
            <th>Tel No</th>
            <th>(II)Next of kin</th>
            <th>Contact Address</th>
            <th>Relationship</th>
            <th>Tel No</th>
            <th>Previous Cooperative</th>
            <th>Name</th>
            <th>Position Held</th>
            <th>Issue</th>
		</tr>
</thead>
<tbody>
<?php
while($row = mysqli_fetch_assoc($result)){
	
	$fname = $row['fname'];
	$sex = $row['sex'];
	$age = $row['age'];
    $dob = $row['dob'];
    $haddress = $row['haddress'];
    $caddress = $row['caddress'];
    $email = $row['email'];
    $ikinname = $row['ikinname'];
    $ikinaddress = $row['ikinaddress'];
    $ikinrel = $row['ikinrel'];
    $ikintel = $row['ikintel'];
    $iikinname = $row['iikinname'];
    $iikinaddress = $row['iikinaddress'];
    $iikinrel = $row['iikinrel'];
    $iikintel = $row['iikintel'];
    $have = $row['have'];
    $namecoop = $row['namecoop'];
    $position = $row['position'];
    $reason = $row['reason'];
	?>
	<tr>
		
		<td><?php echo $fname;?></td>
		<td><?php echo $sex;?></td>
		<td><?php echo $age;?></td>
		<td><?php echo $dob;?></td>
		<td><?php echo $haddress;?></td>
        <td><?php echo $caddress;?></td>
        <td><?php echo $email;?></td>
        <td><?php echo $ikinname;?></td>
        <td><?php echo $ikinaddress;?></td>
        <td><?php echo $ikinrel;?></td>
        <td><?php echo $ikintel;?></td>
        <td><?php echo $iikinname;?></td>
        <td><?php echo $iikinaddress;?></td>
        <td><?php echo $iikinrel;?></td>
        <td><?php echo $iikintel;?></td>
        <td><?php echo $have;?></td>
        <td><?php echo $namecoop;?></td>
        <td><?php echo $position;?></td>
        <td><?php echo $reason;?></td>
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