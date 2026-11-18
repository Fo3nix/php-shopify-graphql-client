<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A rollout treatment change that makes a discount available to the buyers the treatment serves, regardless of the discount's own `startsAt`, `endsAt`, or `status`. Returned by [`RolloutTreatment.changes`](https://shopify.dev/docs/api/admin-graphql/latest/objects/RolloutTreatment#field-RolloutTreatment.fields.changes).
 */
class ShopifyRolloutDiscountActivateChangeQueryObject extends QueryObject
{
    const OBJECT_NAME = "RolloutDiscountActivateChange";

    /**
     * The discount that the change applies to. Returns `null` when the discount has been deleted or the caller can't read it.
     */
    public function selectDiscount(?ShopifyRolloutDiscountActivateChangeDiscountArgumentsObject $argsObject = null): ShopifyDiscountNodeQueryObject
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
