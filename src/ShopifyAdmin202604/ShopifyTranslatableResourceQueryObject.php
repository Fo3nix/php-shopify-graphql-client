<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyTranslatableResourceQueryObject extends QueryObject
{
    const OBJECT_NAME = "TranslatableResource";

    public function selectNestedTranslatableResources(ShopifyTranslatableResourceNestedTranslatableResourcesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTranslatableResourceConnectionQueryObject("nestedTranslatableResources");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectResourceId()
    {
        $this->selectField("resourceId");

        return $this;
    }

    public function selectTranslatableContent(ShopifyTranslatableResourceTranslatableContentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTranslatableContentQueryObject("translatableContent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTranslations(ShopifyTranslatableResourceTranslationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTranslationQueryObject("translations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
