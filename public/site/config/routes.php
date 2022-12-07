<?php

return [
    [
        'pattern' => '(:all)',
        'action' => function($page) {
            if (option('prelaunch') && !kirby()->user()) go('/panel');
            $this->next();
        }
    ]
];