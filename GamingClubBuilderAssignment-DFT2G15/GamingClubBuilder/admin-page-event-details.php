<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->

<?php
include 'helper.php';
$page_title = 'Insert Events';

$tname = 'admineventdetail';
$pkey = 'Ev_ID';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['Title'];
    $subtitle = $_POST['SubTitle'];
    $comment = $_POST['comment'];
    $pic = $_FILES['fileToUpload']['tmp_name'];

    if (empty($title) || strlen($title) > 20) {
        $error['Title'] = "Please insert a title name, and ensure that it is less than 20 chars.";
    }

    if (empty($subtitle)) {
        $error['SubTitle'] = "Please insert a Subtitle.";
    }

    if (empty($comment)) {
        $error['comment'] = "Please insert a Description.";
    }

    if (empty($pic)) {
        $error['fileToUpload'] = "Please insert a Picture.";
    }

    if (isset($error)) {
        echo "Please provide all information!!";
    } else {
        $sql = "INSERT INTO admineventdetail (Ev_Title,Ev_SubTitle,Ev_Desc,Ev_Pic) VALUES ('$title','$subtitle','$comment','$pic')";
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute();
        if ($result === true){
            echo '<h4> Event Added!</h4>
  <ul class="mb-0">';
        }
    }
}
?>
<html>
    <head>
        <title>Admin Event Details</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="admin-page-event-details.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://fonts.cdnfonts.com/css/futurik" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



        <link rel="stylesheet" href="http://fonts.cdnfonts.com/css/games" >
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
                <table class="table table-hover ">
                    <div class="upload-admin text-center justify-content-center">
                        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                            Select image to upload:               
                            <input type="file" id='admin-event-word'name="fileToUpload" <?= !isset($pic) ?: "value='$pic'" ?>  >
                            </div>
                            <br>

                            <div class='admin-event-description 'id='admin-description-event'>
                                <textarea rows="1" cols="50" placeholder="Title" name="Title" <?= !isset($title) ?: "value='$title'" ?> ></textarea>
                                <textarea rows="1" cols="90" placeholder="SubTitle" name="SubTitle" <?= !isset($subtitle) ?: "value='$subtitle'" ?> ></textarea>
                                <textarea rows="5" cols="120" name="comment" placeholder="comment" <?= !isset($comment) ?: "value='$comment'" ?> ></textarea>

                            </div>
                            <div class='admin-event-post text-center justify-content-center p-3'>
                                <input type="submit" class="btn btn-outline-dark" value="Post">
                         
                            </div>
                            </table>

                        </form>

                    </div>
            </div>




    </body>
</html>