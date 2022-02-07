<?php


namespace App\classes;


class Pattern
{
    protected $length;
    protected $i;
    protected $j;
    protected $k;
    protected $l;
    protected $result;

    public function __construct($post=null){
        $this->length = $post['input_length'];
    }

    public function index(){
        for($this->i = 1; $this->i <= $this->length; $this->i++){
//            echo "*";
            for($this->j=1; $this->j <= (2*$this->length) -1; $this->j++ ){
//                echo "*";
                if(($this->j >= $this->length - ($this->i -1)) && ($this->j <= $this->length + ($this->i-1))){
                    $this->result.= "*";
                }
                else {
                    $this->result.= '&nbsp;&nbsp;';
                }
            }
            $this->result.= "<br />";
        }



        for($this->k = $this->length-1; $this->k >= 1; $this->k--){
//            echo "*";
            for($this->l=1; $this->l <= (2*$this->length) -1; $this->l++ ){
//                echo "*";
                if(($this->l >= $this->length - ($this->k -1)) && ($this->l <= $this->length + ($this->k-1))){
                    $this->result.= "*";
                }
                else {
                    $this->result.= '&nbsp;&nbsp;';
                }
            }
            $this->result.= "<br />";
        }

        return $this->result;





    }










}