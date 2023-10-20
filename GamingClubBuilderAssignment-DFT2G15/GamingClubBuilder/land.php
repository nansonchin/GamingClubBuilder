<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
      
        <title>Home Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="land.css">
        <link rel="stylesheet" href="http://fonts.cdnfonts.com/css/games" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://fonts.cdnfonts.com/css/futurik" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="home-video-howerply.js"></script>
        <script src="livetime.js"></script>
        <title></title>
    </head>
    <body onload="startTime()">
     
        <div class="head">
            <?php
            include 'head.php';
            ?>
        </div>

        <div class="content" >

            <div id="myCarousel" class="carousel m1-3" data-ride="carousel" >
                <ol class=" carousel-indicators " style="max-height: 800px">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>  
                </ol>
                <div class="carousel-inner " style="background:black;"> 

                    <div class="item active mt-5">
                        <img src="https://external-preview.redd.it/JOjymTTIVhBljIjlYrOrQP2dPptao5SphpLQaSRbYzU.jpg?auto=webp&s=588e590edc1c6e9f5c1d5b0c80e745c475247726"
                             alt="apex_legend_CR2022" style="margin-left: auto;margin-right: auto; width:90%; max-height:700px;">
                        <div class="carousel-caption">
                            <h2> Apex Legend Competition is now available</h2>
                            <h2> Who would bring the <em>VICTORY</em> back? </h2>
                        </div>
                    </div>

                    <div class="item mt-5">
                        <img src="https://twinfinite.net/wp-content/uploads/2021/03/gVCvrparjQfjZwdWFgYPuW.jpg"
                             alt="valorant_CR2022" style="  margin-left: auto;margin-right: auto;width:90%;max-height:700px;">
                        <div class="carousel-caption">
                            <h2> Valorant Competition is coming on this <strong>October</strong></h2>
                            <h2> Anyone is available to register from <em>01-Sep-2022 to 30-Sep-2022</em></h2>
                        </div>
                    </div>

                    <div class="item mt-5">
                        <img src="https://wallpapercave.com/wp/wp9476615.jpg"
                             alt="Pso2ngs_CR2022" style="margin-left: auto;margin-right: auto;width:90%;max-height:700px;">
                        <div class="carousel-caption">
                            <h2> A new game <strong> LIVE CONCERT EVENT</strong> is coming</h2>
                            <h2> Phantasy Star 2 New Genesis Online</h2>
                        </div>
                    </div>

                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div> 


            <div class="game-logo">
                <div class="game-detail">
                    <img src ="https://seeklogo.com/images/A/apex-logo-C3478A4601-seeklogo.com.png"
                         alt="apex-logo"/>
                    <img src="https://images.cults3d.com/4QqRV9kLYYEuw9ur_X3yjQl1sjk=/516x516/https://files.cults3d.com/uploaders/15024335/illustration-file/a86d53e4-2bd9-4a8f-9550-986686c3131a/gi0mAjIh_400x400.png"
                         alt="valorant-logo"/>
                    <img src="https://pbs.twimg.com/media/EdoEfLqWkAES7uw.jpg"
                         alt="pso2ngs-logo"/>
                </div>
            </div>

            <div class="2ndpart text-center justify-content-center ">
                <div class="notice text-center justify-content-center">
                    <div class="live-time justify-content-center text-center">
                        <h1> GST+8 <span id="time"> </span></h1>
                        <script src="index.js"></script>
                    </div>
                    <table class="table-notice text-center justify-content-center">

                        <tr>
                            <th id='table-head' colspan='4'> NOTICE</th>
                        </tr>

                        <?php
                        include 'helper.php';
                            $notice1=0;
                                $notice="";
                                $notice = $_GET['notice'];
                                if ($notice == "" || $notice == "1") {
                                    $notice1 = 0;
                                } else {
                                    //0,6
                                    //6,6
                                    //12,6
                                    //limit counting 
                                    // if page1=1 then (1*6)-6
                                    $notice1 = ($notice * 8) - 8;
                                }
//                          
                                $count1 = 0;
