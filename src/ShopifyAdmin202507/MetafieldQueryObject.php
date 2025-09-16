<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetafieldQueryObject extends QueryObject
{
    const OBJECT_NAME = "Metafield";

    public function selectCompareDigest()
    {
        $this->selectField("compareDigest");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectDefinition(MetafieldDefinitionArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionQueryObject("definition");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This field will be removed in a future release. Use the `description` on the metafield definition instead.

     */
    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
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

    public function selectLegacyResourceId()
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    public function selectNamespace()
    {
        $this->selectField("namespace");

        return $this;
    }

    public function selectOwnerType()
    {
        $this->selectField("ownerType");

        return $this;
    }

    public function selectReference(MetafieldReferenceArgumentsObject $argsObject = null)
    {
        $object = new MetafieldReferenceUnionObject("reference");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReferences(MetafieldReferencesArgumentsObject $argsObject = null)
    {
        $object = new MetafieldReferenceConnectionQueryObject("references");
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

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}
