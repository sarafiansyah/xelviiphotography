<?php 

include('../dbconn.php');

if(isset($_REQUEST['req'])){
$req = $_REQUEST['req'];

if($req=="rows"){
$result = $conn->query("SELECT pembalapmotogp.id,pembalapmotogp.nomor,nama_depan,nama_belakang,pembalapmotogp.status,timmotogp.nama_tim, motorbalap.mesin,motorbalap.model,motorbalap.kecepatan, fotopembalap.file_name, pembalapmotogp.id_fotopembalap FROM pembalapmotogp 
						LEFT JOIN timmotogp ON pembalapmotogp.id_timmotogp=timmotogp.id
						LEFT JOIN motorbalap ON pembalapmotogp.id_motorbalap=motorbalap.id
                        LEFT JOIN fotopembalap ON pembalapmotogp.id_fotopembalap=fotopembalap.id;");

while($row=$result->fetch_assoc()){
    $data[]=$row;
};


}

if($req=="nama_tim"){
$sql = "SELECT * FROM timmotogp";
    $result = $conn->query($sql);

    while($row=$result->fetch_assoc()){
        $data[]=$row;
    };

}

if($req=="motorbalap"){
    $sql = "SELECT * FROM motorbalap";
        $result = $conn->query($sql);
    
        while($row=$result->fetch_assoc()){
            $data[]=$row;
        };
    
    }


echo json_encode($data);

}
?>