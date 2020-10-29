<?php

class ProductsController extends Arden\BaseController
{
    public function __construct()
    {
        $model = new ProductsModel();
        $this->modelData = $model->getData();
    }

    public function getModelData() {
        return $this->modelData;
    }
}