<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Defines customer targeting for discounts through specific individual customers. This object allows merchants to create exclusive discounts that are only available to explicitly selected customers.
 *
 * For example, a VIP customer appreciation discount might target specific high-value customers by individually selecting them, or a beta program discount could be offered to selected early adopters.
 *
 * Use `DiscountCustomers` to:
 * - Target specific individual customers for exclusive promotions
 * - Create personalized discount experiences for selected customers
 * - Offer special discounts to VIP or loyal customers
 * - Provide exclusive access to promotions for specific individuals
 *
 * This targeting method requires you to add each customer who should be eligible for the discount. For broader targeting based on customer attributes or segments, use [`DiscountCustomerSegments`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountCustomerSegments) instead.
 *
 * Learn more about creating customer-specific discounts using [`discountCodeBasicCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/discountCodeBasicCreate) and [`discountCodeBasicUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/discountCodeBasicUpdate).
 */
class ShopifyDiscountCustomersQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCustomers";

    /**
     * The list of individual customers eligible for the discount.
     */
    public function selectCustomers(?ShopifyDiscountCustomersCustomersArgumentsObject $argsObject = null): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject("customers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
