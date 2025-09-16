<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OnlineStoreThemeQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreTheme";

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectFiles(OnlineStoreThemeFilesArgumentsObject $argsObject = null)
    {
        $object = new OnlineStoreThemeFileConnectionQueryObject("files");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectPrefix()
    {
        $this->selectField("prefix");

        return $this;
    }

    public function selectProcessing()
    {
        $this->selectField("processing");

        return $this;
    }

    public function selectProcessingFailed()
    {
        $this->selectField("processingFailed");

        return $this;
    }

    public function selectRole()
    {
        $this->selectField("role");

        return $this;
    }

    public function selectThemeStoreId()
    {
        $this->selectField("themeStoreId");

        return $this;
    }

    public function selectTranslations(OnlineStoreThemeTranslationsArgumentsObject $argsObject = null)
    {
        $object = new TranslationQueryObject("translations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
