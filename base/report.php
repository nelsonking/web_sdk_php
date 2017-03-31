<?php namespace vhall\base;
/**
 * Created by PhpStorm.
 * User: NelsonKing
 * Date: 2017/3/31
 * Time: 11:38
 */

use Exception;

class report implements model
{
    use common;

    public function register()
    {
        // TODO: Implement register() method.
        return new self;
    }

    public function __call($name, array $arguments)
    {
        $model = $this->getModel();
        $func = $this->getFunc($name);

        list($paramCheck, $method) = $this->listCheckAndFunc($model, $func);
        $requestData = $this->paramCheck($arguments, $paramCheck);

        return $this->requestData($method ,$requestData);
    }

}