<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A warning indicating that a bundle was added to a draft order.
 */
class ShopifyDraftOrderBundleAddedWarningQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderBundleAddedWarning";

    /**
     * The error code.
     */
    public function selectErrorCode(): static
    {
        $this->selectField("errorCode");

        return $this;
    }

    /**
     * The input field that the warning applies to.
     */
    public function selectField_(): static
    {
        $this->selectField("field");

        return $this;
    }

    /**
     * The warning message.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }
}
