<?php
namespace GDO\ITMB\tpl\page;

use GDO\ITMB\Module_ITMB;
use GDO\UI\GDT_Bar;
use GDO\UI\GDT_Box;use GDO\UI\GDT_Image;
use GDO\UI\GDT_Link;

$m = Module_ITMB::instance();
?>
    <h2><?=t('itmb_home_h2')?></h2>

<?php
$linkCV = GDT_Link::make()->href(href('ITMB', 'CV'))->text('link_cv')->render();
$linkPrice = GDT_Link::make()->href(href('ITMB', 'Pricing'))->text('link_pricing')->render();
?>

<?=GDT_Box::make()->addText('itmb_home_info', [sitename()])->render()?>

<?=GDT_Box::make()->addText('itmb_about_info', [$linkCV, $linkPrice])->render()?>

    <?=GDT_Image::make()->src($m->wwwPath('img/logo2021.jpg'))->addClass('itmb-home-logo')->css('width', '320px')->render()?>


	<?php
$cont = GDT_Bar::make()->vertical()->wrap(false);
$cont->addField(GDT_Link::make('link_pricing')->href($m->href('Pricing')));

echo $cont->render();
