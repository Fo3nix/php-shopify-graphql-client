<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class LinkQueryObject extends QueryObject
{
    const OBJECT_NAME = "Link";

    public function selectLabel()
    {
        $this->selectField("label");

        return $this;
    }

    public function selectTranslations(LinkTranslationsArgumentsObject $argsObject = null)
    {
        $object = new TranslationQueryObject("translations");
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
