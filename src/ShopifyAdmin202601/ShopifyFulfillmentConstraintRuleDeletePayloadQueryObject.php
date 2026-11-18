<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentConstraintRuleDelete` mutation.
 */
class ShopifyFulfillmentConstraintRuleDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentConstraintRuleDeletePayload";

    /**
     * Whether or not the fulfillment constraint rule was successfully deleted.
     */
    public function selectSuccess(): static
    {
        $this->selectField("success");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyFulfillmentConstraintRuleDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyFulfillmentConstraintRuleDeleteUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentConstraintRuleDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
