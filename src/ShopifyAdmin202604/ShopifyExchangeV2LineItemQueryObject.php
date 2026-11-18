<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Contains information about an item in the exchange.
 */
class ShopifyExchangeV2LineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeV2LineItem";

    /**
     * A list of attributes that represent custom features or special requests.
     */
    public function selectCustomAttributes(?ShopifyExchangeV2LineItemCustomAttributesArgumentsObject $argsObject = null): ShopifyAttributeQueryObject
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total line price, in shop and presentment currencies, after discounts are applied.
     */
    public function selectDiscountedTotalSet(?ShopifyExchangeV2LineItemDiscountedTotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("discountedTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The price, in shop and presentment currencies,
     * of a single variant unit after line item discounts are applied.
     */
    public function selectDiscountedUnitPriceSet(?ShopifyExchangeV2LineItemDiscountedUnitPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("discountedUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Name of the service provider who fulfilled the order.
     *
     * Valid values are either **manual** or the name of the provider.
     * For example, **amazon**, **shipwire**.
     *
     * Deleted fulfillment services will return null.
     */
    public function selectFulfillmentService(?ShopifyExchangeV2LineItemFulfillmentServiceArgumentsObject $argsObject = null): ShopifyFulfillmentServiceQueryObject
    {
        $object = new ShopifyFulfillmentServiceQueryObject("fulfillmentService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Indicates if this line item is a gift card.
     */
    public function selectGiftCard(): static
    {
        $this->selectField("giftCard");

        return $this;
    }

    /**
     * The gift cards associated with the line item.
     */
    public function selectGiftCards(?ShopifyExchangeV2LineItemGiftCardsArgumentsObject $argsObject = null): ShopifyGiftCardQueryObject
    {
        $object = new ShopifyGiftCardQueryObject("giftCards");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the line item represents the purchase of a gift card.
     */
    public function selectIsGiftCard(): static
    {
        $this->selectField("isGiftCard");

        return $this;
    }

    /**
     * The line item associated with this object.
     */
    public function selectLineItem(?ShopifyExchangeV2LineItemLineItemArgumentsObject $argsObject = null): ShopifyLineItemQueryObject
    {
        $object = new ShopifyLineItemQueryObject("lineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the product.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The total price, in shop and presentment currencies, before discounts are applied.
     */
    public function selectOriginalTotalSet(?ShopifyExchangeV2LineItemOriginalTotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("originalTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The price, in shop and presentment currencies,
     * of a single variant unit before line item discounts are applied.
     */
    public function selectOriginalUnitPriceSet(?ShopifyExchangeV2LineItemOriginalUnitPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("originalUnitPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of products that were purchased.
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
     * The SKU number of the product variant.
     */
    public function selectSku(): static
    {
        $this->selectField("sku");

        return $this;
    }

    /**
     * The TaxLine object connected to this line item.
     */
    public function selectTaxLines(?ShopifyExchangeV2LineItemTaxLinesArgumentsObject $argsObject = null): ShopifyTaxLineQueryObject
    {
        $object = new ShopifyTaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
     * The title of the product or variant. This field only applies to custom line items.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The product variant of the line item.
     */
    public function selectVariant(?ShopifyExchangeV2LineItemVariantArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the variant.
     */
    public function selectVariantTitle(): static
    {
        $this->selectField("variantTitle");

        return $this;
    }

    /**
     * The name of the vendor who created the product variant.
     */
    public function selectVendor(): static
    {
        $this->selectField("vendor");

        return $this;
    }
}
