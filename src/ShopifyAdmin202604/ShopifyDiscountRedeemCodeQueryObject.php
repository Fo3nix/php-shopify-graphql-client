<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A code that a customer can use at checkout to receive a discount. For example, a customer can use the redeem code 'SUMMER20' at checkout to receive a 20% discount on their entire order.
 */
class ShopifyDiscountRedeemCodeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountRedeemCode";

    /**
     * The number of times that the discount redeem code has been used. This value is updated asynchronously and can be different than the actual usage count.
     */
    public function selectAsyncUsageCount(): static
    {
        $this->selectField("asyncUsageCount");

        return $this;
    }

    /**
     * The code that a customer can use at checkout to receive a discount.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The date and time when the discount redeem code was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The application that created the discount redeem code.
     */
    public function selectCreatedBy(?ShopifyDiscountRedeemCodeCreatedByArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("createdBy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID of the discount redeem code.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }
}
