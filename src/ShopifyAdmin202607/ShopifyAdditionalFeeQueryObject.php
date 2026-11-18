<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Additional fees applied to an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) beyond the standard product and shipping costs. Additional fees typically include duties, import fees, or other special handling charges that need separate tracking from regular [`LineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem) objects.
 *
 * Each fee includes its name, price in both shop and presentment currencies, and any applicable taxes broken down by [`TaxLine`](https://shopify.dev/docs/api/admin-graphql/latest/objects/TaxLine).
 */
class ShopifyAdditionalFeeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AdditionalFee";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The name of the additional fee.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The price of the additional fee.
     */
    public function selectPrice(?ShopifyAdditionalFeePriceArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of taxes charged on the additional fee.
     */
    public function selectTaxLines(?ShopifyAdditionalFeeTaxLinesArgumentsObject $argsObject = null): ShopifyTaxLineQueryObject
    {
        $object = new ShopifyTaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
