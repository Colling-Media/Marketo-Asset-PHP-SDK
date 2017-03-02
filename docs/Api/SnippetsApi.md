# Swagger\Client\SnippetsApi

All URIs are relative to *https://052-SXI-468.mktorest.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveSnippetUsingPOST**](SnippetsApi.md#approveSnippetUsingPOST) | **POST** /rest/asset/v1/snippet/{id}/approveDraft.json | Approve Snippet Draft
[**cloneSnippetUsingPOST**](SnippetsApi.md#cloneSnippetUsingPOST) | **POST** /rest/asset/v1/snippet/{id}/clone.json | Clone Snippet
[**createSnippetUsingPOST**](SnippetsApi.md#createSnippetUsingPOST) | **POST** /rest/asset/v1/snippets.json | Create Snippet
[**deleteSnippetUsingPOST**](SnippetsApi.md#deleteSnippetUsingPOST) | **POST** /rest/asset/v1/snippet/{id}/delete.json | Delete Snippet
[**discardSnippetUsingPOST**](SnippetsApi.md#discardSnippetUsingPOST) | **POST** /rest/asset/v1/snippet/{id}/discardDraft.json | Discard Snippet Draft
[**getDynamicContentUsingGET**](SnippetsApi.md#getDynamicContentUsingGET) | **GET** /rest/asset/v1/snippet/{id}/dynamicContent.json | Get Dynamic Content
[**getSnippetByIdUsingGET**](SnippetsApi.md#getSnippetByIdUsingGET) | **GET** /rest/asset/v1/snippet/{id}.json | Get Snippet by Id
[**getSnippetContentByIdUsingGET**](SnippetsApi.md#getSnippetContentByIdUsingGET) | **GET** /rest/asset/v1/snippet/{id}/content.json | Get Snippet Content
[**getSnippetUsingGET**](SnippetsApi.md#getSnippetUsingGET) | **GET** /rest/asset/v1/snippets.json | Get Snippets
[**unapproveSnippetUsingPOST**](SnippetsApi.md#unapproveSnippetUsingPOST) | **POST** /rest/asset/v1/snippet/{id}/unapprove.json | Unapprove Snippet
[**updateContentUsingPOST1**](SnippetsApi.md#updateContentUsingPOST1) | **POST** /rest/asset/v1/snippet/{id}/content.json | Update Snippet Content
[**updateDynamicContentUsingPOST**](SnippetsApi.md#updateDynamicContentUsingPOST) | **POST** /rest/asset/v1/snippet/{id}/dynamicContent/{segmentId}.json | Update Snippet Dynamic Content
[**updateSnippetUsingPOST**](SnippetsApi.md#updateSnippetUsingPOST) | **POST** /rest/asset/v1/snippet/{id}.json | Update Snippet Metadata


# **approveSnippetUsingPOST**
> \CollingMedia\Client\Model\ResponseOfSnippetResponse approveSnippetUsingPOST($id)

Approve Snippet Draft

Approves the current draft of the snippet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SnippetsApi();
$id = 56; // int | id

try {
    $result = $api_instance->approveSnippetUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->approveSnippetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\CollingMedia\Client\Model\ResponseOfSnippetResponse**](../Model/ResponseOfSnippetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloneSnippetUsingPOST**
> \CollingMedia\Client\Model\ResponseOfSnippetResponse cloneSnippetUsingPOST($id, $clone_snippet_request)

Clone Snippet

Clones the target snippet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SnippetsApi();
$id = 56; // int | id
$clone_snippet_request = new \CollingMedia\Client\Model\CloneSnippetRequest(); // \CollingMedia\Client\Model\CloneSnippetRequest | cloneSnippetRequest

try {
    $result = $api_instance->cloneSnippetUsingPOST($id, $clone_snippet_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->cloneSnippetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **clone_snippet_request** | [**\CollingMedia\Client\Model\CloneSnippetRequest**](../Model/\CollingMedia\Client\Model\CloneSnippetRequest.md)| cloneSnippetRequest | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfSnippetResponse**](../Model/ResponseOfSnippetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSnippetUsingPOST**
> \CollingMedia\Client\Model\ResponseOfSnippetResponse createSnippetUsingPOST($create_snippet_request)

Create Snippet

Creates a new snippet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SnippetsApi();
$create_snippet_request = new \CollingMedia\Client\Model\CreateSnippetRequest(); // \CollingMedia\Client\Model\CreateSnippetRequest | createSnippetRequest

try {
    $result = $api_instance->createSnippetUsingPOST($create_snippet_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->createSnippetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_snippet_request** | [**\CollingMedia\Client\Model\CreateSnippetRequest**](../Model/\CollingMedia\Client\Model\CreateSnippetRequest.md)| createSnippetRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfSnippetResponse**](../Model/ResponseOfSnippetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSnippetUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse deleteSnippetUsingPOST($id)

Delete Snippet

Deletes the target snippet.  The snippet may not be in use by emails or landing pages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SnippetsApi();
$id = 56; // int | id

try {
    $result = $api_instance->deleteSnippetUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->deleteSnippetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\CollingMedia\Client\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discardSnippetUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse discardSnippetUsingPOST($id)

Discard Snippet Draft

Discards the current draft of the snippet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SnippetsApi();
$id = 56; // int | id

try {
    $result = $api_instance->discardSnippetUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->discardSnippetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\CollingMedia\Client\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDynamicContentUsingGET**
> \CollingMedia\Client\Model\ModelResponse getDynamicContentUsingGET($id, $status)

Get Dynamic Content

Gets the list of dynamic content sections for the snippet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SnippetsApi();
$id = 56; // int | id
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $api_instance->getDynamicContentUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->getDynamicContentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\CollingMedia\Client\Model\ModelResponse**](../Model/ModelResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSnippetByIdUsingGET**
> \CollingMedia\Client\Model\ResponseOfSnippetResponse getSnippetByIdUsingGET($id, $status)

Get Snippet by Id

Retrieves the target snippet record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SnippetsApi();
$id = 56; // int | id
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $api_instance->getSnippetByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->getSnippetByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfSnippetResponse**](../Model/ResponseOfSnippetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSnippetContentByIdUsingGET**
> \CollingMedia\Client\Model\ResponseOfSnippetContentResponse getSnippetContentByIdUsingGET($id, $status)

Get Snippet Content

Retrieves the content of the target snippet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SnippetsApi();
$id = 56; // int | id
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $api_instance->getSnippetContentByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->getSnippetContentByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfSnippetContentResponse**](../Model/ResponseOfSnippetContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSnippetUsingGET**
> \CollingMedia\Client\Model\ResponseOfSnippetResponse getSnippetUsingGET($status, $max_return, $offset)

Get Snippets

Retrieves a list of accessible snippets from the target instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SnippetsApi();
$status = "status_example"; // string | Status filter for draft or approved versions
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging

try {
    $result = $api_instance->getSnippetUsingGET($status, $max_return, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->getSnippetUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Status filter for draft or approved versions | [optional]
 **max_return** | **int**| Maximum number of channels to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfSnippetResponse**](../Model/ResponseOfSnippetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unapproveSnippetUsingPOST**
> \CollingMedia\Client\Model\ResponseOfSnippetResponse unapproveSnippetUsingPOST($id)

Unapprove Snippet

Unapproves the current version of the snippet.  The snippet may not be in use.  The snippet will be reverted to a draft-only state

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SnippetsApi();
$id = 56; // int | id

try {
    $result = $api_instance->unapproveSnippetUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->unapproveSnippetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\CollingMedia\Client\Model\ResponseOfSnippetResponse**](../Model/ResponseOfSnippetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContentUsingPOST1**
> \CollingMedia\Client\Model\ResponseOfIdResponse updateContentUsingPOST1($id, $request)

Update Snippet Content

Updates the content of the target snippet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SnippetsApi();
$id = 56; // int | id
$request = new \CollingMedia\Client\Model\UpdateSnippetContentRequest(); // \CollingMedia\Client\Model\UpdateSnippetContentRequest | request

try {
    $result = $api_instance->updateContentUsingPOST1($id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->updateContentUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **request** | [**\CollingMedia\Client\Model\UpdateSnippetContentRequest**](../Model/\CollingMedia\Client\Model\UpdateSnippetContentRequest.md)| request |

### Return type

[**\CollingMedia\Client\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDynamicContentUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse updateDynamicContentUsingPOST($id, $segment_id, $request)

Update Snippet Dynamic Content

Updates the target dynamic content section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SnippetsApi();
$id = 56; // int | id
$segment_id = 56; // int | segmentId
$request = new \CollingMedia\Client\Model\UpdateSnippetDynamicContentRequest(); // \CollingMedia\Client\Model\UpdateSnippetDynamicContentRequest | request

try {
    $result = $api_instance->updateDynamicContentUsingPOST($id, $segment_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->updateDynamicContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **segment_id** | **int**| segmentId |
 **request** | [**\CollingMedia\Client\Model\UpdateSnippetDynamicContentRequest**](../Model/\CollingMedia\Client\Model\UpdateSnippetDynamicContentRequest.md)| request |

### Return type

[**\CollingMedia\Client\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSnippetUsingPOST**
> \CollingMedia\Client\Model\ResponseOfSnippetResponse updateSnippetUsingPOST($id, $update_snippet_request)

Update Snippet Metadata

Updates the metadata of the snippet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SnippetsApi();
$id = 56; // int | id
$update_snippet_request = new \CollingMedia\Client\Model\UpdateSnippetRequest(); // \CollingMedia\Client\Model\UpdateSnippetRequest | updateSnippetRequest

try {
    $result = $api_instance->updateSnippetUsingPOST($id, $update_snippet_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->updateSnippetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **update_snippet_request** | [**\CollingMedia\Client\Model\UpdateSnippetRequest**](../Model/\CollingMedia\Client\Model\UpdateSnippetRequest.md)| updateSnippetRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfSnippetResponse**](../Model/ResponseOfSnippetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

