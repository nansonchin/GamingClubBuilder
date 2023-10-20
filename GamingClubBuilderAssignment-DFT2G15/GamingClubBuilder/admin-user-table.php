<html>
    <head>
        <title>Admin All user</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="admin-user-table.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://fonts.cdnfonts.com/css/futurik" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="http://fonts.cdnfonts.com/css/games" >
<!--        <script src="jquery.tabledit.min.js"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


        <title></title>

        <?php
        include 'helper.php';
        ?>
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

            <div class="table-all-user p-3 mb-5 rounded">
                <table class="table table-hover ">
                    <div class='admin-user-top'>
                        <div class='admin-user-search'>
                            <form action ="admin-user-table.php?page=" method="POST">
                                <input type="search" id="admin-user-search" name="admin-user-search" placeholder="Search">
                                <button class="btn btn-primary btn-sm" name="search" type="submit">Search</button></input>

                        </div>
                        <div class='admin-user-page'>
                            <!--    // countpage-->
                            <?php
                            $count1 = 0;
//select all data to count the row
//record start from 0 and limit to 6
                            $sql1 = "Select * From member";
                            $result1 = mysqli_query($conn, $sql1);
                            if (mysqli_num_rows($result1) > 0) {
                                //if the data is larger than 0 and the data !=null
                                //the counter increase to get the total line that are in db
                                while ($line = mysqli_fetch_array($result1)) {
                                    $count1++;
                                }
                                // to determine the which page = $i need show out how many data
                            }

                            $x = $count1 / 5;
//7 data 2 = 2 pages will be used 
                            $y = ceil($x);
//                            echo $y;        
                            ?>
                            <a href="">&laquo;</a>
                            <?php
                            $page = $_GET['page'];
                            if ($page == "" || $page == "1") {
                                $page1 = 0;
                            } else {
                                //0,6
                                //6,6
                                //12,6
                                //limit counting 
                                // if page1=1 then (1*6)-6
                                $page1 = ($page * 5) - 5;
                            }


                            if (isset($_POST['search'])) {
                                $valueToSearch = $_POST['admin-user-search'];
                                $searchTerm = "SELECT * FROM `member` WHERE concat (`Mem_MemberID`, `Mem_Member_FirstName`, `Mem_Member_LastName`, `Mem_UserName`, `Mem_Password`, `Mem_Email`, `Mem_Phone`, `Mem_MemberGender`, `Mem_status`) LIKE '%" . $valueToSearch . "%' limit $page1,5";
                                $search_result = check($searchTerm);
                            } else {
                                $searchTerm = "Select * from member limit $page1,5";
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
                                <a href="admin-user-table.php?page=<?php echo $i + 1; ?>"><?php echo $i + 1; ?> </a>
                                <?php
                            }
                            ?>

                            <a href="admin-user-table.php?page=<?php echo $i; ?>">&raquo;</a>

                        </div>

                    </div>
                    <thead>
                        <tr >
                            <th scope="col" colspan="3">Taruc IGS All User</th>
                        </tr>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">FirstName</th>
                            <th scope="col">LastName</th>
                            <th scope="col">UserName</th>
                            <th scope="col">Password</th>
                            <th scope="col">Gmail</th>
                            <th scope="col">Phone No</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Account Status</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        while ($row = mysqli_fetch_assoc($search_result)) {
                            ?>
                            <tr>

                                <td> <?php echo $row['Mem_MemberID']; ?> </td>
                                <td> <?php echo $row['Mem_Member_FirstName']; ?> </td>
                                <td> <?php echo $row['Mem_Member_LastName']; ?> </td>
                                <td> <?php echo $row['Mem_UserName']; ?> </td>
                                <td> <?php echo $row['Mem_Password']; ?> </td>
                                <td> <?php echo $row['Mem_Email']; ?> </td>
                                <td> <?php echo $row['Mem_Phone']; ?> </td>
                                <td> <?php echo $row['Mem_MemberGender']; ?> </td>
                                <td><?php echo $row['Mem_status'];?></td>
                                <td><a href="edit-user.php?mid=<?php echo $row['Mem_MemberID']; ?>"><button type="button" class="btn btn-primary btn-sm">
                                            Edit</button></a></td>
                                <td><a href="delete_data.php?delete=<?php echo $row['Mem_MemberID']; ?>"><button type="button" class="btn btn-danger btn-sm">
                                            Delete</button></a></td>
                            </tr>
                            <?php
                        }
                        ?>


                    </tbody>
                    </form>
            </div>
        </div>

    </body>
</html>