<?php
namespace App\Repositories;

use App\Models\Product;

Class ProductRepository extends BaseRepository {

    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

}


?>