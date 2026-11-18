<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Payment conditions for an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) or [`DraftOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrder), including when payment is due and how it's scheduled. Payment terms are created from templates that specify net terms (payment due after a certain number of days) or fixed schedules with specific due dates. You can optionally provide custom payment schedules using [`PaymentScheduleInput`](https://shopify.dev/docs/api/admin-graphql/latest/input-objects/PaymentScheduleInput).
 *
 * Each payment term contains one or more [`PaymentSchedule`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PaymentSchedule), which you can access through the [`paymentSchedules`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PaymentTerms#field-PaymentTerms.fields.paymentSchedules) field. Payment schedules contain detailed information for each payment installment.
 *
 * Learn more about [payment terms](https://shopify.dev/docs/apps/build/checkout/payments/payment-terms).
 */
class ShopifyPaymentTermsQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentTerms";

    /**
     * The draft order associated with the payment terms.
     */
    public function selectDraftOrder(?ShopifyPaymentTermsDraftOrderArgumentsObject $argsObject = null): ShopifyDraftOrderQueryObject
    {
        $object = new ShopifyDraftOrderQueryObject("draftOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether payment terms have a payment schedule that's due.
     */
    public function selectDue(): static
    {
        $this->selectField("due");

        return $this;
    }

    /**
     * Duration of payment terms in days based on the payment terms template used to create the payment terms.
     */
    public function selectDueInDays(): static
    {
        $this->selectField("dueInDays");

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
     * The order associated with the payment terms.
     */
    public function selectOrder(?ShopifyPaymentTermsOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the payment terms have overdue payment schedules.
     */
    public function selectOverdue(): static
    {
        $this->selectField("overdue");

        return $this;
    }

    /**
     * List of schedules for the payment terms.
     */
    public function selectPaymentSchedules(?ShopifyPaymentTermsPaymentSchedulesArgumentsObject $argsObject = null): ShopifyPaymentScheduleConnectionQueryObject
    {
        $object = new ShopifyPaymentScheduleConnectionQueryObject("paymentSchedules");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the payment terms template used to create the payment terms.
     */
    public function selectPaymentTermsName(): static
    {
        $this->selectField("paymentTermsName");

        return $this;
    }

    /**
     * The payment terms template type used to create the payment terms.
     */
    public function selectPaymentTermsType(): static
    {
        $this->selectField("paymentTermsType");

        return $this;
    }

    /**
     * The payment terms name, translated into the shop admin's preferred language.
     */
    public function selectTranslatedName(): static
    {
        $this->selectField("translatedName");

        return $this;
    }
}
