<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A product line item within a [`SubscriptionContract`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionContract). Each line represents a specific product variant that the customer subscribes to, including its quantity, pricing, and whether shipping is required.
 *
 * The line maintains references to the [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant), [`SellingPlan`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SellingPlan), and custom [`Attribute`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Attribute) objects. It tracks the current price and any scheduled price changes through its [`pricingPolicy`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionPricingPolicy). You can modify lines through [`SubscriptionDraft`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionDraft) objects without affecting the original contract until you commit changes.
 *
 * Learn more about [subscription contracts](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts) and [selling plans](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/selling-plans).
 */
class ShopifySubscriptionLineQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionLine";

    /**
     * The origin contract of the line if it was concatenated from another contract.
     */
    public function selectConcatenatedOriginContract(?ShopifySubscriptionLineConcatenatedOriginContractArgumentsObject $argsObject = null): ShopifySubscriptionContractQueryObject
    {
        $object = new ShopifySubscriptionContractQueryObject("concatenatedOriginContract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The price per unit for the subscription line in the contract's currency.
     */
    public function selectCurrentPrice(?ShopifySubscriptionLineCurrentPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("currentPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * List of custom attributes associated to the line item.
     */
    public function selectCustomAttributes(?ShopifySubscriptionLineCustomAttributesArgumentsObject $argsObject = null): ShopifyAttributeQueryObject
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Discount allocations.
     */
    public function selectDiscountAllocations(?ShopifySubscriptionLineDiscountAllocationsArgumentsObject $argsObject = null): ShopifySubscriptionDiscountAllocationQueryObject
    {
        $object = new ShopifySubscriptionDiscountAllocationQueryObject("discountAllocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * Total line price including all discounts.
     */
    public function selectLineDiscountedPrice(?ShopifySubscriptionLineLineDiscountedPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("lineDiscountedPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Describe the price changes of the line over time.
     */
    public function selectPricingPolicy(?ShopifySubscriptionLinePricingPolicyArgumentsObject $argsObject = null): ShopifySubscriptionPricingPolicyQueryObject
    {
        $object = new ShopifySubscriptionPricingPolicyQueryObject("pricingPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The product ID associated with the subscription line.
     */
    public function selectProductId(): static
    {
        $this->selectField("productId");

        return $this;
    }

    /**
     * The quantity of the unit selected for the subscription line.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * Whether physical shipping is required for the variant.
     */
    public function selectRequiresShipping(): static
    {
        $this->selectField("requiresShipping");

        return $this;
    }

    /**
     * The selling plan ID associated to the line.
     *
     * Indicates which selling plan was used to create this
     * contract line initially. The selling plan ID is also used to
     * find the associated delivery profile.
     *
     * The subscription contract, subscription line, or selling plan might have
     * changed. As a result, the selling plan's attributes might not
     * match the information on the contract.
     */
    public function selectSellingPlanId(): static
    {
        $this->selectField("sellingPlanId");

        return $this;
    }

    /**
     * The selling plan name associated to the line. This name describes
     * the order line items created from this subscription line
     * for both merchants and customers.
     *
     * The value can be different from the selling plan's name, because both
     * the selling plan's name and the subscription line's selling_plan_name
     * attribute can be updated independently.
     */
    public function selectSellingPlanName(): static
    {
        $this->selectField("sellingPlanName");

        return $this;
    }

    /**
     * Variant SKU number of the item associated with the subscription line.
     */
    public function selectSku(): static
    {
        $this->selectField("sku");

        return $this;
    }

    /**
     * Whether the variant is taxable.
     */
    public function selectTaxable(): static
    {
        $this->selectField("taxable");

        return $this;
    }

    /**
     * Product title of the item associated with the subscription line.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The product variant ID associated with the subscription line.
     */
    public function selectVariantId(): static
    {
        $this->selectField("variantId");

        return $this;
    }

    /**
     * The image associated with the line item's variant or product.
     */
    public function selectVariantImage(?ShopifySubscriptionLineVariantImageArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("variantImage");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Product variant title of the item associated with the subscription line.
     */
    public function selectVariantTitle(): static
    {
        $this->selectField("variantTitle");

        return $this;
    }
}
