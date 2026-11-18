<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the details of a specific type of product within the [Shopify product taxonomy](https://shopify.github.io/product-taxonomy/releases/unstable/?categoryId=sg-4-17-2-17).
 */
class ShopifyStandardizedProductTypeQueryObject extends QueryObject
{
    const OBJECT_NAME = "StandardizedProductType";

    /**
     * The product taxonomy node associated with the standardized product type.
     */
    public function selectProductTaxonomyNode(?ShopifyStandardizedProductTypeProductTaxonomyNodeArgumentsObject $argsObject = null): ShopifyProductTaxonomyNodeQueryObject
    {
        $object = new ShopifyProductTaxonomyNodeQueryObject("productTaxonomyNode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
