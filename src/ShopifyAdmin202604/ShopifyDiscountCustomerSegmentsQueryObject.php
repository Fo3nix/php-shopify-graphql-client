<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents customer segments that are eligible to receive a specific discount, allowing merchants to target promotions to defined groups of customers. This enables personalized marketing campaigns based on customer behavior and characteristics.
 *
 * For example, a "VIP Customer 15% Off" promotion might target a segment of high-value repeat customers, while a "New Customer Welcome" discount could focus on first-time buyers.
 *
 * Segment-based discounts help merchants create more relevant promotional experiences and improve conversion rates by showing the right offers to the right customers at the right time.
 */
class ShopifyDiscountCustomerSegmentsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCustomerSegments";

    /**
     * The list of customer segments who are eligible for the discount.
     */
    public function selectSegments(?ShopifyDiscountCustomerSegmentsSegmentsArgumentsObject $argsObject = null): ShopifySegmentQueryObject
    {
        $object = new ShopifySegmentQueryObject("segments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
