<?php
//include("includes/function.php");
include("includes/config.php");
//check_session();
$id=$_GET['id'];
$dom=$_GET['type'];

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Language" content="ar-sa">
        <!-- <link rel="stylesheet" media="(max-width:1024px)" href="includes/style2.css" />
        <link rel="stylesheet" type="text/css" href="includes/style.css"/> -->
    </head>
    <body>
        <form method="post" action="file_insert.php" enctype="multipart/form-data">
            إختر ملفاً : <input type="file" name="file"/><br/><br/>
            <input type="url" class="url"  placeholder="add link here" name="url"/><br/><br/>
            <!--<select name="select">
                <option selected disabled> </option>
                <?php /*
                    $result=mysql_query("SELECT *FROM files");
                    while($row=mysql_fetch_array($result)){
                        echo'<option value="'.$row['name'].'">'.$row['descripe'].'</option>';
                    }
                    */
                ?>
            </select> -->
            <br/>
            <br/>
            وصف الملف : <input type="text" name="text" required/>
            <input type="number" style="display: none;" name="id" value="<?php echo$id; ?>"/>
            <input type="hidden" name="dom" value="<?php echo($dom); ?>"/>
            <input type="submit" value="file upload">
        </form>    
    </body>
</html>