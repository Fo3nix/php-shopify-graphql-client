<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `quantityRulesAdd` mutation.
 */
class ShopifyQuantityRulesAddPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "QuantityRulesAddPayload";

    /**
     * The list of quantity rules that were added to or updated in the price list.
     */
    public function selectQuantityRules(?ShopifyQuantityRulesAddPayloadQuantityRulesArgumentsObject $argsObject = null): ShopifyQuantityRuleQueryObject
    {
        $object = new ShopifyQuantityRuleQueryObject("quantityRules");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyQuantityRulesAddPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyQuantityRuleUserErrorQueryObject
    {
        $object = new ShopifyQuantityRuleUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
