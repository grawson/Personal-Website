<?php

require_once __DIR__ . "/Base_Controller.php";


class SpringFair extends Base_Controller {

    function __construct() {

        for ($i=0; $i < 3; $i++) {
            $this->data["feature"][$i]["feature-title"] = "Feature";
            $this->data["feature"][$i]["feature-body"] = "Feature Body";
        }
    }
}
