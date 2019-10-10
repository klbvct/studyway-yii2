<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\components;

use yii\base\Widget;
use Yii;

/**
 * Description of SendWidget
 *
 * @author Home
 */
class AboutmeWidget extends Widget {
    
    public function run() {
        
        
        return $this->render('aboutme');
      
    }

   

}
