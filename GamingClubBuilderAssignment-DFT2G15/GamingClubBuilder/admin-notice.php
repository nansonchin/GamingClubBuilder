<html>
    <head>
        <title>Admin Notice</title>
        <link rel="stylesheet" href="admin-user-table.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://fonts.cdnfonts.com/css/futurik" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="http://fonts.cdnfonts.com/css/games" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="jquery.tabledit.min.js"></script>
        <?php include 'helper.php' ?>
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
                <table id="editable_table" class="table table-hove">
                    <form action="admin-notice.php?notice=" method="POST"> 
                        <div class='admin-user-top'>

                            <div class='admin-user-search'>
                                <input type="search" id="admin-user-search" name="admin-user-search" placeholder="Search">
                                <button class="btn btn-primary btn-sm" name="search" type="submit">Search</button></input>
                            </div>

                            <div class='admin-user-page'>
                                <a href="#">&laquo;</a>
                                <?php
                                $count1 = 0;
                                $sql1 = "Select * From notice";
                                $result1 = mysqli_query($conn, $sql1);
                                if (mysqli_num_rows($result1) > 0) {
                                    while ($line = mysqli_fetch_array($result1)) {
                                        $count1++;
                                    }
                                }

                                $x = $count1 /5;
                                $y = ceil($x);
                                ?>
                                <?php
                                $notice = $_GET['notice'];
                                if ($notice == "" || $notice == '1') {
                                    $notice1 = 0;
                                } else {
                                    $notice1 = ($notice * 5) - 5;
                                }

                                if (isset($_POST['search'])) {
                                    $valueToSearch = $_POST['admin-user-search'];
                                    $searchTerm = "SELECT * FROM `notice` WHERE concat(`N_Notice_ID`, `N_Notice_Desc`, `N_Notice_Date`, `N_Notice_ID`) LIKE '%" . $valueToSearch . "%' limit $notice1,5";
                                    $search_result = check($searchTerm);
                                } else {
                                    $searchTerm = "Select * from notice limit $notice1,5";
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
                                    <a href="admin-notice.php?notice=<?php echo $i + 1; ?>"><?php echo $i + 1; ?> </a>

                                    <?php
                                }
                                ?>       
                                <a href="#">&raquo;</a>

                            </div>
                        </div>
                        <div class="create">
                            <a href="createNotice.php"> <button type="button" class="btn btn-primary btn-sm">Create </button></a></td>
                        </div>
                        <thead>
                            <tr colspan="5">
                                <th scope="col">Taruc IGS Announcement</th>
                            </tr>
                            <tr>
                                <th scope="col">Notice Type</th>
                                <th scope="col">Details</th>
                                <th scope="col">Notice Date</th>
                                <th scope="col">Notice ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
//                            $sql = "Select * from notice_land limit $notice1,5";
//                            $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($search_result)) {
                                    ?>
                                <tr>

                                    <td> <?php echo $row['NT_Type']; ?> </td>
                                    <td> <?php echo $row['N_Notice_Desc']; ?> </td>
                                    <td> <?php echo $row['N_Notice_Date']; ?> </td>
                                    <td> <?php echo $row['N_Notice_ID']; ?> </td>

                                    <td><a href="edit.php?id=<?php echo $row['N_Notice_ID']; ?>"><button type="button" class="btn btn-primary btn-sm">
                                                Edit</button></a></td>
                                    <td><a href="delete_notice.php?notice=<?php echo $row['N_Notice_ID']; ?>"><button type="button" class="btn btn-danger btn-sm">
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