//select all data to count the row
//record start from 0 and limit to 6
                                $sql1 = "Select N_Notice_ID,N_Notice_Desc,NT_Type from notice ";
                                $result1 = mysqli_query($conn, $sql1);
                                if (mysqli_num_rows($result1) > 0) {
                                    //if the data is larger than 0 and the data !=null
                                    //the counter increase to get the total line that are in db
                                    while ($line = mysqli_fetch_array($result1)) {
                                        $count1++;
                                    }
                                    // to determine the which page = $i need show out how many data
                                }

                                $x = $count1 / 8;
//7 data 2 = 2 pages will be used 
                                $y = ceil($x);
//                            echo $y;        
                                
                        $sql = "Select N_Notice_ID,N_Notice_Desc, N_Notice_Date,NT_Type from notice limit $notice1,8";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td> <?php echo $row['N_Notice_ID']; ?> </td>
                                <td> <?php echo $row['N_Notice_Desc']; ?> </td>
                                <td> <?php echo $row['N_Notice_Date']; ?> </td>
                                <td> <?php echo $row['NT_Type']; ?> </td>
                            </tr>            
                            <?php
                        }
                        ?>
                        <tr></tr>    
                        <tr>
                            <td></td>
                            <td></td>
                            <td>   

                                <?php
                            

                                for ($i = 0; $i < $y; $i++) {
                                    ?>
                                    <a href="land.php?notice=<?php echo $i + 1; ?>"><?php echo $i + 1; ?> </a>
                                    <?php
                                }
                                ?></td>
                        </tr>   
                    </table>

                </div>
            </div>

            <div class='video bg-image'>
                <div class="video-heading">
                    <h4> Best Moment Record From the Competition</h4>
                </div>
                <div class="videocompetition">
                    <table class="vtable">
                        <tr> 
                            <td class="d-flex flex-row-reverse m-5 "><video class="video1" id="video1" loop onmouseover="this.play()", onmouseout="this.pause()">
                                    <source src="top10bestApex.mp4" type="video/mp4"> 
                                </video>
                            </td>
                            <td class="m-5"><video class="video2" id="video2" loop onmouseover="this.play()", onmouseout="this.pause()">
                                    <source src="top30bestVal.mp4" type="video/mp4">    
                                </video>
                            </td>
                        </tr>
                        <tr>
                            <td class="d-flex flex-row-reverse m-5 "><video class="video3" id="video3" loop onmouseover="this.play()", onmouseout="this.pause()">
                                    <source src="apexVtuberop.mp4" type="video/mp4">    
                                </video>
                            </td>
                            <td class="m-5 "><video class="video4" id="video4" loop onmouseover="this.play()", onmouseout="this.pause()">
                                    <source src="valTrail.mp4" type="video/mp4">    
                                </video>
                            </td>
                        </tr>

                    </table>

                </div>

            </div>

            <div class="community ">
                <h1 id="headCommunity">Join Our Community</h1>
                <div class="community-logo ">
                    <a href="#"><img style="width:90px; height:80px;" src="https://www.clipartmax.com/png/full/307-3072089_discord-logo-computer-icons-reddit-discord-icon.png"></a>
                    <a href="#"><img style="width:90px; height:80px;" src="https://www.clipartmax.com/png/full/4-41427_instagram-png-icon-instagram-logo-transparent.png"></a>
                    <a href="#"><img style="width:90px; height:80px;" src="https://www.clipartmax.com/png/full/8-84932_capstone-college-of-nursing-png-format-twitter-png-logo.png"></a>
                    <a href="#"><img style="width:90px; height:80px;" src="https://www.clipartmax.com/png/full/14-146275_about-us-contact-us-disclaimer-copyright-%C2%A9-2018-fa-fa-whatsapp-icon.png"></a>
                    <a href="#"><img style="width:90px; height:80px;" src="https://www.clipartmax.com/png/full/130-1301211_spiele-twitch-logo.png"></a>
                </div>
            </div>

        </div> 
        <div class="footer">
            <?php
            include 'footer.php';
            ?>
        </div>
    </body>
<script>

</script>
</html>