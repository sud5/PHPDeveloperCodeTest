<?php

namespace Arden;

class ProductsView extends View
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
echo '<div class="row">
  <div class="column" style="background-color:#aaa;">
   <img src="';
echo $val.'" alt="Denim Jeans" style="width:100%">
    <h2>';
 echo $key.'</h2>
  </div>
</div>';
    }
    }
}?>
