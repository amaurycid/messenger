<?php

namespace RTippin\Messenger\Tests\Fixtures;

use RTippin\Messenger\MessengerBots;
use RTippin\Messenger\Support\PackagedBot;

class FunBotPackage extends PackagedBot
{
    public static function getSettings(): array
    {
        return [
            'alias' => 'fun_bot_package',
            'name' => 'Mr. Fun Package',
            'description' => 'Fun package description.',
            'avatar' => null,
        ];
    }

    public static function installs(): array
    {
        return [
            FunBotHandler::class => [
                'test' => ['one', 'two'],
                'special' => true,
            ],
            SillyBotHandler::class => [
                'triggers' => ['silly'],
                'match' => MessengerBots::MATCH_EXACT,
            ],
            BrokenBotHandler::class => [
                'triggers' => ['broken'],
                'match' => MessengerBots::MATCH_CONTAINS,
            ],
        ];
    }
}
