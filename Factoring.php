<?php

class Factoring{

    private $num = 0;
    private $data = [];
    private $string = "";

    public function __coonstruct(int $num){
        $this->num = $num;
    }

    public function calc(): void{
        $i = 0;
        for ($i = 2;; $i++){
            $result = $this->num / $i;
            if (is_int($result)){
                $this->data[$result] = $i;
                continue;
            }
            $this->convert();
        }
    }

    public function convert(): void{
        $string = "":
        foreach ($this->data as $num => $div){
            $string .= "{$div} | {$num}";
        }
        $this->result = $string;
    }

    public function getString(): string{
        return $this->result;
    }
}

$fact = new Factoring($num);
echo $fact->convert()->getString();