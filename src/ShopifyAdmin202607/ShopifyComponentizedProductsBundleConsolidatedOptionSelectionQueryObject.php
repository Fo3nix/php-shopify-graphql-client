<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyComponentizedProductsBundleConsolidatedOptionSelectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ComponentizedProductsBundleConsolidatedOptionSelection";

    public function selectComponents(ShopifyComponentizedProductsBundleConsolidatedOptionSelectionComponentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyComponentizedProductsBundleConsolidatedOptionSelectionComponentQueryObject("components");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
