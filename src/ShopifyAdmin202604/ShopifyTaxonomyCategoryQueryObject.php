<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A product category within Shopify's [standardized product taxonomy](https://shopify.github.io/product-taxonomy/releases/unstable/?categoryId=sg-4-17-2-17). Provides hierarchical organization through parent-child relationships, with each category tracking its ancestors, children, and level in the taxonomy tree.
 *
 * Categories include attributes specific to their product type and navigation properties like whether they're root, leaf, or archived categories. The taxonomy enables consistent product classification across Shopify and integrated marketplaces.
 */
class ShopifyTaxonomyCategoryQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxonomyCategory";

    /**
     * The IDs of the category's ancestor categories.
     */
    public function selectAncestorIds(): static
    {
        $this->selectField("ancestorIds");

        return $this;
    }

    /**
     * The attributes of the taxonomy category.
     */
    public function selectAttributes(?ShopifyTaxonomyCategoryAttributesArgumentsObject $argsObject = null): ShopifyTaxonomyCategoryAttributeConnectionQueryObject
    {
        $object = new ShopifyTaxonomyCategoryAttributeConnectionQueryObject("attributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The IDs of the category's child categories.
     */
    public function selectChildrenIds(): static
    {
        $this->selectField("childrenIds");

        return $this;
    }

    /**
     * The full name of the taxonomy category. For example, Animals & Pet Supplies > Pet Supplies > Dog Supplies > Dog Beds.
     */
    public function selectFullName(): static
    {
        $this->selectField("fullName");

        return $this;
    }

    /**
     * The globally-unique ID of the TaxonomyCategory.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * Whether the category is archived. The default value is `false`.
     */
    public function selectIsArchived(): static
    {
        $this->selectField("isArchived");

        return $this;
    }

    /**
     * Whether the category is a leaf category. A leaf category doesn't have any subcategories beneath it. For example, in Animals & Pet Supplies > Pet Supplies > Dog Supplies > Dog Treadmills, Dog Treadmills is a leaf category. The value is `true` when there are no `childrenIds` specified.
     */
    public function selectIsLeaf(): static
    {
        $this->selectField("isLeaf");

        return $this;
    }

    /**
     * Whether the category is a root category. A root category is at the top level of the category hierarchy and doesn't have a parent category. For example, Animals & Pet Supplies. The value is `true` when there's no `parentId` specified.
     */
    public function selectIsRoot(): static
    {
        $this->selectField("isRoot");

        return $this;
    }

    /**
     * The level of the category in the taxonomy tree. Levels indicate the depth of the category from the root. For example, in Animals & Pet Supplies > Pet Supplies > Dog Supplies, Animals & Pet Supplies is at level 1, Animals & Pet Supplies > Pet Supplies is at level 2, and Animals & Pet Supplies > Pet Supplies > Dog Supplies is at level 3.
     */
    public function selectLevel(): static
    {
        $this->selectField("level");

        return $this;
    }

    /**
     * The name of the taxonomy category. For example, Dog Beds.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The ID of the category's parent category.
     */
    public function selectParentId(): static
    {
        $this->selectField("parentId");

        return $this;
    }
}
