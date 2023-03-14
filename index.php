<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */
require "autoload.php";

if(isset($_POST["formName"]))
{
    $uploader = new Uploader();
    $media = $uploader->upload($_FILES, "image");
    var_dump($media);
}
else
{
    ?>
    <!DOCTYPE html>
    <html lang="fr">
        <body>
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="file" name="image" />
                <input type="hidden" name="formName" value="fileUpload" />
                <input type="submit"/>
            </form>
        </body>
    </html>
<?php
}
?>











