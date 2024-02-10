<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Sync\V1\Service\SyncMap;

use Twilio\Options;
use Twilio\Values;

abstract class SyncMapItemOptions {
    /**
     * @param string $ifMatch The If-Match HTTP request header
     * @return DeleteSyncMapItemOptions Options builder
     */
    public static function delete(string $ifMatch = Values::NONE): DeleteSyncMapItemOptions {
        return new DeleteSyncMapItemOptions($ifMatch);
    }

    /**
     * @param int $ttl An alias for item_ttl
     * @param int $itemTtl How long, in seconds, before the Map Item expires
     * @param int $collectionTtl How long, in seconds, before the Map Item's parent
     *                           Sync Map expires and is deleted
     * @return CreateSyncMapItemOptions Options builder
     */
    public static function create(int $ttl = Values::NONE, int $itemTtl = Values::NONE, int $collectionTtl = Values::NONE): CreateSyncMapItemOptions {
        return new CreateSyncMapItemOptions($ttl, $itemTtl, $collectionTtl);
    }

    /**
     * @param string $order How to order the Map Items returned by their key value
     * @param string $from The index of the first Sync Map Item resource to read
     * @param string $bounds Whether to include the Map Item referenced by the from
     *                       parameter
     * @return ReadSyncMapItemOptions Options builder
     */
    public static function read(string $order = Values::NONE, string $from = Values::NONE, string $bounds = Values::NONE): ReadSyncMapItemOptions {
        return new ReadSyncMapItemOptions($order, $from, $bounds);
    }

    /**
     * @param array $data A JSON string that represents an arbitrary, schema-less
     *                    object that the Map Item stores
     * @param int $ttl An alias for item_ttl
     * @param int $itemTtl How long, in seconds, before the Map Item expires
     * @param int $collectionTtl How long, in seconds, before the Map Item's parent
     *                           Sync Map expires and is deleted
     * @param string $ifMatch The If-Match HTTP request header
     * @return UpdateSyncMapItemOptions Options builder
     */
    public static function update(array $data = Values::ARRAY_NONE, int $ttl = Values::NONE, int $itemTtl = Values::NONE, int $collectionTtl = Values::NONE, string $ifMatch = Values::NONE): UpdateSyncMapItemOptions {
        return new UpdateSyncMapItemOptions($data, $ttl, $itemTtl, $collectionTtl, $ifMatch);
    }
}

class DeleteSyncMapItemOptions extends Options {
    /**
     * @param string $ifMatch The If-Match HTTP request header
     */
    public function __construct(string $ifMatch = Values::NONE) {
        $this->options['ifMatch'] = $ifMatch;
    }

    /**
     * If provided, applies this mutation if (and only if) the “revision” field of this [map item] matches the provided value. This matches the semantics of (and is implemented with) the HTTP [If-Match header](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/If-Match).
     *
     * @param string $ifMatch The If-Match HTTP request header
     * @return $this Fluent Builder
     */
    public function setIfMatch(string $ifMatch): self {
        $this->options['ifMatch'] = $ifMatch;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Sync.V1.DeleteSyncMapItemOptions ' . $options . ']';
    }
}

class CreateSyncMapItemOptions extends Options {
    /**
     * @param int $ttl An alias for item_ttl
     * @param int $itemTtl How long, in seconds, before the Map Item expires
     * @param int $collectionTtl How long, in seconds, before the Map Item's parent
     *                           Sync Map expires and is deleted
     */
    public function __construct(int $ttl = Values::NONE, int $itemTtl = Values::NONE, int $collectionTtl = Values::NONE) {
        $this->options['ttl'] = $ttl;
        $this->options['itemTtl'] = $itemTtl;
        $this->options['collectionTtl'] = $collectionTtl;
    }

    /**
     * An alias for `item_ttl`. If both parameters are provided, this value is ignored.
     *
     * @param int $ttl An alias for item_ttl
     * @return $this Fluent Builder
     */
    public function setTtl(int $ttl): self {
        $this->options['ttl'] = $ttl;
        return $this;
    }

    /**
     * How long, [in seconds](https://www.twilio.com/docs/sync/limits#sync-payload-limits), before the Map Item expires (time-to-live) and is deleted.
     *
     * @param int $itemTtl How long, in seconds, before the Map Item expires
     * @return $this Fluent Builder
     */
    public function setItemTtl(int $itemTtl): self {
        $this->options['itemTtl'] = $itemTtl;
        return $this;
    }

    /**
     * How long, [in seconds](https://www.twilio.com/docs/sync/limits#sync-payload-limits), before the Map Item's parent Sync Map expires (time-to-live) and is deleted.
     *
     * @param int $collectionTtl How long, in seconds, before the Map Item's parent
     *                           Sync Map expires and is deleted
     * @return $this Fluent Builder
     */
    public function setCollectionTtl(int $collectionTtl): self {
        $this->options['collectionTtl'] = $collectionTtl;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Sync.V1.CreateSyncMapItemOptions ' . $options . ']';
    }
}

