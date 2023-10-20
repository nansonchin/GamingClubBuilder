<?php
include 'helper.php';
?>

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $actId = 1;
    $ticId = 0;
    $payId = 0;
    $payStatus = "CP";
    $ticDate = date("o-m-d H:i:s");
    $memId = 1;
    $ptType = " ";
    $_SESSION['payId'] = 0;

    if (!empty($_SESSION["totalTicket"])) {
        if ($_POST['pType'] == 1) {
            $ptType = "BT";
        } else if ($_POST['pType'] == 2) {
            $ptType = "BC";
        }
        
        $payId = rand(7, 99999999);
        
        $sql = "INSERT INTO payment (P_Payment_ID, Mem_Member_ID, P_Payment_Amount, P_PaymentDate, PT_Type) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssss', $payId, $memId, $_SESSION["totalPrice"], $ticDate, $ptType);
        $stmt->execute();
        $stmt->close();

        if ($_SESSION["normal_ticket"] != 0) {
            $sql = "INSERT INTO ticket (TCK_ID, Act_ID, TCK_Quantity, TCK_PurchaseDate, P_Payment_ID, Payment_Status) VALUES (?, ?, ?, ?, ?, ?)";
            $ticId = rand(7, 99999999);
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ssssss', $ticId, $actId, $_SESSION["normal_ticket"], $ticDate, $payId, $payStatus);
            $stmt->execute();
        }
        if ($_SESSION["premium_ticket"] != 0) {
            $sql = "INSERT INTO ticket (TCK_ID, Act_ID, TCK_Quantity, TCK_PurchaseDate, P_Payment_ID, Payment_Status) VALUES (?, ?, ?, ?, ?, ?)";
            $ticId = rand(7, 99999999);
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ssssss', $ticId, $actId, $_SESSION["premium_ticket"], $ticDate, $payId, $payStatus);
            $stmt->execute();
        }
        if ($_SESSION["vip_ticket"] != 0) {
            $sql = "INSERT INTO ticket (TCK_ID, Act_ID, TCK_Quantity, TCK_PurchaseDate, P_Payment_ID, Payment_Status) VALUES (?, ?, ?, ?, ?, ?)";
            $ticId = rand(7, 99999999);
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ssssss', $ticId, $actId, $_SESSION["vip_ticket"], $ticDate, $payId, $payStatus);
            $stmt->execute();
        }
    }

    header("location: PaymentResult.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <style>
            body {
                font-family: Arial;
                font-size: 17px;
                padding: 8px;
                background-color: #ffffff;
            }
            * {
                box-sizing: border-box;
            }
            .payment_row {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                margin: 0 -16px;
            }
            .col-25 {
                -ms-flex: 25%;
                flex: 25%;
            }
            .payment_col-50 {
                -ms-flex: 50%;
                flex: 50%;
            }
            .payment_col-75 {
                -ms-flex: 75%;
                flex: 75%;
            }
            .col-25, .payment_col-50, .payment_col-75 {
                padding: 0 16px;
            }
            .container {
                background-color: #ffffff;
                padding: 10px 20px 25px 20px;
                border: 2px solid lightgrey;
                border-radius: 3px;
            }
            input[type=text] {
                width: 100%;
                margin-bottom: 20px;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 3px;
                transition: all 0.2s ease-out;
            }
            label {
                margin-bottom: 10px;
                display: block;
            }
            .icon-container {
                margin-bottom: 20px;
                padding: 7px 0;
                font-size: 24px;
            }
            .btn {
                background-color: #000000;
                color: white;
                padding: 12px;
                margin: 1% 25%;
                border: none;
                width: 50%;
                border-radius: 3px;
                cursor: pointer;
                font-size: 17px;
            }
            .btn:hover {
                color: #000000;
                background-color: #D1D1D1;
            }

            table {
                margin: auto;
            }
            th {
                padding: 5px 15px 10px 5px;
                text-align: left;
            }
            td {
                padding: 3px 15px;
                text-align: right;
            }

            select {
                -webkit-appearance:none;
                -moz-appearance:none;
                -ms-appearance:none;
                appearance:none;
                outline:0;
                box-shadow:none;
                border:0!important;
                background: #ffffff;
                background-image: none;
                flex: 1;
                padding: 0 .5em;
                color:#000000;
                cursor:pointer;
                font-size: 1em;
                font-family: 'Open Sans', sans-serif;
            }
            select::-ms-expand {
                display: none;
            }
            .select {
                position: relative;
                display: flex;
                width: 20em;
                height: 40px;
                line-height: 3;
                background: #ffffff;
                overflow: hidden;
                border-radius: .25em;
                border: 1px solid;
                margin-bottom: 20px;
            }
            .select::after {
                content: '\25BC';
                position: absolute;
                top: 0;
                right: 0;
                padding: 0 1em;
                background: #ffffff;
                cursor:pointer;
                pointer-events:none;
                transition:.25s all ease;
            }
            .select:hover::after {
                color: #D1D1D1;
            }

            @media (max-width: 800px) {
                .payment_row {
                    flex-direction: column-reverse;
                }
                .col-25 {
                    margin-bottom: 20px;
                }
            }
        </style>
        <script>
            if
        </script>
    </head>

    <body>
        <div class="payment_row">
            <div class="payment_col-75">
                <div class="container">
                    <form name="paymentForm" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="payment_row">
                            <div class="payment_col-50">
                                <h3>Billing Address</h3>
                                <label for="fname">Full Name</label>
                                <div class="payment_row">
                                    <div class="payment_col-50">
                                        <input type="text" id="fname" name="firstname" placeholder="First name" maxlength="30" required>
                                    </div>
                                    <div class="payment_col-50">
                                        <input type="text" id="lname" name="lastname" placeholder="Last name" maxlength="30" required>
                                    </div>
                                </div>
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" placeholder="Email" required>
                                <label for="adr">Address</label>
                                <input type="text" id="adr" name="address" placeholder="Address" required>
                                <label for="city">City</label>
                                <input type="text" id="city" name="city" placeholder="City" required>

                                <div class="payment_row">
                                    <div class="payment_col-50">
                                        <label for="state">State</label>
                                        <input type="text" id="state" name="state" required>
                                    </div>
                                    <div class="payment_col-50">
                                        <label for="postcode">Post Code</label>
                                        <input type="text" id="postcode" name="postcode" required>
                                    </div>
                                </div>
                            </div>

                            <div class="payment_col-50">
                                <h3>Payment</h3>
                                <label for="fname">Payment Type</label>
                                <div class="select">
                                    <select name="pType" id="pType">
                                        <option value="1">Bank Transfer</option>
                                        <option value="2">Bank Credit</option>
                                    </select>
                                </div>

                                <label for="cname">Name on Card</label>
                                <input type="text" id="cname" name="cardname" placeholder="Jashon" required>
                                <label for="ccnum">Credit card number</label>
                                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
                                <label for="expmonth">Exp Month</label>
                                <input type="text" id="expmonth" name="expmonth" placeholder="January" required>
                                <div class="payment_row">
                                    <div class="payment_col-50">
                                        <label for="expyear">Exp Year</label>
                                        <input type="text" id="expyear" name="expyear" placeholder="2022" required>
                                    </div>
                                    <div class="payment_col-50">
                                        <label for="cvv">CVV</label>
                                        <input type="text" id="cvv" name="cvv" placeholder="111" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="PaymentResult.php"><input type="submit" value="Checkout" class="btn"></a>
                    </form>
                </div>
            </div>
            <div class="col-25">
                <div class="container">
                    <table>
                        <tr>
                            <th>Ticket</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                        </tr>
                        <tr>
                            <td style="text-align:left">Normal Ticket</td>
                            <td><?php echo $_SESSION["normal_ticket"] ?></td>
                            <td><?php echo "100.00" ?></td>
                        </tr>
                        <tr>
                            <td style="text-align:left">Premium Ticket</td>
                            <td><?php echo $_SESSION["premium_ticket"] ?></td>
                            <td><?php echo "300.00" ?></td>
                        </tr>
                        <tr>
                            <td style="text-align:left">V.I.P Ticket</td>
                            <td><?php echo $_SESSION["vip_ticket"] ?></td>
                            <td><?php echo "500.00" ?></td>
                        </tr>
                        <tr>
                            <td colspan="3"><hr></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: left">Total : </td>
                            <td><span class="price" style="color:black"><b><?php echo $_SESSION["totalPrice"] ?>.00</b></span></td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </body>
</html>
