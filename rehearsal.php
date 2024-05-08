<!DOCTYPE html>
<html>
  <head>
    <title> Service Partners </title>
    <link rel="stylesheet" type="text/css" href="csl.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <script>
  function addUser(){
    if (document.getElementById('form').checkValidity()){
      alert('User added');
      return true;
    }
    else{
      return false;
    }
    
  }
  </script>
  
  <body class = "partners">    
    <h1>Williamsburg Youth Orchestra Attendance System</h1>
  
    <h2>
    <break>
    <img src = "wyo-logo.jpeg" /> </break>
    <h2>
    <nav>
        <a href = "./member_crud.html"> <button>Edit Members</button></a> | 
        <a href = "./user_crud.html"><button>Edit Users</button></a> | 
        <a href = "./rehearsal.php"><button>Rehearsal</button></a> |
        <a href = "./rental.php"><button>Rentals</button></a> |
        <a href="./admin.php"><button>Admin</button></a> 
    </nav></h2>
    <h3>Rehearsal Information</h3>
            <table>
              <tr>

                <th>Rehearsal Number</th>
                <th>Location</th>
                <th>Time</th>
                <th>Number of Absences</th>
              </tr>
              <?php
		session_start(); // start (or resume) session

		// create database connection ($connection)
		$connection = pg_connect("host=localhost dbname=orchestraDatabase user=student password=CompSci364");

		if (!$connection) {
 		   die("Connection failed: " . pg_last_error());
		}
		$result = pg_prepare($connection, "my_query", "SELECT * FROM REHEARSAL");
		$result = pg_execute($connection, "my_query", array());
		while ($row = pg_fetch_assoc($result)) {
           		 echo "<tr>";
          		 echo "<td>" . $row['rehearsal_number'] . "</td>";
         		 echo "<td>" . $row['rehearsal_location'] . "</td>";
         		 echo "<td>" . $row['rehearsal_time'] . "</td>";
         		 echo "<td>" . $row['absence_number'] . "</td>";
                	 echo "</tr>";
      		 }

		?>
            </table>
      
  
  </body>
    
</html>
