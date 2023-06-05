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
      <br /><br /><br />
      <div class="row">
        <div class="col-sm-2" style="font-weight: bold">Bank of Chicago</div>
      </div>
      <br />
      <div class="row">
        <div
          class="col-sm-12"
          style="
            background-color: #17202a;
            height: 50px;
            color: white;
            font-size: 30px;
          "
        >
          Available Transactions
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <p style="font-size: 25px; padding-top: 20px">
            Select Your Transaction
          </p>
          <form
            action="index.php"
            name="logedout"
            id="logedout"
            style="padding-top: 320px"
          >
            <input
              type="submit"
              name="logout"
              id="logout"
              value="Log Out"
              style="
                padding-left: 50px;
                padding-right: 50px;
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
            action="withdraw.php"
            name="withdrawl"
            id="withdrawl"
            style="padding-top: 10px"
          >
            <input
              type="submit"
              name="withdraw"
              id="withdraw"
              value="Withdraw"
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
          <form
            action="deposit.php"
            name="deposited"
            id="deposited"
            style="padding-top: 10px"
          >
            <input
              type="submit"
              name="deposit"
              id="deposit"
              value="Deposit"
              style="
                padding-left: 100px;
                padding-right: 115px;
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
            action="inquiry.php"
            name="inquiry"
            id="inquiry"
            style="padding-top: 10px"
          >
            <input
              type="submit"
              name="balCheck"
              id="balCheck"
              value="Inquiry"
              style="
                padding-left: 100px;
                padding-right: 125px;
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
            action="topuped.php"
            name="topuped"
            id="topuped"
            style="padding-top: 10px"
          >
            <input
              type="submit"
              name="topup"
              id="topup"
              value="Top Up"
              style="
                padding-left: 100px;
                padding-right: 125px;
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
            action="transaction.php"
            name="transactioned"
            id="transactioned"
            style="padding-top: 10px"
          >
            <input
              type="submit"
              name="transaction"
              id="transaction"
              value="Transaction"
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
        </div>
      </div>
    </div>
  </body>
</html>