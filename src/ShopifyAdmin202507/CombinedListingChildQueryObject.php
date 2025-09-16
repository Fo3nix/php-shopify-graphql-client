<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CombinedListingChildQueryObject extends QueryObject
{
    const OBJECT_NAME = "CombinedListingChild";

    public function selectParentVariant(CombinedListingChildParentVariantArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantQueryObject("parentVariant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProduct(CombinedListingChildProductArgumentsObject $argsObject = null)
    {
        $object = new ProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
