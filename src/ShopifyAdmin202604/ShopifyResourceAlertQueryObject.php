<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An alert message that appears in the Shopify admin about a problem with a store resource, with 1 or more actions to take. For example, you could use an alert to indicate that you're not charging taxes on some product variants.
 * They can optionally have a specific icon and be dismissed by merchants.
 */
class ShopifyResourceAlertQueryObject extends QueryObject
{
    const OBJECT_NAME = "ResourceAlert";

    /**
     * Buttons in the alert that link to related information.
     * For example, _Edit variants_.
     */
    public function selectActions(?ShopifyResourceAlertActionsArgumentsObject $argsObject = null): ShopifyResourceAlertActionQueryObject
    {
        $object = new ShopifyResourceAlertActionQueryObject("actions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The secondary text in the alert that includes further information or instructions about how to solve a problem.
     */
    public function selectContent(): static
    {
        $this->selectField("content");

        return $this;
    }

    /**
     * Unique identifier that appears when an alert is manually closed by the merchant.
     * Most alerts can't be manually closed.
     */
    public function selectDismissibleHandle(): static
    {
        $this->selectField("dismissibleHandle");

        return $this;
    }

    /**
     * An icon that's optionally displayed with the alert.
     */
    public function selectIcon(): static
    {
        $this->selectField("icon");

        return $this;
    }

    /**
     * Indication of how important the alert is.
     */
    public function selectSeverity(): static
    {
        $this->selectField("severity");

        return $this;
    }

    /**
     * The primary text in the alert that includes information or describes the problem.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }
}
