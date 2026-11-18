<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Individual navigation links that make up store menus, giving customers clickable paths to explore the store. Menu items are the building blocks that connect shoppers to products, collections, pages, or external resources.
 *
 * For example, within a "Products" menu, individual menu items might link to specific collections like "Summer Collection" or "Best Sellers," each with its own title, URL, and resource connection.
 *
 * Use the `MenuItem` object to:
 * - Define individual navigation links and their destinations
 * - Create nested menu hierarchies through item relationships
 * - Use tags for collection filtering
 * - Connect menu links to specific store resources
 *
 * Menu items support various link types, enabling connections to internal store content or external websites. The nested items capability allows for dropdown or multi-level navigation structures that help organize complex store catalogs.
 */
class ShopifyMenuItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "MenuItem";

    /**
     * A globally-unique ID of the navigation menu item.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * List of the menu items nested under this item sorted by position.
     */
    public function selectItems(?ShopifyMenuItemItemsArgumentsObject $argsObject = null): ShopifyMenuItemQueryObject
    {
        $object = new ShopifyMenuItemQueryObject("items");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The ID of the resource to link to.
     */
    public function selectResourceId(): static
    {
        $this->selectField("resourceId");

        return $this;
    }

    /**
     * The menu item's tags to filter a collection.
     */
    public function selectTags(): static
    {
        $this->selectField("tags");

        return $this;
    }

    /**
     * The menu item's title.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The menu item's type.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }

    /**
     * The menu item's url.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}
