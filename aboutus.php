<?php

class AboutUsPage {
    private $darkMode;

    public function __construct($darkMode)
    {
        $this->darkMode = $darkMode;
    }

    private function toggleDarkModeScript()
    {
        return '<script>
                    function toggleDarkMode() {
                        // Your toggle dark mode logic here
                    }
                </script>';
    }

    public function generateHeader()
    {
        return '<head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Rreth Nesh</title>
                    <link rel="stylesheet" href="aboutus.css">
                    ' . $this->toggleDarkModeScript() . '
                </head>';
    }

    public function generateMenu()
    {
        return '<header>
                    <div class="d1">
                        <div class="d2">
                            <div class="menu-item">
                                <label for="Divisions"><a href="main.php" target="_blank" style="text-decoration: none; color: inherit;">Back</a></label>
                            </div>
                        </div>
                        <div class="logo" onclick="toggleDarkMode()">
                            <img src="ufc.jpg" alt="UFC Logo">
                        </div>
                        <div>
                            <label for="contact"><a href="contactus.php" target="_blank" style="text-decoration: none; color: inherit;">Contact us</a></label>
                            <label for="about"><a href="aboutus.php" target="_blank" style="text-decoration: none; color: inherit;">Refresh</a></label>
                        </div>
                    </div>
                </header>';
    }

    public function generateSection()
    {
        return '<section>
                    <div>
                        <img src="UfcLogo.jpg" class="logo1" alt="Foto e Ekipit" class="section-image">
                    </div>
                    <div class="text-content">
                        <h2>Historia Jonë</h2>
                        <p>
                            Mirë se erdhët në UFC (Ultimate Fighting Championship)! Ne jemi një duo studentësh të Shkencave Kompjuterike dhe Inxhinierike, me pasion dhe dashuri për të punuar me faqe dhe aplikacione të ndryshme gjatë
                            gjithë ditës. Rrugëtimi ynë nisi këtë vit me qëllimin e bërjës së një website apo web faqeje për një projekt të caktuar shkollor.
                        </p>
                        <h2>Ekipi Ynë</h2>
                        <p>
                            Takoni individët e jashtëzakonshëm pas UFC(Ultimate Fighting Championship). Ekipi ynë i ndryshuar sjell
                            një pasuri të përvojës dhe ekspertizës në ndërtimin e një web faqeje. Ne besojmë në bashkëpunim,
                            kreativitet, dhe në ndikimin pozitiv në këtë webfaqe.
                        </p>
                        <h2>Vlerat Tona</h2>
                        <p>
                            Në UFC(Ultimate Fighting Championship), ne mbajmë një set vlerash bazë që udhëhoqin vendimet dhe
                            veprimet tona.
                        </p>
                        <h2>Kontakto</h2>
                        <p>
                            Do të dojim të dëgjojmë nga ju! Mos ngurroni të na kontaktoni në [diaridrizi15@gmail.com],[taulantr2004@gmail.com] ose vizitoni faqen tonë të
                            <a href="ContactUs.html">Kontaktit</a>.
                        </p>
                    </div>
                </section>';
    }

    public function generateHTML()
    {
        return '<!DOCTYPE html>
                <html lang="en">
                    ' . $this->generateHeader() . '
                    <body>
                        ' . $this->generateMenu() . '
                        ' . $this->generateSection() . '
                    </body>
                </html>';
    }
}


$darkModeEnabled = true; 
$aboutUsPage = new AboutUsPage($darkModeEnabled);
echo $aboutUsPage->generateHTML();
?>
