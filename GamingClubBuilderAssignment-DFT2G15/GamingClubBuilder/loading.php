<html>
    <head>
        <link rel="stylesheet" href="loading.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="http://fonts.cdnfonts.com/css/games" >
    </head>
    <body>
    <div class="widget-inner loadable" id="a">
        <img style="height:200px; width:400px;margin-left:200%; "src="data:image/png;base64,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"/>
        <h1 id="targame">GAMINGSOCIETY</h1>
    </div>
        <div class="ring">Loading
        </div>
        <script>
            setTimeout(function () {
                window.location.href = 'land.php?notice=1';
            }, 5000);
        </script>
    </body>
</html>