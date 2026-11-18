<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * Represents a [Shopify product taxonomy](https://shopify.github.io/product-taxonomy/releases/unstable/?categoryId=sg-4-17-2-17) node.
 */
class ShopifyProductTaxonomyNode implements ShopifyNode
{
    protected $fullName;
    protected $id;
    protected $isLeaf;
    protected $isRoot;
    protected $name;

    
    /**
     * The full name of the product taxonomy node. For example,  Animals & Pet Supplies > Pet Supplies > Dog Supplies > Dog Beds.
     *
     * @return string
     */
    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    
    /**
     * The ID of the product taxonomy node.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * Whether the node is a leaf node.
     *
     * @return bool
     */
    public function getIsLeaf(): ?bool
    {
        return $this->isLeaf;
    }

    
    /**
     * Whether the node is a root node.
     *
     * @return bool
     */
    public function getIsRoot(): ?bool
    {
        return $this->isRoot;
    }

    
    /**
     * The name of the product taxonomy node. For example, Dog Beds.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['fullName']) && $data['fullName'] !== null) {
                $instance->fullName = $data['fullName'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['isLeaf']) && $data['isLeaf'] !== null) {
                $instance->isLeaf = $data['isLeaf'];
            }
            if (isset($data['isRoot']) && $data['isRoot'] !== null) {
                $instance->isRoot = $data['isRoot'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
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
            if ($this->fullName !== null) {
                $data['fullName'] = $this->fullName;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->isLeaf !== null) {
                $data['isLeaf'] = $this->isLeaf;
            }
            if ($this->isRoot !== null) {
                $data['isRoot'] = $this->isRoot;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            return $data;
        }
}
