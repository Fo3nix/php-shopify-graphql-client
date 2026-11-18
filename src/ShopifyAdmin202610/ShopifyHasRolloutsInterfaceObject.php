<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A resource that can be included in rollouts. Use this interface to query the
 * resource's rollouts with a reusable fragment.
 */
class ShopifyHasRolloutsInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "HasRollouts";

    /**
     * The rollouts that include this resource. Walk `treatments.changes` to see
     * what each treatment does to the resource. Use `query` to filter by rollout `status`.
     */
    public function selectRollouts(?ShopifyHasRolloutsRolloutsArgumentsObject $argsObject = null): ShopifyRolloutConnectionQueryObject
    {
        $object = new ShopifyRolloutConnectionQueryObject("rollouts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function onDiscountAutomaticApp(): ShopifyDiscountAutomaticAppQueryObject
    {
        $object = new ShopifyDiscountAutomaticAppQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountAutomaticBasic(): ShopifyDiscountAutomaticBasicQueryObject
    {
        $object = new ShopifyDiscountAutomaticBasicQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountAutomaticBxgy(): ShopifyDiscountAutomaticBxgyQueryObject
    {
        $object = new ShopifyDiscountAutomaticBxgyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountAutomaticFreeShipping(): ShopifyDiscountAutomaticFreeShippingQueryObject
    {
        $object = new ShopifyDiscountAutomaticFreeShippingQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountCodeApp(): ShopifyDiscountCodeAppQueryObject
    {
        $object = new ShopifyDiscountCodeAppQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountCodeBasic(): ShopifyDiscountCodeBasicQueryObject
    {
        $object = new ShopifyDiscountCodeBasicQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountCodeBxgy(): ShopifyDiscountCodeBxgyQueryObject
    {
        $object = new ShopifyDiscountCodeBxgyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountCodeFreeShipping(): ShopifyDiscountCodeFreeShippingQueryObject
    {
        $object = new ShopifyDiscountCodeFreeShippingQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
