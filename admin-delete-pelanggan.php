<?php 

  include ('conn.php'); 

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['id_user'])) {
          //query SQL
          $id_user_upd = $_GET['id_user'];
          $query = $conn->prepare("DELETE FROM user WHERE id_user = :id_user ");
          //binding data
          $query->bindParam(':id_user',$id_user_upd);
          //eksekusi query
          if ($query->execute()) {
            $status = 'ok';
          }
          else{
            $status = 'err';
          }
          //redirect ke halaman lain
          header('Location: admin-pelanggan.php?status='.$status);
      }  
  }