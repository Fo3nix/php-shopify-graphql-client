<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyUrlRedirectImportQueryObject extends QueryObject
{
    const OBJECT_NAME = "UrlRedirectImport";

    public function selectCount()
    {
        $this->selectField("count");

        return $this;
    }

    public function selectCreatedCount()
    {
        $this->selectField("createdCount");

        return $this;
    }

    public function selectFailedCount()
    {
        $this->selectField("failedCount");

        return $this;
    }

    public function selectFinished()
    {
        $this->selectField("finished");

        return $this;
    }

    public function selectFinishedAt()
    {
        $this->selectField("finishedAt");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectPreviewRedirects(ShopifyUrlRedirectImportPreviewRedirectsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyUrlRedirectImportPreviewQueryObject("previewRedirects");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUpdatedCount()
    {
        $this->selectField("updatedCount");

        return $this;
    }
}
