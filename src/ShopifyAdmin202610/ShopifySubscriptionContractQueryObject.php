<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A subscription contract that defines recurring purchases for a customer. Each contract specifies what products to deliver, when to bill and ship them, and at what price.
 *
 * The contract includes [`SubscriptionBillingPolicy`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionBillingPolicy) and [`SubscriptionDeliveryPolicy`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionDeliveryPolicy) that control the frequency of charges and fulfillments. [`SubscriptionLine`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionLine) items define the products, quantities, and pricing for each recurring [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order). The contract tracks [`SubscriptionBillingAttempt`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionBillingAttempt) records, payment status, and generated orders throughout its lifecycle. [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) instances manage contracts through various status transitions including active, paused, failed, cancelled, or expired states.
 *
 * Learn more about [building subscription contracts](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/build-a-subscription-contract) and [updating subscription contracts](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/update-a-subscription-contract).
 */
class ShopifySubscriptionContractQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContract";

    /**
     * The subscription app that the subscription contract is registered to.
     */
    public function selectApp(?ShopifySubscriptionContractAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The URL of the subscription contract page on the subscription app.
     */
    public function selectAppAdminUrl(): static
    {
        $this->selectField("appAdminUrl");

        return $this;
    }

    /**
     * The list of billing attempts associated with the subscription contract.
     */
    public function selectBillingAttempts(?ShopifySubscriptionContractBillingAttemptsArgumentsObject $argsObject = null): ShopifySubscriptionBillingAttemptConnectionQueryObject
    {
        $object = new ShopifySubscriptionBillingAttemptConnectionQueryObject("billingAttempts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The billing policy associated with the subscription contract.
     */
    public function selectBillingPolicy(?ShopifySubscriptionContractBillingPolicyArgumentsObject $argsObject = null): ShopifySubscriptionBillingPolicyQueryObject
    {
        $object = new ShopifySubscriptionBillingPolicyQueryObject("billingPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the subscription contract was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The currency that's used for the subscription contract.
     */
    public function selectCurrencyCode(): static
    {
        $this->selectField("currencyCode");

        return $this;
    }

    /**
     * A list of the custom attributes to be added to the generated orders.
     */
    public function selectCustomAttributes(?ShopifySubscriptionContractCustomAttributesArgumentsObject $argsObject = null): ShopifyAttributeQueryObject
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
    public function selectCustomer(?ShopifySubscriptionContractCustomerArgumentsObject $argsObject = null): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The customer payment method that's used for the subscription contract.
     */
    public function selectCustomerPaymentMethod(?ShopifySubscriptionContractCustomerPaymentMethodArgumentsObject $argsObject = null): ShopifyCustomerPaymentMethodQueryObject
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
    public function selectDeliveryMethod(?ShopifySubscriptionContractDeliveryMethodArgumentsObject $argsObject = null): ShopifySubscriptionDeliveryMethodUnionObject
    {
        $object = new ShopifySubscriptionDeliveryMethodUnionObject("deliveryMethod");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The delivery policy associated with the subscription contract.
     */
    public function selectDeliveryPolicy(?ShopifySubscriptionContractDeliveryPolicyArgumentsObject $argsObject = null): ShopifySubscriptionDeliveryPolicyQueryObject
    {
        $object = new ShopifySubscriptionDeliveryPolicyQueryObject("deliveryPolicy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The delivery price for each billing of the subscription contract.
     */
    public function selectDeliveryPrice(?ShopifySubscriptionContractDeliveryPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("deliveryPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of subscription discounts associated with the subscription contract.
     */
    public function selectDiscounts(?ShopifySubscriptionContractDiscountsArgumentsObject $argsObject = null): ShopifySubscriptionManualDiscountConnectionQueryObject
    {
        $object = new ShopifySubscriptionManualDiscountConnectionQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of subscription lines grouped by bundle parent, with bundle components nested under their parent line.
     */
    public function selectGroupedLines(?ShopifySubscriptionContractGroupedLinesArgumentsObject $argsObject = null): ShopifySubscriptionGroupedLineConnectionQueryObject
    {
        $object = new ShopifySubscriptionGroupedLineConnectionQueryObject("groupedLines");
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
     * The last billing error type of the contract.
     */
    public function selectLastBillingAttemptErrorType(): static
    {
        $this->selectField("lastBillingAttemptErrorType");

        return $this;
    }

    /**
     * The current status of the last payment.
     */
    public function selectLastPaymentStatus(): static
    {
        $this->selectField("lastPaymentStatus");

        return $this;
    }

    /**
     * The projected order totals from the last successful commit of the subscription contract. Returns null when no projected order totals have been persisted for the contract, or the latest version was committed through a subscription draft.
     */
    public function selectLatestCommittedProjectedOrderTotals(?ShopifySubscriptionContractLatestCommittedProjectedOrderTotalsArgumentsObject $argsObject = null): ShopifySubscriptionContractCalculationProjectedOrderTotalsQueryObject
    {
        $object = new ShopifySubscriptionContractCalculationProjectedOrderTotalsQueryObject("latestCommittedProjectedOrderTotals");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of lines associated with the subscription contract.
     *
     * @deprecated Use `linesCount` instead.
     */
    public function selectLineCount(): static
    {
        $this->selectField("lineCount");

        return $this;
    }

    /**
     * The list of subscription lines associated with the subscription contract.
     */
    public function selectLines(?ShopifySubscriptionContractLinesArgumentsObject $argsObject = null): ShopifySubscriptionLineConnectionQueryObject
    {
        $object = new ShopifySubscriptionLineConnectionQueryObject("lines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of lines associated with the subscription contract.
     */
    public function selectLinesCount(?ShopifySubscriptionContractLinesCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("linesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The next billing date for the subscription contract. This field is managed by the apps.
     *         Alternatively you can utilize our
     *         [Billing Cycles APIs](https://shopify.dev/docs/apps/selling-strategies/subscriptions/billing-cycles),
     *         which provide auto-computed billing dates and additional functionalities.
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
     * A list of the subscription contract's orders.
     */
    public function selectOrders(?ShopifySubscriptionContractOrdersArgumentsObject $argsObject = null): ShopifyOrderConnectionQueryObject
    {
        $object = new ShopifyOrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The order from which this contract originated.
     */
    public function selectOriginOrder(?ShopifySubscriptionContractOriginOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("originOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The revision id of the contract.
     */
    public function selectRevisionId(): static
    {
        $this->selectField("revisionId");

        return $this;
    }

    /**
     * The current status of the subscription contract.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * The date and time when the subscription contract was updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
