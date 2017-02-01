<?php

require_once __DIR__ . "/Base_Controller.php";

class Experience extends Base_Controller {

    /****************** WORK ****************** */

    private $work_titles = [
        "iOS Developer Intern",
        "Lead iOS Developer",
        "Algorithms Course Assistant"
    ];

    private $work_dates = [
        "June 2017 - August 2017",
        "June 2016 - October 2016",
        "September 2016 - December 2016"
    ];

    private $work_bodies = [
        [
            "Will work on the HealthKit and ResearchKit team to develop mobile software for the iPhone, iPad, and Apple Watch"
        ], [
            "Wireframed and programmed the first cardiac CareKit app aimed at reducing hospital readmissions",
            "Collaborated with Apple; pitched to COO Jeff Williams and presented at app reviews with Vice President of Health, Special Projects lead, and CareKit lead developer",
            "Launched app for 200 patients at the Johns Hopkins Hospital and Bayview Medical Center",
            "Prioritized and delegated tasks to developers on the growing team, and reviewed all code produced before merging"
        ],[
            "Graded assignments, and held office hours to assist 70 students",
            "Worked with professor and other course assistants to prepare assignments"
        ]
    ];


    /****************** PROJECTS ****************** */

    private $project_titles = [
        "JHU Spring Fair",
        "Fat Hactory"
    ];

    private $project_dates = [
        "iOS App",
        "2D Game"
    ];

    private $project_bodies = [
        [
            "Displayed schedule of events, vendors, and artists",
            "Built a favorites system, Google directions, and iOS calendar functionality",
            "Designed graphics for the UI"
        ], [
            "Assembled a 2D platformer game using libsdl2",
            "Created a character with five abilities, dynamic enemies, and three distinct levels",
            "Implemented boundary detection, AI behaviors, automatic map generation, and time based rendering"
        ]
    ];


    /****************** CONSTRUCT ****************** */

    function __construct() {

        // Work
        for ($i=0; $i < count($this->work_titles); $i++) {
            $this->data["work"][$i]["work-title"] = $this->work_titles[$i];
            $this->data["work"][$i]["experience-date"] = $this->work_dates[$i];

            for ($j = 0; $j < count($this->work_bodies[$i]); $j++) {
                $this->data["work"][$i]["experience_body"][$j]["body-item"] =
                    $this->work_bodies[$i][$j];
             }
        }

        // Projects
        for ($i=0; $i < count($this->project_titles); $i++) {
            $this->data["project"][$i]["project-title"] = $this->project_titles[$i];
            $this->data["project"][$i]["experience-date"] = $this->project_dates[$i];

            for ($j = 0; $j < count($this->project_bodies[$i]); $j++) {
                $this->data["project"][$i]["experience_body"][$j]["body-item"] =
                    $this->project_bodies[$i][$j];
             }
        }
    }
}
