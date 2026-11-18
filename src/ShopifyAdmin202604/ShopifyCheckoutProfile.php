<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Carbon\Carbon;

/**
 * A checkout profile defines the branding settings and the UI extensions for a store's checkout. A checkout profile could be published or draft. A store might have at most one published checkout profile, which is used to render their live checkout. The store could also have multiple draft profiles that were created, previewed, and published using the admin checkout editor.
 */
class ShopifyCheckoutProfile implements ShopifyNode
{
    protected $createdAt;
    protected $editedAt;
    protected $id;
    protected $isPublished;
    protected $name;
    protected $typOspPagesActive;
    protected $updatedAt;

    
    /**
     * The date and time when the checkout profile was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The date and time when the checkout profile was last edited.
     *
     * @return Carbon
     */
    public function getEditedAt(): ?Carbon
    {
        return $this->editedAt;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * Whether the checkout profile is published or not.
     *
     * @return bool
     */
    public function getIsPublished(): ?bool
    {
        return $this->isPublished;
    }

    
    /**
     * The profile name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * Whether the checkout profile Thank You Page and Order Status Page are actively using extensibility or not.
     *
     * @return bool
     */
    public function getTypOspPagesActive(): ?bool
    {
        return $this->typOspPagesActive;
    }

    
    /**
     * The date and time when the checkout profile was last updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['editedAt']) && $data['editedAt'] !== null) {
                $instance->editedAt = new Carbon($data['editedAt']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['isPublished']) && $data['isPublished'] !== null) {
                $instance->isPublished = $data['isPublished'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['typOspPagesActive']) && $data['typOspPagesActive'] !== null) {
                $instance->typOspPagesActive = $data['typOspPagesActive'];
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->editedAt !== null) {
                $data['editedAt'] = $this->editedAt->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->isPublished !== null) {
                $data['isPublished'] = $this->isPublished;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->typOspPagesActive !== null) {
                $data['typOspPagesActive'] = $this->typOspPagesActive;
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
