# Swagger\Client\FileContentsApi

All URIs are relative to *https://052-SXI-468.mktorest.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**updateContentUsingPOST**](FileContentsApi.md#updateContentUsingPOST) | **POST** /rest/asset/v1/file/{id}/content.json | Update File Content


# **updateContentUsingPOST**
> \CollingMedia\Client\Model\ResponseOfFileResponse updateContentUsingPOST($request)

Update File Content

Replaces the current content of the file with the included payload

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FileContentsApi();
$request = new \CollingMedia\Client\Model\UpdateFileContentRequest(); // \CollingMedia\Client\Model\UpdateFileContentRequest | request

try {
    $result = $api_instance->updateContentUsingPOST($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileContentsApi->updateContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\CollingMedia\Client\Model\UpdateFileContentRequest**](../Model/\CollingMedia\Client\Model\UpdateFileContentRequest.md)| request |

### Return type

[**\CollingMedia\Client\Model\ResponseOfFileResponse**](../Model/ResponseOfFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

