<?php

require_once __DIR__ . "/Base_Controller.php";


class Home extends Base_Controller {

    private $bio_title = [
        "PROGRAMMER", "DESIGNER"
    ];

    private $bio_body = [
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta, lacus non commodo varius, nisl massa suscipit ante, quis malesuada ligula felis in justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta, lacus non commodo varius, nisl massa suscipit ante, quis malesuada ligula felis in justo.",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta, lacus non commodo varius, nisl massa suscipit ante, quis malesuada ligula felis in justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porta, lacus non commodo varius, nisl massa suscipit ante, quis malesuada ligula felis in justo."
    ];

    private $colors = [
        "#ff9279", "#b1ffb7"
    ];

    function __construct() {

        assert(count($this->bio_title) == count($this->bio_body));

        for ($i=0; $i < count($this->bio_title); $i++) {
            $this->data["bio"][$i]["bio-title"] = $this->bio_title[$i];
            $this->data["bio"][$i]["bio-body"] = $this->bio_body[$i];
            $this->data["bio"][$i]["color"] = $this->colors[$i];

        }
    }
}
