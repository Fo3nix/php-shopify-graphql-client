<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetafieldDefinitionConstraintsQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionConstraints";

    public function selectKey()
    {
        $this->selectField("key");

        return $this;
    }

    public function selectValues(MetafieldDefinitionConstraintsValuesArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionConstraintValueConnectionQueryObject("values");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
