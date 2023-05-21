<?php
class Student
{
    private $information;
    function __construct($name, $id, $semester)
    {
        $this->information = array();
        $this->information['name'] = $name;
        $this->information['id'] = $id;
        $this->information['semester'] = $semester;
    }
    function __set($prop, $value)
    {
        $this->$prop = $value;
    }
    function __get($prop)
    {
        return $this->$prop;
    }
    function __isset($name)
    {
        if (isset($this->information[$name])) {
            return true;
        } else {
            return false;
        }
    }
    function __unset($name)
    {
        unset($this->information[$name]);
    }
    function __call($name, $argument)
    {
        echo $name . $argument[0] . PHP_EOL;
    }
    static function __callStatic($name, $argument)
    {
        echo "I'm a static function";
    }
}

$student = new Student("Sazzad", "20-43747-2", "Spring");
print_r($student->information);
if (isset($student->information['dateOfBirth'])) {
    echo "Hello World!";
} else {
    unset($student->semester);
}
print_r($student->information);
$student->run('100kmph');
$student::run();
