<?php
@ob_start();
session_start();

require_once('../includes/dbh.inc.php');


if(isset($_POST['btnClear'])){
  unset($_SESSION['event']);
}


$strSQL = "SELECT * FROM events";
$params = array();


if(isset($_POST['event'])){
  $event = trim($_POST['event']);
  if($event){
  $strSQL .= " WHERE `".$event."` = 'yes'";
  $_SESSION['event'] = $event;
  }
}
else{
  if(isset($_SESSION['event']) && strlen($_SESSION['event'])>0){
    $event = $_SESSION['event'];
    $strSQL .= " WHERE `".$event."` = 'yes'";
    //$params[] = '%' . $filter . '%';
  }
}


if(isset($_GET['sort']) && strlen(trim($_GET['sort'])) > 0){
  $sort = addslashes(trim($_GET['sort']));
  
  $strSQL .= " ORDER BY $sort";
} 

$result = mysqli_query($conn, $strSQL) or die(mysqli_error($conn));
$num_row = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Registrations</title>
  <script src="../assets/js/table2excel.js"></script>
  
</head>
<body class="<?= $sort ?? '' ?>">
  <main>
    <div class="heading">
      <h2>Events</h2>
        <form class="filterForm" method="POST" action="eventregistration.php">
          <input type="text" id="event" name="event" autofocus="true" placeholder="Event Name (CAPS)" tabindex="0" value="<?= $event ?? '' ?>"/>
          <input type="submit" name="btnFilter" id="btnFilter" value="Go"/>
          <input type="submit" name="btnClear" id="btnClear" value="Clear Filters"/>
        </form>
        <div>
          <p>Total Count <?php echo $num_row ?></p>
          <button id="downloadexcel" style="margin-bottom: 20px">Export to Excel</button>
        </div>
    </div>
    <?php
  
      if($num_row > 0){
        echo '<table id="registrations" border=1>';
        echo '<tr>';
        echo '<th class="email"><a href="eventregistration.php?sort=email">Email</a></th>';
        echo '<th class="event">TECH FETE</th>';
        echo '<th class="event">TECH HOTSPOT</th>';
        echo '<th class="event">EUCLIDEA</th>';
        echo '<th class="event">TO 2 TOO</th>';
        echo '<th class="event">CODEVERSE</th>';
        echo '<th class="event">WORD BLITZ</th>';
        echo '<th class="event">SYNCHRON</th>';
        echo '<th class="event">READY SET SCAVANGE</th>';
        echo '<th class="event">SHERLOCKS CIRCLE</th>';
        echo '<th class="event">FLUTTER SHUTTER</th>';
        echo '<th class="event">ILLUSTRATIQUE</th>';
        echo '</tr>';
        while($row = mysqli_fetch_array($result)){
          //echo '<tr data-ref="' . $row['id'] . '">';
          echo '<tr>';
          // echo '<td>Srishti22' . $row['email'] . '</td>';
          echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['TECH FETE'] . '</td>';
            echo '<td>' . $row['TECH HOTSPOT'] . '</td>';
            echo '<td>' . $row['EUCLIDEA'] . '</td>';
            echo '<td>' . $row['TO 2 TOO'] . '</td>';
            echo '<td>' . $row['CODEVERSE'] . '</td>';
            echo '<td>' . $row['WORD BLITZ'] . '</td>';
            echo '<td>' . $row['SYNCHRON'] . '</td>';
            echo '<td>' . $row['READY SET SCAVANGE'] . '</td>';
            echo '<td>' . $row['SHERLOCKS CIRCLE'] . '</td>';
            echo '<td>' . $row['FLUTTER SHUTTER'] . '</td>';
            echo '<td>' . $row['ILLUSTRATIQUE'] . '</td>';
          echo '</tr>';
        }
        echo '</table>';
      }else{
        echo '<p>No Registrations currently available.</p>';
      }
    ?>
  </main>
  <script>
    document.getElementById('btnClear').addEventListener('click', (ev)=>{
      document.getElementById('event').value = '';
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