<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A locale that's been enabled on a shop.
 */
class ShopifyShopLocaleQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopLocale";

    /**
     * The locale ISO code.
     */
    public function selectLocale(): static
    {
        $this->selectField("locale");

        return $this;
    }

    /**
     * The market web presences that use the locale.
     */
    public function selectMarketWebPresences(?ShopifyShopLocaleMarketWebPresencesArgumentsObject $argsObject = null): ShopifyMarketWebPresenceQueryObject
    {
        $object = new ShopifyMarketWebPresenceQueryObject("marketWebPresences");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The human-readable locale name.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * Whether the locale is the default locale for the shop.
     */
    public function selectPrimary(): static
    {
        $this->selectField("primary");

        return $this;
    }

    /**
     * Whether the locale is visible to buyers.
     */
    public function selectPublished(): static
    {
        $this->selectField("published");

        return $this;
    }
}
