<?php
namespace App\classes;
class Example
{
    public $name;
    public $email;
    public $mobile;
    public $firstName;
    public $lastName;
    public $x;
    public $y;
    public $z;
    public $data = [];

    public function index()
    {
        $this->x = 100;

//        ==========ARRAY=========

        $this->data = [10, 20, 30, 'BITM', 100.200, true];
//        echo $this->data[];
        foreach ($this->data as $item)
        {
            echo $item;
        }








//        ======statement=======



       /* do
        {
            echo 'Sreejon valo chele<br/>';
            $this->x++;
        }while($this->x < 110);*/

       /* while ($this->x < 110)
        {
            echo 'Hello World<br/>';
            $this->x++;
        }*/

       /* for ($this->y = 0; $this->y <= 100; $this->y++)
        {
            echo $this->y.'<br/>';
        }*/


       /* Switch($this->x)
        {
            case 10:
                echo 'Hello world';
                break;
            case 20:
                echo 'Hello Bangladesh';
                break;
            case 30:
                echo 'Hello dhaka';
                break;
            default:
                echo 'Hello BITM';
        }*/
       /* if($this->x < 20)
        {
            echo $this->x;
        }
        elseif($this->x > 200)
        {
            echo 'Hello World';
        }*/



       /* echo ($this->x > $this->y) || ($this->y > $this->z);
        echo '<br/>....<br/>';
        echo ($this->x > $this->y) || ($this->y < $this->z);
        echo '<br/>....<br/>';
        echo ($this->x < $this->y) || ($this->y > $this->z);
        echo '<br/>....<br/>';
        echo ($this->x < $this->y) || ($this->y < $this->z);
        echo '<br/>....<br/>';*/

       /* echo $this->x += $this->y;
        echo '<br/>';
        echo $this->x -= $this->y;
        echo '<br/>';
        echo $this->x *= $this->y;
        echo '<br/>';
        echo $this->x /= $this->y;
        echo '<br/>';
        echo $this->x %= $this->y;
        echo '<br/>';
        echo $this->x .= $this->y;
        echo '<br/>';
        echo $this->x++;
        echo '<br/>';
        echo $this->x;
        echo $this->x + $this->y;
        echo '<br/>';
        echo $this->x - $this->y;
        echo '<br/>';
        echo $this->x * $this->y;
        echo '<br/>';
        echo $this->x / $this->y;
        echo '<br/>';
        echo $this->x % $this->y;*/
    }
}