<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentConstraintRuleCreate` mutation.
 */
class ShopifyFulfillmentConstraintRuleCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentConstraintRuleCreatePayload";

    /**
     * The newly created fulfillment constraint rule.
     */
    public function selectFulfillmentConstraintRule(?ShopifyFulfillmentConstraintRuleCreatePayloadFulfillmentConstraintRuleArgumentsObject $argsObject = null): ShopifyFulfillmentConstraintRuleQueryObject
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
    public function selectUserErrors(?ShopifyFulfillmentConstraintRuleCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyFulfillmentConstraintRuleCreateUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentConstraintRuleCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
