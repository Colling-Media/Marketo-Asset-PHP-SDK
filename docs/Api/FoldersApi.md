# Swagger\Client\FoldersApi

All URIs are relative to *https://052-SXI-468.mktorest.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFolderUsingPOST**](FoldersApi.md#createFolderUsingPOST) | **POST** /rest/asset/v1/folders.json | Create Folder
[**deleteFolderUsingPOST**](FoldersApi.md#deleteFolderUsingPOST) | **POST** /rest/asset/v1/folder/{id}/delete.json | Delete Folder
[**getFolderByIdUsingGET**](FoldersApi.md#getFolderByIdUsingGET) | **GET** /rest/asset/v1/folder/{id}.json | Get Folder by Id
[**getFolderByNameUsingGET**](FoldersApi.md#getFolderByNameUsingGET) | **GET** /rest/asset/v1/folder/byName.json | Get Folder by Name
[**getFolderContentUsingGET**](FoldersApi.md#getFolderContentUsingGET) | **GET** /rest/asset/v1/folder/{id}/content.json | Get Folder Contents
[**getFolderUsingGET**](FoldersApi.md#getFolderUsingGET) | **GET** /rest/asset/v1/folders.json | Get Folders
[**updateFolderUsingPOST**](FoldersApi.md#updateFolderUsingPOST) | **POST** /rest/asset/v1/folder/{id}.json | Update Folder Metadata


# **createFolderUsingPOST**
> \CollingMedia\Client\Model\ResponseOfFolderResponse createFolderUsingPOST($create_folder_request)

Create Folder

Creates a new folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FoldersApi();
$create_folder_request = new \CollingMedia\Client\Model\CreateFolderRequest(); // \CollingMedia\Client\Model\CreateFolderRequest | createFolderRequest

try {
    $result = $api_instance->createFolderUsingPOST($create_folder_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->createFolderUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_folder_request** | [**\CollingMedia\Client\Model\CreateFolderRequest**](../Model/\CollingMedia\Client\Model\CreateFolderRequest.md)| createFolderRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfFolderResponse**](../Model/ResponseOfFolderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFolderUsingPOST**
> \CollingMedia\Client\Model\ResponseOfIdResponse deleteFolderUsingPOST($id, $type)

Delete Folder

Deletes the designated folder.  Deletion will fail if folders ahve content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FoldersApi();
$id = 56; // int | id
$type = "Folder"; // string | type

try {
    $result = $api_instance->deleteFolderUsingPOST($id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->deleteFolderUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **type** | **string**| type | [optional] [default to Folder]

### Return type

[**\CollingMedia\Client\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFolderByIdUsingGET**
> \CollingMedia\Client\Model\ResponseOfFolderResponse getFolderByIdUsingGET($id, $type)

Get Folder by Id

Returns the folder record with the given id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FoldersApi();
$id = 56; // int | id
$type = "Folder"; // string | Type of folder.  'Folder' or 'Program'

try {
    $result = $api_instance->getFolderByIdUsingGET($id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getFolderByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **type** | **string**| Type of folder.  &#39;Folder&#39; or &#39;Program&#39; | [optional] [default to Folder]

### Return type

[**\CollingMedia\Client\Model\ResponseOfFolderResponse**](../Model/ResponseOfFolderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFolderByNameUsingGET**
> \CollingMedia\Client\Model\ResponseOfFolderResponse getFolderByNameUsingGET($name, $type, $root, $work_space)

Get Folder by Name

Returns a folder record for the given name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FoldersApi();
$name = "name_example"; // string | Name of the folder.  Not applicable for Programs
$type = "type_example"; // string | Type of folder.  'Folder' or 'Program'
$root = "root_example"; // string | Parent folder reference
$work_space = "work_space_example"; // string | Name of the workspace

try {
    $result = $api_instance->getFolderByNameUsingGET($name, $type, $root, $work_space);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getFolderByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the folder.  Not applicable for Programs | [optional]
 **type** | **string**| Type of folder.  &#39;Folder&#39; or &#39;Program&#39; | [optional]
 **root** | **string**| Parent folder reference | [optional]
 **work_space** | **string**| Name of the workspace | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfFolderResponse**](../Model/ResponseOfFolderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFolderContentUsingGET**
> \CollingMedia\Client\Model\ResponseOfFolderContentResponse getFolderContentUsingGET($id, $max_return, $off_set, $type)

Get Folder Contents

Returns records for the contents of a given folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FoldersApi();
$id = 56; // int | id
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20
$off_set = 56; // int | Integer offset for paging
$type = "type_example"; // string | Type of folder.  'Folder' or 'Program'

try {
    $result = $api_instance->getFolderContentUsingGET($id, $max_return, $off_set, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getFolderContentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **max_return** | **int**| Maximum number of channels to return.  Max 200, default 20 | [optional]
 **off_set** | **int**| Integer offset for paging | [optional]
 **type** | **string**| Type of folder.  &#39;Folder&#39; or &#39;Program&#39; | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfFolderContentResponse**](../Model/ResponseOfFolderContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFolderUsingGET**
> \CollingMedia\Client\Model\ResponseOfFolderResponse getFolderUsingGET($root, $max_depth, $work_space)

Get Folders

Retrieves child folders from within a given root folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FoldersApi();
$root = "root_example"; // string | Parent folder reference
$max_depth = 56; // int | Maximum folder depth to traverse, Default 2
$work_space = "work_space_example"; // string | Name of the workspace

try {
    $result = $api_instance->getFolderUsingGET($root, $max_depth, $work_space);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getFolderUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **root** | **string**| Parent folder reference | [optional]
 **max_depth** | **int**| Maximum folder depth to traverse, Default 2 | [optional]
 **work_space** | **string**| Name of the workspace | [optional]

### Return type

[**\CollingMedia\Client\Model\ResponseOfFolderResponse**](../Model/ResponseOfFolderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFolderUsingPOST**
> \CollingMedia\Client\Model\ResponseOfFolderResponse updateFolderUsingPOST($id, $update_folder_request)

Update Folder Metadata

Updates the metadata for a given folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FoldersApi();
$id = 56; // int | id
$update_folder_request = new \CollingMedia\Client\Model\UpdateFolderRequest(); // \CollingMedia\Client\Model\UpdateFolderRequest | updateFolderRequest

try {
    $result = $api_instance->updateFolderUsingPOST($id, $update_folder_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->updateFolderUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **update_folder_request** | [**\CollingMedia\Client\Model\UpdateFolderRequest**](../Model/\CollingMedia\Client\Model\UpdateFolderRequest.md)| updateFolderRequest |

### Return type

[**\CollingMedia\Client\Model\ResponseOfFolderResponse**](../Model/ResponseOfFolderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

