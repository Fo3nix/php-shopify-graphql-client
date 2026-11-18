<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * A native page for the customer account navigation menu.
 */
class ShopifyCustomerAccountNativePage implements ShopifyCustomerAccountPage, ShopifyNavigable, ShopifyNode
{
    protected $defaultCursor;
    protected $handle;
    protected $id;
    protected $pageType;
    protected $title;

    
    /**
     * A default [cursor](https://shopify.dev/api/usage/pagination-graphql) that returns the single next record, sorted ascending by ID.
     *
     * @return string
     */
    public function getDefaultCursor(): ?string
    {
        return $this->defaultCursor;
    }

    
    /**
     * A unique, human-friendly string for the customer account page.
     *
     * @return string
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    
    /**
     * The unique ID for the customer account page.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The type of customer account native page.
     *
     * @return string A ShopifyCustomerAccountNativePagePageTypeEnumObject value
     */
    public function getPageType(): ?string
    {
        return $this->pageType;
    }

    
    /**
     * The title of the customer account page.
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
            if (isset($data['defaultCursor']) && $data['defaultCursor'] !== null) {
                $instance->defaultCursor = $data['defaultCursor'];
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['pageType']) && $data['pageType'] !== null) {
                $instance->pageType = $data['pageType'];
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
            if ($this->defaultCursor !== null) {
                $data['defaultCursor'] = $this->defaultCursor;
            }
            if ($this->handle !== null) {
                $data['handle'] = $this->handle;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->pageType !== null) {
                $data['pageType'] = $this->pageType;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            return $data;
        }
}
