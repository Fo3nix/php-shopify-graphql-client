<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The details of a specific product category within Shopify's [standardized product taxonomy](https://shopify.github.io/product-taxonomy/releases/unstable/?categoryId=sg-4-17-2-17). Provides access to the associated [`ProductTaxonomyNode`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductTaxonomyNode).
 */
class ShopifyProductCategoryQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductCategory";

    /**
     * The product taxonomy node associated with the product category.
     */
    public function selectProductTaxonomyNode(?ShopifyProductCategoryProductTaxonomyNodeArgumentsObject $argsObject = null): ShopifyProductTaxonomyNodeQueryObject
    {
        $object = new ShopifyProductTaxonomyNodeQueryObject("productTaxonomyNode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
