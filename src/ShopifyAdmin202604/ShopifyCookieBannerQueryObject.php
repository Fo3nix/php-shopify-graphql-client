<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A shop's banner settings.
 */
class ShopifyCookieBannerQueryObject extends QueryObject
{
    const OBJECT_NAME = "CookieBanner";

    /**
     * Indicates if the banner is auto managed.
     */
    public function selectAutoManaged(): static
    {
        $this->selectField("autoManaged");

        return $this;
    }

    /**
     * Indicates if the banner is enabled.
     */
    public function selectEnabled(): static
    {
        $this->selectField("enabled");

        return $this;
    }

    /**
     * The published translations associated with the resource.
     */
    public function selectTranslations(ShopifyCookieBannerTranslationsArgumentsObject $argsObject): ShopifyTranslationQueryObject
    {
        $object = new ShopifyTranslationQueryObject("translations");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }
}
