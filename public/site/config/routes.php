<?php

return [
    [
        'pattern' => '(:all)',
        'action' => function($page) {
            if (option('prelaunch') && !kirby()->user()) go('/panel');
            $this->next();
        }
    ],
    [
        'pattern' => 'phpinfo',
        'language' => '*',
        'action' => function () {
            if (kirby()->user() && kirby()->user()->isAdmin()) {
                phpinfo();
            }
            return $this->next();
        }
    ],
];