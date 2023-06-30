<?php
include 'dbconn.php';
include('framework/html_head.php');
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $conn->query("INSERT into fotopembalap (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                
                ?>
                <h1 class="text-center mt-5 text-success"><strong>UPLOAD BERHASIL</strong></h1>
                <h5 class="text-center "><?php echo $fileName; ?></h5>
                <h5 class="text-center ">berhasil di upload.</h5>
                <div class="text-center">
  <div class="spinner-border" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>
                <?php
                $page = "index.php?page=foto_rider";
                $sec = "3";
                header("Refresh: $sec; url=$page");

            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>