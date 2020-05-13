<?php
define('COUNTRY','country');

    class Car{

        public $PlateNumber;
        public $brand;
        public $model;
        public $date;
        public $kilometer;
        public $weight;
        public $booked;

        public function __construct($brand,$kilometer,$weight,$date,$booked,$PlateNumber){
            $this->brand = $brand;
            $this->kilometer = $kilometer;
            $this->weight = $weight;
            $this->date = $date;
            $this->booked = $booked;
            $this->PlateNumber = $PlateNumber;
        }
        public function catalog(){
            $data = array(
                'brand' => $this->brand,
                'kilometer' =>$this->kilometer,
                'weight' => $this->weight,
                'date'=> $this->date,
                'booked' => $this->booked,
                'PlateNumber'=>$this->PlateNumber
            );
            $use = $this->used();
            $country = $this->country();
            $utility = $this->utility();
            return array_merge($data,$use,$country,$utility);
        }
        public function rouler(){
            return $this->kilometer +=100000;
        }

        public function used(){
            if($this->kilometer <= 100000){
                return array(
                    'used' => 'Low'
                );
            }
            elseif($this->kilometer>100000 && $this->kilometer<200000){
                return array(
                    'used' => 'Middle'
                );
            }else{
                return array(
                    'used' => 'High'
                );
            }
        }

        public function display(){
            $data = $this->catalog();

          
            foreach($data as $info){
                echo "<td>$info</td>";
            }
        

        }
        
        public function country(){
            if(strstr($this->PlateNumber,'BE')){
                return array(COUNTRY=>"Belgium");
            }
            else if(strstr($this->PlateNumber,'DE')){
                return array(COUNTRY=>"Deutsch");
            }
            else if(strstr($this->PlateNumber,'FR')){
                return array(COUNTRY=>"France");
            }else{
                return array(COUNTRY=>"Inconnu");
            }
        }

        public function utility(){
            return $this->weight <=3.5 ? array('typework'=>'commercial') : array('typework'=>'utility');
        }
    }


    ?>