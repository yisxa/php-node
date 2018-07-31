<main>
       <div>

        <div id="newid1">
          <h2 id="newid">Database Table</h2>
          <h4 id="newid">Information from database</h4>
          <a href="./includes/add_data.php" ""><button type="button">Add New Record!</button></a>
        </div>
        <br>
        <table>
          <tr>
		    <th>Index</>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Mobiles</th>
            <th>Action</th>
          </tr>
          <?php
            // insert table data from database
            $stmt = $conn->prepare('SELECT * FROM contacts ORDER BY id ASC');
            $stmt->execute();
            $results = $stmt->fetchAll();
            foreach ($results as $row) {

          ?>

          <tr>
			       <td><?=$row['id']; ?></td>
            <td><?=$row['first_name']; ?></td>
            <td><?=$row['last_name']; ?></td>
            <td><?=$row['cell_no']; ?></td>
            <td>
              <a href="./includes/edit_data.php?id=<?=$row['id'];?>">Edit</a>
              <a href="./includes/delete_data.php?id=<?=$row['id'];?>">Delete</a>
            </td>

          </tr>

          <?php
            }

           ?>

        </table>
       </div>
</main>


