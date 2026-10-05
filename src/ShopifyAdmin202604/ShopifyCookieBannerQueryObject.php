<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCookieBannerQueryObject extends QueryObject
{
    const OBJECT_NAME = "CookieBanner";

    public function selectAutoManaged()
    {
        $this->selectField("autoManaged");

        return $this;
    }

    public function selectEnabled()
    {
        $this->selectField("enabled");

        return $this;
    }

    public function selectTranslations(ShopifyCookieBannerTranslationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTranslationQueryObject("translations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
