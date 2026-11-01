<?php
namespace GDO\ITMB;

use GDO\Core\GDO_Module;
use GDO\Core\Method;
use GDO\Core\Website;
use GDO\Favicon\Module_Favicon;
use GDO\UI\GDT_Headline;
use GDO\UI\GDT_Link;
use GDO\UI\GDT_Page;

/**
 * Website for my little company.
 *
 * @version 7.0.1
 * @since 6.4.0
 * @author gizmore
 */
final class Module_ITMB extends GDO_Module
{

	public function isSiteModule(): bool
	{
		return true;
	}

    public function getTheme(): ?string
    {
        return 'itmb';
    }

    public function onInstall(): void
    {
        Install::install();
    }

    public function defaultMethod(): Method
    {
        return $this->getMethod('Home');
    }

    public function onLoadLanguage(): void
	{
		$this->loadLanguage('lang/itmb');
	}

	public function getDependencies(): array
	{
		return [
			'Account',
			'ActivationAlert',
			'Address',
			'Admin',
			'Avatar',
			'Bootstrap5Theme',
			'Contact',
			'Favicon',
			'FontAtkinson',
            'Lounge',
			'Markdown',
			'Mibbit',
			'News',
			'Perf',
			'PM',
//			'Register',
			'Recovery',
            'TCPDF',
		];
	}

	public function onInitSidebar(): void
	{
		$link = GDT_Link::make('itmb_h1')->href(href('ITMB', 'Home'));
		GDT_Page::instance()->topBar()->addField(GDT_Headline::make()->level(1)
			->textRaw($link->render()));
        GDT_Page::instance()->bottomBar()->addField(GDT_Link::make('link_pricing')->href($this->href('Pricing')));
        GDT_Page::instance()->leftBar()->addField(GDT_Link::make('link_pricing')->href($this->href('Pricing')));
        GDT_Page::instance()->leftBar()->addField(GDT_Link::make('link_cv')->href($this->href('CV')));
	}

	public function onIncludeScripts(): void
	{
        $this->addCSS('css/gdo7-itmb.css');
        // Existing installations may not have run the favicon seed yet.
        if (!Module_Favicon::instance()->cfgFavicon())
        {
            Website::addLink(['rel'=>'icon', 'type'=>'image/png', 'href'=>$this->wwwPath('img/idea2repi.png')]);
        }
	}

    public function hookBeforeExecute()
    {
        global $me;
        if (!$me->seoMetaImage())
        {
            Website::addMeta(['og:image', $this->wwwURL('img/idea2repi.png'), 'property']);
        }
    }


}
