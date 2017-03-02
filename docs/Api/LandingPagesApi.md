# CollingMedia\Client\LandingPagesApi

All URIs are relative to *https://052-SXI-468.mktorest.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveLandingPageUsingPOST**](LandingPagesApi.md#approveLandingPageUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/approveDraft.json | Approve Landing Page Draft
[**browseLandingPagesUsingGET**](LandingPagesApi.md#browseLandingPagesUsingGET) | **GET** /rest/asset/v1/landingPages.json | Get Landing Pages
[**cloneLandingPageUsingPOST**](LandingPagesApi.md#cloneLandingPageUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/clone.json | Clone Landing Page
[**createLandingPageUsingPOST**](LandingPagesApi.md#createLandingPageUsingPOST) | **POST** /rest/asset/v1/landingPages.json | Create Landing Page
[**deleteLandingPageByIdUsingPOST**](LandingPagesApi.md#deleteLandingPageByIdUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/delete.json | Delete Landing Page
[**discardLandingPageByIdUsingPOST**](LandingPagesApi.md#discardLandingPageByIdUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/discardDraft.json | Discard Landing Page Draft
[**getLandingPageByIdUsingGET**](LandingPagesApi.md#getLandingPageByIdUsingGET) | **GET** /rest/asset/v1/landingPage/{id}.json | Get Landing Page by Id
[**getLandingPageByNameUsingGET**](LandingPagesApi.md#getLandingPageByNameUsingGET) | **GET** /rest/asset/v1/landingPage/byName.json | Get Landing Page by Name
[**getVariablesUsingGET**](LandingPagesApi.md#getVariablesUsingGET) | **GET** /rest/asset/v1/landingPage/{id}/variables.json | getVariables
[**unapproveLandingPageByIdUsingPOST**](LandingPagesApi.md#unapproveLandingPageByIdUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/unapprove.json | Unapprove Landing Page
[**updateLandingPageUsingPOST**](LandingPagesApi.md#updateLandingPageUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}.json | Update Landing Page Metadata
[**updateLandingPageVariableUsingPOST**](LandingPagesApi.md#updateLandingPageVariableUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/variable/{variableId}.json | updateLandingPageVariable


# **approveLandingPageUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse approveLandingPageUsingPOST($id)

Approve Landing Page Draft

Approves the current draft of the landing page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\LandingPagesApi();
$id = 56; // int | id

try {
    $result = $api_instance->approveLandingPageUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->approveLandingPageUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **browseLandingPagesUsingGET**
> \CollingMedia\Client\Model\ResponseOfLandingPageResponse browseLandingPagesUsingGET($name, $status, $folder)

Get Landing Pages

Retrieves a list of accessible landing pages from the target instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\LandingPagesApi();
$name = "name_example"; // string | Name of the landing page
$status = "status_example"; // string | Status filter for draft or approved versions
$folder = "folder_example"; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'

try {
    $result = $api_instance->browseLandingPagesUsingGET($name, $status, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->browseLandingPagesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the landing page |
 **status** | **string**| Status filter for draft or approved versions | [optional]
 **folder** | **string**| JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfLandingPageResponse**](../Model/ResponseOfLandingPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloneLandingPageUsingPOST**
> \CollingMedia\Client\Model\ResponseOfLandingPageResponse cloneLandingPageUsingPOST($id, $clone_landing_page_request)

Clone Landing Page

Clones the target landing page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\LandingPagesApi();
$id = 56; // int | id
$clone_landing_page_request = new \CollingMedia\Client\Model\CloneLandingPageRequest(); // \CollingMedia\Client\Model\CloneLandingPageRequest | cloneLandingPageRequest

try {
    $result = $api_instance->cloneLandingPageUsingPOST($id, $clone_landing_page_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->cloneLandingPageUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **clone_landing_page_request** | [**\CollingMedia\Client\Model\CloneLandingPageRequest**](../Model/\CollingMedia\Client\Model\CloneLandingPageRequest.md)| cloneLandingPageRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfLandingPageResponse**](../Model/ResponseOfLandingPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLandingPageUsingPOST**
> \CollingMedia\Client\Model\ResponseOfLandingPageResponse createLandingPageUsingPOST($create_landing_page_request)

Create Landing Page

Creates a new landing page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\LandingPagesApi();
$create_landing_page_request = new \CollingMedia\Client\Model\CreateLandingPageRequest(); // \CollingMedia\Client\Model\CreateLandingPageRequest | createLandingPageRequest

try {
    $result = $api_instance->createLandingPageUsingPOST($create_landing_page_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->createLandingPageUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_landing_page_request** | [**\CollingMedia\Client\Model\CreateLandingPageRequest**](../Model/\CollingMedia\Client\Model\CreateLandingPageRequest.md)| createLandingPageRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfLandingPageResponse**](../Model/ResponseOfLandingPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLandingPageByIdUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse deleteLandingPageByIdUsingPOST($id)

Delete Landing Page

Deletes the target landing page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\LandingPagesApi();
$id = 56; // int | id

try {
    $result = $api_instance->deleteLandingPageByIdUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->deleteLandingPageByIdUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **discardLandingPageByIdUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse discardLandingPageByIdUsingPOST($id)

Discard Landing Page Draft

Discards the current draft of the landing page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\LandingPagesApi();
$id = 56; // int | id

try {
    $result = $api_instance->discardLandingPageByIdUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->discardLandingPageByIdUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **getLandingPageByIdUsingGET**
> \CollingMedia\Client\Model\ResponseOfLandingPageResponse getLandingPageByIdUsingGET($id, $status)

Get Landing Page by Id

Returns the landning record for the given id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\LandingPagesApi();
$id = 56; // int | id
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $api_instance->getLandingPageByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->getLandingPageByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfLandingPageResponse**](../Model/ResponseOfLandingPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLandingPageByNameUsingGET**
> \CollingMedia\Client\Model\ResponseOfLandingPageResponse getLandingPageByNameUsingGET($name, $status, $max_return, $offset)

Get Landing Page by Name

Returns the landing page record for the given name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\LandingPagesApi();
$name = "name_example"; // string | Name of the landing page
$status = "status_example"; // string | Status filter for draft or approved versions
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging

try {
    $result = $api_instance->getLandingPageByNameUsingGET($name, $status, $max_return, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->getLandingPageByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the landing page |
 **status** | **string**| Status filter for draft or approved versions | [optional]
 **max_return** | **int**| Maximum number of channels to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfLandingPageResponse**](../Model/ResponseOfLandingPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVariablesUsingGET**
> \CollingMedia\Client\Model\ResponseOfLandingPageVariableResponse getVariablesUsingGET($id, $status)

getVariables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\LandingPagesApi();
$id = 56; // int | id
$status = new \CollingMedia\Client\Model\LpStatusRequest(); // \CollingMedia\Client\Model\LpStatusRequest | status

try {
    $result = $api_instance->getVariablesUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->getVariablesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | [**\CollingMedia\Client\Model\LpStatusRequest**](../Model/\CollingMedia\Client\Model\LpStatusRequest.md)| status | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfLandingPageVariableResponse**](../Model/ResponseOfLandingPageVariableResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unapproveLandingPageByIdUsingPOST**
> \CollingMedia\Client\Model\ResponseOfLandingPageResponse unapproveLandingPageByIdUsingPOST($id)

Unapprove Landing Page

Unapproves the landing page, reverting it to a draft-only state

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\LandingPagesApi();
$id = 56; // int | id

try {
    $result = $api_instance->unapproveLandingPageByIdUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->unapproveLandingPageByIdUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\CollingMedia\Client\Model\ResponseOfLandingPageResponse**](../Model/ResponseOfLandingPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLandingPageUsingPOST**
> \CollingMedia\Client\Model\ResponseOfLandingPageResponse updateLandingPageUsingPOST($id, $update_landing_page_request)

Update Landing Page Metadata

Updates the metadata for the targe landing page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\LandingPagesApi();
$id = 56; // int | id
$update_landing_page_request = new \CollingMedia\Client\Model\UpdateLandingPageRequest(); // \CollingMedia\Client\Model\UpdateLandingPageRequest | updateLandingPageRequest

try {
    $result = $api_instance->updateLandingPageUsingPOST($id, $update_landing_page_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->updateLandingPageUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **update_landing_page_request** | [**\CollingMedia\Client\Model\UpdateLandingPageRequest**](../Model/\CollingMedia\Client\Model\UpdateLandingPageRequest.md)| updateLandingPageRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfLandingPageResponse**](../Model/ResponseOfLandingPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLandingPageVariableUsingPOST**
> \CollingMedia\Client\Model\ResponseOfLandingPageVariableResponse updateLandingPageVariableUsingPOST($id, $variable_id, $value)

updateLandingPageVariable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\LandingPagesApi();
$id = 56; // int | id
$variable_id = "variable_id_example"; // string | variableId
$value = 56; // int | New value of the variable

try {
    $result = $api_instance->updateLandingPageVariableUsingPOST($id, $variable_id, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->updateLandingPageVariableUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **variable_id** | **string**| variableId |
 **value** | **int**| New value of the variable |

### Return type

[**\CollingMedia\Client\Model\ResponseOfLandingPageVariableResponse**](../Model/ResponseOfLandingPageVariableResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

