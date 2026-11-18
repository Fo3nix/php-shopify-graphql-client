<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An object that represents whether a customer can be merged with another customer.
 */
class ShopifyCustomerMergeableQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerMergeable";

    /**
     * The list of fields preventing the customer from being merged.
     */
    public function selectErrorFields(): static
    {
        $this->selectField("errorFields");

        return $this;
    }

    /**
     * Whether the customer can be merged with another customer.
     */
    public function selectIsMergeable(): static
    {
        $this->selectField("isMergeable");

        return $this;
    }

    /**
     * The merge request if one is currently in progress.
     */
    public function selectMergeInProgress(?ShopifyCustomerMergeableMergeInProgressArgumentsObject $argsObject = null): ShopifyCustomerMergeRequestQueryObject
    {
        $object = new ShopifyCustomerMergeRequestQueryObject("mergeInProgress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The reason why the customer can't be merged with another customer.
     */
    public function selectReason(): static
    {
        $this->selectField("reason");

        return $this;
    }
}
