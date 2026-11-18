<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a fraud check on an order. This object is deprecated in favor of [OrderRiskAssessment](https://shopify.dev/api/admin-graphql/latest/objects/OrderRiskAssessment) and its enhanced capabilities.
 */
class ShopifyOrderRiskQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderRisk";

    /**
     * Whether the risk level is shown in the Shopify admin. If false, then this order risk is ignored when Shopify determines the overall risk level for the order.
     *
     * @deprecated This field is deprecated in favor of OrderRiskAssessment.facts.
     */
    public function selectDisplay(): static
    {
        $this->selectField("display");

        return $this;
    }

    /**
     * The likelihood that an order is fraudulent, based on this order risk. The level can be set by Shopify risk analysis or by an app.
     *
     * @deprecated This field is deprecated in favor of OrderRiskAssessment.riskLevel which allows for more granular risk levels, including PENDING and NONE.
     */
    public function selectLevel(): static
    {
        $this->selectField("level");

        return $this;
    }

    /**
     * The risk message that's shown to the merchant in the Shopify admin.
     *
     * @deprecated This field is deprecated in favor of OrderRiskAssessment.facts.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }
}
