<html>
    <head>
        <?php
        $type = "";
        $desc = "";
        $err = "";
        $ok = "";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $type = $_POST['notice_Type'];
            $desc = $_POST['notice_Desc'];

            do {
                if (empty($desc)) {
                    $err = "Required type  data ";
                    break;
                } else if (empty($type)) {
                    $err = "Required desc  data ";
                    break;
                } else {
                    $type = "";
                    $desc = "";
                    $ok = "Added new Notice";
                }
            } while (false);
        }
        ?>

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
            <div class="table-all-user p-3 mb-5 rounded">
                <h1>Create New Notice</h1>

                <table class="table table-hover ">
                    <form action="createN.php" method="POST">

                        <tr>
                            <td>
                                <label>Notice Type: </label> 
                                <input type="text" value="" name="noticeType">
<!--                                <select name="cars" id="cars">
                                    <option name="noticeType" >NW</option>
                                    <option name="noticeType" >NS</option>
                                    <option name="noticeType" >NN</option>
                                    <option name="noticeType" >MN</option>
                                </select>-->
                         
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Details: </label> <input type="text" value="" name="noticecDesc">
                            </td>
                        </tr>  
                        <tr>
                            <td>
                                <input type="submit" name="add">
                            </td>
                        </tr>
                    </form>
                </table>
            </div>

    </body>
</html>



