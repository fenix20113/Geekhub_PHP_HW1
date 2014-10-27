<?php

namespace motor;

/**
 * Class Ford
 * @package motor
 */
class Ford extends Cars implements Gps, AirConditioner {

    /**
     * @return mixed|string
     */
    public function body()
    {
        return "body: \"Sedan\"<br />";
    }

    /**
     * @return mixed|string
     */
    public function transmission()
    {
        return "transmission: 6MT<br />";
    }

    /**
     * @return mixed|string
     */
    public function Gps()
    {
        return "GPS: Yes<br />";
    }

    /**
     * @return mixed|string
     */
    public function AirConditioner()
    {
        return "AirConditioner: Yes<br />";
    }

    public function show()
    {

        $html = "<br />";
        $html .= "FORD<br />";
        $html .= $this->body();
        $html .= $this->transmission();
        $html .= $this->AirConditioner();
        $html .= $this->Gps();

        echo $html;
    }

} 