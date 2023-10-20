
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
        $id=$_GET['mid'];
        $sql3="SELECT * from member where Mem_MemberID ='$id' ";
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
                <h3> EDIT PAGE</h3>
                <table id="editable_table" class="table table-bordered">
                    <form action="update_member.php?mid=<?php echo $id; ?>" method="POST"> 
                        <label>FirstName: </label> <input type="text" value="<?php echo $row['Mem_Member_FirstName']; ?>" name="emfirst">
                        <br>
                        <label>LastName: </label> <input type="text" value="<?php echo $row['Mem_Member_LastName']; ?>" name="emlast">
                        <br>
                        <label>UserName: </label> <input type="text" value="<?php echo $row['Mem_UserName']; ?>" name="emuser">
                        <br>
                        <label>Password: </label> <input type="text" value="<?php echo $row['Mem_Password']; ?>" name="empass">
                        <br>
                        <label>Gmail: </label> <input type="text" value="<?php echo $row['Mem_Email']; ?>" name="ememail">
                        <br>
                         <label>Phone: </label> <input type="text" value="<?php echo $row['Mem_Phone']; ?>" name="emphone">
                        <br>
                        <label>Gender: </label> <input type="text" value="<?php echo $row['Mem_MemberGender']; ?>" name="emgender">
                        <br>
                        <label>Account Status: </label> <input type="text" value="<?php echo $row['Mem_status']; ?>" name="emstatus">
                        <br>
                        <input type="submit"name="submit">
                        <a href="admin-notice.php?="><button>Back</button></a>
                        
                    </form>
                </table>
            </div>
        </div>
    </body>
</html>