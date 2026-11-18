<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A child of a combined listing.
 */
class ShopifyCombinedListingChildQueryObject extends QueryObject
{
    const OBJECT_NAME = "CombinedListingChild";

    /**
     * The parent variant.
     */
    public function selectParentVariant(?ShopifyCombinedListingChildParentVariantArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject("parentVariant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The child product.
     */
    public function selectProduct(?ShopifyCombinedListingChildProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
