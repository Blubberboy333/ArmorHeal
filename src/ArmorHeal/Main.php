<?php

namespace ArmorHeal\Main;

use pocketmine\event\Listener;
use pocketmine\event\entity\EntityArmorChangeEvent;

use pocketmine\plugin\PluginBase;

use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{
  public function onEnable{
    $this->saveDefaultConfig();
    $this->getServer->info(TextFormat::BLUE . "ArmorHeal enabled");
  }
  public function onDisable(){
    $this->getServer->info(TextFormat::RED . "ArmorHeal disabled");
  }
  
  public function onEntityArmorChangeEvent(EntityArmorChangeEvent $event){
    $entity = $event->getEntity();
    if($entity instanceof Player){
      if($entity->hasPermission("armorheal.heal")){
        $armor = $event->getNewItem()->getId();
        $heal = $this->getConfig()->get("Armor");
        if($armor == $heal){
          $entity->setHealth(20);
        }else{
        }
      }else{
      }
    }else{
    }
  }
}
