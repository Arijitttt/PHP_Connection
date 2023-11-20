
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form actions="#" method="POST">
        <table>
            <tr>
                <td>Books </td>
                <td><input type="text" name="books" id=""></td>
            </tr>
            <tr>
                <td>Authors</td>
                <td><input type="text" name="Authors" id=""></td>
            </tr>
            <tr>
                <td>Titles</td>
                <td><input type="text" name="Titles" id=""></td>
            </tr>
            <tr>
                <td>Topics</td>
                <td><input type="text" name="Topics" id=""></td>
            </tr>
            <tr>
                <td>BookShelves</td>
                <td><input type="text" name="Bookshalves" id=""></td>
            </tr>
        
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value="Send Data">
                </td>
            </tr>
        </table>
    </form> -->
    <table align="center" bgcolor="#DDD">
	<form method="post" action="insert.php">
		<tr>
    		<td>Enter Books name: </td>
        	<td><input type="text" name="books"></td>
    	</tr>
		<tr>
    		<td>Enter Author Name: </td>
        	<td><input type="text" name="authors"></td>
    	</tr>
		<tr>
    		<td>Enetr Title: </td>
        	<td><input type="text" name="title"></td>
    	</tr>
		<tr>
    		<td>Enter Topic: </td>
        	<td><input type="text" name="topic"></td>
    	</tr>
        <tr>
    		<td>Enter BookShelves: </td>
        	<td><input type="text" name="bookshelves"></td>
    	</tr>
		<tr>
        	<td align="center" colspan="2">
            	<input type="submit" name="submit" value="Enter">
            </td>
    	</tr>
   	</form>
</table>
<?php include('connect_db.php'); ?>
<?php
if(isset($_REQUEST['submit']))
{
	mysqli_query($con,"INSERT INTO data(Books,Authors,Titles,Topics,BookShelvs)VALUES('$_POST[books]','$_POST[authors]','$_POST[title]','$_POST[topic]','$_POST[bookshelves]')");
	mysqli_close($con);
}
?>
</body>
</html>
