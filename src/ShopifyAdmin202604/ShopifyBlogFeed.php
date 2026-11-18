<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * RSS feed provider details for blog syndication. This object contains the location and path information for external feed services that were previously integrated with the blog.
 *
 * The `BlogFeed` object maintains the feed URL and path to ensure existing feed subscriptions continue working.
 *
 * Use the `BlogFeed` object to:
 * - Access RSS feed provider configuration
 * - Retrieve feed location and path information
 * - Maintain existing feed syndication settings
 *
 * > Note:
 * > This is a legacy feature. New integrations with external feed services are not supported.
 */
class ShopifyBlogFeed
{
    protected $location;
    protected $path;

    
    /**
     * Blog feed provider url.
     *
     * @return string
     */
    public function getLocation(): mixed
    {
        return $this->location;
    }

    
    /**
     * Blog feed provider path.
     *
     * @return string
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = $data['location'];
            }
            if (isset($data['path']) && $data['path'] !== null) {
                $instance->path = $data['path'];
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
            if ($this->location !== null) {
                $data['location'] = $this->location;
            }
            if ($this->path !== null) {
                $data['path'] = $this->path;
            }
            return $data;
        }
}
