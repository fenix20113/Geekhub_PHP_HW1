<?php

namespace motor;

/**
 * Class LancerX
 * @package motor
 */
class LancerX extends Cars implements AirConditioner {

    /**
     * @return string
     */
    public function body()
    {
        return "body: \"Sedan\"<br />";
    }

    /**
     * @return string
     */
    public function transmission(){
        return "transmission: 5MT<br />";
    }

    /**
     * @return string
     */
    public function AirConditioner()
    {
        return "Air Conditioner: Yes<br />";
    }


    public function show()
    {
        $html = "<br />";
        $html .= "LancerX<br />";
        $html .= $this->body();
        $html .= $this->transmission();
        $html .= $this->AirConditioner();

        echo $html;
    }
}