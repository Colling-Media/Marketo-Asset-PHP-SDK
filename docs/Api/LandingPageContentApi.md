# Swagger\Client\LandingPageContentApi

All URIs are relative to *https://052-SXI-468.mktorest.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLandingPageContentUsingPOST**](LandingPageContentApi.md#addLandingPageContentUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/content.json | Add Landing Page Content Section
[**getLandingPageContentUsingGET**](LandingPageContentApi.md#getLandingPageContentUsingGET) | **GET** /rest/asset/v1/landingPage/{id}/content.json | Get Landing Page Content
[**getLandingPageDynamicContentsUsingGET**](LandingPageContentApi.md#getLandingPageDynamicContentsUsingGET) | **GET** /rest/asset/v1/landingPage/{id}/dynamicContent/{content_id}.json | Get Landing Page Dynamic Content
[**removeLandingPageContentUsingPOST**](LandingPageContentApi.md#removeLandingPageContentUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/content/{contentId}/delete.json | Delete Landing Page Content Section
[**updateLandingPageContentUsingPOST**](LandingPageContentApi.md#updateLandingPageContentUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/content/{contentId}.json | Update Landing Page Content Section
[**updateLandingPageDynamicContentUsingPOST**](LandingPageContentApi.md#updateLandingPageDynamicContentUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/dynamicContent/{dynamicContentId}.json | Update Landing Page Dynamic Content Section


# **addLandingPageContentUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse addLandingPageContentUsingPOST($id, $request)

Add Landing Page Content Section

Adds a content section to the target landing page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LandingPageContentApi();
$id = 56; // int | id
$request = new \CollingMedia\Client\Model\CreateLandingPageContentRequest(); // \CollingMedia\Client\Model\CreateLandingPageContentRequest | request

try {
    $result = $api_instance->addLandingPageContentUsingPOST($id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageContentApi->addLandingPageContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **request** | [**\CollingMedia\Client\Model\CreateLandingPageContentRequest**](../Model/\CollingMedia\Client\Model\CreateLandingPageContentRequest.md)| request |

### Return type

[**\CollingMedia\Client\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLandingPageContentUsingGET**
> \CollingMedia\Client\Model\ResponseOfLandingPageContentResponse getLandingPageContentUsingGET($id, $status)

Get Landing Page Content

Retrieves the list of content sections in the target landing page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LandingPageContentApi();
$id = 56; // int | id
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $api_instance->getLandingPageContentUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageContentApi->getLandingPageContentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfLandingPageContentResponse**](../Model/ResponseOfLandingPageContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLandingPageDynamicContentsUsingGET**
> \CollingMedia\Client\Model\ResponseOfLPDynamicContentResponse getLandingPageDynamicContentsUsingGET($id, $content_id)

Get Landing Page Dynamic Content

Retrieves the dynamic content from the target section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LandingPageContentApi();
$id = 56; // int | id
$content_id = "content_id_example"; // string | Id of the dnamic content section

try {
    $result = $api_instance->getLandingPageDynamicContentsUsingGET($id, $content_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageContentApi->getLandingPageDynamicContentsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **content_id** | **string**| Id of the dnamic content section |

### Return type

[**\CollingMedia\Client\Model\ResponseOfLPDynamicContentResponse**](../Model/ResponseOfLPDynamicContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeLandingPageContentUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse removeLandingPageContentUsingPOST($id, $content_id)

Delete Landing Page Content Section

Removes the target content section from the parent landing page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LandingPageContentApi();
$id = 56; // int | id
$content_id = "content_id_example"; // string | contentId

try {
    $result = $api_instance->removeLandingPageContentUsingPOST($id, $content_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageContentApi->removeLandingPageContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **content_id** | **string**| contentId |

### Return type

[**\CollingMedia\Client\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLandingPageContentUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse updateLandingPageContentUsingPOST($id, $content_id, $request)

Update Landing Page Content Section

Updates a content section the landing page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LandingPageContentApi();
$id = 56; // int | id
$content_id = "content_id_example"; // string | contentId
$request = new \CollingMedia\Client\Model\UpdateLandingPageContentRequest(); // \CollingMedia\Client\Model\UpdateLandingPageContentRequest | request

try {
    $result = $api_instance->updateLandingPageContentUsingPOST($id, $content_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageContentApi->updateLandingPageContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **content_id** | **string**| contentId |
 **request** | [**\CollingMedia\Client\Model\UpdateLandingPageContentRequest**](../Model/\CollingMedia\Client\Model\UpdateLandingPageContentRequest.md)| request |

### Return type

[**\CollingMedia\Client\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLandingPageDynamicContentUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse updateLandingPageDynamicContentUsingPOST($id, $dynamic_content_id, $request)

Update Landing Page Dynamic Content Section

Updates the content of the target dynamic content section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LandingPageContentApi();
$id = 56; // int | id
$dynamic_content_id = "dynamic_content_id_example"; // string | dynamicContentId
$request = new \CollingMedia\Client\Model\UpdateLandingPageDynamicContentRequest(); // \CollingMedia\Client\Model\UpdateLandingPageDynamicContentRequest | request

try {
    $result = $api_instance->updateLandingPageDynamicContentUsingPOST($id, $dynamic_content_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageContentApi->updateLandingPageDynamicContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **dynamic_content_id** | **string**| dynamicContentId |
 **request** | [**\CollingMedia\Client\Model\UpdateLandingPageDynamicContentRequest**](../Model/\CollingMedia\Client\Model\UpdateLandingPageDynamicContentRequest.md)| request |

### Return type

[**\CollingMedia\Client\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

