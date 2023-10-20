<html>
    <head>

        <title>Admin Event Register</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="admin-user-table.css">
        <link rel="stylesheet" href="admin-register-event.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://fonts.cdnfonts.com/css/futurik" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="http://fonts.cdnfonts.com/css/games" >
        <?php include 'helper.php' ?>

        <script src="admin-register-event.js"></script>
        <title></title>
    </head>
    <body>
        <div class="admin-container">
            <div class="admin-header">
                <?php include'adminhead.php'; ?>
            </div>

            <div class="admin-r-bg"></div>

            <div class="admin-tar-name ">
                <h1 id="adminTarc">TARUC IGS Admin Page</h1>
            </div>

            <div class="event-table">
                <div class="tab">
   
                    <button class="tablinks " onclick="openCity(event, 'registerEvent1')">Apex[August]</button>
                    <button class="tablinks" onclick="openCity(event, 'registerEvent2')"> Valorant[October]                
                    </button>


                    <button class="tablinks">+</button>
                </div>

                <div id="registerEvent1" class="tabcontent">
                    <table class="table table-hover ">
                        <form action="admin-register-event.php?registerEvent=1" method="POST">
                            <div class='admin-user-top'>
                                <div class='admin-user-search'>
                                    <input type="search" id="admin-user-search" name="admin-user-search" placeholder="Search">
                                    <button class="btn btn-primary btn-sm" name="search" type="submit">Search</button></input>
                                </div>
                                <div class='admin-user-page'>

                                    <?php
                                    $count = 0;
                                    $sql = "Select * from ticket where Act_ID = 1";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        while ($line = mysqli_fetch_array($result)) {
                                            $count++;
                                        }
                                    }
                                    $x = $count / 10;
                                    $y = ceil($x);
                                    $y;

                                    $registerEvent = 0;
                                    $register = $_GET['registerEvent'];
                                    if ($register == "" || $register == "1") {
                                        $registerEvent = 0;
                                    } else {
                                        $registerEvent = ($register * 10) - 10;
                                    }
                                    if (isset($_POST['search'])) {
                                        $valueToSearch = $_POST['admin-user-search'];
//                                        $searchTerm = "SELECT * FROM `apex_event` WHERE concat(`TCK_ID`, `TCK_Quantity`, `mem_memberId`, `mem_member_firstName`, `mem_member_lastName`, `mem_phone`, `TCK_PurchaseDate`, `p_payment_amount`, `pt_type`, `payment_status`) LIKE'%" . $valueToSearch . "%' limit $register,10";
                                        $searchTerm = "SELECT * FROM `ticket` WHERE Act_ID = '1' And concat(`TCK_ID`, `Act_ID`, `TCK_Quantity`, `TCK_PurchaseDate`, `P_Payment_ID`, `Payment_Status`) LIKE'%" . $valueToSearch . "%' limit $register,10";
                                        $search_result = check($searchTerm);
                                    } else {
                                        $searchTerm = "Select * from ticket WHERE Act_ID= 1 limit $register,10";
                                        $search_result = check($searchTerm);
                                    }

                                    function check($searchTerm) {
                                        include 'helper.php';
                                        //look for the saerch Term
                                        $checkData = mysqli_query($conn, $searchTerm);
                                        return $checkData;
                                    }

                                    for ($i = 0; $i < $y; $i++) {
                                        ?>
                                        <a href="admin-register-event.php?registerEvent=<?php echo $i + 1; ?>"><?php echo $i + 1; ?></a>
                                        <?php
                                    }
                                    ?>




                                </div>

                            </div>
                            <thead>
                                <tr colspan="5">
                                    <th scope="col">Taruc IGS All User</th>
                                </tr>
                                <tr>
                                    <th scope="col">Ticket ID</th>
                                    <th scope="col">Activity ID</th>
                                    <th scope="col">Ticket Quantity</th>
                                    <th scope="col">Ticket Purchase Date</th>
                                    <th scope="col">Payment ID</th>
                                    <th scope="col">Payment Status</th> 

                                </tr>
                            </thead>
                            <tbody>
                                <?php
