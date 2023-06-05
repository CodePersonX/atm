<html>
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="title.png" />
    <title>Chicago</title>
  </head>
  <body>
    <div class="container">
      <br /><br />
      <div class="row">
        <div class="col-sm-5"></div>
        <div class="col-sm-2">
          <img src="logo.png" />
          <div class="col-sm-5"></div>
          <br>
        </div>
        <div class="row" style="padding-left: 150px;">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <p style="font-size: 25px;">Please Select Your Amount</p>
          </div>
          <div clas="col-sm-4"></div>
        </div>
        <div class="row" style="padding-left: 320px;">
          <div class="col-sm-6">
            
            <form
              
              action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
              name="1000description"
              id="1000description"
              style="padding-top: 10px"
            >
              <input
                type="submit"
                name="1000"
                id="1000"
                value="1000"
                style="
                  padding-left: 100px;
                  padding-right: 100px;
                  padding-top: 20px;
                  padding-bottom: 20px;
                  border: 2px solid white;
                  background-color: #17202a;
                  border-radius: 100px;
                  color: white;
                "
              />
            </form><?php
            
            if (isset($_GET["1000"])) {
              $deduction = 1000;

              $conn = new mysqli("localhost", "root", "", "chicago");

              $q = "SELECT BalanceView FROM myusers";
        $result = $conn->query($q);
        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $totalBalance = $row["BalanceView"];
          if($totalBalance > $deduction){
            $ded = $totalBalance - $deduction;
            $sql = "UPDATE myusers SET BalanceView = $ded WHERE account = 123456789";
              
            if ($conn->query($sql) === true) {
              echo '<img src="done.gif" height="100" width="100" />';
            } else {
              echo "Error" ;
            }
          }
          else{
            echo "Invalid amount";
          }
      }
        

              

             

             
            }
          
          ?>
            <form
            action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
              name="2000description"
              id="2000description"
              style="padding-top: 10px"
            >
              <input
                type="submit"
                name="2000"
                id="2000"
                value="2000"
                style="
                  padding-left: 100px;
                  padding-right: 100px;
                  padding-top: 20px;
                  padding-bottom: 20px;
                  border: 2px solid white;
                  background-color: #17202a;
                  border-radius: 100px;
                  color: white;
                "
              />
            </form>
            <?php
            
            if (isset($_GET["2000"])) {
              $deduction = 2000;

              $conn = new mysqli("localhost", "root", "", "chicago");

              $q = "SELECT BalanceView FROM myusers";
        $result = $conn->query($q);
        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $totalBalance = $row["BalanceView"];
          if($totalBalance > $deduction){
            $sql = "UPDATE myusers SET BalanceView = BalanceView - $deduction WHERE account = 123456789";
              
            if ($conn->query($sql) === true) {
              echo '<img src="done.gif" height="100" width="100" />';
            } else {
              echo "Error" ;
            }
          }
          else{
            echo "Invalid amount";
          }
      }
        

              

             

             
            }
          
          ?>
            <form
            action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
              name="5000description"
              id="5000description"
              style="padding-top: 10px"
            >
              <input
                type="submit"
                name="5000"
                id="5000"
                value="5000"
                style="
                  padding-left: 100px;
                  padding-right: 100px;
                  padding-top: 20px;
                  padding-bottom: 20px;
                  border: 2px solid white;
                  background-color: #17202a;
                  border-radius: 100px;
                  color: white;
                "
              />
            </form>
            <?php
            
            if (isset($_GET["5000"])) {
              $deduction = 5000;

              $conn = new mysqli("localhost", "root", "", "chicago");

              $q = "SELECT BalanceView FROM myusers";
        $result = $conn->query($q);
        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $totalBalance = $row["BalanceView"];
          if($totalBalance > $deduction){
            $sql = "UPDATE myusers SET BalanceView = BalanceView - $deduction WHERE account = 123456789";
              
            if ($conn->query($sql) === true) {
              echo '<img src="done.gif" height="100" width="100" />';
            } else {
              echo "Error" ;
            }
          }
          else{
            echo "Invalid amount";
          }
      }
        

              

             

             
            }
          
          ?>
            <form
            action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
              name="10000description"
              id="10000description"
              style="padding-top: 10px"
            >
              <input
                type="submit"
                name="10000"
                id="10000"
                value="10000"
                style="
                  padding-left: 100px;
                  padding-right: 95px;
                  padding-top: 20px;
                  padding-bottom: 20px;
                  border: 2px solid white;
                  background-color: #17202a;
                  border-radius: 100px;
                  color: white;
                "
              />
            </form>
            <?php
            
            if (isset($_GET["10000"])) {
              $deduction = 10000;

              $conn = new mysqli("localhost", "root", "", "chicago");

              $q = "SELECT BalanceView FROM myusers";
        $result = $conn->query($q);
        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $totalBalance = $row["BalanceView"];
          if($totalBalance > $deduction){
            $sql = "UPDATE myusers SET BalanceView = BalanceView - $deduction WHERE account = 123456789";
              
            if ($conn->query($sql) === true) {
              echo '<img src="done.gif" height="100" width="100" />';
            } else {
              echo "Error" ;
            }
          }
          else{
            echo "Invalid amount";
          }
      }
        

              

             

             
            }
          
          ?>
          </div>
  
          <div class="col-sm-6">
            <form
            action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
              name="20000description"
              id="20000description"
              style="padding-top: 10px"
            >
              <input
                type="submit"
                name="20000"
                id="20000"
                value="20000"
                style="
                  padding-left: 100px;
                  padding-right: 100px;
                  padding-top: 20px;
                  padding-bottom: 20px;
                  border: 2px solid white;
                  background-color: #17202a;
                  border-radius: 100px;
                  color: white;
                "
              />
            </form>
            <?php
            
            if (isset($_GET["20000"])) {
              $deduction = 20000;

              $conn = new mysqli("localhost", "root", "", "chicago");

              $q = "SELECT BalanceView FROM myusers";
        $result = $conn->query($q);
        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $totalBalance = $row["BalanceView"];
          if($totalBalance > $deduction){
            $sql = "UPDATE myusers SET BalanceView = BalanceView - $deduction WHERE account = 123456789";
              
            if ($conn->query($sql) === true) {
              echo '<img src="done.gif" height="100" width="100" />';
            } else {
              echo "Error" ;
            }
          }
          else{
            echo "Invalid amount";
          }
      }
        

              

             

             
            }
          
          ?>
            <form
            action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
              name="30000description"
              id="30000description"
              style="padding-top: 10px"
            >
              <input
                type="submit"
                name="30000"
                id="30000"
                value="30000"
                style="
                  padding-left: 100px;
                  padding-right: 100px;
                  padding-top: 20px;
                  padding-bottom: 20px;
                  border: 2px solid white;
                  background-color: #17202a;
                  border-radius: 100px;
                  color: white;
                "
              />
            </form>
            <?php
            
            if (isset($_GET["30000"])) {
              $deduction = 30000;

              $conn = new mysqli("localhost", "root", "", "chicago");

              $q = "SELECT BalanceView FROM myusers";
        $result = $conn->query($q);
        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $totalBalance = $row["BalanceView"];
          if($totalBalance > $deduction){
            $sql = "UPDATE myusers SET BalanceView = BalanceView - $deduction WHERE account = 123456789";
              
            if ($conn->query($sql) === true) {
              echo '<img src="done.gif" height="100" width="100" />';
            } else {
              echo "Error" ;
            }
          }
          else{
            echo "Invalid amount";
          }
      }
        

              

             

             
            }
          
          ?>
            <form
            action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
              name="40000description"
              id="40000description"
              style="padding-top: 10px"
            >
              <input
                type="submit"
                name="40000"
                id="40000"
                value="40000"
                style="
                  padding-left: 100px;
                  padding-right: 100px;
                  padding-top: 20px;
                  padding-bottom: 20px;
                  border: 2px solid white;
                  background-color: #17202a;
                  border-radius: 100px;
                  color: white;
                "
              />
            </form>
            <?php
            
            if (isset($_GET["40000"])) {
              $deduction = 40000;

              $conn = new mysqli("localhost", "root", "", "chicago");

              $q = "SELECT BalanceView FROM myusers";
        $result = $conn->query($q);
        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $totalBalance = $row["BalanceView"];
          if($totalBalance > $deduction){
            $ded = $totalBalance - $deduction;
            $sql = "UPDATE myusers SET BalanceView = $ded WHERE account = 123456789";
              
            if ($conn->query($sql) === true) {
              echo '<img src="done.gif" height="100" width="100" />';
            } else {
              echo "Error" ;
            }
          }
          else{
            echo "Invalid amount";
          }
      }
        

              

             

             
            }
          
          ?>
            <form
              action="otherAmount.php"
              name="otherAmount"
              id="otherAmount"
              style="padding-top: 10px"
            >
              <input
                type="submit"
                name="other"
                id="other"
                value="Other"
                style="
                  padding-left: 100px;
                  padding-right: 110px;
                  padding-top: 20px;
                  padding-bottom: 20px;
                  border: 2px solid white;
                  background-color: #17202a;
                  border-radius: 100px;
                  color: white;
                "
              />
            </form>

            <form
              action="menu.php"
              name="menu"
              id="menu"
              style="padding-left: 300px"
            >
              <input
                type="submit"
                name="menubtn"
                id="menubtn"
                value="Menu"
                style="
                  padding-left: 60px;
                  padding-right: 70px;
                  padding-top: 10px;
                  padding-bottom: 10px;
                  border: 2px solid white;
                  background-color: #17202a;
                  border-radius: 100px;
                  color: white;
                "
              />
            </form>
            
            
          </div>
        </div>
      
    </div>
  </body>
</html>