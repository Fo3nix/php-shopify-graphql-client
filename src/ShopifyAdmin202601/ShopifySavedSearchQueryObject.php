<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A representation of a search query in the Shopify admin used on resource index views. Preserves complex queries with search terms and filters, enabling merchants to quickly access frequently used data views. For example, a saved search can be applied to the product index table to filter products. The query string combines free-text search terms with structured filters to narrow results based on resource attributes.
 *
 * The search applies to a specific resource type such as [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer), [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product), [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order), or [`Collection`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection) objects.
 */
class ShopifySavedSearchQueryObject extends QueryObject
{
    const OBJECT_NAME = "SavedSearch";

    /**
     * The filters of a saved search.
     */
    public function selectFilters(?ShopifySavedSearchFiltersArgumentsObject $argsObject = null): ShopifySearchFilterQueryObject
    {
        $object = new ShopifySearchFilterQueryObject("filters");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The ID of the corresponding resource in the REST Admin API.
     */
    public function selectLegacyResourceId(): static
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    /**
     * The name of a saved search.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The type of resource this saved search is searching in.
     */
    public function selectResourceType(): static
    {
        $this->selectField("resourceType");

        return $this;
    }

    /**
     * The search terms of a saved search.
     */
    public function selectSearchTerms(): static
    {
        $this->selectField("searchTerms");

        return $this;
    }
}
