<!-- addform -->
<?php 
echo '<form id="add_form" action="add_user.php" method="post">';
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
            echo '<td><input type="submit" value="Add" /></td>';
        echo '</tr>';
    echo '</table>';
echo '</form>';
?>