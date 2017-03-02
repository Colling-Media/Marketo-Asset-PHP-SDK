# CollingMedia\Client\FilesApi

All URIs are relative to *https://052-SXI-468.mktorest.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFileUsingPOST**](FilesApi.md#createFileUsingPOST) | **POST** /rest/asset/v1/files.json | Create File
[**getFileByIdUsingGET**](FilesApi.md#getFileByIdUsingGET) | **GET** /rest/asset/v1/file/{id}.json | Get File by Id
[**getFileByNameUsingGET**](FilesApi.md#getFileByNameUsingGET) | **GET** /rest/asset/v1/file/byName.json | Get File by Name
[**getFilesUsingGET**](FilesApi.md#getFilesUsingGET) | **GET** /rest/asset/v1/files.json | Get Files


# **createFileUsingPOST**
> \CollingMedia\Client\Model\ResponseOfFileResponse createFileUsingPOST($create_file_request)

Create File

Creates a new file from the included payload

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\FilesApi();
$create_file_request = new \CollingMedia\Client\Model\CreateFileRequest(); // \CollingMedia\Client\Model\CreateFileRequest | createFileRequest

try {
    $result = $api_instance->createFileUsingPOST($create_file_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createFileUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_file_request** | [**\CollingMedia\Client\Model\CreateFileRequest**](../Model/\CollingMedia\Client\Model\CreateFileRequest.md)| createFileRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfFileResponse**](../Model/ResponseOfFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileByIdUsingGET**
> \CollingMedia\Client\Model\ResponseOfFileResponse getFileByIdUsingGET($id)

Get File by Id

Returns the file record for the given id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\FilesApi();
$id = 56; // int | id

try {
    $result = $api_instance->getFileByIdUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFileByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\CollingMedia\Client\Model\ResponseOfFileResponse**](../Model/ResponseOfFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileByNameUsingGET**
> \CollingMedia\Client\Model\ResponseOfFileResponse getFileByNameUsingGET($name)

Get File by Name

Returns files records for the given name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\FilesApi();
$name = "name_example"; // string | Name of the file

try {
    $result = $api_instance->getFileByNameUsingGET($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFileByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the file |

### Return type

[**\CollingMedia\Client\Model\ResponseOfFileResponse**](../Model/ResponseOfFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFilesUsingGET**
> \CollingMedia\Client\Model\ResponseOfFileResponse getFilesUsingGET($get_files_request, $folder)

Get Files

Returns the files from the given folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Client\Api\FilesApi();
$get_files_request = new \CollingMedia\Client\Model\GetFilesRequest(); // \CollingMedia\Client\Model\GetFilesRequest | getFilesRequest
$folder = "folder_example"; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'

try {
    $result = $api_instance->getFilesUsingGET($get_files_request, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFilesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_files_request** | [**\CollingMedia\Client\Model\GetFilesRequest**](../Model/\CollingMedia\Client\Model\GetFilesRequest.md)| getFilesRequest |
 **folder** | **string**| JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfFileResponse**](../Model/ResponseOfFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

