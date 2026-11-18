<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Interface for a gift card transaction.
 */
class ShopifyGiftCardTransactionInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "GiftCardTransaction";

    /**
     * The amount of the transaction.
     */
    public function selectAmount(?ShopifyGiftCardTransactionAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The gift card that the transaction belongs to.
     */
    public function selectGiftCard(?ShopifyGiftCardTransactionGiftCardArgumentsObject $argsObject = null): ShopifyGiftCardQueryObject
    {
        $object = new ShopifyGiftCardQueryObject("giftCard");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The unique ID for the transaction.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     */
    public function selectMetafield(ShopifyGiftCardTransactionMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     */
    public function selectMetafields(?ShopifyGiftCardTransactionMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A note about the transaction.
     */
    public function selectNote(): static
    {
        $this->selectField("note");

        return $this;
    }

    /**
     * The date and time when the transaction was processed.
     */
    public function selectProcessedAt(): static
    {
        $this->selectField("processedAt");

        return $this;
    }

    public function onGiftCardCashOutTransaction(): ShopifyGiftCardCashOutTransactionQueryObject
    {
        $object = new ShopifyGiftCardCashOutTransactionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onGiftCardCreditTransaction(): ShopifyGiftCardCreditTransactionQueryObject
    {
        $object = new ShopifyGiftCardCreditTransactionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onGiftCardDebitTransaction(): ShopifyGiftCardDebitTransactionQueryObject
    {
        $object = new ShopifyGiftCardDebitTransactionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
