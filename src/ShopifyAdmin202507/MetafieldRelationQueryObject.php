<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MetafieldRelationQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldRelation";

    public function selectKey()
    {
        $this->selectField("key");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectNamespace()
    {
        $this->selectField("namespace");

        return $this;
    }

    public function selectReferencer(MetafieldRelationReferencerArgumentsObject $argsObject = null)
    {
        $object = new MetafieldReferencerUnionObject("referencer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated No longer supported. Access the object directly instead.
     */
    public function selectTarget(MetafieldRelationTargetArgumentsObject $argsObject = null)
    {
        $object = new MetafieldReferenceUnionObject("target");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
