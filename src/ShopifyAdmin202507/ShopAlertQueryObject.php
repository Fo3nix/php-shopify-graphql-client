<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopAlertQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopAlert";

    public function selectAction(ShopAlertActionArgumentsObject $argsObject = null)
    {
        $object = new ShopAlertActionQueryObject("action");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }
}
