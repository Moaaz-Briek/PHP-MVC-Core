<?php

namespace moaazbriek\phpmvc\middlewares;

use moaazbriek\phpmvc\Application;
use moaazbriek\phpmvc\exception\ForbiddenException;

class SiteMiddleware extends BaseMiddleware
{
    protected array $actions = [];
    public function __construct(array $actions)
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (in_array(Application::$app->controller->action, $this->actions)) {
            throw new ForbiddenException();
        }
    }

}