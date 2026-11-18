<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentConstraintRuleUpdate` mutation.
 */
class ShopifyFulfillmentConstraintRuleUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentConstraintRuleUpdatePayload";

    /**
     * The updated fulfillment constraint rule.
     */
    public function selectFulfillmentConstraintRule(?ShopifyFulfillmentConstraintRuleUpdatePayloadFulfillmentConstraintRuleArgumentsObject $argsObject = null): ShopifyFulfillmentConstraintRuleQueryObject
    {
        $object = new ShopifyFulfillmentConstraintRuleQueryObject("fulfillmentConstraintRule");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyFulfillmentConstraintRuleUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyFulfillmentConstraintRuleUpdateUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentConstraintRuleUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
