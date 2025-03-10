<?php

namespace dokuwiki\plugin\wtl;

use dokuwiki\Extension\ActionPlugin;
use dokuwiki\Extension\EventHandler;
use dokuwiki\Extension\Event;

/**
 * DokuWiki Plugin wtl (Action Component)
 *
 * @author H3 <29732082+H3wastooshort@users.noreply.github.com>
 */
class action_plugin_wtl_button extends ActionPlugin
{
    /** @inheritDoc */
    public function register(EventHandler $controller)
    {
        $controller->register_hook('MENU_ITEMS_ASSEMBLY', 'AFTER', $this, 'wtl_insert_button', array());
    }

    public function wtl_insert_button(Doku_Event $event) {
        if($event->data['view'] != 'page') return;
        array_splice($event->data['items'], -1, 0, [new \dokuwiki\plugin\wtl\MenuItem()]);
    }
}
