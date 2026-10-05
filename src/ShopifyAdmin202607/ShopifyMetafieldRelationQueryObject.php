<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMetafieldRelationQueryObject extends QueryObject
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

    public function selectReferencer(ShopifyMetafieldRelationReferencerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldReferencerUnionObject("referencer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated No longer supported. Access the object directly instead.
     */
    public function selectTarget(ShopifyMetafieldRelationTargetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldReferenceUnionObject("target");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
