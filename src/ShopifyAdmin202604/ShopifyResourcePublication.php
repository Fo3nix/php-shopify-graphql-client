<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyChannel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPublication;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPublishableHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPublishable;

/**
 * A resource publication represents information about the publication of a resource.
 * An instance of `ResourcePublication`, unlike `ResourcePublicationV2`, can be neither published or scheduled to be published.
 *
 * See [ResourcePublicationV2](/api/admin-graphql/latest/objects/ResourcePublicationV2) for more context.
 */
class ShopifyResourcePublication
{
    protected $channel;
    protected $isPublished;
    protected $publication;
    protected $publishDate;
    protected $publishable;

    
    /**
     * The channel the resource publication is published to.
     *
     * @return ShopifyChannel
     */
    public function getChannel(): ?ShopifyChannel
    {
        return $this->channel;
    }

    
    /**
     * Whether the resource publication is published. Also returns true if the resource publication is scheduled to be published.
     * If false, then the resource publication is neither published nor scheduled to be published.
     *
     * @return bool
     */
    public function getIsPublished(): ?bool
    {
        return $this->isPublished;
    }

    
    /**
     * The publication the resource publication is published to.
     *
     * @return ShopifyPublication
     */
    public function getPublication(): ?ShopifyPublication
    {
        return $this->publication;
    }

    
    /**
     * The date that the resource publication was or is going to be published to the publication.
     * If the product isn't published, then this field returns an epoch timestamp.
     *
     * @return Carbon
     */
    public function getPublishDate(): ?Carbon
    {
        return $this->publishDate;
    }

    
    /**
     * The resource published to the publication.
     *
     * @return ShopifyPublishable
     */
    public function getPublishable(): ?ShopifyPublishable
    {
        return $this->publishable;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['channel']) && $data['channel'] !== null) {
                $instance->channel = ShopifyChannel::fromArray($data['channel']);
            }
            if (isset($data['isPublished']) && $data['isPublished'] !== null) {
                $instance->isPublished = $data['isPublished'];
            }
            if (isset($data['publication']) && $data['publication'] !== null) {
                $instance->publication = ShopifyPublication::fromArray($data['publication']);
            }
            if (isset($data['publishDate']) && $data['publishDate'] !== null) {
                $instance->publishDate = new Carbon($data['publishDate']);
            }
            if (isset($data['publishable']) && $data['publishable'] !== null) {
                $instance->publishable = ShopifyPublishableHydrator::fromArray($data['publishable']);
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
            if ($this->channel !== null) {
                $data['channel'] = $this->channel->asArray();
            }
            if ($this->isPublished !== null) {
                $data['isPublished'] = $this->isPublished;
            }
            if ($this->publication !== null) {
                $data['publication'] = $this->publication->asArray();
            }
            if ($this->publishDate !== null) {
                $data['publishDate'] = $this->publishDate->toIso8601String();
            }
            if ($this->publishable !== null) {
                $data['publishable'] = ShopifyPublishableHydrator::toArray($this->publishable);
            }
            return $data;
        }
}
