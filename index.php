<?php 
require 'classes/Database.php';

$database = new Database;

$database->query('SELECT * FROM posts');
$rows  = $database->resultset();
//print_r($rows);

?>

<h1> Post </h1>
<div>
<?php foreach ($rows as $row) : ?>
    <div>
        </h3><?php echo $rows['title']; ?> </h3>
        <p><?php echo $rows['body'];?></p>
    </div>
<?php endforeach; ?>
</div>x