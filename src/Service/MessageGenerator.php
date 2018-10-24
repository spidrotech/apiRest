<?php

namespace App\Service;

class MessageGenerator {

    public function getHappyMessage() {
        $messages = [
            'You did it! You updated the system! Amazing! ♥',
            'That was one of the coolest updates I\'ve seen all day! ♥',
            'Great work! Keep going! ♥',
            'A REST API / SYMFONY4 ♥',
            'Make each day your masterpiece  ♥',
            'Your imagination is your preview of life\'s coming attractions  ♥',
            'Someday is not a day of the week  ♥',
            'It\'s time to start living the life you\'ve imagined  ♥',
            'The best revenge is massive success  ♥',
            'The only way to do great work is to love what you do  ♥',
        ];

        $index = array_rand($messages);

        return $messages[$index];
    }

}
