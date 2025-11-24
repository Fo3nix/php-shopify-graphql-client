<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountShareableUrlQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountShareableUrl";

    public function selectTargetItemImage(ShopifyDiscountShareableUrlTargetItemImageArgumentsObject $argsObject = null)
    {
        $object = new ShopifyImageQueryObject("targetItemImage");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTargetType()
    {
        $this->selectField("targetType");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }
}
