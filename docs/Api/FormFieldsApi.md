# Swagger\Client\FormFieldsApi

All URIs are relative to *https://052-SXI-468.mktorest.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFieldSetUsingPOST**](FormFieldsApi.md#addFieldSetUsingPOST) | **POST** /rest/asset/v1/form/{id}/fieldSet.json | Add Fieldset to Form
[**addFieldToAFormUsingPOST**](FormFieldsApi.md#addFieldToAFormUsingPOST) | **POST** /rest/asset/v1/form/{id}/fields.json | Add Field to Form
[**addFormFieldVisibilityRuleUsingPOST**](FormFieldsApi.md#addFormFieldVisibilityRuleUsingPOST) | **POST** /rest/asset/v1/form/{formId}/field/{fieldId}/visibility.json | Add Form Field Visibility Rules
[**addRichTextFieldUsingPOST**](FormFieldsApi.md#addRichTextFieldUsingPOST) | **POST** /rest/asset/v1/form/{id}/richText.json | Add Rich Text Field
[**deleteFormFieldFromFieldSetUsingPOST**](FormFieldsApi.md#deleteFormFieldFromFieldSetUsingPOST) | **POST** /rest/asset/v1/form/{id}/fieldSet/{fieldSetId}/field/{fieldId}/delete.json | Delete Field from Fieldset
[**deleteFormFieldUsingPOST**](FormFieldsApi.md#deleteFormFieldUsingPOST) | **POST** /rest/asset/v1/form/{id}/field/{fieldId}/delete.json | Delete Form Field
[**getAllFieldsUsingGET**](FormFieldsApi.md#getAllFieldsUsingGET) | **GET** /rest/asset/v1/form/fields.json | Get Available Form Fields
[**getFormFieldByFormVidUsingGET**](FormFieldsApi.md#getFormFieldByFormVidUsingGET) | **GET** /rest/asset/v1/form/{id}/fields.json | Get Fields for Form
[**updateFieldPositionsUsingPOST**](FormFieldsApi.md#updateFieldPositionsUsingPOST) | **POST** /rest/asset/v1/form/{id}/reArrange.json | Update Field Positions
[**updateFormFieldUsingPOST**](FormFieldsApi.md#updateFormFieldUsingPOST) | **POST** /rest/asset/v1/form/{id}/field/{fieldId}.json | Update Form Field


# **addFieldSetUsingPOST**
> \CollingMedia\Client\Model\ResponseOfLpFormFieldResponse addFieldSetUsingPOST($id, $add_form_field_set_request)

Add Fieldset to Form

Adds a field set to the target form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FormFieldsApi();
$id = 56; // int | id
$add_form_field_set_request = new \CollingMedia\Client\Model\AddFormFieldSetRequest(); // \CollingMedia\Client\Model\AddFormFieldSetRequest | addFormFieldSetRequest

try {
    $result = $api_instance->addFieldSetUsingPOST($id, $add_form_field_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->addFieldSetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **add_form_field_set_request** | [**\CollingMedia\Client\Model\AddFormFieldSetRequest**](../Model/\CollingMedia\Client\Model\AddFormFieldSetRequest.md)| addFormFieldSetRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpFormFieldResponse**](../Model/ResponseOfLpFormFieldResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFieldToAFormUsingPOST**
> \CollingMedia\Client\Model\ResponseOfLpFormFieldResponse addFieldToAFormUsingPOST($id, $add_form_field_set_request)

Add Field to Form

Adds a field to a form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FormFieldsApi();
$id = 56; // int | id
$add_form_field_set_request = new \CollingMedia\Client\Model\AddFormFieldRequest(); // \CollingMedia\Client\Model\AddFormFieldRequest | addFormFieldSetRequest

try {
    $result = $api_instance->addFieldToAFormUsingPOST($id, $add_form_field_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->addFieldToAFormUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **add_form_field_set_request** | [**\CollingMedia\Client\Model\AddFormFieldRequest**](../Model/\CollingMedia\Client\Model\AddFormFieldRequest.md)| addFormFieldSetRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpFormFieldResponse**](../Model/ResponseOfLpFormFieldResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFormFieldVisibilityRuleUsingPOST**
> \CollingMedia\Client\Model\ResponseOfFormVisibilityRuleResponse addFormFieldVisibilityRuleUsingPOST($form_id, $field_id, $add_form_field_visibility_request)

Add Form Field Visibility Rules

Adds a visibility rule to the target form field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FormFieldsApi();
$form_id = 56; // int | formId
$field_id = "field_id_example"; // string | fieldId
$add_form_field_visibility_request = new \CollingMedia\Client\Model\AddFormFieldVisibilityRequest(); // \CollingMedia\Client\Model\AddFormFieldVisibilityRequest | addFormFieldVisibilityRequest

try {
    $result = $api_instance->addFormFieldVisibilityRuleUsingPOST($form_id, $field_id, $add_form_field_visibility_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->addFormFieldVisibilityRuleUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **form_id** | **int**| formId |
 **field_id** | **string**| fieldId |
 **add_form_field_visibility_request** | [**\CollingMedia\Client\Model\AddFormFieldVisibilityRequest**](../Model/\CollingMedia\Client\Model\AddFormFieldVisibilityRequest.md)| addFormFieldVisibilityRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfFormVisibilityRuleResponse**](../Model/ResponseOfFormVisibilityRuleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addRichTextFieldUsingPOST**
> \CollingMedia\Client\Model\ResponseOfLpFormFieldResponse addRichTextFieldUsingPOST($id, $add_rich_text_request)

Add Rich Text Field

Adds a rich-text type field to the form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FormFieldsApi();
$id = 56; // int | id
$add_rich_text_request = new \CollingMedia\Client\Model\AddRichTextRequest(); // \CollingMedia\Client\Model\AddRichTextRequest | addRichTextRequest

try {
    $result = $api_instance->addRichTextFieldUsingPOST($id, $add_rich_text_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->addRichTextFieldUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **add_rich_text_request** | [**\CollingMedia\Client\Model\AddRichTextRequest**](../Model/\CollingMedia\Client\Model\AddRichTextRequest.md)| addRichTextRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpFormFieldResponse**](../Model/ResponseOfLpFormFieldResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFormFieldFromFieldSetUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse deleteFormFieldFromFieldSetUsingPOST($id, $field_set_id, $field_id)

Delete Field from Fieldset

Removes the target field from the fieldset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FormFieldsApi();
$id = 56; // int | id
$field_set_id = "field_set_id_example"; // string | fieldSetId
$field_id = "field_id_example"; // string | fieldId

try {
    $result = $api_instance->deleteFormFieldFromFieldSetUsingPOST($id, $field_set_id, $field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->deleteFormFieldFromFieldSetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **field_set_id** | **string**| fieldSetId |
 **field_id** | **string**| fieldId |

### Return type

[**\CollingMedia\Client\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFormFieldUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse deleteFormFieldUsingPOST($id, $field_id)

Delete Form Field

Deletes a field from a form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FormFieldsApi();
$id = 56; // int | id
$field_id = "field_id_example"; // string | fieldId

try {
    $result = $api_instance->deleteFormFieldUsingPOST($id, $field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->deleteFormFieldUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **field_id** | **string**| fieldId |

### Return type

[**\CollingMedia\Client\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllFieldsUsingGET**
> \CollingMedia\Client\Model\ResponseOfFieldsMetaDataResponse getAllFieldsUsingGET($max_return, $offset)

Get Available Form Fields

Retrieves a list of all valids fields for use in forms

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FormFieldsApi();
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging

try {
    $result = $api_instance->getAllFieldsUsingGET($max_return, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->getAllFieldsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_return** | **int**| Maximum number of channels to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfFieldsMetaDataResponse**](../Model/ResponseOfFieldsMetaDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFormFieldByFormVidUsingGET**
> \CollingMedia\Client\Model\ResponseOfLpFormFieldResponse getFormFieldByFormVidUsingGET($id, $status)

Get Fields for Form

Retrieves the list of fields in the target form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FormFieldsApi();
$id = 56; // int | id
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $api_instance->getFormFieldByFormVidUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->getFormFieldByFormVidUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpFormFieldResponse**](../Model/ResponseOfLpFormFieldResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFieldPositionsUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse updateFieldPositionsUsingPOST($id, $re_arrange_request)

Update Field Positions

Reorders the list of fields in a form

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FormFieldsApi();
$id = 56; // int | id
$re_arrange_request = new \CollingMedia\Client\Model\ReArrangeRequest(); // \CollingMedia\Client\Model\ReArrangeRequest | reArrangeRequest

try {
    $result = $api_instance->updateFieldPositionsUsingPOST($id, $re_arrange_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->updateFieldPositionsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **re_arrange_request** | [**\CollingMedia\Client\Model\ReArrangeRequest**](../Model/\CollingMedia\Client\Model\ReArrangeRequest.md)| reArrangeRequest | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFormFieldUsingPOST**
> \CollingMedia\Client\Model\ResponseOfLpFormFieldResponse updateFormFieldUsingPOST($id, $field_id, $update_form_field_request)

Update Form Field

Updates the configuration for that target field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FormFieldsApi();
$id = 56; // int | id
$field_id = "field_id_example"; // string | fieldId
$update_form_field_request = new \CollingMedia\Client\Model\UpdateFormFieldRequest(); // \CollingMedia\Client\Model\UpdateFormFieldRequest | updateFormFieldRequest

try {
    $result = $api_instance->updateFormFieldUsingPOST($id, $field_id, $update_form_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->updateFormFieldUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **field_id** | **string**| fieldId |
 **update_form_field_request** | [**\CollingMedia\Client\Model\UpdateFormFieldRequest**](../Model/\CollingMedia\Client\Model\UpdateFormFieldRequest.md)| updateFormFieldRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfLpFormFieldResponse**](../Model/ResponseOfLpFormFieldResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

