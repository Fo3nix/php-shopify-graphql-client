<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A group of [customers](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) that meet specific criteria defined through [ShopifyQL query](https://shopify.dev/docs/api/shopifyql/segment-query-language-reference) conditions. Common use cases for segments include customer analytics, targeted marketing campaigns, and automated discount eligibility.
 *
 * The segment's [`query`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Segment#field-query) field contains ShopifyQL conditions that determine membership, such as purchase history, location, or engagement patterns. Tracks when the segment was created with [`creationDate`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Segment#field-creationDate) and when it was last modified with [`lastEditDate`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Segment#field-lastEditDate).
 */
class ShopifySegmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "Segment";

    /**
     * The date and time when the segment was added to the store.
     */
    public function selectCreationDate(): static
    {
        $this->selectField("creationDate");

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
     * The date and time when the segment was last updated.
     */
    public function selectLastEditDate(): static
    {
        $this->selectField("lastEditDate");

        return $this;
    }

    /**
     * The name of the segment.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }
}
