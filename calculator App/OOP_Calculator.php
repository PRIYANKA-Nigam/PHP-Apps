<?php
class OOP_Calculator{
    public $oper;
    public $num1;
    public $num2;
    public function __construct($op,$n1,$n2){
        $this->oper=$op;
        $this->num1=$n1;
        $this->num2=$n2;
    }
    public function Calcu(){
    switch($this->oper) {
        case 'add':
            $result=$this->num1+$this->num2; 
            return $result;
            case 'sub':
                $result=$this->num1-$this->num2;
                return $result;
                case 'mult':
                    $result=$this->num1*$this->num2;
                    return $result;
                    case 'div':
                        $result=$this->num1/$this->num2;
                         return $result;
                    
        default:
            # code...
            break;
                    }
    }
}

?>