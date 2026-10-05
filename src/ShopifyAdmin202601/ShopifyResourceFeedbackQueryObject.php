<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyResourceFeedbackQueryObject extends QueryObject
{
    const OBJECT_NAME = "ResourceFeedback";

    /**
     * @deprecated Use `details` instead.
     */
    public function selectAppFeedback(ShopifyResourceFeedbackAppFeedbackArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppFeedbackQueryObject("appFeedback");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDetails(ShopifyResourceFeedbackDetailsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppFeedbackQueryObject("details");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSummary()
    {
        $this->selectField("summary");

        return $this;
    }
}
