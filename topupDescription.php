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
        let x = document.forms["topup"]["number"].value;
        let y = document.forms["topup"]["amount"].value;
        let z = document.forms["topup"]["pin"].value;
        if (x == "") {
          alert("Please enter your number");
          document.getElementById("number").focus();
          return false;
        }
        
        if (y < 100) {
          alert("Amount must be greater or equal to 100");
          document.getElementById("amount").focus();
          return false;
        }
        if (z == "") {
          alert("Please enter your pin");
          document.getElementById("pin").focus();
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
          <br><br><br>
        </div>
        
        <div class="row" style="padding-left: 50px;">
         
          <div class="col-sm-5"></div>
          <div class="col-sm-4">
          <form action="successfulWithdraw.php" name="topup" id="topup", onsubmit="return validate()">
          
            <input type="text" id="number" name="number" placeholder="Enter your number" pattern="[0-9]{11}" style="padding-left: 20px; padding-right: 0px; padding-top: 10px; padding-bottom: 10px; border: 2px solid black;"/>
          <br><br>
          <input type="text" id="amount" name="amount" placeholder="Enter your amount" style="padding-left: 20px; padding-right: 0px; padding-top: 10px; padding-bottom: 10px; border: 2px solid black;"/>
          <br><br>
          <input type="password" id="pin" name="pin" placeholder="Enter your pin" pattern="[0-9]{4}" style="padding-left: 20px; padding-right: 0px; padding-top: 10px; padding-bottom: 10px; border: 2px solid black;"/>
          <br><br>
            <input type="submit" name="btntopup" id="btntopup" value="OK" style="padding-left: 20px; padding-right: 20px; padding-top: 10px;padding-bottom: 10px; border: 2px solid black; text-align: center; margin-left: 70px; background-color: white;"/>
          </form>
          </div>
          <div class="col-sm-3"></div>
      </div>
      
    </div>
  </body>
</html>