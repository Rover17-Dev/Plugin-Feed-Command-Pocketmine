<?php

namespace Feed;

use Feed\Command\Feed;
use Feed\Command\Heal;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getServer()->getCommandMap()->register("Feed", new Feed($this));

    }
}