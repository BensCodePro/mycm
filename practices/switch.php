<?php

$day = "Tue";

switch ($day){
    case "Mon":
        echo "Monday";
        case "Tue":
            echo "Tuesday";
            case "Wed":
                echo "Wednesday";
                case "Thu":
                    echo "Thursday";
                    case "Fri":
                        echo "Friday";
                        case "Sat":
                            echo "Saturday";
                            case "Sun":
                                echo "Sunday";
                                break;
                                default:
                                echo "No information available for tha day";
                                break;
}