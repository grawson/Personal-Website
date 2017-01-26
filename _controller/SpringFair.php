<?php

require_once __DIR__ . "/Base_Controller.php";


class SpringFair extends Base_Controller {

    private $feature_titles = [
        "Feature 1", "Feature 2", "Feature 3"
    ];

    private $feature_bodies = [
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta, lacus non commodo varius, nisl massa suscipit ante, quis malesuada ligula felis in justo.",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta, lacus non commodo varius, nisl massa suscipit ante, quis malesuada ligula felis in justo.",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta, lacus non commodo varius, nisl massa suscipit ante, quis malesuada ligula felis in justo."
    ];

    function __construct() {

        assert(count($this->feature_titles) == count($this->feature_bodies));

        for ($i=0; $i < count($this->feature_titles); $i++) {
            $this->data["feature"][$i]["feature-title"] = $this->feature_titles[$i];
            $this->data["feature"][$i]["feature-body"] = $this->feature_bodies[$i];
        }
    }
}
