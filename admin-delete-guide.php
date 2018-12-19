<?php 

  include ('conn.php'); 

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['id_guide'])) {
          //query SQL
          $id_guide_upd = $_GET['id_guide'];
          $query = $conn->prepare("DELETE FROM guide WHERE id_guide = :id_guide ");
          //binding data
          $query->bindParam(':id_guide',$id_guide_upd);
          //eksekusi query
          if ($query->execute()) {
            $status = 'ok';
          }
          else{
            $status = 'err';
          }
          //redirect ke halaman lain
          header('Location: admin-guide.php?status='.$status);
      }  
  }