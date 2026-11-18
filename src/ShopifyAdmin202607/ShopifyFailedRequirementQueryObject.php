<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Requirements that must be met before an app can be installed.
 */
class ShopifyFailedRequirementQueryObject extends QueryObject
{
    const OBJECT_NAME = "FailedRequirement";

    /**
     * Action to be taken to resolve a failed requirement, including URL link.
     */
    public function selectAction(?ShopifyFailedRequirementActionArgumentsObject $argsObject = null): ShopifyNavigationItemQueryObject
    {
        $object = new ShopifyNavigationItemQueryObject("action");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A concise set of copy strings to be displayed to merchants, to guide them in resolving problems your app
     * encounters when trying to make use of their Shop and its resources.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }
}
