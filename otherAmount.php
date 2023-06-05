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
          <br><br><br>
        </div>
        
        
        <div class="row" style="padding-left: 50px;">
         
          <div class="col-sm-5"></div>
          <div class="col-sm-4">
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="withdrawDescription" id="withdrawDescription">
          
            <input type="number" id="amount" name="amount" pattern="[0-9]{5}" placeholder="Enter the amount"  style="padding-left: 20px; padding-right: 10px; padding-top: 10px; padding-bottom: 10px; border: 2px solid black;" min="500"/>
          <br><br>
            <input type="submit" name="okbtn" id="okbtn" value="OK" style="padding-left: 30px; padding-right: 30px; padding-top: 10px;padding-bottom: 10px; border: 2px solid black; text-align: center; margin-left: 65px; color: white; border-radius: 100px; background-color:17202a ;"/>
          </form>
          <?php
            
            if (isset($_GET["okbtn"])) {
              $deduction = $_GET["amount"];

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
          <div class="col-sm-3">
          <form
              action="menu.php"
              name="menu"
              id="menu"
              style="padding-left: 200px; padding-top: 300px"
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