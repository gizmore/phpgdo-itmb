<?php
namespace GDO\ITMB;

use GDO\Core\GDO_Module;
use GDO\Core\Method;
use GDO\Core\Website;
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

    /**
     * <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
     * <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
     * <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
     * <link rel="manifest" href="/site.webmanifest">
     * <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
     * <meta name="msapplication-TileColor" content="#da532c">
     * <meta name="theme-color" content="#ffffff">
     */
	public function onIncludeScripts(): void
	{
        $this->addCSS('css/gdo7-itmb.css');
        # Add favicons
        $dir = $this->wwwPath('img/favicons/');
        Website::addLink(['rel'=>'apple-touch-icon', 'sizes'=>'180x180', 'href'=>"{$dir}apple-touch-icon.png"]);
        Website::addLink(['rel'=>'icon', 'sizes'=>'32x32', 'type'=>'image/png', 'href'=>"{$dir}favicon-32x32.png"]);
        Website::addLink(['rel'=>'icon', 'sizes'=>'16x16', 'type'=>'image/png', 'href'=>"{$dir}favicon-16x16.png"]);
        Website::addLink(['rel'=>'manifest', 'href'=>"{$dir}site.webmanifest"]);
        Website::addLink(['rel'=>'mask-icon', 'href'=>"{$dir}safari-pinned-tab.svg", 'color'=>'#5bbad5']);
        Website::addMeta(['msapplication-TileColor', '#da532c', 'name']);
        Website::addMeta(['theme-color', '#ffffff', 'name']);
	}

    public function hookBeforeExecute()
    {
        global $me;
        if (!$me->seoMetaImage())
        {
            Website::addMeta(['og:image', $this->wwwURL('img/logo2021.jpg'), 'property']);
        }
    }


}
