<?php 

echo '<form id="add_form" action="users.php" method="POST">';
 //echo "<input type='hidden' name='id' value='$currentId'>"; 
    echo '<table>';
        echo '<tr>';
            echo '<th>name : </th>';
            echo '<td><input type="text" name="name"></td>';
        echo '</tr>';
        echo '<tr>';
            echo '<th>email : </th>';
            echo '<td><input type="text" name="email"></td>';
        echo '</tr>';
        echo '<tr>';
            echo '<th></th>';
            echo '<td><input type="submit" value="Save changes" /></td>';
        echo '</tr>';
    echo '</table>';
echo '</form>';
?>