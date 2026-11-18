<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A tax applied to a [`LineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem) or [`ShippingLine`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShippingLine). Includes the tax amount, rate, title, and whether the channel that submitted the tax is liable for remitting it.
 *
 * The tax amount in both shop and presentment currencies after applying discounts. Includes information about the tax rate, whether the channel is liable for remitting the tax, and other tax-related details.
 */
class ShopifyTaxLineQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxLine";

    /**
     * Whether the channel that submitted the tax line is liable for remitting. A value of null indicates unknown liability for this tax line.
     */
    public function selectChannelLiable(): static
    {
        $this->selectField("channelLiable");

        return $this;
    }

    /**
     * The amount of tax, in shop currency, after discounts and before returns.
     *
     * @deprecated Use `priceSet` instead.
     */
    public function selectPrice(): static
    {
        $this->selectField("price");

        return $this;
    }

    /**
     * The amount of tax, in shop and presentment currencies, after discounts and before returns.
     */
    public function selectPriceSet(?ShopifyTaxLinePriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("priceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The proportion of the line item price that the tax represents as a decimal.
     */
    public function selectRate(): static
    {
        $this->selectField("rate");

        return $this;
    }

    /**
     * The proportion of the line item price that the tax represents as a percentage.
     */
    public function selectRatePercentage(): static
    {
        $this->selectField("ratePercentage");

        return $this;
    }

    /**
     * The source of the tax.
     */
    public function selectSource(): static
    {
        $this->selectField("source");

        return $this;
    }

    /**
     * The name of the tax.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }
}
