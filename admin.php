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
    <nav>
    <a href = "./member_crud.html"> <button>Edit Members</button></a> | 
    <a href = "./user_crud.html"><button>Edit Users</button></a> | 
    <a href = "./rehearsal.php"><button>Rehearsal</button></a> |
    <a href = "./rental.php"><button>Rentals</button></a> |
    <a href="./admin.php"><button>Admin</button></a> 
    <a href="logout.php">Logout</a>
    <div class="adminTitle">
    <h2>Admin Page</h2>
    </div?


    <!-- comment-->

      <!-- displaying the student records -->
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
          <h4>Member Records</h4>
            <table>
              <tr>

                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Instrument</th>
                <th>Days Missed</th>
              </tr>
              <?php
		session_start(); // start (or resume) session

		// create database connection ($connection)
		$connection = pg_connect("host=localhost dbname=orchestraDatabase user=student password=CompSci364");

		if (!$connection) {
 		   die("Connection failed: " . pg_last_error());
		}
		$result = pg_prepare($connection, "my_query", "SELECT * FROM ORCHESTRA_MEMBER");
		$result = pg_execute($connection, "my_query", array());
		while ($row = pg_fetch_assoc($result)) {
           		 echo "<tr>";
          		 echo "<td>" . $row['firstname'] . "</td>";
         		 echo "<td>" . $row['lastname'] . "</td>";
         		 echo "<td>" . $row['phone_number'] . "</td>";
         		 echo "<td>" . $row['email'] . "</td>";
         		 echo "<td>" . $row['instrument'] . "</td>";
         		 echo "<td>" . $row['absence_number'] . "</td>";
                	 echo "</tr>";
      		 }

		?>
            </table>
            
      
        

      </div>
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
          <h4>User Records</h4>
            <table>
              <tr>

                <th>UserName</th>
                <th>Passwords</th>
                <th>Admin</th>
              </tr>
              <?php
		$result = pg_prepare($connection, "new_query", "SELECT * FROM USERS");
		$result = pg_execute($connection, "new_query", array());
		while ($row = pg_fetch_assoc($result)) {
           		 echo "<tr>";
          		 echo "<td>" . $row['username'] . "</td>";
         		 echo "<td>" . $row['password_hash'] . "</td>";
         		 echo "<td>" . $row['user_admin'] . "</td>";
                	 echo "</tr>";
      		 }

		?>
            </table>
            
      
        

      </div>
      
      
          <!--Adding people-->
    <div>
      <style>
        input[type=text], select {
          width: 25%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }
        
        input[type=submit] {
          width: 20%;
          background-color: gray;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
        
        input[type=submit]:hover {
          background-color: #45a049;
        }
        
        div {
          border-radius: 5px;
          background-color: #f2f2f2;
          padding: 20px;
        }
        </style>
  </body>

</html>
