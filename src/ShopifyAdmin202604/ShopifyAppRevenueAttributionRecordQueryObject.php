<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Tracks revenue that was captured outside of Shopify's billing system but needs to be attributed to the app for comprehensive revenue reporting and partner analytics. This object enables accurate revenue tracking when apps process payments through external systems while maintaining visibility into total app performance.
 *
 * External revenue attribution is essential for apps that offer multiple payment channels or process certain transactions outside Shopify's billing infrastructure. For example, an enterprise app might process large custom contracts through external payment processors, or a marketplace app could handle direct merchant-to-merchant transactions that still generate app commissions.
 *
 * Use the `AppRevenueAttributionRecord` object to:
 * - Report revenue from external payment processors and billing systems
 * - Track commission-based earnings from marketplace or referral activities
 * - Maintain comprehensive revenue analytics across multiple payment channels
 * - Ensure accurate partner revenue sharing and commission calculations
 * - Generate complete financial reports that include all app-generated revenue streams
 * - Support compliance requirements for external revenue documentation
 *
 * Each attribution record includes the captured amount, external transaction timestamp, and idempotency keys to prevent duplicate reporting. The record type field categorizes different revenue streams, enabling detailed analytics and reporting segmentation.
 *
 * Revenue attribution records are particularly important for apps participating in Shopify's partner program, as they ensure accurate revenue sharing calculations and comprehensive performance metrics. The captured timestamp reflects when the external payment was processed, not when the attribution record was created in Shopify.
 *
 * For detailed revenue attribution values, see the [AppRevenueAttributionType enum](https://shopify.dev/docs/api/admin-graphql/latest/enums/AppRevenueAttributionType).
 */
class ShopifyAppRevenueAttributionRecordQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppRevenueAttributionRecord";

    /**
     * The financial amount captured in this attribution.
     */
    public function selectAmount(?ShopifyAppRevenueAttributionRecordAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The timestamp when the financial amount was captured.
     */
    public function selectCapturedAt(): static
    {
        $this->selectField("capturedAt");

        return $this;
    }

    /**
     * The timestamp at which this revenue attribution was issued.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

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
     * The unique value submitted during the creation of the app revenue attribution record.
     * For more information, refer to
     * [Idempotent requests](https://shopify.dev/api/usage/idempotent-requests).
     */
    public function selectIdempotencyKey(): static
    {
        $this->selectField("idempotencyKey");

        return $this;
    }

    /**
     * Indicates whether this is a test submission.
     */
    public function selectTest(): static
    {
        $this->selectField("test");

        return $this;
    }

    /**
     * The type of revenue attribution.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }
}
