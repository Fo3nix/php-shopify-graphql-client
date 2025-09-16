<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TaxonomyCategoryQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyCategory";

    public function selectAncestorIds()
    {
        $this->selectField("ancestorIds");

        return $this;
    }

    public function selectAttributes(TaxonomyCategoryAttributesArgumentsObject $argsObject = null)
    {
        $object = new TaxonomyCategoryAttributeConnectionQueryObject("attributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChildrenIds()
    {
        $this->selectField("childrenIds");

        return $this;
    }

    public function selectFullName()
    {
        $this->selectField("fullName");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectIsArchived()
    {
        $this->selectField("isArchived");

        return $this;
    }

    public function selectIsLeaf()
    {
        $this->selectField("isLeaf");

        return $this;
    }

    public function selectIsRoot()
    {
        $this->selectField("isRoot");

        return $this;
    }

    public function selectLevel()
    {
        $this->selectField("level");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectParentId()
    {
        $this->selectField("parentId");

        return $this;
    }
}
