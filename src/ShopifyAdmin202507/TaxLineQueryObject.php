<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TaxLineQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxLine";

    public function selectChannelLiable()
    {
        $this->selectField("channelLiable");

        return $this;
    }

    /**
     * @deprecated Use `priceSet` instead.
     */
    public function selectPrice()
    {
        $this->selectField("price");

        return $this;
    }

    public function selectPriceSet(TaxLinePriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("priceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRate()
    {
        $this->selectField("rate");

        return $this;
    }

    public function selectRatePercentage()
    {
        $this->selectField("ratePercentage");

        return $this;
    }

    public function selectSource()
    {
        $this->selectField("source");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }
}
