<?php
namespace GDO\ITMB\Method;

use GDO\Core\GDT;
use GDO\Core\Method;
use GDO\TCPDF\Module_TCPDF;
use TCPDF;

final class CVPDF extends Method
{

    public function execute(): GDT
    {
        $pw = 595;
        define('PDF_PAGE_ORIENTATION', 'P');
        define('PDF_UNIT', 'PT');
        define('PDF_PAGE_FORMAT', 'A4');
        Module_TCPDF::instance()->includeTCPDF();
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->AddPage('P');
        $x1 = 28;
        $x2 = 220;
        $x3 = 240;
        $x4 = 420;
        $hh = 164;
        $y = 50;
        $lh = 20;
        $a2 = 0.7;

        $pdf->setFillColor(243, 228, 221);
        $pdf->Rect(0, 0, $pw, $hh, 'F');
        $pdf->setFontSize(16);
        $pdf->Text($x1, $y, "CHRISTIAN BUSCH");
        $y += $lh + 3;
        $pdf->setFontSize(13);
        $pdf->Text($x1, $y, "Fachinformatiker Anwendungsentwicklung");
        $pdf->setColor(59, 54, 52);
        $pdf->setAlpha(0.52);
        $y += $lh;
        $y += $lh;
        $pdf->setFontSize(10);
        $pdf->Text($x1, $y, "Am Bauhof 15, 31224 Peine");

        $pdf->setFont(PDF_FONT_NAME_MAIN, 'U');
        $pdf->Text($x2, $y, 'christian@busch-peine.de',0, false, true, 0, 'mailto:christian@busch-peine.de');

        $y += $lh;
        $pdf->setFont(PDF_FONT_NAME_MAIN, '');
        $pdf->Text($x1, $y, '+49 176 59 59 88 44',0, false, true, 0, 'tel:004917659598844');
        $pdf->Text($x2, $y, '9 Nov. 1980');


        $y = 225;
        $pdf->setX($x1);
        $pdf->setY($y);
        $pdf->setFontSize(9);
        $pdf->setAlpha(0.82);
        $pdf->MultiCell(180, 200, "Ich programmierte bereits mit 8 Jahren auf dem C64 ein wenig Basic und Assembler.
        
Seit 1997 programmiere ich viel in C, PHP und Java.

2008 gründete ich die Hacking Challenge Seite www.wechall.net.", 0, 'L');



        $y += 110;
        $pdf->setFontSize(11);
        $pdf->MultiCell(90, $lh, "KOMPETENZEN", ['B' => ['width' => 2]], 'J', false, 1, $x1, $y);
        $y += $lh;
        $y += 16;
        $pdf->MultiCell(135, $lh, "PHP\nJava\nJavaScript\nRuby\nApache\nCLI", 0, 'J', false, 1, $x1, $y);

        $y = 480;
        $pdf->MultiCell(135, $lh, "SPRACHKENNTNISSE", ['B' => ['width' => 2]], 'J', false, 1, $x1, $y);
        $y += $lh;
        $y += 16;
        $pdf->MultiCell(135, $lh, "English\nDeutsch", 0, 'J', false, 1, $x1, $y);


        $y = 200;
        $pdf->MultiCell(135, $lh, "BERUFSERFAHRUNG", ['B' => ['width' => 2]], 'J', false, 1, $x3, $y);

        ################################################
        $y += $lh;
        $y += $lh;
        $pdf->setAlpha($a2);
        $pdf->MultiCell(135, $lh, "Entwickler", 0, 'J', false, 1, $x3, $y);
        $pdf->setAlpha(0.52);
        $pdf->setFont(PDF_FONT_NAME_MAIN, 'I');
        $pdf->MultiCell(135, $lh, "Mai 2017 — Jul 2023", 0, 'J', false, 1, $x4, $y);
        $y += $lh;
        $pdf->setAlpha($a2);
        $pdf->MultiCell(200, $lh, "BMP GmbH | Ilsede, Deutschland", 0, 'J', false, 1, $x3, $y);
        $pdf->setAlpha(0.52);
        $y += $lh;
        $pdf->setFontSize(8);
        $pdf->MultiCell(320, $lh, "Ich supportete und erweiterte bestehende PHP/JS Softwareprojekte in Eigenentwicklung. Auch Neuentwicklung mit Laravel und DevExtreme.
    
Portierungen von PHP5 auf PHP8 sowie IE7 auf Chrome.

Kenntnisse: PHP, Laravel, JS, jQuery,DevExtreme, Apache, IIS, CLI", 0, 'L', false, 1, $x3, $y);
        ####################################################
        $pdf->setFontSize(12);
        $y += $lh;
        $y += $lh;
        $y += $lh;
        $y += $lh;
        $y += $lh;
        $pdf->setAlpha($a2);
        $pdf->MultiCell(165, $lh, "Azubi und Entwickler", 0, 'L', false, 1, $x3, $y);
        $pdf->setAlpha(0.52);
        $pdf->setFont(PDF_FONT_NAME_MAIN, 'I');
        $pdf->MultiCell(135, $lh, "Mär 2011 — Feb 2017", 0, 'J', false, 1, $x4, $y);
        $y += $lh;
        $pdf->setAlpha($a2);
        $pdf->MultiCell(200, $lh, "CSTx | Braunschweig, Deutschland", 0, 'J', false, 1, $x3, $y);
        $pdf->setAlpha(0.52);
        $y += $lh;
        $pdf->setFontSize(8);
        $pdf->MultiCell(320, $lh, "Ich konnte Erfahrungen sammeln in:
        
Ruby On Rails, MySQL, Apache, PHP, SAP ERP, CRM, ABAP, iOS, ObjectiveC, Java, JSF, Spring, Tomcat, Hibernate, JS, Dojo, jQuery", 0, 'L', false, 1, $x3, $y);


        ####################################################
        $y += 80;
        $pdf->setFontSize(12);
        $pdf->MultiCell(135, $lh, "AUSBILDUNG", ['B' => ['width' => 2]], 'J', false, 1, $x3, $y);
        $y += $lh;
        $y += $lh;
        $pdf->setAlpha($a2);
        $pdf->MultiCell(165, $lh, "Fachinformatiker Anwendungsentwicklung", 0, 'L', false, 1, $x3, $y);
        $pdf->setAlpha(0.52);
        $pdf->setFont(PDF_FONT_NAME_MAIN, 'I');
        $pdf->MultiCell(135, $lh, "Jun 2011 — Jan 2015", 0, 'J', false, 1, $x4, $y);
        $y += $lh;
        $y += $lh;
//        $pdf->setAlpha(1);
        $pdf->MultiCell(400, $lh, "Otto-Benemann Schule | Braunschweig, Deutschland", 0, 'L', false, 1, $x3, $y);
        $pdf->setAlpha(0.52);

        $pdf->Rect($x3 - 10, $hh, 2, 664, 'F');

        $pdf->setXY($x4, 20);

        $pdf->setAlpha(1);
        $imageLocation = 'C:\\ProjektPHPGDO\\phpgdo\\GDO\\ITMB\\img\\foto2.jpg';
        $pdf->Image($imageLocation, $x4+60, 14, 100, 136);

//        $ext = 'jpeg';
//        $image = base64_encode(file_get_contents($imageLocation));
//        $pdf->writeHTML("<img src='data:image/$ext;base64,$image' width='100' height='100'>");

        $pdf->Output('Lebenslauf.pdf');
        die(0);
    }


}
