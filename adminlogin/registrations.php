<?php
@ob_start();
session_start();

if(isset($_SESSION['admin']) && $_SESSION['admin']=="srishti22@psg"){

require_once('../includes/dbh.inc.php');


if(isset($_POST['btnClear'])){
  unset($_SESSION['filter']);
}


$strSQL = "SELECT * FROM members";
$params = array();


if(isset($_POST['filter'])){
  
  $filter = trim($_POST['filter']);
  if($filter){
  $strSQL .= " WHERE genfee = '".$filter."'";
  $params[] = '%' . $filter . '%';
  $_SESSION['filter'] = $filter;
  }
}else{
  if(isset($_SESSION['filter']) && strlen($_SESSION['filter'])>0 ){
  
    $filter = $_SESSION['filter'];
    $strSQL .= " WHERE genfee = '".$filter."'";
    $params[] = '%' . $filter . '%';
  }
}


if(isset($_GET['sort']) && strlen(trim($_GET['sort'])) > 0){
  $sort = addslashes(trim($_GET['sort']));
  
  $strSQL .= " ORDER BY $sort";
}

$result = mysqli_query($conn, $strSQL) or die(mysqli_error());
$num_row = mysqli_num_rows($result);


?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>General Registrations</title>
  <script src="../assets/js/table2excel.js"></script>
  
</head>
<body class="<?= $sort ?? '' ?>">
  <main>
    <div class="heading">
      <h2>Participants</h2>
        <form class="filterForm" method="POST" action="registrations.php">
          <input type="text" id="filter" name="filter" autofocus="true" placeholder="Type paid or unpaid" tabindex="0" value="<?= $filter ?? '' ?>"/>
          <input type="submit" name="btnFilter" id="btnFilter" value="Go"/>
          <input type="submit" name="btnClear" id="btnClear" value="Clear Filters"/>
        </form>
        <div class="d-flex">
        <p>Total Count <?php echo $num_row ?></p>
        <button id="downloadexcel" style="margin-bottom: 20px">Export to Excel</button>
        </div>
    </div>
    <?php
  
      if($num_row > 0){
        echo '<table id="registrations" border=1><thead>';
        echo '<tr>';
        echo '<th class="id"><a href="registrations.php?sort=">id</a></th>';
        echo '<th class="fname"><a href="registrations.php?sort=fname">Name</a></th>';
        echo '<th class="email"><a href="registrations.php?sort=email">Email</a></th>';
        echo '<th class="mobile"><a href="registrations.php?sort=mobile">Mobile</a></th>';
        echo '<th class="department"><a href="registrations.php?sort=department">Department</a></th>';
        echo '<th class="cgname"><a href="registrations.php?sort=cgname">College</a></th>';
        echo '<th class="event"><a href="registrations.php?sort=events">Events</a></th>';
        echo '<th class="event"><a href="registrations.php?sort=Workshops">Workshops</a></th>';
        echo '<th class="event"><a href="registrations.php?sort=paperpres">Paper Presentation</a></th>';
        echo '<th class="event"><a href="registrations.php?sort=Flagship">Flagship</a></th>';
        echo '<th class="event"><a href="registrations.php?sort=genfee">General Fees</a></th>';
        echo '<th class="event"><a href="registrations.php?sort=accomodation">Accomodation</a></th>';
        echo '<th class="event"><a href="registrations.php?sort=submitted_on">Time</a></th>';
        echo '</tr></thead>';
        while($row = mysqli_fetch_array($result)){
          echo '<tbody><tr data-ref="' . $row['id'] . '">';
          echo '<td>Srishti22' . $row['id'] . '</td>';
            echo '<td>' . $row['fname'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['mobile'] . '</td>';
            echo '<td>' . $row['department'] . '</td>';
            echo '<td>' . $row['cgname'] . '</td>';
            echo '<td>' . $row['events'] . '</td>';
            echo '<td>' . $row['workshops'] . '</td>';
            echo '<td>' . $row['paperpres'] . '</td>';
            echo '<td>' . $row['flagship'] . '</td>';
            echo '<td>' . $row['genfee'] . '</td>';
            echo '<td>' . $row['accomodation'] . '</td>';
            echo '<td>' . $row['submitted_on'] . '</td>';
          echo '</tr></tbody>';
        }
        echo '</table>';
      }else{
        echo '<p>No Registrations currently available.</p>';
      }
    ?>
  </main>
  <script>
    document.getElementById('btnClear').addEventListener('click', (ev)=>{
      document.getElementById('filter').value = '';
    })
    </script>
    <script>
      document.getElementById('downloadexcel').addEventListener('click', function(){
        var table2excel = new Table2Excel();
        table2excel.export(document.querySelectorAll("#registrations"));
      });
    </script>
</body>
</html>
<?php }else{
      header("location:index.php ");
} ?>