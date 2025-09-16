<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootCollectionByIdentifierArgumentsObject extends ArgumentsObject
{
    protected $identifier;

    public function setIdentifier(CollectionIdentifierInputInputObject $collectionIdentifierInputInputObject)
    {
        $this->identifier = $collectionIdentifierInputInputObject;

        return $this;
    }
}
