<?php

class FrontendController extends Controller {
    public $layout = DEFAULT_LAYOUT;

    protected $_canonicalUrl;

    public function __construct($id, $module = null){
        parent::__construct($id, $module);

        Yii::app()->theme = THEME;

        /*$memcache = new Memcache;
        $memcache->addServer('http://web3in1.com/', 11211);
		if (!extension_loaded('apc')) {
			if (!dl('memcache.so')) {
				exit;
			}
		}*/
    }

    /**
     * Default canonical url generator, will remove all get params beside 'id' and generates an absolute url.
     * If the canonical url was already set in a child controller, it will be taken instead.
     */
    public function getCanonicalUrl() {
        if ($this->_canonicalUrl === null) {
            /*$params = array();
            if (isset($_GET['id'])) {
                //just keep the id, because it identifies our model pages
                $params = array('id' => $_GET['id']);
            }
            $this->_canonicalUrl = Yii::app()->createAbsoluteUrl($this->route, $params);
            */

            $this->_canonicalUrl = Yii::app()->createAbsoluteUrl(Yii::app()->request->requestUri);
        }
        return $this->_canonicalUrl;
    }
}