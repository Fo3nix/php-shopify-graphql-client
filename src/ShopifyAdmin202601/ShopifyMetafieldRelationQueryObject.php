<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Defines a relation between two resources via a reference metafield.
 * The referencer owns the joining field with a given namespace and key,
 * while the target is referenced by the field.
 */
class ShopifyMetafieldRelationQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldRelation";

    /**
     * The key of the field making the reference.
     */
    public function selectKey(): static
    {
        $this->selectField("key");

        return $this;
    }

    /**
     * The name of the field making the reference.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The namespace of the metafield making the reference, or type of the metaobject.
     */
    public function selectNamespace(): static
    {
        $this->selectField("namespace");

        return $this;
    }

    /**
     * The resource making the reference.
     */
    public function selectReferencer(?ShopifyMetafieldRelationReferencerArgumentsObject $argsObject = null): ShopifyMetafieldReferencerUnionObject
    {
        $object = new ShopifyMetafieldReferencerUnionObject("referencer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The referenced resource.
     *
     * @deprecated No longer supported. Access the object directly instead.
     */
    public function selectTarget(?ShopifyMetafieldRelationTargetArgumentsObject $argsObject = null): ShopifyMetafieldReferenceUnionObject
    {
        $object = new ShopifyMetafieldReferenceUnionObject("target");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
