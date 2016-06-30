<!--   Stephanie Imperial,
 in web browser use http://localhost/assign8/index.php
 compute2.php  index.php -->
<?php
print <<< HERE
<form action='Compute2.php'>
Rectangle 1: Length<input type='text' name='length[0]'/>
             Width<input type='text' name='width[0]'/><br>
Rectangle 2: Length<input type='text' name='length[1]'/>
             Width<input type='text' name='width[1]'/><br>
Rectangle 3: Length<input type='text' name='length[2]'/>
             Width<input type='text' name='width[2]'/><br><br>
<input type='submit' name='submit' value='Compute Area'>
<br>
</form>
HERE;
?>