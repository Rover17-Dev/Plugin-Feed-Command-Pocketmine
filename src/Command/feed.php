<?php

namespace Feed\Command;

use Feed\Main;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class Feed extends Command {
    private $main;
    public function __construct(Main $main) {
        parent::__construct("feed", "feed you", "/feed");
        $this->main = $main;
    }
    public function execute(CommandSender $sender, string $commandLabel, array $args) {
        if ($sender instanceof Player) {
            if ($sender->hasPermission("feed.use")) {
                if ($sender->getFood() == 20) {
                    $sender->sendMessage("§cYour food is full");
                }else{
                    $sender->setFood(20);
                    $sender->setSaturation(20);
                    $sender->sendMessage("§9You have been fed");
                }
            }else{
                $sender->sendMessage("§cYou do not have permission to use that");
            }
        }
        }
    }
}