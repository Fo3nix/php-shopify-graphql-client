<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A resource that has market localizable fields.
 */
class ShopifyMarketLocalizableResourceQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketLocalizableResource";

    /**
     * The market localizable content.
     */
    public function selectMarketLocalizableContent(?ShopifyMarketLocalizableResourceMarketLocalizableContentArgumentsObject $argsObject = null): ShopifyMarketLocalizableContentQueryObject
    {
        $object = new ShopifyMarketLocalizableContentQueryObject("marketLocalizableContent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Market localizations for the market localizable content.
     */
    public function selectMarketLocalizations(ShopifyMarketLocalizableResourceMarketLocalizationsArgumentsObject $argsObject): ShopifyMarketLocalizationQueryObject
    {
        $object = new ShopifyMarketLocalizationQueryObject("marketLocalizations");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The GID of the resource.
     */
    public function selectResourceId(): static
    {
        $this->selectField("resourceId");

        return $this;
    }
}
