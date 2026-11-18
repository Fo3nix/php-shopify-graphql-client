<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentOrdersSetFulfillmentDeadline` mutation.
 */
class ShopifyFulfillmentOrdersSetFulfillmentDeadlinePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrdersSetFulfillmentDeadlinePayload";

    /**
     * Whether the fulfillment deadline was successfully set.
     */
    public function selectSuccess(): static
    {
        $this->selectField("success");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyFulfillmentOrdersSetFulfillmentDeadlinePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyFulfillmentOrdersSetFulfillmentDeadlineUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrdersSetFulfillmentDeadlineUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
