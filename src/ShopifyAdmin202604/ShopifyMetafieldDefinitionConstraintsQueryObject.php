<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetafieldDefinitionConstraintsQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionConstraints";

    public function selectKey()
    {
        $this->selectField("key");

        return $this;
    }

    public function selectValues(ShopifyMetafieldDefinitionConstraintsValuesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionConstraintValueConnectionQueryObject("values");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
