<?php

 require_once('db_connect.php');
        if(isset($_POST['btn_submit'])){
          $id = $_POST['txt_id'];
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $cell_no = $_POST['cell_no'];
          if (!empty($fname && $lname && $cell_no)) {
            try{
              $stmt = $conn->prepare("UPDATE contacts SET first_name = :fname, last_name = :lname, cell_no = :cell_no WHERE id = :id");
              $stmt->execute(array(':fname'=>$fname, ':lname'=>$lname,':cell_no'=>$cell_no, ':id'=>$id));
              if($stmt){
                header('Location:../index.php');
              }

            }
            catch(PDOException $e){
              echo $e->getMessage();
            }
          }
          else{
            echo "Input First Name, Last Name and Cell No";
          }
        }
// edit contacts details
        $id = 0;
          $fname = '';
          $lname = '';
          $cell_no = '';
          if(isset($_GET['id'])){
            $id = $_GET['id'];
            $stmt = $conn->prepare("SELECT * FROM contacts WHERE id=:id ");
            $stmt->execute(array(':id'=>$id));
            $row = $stmt->fetch();
            $id = $row['id'];
            $fname= $row['first_name'];
            $lname = $row['last_name'];
            $cell_no = $row['cell_no'];
            echo $id . "\n";
            echo $fname . "\n";
            echo $lname . "\n";
            echo $cell_no . "\n";
          }

 ?>




        <h2>Edit Contacts details</h2>
        <form action="edit.php" method="post" accept-charset="utf-8">
          <table>
            <tr>
              <td>First Name</td>
              <td><input type="text" name="fname" value="<?=$fname;?>"></td>
            </tr>
            <tr>
              <td>Surname</td>
              <td><input type="text" name="lname" value="<?=$lname;?>"></td>
            </tr>
            <tr>
              <td>Mobiles</td>
              <td><input type="text" name="cell_no" value="<?=$cell_no;?>"></td>
            </tr>
            <tr>
              <td ><input type="hidden" name="txt_id" value="<?=$id;?>"></td>
              <td><input type="submit" name="btn_submit"></td>
            </tr>
          </table>
        </form>
<br><br><br>
  <?php
    include 'footer.php';
  ?>


