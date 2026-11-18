<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A warning indicating that the market region country code is not supported with Markets.
 */
class ShopifyDraftOrderMarketRegionCountryCodeNotSupportedWarningQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderMarketRegionCountryCodeNotSupportedWarning";

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
