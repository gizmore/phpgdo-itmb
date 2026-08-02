<div style="padding: 8px 4.5rem;">
    <h3>Lebenslauf</h3>
    <h4>Christian Busch</h4>
    <h5>Anwendungsentwickler</h5>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6">
        <div>
            <?=\GDO\UI\GDT_Icon::iconS('user')?>Profil
            <p>Mein erster Kontakt mit der Programmierung geschah im Jahr 1988, C=64 Basic und Assembler.</p>
            <p>1997 - 2000 programmierte ich ein wenig C++ auf dem Amiga und dem PC. Seitdem viel PHP und Java.</p>
            <p>2008 gründete ich die Hacking-Challenge Seite <a href="https://www.wechall.net">wechall.net</a>.</p>
        </div>

        <div>
            <table class="table">
                <thead>
                <tr><th colspan="2"><?=\GDO\UI\GDT_Icon::iconS('work')?>Beruflicher Werdegang</th></tr>
                </thead>
                <tbody>
                <tr><td>2012 - 2017</td><td>Auszubildender und Angestellter bei <a href="https://www.cstx.de/">CSTX Braunschweig</a><br/>
                    JSF, Hibernate, Tomcat, RubyOnRails, IOS, ObjectiveC</td></tr>
                <tr><td>2017 - 2023</td><td>Entwickler bei <a href="https://bmpgmbh.de">BMP GmbH</a><br/>
                        PHP5-8, DevExtreme, JS, Bootstrap5, Laravel, Eigenentwicklungen</td></tr>
                <tr><td>2024 - 2026</td><td>Entwickler bei <a href="https://linqforce.de">Linqforce</a><br/>
                        CakePHP, Materialize, Bootstrap5</td></tr>
                </tbody>
            </table>
        </div>
        <div>
            <table class="table">
                <thead>
                <tr><th colspan="2"><?=\GDO\UI\GDT_Icon::iconS('book')?>Schulbildung</th></tr>
                </thead>
                <tbody>
                <tr><td>1986 - 1990</td><td>Grundschule Bothel</td></tr>
                <tr><td>1990 - 1992</td><td>Orientierungsstufe Rotenburg Wümme</td></tr>
                <tr><td>1992 - 1994</td><td>Ratsgymnasium Rotenburg Wümme</td></tr>
                <tr><td>1994 - 1998</td><td>Realschule Groß Ilsede</td></tr>
                <tr><td>2000 - 2001</td><td>Abendrealschule Peine</td></tr>
                <tr><td>2002 - 2003</td><td>Fachgymnasium IT Braunschweig</td></tr>
                <tr><td>2012 - 2014</td><td>Fachinformatik-Ausbildung<br/>Otto Bennemann Schule Braunschweig</td></tr>
                </tbody>
            </table>
        </div>
    </div>


      <div class="col-md-6">
        <div>
            <h5>Details</h5>
            <address>
                <div>Christian Busch</div>
                <div>Am Bauhof 15</div>
                <div>31224 Peine</div>
                <div>Germany</div>
                <p><a href="tel:004917659598844"><?=\GDO\UI\GDT_Icon::iconS('phone')?>+49 176 59 59 88 44</a></p>
                <div><a href="mailto:CBusch1980@gmx.de"><?=\GDO\UI\GDT_Icon::iconS('email')?>CBusch1980@gmx.de</a></div>
            </address>
        </div>

        <div>
            <?=\GDO\UI\GDT_Link::make()->textRaw('Kenntnisse')->href(href('ITMB', 'Pricing'))->render()?>
            <ol>
                <li>PHP5-8</li>
                <li>Java</li>
                <li>Javascript</li>
                <li>MySQL</li>
                <li>Linux</li>
                <li>Ruby</li>
                <li><a href="https://www.wechall.net/profile/gizmore">Hacking</a></li>
            </ol>

        </div>
    </div>
  </div>
</div>
