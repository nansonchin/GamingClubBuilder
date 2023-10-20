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
        <?php 
        include 'helper.php';
        $id=0;
        $id=$_GET['id'];
        $sql3="SELECT Payment_Status from ticket where TCK_ID='$id' ";
        $result3= mysqli_query($conn,$sql3);
        $row=mysqli_fetch_array($result3);
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
                <h3> EDIT Event PAGE</h3>
                <table id="editable_table" class="table table-bordered">
                    <form action="update-apex.php?id=<?php echo $id; ?>" method="POST"> 
                        <label>Payment Status: </label> <input type="text" value="<?php echo $row['Payment_Status']; ?>" name="aestatus">
                        <br>
                        <input type="submit"name="submit">
                        <a href="admin-register-event.php?="><button>Back</button></a>
                        
                    </form>
                </table>
            </div>
        </div>
    </body>
</html>
