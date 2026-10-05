<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductBundleComponentOptionSelectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductBundleComponentOptionSelection";

    public function selectComponentOption(ShopifyProductBundleComponentOptionSelectionComponentOptionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductOptionQueryObject("componentOption");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectParentOption(ShopifyProductBundleComponentOptionSelectionParentOptionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductOptionQueryObject("parentOption");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectValues(ShopifyProductBundleComponentOptionSelectionValuesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductBundleComponentOptionSelectionValueQueryObject("values");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
