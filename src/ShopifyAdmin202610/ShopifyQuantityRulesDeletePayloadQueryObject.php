<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `quantityRulesDelete` mutation.
 */
class ShopifyQuantityRulesDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "QuantityRulesDeletePayload";

    /**
     * A list of product variant IDs whose quantity rules were removed from the price list.
     */
    public function selectDeletedQuantityRulesVariantIds(): static
    {
        $this->selectField("deletedQuantityRulesVariantIds");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyQuantityRulesDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyQuantityRuleUserErrorQueryObject
    {
        $object = new ShopifyQuantityRuleUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
