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
    <div class="adminTitle">
    <h2>Admin Page</h2>
    </div?


    <!-- comment-->

      <!-- displaying the student records -->
    <div class="table">
      <center>
      <style>
        .button {
          background-color: #04AA6D;
          border: none;
          color: white;
          padding: 20px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
        }
        table {
          border-collapse: collapse;
          width: 100%;
          text-align: center;
        }
        
        th, td {
          text-align: middle;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: white;
        }
        tr:hover {background-color: #D6EEEE;}
        div2 {
          border-radius: 5px;
          background-color: #ffffff;
          padding: 10px;
        }
        </style>
          <h3>Rehearsal Information</h3>
            <table>
              <tr>

                <th>Serial Number</th>
                <th>Instrument</th>
                <th>Checked out to</th>
                <th>Checked In</th>
              </tr>
              <?php
		session_start(); // start (or resume) session

		// create database connection ($connection)
		$connection = pg_connect("host=localhost dbname=orchestraDatabase user=student password=CompSci364");

		if (!$connection) {
 		   die("Connection failed: " . pg_last_error());
		}
		$result = pg_prepare($connection, "my_query", "SELECT * FROM RENTAL");
		$result = pg_execute($connection, "my_query", array());
		while ($row = pg_fetch_assoc($result)) {
           		 echo "<tr>";
          		 echo "<td>" . $row['serial_number'] . "</td>";
         		 echo "<td>" . $row['instrument_type'] . "</td>";
         		 echo "<td>" . $row['username'] . "</td>";
         		 echo "<td>" . $row['checked_in'] . "</td>";
                	 echo "</tr>";
      		 }

		?>
            </table>

        

      </div>
          <!--Adding people-->
    </body>
</html>
