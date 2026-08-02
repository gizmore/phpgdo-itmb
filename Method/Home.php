<?php
namespace GDO\ITMB\Method;

use GDO\UI\MethodPage;

final class Home extends MethodPage
{

	public function getMethodTitle(): string
	{
		return t('itmb_home_h2');
	}

}
