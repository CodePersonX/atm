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
          <img src="logo.png" height="100" width="100" />
          <div class="col-sm-5"></div>
          <br>
        </div>

        <div class="row" style="padding-left: 60px;">
          <div class="col-sm-5">

          </div>
          <div class="col-sm-4">
            <img src="done.gif" height="200px" width="200px"/>
            
            
          </div>
          <div class="col-sm-3"></div>
        </div>
        <div class="row" style="padding-left: 300px;">

          <div class="row" style="align-content: start;">
            <div class="col-sm-2"></div>
            <div class="col-sm-6">
              <p style="font-size: 35px; padding-left: 40px;">Transaction Successful</p>
            </div>
            <div class="col-sm-4"></div>
          </div>

          <div class="row" style="padding-left: 700px; padding-top: 80px;">
            <div class="col-sm-9">
              <p style="font-size: 20px; padding-top: 20px;">Continue Transaction: </p>
            </div>
            <div class="col-sm-3">
              <form
              action="menu.php"
              name="continue"
              id="continue"
              style="padding-top: 10px"
            >
              <input
                type="submit"
                name="yes"
                id="yes"
                value="Yes"
                style="
                  padding-left: 50px;
                  padding-right: 50px;
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
          <div class="row" style="padding-left: 700px; padding-top: 1px;">
            <div class="col-sm-9">
              <p style="font-size: 20px; padding-top: 20px;">Log Out: </p>
            </div>
            <div class="col-sm-3">
              <form
              action="index.php"
              name="logout"
              id="logout"
              style="padding-top: 10px"
            >
              <input
                type="submit"
                name="no"
                id="no"
                value="No"
                style="
                  padding-left: 50px;
                  padding-right: 55px;
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