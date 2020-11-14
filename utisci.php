<html>


<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>Naslovna</title>
    </head>
    <body>
        <div class="navigation">
            <a  href="index.html"><img src="logo.PNG" alt="logo" ></a>
            <div class="navi">
                <a HREF="index.html">NASLOVNA</a>
                <a href="ISTORIJA.html">ISTORIJA</a>
                <a href="PRENOCISTA.html">PRENOĆIŠTA</a>
                <a href="TURIZAM.html">TURIZAM</a>
                <a href="UTISCI.php">UTISCI</a>
            </div>       
        </div >
        <div class="body">
        <div>
        <form action="komentar.php" method="post">
<label> Ime : <br><input type="text" name="ime"><br></label>
<label> Misljenje : <br><textarea cols="35" rows="5" name="misljenje"></textarea><br></label>
<input type="submit" name="post" value="post">


</form>
</div>

<div>

        <?php
        $read= fopen("com.txt", "r+t");
            echo "svi komentari:";
            while (!feof($read)){
            echo fread($read,1024);}
            fclose($read);
        ?>
        </div>
    </div>
    <div class="footer">
            <p>Sva prava zadržava Dragica Pantić</p>
            </div>
                        
                        
                        
            </div>
            </body>

</html>

