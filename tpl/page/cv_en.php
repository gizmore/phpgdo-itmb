<div style="padding: 8px 4.5rem;">
    <h3>Curriculum Vitae</h3>
    <h4>Christian Busch</h4>
    <h5>Developer</h5>
</div>

<div class="container">
  <div class="row">

    <div class="col-md-6">
        <div>
            <?=\GDO\UI\GDT_Icon::iconS('user')?>Profil
            <p>My first contact with programming was back in 1988. With an age of 8 years, i coded a bit  C=64 Basic und Assembly.</p>
            <p>1997 - 2000 i programmed a bit C++ on the Amiga and the PC. Since then, plenty of Java and PHP.</p>
            <p>2008 i founded the Hacking-Challenge Site <a href="https://www.wechall.net">wechall.net</a>.</p>
        </div>

        <div>
            <table class="table">
                <thead>
                <tr><th colspan="2"><?=\GDO\UI\GDT_Icon::iconS('work')?>Beruflicher Werdegang</th></tr>
                </thead>
                <tbody>
                <tr><td>2012 - 2017</td><td>Apprentice and developer at <a href="https://www.cstx.de/">CSTX Brunswick</a><br/>
                        JSF, Hibernate, Tomcat, RubyOnRails, IOS, ObjectiveC
                    </td></tr>
                <tr><td>2017 - 2023</td><td>Developer at <a href="https://bmpgmbh.de">BMP GmbH</a><br/>
                    PHP5-8, Laravel, JS, DevExtreme, In-House Development
                    </td></tr>
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
                <tr><td>1986 - 1990</td><td>Primary School Bothel</td></tr>
                <tr><td>1990 - 1992</td><td>Orientation School Rotenburg Wümme</td></tr>
                <tr><td>1992 - 1994</td><td>High School Rotenburg Wümme</td></tr>
                <tr><td>1994 - 1998</td><td>Secondary School Groß Ilsede</td></tr>
                <tr><td>2000 - 2001</td><td>Secondary School Peine</td></tr>
                <tr><td>2002 - 2003</td><td>IT HighSchool Braunschweig</td></tr>
                <tr><td>2012 - 2014</td><td>Training IT Developer<br/>Otto Bennemann School Brunswick</td></tr>
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
