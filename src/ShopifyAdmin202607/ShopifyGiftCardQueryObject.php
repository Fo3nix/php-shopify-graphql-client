<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A gift card that customers use as a payment method. Stores the initial value, current balance, and expiration date.
 *
 * You can issue gift cards to a specific [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) or send them to a [`GiftCardRecipient`](https://shopify.dev/docs/api/admin-graphql/latest/objects/GiftCardRecipient) with a personalized message. The card tracks its transaction history through [`GiftCardCreditTransaction`](https://shopify.dev/docs/api/admin-graphql/latest/objects/GiftCardCreditTransaction) and [`GiftCardDebitTransaction`](https://shopify.dev/docs/api/admin-graphql/latest/objects/GiftCardDebitTransaction) records. You can create and deactivate gift cards using the [`GiftCardCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/giftCardCreate) and [`GiftCardDeactivate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/giftCardDeactivate) mutations, respectively.
 *
 * > Note: After a gift card is deactivated, it can't be used for further purchases or re-enabled.
 */
class ShopifyGiftCardQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCard";

    /**
     * The gift card's remaining balance.
     */
    public function selectBalance(?ShopifyGiftCardBalanceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("balance");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time at which the gift card was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The strategy used to convert the gift card's balance when it's redeemed in a currency other than the one it was issued in.
     */
    public function selectCrossCurrencyRedemptionStrategy(): static
    {
        $this->selectField("crossCurrencyRedemptionStrategy");

        return $this;
    }

    /**
     * The customer that the gift card was sold or issued to, as opposed to the gift recipient. This customer can be reassigned.
     */
    public function selectCustomer(?ShopifyGiftCardCustomerArgumentsObject $argsObject = null): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time at which the gift card was deactivated.
     */
    public function selectDeactivatedAt(): static
    {
        $this->selectField("deactivatedAt");

        return $this;
    }

    /**
     * Whether the gift card is enabled.
     */
    public function selectEnabled(): static
    {
        $this->selectField("enabled");

        return $this;
    }

    /**
     * The date at which the gift card will expire.
     */
    public function selectExpiresOn(): static
    {
        $this->selectField("expiresOn");

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
     * The initial value of the gift card.
     */
    public function selectInitialValue(?ShopifyGiftCardInitialValueArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("initialValue");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the gift card is redeemable in any active market currency.
     */
    public function selectIsRedeemable(): static
    {
        $this->selectField("isRedeemable");

        return $this;
    }

    /**
     * The final four characters of the gift card code.
     */
    public function selectLastCharacters(): static
    {
        $this->selectField("lastCharacters");

        return $this;
    }

    /**
     * The line item from an order that initiated the creation of this gift card. This value is `null` if the gift card was issued manually.
     */
    public function selectLineItem(?ShopifyGiftCardLineItemArgumentsObject $argsObject = null): ShopifyLineItemQueryObject
    {
        $object = new ShopifyLineItemQueryObject("lineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The gift card code. Everything but the final four characters is masked.
     */
    public function selectMaskedCode(): static
    {
        $this->selectField("maskedCode");

        return $this;
    }

    /**
     * The note associated with the gift card, which isn't visible to the customer.
     */
    public function selectNote(): static
    {
        $this->selectField("note");

        return $this;
    }

    /**
     * The order associated with the gift card. This value is `null` if the gift card was issued manually.
     */
    public function selectOrder(?ShopifyGiftCardOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The recipient of the gift card and the details sent with it: preferred name, message, and send time.
     */
    public function selectRecipientAttributes(?ShopifyGiftCardRecipientAttributesArgumentsObject $argsObject = null): ShopifyGiftCardRecipientQueryObject
    {
        $object = new ShopifyGiftCardRecipientQueryObject("recipientAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The theme template used to render the gift card online.
     */
    public function selectTemplateSuffix(): static
    {
        $this->selectField("templateSuffix");

        return $this;
    }

    /**
     * The transaction history of the gift card.
     */
    public function selectTransactions(?ShopifyGiftCardTransactionsArgumentsObject $argsObject = null): ShopifyGiftCardTransactionConnectionQueryObject
    {
        $object = new ShopifyGiftCardTransactionConnectionQueryObject("transactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time at which the gift card was updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
