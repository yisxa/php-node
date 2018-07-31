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

	<!--		<tr>
          <td>2</td>
            <td>Lois</td>
            <td>Griffin</td>
            <td>98307</td>
          </tr>
          <tr>
			<td>3</td>
            <td>Joe</td>
            <td>Swanson</td>
            <td>98308</td>
          </tr>
          <tr>
			<td>4</td>
            <td>Cleveland</td>
            <td>Brown</td>
            <td>98309</td>
          </tr>
        -->
        </table>
       </div>
</main>


