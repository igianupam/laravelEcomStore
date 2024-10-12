<?php
namespace App\Repositories;

use App\Models\Attributes;
use Attribute;
use Illuminate\Support\Facades\DB;

Class AttributeRepository extends BaseRepository {

    public function __construct(Attributes $model)
    {
        parent::__construct($model);
    }

    public function createAttributes(array $data){
        $attribute = $this->create($data);

        if(isset($data['details']) && !empty($data['details'])){

            foreach($data['details'] as $value){
                $attribute->arrtibutesvalue()->create([
                    'attribute_id' =>  $attribute->id,
                    'value' => $value
                ]);
            }
        }

        return $attribute;
    }

    public function updateAttributes($id , array $data){

        $attribute = $this->update($id, $data);

        if(isset($data['details']) && !empty($data['details'])){
            $attribute->arrtibutesvalue()->delete();

            foreach($data['details'] as $value){
                $attribute->arrtibutesvalue()->create([
                    'attribute_id' =>  $attribute->id,
                    'value' => $value
                ]);
            }
        }

        return $attribute;
    }

    public function getAttributeValuesWhereIn($attribute){

        // DB::enableQueryLog();

        return Attributes::whereHas('arrtibutesvalue', function($query) use ($attribute) {
            $query->whereIn('attribute_id', $attribute);
        })->with('arrtibutesvalue')->get();

        // dd(DB::getQueryLog());
    }

}


?>