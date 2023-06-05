<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="title.png" />
    <title>Chicago</title>
</head>

<body>

    <div class="container">
        <?php
        
        $conn = new mysqli("localhost", "root", "", "chicago");
        $q = "SELECT BalanceView FROM myusers";
        $acc = "SELECT account FROM myusers";
        $r = $conn->query($acc);
        $result = $conn->query($q);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $ro = $r->fetch_assoc();
            $totalBalance = $row["BalanceView"];
            $account = $ro["account"];
        }
        else{
          $totalBalance = 0;
        }
        
        ?>

        <br /><br />
        <div class="row">
            <div class="col-sm-5"></div>
            <div class="col-sm-2">
                <img src="logo.png" />
            </div>
            <div class="col-sm-5"></div>
        </div>

        <div class="row" style="padding-left: 400px;">

            <div class="col-sm-6">
                <p>
                    Account No:
                </p>
                <p>
                    Account Owner:
                </p>
                <p>
                    Account Balance:
                </p>
                <p>
                    Account Type:
                </p>
                <p>
                    Account Date Created:
                </p>
            </div>
            <div class="col-sm-6">
                <p>
                <?php echo $account; ?>
                </p>
                <p>
                    Ayub Ali
                </p>
                <p>
                    <?php echo $totalBalance; ?>
                </p>
                <p>
                    Current Account
                </p>
                <p>
                    1993/04/09
                </p>
            </div>
        </div>

        <div class="row" style="padding-left: 1000px; padding-top: 80px;">
            <div class="col-sm-9">
                <p style="font-size: 20px; padding-top: 20px;">Return to main menu: </p>
            </div>
            <div class="col-sm-3">
                <form action="menu.php" name="continue" id="continue" style="padding-top: 10px">
                    <input type="submit" name="yes" id="yes" value="Yes" style="padding-left: 50px; padding-right: 50px; padding-top: 10px; padding-bottom: 10px; border: 2px solid white; background-color: #17202a; border-radius: 100px; color: white;" />
                </form>
            </div>
        </div>
        <div class="row" style="padding-left: 1000px; padding-top: 1px;">
            <div class="col-sm-9">
                <p style="font-size: 20px; padding-top: 20px;">Log Out: </p>
            </div>
            <div class="col-sm-3">
                <form action="index.php" name="logout" id="logout" style="padding-top: 10px">
                    <input type="submit" name="no" id="no" value="No" style="padding-left: 50px; padding-right: 55px; padding-top: 10px; padding-bottom: 10px; border: 2px solid white; background-color: #17202a; border-radius: 100px; color: white;" />
                </form>
            </div>
        </div>

    </div>
</body>
</html>
