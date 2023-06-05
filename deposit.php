<!DOCTYPE html>
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
        let x = document.forms["deposited"]["amount"].value;
        if (x == "") {
          alert("Please enter a valid amount");
          document.getElementById("amount").focus();
          return false;
        }
      }
    </script>
  </head>
  <body>
    <div class="container">
      <br /><br />
      <div class="row">
        <div class="col-sm-5"></div>
        <div class="col-sm-2">
          <img src="logo.png" />
          <div class="col-sm-5"></div>
          <br /><br /><br />
        </div>

        <div class="row" style="padding-left: 50px;">
          <div class="col-sm-5"></div>
          <div class="col-sm-4">
            <form
              method="post"
              action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
              name="deposited"
              id="deposited"
              onsubmit="return validate()"
            >
              <input
                type="text"
                id="amount"
                name="amount"
                placeholder="Enter the amount"
                style="padding-left: 45px; padding-right: 0px; padding-top: 10px; padding-bottom: 10px; border: 2px solid black;"
              />
              <br /><br />
              <input
                type="submit"
                name="btnlogin"
                id="btnlogin"
                value="Enter"
                style="padding-left: 20px; padding-right: 20px; padding-top: 10px;padding-bottom: 10px; border: 2px solid black; text-align: center; margin-left: 70px; background-color: white;"
              />
            </form>
            <?php
            
              if (isset($_POST["btnlogin"])) {
                $depositAmount = $_POST["amount"];

                $conn = new mysqli("localhost", "root", "", "chicago");

                

                $sql = "UPDATE myusers SET BalanceView = BalanceView + $depositAmount WHERE account = 123456789";

                if ($conn->query($sql) > 0) {
                 
                echo '<img src="done.gif" height="100" width="100" />';
                
                } else {
                  echo "Error" ;
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
    </div>
  </body>
</html>
