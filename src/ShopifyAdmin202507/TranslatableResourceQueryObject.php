<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TranslatableResourceQueryObject extends QueryObject
{
    const OBJECT_NAME = "TranslatableResource";

    public function selectNestedTranslatableResources(TranslatableResourceNestedTranslatableResourcesArgumentsObject $argsObject = null)
    {
        $object = new TranslatableResourceConnectionQueryObject("nestedTranslatableResources");
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

    public function selectTranslatableContent(TranslatableResourceTranslatableContentArgumentsObject $argsObject = null)
    {
        $object = new TranslatableContentQueryObject("translatableContent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTranslations(TranslatableResourceTranslationsArgumentsObject $argsObject = null)
    {
        $object = new TranslationQueryObject("translations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
