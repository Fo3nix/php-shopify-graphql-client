<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * Represents a draft order tag.
 */
class ShopifyDraftOrderTag implements ShopifyNode
{
    protected $handle;
    protected $id;
    protected $title;

    
    /**
     * Handle of draft order tag.
     *
     * @return string
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    
    /**
     * ID of draft order tag.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * Title of draft order tag.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
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
            if ($this->handle !== null) {
                $data['handle'] = $this->handle;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            return $data;
        }
}
