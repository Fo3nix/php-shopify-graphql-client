<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountShareableUrlQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountShareableUrl";

    public function selectTargetItemImage(DiscountShareableUrlTargetItemImageArgumentsObject $argsObject = null)
    {
        $object = new ImageQueryObject("targetItemImage");
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
