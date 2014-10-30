<?php
	Error_reporting(E_ALL);
	if(isset($_GET['page']))
		$page= $_GET['page'];
	else
		$page=0;
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <link rel="stylesheet" type="text/css" href="HomeCareStyle.css">
        <title>
            <?php
            switch($page)
            {
                case "1":
                   echo "Statistikk";
                    break;
                case "2":
                    echo "Kontakt lege";
                    break;
                case "3":
                    echo "Test";
                case "4":
                    echo "Sender";
                    break;
                case "5":
                    echo "Sendt";
                    break;
                default:
                    echo "Hovedmeny";
                    break;
            }
            ?>
        </title>
    </head>
    <body>
        <section class="main">
            <header>
                <h1><a href="index.php">HomeCare</a></h1>
                <img src="profilbilde.jpg"/>
                <h3>Jens Jensen</h3>
           </header>
                <section class="content">
                     <?php
                    
                    switch($page)
                    {
                            case "0":
                                include ("hovedmeny.php");
                                break;

                            case "1":
                                include ("test.php");
                                break;

                            case "2":
                                include ("blodInn.php");
                                break;
                            
                            case "3":
                                include ("tale.php");
                                break;
                            case "4":
                                include ("senderResultat.php");
                                break;
                            case "5":
                                include ("sendt.php");
                                break;
                            default :
                            include ("hovedmeny.php");             
                    }
                    ?>
                    
                </section>
            <footer>
                <section>
                     <em>&copy; HomeCare</em>
                </section>
            </footer>
        </section>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    </body>
</html>
