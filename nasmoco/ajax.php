<?php
//Including Database configuration file.
include "config.php";
//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
//Search box value assigning to $Name variable.
   $Name = $_POST['search'];
//Search query.
   $Query = "SELECT * FROM service WHERE no_pol LIKE '%$Name%' AND status!= 'selesai' LIMIT 7"; 
//Query execution
   $ExecQuery = MySQLi_query($conn, $Query);
//Creating unordered list to display result.
   echo '
<table class="table table-active">
      <thead class="bg-secondary">
        <tr>
          <th scope="col">No Polisi</th>
          <th scope="col">Cabang</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
   ';
   //Fetching result from database.
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
       ?>
   <!-- Creating unordered list items.
        Calling javascript function named as "fill" found in "script.js" file.
        By passing fetched result as parameter. -->
    <tbody>
            <?php echo "<tr>
                  <td>$Result[no_pol]</td>
                  <td>$Result[cbg]</td>
                  <td>$Result[status]</td>
              </tr>"; ?>
            </tbody>

   <!-- Below php code is just for closing parenthesis. Don't be confused. -->
   <?php
}}
?>
</table>