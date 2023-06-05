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
        
        <div class="row" style="padding-left: 40px;">
          <div class="col-sm-5">

          </div>
          <div class="col-sm-4">
            <img src="recipt.gif" height="200px" width="200px"/>
            <br>
            <p style="font-size: 25px;">Do You Want Recipt</p>
          </div>
          <div class="col-sm-3"></div>
        </div>
        <div class="row" style="padding-left: 300px;">
          <div class="col-sm-6">
            <form
              action="successfulWithdraw.php"
              name="successful"
              id="successful"
              style="padding-top: 10px"
            >
              <input
                type="submit"
                name="yes"
                id="yes"
                value="Yes"
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
          </div>
          <div class="col-sm-6">
            <form
              action="successfulWithdraw.php"
              name="done"
              id="done"
              style="padding-top: 10px"
            >
              <input
                type="submit"
                name="no"
                id="no"
                value="No"
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
          </div>
        </div>

        <div class="row" style="padding-top: 100px;">
          <div class="col-sm-4"></div>
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <p style="font-size: 25px; text-align: right;">
              Recipt Charges: 3.70
            </p>
          </div>
        </div>
      
    </div>
  </body>
</html>