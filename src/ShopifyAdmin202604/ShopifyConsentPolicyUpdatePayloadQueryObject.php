<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `consentPolicyUpdate` mutation.
 */
class ShopifyConsentPolicyUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ConsentPolicyUpdatePayload";

    /**
     * All updated and created consent policies. The consent policies that haven't been modified as part of the mutation aren't returned.
     */
    public function selectUpdatedPolicies(?ShopifyConsentPolicyUpdatePayloadUpdatedPoliciesArgumentsObject $argsObject = null): ShopifyConsentPolicyQueryObject
    {
        $object = new ShopifyConsentPolicyQueryObject("updatedPolicies");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyConsentPolicyUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyConsentPolicyErrorQueryObject
    {
        $object = new ShopifyConsentPolicyErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
