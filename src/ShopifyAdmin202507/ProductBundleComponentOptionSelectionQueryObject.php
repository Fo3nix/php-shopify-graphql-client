<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductBundleComponentOptionSelectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductBundleComponentOptionSelection";

    public function selectComponentOption(ProductBundleComponentOptionSelectionComponentOptionArgumentsObject $argsObject = null)
    {
        $object = new ProductOptionQueryObject("componentOption");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectParentOption(ProductBundleComponentOptionSelectionParentOptionArgumentsObject $argsObject = null)
    {
        $object = new ProductOptionQueryObject("parentOption");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectValues(ProductBundleComponentOptionSelectionValuesArgumentsObject $argsObject = null)
    {
        $object = new ProductBundleComponentOptionSelectionValueQueryObject("values");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
