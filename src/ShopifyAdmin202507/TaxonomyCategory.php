<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\TaxonomyCategoryAttributeConnection;

class TaxonomyCategory
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
     * @return string[]
     */
    public function getAncestorIds()
    {
        return $this->ancestorIds;
    }

    
    /**
     * @return TaxonomyCategoryAttributeConnection
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    
    /**
     * @return string[]
     */
    public function getChildrenIds()
    {
        return $this->childrenIds;
    }

    
    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return bool
     */
    public function getIsArchived()
    {
        return $this->isArchived;
    }

    
    /**
     * @return bool
     */
    public function getIsLeaf()
    {
        return $this->isLeaf;
    }

    
    /**
     * @return bool
     */
    public function getIsRoot()
    {
        return $this->isRoot;
    }

    
    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return string
     */
    public function getParentId()
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
                $instance->attributes = TaxonomyCategoryAttributeConnection::fromArray($data['attributes']);
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
