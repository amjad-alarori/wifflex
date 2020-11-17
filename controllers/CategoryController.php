<?php

class CategoryController{


    public function getCategoryData(){

    require 'models/CategoryModel.php';

    $this->categories= CategoryModel::getCategory();

    require 'views/category.view.php';

    }

}