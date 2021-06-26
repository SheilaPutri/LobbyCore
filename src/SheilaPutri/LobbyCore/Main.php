<?php

namespace SheilaPutri\LobbyCore;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

    public function onEnable(){
     $this->getServer()->getLogger()->Info("Plugin ini dibuat oleh Sheila Putri Aprilia");
     $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

}
