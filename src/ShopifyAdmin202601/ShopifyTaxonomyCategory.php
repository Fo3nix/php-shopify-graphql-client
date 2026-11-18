<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyTaxonomyCategoryAttributeConnection;

/**
 * A product category within Shopify's [standardized product taxonomy](https://shopify.github.io/product-taxonomy/releases/unstable/?categoryId=sg-4-17-2-17). Provides hierarchical organization through parent-child relationships, with each category tracking its ancestors, children, and level in the taxonomy tree.
 *
 * Categories include attributes specific to their product type and navigation properties like whether they're root, leaf, or archived categories. The taxonomy enables consistent product classification across Shopify and integrated marketplaces.
 */
class ShopifyTaxonomyCategory implements ShopifyNode
{
    protected $ancestorIds;
    protected $attributes;
    protected $childrenIds;
    protected $fullName;
    protected $id;
    protected $isArchived;
    protected $isLeaf;
    protected $isRoot;
    protected $level;
    protected $name;
    protected $parentId;

    
    /**
     * The IDs of the category's ancestor categories.
     *
     * @return string[]
     */
    public function getAncestorIds(): ?array
    {
        return $this->ancestorIds;
    }

    
    /**
     * The attributes of the taxonomy category.
     *
     * @return ShopifyTaxonomyCategoryAttributeConnection
     */
    public function getAttributes(): ?ShopifyTaxonomyCategoryAttributeConnection
    {
        return $this->attributes;
    }

    
    /**
     * The IDs of the category's child categories.
     *
     * @return string[]
     */
    public function getChildrenIds(): ?array
    {
        return $this->childrenIds;
    }

    
    /**
     * The full name of the taxonomy category. For example, Animals & Pet Supplies > Pet Supplies > Dog Supplies > Dog Beds.
     *
     * @return string
     */
    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    
    /**
     * The globally-unique ID of the TaxonomyCategory.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * Whether the category is archived. The default value is `false`.
     *
     * @return bool
     */
    public function getIsArchived(): ?bool
    {
        return $this->isArchived;
    }

    
    /**
     * Whether the category is a leaf category. A leaf category doesn't have any subcategories beneath it. For example, in Animals & Pet Supplies > Pet Supplies > Dog Supplies > Dog Treadmills, Dog Treadmills is a leaf category. The value is `true` when there are no `childrenIds` specified.
     *
     * @return bool
     */
    public function getIsLeaf(): ?bool
    {
        return $this->isLeaf;
    }

    
    /**
     * Whether the category is a root category. A root category is at the top level of the category hierarchy and doesn't have a parent category. For example, Animals & Pet Supplies. The value is `true` when there's no `parentId` specified.
     *
     * @return bool
     */
    public function getIsRoot(): ?bool
    {
        return $this->isRoot;
    }

    
    /**
     * The level of the category in the taxonomy tree. Levels indicate the depth of the category from the root. For example, in Animals & Pet Supplies > Pet Supplies > Dog Supplies, Animals & Pet Supplies is at level 1, Animals & Pet Supplies > Pet Supplies is at level 2, and Animals & Pet Supplies > Pet Supplies > Dog Supplies is at level 3.
     *
     * @return int
     */
    public function getLevel(): ?int
    {
        return $this->level;
    }

    
    /**
     * The name of the taxonomy category. For example, Dog Beds.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The ID of the category's parent category.
     *
     * @return string
     */
    public function getParentId(): ?string
    {
        return $this->parentId;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['ancestorIds']) && $data['ancestorIds'] !== null) {
                $instance->ancestorIds = $data['ancestorIds'];
            }
            if (isset($data['attributes']) && $data['attributes'] !== null) {
                $instance->attributes = ShopifyTaxonomyCategoryAttributeConnection::fromArray($data['attributes']);
            }
            if (isset($data['childrenIds']) && $data['childrenIds'] !== null) {
                $instance->childrenIds = $data['childrenIds'];
            }
            if (isset($data['fullName']) && $data['fullName'] !== null) {
                $instance->fullName = $data['fullName'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['isArchived']) && $data['isArchived'] !== null) {
                $instance->isArchived = $data['isArchived'];
            }
            if (isset($data['isLeaf']) && $data['isLeaf'] !== null) {
                $instance->isLeaf = $data['isLeaf'];
            }
            if (isset($data['isRoot']) && $data['isRoot'] !== null) {
                $instance->isRoot = $data['isRoot'];
            }
            if (isset($data['level']) && $data['level'] !== null) {
                $instance->level = $data['level'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['parentId']) && $data['parentId'] !== null) {
                $instance->parentId = $data['parentId'];
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->ancestorIds !== null) {
                $data['ancestorIds'] = $this->ancestorIds;
            }
            if ($this->attributes !== null) {
                $data['attributes'] = $this->attributes->asArray();
            }
            if ($this->childrenIds !== null) {
                $data['childrenIds'] = $this->childrenIds;
            }
            if ($this->fullName !== null) {
                $data['fullName'] = $this->fullName;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->isArchived !== null) {
                $data['isArchived'] = $this->isArchived;
            }
            if ($this->isLeaf !== null) {
                $data['isLeaf'] = $this->isLeaf;
            }
            if ($this->isRoot !== null) {
                $data['isRoot'] = $this->isRoot;
            }
            if ($this->level !== null) {
                $data['level'] = $this->level;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->parentId !== null) {
                $data['parentId'] = $this->parentId;
            }
            return $data;
        }
}
