<!doctype html>
<html>
<head>
<title>Home</title>
</head>
<body>
    <h2>Library Connection with mysql database :-</h2>
	<table align="center" border="1" bgcolor="YELLOW" padding="10px">
		<tr>
			<th>Books</th>
			<th>Authors</th>
			<th>Titles</th>
            <th>Topics</th>
			<th>BookShelves</th>
		</tr>
	<?php include('connect_db.php');?>
	<?php
	$query="SELECT Books,Authors,Titles,Topics,BookShelvs FROM data";
	$data=mysqli_query($con,$query);
	$total=mysqli_num_rows($data);
	if($total!=0)
	{
		while($result=mysqli_fetch_assoc($data))
		{
			echo ("<tr align='center'>
					<td>".$result['Books']."</td>
					<td>".$result['Authors']."</td>
					<td>".$result['Titles']."</td>
					<td>".$result['Topics']."</td>
                    <td>".$result['BookShelvs']."</td>
				</tr>" );
		}
	}
	mysqli_close($con);
	?>
	</table>
</body>
</html>