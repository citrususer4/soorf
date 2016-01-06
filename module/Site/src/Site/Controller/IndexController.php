<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Site\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Cache\StorageFactory;
use Zend\Cache\Storage\TaggableInterface;

class IndexController extends AbstractActionController
{
	public function indexAction()
	{

// 		$cache = $this->getServiceLocator()->get('file');

// 		$key    = 'unique-cache-key';
// 		$result = $cache->getItem($key, $success);
// 		if (!$result){
// 			$result = uniqid();
// 			$cache->setItem($key, $result);
// 			$cache->setTags($key, array('tag'));
// 		}
// //		$cache->clearByTags(array('tag'));

// 		//$this->firephp($cache);
// 		new \dBug($result);

		$manager = $this->getServiceLocator()->get('site');
        $model = $manager->get('ApiRest\Model\Table\Tasks');

        $r = $model->fetchAll();
        //new \dBug($r);

		return new ViewModel();
	}
}
