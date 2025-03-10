<?php

//TODO: use $method='post' instead with $params

namespace dokuwiki\plugin\wtl;

use dokuwiki\Menu\Item\AbstractItem;

class MenuItem extends AbstractItem {

    /** @var string do action for this plugin */
    protected $type = 'wtl_print';

    /** @var string icon file */
    protected $svg = __DIR__ . '/qr.svg';

    /** @var string the method to be used when this action is used in a form */
    protected $method = 'get';

    /**
     * MenuItem constructor.
     */
    public function __construct() {
        parent::__construct();
        global $REV;
        if($REV) $this->params['rev'] = $REV;
    }

    /**
     * Get label from plugin language file
     *
     * @return string
     */
    public function getLabel() {
        $hlp = plugin_load('action', 'wtl');
        return $hlp->getLang('wtl_print_button');
    }

    public function getLink() {
        global $ID;
        global $conf;
        $title = noNS($ID);
        $url = DOKU_URL . $ID;
        $link = $conf["wtl_proxy_url"] . "?title=" . $title . "&url=" . $url;
    }
}

