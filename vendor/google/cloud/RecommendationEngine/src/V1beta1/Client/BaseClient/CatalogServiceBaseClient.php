<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/recommendationengine/v1beta1/catalog_service.proto
 * Updates to the above are reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\RecommendationEngine\V1beta1\Client\BaseClient;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\RecommendationEngine\V1beta1\CatalogItem;
use Google\Cloud\RecommendationEngine\V1beta1\CreateCatalogItemRequest;
use Google\Cloud\RecommendationEngine\V1beta1\DeleteCatalogItemRequest;
use Google\Cloud\RecommendationEngine\V1beta1\GetCatalogItemRequest;
use Google\Cloud\RecommendationEngine\V1beta1\ImportCatalogItemsRequest;
use Google\Cloud\RecommendationEngine\V1beta1\ListCatalogItemsRequest;
use Google\Cloud\RecommendationEngine\V1beta1\UpdateCatalogItemRequest;
use Google\LongRunning\Operation;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service for ingesting catalog information of the customer's website.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This class is currently experimental and may be subject to changes.
 *
 * @experimental
 *
 * @internal
 *
 * @method PromiseInterface createCatalogItemAsync(CreateCatalogItemRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteCatalogItemAsync(DeleteCatalogItemRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getCatalogItemAsync(GetCatalogItemRequest $request, array $optionalArgs = [])
 * @method PromiseInterface importCatalogItemsAsync(ImportCatalogItemsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listCatalogItemsAsync(ListCatalogItemsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateCatalogItemAsync(UpdateCatalogItemRequest $request, array $optionalArgs = [])
 */
abstract class CatalogServiceBaseClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.recommendationengine.v1beta1.CatalogService';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'recommendationengine.googleapis.com';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../../resources/catalog_service_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../../resources/catalog_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../../resources/catalog_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../../resources/catalog_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     *
     * @experimental
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started by a long
     * running API method. If $methodName is not provided, or does not match a long
     * running API method, then the operation can still be resumed, but the
     * OperationResponse object will not deserialize the final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     *
     * @experimental
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning']) ? $this->descriptors[$methodName]['longRunning'] : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();
        return $operation;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a catalog
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $catalog
     *
     * @return string The formatted catalog resource.
     *
     * @experimental
     */
    public static function catalogName(string $project, string $location, string $catalog): string
    {
        return self::getPathTemplate('catalog')->render([
            'project' => $project,
            'location' => $location,
            'catalog' => $catalog,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * catalog_item_path resource.
     *
     * @param string $project
     * @param string $location
     * @param string $catalog
     * @param string $catalogItemPath
     *
     * @return string The formatted catalog_item_path resource.
     *
     * @experimental
     */
    public static function catalogItemPathName(string $project, string $location, string $catalog, string $catalogItemPath): string
    {
        return self::getPathTemplate('catalogItemPath')->render([
            'project' => $project,
            'location' => $location,
            'catalog' => $catalog,
            'catalog_item_path' => $catalogItemPath,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - catalog: projects/{project}/locations/{location}/catalogs/{catalog}
     * - catalogItemPath: projects/{project}/locations/{location}/catalogs/{catalog}/catalogItems/{catalog_item_path}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     *
     * @experimental
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'recommendationengine.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     *
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Creates a catalog item.
     *
     * The async variant is {@see self::createCatalogItemAsync()} .
     *
     * @param CreateCatalogItemRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return CatalogItem
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function createCatalogItem(CreateCatalogItemRequest $request, array $callOptions = []): CatalogItem
    {
        return $this->startApiCall('CreateCatalogItem', $request, $callOptions)->wait();
    }

    /**
     * Deletes a catalog item.
     *
     * The async variant is {@see self::deleteCatalogItemAsync()} .
     *
     * @param DeleteCatalogItemRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function deleteCatalogItem(DeleteCatalogItemRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteCatalogItem', $request, $callOptions)->wait();
    }

    /**
     * Gets a specific catalog item.
     *
     * The async variant is {@see self::getCatalogItemAsync()} .
     *
     * @param GetCatalogItemRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return CatalogItem
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function getCatalogItem(GetCatalogItemRequest $request, array $callOptions = []): CatalogItem
    {
        return $this->startApiCall('GetCatalogItem', $request, $callOptions)->wait();
    }

    /**
     * Bulk import of multiple catalog items. Request processing may be
     * synchronous. No partial updating supported. Non-existing items will be
     * created.
     *
     * Operation.response is of type ImportResponse. Note that it is
     * possible for a subset of the items to be successfully updated.
     *
     * The async variant is {@see self::importCatalogItemsAsync()} .
     *
     * @param ImportCatalogItemsRequest $request     A request to house fields associated with the call.
     * @param array                     $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return OperationResponse
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function importCatalogItems(ImportCatalogItemsRequest $request, array $callOptions = []): OperationResponse
    {
        return $this->startApiCall('ImportCatalogItems', $request, $callOptions)->wait();
    }

    /**
     * Gets a list of catalog items.
     *
     * The async variant is {@see self::listCatalogItemsAsync()} .
     *
     * @param ListCatalogItemsRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function listCatalogItems(ListCatalogItemsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListCatalogItems', $request, $callOptions);
    }

    /**
     * Updates a catalog item. Partial updating is supported. Non-existing
     * items will be created.
     *
     * The async variant is {@see self::updateCatalogItemAsync()} .
     *
     * @param UpdateCatalogItemRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return CatalogItem
     *
     * @throws ApiException Thrown if the API call fails.
     *
     * @experimental
     */
    public function updateCatalogItem(UpdateCatalogItemRequest $request, array $callOptions = []): CatalogItem
    {
        return $this->startApiCall('UpdateCatalogItem', $request, $callOptions)->wait();
    }
}
