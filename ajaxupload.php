<?php
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp', 'pdf', 'doc', 'ppt'); // valid extensions
$path = 'uploads/'; // upload directory
if (!empty($_POST['name']) || $_FILES['image']) {
    $img = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    // get uploaded file's extension
    $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    // can upload same image using rand function
    $final_image = $img;
    // check's valid format
    if (in_array($ext, $valid_extensions)) {
        $path = $path . strtolower($final_image);
        if (move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '\uploads/' . $_FILES["image"]['name'])) {

            // $idimg = $_POST['id_img'];
            $name = $_POST['name'];
            $img_title = $_POST['imgtitle'];

            //include database configuration file
            include_once '_php/functions.php';
            //insert form data in the database
            $insert = $conn->query("INSERT users_img (name,file_name,img_title) VALUES ('" . $name . "','" . $path . "','" . $img_title . "')");
            //echo $insert?'ok':'err';
        }
    } else {
        echo 'invalid';
    }
}
echo "<script>Berhasil!</script>";
