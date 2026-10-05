<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOrderAppQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderApp";

    public function selectIcon(ShopifyOrderAppIconArgumentsObject $argsObject = null)
    {
        $object = new ShopifyImageQueryObject("icon");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
