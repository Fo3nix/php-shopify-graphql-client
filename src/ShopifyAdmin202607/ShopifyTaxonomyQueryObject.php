<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents Shopify's [standardized product taxonomy](https://shopify.github.io/product-taxonomy/releases/unstable/?categoryId=sg-4-17-2-17) tree. Provides categories that you can filter by search criteria or hierarchical relationships.
 *
 * You can search categories globally, retrieve children of a specific category, find siblings, or get descendants. When you specify no filter arguments, you get all top-level categories in the taxonomy.
 */
class ShopifyTaxonomyQueryObject extends QueryObject
{
    const OBJECT_NAME = "Taxonomy";

    /**
     * Returns the categories of the product taxonomy based on the arguments provided.
     * If a `search` argument is provided, then all categories that match the search query globally are returned.
     * If a `children_of` argument is provided, then all children of the specified category are returned.
     * If a `siblings_of` argument is provided, then all siblings of the specified category are returned.
     * If a `descendants_of` argument is provided, then all descendents of the specified category are returned.
     * If no arguments are provided, then all the top-level categories of the taxonomy are returned.
     */
    public function selectCategories(?ShopifyTaxonomyCategoriesArgumentsObject $argsObject = null): ShopifyTaxonomyCategoryConnectionQueryObject
    {
        $object = new ShopifyTaxonomyCategoryConnectionQueryObject("categories");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
