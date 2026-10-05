<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyComponentizedProductsBundleConsolidatedOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ComponentizedProductsBundleConsolidatedOption";

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectSelections(ShopifyComponentizedProductsBundleConsolidatedOptionSelectionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyComponentizedProductsBundleConsolidatedOptionSelectionQueryObject("selections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
