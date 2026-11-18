<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;

/**
 * A group of [customers](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) that meet specific criteria defined through [ShopifyQL query](https://shopify.dev/docs/api/shopifyql/segment-query-language-reference) conditions. Common use cases for segments include customer analytics, targeted marketing campaigns, and automated discount eligibility.
 *
 * The segment's [`query`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Segment#field-query) field contains ShopifyQL conditions that determine membership, such as purchase history, location, or engagement patterns. Tracks when the segment was created with [`creationDate`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Segment#field-creationDate) and when it was last modified with [`lastEditDate`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Segment#field-lastEditDate).
 */
class ShopifySegment implements ShopifyNode
{
    protected $creationDate;
    protected $id;
    protected $lastEditDate;
    protected $name;

    
    /**
     * The date and time when the segment was added to the store.
     *
     * @return Carbon
     */
    public function getCreationDate(): ?Carbon
    {
        return $this->creationDate;
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
     * The date and time when the segment was last updated.
     *
     * @return Carbon
     */
    public function getLastEditDate(): ?Carbon
    {
        return $this->lastEditDate;
    }

    
    /**
     * The name of the segment.
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
            if (isset($data['creationDate']) && $data['creationDate'] !== null) {
                $instance->creationDate = new Carbon($data['creationDate']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['lastEditDate']) && $data['lastEditDate'] !== null) {
                $instance->lastEditDate = new Carbon($data['lastEditDate']);
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
            if ($this->creationDate !== null) {
                $data['creationDate'] = $this->creationDate->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->lastEditDate !== null) {
                $data['lastEditDate'] = $this->lastEditDate->toIso8601String();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            return $data;
        }
}
