<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Navigation menus that organize links into logical structures to guide customers through a store. Menus serve as the backbone of store navigation, making it easy for customers to find products, pages, and other content through organized hierarchical links.
 *
 * For example, a merchant might create a main navigation menu with top-level categories like "Products," "About Us," and "Contact," where each category can contain nested menu items linking to specific collections, pages, or external resources.
 *
 * Use the `Menu` object to:
 * - Build and customize store navigation structures
 * - Organize hierarchical menu systems with nested items
 * - Work with default menus that can't be deleted
 * - Access menu items for building navigation
 *
 * Menus can be designated as default navigation elements (like main menu or footer), which can't be deleted and have restricted handle updates. The handle provides a unique identifier that themes can reference, while the items collection enables nested navigation structures.
 *
 * Each menu contains menu items that can link to various resource types. This flexibility lets merchants create navigation experiences that guide customers through their store.
 */
class ShopifyMenuQueryObject extends QueryObject
{
    const OBJECT_NAME = "Menu";

    /**
     * The date and time when the menu was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The menu's handle.
     */
    public function selectHandle(): static
    {
        $this->selectField("handle");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * Whether the menu is a default. The handle for default menus can't be updated and default menus can't be deleted.
     */
    public function selectIsDefault(): static
    {
        $this->selectField("isDefault");

        return $this;
    }

    /**
     * A list of items on the menu sorted by position.
     */
    public function selectItems(?ShopifyMenuItemsArgumentsObject $argsObject = null): ShopifyMenuItemQueryObject
    {
        $object = new ShopifyMenuItemQueryObject("items");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The menu's title.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The published translations associated with the resource.
     */
    public function selectTranslations(ShopifyMenuTranslationsArgumentsObject $argsObject): ShopifyTranslationQueryObject
    {
        $object = new ShopifyTranslationQueryObject("translations");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }
}
