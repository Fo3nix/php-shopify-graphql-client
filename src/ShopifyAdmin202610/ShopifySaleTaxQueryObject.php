<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The tax allocated to a sale from a single tax line.
 */
class ShopifySaleTaxQueryObject extends QueryObject
{
    const OBJECT_NAME = "SaleTax";

    /**
     * The portion of the total tax amount on the related sale that comes from the associated tax line.
     */
    public function selectAmount(?ShopifySaleTaxAmountArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The unique ID for the sale tax.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The tax line associated with the sale.
     */
    public function selectTaxLine(?ShopifySaleTaxTaxLineArgumentsObject $argsObject = null): ShopifyTaxLineQueryObject
    {
        $object = new ShopifyTaxLineQueryObject("taxLine");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
