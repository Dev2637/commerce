<?php

namespace Craft;


class Stripey_OptionTypeRecord extends BaseRecord
{


    public function getTableName()
    {
        return 'stripey_optiontypes';
    }


    public function defineRelations()
    {
        return array(
//            'productOptionTypes' => array(static::HAS_MANY,'Stripey_ProductOptionTypes','optionTypeId'),
//            'product' => array(static::HAS_MANY,array('user_id'=>'id'),'through'=>'roles'),
            'optionValues' => array(static::HAS_MANY,'Stripey_OptionValueRecord','optionTypeId'),
        );
    }

    public function defineIndexes()
    {
        return array(
//            array('columns' => array('typeId')),
//            array('columns' => array('availableOn')),
//            array('columns' => array('expiresOn')),
        );
    }

    protected function defineAttributes()
    {
        return array(
            'name' => AttributeType::String,
            'handle'   => AttributeType::String,
        );
    }

}