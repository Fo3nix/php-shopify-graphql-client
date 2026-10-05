<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetaobjectFieldQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectField";

    public function selectDefinition(ShopifyMetaobjectFieldDefinitionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectFieldDefinitionQueryObject("definition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectJsonValue()
    {
        $this->selectField("jsonValue");

        return $this;
    }

    public function selectKey()
    {
        $this->selectField("key");

        return $this;
    }

    public function selectReference(ShopifyMetaobjectFieldReferenceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldReferenceUnionObject("reference");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReferences(ShopifyMetaobjectFieldReferencesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldReferenceConnectionQueryObject("references");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectThumbnail(ShopifyMetaobjectFieldThumbnailArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetaobjectThumbnailQueryObject("thumbnail");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
