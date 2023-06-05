<html>
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="title.png" />
    <title>Chicago</title>
    <script>
      function validate() {
        let z = document.forms['topup']['name'].value;
        let x = document.forms["topup"]["number"].value;
        let y = document.forms["topup"]["amount"].value;
        if (z == "") {
          alert("Please enter bank name");
          document.getElementById("name").focus();
          return false;
        }
        if (x == "") {
          alert("Please enter account number");
          document.getElementById("number").focus();
          return false;
        }
        if(x<14){
          alert("Please enter valid account number");
          document.getElementById("number").focus();
          return false;
        }
        
        if (y < 500) {
          alert("Amount must be greater or equal to 500");
          document.getElementById("amount").focus();
          return false;
        }
        
      }
    </script>
  </head>
  <body >
    <div class="container">
      <br /><br />
      <div class="row">
        <div class="col-sm-5"></div>
        <div class="col-sm-2">
          <img src="logo.png" />
          <div class="col-sm-5"></div>
          <br>
        </div>

        <div class="row" style="padding-left: 570px;">
          <div class="col-sm-12">
            <p>
              Please enter the details below
            </p>
          </div>
        </div>
        
        <div class="row" style="padding-left: 50px;">
         
          <div class="col-sm-5"></div>
          <div class="col-sm-4">
          <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="topup" id="topup", onsubmit="return validate()">
            <input type="text" id="name" name="name" placeholder="Enter bank name" style="padding-left: 20px; padding-right: 0px; padding-top: 10px; padding-bottom: 10px; border: 2px solid black;"/>
            <br><br>
            <input type="text" id="number" name="number" placeholder="Enter account number" pattern="[0-9]{14}" style="padding-left: 20px; padding-right: 0px; padding-top: 10px; padding-bottom: 10px; border: 2px solid black;"/>
          <br><br>
          <input type="text" id="amount" name="amount" placeholder="Enter your amount" style="padding-left: 20px; padding-right: 0px; padding-top: 10px; padding-bottom: 10px; border: 2px solid black;"/>
          <br><br>
          <!-- <input type="password" id="pin" name="pin" placeholder="Enter your pin" pattern="[0-9]{4}" style="padding-left: 20px; padding-right: 0px; padding-top: 10px; padding-bottom: 10px; border: 2px solid black;"/>
          <br><br> -->
           <input type="submit" name="btntopup" id="btntopup" value="OK" style="padding-left: 20px; padding-right: 20px; padding-top: 10px;padding-bottom: 10px; border: 2px solid black; text-align: center; margin-left: 70px; background-color: white;"/>
          </form>
          <?php
            
            if (isset($_POST["btntopup"])) {
              $transaction = $_POST["amount"];

              $conn = new mysqli("localhost", "root", "", "chicago");

              $q = "SELECT BalanceView FROM myusers";
        $result = $conn->query($q);
        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();
          $totalBalance = $row["BalanceView"];
          if($totalBalance > $transaction){
            $sql = "UPDATE myusers SET BalanceView = BalanceView - $transaction WHERE account = 123456789";
              
            if ($conn->query($sql) === true) {
              echo "Deducted";
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
          <div class="col-sm-3"></div>

      </div>
      
    </div>
  </body>
</html>