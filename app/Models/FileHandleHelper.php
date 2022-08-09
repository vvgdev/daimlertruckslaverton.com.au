<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use AWS;
//use App\Models\ExceptionHelper;

class FileHandleHelper extends Model {

    /**
     * Delete File from Local file system
     * @param string $file Basic file name with folder name as prefix like (abc/bcd.ext)
     * @return boolean
     */
    static public function FileDeleteLocal($file) {
        if (env('APP_ENV') === 'local' || env('APP_ENV') === 'staging') {

        } else {
            $path = app()->basePath('public/');
            $filePath = $path . trim($file);
            if (file_exists($filePath)) {
                $isRemoved = unlink($filePath);
            }
        }
        return TRUE;
    }

    /**
     * Delete File from file system and if Environment is Production then delete file from AWS S3 Bucket
     * @param string $file Basic file name with folder name as prefix like (abc/bcd.ext)
     * @return boolean
     */
    static public function FileDeleteObject($file) {
        try {
            if (env('APP_ENV') === 'local' || env('APP_ENV') === 'staging') {
                $path = app()->basePath('public/');
                $filePath = $path . trim($file);
                if (file_exists($filePath)) {
                    $isRemoved = unlink($filePath);
                }
            } else {
                if (env('AWS_ACCESS_KEY_ID') != '') {
                    $s3 = AWS::createClient('s3');
                    $s3->deleteObject(array('Bucket' => env('AWS_BUCKET'), 'Key' => str_replace(env('BUCKET_FILE_PREFIX'), "", $file)));
                }
            }
            return TRUE;
        } catch (\Exception $e) {
            //ExceptionHelper::ExceptionNotification($e, 'FileHandleHelper', 'Backend error for FileDeleteObject');
        }
    }

    /**
     * Upload File to file system and if environment will be production then file will be uploaded to AWS S3 Bucket
     * @param string $file Basic Old File Path
     * @param string $fileFolderPrefix Folder name to move file from old Path
     * @param boolean $deleteOldMedis True if delete file from old folder else false
     * @return string
     */
    static public function FileUploadObject($file, $fileFolderPrefix, $deleteOldMedis = FALSE) {
        try {
            $fileUrl = '';
            $path = app()->basePath('public/');
            if (env('APP_ENV') === 'local' || env('APP_ENV') === 'staging') {
                $old_path =  $path . $file;
                $new_path =  str_replace("tempfile/", $fileFolderPrefix . "/", $file);
                if ($old_path != $new_path) {
                    copy($old_path, $new_path);
                }
                if (file_exists($new_path)) {
                    chmod($new_path, 0777);
                }
                $fileUrl = str_replace("tempfile/", $fileFolderPrefix . "/", $file);
            } else {
                if (env('AWS_ACCESS_KEY_ID') != '') {
                    $old_path =  $path . $file;
                    $new_path = str_replace("tempfile/", $fileFolderPrefix . "/", $file);
                    $s3 = AWS::createClient('s3');
                    $s3->putObject(array(
                        'Bucket' => env('AWS_BUCKET'),
                        'Key' => $new_path,
                        'SourceFile' => $old_path,
                    ));
                    /* $fileUrl = $s3->getObjectUrl(env('AWS_BUCKET'), $new_path); */
                    $fileUrl = $new_path;
                }
            }
            if ($deleteOldMedis) {
                FileHandleHelper::FileDeleteObject($file);
            }
            return $fileUrl;
        } catch (\Exception $e) {
            print_r($e->getMessage());exit;
            //ExceptionHelper::ExceptionNotification($e, 'FileHandleHelper', 'Backend error for FileUploadObject');
        }
    }

    /**
     * Get full file path based on environment
     * @param string $file Basic file name with folder name as prefix like (abc/bcd.ext)
     * @return string
     */
    static public function FileGetPath($file) {
        try {
            if (trim($file) != '') {
                if (env('APP_ENV') === 'local' || env('APP_ENV') === 'staging') {
                    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
                    $domainName = $_SERVER['HTTP_HOST'];
                    // $filePrefix = $protocol . $domainName . '/api/';
                    $filePrefix = $protocol . $domainName . "/";
                    $file = $filePrefix . trim($file);
                } else {
                    /* $s3 = AWS::createClient('s3');
                      $file = $s3->getObjectUrl(env('AWS_BUCKET'), $file); */
                    $file = env('BUCKET_FILE_PREFIX') . trim($file);
                }
            }
            return trim($file);
        } catch (\Exception $e) {
            //ExceptionHelper::ExceptionNotification($e, 'FileHandleHelper', 'Backend error for FileGetPath');
        }
    }

