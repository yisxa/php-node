<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../style.css">
  <title>Add in database</title>
</head>
<body>
  <?php
        require_once('db_connect.php');
        if(isset($_POST['btn_submit'])){
          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $cell_no = $_POST['cell_no'];
          if (!empty($fname && $lname && $cell_no)) {
            try{
              $stmt = $conn->prepare("INSERT INTO contacts (first_name, last_name, cell_no) VALUES (:fname, :lname, :cell_no)");
              $stmt->execute(array(':fname'=>$fname, ':lname'=>$lname,':cell_no'=>$cell_no));
              header('Location:../index.php');
            }
            catch(PDOException $e){
              echo $e->getMessage();
            }
          }
          else{
            echo "Input First Name, Last Name";
          }
        }

       ?>

        <h2>Add new contacts into the Database</h2>
        <form action="add_data.php" method="post" accept-charset="utf-8">
          <table>
            <tr>
              <td>First Name</td>
              <td><input type="text" name="fname"></td>
            </tr>
            <tr>
              <td>Surname</td>
              <td><input type="text" name="lname"></td>
            </tr>
            <tr>
              <td>Mobiles</td>
              <td><input type="text" name="cell_no"></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="btn_submit"></td>
            </tr>
          </table>
        </form>
<br><br><br>
  <?php
    include 'footer.php';
  ?>

</body>
</html>

