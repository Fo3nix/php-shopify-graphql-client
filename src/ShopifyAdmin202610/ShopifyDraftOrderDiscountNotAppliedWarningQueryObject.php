<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A warning indicating that a discount cannot be applied to a draft order.
 */
class ShopifyDraftOrderDiscountNotAppliedWarningQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderDiscountNotAppliedWarning";

    /**
     * The code of the discount that can't be applied.
     */
    public function selectDiscountCode(): static
    {
        $this->selectField("discountCode");

        return $this;
    }

    /**
     * The title of the discount that can't be applied.
     */
    public function selectDiscountTitle(): static
    {
        $this->selectField("discountTitle");

        return $this;
    }

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
