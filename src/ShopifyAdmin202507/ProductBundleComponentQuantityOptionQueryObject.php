<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductBundleComponentQuantityOptionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductBundleComponentQuantityOption";

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectParentOption(ProductBundleComponentQuantityOptionParentOptionArgumentsObject $argsObject = null)
    {
        $object = new ProductOptionQueryObject("parentOption");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectValues(ProductBundleComponentQuantityOptionValuesArgumentsObject $argsObject = null)
    {
        $object = new ProductBundleComponentQuantityOptionValueQueryObject("values");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
