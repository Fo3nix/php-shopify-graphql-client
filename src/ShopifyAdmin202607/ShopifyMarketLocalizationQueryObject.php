<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The market localization of a field within a resource, which is determined by the market ID.
 */
class ShopifyMarketLocalizationQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketLocalization";

    /**
     * A reference to the value being localized on the resource that this market localization belongs to.
     */
    public function selectKey(): static
    {
        $this->selectField("key");

        return $this;
    }

    /**
     * The market that the localization is specific to.
     */
    public function selectMarket(?ShopifyMarketLocalizationMarketArgumentsObject $argsObject = null): ShopifyMarketQueryObject
    {
        $object = new ShopifyMarketQueryObject("market");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the original content has changed since this market localization was updated.
     */
    public function selectOutdated(): static
    {
        $this->selectField("outdated");

        return $this;
    }

    /**
     * The date and time when the market localization was updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }

    /**
     * The value of the market localization.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
