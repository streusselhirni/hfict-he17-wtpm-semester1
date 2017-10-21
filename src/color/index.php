<?php
    function getColor() {
        return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    }

    function streifen($count) {
        $width = 100/$count;
        for ($i = 0; $i < $count; $i++) {
            echo '<div class="streifen" style="background-color:'
                . getColor() . '; width:' . $width . '%"></div>';
        }
    }

    session_start();
    $count = 10;
    $counterror = false;
    if(isset($_GET['count'])) {
        if($_GET['count'] <= 0) {
            $counterror = true;
            $_SESSION['count'] = 15;
        }
        else {
            $_SESSION['count'] = $_GET['count'];
        }
    }
    if(isset($_SESSION['count'])) $count = $_SESSION['count'];
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./style.css">
        <title>Colorful</title>
        <meta http-equiv="refresh" content="5">
    </head>
    <body>
        <div class="ueberschrift-wrapper">
            <div class="ueberschrift">
                <h1>Willkommen auf meiner bunten Website</h1>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="content">
                <p><em>Effektives Webdesign setzt Farben gezielt ein</em></p>
                <p>Um Farben passend auszuwählen, sollte die Bedeutung und die Wirkung der einzelnen Farben bekannt sein.</p>
                <p>Farben haben eine intensive unbewusste Bedeutung, die jeden von uns beeinflusst. Die Wirkung kann individuell sehr unterschiedlich sein. Es gibt jedoch allgemeine Assoziationen, die für jeden zutreffen. Diese können wiederum von Kultur zu Kultur differenzieren.</p>
                <p>Viele Empfindungen werden uns von klein auf durch unsere Kultur und die Erziehung eingeprägt. Unsere Wahrnehmung ist dazu geprägt durch Moden und Trends.</p>
                <p>Farben lösen aber nicht nur Assoziationen aus, sondern vor allem auch Empfindungen und Gefühle. Diese werden im Marketing schon lange gezielt eingesetzt. In der Produktgestaltung, im Verpackungsdesign, aber auch in der Raumgestaltung.</p>
                <form action="?" method="get">
                    <input type="text" name="count" placeholder="Anzahl Streifen">
                    <input type="submit" value="Übernehmen">
                    (10)
                </form>
                <?php echo $counterror ? '<p class="error">Nur positive Zahlen erlaubt!</p>' : ''; ?>
            </div>
        </div>
        <?php
        streifen($count);
        ?>
    </body>
</html>
