<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WT-Demoprojekt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="full-width white">
        <div class="content-width white">
            <header class="header"><img src="logo.png" alt="HF-ICT Logo"></header>
        </div>
    </div>
    <div class="full-width green">
        <div class="content-width">
            <nav class="nav">
                <ul class="nav-list centralmargin">
                    <li class="nav-item"><a href="#">Willkommen</a></li>
                    <li class="nav-item"><a href="#">Organisation</a></li>
                    <li class="nav-item"><a href="#">Unterlagen</a></li>
                    <li class="nav-item"><a href="#">Wiki</a></li>
                    <li class="nav-item"><a href="#">Kontakt</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="full-width white">
        <div class="content-width">
            <h1 class="site-title">Hypertext Markup Language</h1>
        </div>
    </div>
    <div class="full-width blue">
        <div class="content-width">
            <section class="main">
                <p>
                Die Hypertext Markup Language (engl. für Hypertext-Auszeichnungssprache),
                abgekürzt HTML, ist eine textbasierte Auszeichnungssprache zur Strukturierung
                digitaler Dokumente wie Texte mit Hyperlinks, Bildern und anderen Inhalten.
                </p>
            <p>
                HTML-Dokumente sind die Grundlage des World Wide Web und werden von Webbrowsern
                dargestellt. Neben den vom Browser angezeigten Inhalten können HTML-Dateien
                zusätzlich Angaben in Form von Metainformationen enthalten, z.B. über die im Text
                verwendeten Sprachen, den Autor oder den zusammengefassten Inhalt des Textes.
            </p>
            </section>
        </div>
    </div>
    <div class="full-width">
        <div class="content-width">
            <div class="two-column">
                <div class="column">
                    <h2 class="subsite-title">Kontaktformular</h2>
                    <form action="?">
                        <div class="blue box form">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name">
                            <label for="adresse">Adresse</label>
                            <input type="text" name="adresse" id="adresse">
                            <label for="ort">Ort</label>
                            <input type="text" name="Ort" id="ort">
                            <label for="plz">PLZ</label>
                            <input type="text" name="PLZ" id="plz">
                            <label for="email">E-Mail</label>
                            <input type="email" name="email" id="email">
                            <label for="mitteilung">Mitteilung</label>
                            <textarea name="mitteilung" id="mitteilung" cols="30" rows="5"></textarea>
                        </div>
                        <button type="submit" class="form-button">Mitteilung absenden</button>
                    </form>
                </div>
                <div class="column">
                    <h2 class="subsite-title">Weitere Informationen</h2>
                    <div class="blue box">
                        <p><a href="#">Wikipedia</a></p>
                        <p><a href="#">SelfHTML</a></p>
                        <p><a href="#">HTML Tutorial - W3School</a></p>
                        <p><a href="#">HTML - W3C</a></p>
                    </div>
                    <div class="auto-margin">
                        <img src="html5.png" alt="HTML 5 Logo" class="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>