<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `productVariantRelationshipBulkUpdate` mutation.
 */
class ShopifyProductVariantRelationshipBulkUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantRelationshipBulkUpdatePayload";

    /**
     * The product variants with successfully updated product variant relationships.
     */
    public function selectParentProductVariants(?ShopifyProductVariantRelationshipBulkUpdatePayloadParentProductVariantsArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject("parentProductVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyProductVariantRelationshipBulkUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyProductVariantRelationshipBulkUpdateUserErrorQueryObject
    {
        $object = new ShopifyProductVariantRelationshipBulkUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
