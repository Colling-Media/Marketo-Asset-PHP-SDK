<?php
/**
 * LandingPageContentApi
 * PHP version 5
 *
 * @category Class
 * @package  CollingMedia\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketo Rest API
 *
 * Marketo Rest API
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CollingMedia\Client\Api;

use \CollingMedia\Client\ApiClient;
use \CollingMedia\Client\ApiException;
use \CollingMedia\Client\Configuration;
use \CollingMedia\Client\ObjectSerializer;

/**
 * LandingPageContentApi Class Doc Comment
 *
 * @category Class
 * @package  CollingMedia\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LandingPageContentApi
{
    /**
     * API Client
     *
     * @var \CollingMedia\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \CollingMedia\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\CollingMedia\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \CollingMedia\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \CollingMedia\Client\ApiClient $apiClient set the API client
     *
     * @return LandingPageContentApi
     */
    public function setApiClient(\CollingMedia\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addLandingPageContentUsingPOST
     *
     * Add Landing Page Content Section
     *
     * @param int $id id (required)
     * @param \CollingMedia\Client\Model\CreateLandingPageContentRequest $request request (required)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return \CollingMedia\Client\Model\ResponseOfIdResponse
     */
    public function addLandingPageContentUsingPOST($id, $request)
    {
        list($response) = $this->addLandingPageContentUsingPOSTWithHttpInfo($id, $request);
        return $response;
    }

    /**
     * Operation addLandingPageContentUsingPOSTWithHttpInfo
     *
     * Add Landing Page Content Section
     *
     * @param int $id id (required)
     * @param \CollingMedia\Client\Model\CreateLandingPageContentRequest $request request (required)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return array of \CollingMedia\Client\Model\ResponseOfIdResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function addLandingPageContentUsingPOSTWithHttpInfo($id, $request)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling addLandingPageContentUsingPOST');
        }
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling addLandingPageContentUsingPOST');
        }
        // parse inputs
        $resourcePath = "/rest/asset/v1/landingPage/{id}/content.json";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CollingMedia\Client\Model\ResponseOfIdResponse',
                '/rest/asset/v1/landingPage/{id}/content.json'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Client\Model\ResponseOfIdResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Client\Model\ResponseOfIdResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getLandingPageContentUsingGET
     *
     * Get Landing Page Content
     *
     * @param int $id id (required)
     * @param string $status Status filter for draft or approved versions (optional)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return \CollingMedia\Client\Model\ResponseOfLandingPageContentResponse
     */
    public function getLandingPageContentUsingGET($id, $status = null)
    {
        list($response) = $this->getLandingPageContentUsingGETWithHttpInfo($id, $status);
        return $response;
    }

    /**
     * Operation getLandingPageContentUsingGETWithHttpInfo
     *
     * Get Landing Page Content
     *
     * @param int $id id (required)
     * @param string $status Status filter for draft or approved versions (optional)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return array of \CollingMedia\Client\Model\ResponseOfLandingPageContentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLandingPageContentUsingGETWithHttpInfo($id, $status = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getLandingPageContentUsingGET');
        }
        // parse inputs
        $resourcePath = "/rest/asset/v1/landingPage/{id}/content.json";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CollingMedia\Client\Model\ResponseOfLandingPageContentResponse',
                '/rest/asset/v1/landingPage/{id}/content.json'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Client\Model\ResponseOfLandingPageContentResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Client\Model\ResponseOfLandingPageContentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getLandingPageDynamicContentsUsingGET
     *
     * Get Landing Page Dynamic Content
     *
     * @param int $id id (required)
     * @param string $content_id Id of the dnamic content section (required)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return \CollingMedia\Client\Model\ResponseOfLPDynamicContentResponse
     */
    public function getLandingPageDynamicContentsUsingGET($id, $content_id)
    {
        list($response) = $this->getLandingPageDynamicContentsUsingGETWithHttpInfo($id, $content_id);
        return $response;
    }

    /**
     * Operation getLandingPageDynamicContentsUsingGETWithHttpInfo
     *
     * Get Landing Page Dynamic Content
     *
     * @param int $id id (required)
     * @param string $content_id Id of the dnamic content section (required)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return array of \CollingMedia\Client\Model\ResponseOfLPDynamicContentResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLandingPageDynamicContentsUsingGETWithHttpInfo($id, $content_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getLandingPageDynamicContentsUsingGET');
        }
        // verify the required parameter 'content_id' is set
        if ($content_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $content_id when calling getLandingPageDynamicContentsUsingGET');
        }
        // parse inputs
        $resourcePath = "/rest/asset/v1/landingPage/{id}/dynamicContent/{content_id}.json";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($content_id !== null) {
            $resourcePath = str_replace(
                "{" . "content_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($content_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CollingMedia\Client\Model\ResponseOfLPDynamicContentResponse',
                '/rest/asset/v1/landingPage/{id}/dynamicContent/{content_id}.json'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Client\Model\ResponseOfLPDynamicContentResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Client\Model\ResponseOfLPDynamicContentResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation removeLandingPageContentUsingPOST
     *
     * Delete Landing Page Content Section
     *
     * @param int $id id (required)
     * @param string $content_id contentId (required)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return \CollingMedia\Client\Model\ResponseOfIdResponse
     */
    public function removeLandingPageContentUsingPOST($id, $content_id)
    {
        list($response) = $this->removeLandingPageContentUsingPOSTWithHttpInfo($id, $content_id);
        return $response;
    }

    /**
     * Operation removeLandingPageContentUsingPOSTWithHttpInfo
     *
     * Delete Landing Page Content Section
     *
     * @param int $id id (required)
     * @param string $content_id contentId (required)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return array of \CollingMedia\Client\Model\ResponseOfIdResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function removeLandingPageContentUsingPOSTWithHttpInfo($id, $content_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling removeLandingPageContentUsingPOST');
        }
        // verify the required parameter 'content_id' is set
        if ($content_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $content_id when calling removeLandingPageContentUsingPOST');
        }
        // parse inputs
        $resourcePath = "/rest/asset/v1/landingPage/{id}/content/{contentId}/delete.json";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($content_id !== null) {
            $resourcePath = str_replace(
                "{" . "contentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($content_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CollingMedia\Client\Model\ResponseOfIdResponse',
                '/rest/asset/v1/landingPage/{id}/content/{contentId}/delete.json'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Client\Model\ResponseOfIdResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Client\Model\ResponseOfIdResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateLandingPageContentUsingPOST
     *
     * Update Landing Page Content Section
     *
     * @param int $id id (required)
     * @param string $content_id contentId (required)
     * @param \CollingMedia\Client\Model\UpdateLandingPageContentRequest $request request (required)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return \CollingMedia\Client\Model\ResponseOfIdResponse
     */
    public function updateLandingPageContentUsingPOST($id, $content_id, $request)
    {
        list($response) = $this->updateLandingPageContentUsingPOSTWithHttpInfo($id, $content_id, $request);
        return $response;
    }

    /**
     * Operation updateLandingPageContentUsingPOSTWithHttpInfo
     *
     * Update Landing Page Content Section
     *
     * @param int $id id (required)
     * @param string $content_id contentId (required)
     * @param \CollingMedia\Client\Model\UpdateLandingPageContentRequest $request request (required)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return array of \CollingMedia\Client\Model\ResponseOfIdResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateLandingPageContentUsingPOSTWithHttpInfo($id, $content_id, $request)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling updateLandingPageContentUsingPOST');
        }
        // verify the required parameter 'content_id' is set
        if ($content_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $content_id when calling updateLandingPageContentUsingPOST');
        }
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling updateLandingPageContentUsingPOST');
        }
        // parse inputs
        $resourcePath = "/rest/asset/v1/landingPage/{id}/content/{contentId}.json";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($content_id !== null) {
            $resourcePath = str_replace(
                "{" . "contentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($content_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CollingMedia\Client\Model\ResponseOfIdResponse',
                '/rest/asset/v1/landingPage/{id}/content/{contentId}.json'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Client\Model\ResponseOfIdResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Client\Model\ResponseOfIdResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateLandingPageDynamicContentUsingPOST
     *
     * Update Landing Page Dynamic Content Section
     *
     * @param int $id id (required)
     * @param string $dynamic_content_id dynamicContentId (required)
     * @param \CollingMedia\Client\Model\UpdateLandingPageDynamicContentRequest $request request (required)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return \CollingMedia\Client\Model\ResponseOfIdResponse
     */
    public function updateLandingPageDynamicContentUsingPOST($id, $dynamic_content_id, $request)
    {
        list($response) = $this->updateLandingPageDynamicContentUsingPOSTWithHttpInfo($id, $dynamic_content_id, $request);
        return $response;
    }

    /**
     * Operation updateLandingPageDynamicContentUsingPOSTWithHttpInfo
     *
     * Update Landing Page Dynamic Content Section
     *
     * @param int $id id (required)
     * @param string $dynamic_content_id dynamicContentId (required)
     * @param \CollingMedia\Client\Model\UpdateLandingPageDynamicContentRequest $request request (required)
     * @throws \CollingMedia\Client\ApiException on non-2xx response
     * @return array of \CollingMedia\Client\Model\ResponseOfIdResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateLandingPageDynamicContentUsingPOSTWithHttpInfo($id, $dynamic_content_id, $request)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling updateLandingPageDynamicContentUsingPOST');
        }
        // verify the required parameter 'dynamic_content_id' is set
        if ($dynamic_content_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $dynamic_content_id when calling updateLandingPageDynamicContentUsingPOST');
        }
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling updateLandingPageDynamicContentUsingPOST');
        }
        // parse inputs
        $resourcePath = "/rest/asset/v1/landingPage/{id}/dynamicContent/{dynamicContentId}.json";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($dynamic_content_id !== null) {
            $resourcePath = str_replace(
                "{" . "dynamicContentId" . "}",
                $this->apiClient->getSerializer()->toPathValue($dynamic_content_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CollingMedia\Client\Model\ResponseOfIdResponse',
                '/rest/asset/v1/landingPage/{id}/dynamicContent/{dynamicContentId}.json'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Client\Model\ResponseOfIdResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Client\Model\ResponseOfIdResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
