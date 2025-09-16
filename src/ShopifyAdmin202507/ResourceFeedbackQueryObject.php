<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ResourceFeedbackQueryObject extends QueryObject
{
    const OBJECT_NAME = "ResourceFeedback";

    /**
     * @deprecated Use `details` instead.
     */
    public function selectAppFeedback(ResourceFeedbackAppFeedbackArgumentsObject $argsObject = null)
    {
        $object = new AppFeedbackQueryObject("appFeedback");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDetails(ResourceFeedbackDetailsArgumentsObject $argsObject = null)
    {
        $object = new AppFeedbackQueryObject("details");
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
