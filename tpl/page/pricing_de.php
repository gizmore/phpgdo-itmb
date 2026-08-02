<?php
namespace GDO\ITMB\tpl\page;

use GDO\Core\GDO;
use GDO\Core\GDT_CreatedAt;
use GDO\Core\GDT_CreatedBy;
use GDO\Core\GDT_Text;
use GDO\Table\GDT_ListItem;
use GDO\UI\GDT_Accordeon;
use GDO\UI\GDT_Box;
use GDO\UI\GDT_Container;
use GDO\UI\GDT_Headline;
use GDO\UI\GDT_Link;
use GDO\UI\GDT_Panel;
use GDO\UI\GDT_Paragraph;

$accordion = GDT_Box::make()->title('itmb_pricing_h2')->addText('itmb_pricing_info');

$links = [
    'Hacking' => ['WeChall', 'https://www.wechall.net/profile/gizmore', '2008-02-18 13:37:42.314',
        'Mein Profil auf wechall.net. Ein Hacking-Challenge Portal mit globalem Ranking. Dieses habe ich am 18.Feb.2008 online gestellt, und dort sind über 100 Aufgaben zum Thema Sicherheit und IT von mir verfügbar.'],
    'Hacking ' => ['Public Exploit', 'https://packetstormsecurity.com/files/74743/Ilch-CMS-SQL-Injection.html',
        '2009-02-06 13:37:42.314', 'Eine der wenigen Sicherheitslücken, die ich veröffentlicht habe.'],
    'Python' => ['PyGDO', 'https://github.com/gizmore/pygdo', '2024-02-03 03:14:15.420',
        'Mein GDO Framework als Python version.'],
    'C++' => ['YaBFDbg', 'https://github.com/gizmore/yabfdbg', '2008-08-08 13:37:42.314',
        'Ein interaktiver &quot;Brainfuck&quot; Debugger in C++/GTK+.'],
    'PHP' => ['phpgdo', 'https://github.com/gizmore/phpgdo', '2021-11-09 13:37:42.314',
        'Mein eigenes PHP Framework (Version7) &quot;phpgdo&quot;'],
    'PHP ' => ['Mettwitze', 'https://mettwitze.gizmore.org/', '2020-02-20 13:37:42.314',
        'Beispielseite mit meinem Framework &quot;GDOv6&quot;.'],
    'PHP  ' => ['EdwardSnowdenLand', 'https://es-land.net/', '2023-12-24 13:37:42.314',
        'Beispielseite mit meinem Framework &quot;phpgdo&quot;. Ziel ist es auf change.org aufmerksam zu machen.'],
    'Java' => ['JPK / JavaPocketKnife', 'https://github.com/gizmore/jpk', '2009-01-14 13:37:42.314',
        'Ein Java TextEditor für das editieren und analysieren von Text und verschlüsselten und versteckten Inhalten.'],
    'JS' => ['Wanda', 'https://wanda.gizmore.org/', '2017-08-23 13:37:42.314',
        'Eine weitere Demoseite in GDOv6. Eine Kinderfabel, Hacking Challenge und klicken Sie unten rechts die &quot;Danksagungen&quot; für eine Javascript Scene Demo.'],
    'Ruby' => ['libpurple', 'https://github.com/gizmore/purple_ruby', '2014-09-13 13:37:42.314',
        'Ich habe eine SingleThread Erweiterung in ruburple/libpurple vorgenommen, für meinen Chatbot.'],
    'Ruby ' => ['ricer2', 'https://github.com/gizmore/ricer2', '2015-11-28 13:37:42.314',
        'Ein modularer Chatbot, umgesetzt mit RubyOnRails.'],
    'Ruby  ' => ['railsbin', 'https://railsbin.wechall.net', '2017-12-09 13:37:42.314',
        'Eine simple RubyOnRails Anwendung, ein Paste Service, die ich innerhalb eines Tages erstellt habe, für eine Hacking Challenge.'],
];

class Skill extends GDO
{

	public function gdoColumns(): array
	{
		return [
			GDT_CreatedAt::make('created'),
			GDT_CreatedBy::make('creator'),
		];
	}

}
echo $accordion->render();
?>
<!-- Begin List -->
<div class="gdt-list list-group">
    <div class="ui-body ui-body-a list-title">
        <h3 class="gdt-list-title"><?=t('itmb_pricing_skills_h2')?></h3>
    </div>
<!--    <ul data-role="listview">-->
		<?php
		foreach ($links as $cat => $data)
		{
			[$tag, $url, $date, $info] = $data;
			$skill = Skill::blank([
				'created' => $date,
				'creator' => '2',
			]);
			$catHeader = GDT_Headline::make()->level(2)->textRaw($cat);

			$li = GDT_ListItem::make()->gdo($skill)->creatorHeader();
			$cont = GDT_Container::make()->vertical();
//     $cont->css('word-break', 'break-all');
//     $contH = GDT_Container::make()->horizontal();
//     $cont->addField(GDT_Headline::make()->level(4)->textRaw($cat));
			$cont->addField(GDT_Link::make()->targetBlank()->href($url)->textRaw($tag)->labelRaw(sprintf('(%s)', html($cat)))->addClass('list-group-item'));
//     $cont->addField($contH);
			$cont->addField(GDT_Paragraph::make()->textRaw($info));
			$li->content($cont);
			echo $li->render();
		}
		?>
<!--    </ul>-->
</div>
<!-- End of List -->
