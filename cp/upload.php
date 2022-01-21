


<?php
/*
$max_no_img=4; // Maximum number of images value to be set here

echo "<form method=post action=addMovies.php enctype='multipart/form-data'>";
echo "<table border='0' width='400' cellspacing='0' cellpadding='0' align=center>";
for($i=1; $i<=$max_no_img; $i++){
echo "<tr><td>Images $i</td><td>
<input type=file name='images[]' class='bginput'></td></tr>";
}

echo "<tr><td colspan=2 align=center><input type=submit value='Add Image'></td></tr>";
echo "</form> </table>";
*/
?>
<form action="addmovies1.php" method="post" enctype="multipart/form-data">
File: <input type="file" name="file[]" value="C:/ever.txt"/><br/>
File: <input type="file" name="file[]"/><br/>
File: <input type="file" name="file[]"/><br/>
<input type="submit" name="submit" value="Upload"/>
</form>
</form>

