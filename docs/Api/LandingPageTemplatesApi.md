# Swagger\Client\LandingPageTemplatesApi

All URIs are relative to *https://052-SXI-468.mktorest.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveLandingPageTemplateUsingPOST**](LandingPageTemplatesApi.md#approveLandingPageTemplateUsingPOST) | **POST** /rest/asset/v1/landingPageTemplate/{id}/approveDraft.json | Approve Landing Page Template Draft
[**cloneLpTemplateUsingPOST**](LandingPageTemplatesApi.md#cloneLpTemplateUsingPOST) | **POST** /rest/asset/v1/landingPageTemplate/{id}/clone.json | Clone Landing Page Template
[**createLpTemplateUsingPOST**](LandingPageTemplatesApi.md#createLpTemplateUsingPOST) | **POST** /rest/asset/v1/landingPageTemplates.json | Create Landing Page Template
[**deleteLpTemplateUsingPOST**](LandingPageTemplatesApi.md#deleteLpTemplateUsingPOST) | **POST** /rest/asset/v1/landingPageTemplate/{id}/delete.json | Delete Landing Page Template
[**discardDraftUsingPOST2**](LandingPageTemplatesApi.md#discardDraftUsingPOST2) | **POST** /rest/asset/v1/landingPageTemplate/{id}/discardDraft.json | Discard Landing Page Template Draft
[**getLandingPageTemplateByIdUsingGET**](LandingPageTemplatesApi.md#getLandingPageTemplateByIdUsingGET) | **GET** /rest/asset/v1/landingPageTemplate/{id}.json | Get Landing Page Template by Id
[**getLandingPageTemplateByNameUsingGET**](LandingPageTemplatesApi.md#getLandingPageTemplateByNameUsingGET) | **GET** /rest/asset/v1/landingPageTemplate/byName.json | Get Landing Page Template by Name
[**getLandingPageTemplateContentUsingGET**](LandingPageTemplatesApi.md#getLandingPageTemplateContentUsingGET) | **GET** /rest/asset/v1/landingPageTemplate/{id}/content.json | Get Landing Page Template Content
[**getLandingPageTemplatesUsingGET**](LandingPageTemplatesApi.md#getLandingPageTemplatesUsingGET) | **GET** /rest/asset/v1/landingPageTemplates.json | Get Landing Page Templates
[**unapproveLandingPageTemplateUsingPOST**](LandingPageTemplatesApi.md#unapproveLandingPageTemplateUsingPOST) | **POST** /rest/asset/v1/landingPageTemplate/{id}/unapprove.json | Unapprove Landing Page Template
[**updateLandingPageTemplateContentUsingPOST**](LandingPageTemplatesApi.md#updateLandingPageTemplateContentUsingPOST) | **POST** /rest/asset/v1/landingPageTemplate/{id}/content | Update Landing Page Template Content
[**updateLpTemplateUsingPOST**](LandingPageTemplatesApi.md#updateLpTemplateUsingPOST) | **POST** /rest/asset/v1/landingPageTemplate/{id}.json | Update Landing Page Template Metadata


# **approveLandingPageTemplateUsingPOST**
> \CollingMedia\Client\Model\ResponseOfLpTemplateResponse approveLandingPageTemplateUsingPOST($id)

Approve Landing Page Template Draft

Approves the current landing page template draft.  This will delete the current approved version of the template if there is one

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LandingPageTemplatesApi();
$id = 56; // int | id

try {
    $result = $api_instance->approveLandingPageTemplateUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->approveLandingPageTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpTemplateResponse**](../Model/ResponseOfLpTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloneLpTemplateUsingPOST**
> \CollingMedia\Client\Model\ResponseOfLpTemplateResponse cloneLpTemplateUsingPOST($id, $clone_lp_template_request)

Clone Landing Page Template

Clones the target landing page template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LandingPageTemplatesApi();
$id = 56; // int | id
$clone_lp_template_request = new \CollingMedia\Client\Model\CloneLpTemplateRequest(); // \CollingMedia\Client\Model\CloneLpTemplateRequest | cloneLpTemplateRequest

try {
    $result = $api_instance->cloneLpTemplateUsingPOST($id, $clone_lp_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->cloneLpTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **clone_lp_template_request** | [**\CollingMedia\Client\Model\CloneLpTemplateRequest**](../Model/\CollingMedia\Client\Model\CloneLpTemplateRequest.md)| cloneLpTemplateRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpTemplateResponse**](../Model/ResponseOfLpTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLpTemplateUsingPOST**
> \CollingMedia\Client\Model\ResponseOfLpTemplateResponse createLpTemplateUsingPOST($create_lp_template_request)

Create Landing Page Template

Creates a new landing page template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LandingPageTemplatesApi();
$create_lp_template_request = new \CollingMedia\Client\Model\CreateLpTemplateRequest(); // \CollingMedia\Client\Model\CreateLpTemplateRequest | createLpTemplateRequest

try {
    $result = $api_instance->createLpTemplateUsingPOST($create_lp_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->createLpTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_lp_template_request** | [**\CollingMedia\Client\Model\CreateLpTemplateRequest**](../Model/\CollingMedia\Client\Model\CreateLpTemplateRequest.md)| createLpTemplateRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpTemplateResponse**](../Model/ResponseOfLpTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLpTemplateUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse deleteLpTemplateUsingPOST($id)

Delete Landing Page Template

Deletes the target landing page template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LandingPageTemplatesApi();
$id = 56; // int | id

try {
    $result = $api_instance->deleteLpTemplateUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->deleteLpTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **discardDraftUsingPOST2**
> \CollingMedia\Client\Model\ResponseOfIdResponse discardDraftUsingPOST2($id)

Discard Landing Page Template Draft

Discrads the current draft of the landing page template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LandingPageTemplatesApi();
$id = 56; // int | id

try {
    $result = $api_instance->discardDraftUsingPOST2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->discardDraftUsingPOST2: ', $e->getMessage(), PHP_EOL;
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

# **getLandingPageTemplateByIdUsingGET**
> \CollingMedia\Client\Model\ResponseOfLpTemplateResponse getLandingPageTemplateByIdUsingGET($id, $status)

Get Landing Page Template by Id

Retrieves the record for the target landing page template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LandingPageTemplatesApi();
$id = 56; // int | id
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $api_instance->getLandingPageTemplateByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->getLandingPageTemplateByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpTemplateResponse**](../Model/ResponseOfLpTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLandingPageTemplateByNameUsingGET**
> \CollingMedia\Client\Model\ResponseOfLpTemplateResponse getLandingPageTemplateByNameUsingGET($name)

Get Landing Page Template by Name

Retrieves the landing page template record for the given name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LandingPageTemplatesApi();
$name = "name_example"; // string | Name of the landing page template

try {
    $result = $api_instance->getLandingPageTemplateByNameUsingGET($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->getLandingPageTemplateByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the landing page template |

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpTemplateResponse**](../Model/ResponseOfLpTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLandingPageTemplateContentUsingGET**
> \CollingMedia\Client\Model\ResponseOfLpTemplateGetContentResponse getLandingPageTemplateContentUsingGET($id, $status)

Get Landing Page Template Content

Retrieves the content of the target landing page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LandingPageTemplatesApi();
$id = 56; // int | id
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $api_instance->getLandingPageTemplateContentUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->getLandingPageTemplateContentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpTemplateGetContentResponse**](../Model/ResponseOfLpTemplateGetContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLandingPageTemplatesUsingGET**
> \CollingMedia\Client\Model\ResponseOfLpTemplateResponse getLandingPageTemplatesUsingGET($max_return, $offset, $status, $folder)

Get Landing Page Templates

Retrieves the list of accessible landing page templates from the target instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LandingPageTemplatesApi();
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging
$status = "status_example"; // string | Status filter for draft or approved versions
$folder = "folder_example"; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'

try {
    $result = $api_instance->getLandingPageTemplatesUsingGET($max_return, $offset, $status, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->getLandingPageTemplatesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_return** | **int**| Maximum number of channels to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]
 **status** | **string**| Status filter for draft or approved versions | [optional]
 **folder** | **string**| JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpTemplateResponse**](../Model/ResponseOfLpTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unapproveLandingPageTemplateUsingPOST**
> \CollingMedia\Client\Model\ResponseOfLpTemplateResponse unapproveLandingPageTemplateUsingPOST($id)

Unapprove Landing Page Template

Unapproves the landing page template and reverts it to a draft-only state

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LandingPageTemplatesApi();
$id = 56; // int | id

try {
    $result = $api_instance->unapproveLandingPageTemplateUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->unapproveLandingPageTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpTemplateResponse**](../Model/ResponseOfLpTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLandingPageTemplateContentUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse updateLandingPageTemplateContentUsingPOST($id, $content)

Update Landing Page Template Content

Updates the content for the target landing page template.  This update is destructive for the draft version of the template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LandingPageTemplatesApi();
$id = 56; // int | id
$content = "content_example"; // string | content

try {
    $result = $api_instance->updateLandingPageTemplateContentUsingPOST($id, $content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->updateLandingPageTemplateContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **content** | **string**| content |

### Return type

[**\CollingMedia\Client\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLpTemplateUsingPOST**
> \CollingMedia\Client\Model\ResponseOfLpTemplateResponse updateLpTemplateUsingPOST($id, $update_lp_template_request)

Update Landing Page Template Metadata

Updates the metadata for the target landing page template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\LandingPageTemplatesApi();
$id = 56; // int | id
$update_lp_template_request = new \CollingMedia\Client\Model\UpdateLpTemplateRequest(); // \CollingMedia\Client\Model\UpdateLpTemplateRequest | updateLpTemplateRequest

try {
    $result = $api_instance->updateLpTemplateUsingPOST($id, $update_lp_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->updateLpTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **update_lp_template_request** | [**\CollingMedia\Client\Model\UpdateLpTemplateRequest**](../Model/\CollingMedia\Client\Model\UpdateLpTemplateRequest.md)| updateLpTemplateRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpTemplateResponse**](../Model/ResponseOfLpTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

