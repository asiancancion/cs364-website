<!DOCTYPE html>


<html>
  <head>
    <title>Member Check in</title>
    <link rel="stylesheet" type="text/css" href="csl.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  </head>
  
  
  <body>    
    <h1>Williamsburg Youth Orchestra Attendance System</h1>
    <h2>
    <break>
    <img src = "wyo-logo.jpeg" /> </break>
    <nav>
    <a href = "./start.php">Login Page</a> | 
    <a href = "./admin.html">Admin Page</a> | 
    <a href = "./member.html">Member Page</a></nav></h2>
    <a href="logout.php">Logout</a>
    <div class="table">
      <center>
      <style>
        table {
          border-collapse: collapse;
          width: 90%;
          text-align: center;
        }
        
        th, td {
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: white;
        }
        tr:hover {background-color: #D6EEEE;}
        div2 {
          border-radius: 5px;
          background-color: #ffffff;
          padding: 20px;
        }
        </style>
          <h4>Rehearsal Attendance</h3>
            <table>
              <tr>

                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Instrument</th>
                <th>Days Missed</th>
                <th>Check in/Out</th>
              </tr>
              

              <?php
		session_start(); // start (or resume) session

		// create database connection ($connection)
		$connection = pg_connect("host=localhost dbname=orchestraDatabase user=student password=CompSci364");

		if (!$connection) {
 		   die("Connection failed: " . pg_last_error());
		}
		$email = $_SESSION['username'];
		$result = pg_prepare($connection, "my_query", "SELECT * FROM ORCHESTRA_MEMBER WHERE EMAIL = $1");
		$result = pg_execute($connection, "my_query", array($email));
		while ($row = pg_fetch_assoc($result)) {
           		 echo "<tr>";
          		 echo "<td>" . $row['firstname'] . "</td>";
         		 echo "<td>" . $row['lastname'] . "</td>";
         		 echo "<td>" . $row['phone_number'] . "</td>";
         		 echo "<td>" . $row['email'] . "</td>";
         		 echo "<td>" . $row['instrument'] . "</td>";
         		 echo "<td>" . $row['absence_number'] . "</td>";
           		 echo '<td>
                		<label class = "switch">
                		<input type = "checkbox">
                		<span class="slider round"></span>
                		</label></td>';
                	echo "</tr>";
      		 }

		?>
            </table>
    </div>
  
   
    
    
  </body>
  
  
</html>
