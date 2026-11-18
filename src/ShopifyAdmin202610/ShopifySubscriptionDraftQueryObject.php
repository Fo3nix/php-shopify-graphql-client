<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The `SubscriptionDraft` object represents a draft version of a
 * [subscription contract](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionContract)
 * before it's committed. It serves as a staging area for making changes to an existing subscription or creating
 * a new one. The draft allows you to preview and modify various aspects of a subscription before applying the changes.
 * This object is deprecated in favor of the
 * [SubscriptionContractCalculation API](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/migrate-to-subscription-calculation-api).
 *
 * Use the `SubscriptionDraft` object to:
 *
 * - Add, remove, or modify subscription lines and their quantities
 * - Manage discounts (add, remove, or update manual and code-based discounts)
 * - Configure delivery options and shipping methods
 * - Set up billing and delivery policies
 * - Manage customer payment methods
 * - Add custom attributes and notes to generated orders
 * - Configure billing cycles and next billing dates
 * - Preview the projected state of the subscription
 *
 * Each `SubscriptionDraft` object maintains a projected state that shows how the subscription will look after the changes
 * are committed. This allows you to preview the impact of your modifications before applying them. The draft can be
 * associated with an existing subscription contract (for modifications) or used to create a new subscription.
 *
 * The draft remains in a draft state until it's committed, at which point the changes are applied to the subscription
 * contract and the draft is no longer accessible.
 *
 * Learn more about
 * [how subscription contracts work](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts)
 * and how to [build](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/build-a-subscription-contract),
 * [update](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/update-a-subscription-contract), and
 * [combine](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/combine-subscription-contracts) subscription contracts.
 */
class ShopifySubscriptionDraftQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDraft";

    /**
     * The billing cycle that the subscription contract will be associated with.
     */
    public function selectBillingCycle(?ShopifySubscriptionDraftBillingCycleArgumentsObject $argsObject = null): ShopifySubscriptionBillingCycleQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleQueryObject("billingCycle");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The billing policy for the subscription contract.
     */
    public function selectBillingPolicy(?ShopifySubscriptionDraftBillingPolicyArgumentsObject $argsObject = null): ShopifySubscriptionBillingPolicyQueryObject
    {
        $object = new ShopifySubscriptionBillingPolicyQueryObject("billingPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The billing cycles of the contracts that will be concatenated to the subscription contract.
     */
    public function selectConcatenatedBillingCycles(?ShopifySubscriptionDraftConcatenatedBillingCyclesArgumentsObject $argsObject = null): ShopifySubscriptionBillingCycleConnectionQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleConnectionQueryObject("concatenatedBillingCycles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The currency used for the subscription contract.
     */
    public function selectCurrencyCode(): static
    {
        $this->selectField("currencyCode");

        return $this;
    }

    /**
     * A list of the custom attributes to be added to the generated orders.
     */
    public function selectCustomAttributes(?ShopifySubscriptionDraftCustomAttributesArgumentsObject $argsObject = null): ShopifyAttributeQueryObject
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The customer to whom the subscription contract belongs.
     */
    public function selectCustomer(?ShopifySubscriptionDraftCustomerArgumentsObject $argsObject = null): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The customer payment method used for the subscription contract.
     */
    public function selectCustomerPaymentMethod(?ShopifySubscriptionDraftCustomerPaymentMethodArgumentsObject $argsObject = null): ShopifyCustomerPaymentMethodQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodQueryObject("customerPaymentMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The delivery method for each billing of the subscription contract.
     */
    public function selectDeliveryMethod(?ShopifySubscriptionDraftDeliveryMethodArgumentsObject $argsObject = null): ShopifySubscriptionDeliveryMethodUnionObject
    {
        $object = new ShopifySubscriptionDeliveryMethodUnionObject("deliveryMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The available delivery options for a given delivery address. Returns `null` for pending requests.
     */
    public function selectDeliveryOptions(?ShopifySubscriptionDraftDeliveryOptionsArgumentsObject $argsObject = null): ShopifySubscriptionDeliveryOptionResultUnionObject
    {
        $object = new ShopifySubscriptionDeliveryOptionResultUnionObject("deliveryOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The delivery policy for the subscription contract.
     */
    public function selectDeliveryPolicy(?ShopifySubscriptionDraftDeliveryPolicyArgumentsObject $argsObject = null): ShopifySubscriptionDeliveryPolicyQueryObject
    {
        $object = new ShopifySubscriptionDeliveryPolicyQueryObject("deliveryPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The delivery price for each billing the subscription contract.
     */
    public function selectDeliveryPrice(?ShopifySubscriptionDraftDeliveryPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("deliveryPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of subscription discounts which will be associated with the subscription contract.
     */
    public function selectDiscounts(?ShopifySubscriptionDraftDiscountsArgumentsObject $argsObject = null): ShopifySubscriptionDiscountConnectionQueryObject
    {
        $object = new ShopifySubscriptionDiscountConnectionQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of subscription discounts to be added to the subscription contract.
     */
    public function selectDiscountsAdded(?ShopifySubscriptionDraftDiscountsAddedArgumentsObject $argsObject = null): ShopifySubscriptionDiscountConnectionQueryObject
    {
        $object = new ShopifySubscriptionDiscountConnectionQueryObject("discountsAdded");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of subscription discounts to be removed from the subscription contract.
     */
    public function selectDiscountsRemoved(?ShopifySubscriptionDraftDiscountsRemovedArgumentsObject $argsObject = null): ShopifySubscriptionDiscountConnectionQueryObject
    {
        $object = new ShopifySubscriptionDiscountConnectionQueryObject("discountsRemoved");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of subscription discounts to be updated on the subscription contract.
     */
    public function selectDiscountsUpdated(?ShopifySubscriptionDraftDiscountsUpdatedArgumentsObject $argsObject = null): ShopifySubscriptionDiscountConnectionQueryObject
    {
        $object = new ShopifySubscriptionDiscountConnectionQueryObject("discountsUpdated");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
     * The list of subscription lines which will be associated with the subscription contract.
     */
    public function selectLines(?ShopifySubscriptionDraftLinesArgumentsObject $argsObject = null): ShopifySubscriptionLineConnectionQueryObject
    {
        $object = new ShopifySubscriptionLineConnectionQueryObject("lines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of subscription lines to be added to the subscription contract.
     */
    public function selectLinesAdded(?ShopifySubscriptionDraftLinesAddedArgumentsObject $argsObject = null): ShopifySubscriptionLineConnectionQueryObject
    {
        $object = new ShopifySubscriptionLineConnectionQueryObject("linesAdded");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of subscription lines to be removed from the subscription contract.
     */
    public function selectLinesRemoved(?ShopifySubscriptionDraftLinesRemovedArgumentsObject $argsObject = null): ShopifySubscriptionLineConnectionQueryObject
    {
        $object = new ShopifySubscriptionLineConnectionQueryObject("linesRemoved");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The next billing date for the subscription contract.
     */
    public function selectNextBillingDate(): static
    {
        $this->selectField("nextBillingDate");

        return $this;
    }

    /**
     * The note field that will be applied to the generated orders.
     */
    public function selectNote(): static
    {
        $this->selectField("note");

        return $this;
    }

    /**
     * The original subscription contract.
     */
    public function selectOriginalContract(?ShopifySubscriptionDraftOriginalContractArgumentsObject $argsObject = null): ShopifySubscriptionContractQueryObject
    {
        $object = new ShopifySubscriptionContractQueryObject("originalContract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Available Shipping Options for a given delivery address. Returns NULL for pending requests.
     *
     * @deprecated Use `deliveryOptions` instead.
     */
    public function selectShippingOptions(?ShopifySubscriptionDraftShippingOptionsArgumentsObject $argsObject = null): ShopifySubscriptionShippingOptionResultUnionObject
    {
        $object = new ShopifySubscriptionShippingOptionResultUnionObject("shippingOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The current status of the subscription contract.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }
}
