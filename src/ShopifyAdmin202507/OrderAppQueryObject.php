<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OrderAppQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderApp";

    public function selectIcon(OrderAppIconArgumentsObject $argsObject = null)
    {
        $object = new ImageQueryObject("icon");
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
