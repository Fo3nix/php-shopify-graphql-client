<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The customizations for the breadcrumbs that represent a buyer's journey to the checkout.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingBuyerJourneyQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingBuyerJourney";

    /**
     * An option to display or hide the breadcrumbs that represent the buyer's journey on 3-page checkout.
     */
    public function selectVisibility(): static
    {
        $this->selectField("visibility");

        return $this;
    }
}
