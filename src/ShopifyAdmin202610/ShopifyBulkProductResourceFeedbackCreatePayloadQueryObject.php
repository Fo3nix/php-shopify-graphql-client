<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `bulkProductResourceFeedbackCreate` mutation.
 */
class ShopifyBulkProductResourceFeedbackCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "BulkProductResourceFeedbackCreatePayload";

    /**
     * The feedback that's created.
     */
    public function selectFeedback(?ShopifyBulkProductResourceFeedbackCreatePayloadFeedbackArgumentsObject $argsObject = null): ShopifyProductResourceFeedbackQueryObject
    {
        $object = new ShopifyProductResourceFeedbackQueryObject("feedback");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyBulkProductResourceFeedbackCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBulkProductResourceFeedbackCreateUserErrorQueryObject
    {
        $object = new ShopifyBulkProductResourceFeedbackCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