class ReadSyncMapItemOptions extends Options {
    /**
     * @param string $order How to order the Map Items returned by their key value
     * @param string $from The index of the first Sync Map Item resource to read
     * @param string $bounds Whether to include the Map Item referenced by the from
     *                       parameter
     */
    public function __construct(string $order = Values::NONE, string $from = Values::NONE, string $bounds = Values::NONE) {
        $this->options['order'] = $order;
        $this->options['from'] = $from;
        $this->options['bounds'] = $bounds;
    }

    /**
     * How to order the Map Items returned by their `key` value. Can be: `asc` (ascending) or `desc` (descending) and the default is ascending. Map Items are [ordered lexicographically](https://en.wikipedia.org/wiki/Lexicographical_order) by Item key.
     *
     * @param string $order How to order the Map Items returned by their key value
     * @return $this Fluent Builder
     */
    public function setOrder(string $order): self {
        $this->options['order'] = $order;
        return $this;
    }

    /**
     * The `key` of the first Sync Map Item resource to read. See also `bounds`.
     *
     * @param string $from The index of the first Sync Map Item resource to read
     * @return $this Fluent Builder
     */
    public function setFrom(string $from): self {
        $this->options['from'] = $from;
        return $this;
    }

    /**
     * Whether to include the Map Item referenced by the `from` parameter. Can be: `inclusive` to include the Map Item referenced by the `from` parameter or `exclusive` to start with the next Map Item. The default value is `inclusive`.
     *
     * @param string $bounds Whether to include the Map Item referenced by the from
     *                       parameter
     * @return $this Fluent Builder
     */
    public function setBounds(string $bounds): self {
        $this->options['bounds'] = $bounds;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Sync.V1.ReadSyncMapItemOptions ' . $options . ']';
    }
}

class UpdateSyncMapItemOptions extends Options {
    /**
     * @param array $data A JSON string that represents an arbitrary, schema-less
     *                    object that the Map Item stores
     * @param int $ttl An alias for item_ttl
     * @param int $itemTtl How long, in seconds, before the Map Item expires
     * @param int $collectionTtl How long, in seconds, before the Map Item's parent
     *                           Sync Map expires and is deleted
     * @param string $ifMatch The If-Match HTTP request header
     */
    public function __construct(array $data = Values::ARRAY_NONE, int $ttl = Values::NONE, int $itemTtl = Values::NONE, int $collectionTtl = Values::NONE, string $ifMatch = Values::NONE) {
        $this->options['data'] = $data;
        $this->options['ttl'] = $ttl;
        $this->options['itemTtl'] = $itemTtl;
        $this->options['collectionTtl'] = $collectionTtl;
        $this->options['ifMatch'] = $ifMatch;
    }

    /**
     * A JSON string that represents an arbitrary, schema-less object that the Map Item stores. Can be up to 16 KiB in length.
     *
     * @param array $data A JSON string that represents an arbitrary, schema-less
     *                    object that the Map Item stores
     * @return $this Fluent Builder
     */
    public function setData(array $data): self {
        $this->options['data'] = $data;
        return $this;
    }

    /**
     * An alias for `item_ttl`. If both parameters are provided, this value is ignored.
     *
     * @param int $ttl An alias for item_ttl
     * @return $this Fluent Builder
     */
    public function setTtl(int $ttl): self {
        $this->options['ttl'] = $ttl;
        return $this;
    }

    /**
     * How long, [in seconds](https://www.twilio.com/docs/sync/limits#sync-payload-limits), before the Map Item expires (time-to-live) and is deleted.
     *
     * @param int $itemTtl How long, in seconds, before the Map Item expires
     * @return $this Fluent Builder
     */
    public function setItemTtl(int $itemTtl): self {
        $this->options['itemTtl'] = $itemTtl;
        return $this;
    }

    /**
     * How long, [in seconds](https://www.twilio.com/docs/sync/limits#sync-payload-limits), before the Map Item's parent Sync Map expires (time-to-live) and is deleted. This parameter can only be used when the Map Item's `data` or `ttl` is updated in the same request.
     *
     * @param int $collectionTtl How long, in seconds, before the Map Item's parent
     *                           Sync Map expires and is deleted
     * @return $this Fluent Builder
     */
    public function setCollectionTtl(int $collectionTtl): self {
        $this->options['collectionTtl'] = $collectionTtl;
        return $this;
    }

    /**
     * If provided, applies this mutation if (and only if) the “revision” field of this [map item] matches the provided value. This matches the semantics of (and is implemented with) the HTTP [If-Match header](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/If-Match).
     *
     * @param string $ifMatch The If-Match HTTP request header
     * @return $this Fluent Builder
     */
    public function setIfMatch(string $ifMatch): self {
        $this->options['ifMatch'] = $ifMatch;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Sync.V1.UpdateSyncMapItemOptions ' . $options . ']';
    }
}