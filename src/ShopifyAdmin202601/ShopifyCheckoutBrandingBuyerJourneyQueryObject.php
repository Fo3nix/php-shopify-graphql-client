<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Controls the visibility settings for checkout breadcrumb navigation that shows customers their progress through the purchase journey. This simple customization allows merchants to show or hide the breadcrumb trail based on their checkout flow preferences.
 *
 * For example, a single-page checkout experience might hide breadcrumbs to create a more streamlined appearance, while multi-step checkouts can display them to help customers understand their progress.
 *
 * The visibility setting provides merchants flexibility in how they present checkout navigation to match their specific user experience strategy.
 *
 * Learn more about [checkout customization](https://shopify.dev/docs/api/admin-graphql/latest/objects/CheckoutBranding).
 */
class ShopifyCheckoutBrandingBuyerJourneyQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingBuyerJourney";

    /**
     * An option to display or hide the breadcrumbs that represent the buyer's journey on 3-page checkout.
     */
    public function selectVisibility(): static
    {
        $this->selectField("visibility");

        return $this;
    }
}
