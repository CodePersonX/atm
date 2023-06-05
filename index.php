<html>
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="title.png">
    <title>Chicago</title>
    <script>
      function validate(){
        let x=document.forms['login']['pin'].value;
        if(x==""){
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
          <form action="menu.php" name="login" id="login", onsubmit="return validate()">
          
            <input type="password" id="pin" name="pin" pattern="[0-9]{4}" placeholder="Enter your 4 digit pin" style="padding-left: 20px; padding-right: 0px; padding-top: 10px; padding-bottom: 10px; border: 2px solid black;"/>
          <br><br>
            <input type="submit" name="btnlogin" id="btnlogin" value="Enter" style="padding-left: 20px; padding-right: 20px; padding-top: 10px;padding-bottom: 10px; border: 2px solid black; text-align: center; margin-left: 60px; background-color: white;"/>
          </form>
          </div>
          <div class="col-sm-3"></div>
      </div>
      
    </div>
  </body>
</html>