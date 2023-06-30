<?php 

include('../functions.php');

date_default_timezone_set("Asia/Jakarta"); 
	$hlpNama = $_POST['helpNama'];
	$hlpEmail = $_POST['helpEmail'];
	$hlpMsg = $_POST['helpMessages'];
    $hlpDate = date("d/m/Y");
    $hlpTime = date("H:i:s")." GMT+7";




    $sql = 	"INSERT INTO reports (name, email, sent_time, sent_date,messages )
                VALUES('$hlpNama','$hlpEmail','$hlpTime', '$hlpDate','$hlpMsg')";
    
    if($conn->query($sql)){
      echo "<p>Proses insert gagal.</p>";
        echo "<script>swal({
            title: \"Report Sent!\",
            text: \"Laporanmu berhasil dikirim ke admin XELVII.com\",
            icon: \"success\",
            buttons: [
              'HOME',
              'OK'
            ],
          }).then(function(isConfirm) {
            if (isConfirm) {
              location.reload();
            } else {
                window.location.href = \"index.php\";
            }
          });</script>";
        echo "<script>$('#modalAdd').modal('hide');</script>";
        

    } else {
        echo "<p>Proses insert gagal.</p>";
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<a href='index.php?page=add_rider' class='btn btn-primary'>Coba lagi</a>";
    }

?>