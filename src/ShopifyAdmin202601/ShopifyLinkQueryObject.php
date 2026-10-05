<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyLinkQueryObject extends QueryObject
{
    const OBJECT_NAME = "Link";

    public function selectLabel()
    {
        $this->selectField("label");

        return $this;
    }

    public function selectTranslations(ShopifyLinkTranslationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTranslationQueryObject("translations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }
}
