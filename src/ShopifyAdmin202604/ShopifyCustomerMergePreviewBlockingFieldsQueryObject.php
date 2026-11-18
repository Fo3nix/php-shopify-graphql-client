<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The blocking fields of a customer merge preview. These fields will block customer merge unless edited.
 */
class ShopifyCustomerMergePreviewBlockingFieldsQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerMergePreviewBlockingFields";

    /**
     * The merged note resulting from a customer merge. The merged note is over the 5000 character limit and will block customer merge.
     */
    public function selectNote(): static
    {
        $this->selectField("note");

        return $this;
    }

    /**
     * The merged tags resulting from a customer merge. The merged tags are over the 250 limit and will block customer merge.
     */
    public function selectTags(): static
    {
        $this->selectField("tags");

        return $this;
    }
}
