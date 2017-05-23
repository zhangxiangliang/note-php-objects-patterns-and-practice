<?php
interface Module
{
    public function execute();
}

class Person
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
}

class FtpModel implements Module
{
    public function setHost($host)
    {
        print "FtpModel::setHost(): $host\n";
    }

    public function setUser($user)
    {
        print "FtpModel::setUser(): $user\n";
    }

    public function execute()
    {

    }
}

class PersonModule implements Module
{
    public function setPerson(Person $person)
    {
        print "PersonModule::setPerson(): {$person->name}\n";
    }

    public function execute()
    {

    }
}


class ModuleRunner
{
    private $configData = [];
    private $module = [];

    public function __construct()
    {
        $this->configData = [
            "PersonModule" => ["person" => "bob"],
            "FtpModel" => ["host" => "example.com", "user" => "anon"]
        ];
    }

    public function init()
    {
        $interface = new ReflectionClass('Module');
        foreach ($this->configData as $modulename => $params) {
            $module_class = new ReflectionClass($modulename);
            if(!$module_class->isSubclassOf($interface)) {
                throw new Exception("unknow module type: $modulename");
            }

            $module = $module_class->newInstance();

            foreach ($module_class->getMethods() as $method) {
                $this->handleMethod($module, $method, $params);
            }

            array_push($this->module, $module);
        }
    }

    public function handleMethod(Module $module, ReflectionMethod $method, $params)
    {
        $name = $method->getName();
        $args = $method->getParameters();

        if(count($args) != 1 || substr($name, 0, 3) != "set") return false;

        $property = strtolower(substr($name, 3));

        if(!isset($params[$property])) return false;

        $arg_class = $args[0]->getClass();

        $param = empty($arg_class)? $params[$property]: $arg_class->newInstance($params[$property]);
        $method->invoke($module, $param);
    }
}

$test = new ModuleRunner();
$test->init();
