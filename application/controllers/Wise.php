<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Wise extends Application {
    //put your code here
   
    public function bingo(){      
            $record = $this->quotes->get('6');
            $this->data = array_merge($this->data, $record);
            $this->data['pagebody'] = 'justone';
            $this->render();
	}
 } 