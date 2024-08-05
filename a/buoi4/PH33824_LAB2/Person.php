<?php
class Person
{
    public $name;
    public $age;
    public $address;
    public function setname($value)
    {
        $this->name = $value;
    }
    public function setage($value)
    {
        $this->age = $value;
    }
    public function setaddress($value)
    {
        $this->address = $value;
    }
    public function getInfo()
    {
        return "Name: " . $this->name . "<br>" .
            "Age: " . $this->age . "<br>" .
            "Address: " . $this->address . "<br>";
    }
    public function canVote()
    {
        return $this->age >= 18;
    }

}
$p = new Person();
$p->setname("NGUYỄN ĐỨC THẮNG");
$p->setage("5");
$p->setaddress("thanh bình, đức lĩnh, vũ quang, hà tĩnh");
echo '<span style="color: red;">' . $p->getInfo() . '</span>';
echo "Can vote: " . ($p->canVote() ? 'TRUE' : 'FALSE');