//                                $sqlevent = "Select * from apex_event limit $register,10";
//                                $result = mysqli_query($conn, $sqlevent);
                                while ($row = mysqli_fetch_assoc($search_result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['TCK_ID']; ?></td>
                                        <td><?php echo $row['Act_ID']; ?></td>
                                        <td><?php echo $row['TCK_Quantity']; ?></td>
                                        <td><?php echo $row['TCK_PurchaseDate']; ?></td>
                                        <td><?php echo $row['P_Payment_ID']; ?></td>
                                        <td><?php echo $row['Payment_Status']; ?></td>
                                        <td><a href="editeventapex.php?id=<?php echo $row['TCK_ID']; ?>"><button type="button" class="btn btn-primary btn-sm">
                                                    Edit</button></a></td>
                                        <td><a href="delete_event.php?event=<?php echo $row['TCK_ID']; ?>"><button type="button" class="btn btn-danger btn-sm">
                                                    Delete</button></a></td>
                                    </tr>
                                    <?php
                                }
                                ?>


                            </tbody>
                    </table>
                </div>
                </form>
                <!--                //////////////////////////////////////////////
                  /////////////////////////////////////////////////////////////////////////////////              -->
                    <div id="registerEvent2" class="tabcontent">
                        <table class="table table-hover ">
                           <form action="admin-register-event.php?registerEvent2=1" method="POST">
                            <div class='admin-user-top'>
                                <div class='admin-user-searchtwo'>
                                    <input type="search" id="admin-user-searchtwo" name="admin-user-searchtwo" placeholder="Search">
                                    <button class="btn btn-primary btn-sm" name="searchtwo" type="submit">Search</button></input>
                                </div>
                                <div class='admin-user-page'>
                                    

                                    <?php
                                    $count2 = 0;
                                    $sql2 = "SELECT * FROM `ticket` WHERE Act_ID = 2";
                                    $result2 = mysqli_query($conn, $sql2);

                                    if (mysqli_num_rows($result2) > 0) {
                                        while ($line2 = mysqli_fetch_array($result2)) {
                                            $count2++;
                                        }
                                    }
                                    $h = $count2 / 10;
                                    $j = ceil($x);
                                    ?>
                                    <?php
                                    $registerEventtwo = 0;
                                    $registertwo = $_GET['registerEvent2'];

                                    if ($registertwo == "" || $registertwo == "1") {
                                        $registerEventtwo = 0;
                                    } else {
                                        $registerEventtwo = ($registertwo * 10) - 10;
                                    }

                                    if (isset($_POST['searchtwo'])) {
                                        $valueToSearchtwo = $_POST['admin-user-searchtwo'];
                                        $searchTermtwo = "SELECT * FROM `ticket` WHERE Act_ID = '2' AND concat(`TCK_ID`, `Act_ID`, `TCK_Quantity`, `TCK_PurchaseDate`, `P_Payment_ID`, `Payment_Status`) LIKE'%" . $valueToSearchtwo . "%' limit $registertwo,10";
                                        $search_resulttwo = checktwo($searchTermtwo);
                                    } else {
                    
                                        $searchTermtwo = "Select * from ticket Where Act_ID= 2 limit $registertwo,10";
                                        $search_resulttwo = checktwo($searchTermtwo);
                                    }

                                    function checktwo($searchTermtwo) {
                                        include 'helper.php';
                                        //look for the saerch Term
                                        $checkDatatwo = mysqli_query($conn, $searchTermtwo);
                                        return $checkDatatwo;
                                    }

                                    for ($i = 0; $i < $j; $i++) {
                                        ?>
                                        <a href="admin-register-event.php?registerEvent2=<?php echo $i + 1; ?>"><?php echo $i + 1; ?></a>
                                        <?php
                                    }
                                    ?>


                                </div>

                            </div>
                            <thead>
                                <tr colspan="5">
                                    <th scope="col">Taruc IGS Registered User</th>
                                </tr>
                                <tr>
                                    <th scope="col">Ticket ID</th>
                                    <th scope="col">Activity ID</th>
                                    <th scope="col">Ticket Quantity</th>
                                    <th scope="col">Ticket Purchase Date</th>
                                    <th scope="col">Payment ID</th>
                                    <th scope="col">Payment Status</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <?php
//                                $sqlevent = "Select * from valorant_event limit $register,10";
//                                $result = mysqli_query($conn, $sqlevent);
                                while ($row2 = mysqli_fetch_assoc($search_resulttwo)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row2['TCK_ID']; ?></td>
                                        <td><?php echo $row2['Act_ID']; ?></td>
                                        <td><?php echo $row2['TCK_Quantity']; ?></td>
                                        <td><?php echo $row2['TCK_PurchaseDate']; ?></td>
                                        <td><?php echo $row2['P_Payment_ID']; ?></td>
                                        <td><?php echo $row2['Payment_Status']; ?></td>
                                        <td><a href="editeventvalorant.php?id2=<?php echo $row2['TCK_ID']; ?>"><button type="button" class="btn btn-primary btn-sm">
                                                    Edit</button></a></td>
                                        <td><a href="delete_event2.php?event2=<?php echo $row2['TCK_ID']; ?>"><button type="button" class="btn btn-danger btn-sm">
                                                    Delete</button></a></td>
                                    </tr>
                                    <?php
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </form>



            </div>
    </body>
</html>

