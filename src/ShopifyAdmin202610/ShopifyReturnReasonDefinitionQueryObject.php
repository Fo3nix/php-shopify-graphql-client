<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A standardized reason for returning an item.
 *
 * - Shopify offers an expanded library of return reasons available to all merchants
 * - For each product, Shopify suggests a curated subset of reasons based on the product's category
 * - Suggested reasons aren't the only valid options. When creating a return via the API, you can use any reason from the [full library](https://shopify.dev/docs/api/admin-graphql/latest/queries/returnReasonDefinitions).
 */
class ShopifyReturnReasonDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnReasonDefinition";

    /**
     * Whether the return reason has been removed from taxonomy.
     *
     * Deleted reasons should not be presented to customers when creating new returns, but may still
     * appear on existing returns that were created before the reason was deleted. This field enables
     * graceful deprecation of return reasons without breaking historical data.
     */
    public function selectDeleted(): static
    {
        $this->selectField("deleted");

        return $this;
    }

    /**
     * A unique, human-readable, stable identifier for the return reason.
     *
     * Example values include "arrived-late", "comfort", "too-tight", "color-too-bright", and "quality".
     * The handle remains consistent across API versions and localizations, making it suitable for programmatic use.
     */
    public function selectHandle(): static
    {
        $this->selectField("handle");

        return $this;
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
     * The localized, user-facing name of the return reason.
     *
     * This field returns the reason name in the requested locale, automatically falling back to
     * English if no translation is available. Use this field when displaying return reasons to
     * customers or merchants.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }
}
