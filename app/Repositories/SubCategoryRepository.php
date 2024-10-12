<?php
namespace App\Repositories;
use App\Models\SubCategory;

Class SubCategoryRepository extends BaseRepository {

    public function __construct(SubCategory $model)
    {
        parent::__construct($model);
    }

}


?>