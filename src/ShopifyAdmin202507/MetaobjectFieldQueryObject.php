<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetaobjectFieldQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectField";

    public function selectDefinition(MetaobjectFieldDefinitionArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectFieldDefinitionQueryObject("definition");
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

    public function selectReference(MetaobjectFieldReferenceArgumentsObject $argsObject = null)
    {
        $object = new MetafieldReferenceUnionObject("reference");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReferences(MetaobjectFieldReferencesArgumentsObject $argsObject = null)
    {
        $object = new MetafieldReferenceConnectionQueryObject("references");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectThumbnail(MetaobjectFieldThumbnailArgumentsObject $argsObject = null)
    {
        $object = new MetaobjectThumbnailQueryObject("thumbnail");
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
