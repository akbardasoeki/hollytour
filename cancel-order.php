<?php 

  include ('conn.php'); 

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['id_booking'])) {
          //query SQL
          $id_booking_upd = $_GET['id_booking'];
          $query = $conn->prepare("DELETE FROM booking WHERE id_booking = :id_booking ");
          //binding data
          $query->bindParam(':id_booking',$id_booking_upd);
          //eksekusi query
          if ($query->execute()) {
            $status = 'ok';
          }
          else{
            $status = 'err';
          }
          //redirect ke halaman lain
          header('Location: booking-user.php?status='.$status);
      }  
  }