    /**
     * Get file stored path from full url
     * @param string $file full file url with http_host
     * @return string
     */
    static public function FileGetDBEntry($file) {
        try {
            if (trim($file) != '') {
                if (env('APP_ENV') === 'local' || env('APP_ENV') === 'staging') {
                    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
                    $domainName = $_SERVER['HTTP_HOST'];
                    $filePrefix = $protocol . $domainName . '/api/';
                    $file = ltrim(trim($file), $filePrefix);
                } else {
                    /* $s3 = AWS::createClient('s3');
                      $file = $s3->getObjectUrl(env('AWS_BUCKET'), $file); */
                    $file = ltrim(trim($file), env('BUCKET_FILE_PREFIX'));
                }
            }
            return trim($file);
        } catch (\Exception $e) {
            //ExceptionHelper::ExceptionNotification($e, 'FileHandleHelper', 'Backend error for FileGetPath');
        }
    }

    /**
     * Make File name Sorter
     * @param string $file Basic file name without extension
     * @return string
     */
    static public function FileNameTrim($file) {
        $file = (strlen(str_replace(' ', '_', $file)) > 80) ? substr(str_replace(' ', '_', $file), 0, 80) : str_replace(' ', '_', $file);
        return $file;
    }

    /**
     * Download file from S3 bucket for live environment
     * @param string $file Basic file path
     * @param string $downloadFolderPath Only folder path or name where we need to store file without file-name like ("abc/xyz") which is in public folder
     * @return string stored file path
     */
    static public function DownloadFileToLocal($file, $downloadFolderPath) {
        try {
            $file_url = $file_path = "";
            if (trim($file) != '') {
                $dirName = app()->basePath('public/');
                $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
                $domainName = $_SERVER['HTTP_HOST'];
                $filePrefix = $protocol . $domainName . '/api/';
                $store_file_path = $dirName . $downloadFolderPath . '/' . basename($file);
                if (env('APP_ENV') === 'local' || env('APP_ENV') === 'staging') {
                    copy($dirName . $file, $store_file_path);
                } else {
                    $s3 = AWS::createClient('s3');
                    $files = $s3->getObject(array(
                        'Bucket' => env('AWS_BUCKET'),
                        'Key' => $file,
                        'SaveAs' => $store_file_path)
                    );
                }
                if (file_exists($store_file_path)) {
                    chmod($store_file_path, 0777);
                }
                $file_url = $filePrefix . trim($downloadFolderPath) . "/" . basename(trim($file));
                $file_path = $dirName . trim($downloadFolderPath) . "/" . basename(trim($file));
            }
            return array("url" => $file_url, "path" => $file_path);
        } catch (\Exception $e) {
            //ExceptionHelper::ExceptionNotification($e, 'DownloadFileToLocal', 'Backend error for DownloadFileToLocal');
        }
    }

    /**
     *
     * @param array $files array of files which will be added in zip file
     * @param string $zip_name zipfile name with extension like (""demo.zip)
     * @param string $zip_folder Only folder path or name where we need to store file without file-name like ("abc/xyz") which is in public folder
     * @param boolean $type 1 = URLs and 0 = local folder path
     * @return array zip path and url
     */
    static public function CreateZipFile($files, $zip_name, $zip_folder, $type = 0) {
        try {
            $file_url = $file_path = "";
            if (count($files)) {
                $dirName = app()->basePath('public/');
                $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
                $domainName = $_SERVER['HTTP_HOST'];
                $filePrefix = $protocol . $domainName . '/api/';

                $zip = new \ZipArchive;
                if ($zip->open($dirName . $zip_folder . '/' . $zip_name, \ZipArchive::CREATE) === TRUE) {
                    foreach ($files as $attachment) {
                        if ($type) {
                            /* Download File from URL */
                            $download_file = file_get_contents($attachment);
                            $zip->addFromString(basename($attachment), $download_file);
                        } else {
                            $zip->addFile($attachment, basename($attachment));
                        }
                    }
                }
                $zip->close();
                chmod($dirName . $zip_folder . '/' . $zip_name, 0777);
                $file_url = $filePrefix . trim($zip_folder) . "/" . trim($zip_name);
                $file_path = $dirName . trim($zip_folder) . "/" . trim($zip_name);
                foreach ($files as $attachment) {
                    if (file_exists($attachment)) {
                        $isRemoved = unlink($attachment);
                    }
                }
            }
            return array("url" => $file_url, "path" => $file_path);
        } catch (\Exception $e) {
            //ExceptionHelper::ExceptionNotification($e, 'DownloadFileToLocal', 'Backend error for DownloadFileToLocal');
        }
    }

    /**
     * Random stging generate
     * @param integer $length Length of random string
     * @param array() $types multiple type like lower,upper,number Ex. ['lower','upper','number'] for all mixed and user can make combination of all three.
     * @return string
     */
    static public function RandomString($length = 10, $types = ['lower', 'number']) {
        $characters = "";
        foreach ($types as $type) {
            switch ($type) {
                case ("lower"):
                    $characters .= 'abcdefghijklmnopqrstuvwxyz';
                    break;
                case ("upper"):
                    $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    break;
                default :
                    $characters .= '0123456789';
            }
        }
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}
