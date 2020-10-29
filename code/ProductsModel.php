<?php


class ProductsModel extends Arden\Model
{
    public function __construct()
    {
        $this->data = [
    'Product1' => 'https://i.postimg.cc/QNFsCWLL/envelop.png',
    'Product2' => 'https://i.postimg.cc/gk5W3cWw/plane1.png',
    'Product3' => 'https://i.postimg.cc/QMxT2qFK/rocket2.png',
    'Product4' => 'https://i.postimg.cc/QNFsCWLL/envelop.png',
    'Product5' => 'https://i.postimg.cc/gk5W3cWw/plane1.png',
        ];
    }

    public function getData()
    {
        return $this->data;
    }
}