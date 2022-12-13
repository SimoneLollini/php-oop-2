<?php

trait Weitghtable
{
      protected $weight;

      public function set_weight($weight, $unit)
      {
            $this->weight = $weight . $unit;
      }

      public function get_weight()
      {
            return $this->weight;
      }
}
