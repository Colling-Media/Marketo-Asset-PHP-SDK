# CollingMedia\Client\FormsApi

All URIs are relative to *https://052-SXI-468.mktorest.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveFromUsingPOST**](FormsApi.md#approveFromUsingPOST) | **POST** /rest/asset/v1/form/{id}/approveDraft.json | Approve Form Draft
[**browseForms2UsingGET**](FormsApi.md#browseForms2UsingGET) | **GET** /rest/asset/v1/forms.json | Get Forms
[**cloneLpFormsUsingPOST**](FormsApi.md#cloneLpFormsUsingPOST) | **POST** /rest/asset/v1/form/{id}/clone.json | Clone Form
[**createLpFormsUsingPOST**](FormsApi.md#createLpFormsUsingPOST) | **POST** /rest/asset/v1/forms.json | Create Form
[**deleteFormByIdUsingPOST**](FormsApi.md#deleteFormByIdUsingPOST) | **POST** /rest/asset/v1/form/{id}/delete.json | Delete Form
[**discardFormByIdUsingPOST**](FormsApi.md#discardFormByIdUsingPOST) | **POST** /rest/asset/v1/form/{id}/discardDraft.json | Discard Form Draft
[**getLpFormByIdUsingGET**](FormsApi.md#getLpFormByIdUsingGET) | **GET** /rest/asset/v1/form/{id}.json | Get Form By Id
[**getLpFormByNameUsingGET**](FormsApi.md#getLpFormByNameUsingGET) | **GET** /rest/asset/v1/form/byName.json | Get Form by Name
[**getThankYouPageByIdUsingGET**](FormsApi.md#getThankYouPageByIdUsingGET) | **GET** /rest/asset/v1/form/{id}/thankYouPage.json | Get Thank You Page by Form Id
[**updateFormSubmitButtonUsingPOST**](FormsApi.md#updateFormSubmitButtonUsingPOST) | **POST** /rest/asset/v1/form/{id}/submitButton.json | Update Submit Button
[**updateFormsUsingPOST**](FormsApi.md#updateFormsUsingPOST) | **POST** /rest/asset/v1/form/{id}.json | Update Form Metadata
[**updateThankYouPageByIdUsingPOST**](FormsApi.md#updateThankYouPageByIdUsingPOST) | **POST** /rest/asset/v1/form/{id}/thankYouPage.json | Update Thank You Page


# **approveFromUsingPOST**
> \CollingMedia\Client\Model\ResponseOfLpFormResponse approveFromUsingPOST($id)

Approve Form Draft

Approves the current draft of the form.  This will delete the current approved version of the form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\FormsApi();
$id = 56; // int | id

try {
    $result = $api_instance->approveFromUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->approveFromUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpFormResponse**](../Model/ResponseOfLpFormResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **browseForms2UsingGET**
> \CollingMedia\Client\Model\ResponseOfLpFormResponse browseForms2UsingGET($folder, $status, $max_return, $offset)

Get Forms

Retrieves a list of accessible form records from the target instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\FormsApi();
$folder = "folder_example"; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
$status = "status_example"; // string | Status filter for draft or approved versions
$max_return = "max_return_example"; // string | Maximum number of channels to return.  Max 200, default 20
$offset = "offset_example"; // string | Integer offset for paging

try {
    $result = $api_instance->browseForms2UsingGET($folder, $status, $max_return, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->browseForms2UsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | **string**| JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; |
 **status** | **string**| Status filter for draft or approved versions | [optional]
 **max_return** | **string**| Maximum number of channels to return.  Max 200, default 20 | [optional]
 **offset** | **string**| Integer offset for paging | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpFormResponse**](../Model/ResponseOfLpFormResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloneLpFormsUsingPOST**
> \CollingMedia\Client\Model\ResponseOfLpFormResponse cloneLpFormsUsingPOST($id, $clone_form_request)

Clone Form

Clones the target form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\FormsApi();
$id = 56; // int | id
$clone_form_request = new \CollingMedia\Client\Model\CloneLpFormRequest(); // \CollingMedia\Client\Model\CloneLpFormRequest | cloneFormRequest

try {
    $result = $api_instance->cloneLpFormsUsingPOST($id, $clone_form_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->cloneLpFormsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **clone_form_request** | [**\CollingMedia\Client\Model\CloneLpFormRequest**](../Model/\CollingMedia\Client\Model\CloneLpFormRequest.md)| cloneFormRequest | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpFormResponse**](../Model/ResponseOfLpFormResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLpFormsUsingPOST**
> \CollingMedia\Client\Model\ResponseOfLpFormResponse createLpFormsUsingPOST($create_form_request)

Create Form

Creates a new form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\FormsApi();
$create_form_request = new \CollingMedia\Client\Model\CreateLpFormRequest(); // \CollingMedia\Client\Model\CreateLpFormRequest | createFormRequest

try {
    $result = $api_instance->createLpFormsUsingPOST($create_form_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->createLpFormsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_form_request** | [**\CollingMedia\Client\Model\CreateLpFormRequest**](../Model/\CollingMedia\Client\Model\CreateLpFormRequest.md)| createFormRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpFormResponse**](../Model/ResponseOfLpFormResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFormByIdUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse deleteFormByIdUsingPOST($id)

Delete Form

Deletes the target form.  Forms which are in use by landing pages may not be deleted until they are removed from all landing pages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\FormsApi();
$id = 56; // int | id

try {
    $result = $api_instance->deleteFormByIdUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->deleteFormByIdUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **discardFormByIdUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse discardFormByIdUsingPOST($id)

Discard Form Draft

Discards the current draft of the form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\FormsApi();
$id = 56; // int | id

try {
    $result = $api_instance->discardFormByIdUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->discardFormByIdUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **getLpFormByIdUsingGET**
> \CollingMedia\Client\Model\ResponseOfLpFormResponse getLpFormByIdUsingGET($id, $status)

Get Form By Id

Retrieves a form record by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\FormsApi();
$id = 56; // int | id
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $api_instance->getLpFormByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getLpFormByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpFormResponse**](../Model/ResponseOfLpFormResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLpFormByNameUsingGET**
> \CollingMedia\Client\Model\ResponseOfLpFormResponse getLpFormByNameUsingGET($name, $status, $folder)

Get Form by Name

Retrieves a form record by its name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\FormsApi();
$name = "name_example"; // string | Name of the form
$status = "status_example"; // string | Status filter for draft or approved versions
$folder = "folder_example"; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'

try {
    $result = $api_instance->getLpFormByNameUsingGET($name, $status, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getLpFormByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the form |
 **status** | **string**| Status filter for draft or approved versions | [optional]
 **folder** | **string**| JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpFormResponse**](../Model/ResponseOfLpFormResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getThankYouPageByIdUsingGET**
> \CollingMedia\Client\Model\ResponseOfThankYouPageResponse getThankYouPageByIdUsingGET($id, $status)

Get Thank You Page by Form Id

Returns the thank you page configuration for a given form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\FormsApi();
$id = 56; // int | id
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $api_instance->getThankYouPageByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getThankYouPageByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfThankYouPageResponse**](../Model/ResponseOfThankYouPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFormSubmitButtonUsingPOST**
> \CollingMedia\Client\Model\ResponseOfLpFormResponse updateFormSubmitButtonUsingPOST($id, $submit_button_request)

Update Submit Button

Updates the submit button configuration for the target form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\FormsApi();
$id = 56; // int | id
$submit_button_request = new \CollingMedia\Client\Model\SubmitButtonRequest(); // \CollingMedia\Client\Model\SubmitButtonRequest | submitButtonRequest

try {
    $result = $api_instance->updateFormSubmitButtonUsingPOST($id, $submit_button_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->updateFormSubmitButtonUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **submit_button_request** | [**\CollingMedia\Client\Model\SubmitButtonRequest**](../Model/\CollingMedia\Client\Model\SubmitButtonRequest.md)| submitButtonRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpFormResponse**](../Model/ResponseOfLpFormResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFormsUsingPOST**
> \CollingMedia\Client\Model\ResponseOfLpFormResponse updateFormsUsingPOST($id, $update_form_meta_data_request)

Update Form Metadata

Updates the metadata of the target form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\FormsApi();
$id = 56; // int | id
$update_form_meta_data_request = new \CollingMedia\Client\Model\UpdateFormMetaDataRequest(); // \CollingMedia\Client\Model\UpdateFormMetaDataRequest | updateFormMetaDataRequest

try {
    $result = $api_instance->updateFormsUsingPOST($id, $update_form_meta_data_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->updateFormsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **update_form_meta_data_request** | [**\CollingMedia\Client\Model\UpdateFormMetaDataRequest**](../Model/\CollingMedia\Client\Model\UpdateFormMetaDataRequest.md)| updateFormMetaDataRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpFormResponse**](../Model/ResponseOfLpFormResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateThankYouPageByIdUsingPOST**
> \CollingMedia\Client\Model\ResponseOfThankYouPageResponse updateThankYouPageByIdUsingPOST($id, $thank_you_page_request)

Update Thank You Page

Updates the thank you page configuration for a given form.  This update is destructive and the resulting draft will not have any memory of the previous configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\FormsApi();
$id = 56; // int | id
$thank_you_page_request = new \CollingMedia\Client\Model\UpdateThankYouPageRequest(); // \CollingMedia\Client\Model\UpdateThankYouPageRequest | thankYouPageRequest

try {
    $result = $api_instance->updateThankYouPageByIdUsingPOST($id, $thank_you_page_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->updateThankYouPageByIdUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **thank_you_page_request** | [**\CollingMedia\Client\Model\UpdateThankYouPageRequest**](../Model/\CollingMedia\Client\Model\UpdateThankYouPageRequest.md)| thankYouPageRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfThankYouPageResponse**](../Model/ResponseOfThankYouPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

