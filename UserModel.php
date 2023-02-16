<?php

namespace moaazbriek\phpmvc;

use moaazbriek\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    public abstract function getName(): string;
}