<?php
namespace oc\ext\sns ;

use jc\auth\IdManager;

use jc\mvc\model\db\orm\PrototypeAssociationMap;

use jc\db\DB ;
use jc\db\PDODriver ;

use oc\ext\Extension;

class Sns extends Extension
{
	public function load()
	{
		// 向系统添加控制器
		$this->application()->accessRouter()->addController("oc\\ext\\sns\\Index",'index') ;
		
		//设置默认控制器（首页）
		$this->application()->accessRouter()->setDefaultController("oc\\ext\\sns\\Index") ;
	}
	
}

?>