# Swagger\Client\EmailsApi

All URIs are relative to *https://052-SXI-468.mktorest.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addModuleUsingPOST**](EmailsApi.md#addModuleUsingPOST) | **POST** /rest/asset/v1/email/{id}/content/{moduleId}/add.json | Add Email Module
[**approveDraftUsingPOST**](EmailsApi.md#approveDraftUsingPOST) | **POST** /rest/asset/v1/email/{id}/approveDraft.json | Approve Email Draft
[**cloneEmailUsingPOST**](EmailsApi.md#cloneEmailUsingPOST) | **POST** /rest/asset/v1/email/{id}/clone.json | Clone Email
[**createEmailUsingPOST**](EmailsApi.md#createEmailUsingPOST) | **POST** /rest/asset/v1/emails.json | Create Email
[**deleteEmailUsingPOST**](EmailsApi.md#deleteEmailUsingPOST) | **POST** /rest/asset/v1/email/{id}/delete.json | Delete Email
[**deleteModuleUsingPOST**](EmailsApi.md#deleteModuleUsingPOST) | **POST** /rest/asset/v1/email/{id}/content/{moduleId}/delete.json | Delete Module
[**discardDraftUsingPOST**](EmailsApi.md#discardDraftUsingPOST) | **POST** /rest/asset/v1/email/{id}/discardDraft.json | Discard Email Draft
[**duplicateModuleUsingPOST**](EmailsApi.md#duplicateModuleUsingPOST) | **POST** /rest/asset/v1/email/{id}/content/{moduleId}/duplicate.json | Duplicate Email Module
[**getEmailByIdUsingGET**](EmailsApi.md#getEmailByIdUsingGET) | **GET** /rest/asset/v1/email/{id}.json | Get Email By Id
[**getEmailByNameUsingGET**](EmailsApi.md#getEmailByNameUsingGET) | **GET** /rest/asset/v1/email/byName.json | Get Email by Name
[**getEmailContentByIdUsingGET**](EmailsApi.md#getEmailContentByIdUsingGET) | **GET** /rest/asset/v1/email/{id}/content | Get Email Content
[**getEmailDynamicContentUsingGET**](EmailsApi.md#getEmailDynamicContentUsingGET) | **GET** /rest/asset/v1/email/{id}/dynamicContent/{dynamicContentId}.json | Get Email Dynamic Content
[**getEmailUsingGET**](EmailsApi.md#getEmailUsingGET) | **GET** /rest/asset/v1/emails.json | Get Emails
[**getEmailVariablesUsingGET**](EmailsApi.md#getEmailVariablesUsingGET) | **GET** /rest/asset/v1/email/{id}/variables.json | Get Email Variables
[**rearrangeModulesUsingPOST**](EmailsApi.md#rearrangeModulesUsingPOST) | **POST** /rest/asset/v1/email/{id}/content/rearrange.json | Rearrange Email Modules
[**renameUsingPOST**](EmailsApi.md#renameUsingPOST) | **POST** /rest/asset/v1/email/{id}/content/{moduleId}/rename.json | Rename Email Module
[**sendSampleEmailUsingPOST**](EmailsApi.md#sendSampleEmailUsingPOST) | **POST** /rest/asset/v1/email/{id}/sendSample.json | Send Sample Email
[**unapproveDraftUsingPOST**](EmailsApi.md#unapproveDraftUsingPOST) | **POST** /rest/asset/v1/email/{id}/unapprove.json | Unapprove Email
[**updateEmailComponentContentUsingPOST**](EmailsApi.md#updateEmailComponentContentUsingPOST) | **POST** /rest/asset/v1/email/{id}/content/{htmlId}.json | Update Email Content Section
[**updateEmailContentUsingPOST**](EmailsApi.md#updateEmailContentUsingPOST) | **POST** /rest/asset/v1/email/{id}/content.json | Update Email Content
[**updateEmailDynamicContentUsingPOST**](EmailsApi.md#updateEmailDynamicContentUsingPOST) | **POST** /rest/asset/v1/email/{id}/dynamicContent/{dynamicContentId}.json | Update Email Dynamic Content Section
[**updateEmailUsingPOST**](EmailsApi.md#updateEmailUsingPOST) | **POST** /rest/asset/v1/email/{id}.json | Update Email Metadata
[**updateVariableUsingPOST**](EmailsApi.md#updateVariableUsingPOST) | **POST** /rest/asset/v1/email/{id}/variable/{name}.json | Update Email Variable


# **addModuleUsingPOST**
> \CollingMedia\Client\Model\ModelResponse addModuleUsingPOST($id, $module_id, $name, $index, $add_module_request)

Add Email Module

Adds a new module to an email, with the given id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 56; // int | id
$module_id = "module_id_example"; // string | moduleId
$name = "name_example"; // string | Name of the module
$index = 56; // int | Index of the module.  Determines the order of the module in the email.
$add_module_request = new \CollingMedia\Client\Model\AddModuleRequest(); // \CollingMedia\Client\Model\AddModuleRequest | addModuleRequest

try {
    $result = $api_instance->addModuleUsingPOST($id, $module_id, $name, $index, $add_module_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->addModuleUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **module_id** | **string**| moduleId |
 **name** | **string**| Name of the module |
 **index** | **int**| Index of the module.  Determines the order of the module in the email. |
 **add_module_request** | [**\CollingMedia\Client\Model\AddModuleRequest**](../Model/\CollingMedia\Client\Model\AddModuleRequest.md)| addModuleRequest | [optional]

### Return type

[**\CollingMedia\Client\Model\ModelResponse**](../Model/ModelResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **approveDraftUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse approveDraftUsingPOST($id)

Approve Email Draft

Approves the current draft of an email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 56; // int | id

try {
    $result = $api_instance->approveDraftUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->approveDraftUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **cloneEmailUsingPOST**
> \CollingMedia\Client\Model\ResponseOfEmailResponse cloneEmailUsingPOST($id, $clone_email_request)

Clone Email

Clones the target email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 56; // int | id
$clone_email_request = new \CollingMedia\Client\Model\CloneEmailRequest(); // \CollingMedia\Client\Model\CloneEmailRequest | cloneEmailRequest

try {
    $result = $api_instance->cloneEmailUsingPOST($id, $clone_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->cloneEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **clone_email_request** | [**\CollingMedia\Client\Model\CloneEmailRequest**](../Model/\CollingMedia\Client\Model\CloneEmailRequest.md)| cloneEmailRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfEmailResponse**](../Model/ResponseOfEmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEmailUsingPOST**
> \CollingMedia\Client\Model\ResponseOfEmailResponse createEmailUsingPOST($create_email_request)

Create Email

Creates a new email asset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$create_email_request = new \CollingMedia\Client\Model\CreateEmailRequest(); // \CollingMedia\Client\Model\CreateEmailRequest | createEmailRequest

try {
    $result = $api_instance->createEmailUsingPOST($create_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->createEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_email_request** | [**\CollingMedia\Client\Model\CreateEmailRequest**](../Model/\CollingMedia\Client\Model\CreateEmailRequest.md)| createEmailRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfEmailResponse**](../Model/ResponseOfEmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmailUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse deleteEmailUsingPOST($id)

Delete Email

Deletes the target email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 56; // int | id

try {
    $result = $api_instance->deleteEmailUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->deleteEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **deleteModuleUsingPOST**
> \CollingMedia\Client\Model\ModelResponse deleteModuleUsingPOST($id, $module_id)

Delete Module

Deletes the given module from the email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 56; // int | id
$module_id = "module_id_example"; // string | moduleId

try {
    $result = $api_instance->deleteModuleUsingPOST($id, $module_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->deleteModuleUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **module_id** | **string**| moduleId |

### Return type

[**\CollingMedia\Client\Model\ModelResponse**](../Model/ModelResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discardDraftUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse discardDraftUsingPOST($id)

Discard Email Draft

Discards the current draft of an email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 56; // int | id

try {
    $result = $api_instance->discardDraftUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->discardDraftUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **duplicateModuleUsingPOST**
> \CollingMedia\Client\Model\ModelResponse duplicateModuleUsingPOST($id, $module_id, $name)

Duplicate Email Module

Creates a copy of the designated module in an email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 56; // int | id
$module_id = "module_id_example"; // string | moduleId
$name = "name_example"; // string | Name of the new module

try {
    $result = $api_instance->duplicateModuleUsingPOST($id, $module_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->duplicateModuleUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **module_id** | **string**| moduleId |
 **name** | **string**| Name of the new module |

### Return type

[**\CollingMedia\Client\Model\ModelResponse**](../Model/ModelResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailByIdUsingGET**
> \CollingMedia\Client\Model\ResponseOfEmailResponse getEmailByIdUsingGET($id, $status)

Get Email By Id

Returns an email records by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 56; // int | id
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $api_instance->getEmailByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfEmailResponse**](../Model/ResponseOfEmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailByNameUsingGET**
> \CollingMedia\Client\Model\ResponseOfEmailResponse getEmailByNameUsingGET($name, $status, $folder)

Get Email by Name

Returns an email records based on the given name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$name = "name_example"; // string | Name of the email
$status = "status_example"; // string | Status filter for draft or approved versions
$folder = "folder_example"; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'

try {
    $result = $api_instance->getEmailByNameUsingGET($name, $status, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the email |
 **status** | **string**| Status filter for draft or approved versions | [optional]
 **folder** | **string**| JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfEmailResponse**](../Model/ResponseOfEmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailContentByIdUsingGET**
> \CollingMedia\Client\Model\ResponseOfEmailContentResponse getEmailContentByIdUsingGET($id, $status)

Get Email Content

Returns the content of the designated email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 56; // int | id
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $api_instance->getEmailContentByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailContentByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfEmailContentResponse**](../Model/ResponseOfEmailContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailDynamicContentUsingGET**
> \CollingMedia\Client\Model\ResponseOfEmailDynamicContentResponse getEmailDynamicContentUsingGET($id, $dynamic_content_id, $status)

Get Email Dynamic Content

Retrieves the dyanmic content record for the given section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 56; // int | id
$dynamic_content_id = "dynamic_content_id_example"; // string | dynamicContentId
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $api_instance->getEmailDynamicContentUsingGET($id, $dynamic_content_id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailDynamicContentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **dynamic_content_id** | **string**| dynamicContentId |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfEmailDynamicContentResponse**](../Model/ResponseOfEmailDynamicContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailUsingGET**
> \CollingMedia\Client\Model\ResponseOfEmailResponse getEmailUsingGET($email_request, $status, $folder, $offset, $max_return)

Get Emails

Returns a list of emails matching the given filter parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$email_request = new \CollingMedia\Client\Model\EmailRequest(); // \CollingMedia\Client\Model\EmailRequest | emailRequest
$status = "status_example"; // string | Status filter for draft or approved versions
$folder = "folder_example"; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
$offset = 56; // int | Integer offset for paging
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20

try {
    $result = $api_instance->getEmailUsingGET($email_request, $status, $folder, $offset, $max_return);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_request** | [**\CollingMedia\Client\Model\EmailRequest**](../Model/\CollingMedia\Client\Model\EmailRequest.md)| emailRequest | [optional]
 **status** | **string**| Status filter for draft or approved versions | [optional]
 **folder** | **string**| JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | [optional]
 **offset** | **int**| Integer offset for paging | [optional]
 **max_return** | **int**| Maximum number of channels to return.  Max 200, default 20 | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfEmailResponse**](../Model/ResponseOfEmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailVariablesUsingGET**
> \CollingMedia\Client\Model\ModelResponse getEmailVariablesUsingGET($id)

Get Email Variables

Returns a list of the available variables in an email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 56; // int | id

try {
    $result = $api_instance->getEmailVariablesUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailVariablesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\CollingMedia\Client\Model\ModelResponse**](../Model/ModelResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rearrangeModulesUsingPOST**
> \CollingMedia\Client\Model\ModelResponse rearrangeModulesUsingPOST($id, $rearrange_modules_request, $positions)

Rearrange Email Modules

Rearranges the modules in an email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 56; // int | id
$rearrange_modules_request = new \CollingMedia\Client\Model\RearrangeModulesRequest(); // \CollingMedia\Client\Model\RearrangeModulesRequest | rearrangeModulesRequest
$positions = "positions_example"; // string | JSON array of module positions.  Each position must be a JSON object with members 'index' and a 'moduleId'

try {
    $result = $api_instance->rearrangeModulesUsingPOST($id, $rearrange_modules_request, $positions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->rearrangeModulesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **rearrange_modules_request** | [**\CollingMedia\Client\Model\RearrangeModulesRequest**](../Model/\CollingMedia\Client\Model\RearrangeModulesRequest.md)| rearrangeModulesRequest | [optional]
 **positions** | **string**| JSON array of module positions.  Each position must be a JSON object with members &#39;index&#39; and a &#39;moduleId&#39; | [optional]

### Return type

[**\CollingMedia\Client\Model\ModelResponse**](../Model/ModelResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **renameUsingPOST**
> \CollingMedia\Client\Model\ModelResponse renameUsingPOST($id, $module_id, $name)

Rename Email Module

Renames a module

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 56; // int | id
$module_id = "module_id_example"; // string | moduleId
$name = "name_example"; // string | New module name

try {
    $result = $api_instance->renameUsingPOST($id, $module_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->renameUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **module_id** | **string**| moduleId |
 **name** | **string**| New module name |

### Return type

[**\CollingMedia\Client\Model\ModelResponse**](../Model/ModelResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendSampleEmailUsingPOST**
> \CollingMedia\Client\Model\ResponseOfobject sendSampleEmailUsingPOST($id, $send_sample_email_request)

Send Sample Email

Sends a sample email to the given email address.  Leads may be impersonated to populate data for tokens and dynamic content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 56; // int | id
$send_sample_email_request = new \CollingMedia\Client\Model\SendSampleEmailRequest(); // \CollingMedia\Client\Model\SendSampleEmailRequest | sendSampleEmailRequest

try {
    $result = $api_instance->sendSampleEmailUsingPOST($id, $send_sample_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->sendSampleEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **send_sample_email_request** | [**\CollingMedia\Client\Model\SendSampleEmailRequest**](../Model/\CollingMedia\Client\Model\SendSampleEmailRequest.md)| sendSampleEmailRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfobject**](../Model/ResponseOfobject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unapproveDraftUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse unapproveDraftUsingPOST($id)

Unapprove Email

Unapproves the email and reverts it to a draft-only state

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 56; // int | id

try {
    $result = $api_instance->unapproveDraftUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->unapproveDraftUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **updateEmailComponentContentUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse updateEmailComponentContentUsingPOST($id, $html_id, $request)

Update Email Content Section

Updates the content in the given section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 56; // int | id
$html_id = "html_id_example"; // string | htmlId
$request = new \CollingMedia\Client\Model\UpdateEmailComponentContentRequest(); // \CollingMedia\Client\Model\UpdateEmailComponentContentRequest | request

try {
    $result = $api_instance->updateEmailComponentContentUsingPOST($id, $html_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->updateEmailComponentContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **html_id** | **string**| htmlId |
 **request** | [**\CollingMedia\Client\Model\UpdateEmailComponentContentRequest**](../Model/\CollingMedia\Client\Model\UpdateEmailComponentContentRequest.md)| request |

### Return type

[**\CollingMedia\Client\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailContentUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse updateEmailContentUsingPOST($id, $update_email_request)

Update Email Content

Updates the content of an email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 56; // int | id
$update_email_request = new \CollingMedia\Client\Model\UpdateEmailComponentDataRequest(); // \CollingMedia\Client\Model\UpdateEmailComponentDataRequest | updateEmailRequest

try {
    $result = $api_instance->updateEmailContentUsingPOST($id, $update_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->updateEmailContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **update_email_request** | [**\CollingMedia\Client\Model\UpdateEmailComponentDataRequest**](../Model/\CollingMedia\Client\Model\UpdateEmailComponentDataRequest.md)| updateEmailRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailDynamicContentUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse updateEmailDynamicContentUsingPOST($id, $dynamic_content_id, $request)

Update Email Dynamic Content Section

Updates dynamic content in the given section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 56; // int | id
$dynamic_content_id = "dynamic_content_id_example"; // string | dynamicContentId
$request = new \CollingMedia\Client\Model\UpdateEmailDynamicContentRequest(); // \CollingMedia\Client\Model\UpdateEmailDynamicContentRequest | request

try {
    $result = $api_instance->updateEmailDynamicContentUsingPOST($id, $dynamic_content_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->updateEmailDynamicContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **dynamic_content_id** | **string**| dynamicContentId |
 **request** | [**\CollingMedia\Client\Model\UpdateEmailDynamicContentRequest**](../Model/\CollingMedia\Client\Model\UpdateEmailDynamicContentRequest.md)| request |

### Return type

[**\CollingMedia\Client\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailUsingPOST**
> \CollingMedia\Client\Model\ResponseOfEmailResponse updateEmailUsingPOST($id, $update_email_request)

Update Email Metadata

Updates the metadata of an email asset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 56; // int | id
$update_email_request = new \CollingMedia\Client\Model\UpdateEmailMetaDataRequest(); // \CollingMedia\Client\Model\UpdateEmailMetaDataRequest | updateEmailRequest

try {
    $result = $api_instance->updateEmailUsingPOST($id, $update_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->updateEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **update_email_request** | [**\CollingMedia\Client\Model\UpdateEmailMetaDataRequest**](../Model/\CollingMedia\Client\Model\UpdateEmailMetaDataRequest.md)| updateEmailRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfEmailResponse**](../Model/ResponseOfEmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVariableUsingPOST**
> \CollingMedia\Client\Model\ModelResponse updateVariableUsingPOST($id, $name, $update_variable_request)

Update Email Variable

Updates the value of a given variable in an email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmailsApi();
$id = 56; // int | id
$name = "name_example"; // string | name
$update_variable_request = new \CollingMedia\Client\Model\UpdateVariableRequest(); // \CollingMedia\Client\Model\UpdateVariableRequest | updateVariableRequest

try {
    $result = $api_instance->updateVariableUsingPOST($id, $name, $update_variable_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->updateVariableUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **name** | **string**| name |
 **update_variable_request** | [**\CollingMedia\Client\Model\UpdateVariableRequest**](../Model/\CollingMedia\Client\Model\UpdateVariableRequest.md)| updateVariableRequest | [optional]

### Return type

[**\CollingMedia\Client\Model\ModelResponse**](../Model/ModelResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

