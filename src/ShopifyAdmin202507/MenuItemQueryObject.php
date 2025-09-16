<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MenuItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "MenuItem";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectItems(MenuItemItemsArgumentsObject $argsObject = null)
    {
        $object = new MenuItemQueryObject("items");
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

    public function selectTags()
    {
        $this->selectField("tags");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }
}
