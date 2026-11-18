<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A rollout treatment change that withholds a discount from the buyers the treatment serves, regardless of the discount's own `startsAt`, `endsAt`, or `status`. Returned by [`RolloutTreatment.changes`](https://shopify.dev/docs/api/admin-graphql/latest/objects/RolloutTreatment#field-RolloutTreatment.fields.changes).
 */
class ShopifyRolloutDiscountExpireChangeQueryObject extends QueryObject
{
    const OBJECT_NAME = "RolloutDiscountExpireChange";

    /**
     * The discount that the change applies to. Returns `null` when the discount has been deleted or the caller can't read it.
     */
    public function selectDiscount(?ShopifyRolloutDiscountExpireChangeDiscountArgumentsObject $argsObject = null): ShopifyDiscountNodeQueryObject
    {
        $object = new ShopifyDiscountNodeQueryObject("discount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally unique ID for this change, not the resource it affects.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }
}
