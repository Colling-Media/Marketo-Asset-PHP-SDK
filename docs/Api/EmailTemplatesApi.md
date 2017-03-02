# CollingMedia\Client\EmailTemplatesApi

All URIs are relative to *https://052-SXI-468.mktorest.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveDraftUsingPOST1**](EmailTemplatesApi.md#approveDraftUsingPOST1) | **POST** /rest/asset/v1/emailTemplate/{id}/approveDraft.json | Approve Email Template Draft
[**cloneTemplateUsingPOST**](EmailTemplatesApi.md#cloneTemplateUsingPOST) | **POST** /rest/asset/v1/emailTemplate/{id}/clone.json | Clone Email Template
[**createEmailTemplateUsingPOST**](EmailTemplatesApi.md#createEmailTemplateUsingPOST) | **POST** /rest/asset/v1/emailTemplates.json | Create Email Template
[**deleteTemplateUsingPOST**](EmailTemplatesApi.md#deleteTemplateUsingPOST) | **POST** /rest/asset/v1/emailTemplate/{id}/delete.json | Delete Email Template
[**discardDraftUsingPOST1**](EmailTemplatesApi.md#discardDraftUsingPOST1) | **POST** /rest/asset/v1/emailTemplate/{id}/discardDraft.json | Discard Email Template Draft
[**getEmailTemplatesUsingGET**](EmailTemplatesApi.md#getEmailTemplatesUsingGET) | **GET** /rest/asset/v1/emailTemplates.json | Get Email Templates
[**getTemplateByIdUsingGET**](EmailTemplatesApi.md#getTemplateByIdUsingGET) | **GET** /rest/asset/v1/emailTemplate/{id}.json | Get Email Template by Id
[**getTemplateByNameUsingGET**](EmailTemplatesApi.md#getTemplateByNameUsingGET) | **GET** /rest/asset/v1/emailTemplate/byName.json | Get Email Template by Name
[**getTemplateContentByIdUsingGET**](EmailTemplatesApi.md#getTemplateContentByIdUsingGET) | **GET** /rest/asset/v1/emailTemplate/{id}/content | Get Email Template Content by Id
[**unapproveDraftUsingPOST1**](EmailTemplatesApi.md#unapproveDraftUsingPOST1) | **POST** /rest/asset/v1/emailTemplate/{id}/unapprove.json | Unapprove Email Template Draft
[**updateEmailTemplateContentUsingPOST**](EmailTemplatesApi.md#updateEmailTemplateContentUsingPOST) | **POST** /rest/asset/v1/emailTemplate/{id}/content.json | Update Email Template Content
[**updateEmailTemplateUsingPOST**](EmailTemplatesApi.md#updateEmailTemplateUsingPOST) | **POST** /rest/asset/v1/emailTemplate/{id}.json | Update Email Template Metadata


# **approveDraftUsingPOST1**
> \CollingMedia\Client\Model\ResponseOfEmailTemplateResponse approveDraftUsingPOST1($id)

Approve Email Template Draft

Approves the current draft of the email template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\EmailTemplatesApi();
$id = 56; // int | id

try {
    $result = $api_instance->approveDraftUsingPOST1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->approveDraftUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\CollingMedia\Client\Model\ResponseOfEmailTemplateResponse**](../Model/ResponseOfEmailTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloneTemplateUsingPOST**
> \CollingMedia\Client\Model\ResponseOfEmailTemplateResponse cloneTemplateUsingPOST($id, $clone_email_template_request)

Clone Email Template

Clones the designated email template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\EmailTemplatesApi();
$id = 56; // int | id
$clone_email_template_request = new \CollingMedia\Client\Model\CloneEmailTemplateRequest(); // \CollingMedia\Client\Model\CloneEmailTemplateRequest | cloneEmailTemplateRequest

try {
    $result = $api_instance->cloneTemplateUsingPOST($id, $clone_email_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->cloneTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **clone_email_template_request** | [**\CollingMedia\Client\Model\CloneEmailTemplateRequest**](../Model/\CollingMedia\Client\Model\CloneEmailTemplateRequest.md)| cloneEmailTemplateRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfEmailTemplateResponse**](../Model/ResponseOfEmailTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEmailTemplateUsingPOST**
> \CollingMedia\Client\Model\ResponseOfEmailTemplateResponse createEmailTemplateUsingPOST($name, $folder, $content, $description, $workspace)

Create Email Template

Creates a new email template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\EmailTemplatesApi();
$name = "name_example"; // string | Name of the email template
$folder = "folder_example"; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
$content = "content_example"; // string | HTML content of the template
$description = "description_example"; // string | Description of the asset
$workspace = "workspace_example"; // string | Name of the workspace

try {
    $result = $api_instance->createEmailTemplateUsingPOST($name, $folder, $content, $description, $workspace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->createEmailTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the email template |
 **folder** | **string**| JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; |
 **content** | **string**| HTML content of the template |
 **description** | **string**| Description of the asset | [optional]
 **workspace** | **string**| Name of the workspace | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfEmailTemplateResponse**](../Model/ResponseOfEmailTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTemplateUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse deleteTemplateUsingPOST($id)

Delete Email Template

Deletes the designated email template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\EmailTemplatesApi();
$id = 56; // int | id

try {
    $result = $api_instance->deleteTemplateUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->deleteTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **discardDraftUsingPOST1**
> \CollingMedia\Client\Model\ResponseOfIdResponse discardDraftUsingPOST1($id)

Discard Email Template Draft

Discards the current draft of the email template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\EmailTemplatesApi();
$id = 56; // int | id

try {
    $result = $api_instance->discardDraftUsingPOST1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->discardDraftUsingPOST1: ', $e->getMessage(), PHP_EOL;
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

# **getEmailTemplatesUsingGET**
> \CollingMedia\Client\Model\ResponseOfEmailTemplateResponse getEmailTemplatesUsingGET($email_template_request, $status, $folder)

Get Email Templates

Returns a list of email template records accessible in the target instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\EmailTemplatesApi();
$email_template_request = new \CollingMedia\Client\Model\EmailTemplateRequest(); // \CollingMedia\Client\Model\EmailTemplateRequest | emailTemplateRequest
$status = "status_example"; // string | Status filter for draft or approved versions
$folder = "folder_example"; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'

try {
    $result = $api_instance->getEmailTemplatesUsingGET($email_template_request, $status, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->getEmailTemplatesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_template_request** | [**\CollingMedia\Client\Model\EmailTemplateRequest**](../Model/\CollingMedia\Client\Model\EmailTemplateRequest.md)| emailTemplateRequest |
 **status** | **string**| Status filter for draft or approved versions | [optional]
 **folder** | **string**| JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfEmailTemplateResponse**](../Model/ResponseOfEmailTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplateByIdUsingGET**
> \CollingMedia\Client\Model\ResponseOfEmailTemplateResponse getTemplateByIdUsingGET($id, $status)

Get Email Template by Id

Returns an email template record by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\EmailTemplatesApi();
$id = 56; // int | id
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $api_instance->getTemplateByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->getTemplateByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfEmailTemplateResponse**](../Model/ResponseOfEmailTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplateByNameUsingGET**
> \CollingMedia\Client\Model\ResponseOfEmailTemplateResponse getTemplateByNameUsingGET($name, $status)

Get Email Template by Name

Retrieves and email template record by the given name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\EmailTemplatesApi();
$name = "name_example"; // string | name
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $api_instance->getTemplateByNameUsingGET($name, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->getTemplateByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfEmailTemplateResponse**](../Model/ResponseOfEmailTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplateContentByIdUsingGET**
> \CollingMedia\Client\Model\ResponseOfEmailTemplateContentResponse getTemplateContentByIdUsingGET($id, $status)

Get Email Template Content by Id

Returns the content for a given email template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\EmailTemplatesApi();
$id = 56; // int | id
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $api_instance->getTemplateContentByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->getTemplateContentByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfEmailTemplateContentResponse**](../Model/ResponseOfEmailTemplateContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unapproveDraftUsingPOST1**
> \CollingMedia\Client\Model\ResponseOfEmailTemplateResponse unapproveDraftUsingPOST1($id)

Unapprove Email Template Draft

Unapproves the current approved version of the Email Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\EmailTemplatesApi();
$id = 56; // int | id

try {
    $result = $api_instance->unapproveDraftUsingPOST1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->unapproveDraftUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\CollingMedia\Client\Model\ResponseOfEmailTemplateResponse**](../Model/ResponseOfEmailTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailTemplateContentUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse updateEmailTemplateContentUsingPOST($id, $update_email_template_content_request)

Update Email Template Content

Updates the content of the given email template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\EmailTemplatesApi();
$id = 56; // int | id
$update_email_template_content_request = new \CollingMedia\Client\Model\UpdateEmailTemplateContentRequest(); // \CollingMedia\Client\Model\UpdateEmailTemplateContentRequest | updateEmailTemplateContentRequest

try {
    $result = $api_instance->updateEmailTemplateContentUsingPOST($id, $update_email_template_content_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->updateEmailTemplateContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **update_email_template_content_request** | [**\CollingMedia\Client\Model\UpdateEmailTemplateContentRequest**](../Model/\CollingMedia\Client\Model\UpdateEmailTemplateContentRequest.md)| updateEmailTemplateContentRequest | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailTemplateUsingPOST**
> \CollingMedia\Client\Model\ResponseOfEmailTemplateResponse updateEmailTemplateUsingPOST($id, $update_email_meta_data_request)

Update Email Template Metadata

Updates the metadata for the designated email template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\EmailTemplatesApi();
$id = 56; // int | id
$update_email_meta_data_request = new \CollingMedia\Client\Model\UpdateEmailTemplateMetaDataRequest(); // \CollingMedia\Client\Model\UpdateEmailTemplateMetaDataRequest | updateEmailMetaDataRequest

try {
    $result = $api_instance->updateEmailTemplateUsingPOST($id, $update_email_meta_data_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->updateEmailTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **update_email_meta_data_request** | [**\CollingMedia\Client\Model\UpdateEmailTemplateMetaDataRequest**](../Model/\CollingMedia\Client\Model\UpdateEmailTemplateMetaDataRequest.md)| updateEmailMetaDataRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfEmailTemplateResponse**](../Model/ResponseOfEmailTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

