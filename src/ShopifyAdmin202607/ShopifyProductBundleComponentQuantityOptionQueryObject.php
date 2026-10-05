<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductBundleComponentQuantityOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductBundleComponentQuantityOption";

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectParentOption(ShopifyProductBundleComponentQuantityOptionParentOptionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductOptionQueryObject("parentOption");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectValues(ShopifyProductBundleComponentQuantityOptionValuesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductBundleComponentQuantityOptionValueQueryObject("values");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
