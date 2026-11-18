<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents errors returned from apps when using the marketing activity extension.
 */
class ShopifyMarketingActivityExtensionAppErrorsQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingActivityExtensionAppErrors";

    /**
     * The app error type.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The list of errors returned by the app.
     */
    public function selectUserErrors(?ShopifyMarketingActivityExtensionAppErrorsUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
