<?php

namespace SheilaPutri\LobbyCore;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class Main extends PluginBase implements Listener{

    public function onEnable(){
     $this->getServer()->getLogger()->Info("Plugin ini dibuat oleh Sheila Putri Aprilia");
     $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onPlayerJoin(PlayerJoinEvent $e){
     $p = $e->getPlayer();
    }

    public function onPlayerQuit(PlayerQuitEvent $e){
     $p = $e->getPlayer();
    }

}
