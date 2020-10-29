<?php

namespace Arden;

class OpeningTimesView extends View
{
    public function __construct($data = null)
    {
        if($data) {
            $this->data = $data;
        }
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getData() {
        return $this->data;
    }

    public function render() {
        // Render opening times
        foreach($this->data as $key => $val) {
            if($key == 'days') {
              echo '<table style="width:100%">'
              . '  <tr>
    <th> Day</th>
    <th>Time</th>
  </tr>';
                foreach($val as $day) {
                    echo '<tr><td><div>'. $day.'</td>';

//                    echo ' - ';

                    foreach($this->data['opening_hours'] as $d => $hours) {
                        if($d == $day) {
                          echo ' <td> ';
                            echo $hours;
                              echo ' </td> ';
                        }
                    }

                    echo '</div></tr>';
                }
              echo '</table>';  
            }

        }
    }
}

