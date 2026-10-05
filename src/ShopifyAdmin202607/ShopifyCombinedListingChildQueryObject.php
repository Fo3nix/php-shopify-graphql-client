<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCombinedListingChildQueryObject extends QueryObject
{
    const OBJECT_NAME = "CombinedListingChild";

    public function selectParentVariant(ShopifyCombinedListingChildParentVariantArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantQueryObject("parentVariant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProduct(ShopifyCombinedListingChildProductArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
