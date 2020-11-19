<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

$country = filter_input(INPUT_GET, 'country', FILTER_SANITIZE_STRING);

$stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<table id='result-table'>
        <thead>
          <tr>
            <th>
              Name
            </th>
            <th>
              Continent
            </th>
            <th>
              Independence
            </th>
            <th>
              Head of State
            </th>
          </tr>
        </thead> 
        <tbody>
      ";

foreach ($results as $row){
  echo "<tr>";
    echo "<td>";
      echo $row['name'];
    echo "</td>";
    echo "<td>";
      echo $row['continent'];
    echo "</td>";
    echo "<td>";
      echo $row['independence_year'];
    echo "</td>";
    echo "<td>";
      echo $row['head_of_state'];
    echo "</td>";
  echo "</tr>";
}
echo "</tbody>
  </table>";
?>
