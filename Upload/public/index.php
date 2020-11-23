<!DOCTYPE html>
<html>
    <head>
        <meta charseet="uft-8">
        <title>Multiple file Upload</title>
    </head>
    <body>
        <form action="uploads.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple>
        <input type="submit" value="Upload">
        </form>
    </body>
</html>

<?php 
$dir ="uploads";
$scan = array_diff(scandir($dir), array('..','.'));


if(is_array($scan)){
    echo "<div class='container'>";
    foreach($scan as $image){
        echo
            "<div class='col-md-3'>".
            "<div class='panel panel-default'>".

            "<img src='uploads/$image' style='width: 25%'>".
            "</div>".
            "<div class='panel-body'>".
            "<p>Nom : $image</p>".
            "<a href='delete.php?file=$image' class='btn btn-danger'>Delete</a>".
            "</div>".
            "</br>".
            "</div>";

    }
    echo "</div> ";
}