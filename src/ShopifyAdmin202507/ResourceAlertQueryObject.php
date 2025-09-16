<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ResourceAlertQueryObject extends QueryObject
{
    const OBJECT_NAME = "ResourceAlert";

    public function selectActions(ResourceAlertActionsArgumentsObject $argsObject = null)
    {
        $object = new ResourceAlertActionQueryObject("actions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectContent()
    {
        $this->selectField("content");

        return $this;
    }

    public function selectDismissibleHandle()
    {
        $this->selectField("dismissibleHandle");

        return $this;
    }

    public function selectIcon()
    {
        $this->selectField("icon");

        return $this;
    }

    public function selectSeverity()
    {
        $this->selectField("severity");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }
}
