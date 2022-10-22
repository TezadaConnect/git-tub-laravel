<?php
// =============================================================================================
// TITLE: COMMON SERVICE SERVICE
// DESCRIPTION: USED FOR HANDLING REPETATIVE FUNCTION IN THE PROGRAM
// DEVELOPER: TERRENCE CALZADA
// DATE: OCTOBER 16, 2022
// =============================================================================================

namespace App\Services;

use App\Http\Controllers\StorageFileController;
use Exception;

class CommonService {

    private $storageFileController;

    public function __construct(StorageFileController $storageFileController){
        $this->storageFileController = $storageFileController;
    }

    /**
     * =============================================================================================
     * 
     * File upload handler function that returns a string
     * 
     * @param File $file this paramenter is the file itself or input request
     * 
     * @param Input $description this parameter is the description input request.
     * 
     * @param String $additiveName this parameter is added to the filename and is user define.
     * 
     * @param String $route this parameter is used to redirect in other page with an error message.
     * 
     * @return String the file name of the uploaded file.
     * 
     * =============================================================================================
     */
    public function fileUploadHandler($file, $description, $additiveName, $route){
        $fileDesc = $description == "" ? "" : $this->storageFileController->abbrev($description);
        $fileName = "";
        try {
            $fileName = $additiveName . $fileDesc . '-' . now()->timestamp.uniqid() . '.' .  $file->extension();
            $file->storeAs('documents', $fileName, 'local');
            return $fileName;
        } catch (\Throwable $error) {
            return redirect()->route($route)->with( 'warning', 'Unable to upload the file/s, please try again later.');  
        }
    }

    /**
     * =============================================================================================
     * 
     * File upload handler for external database function that returns an object or an associative array. 
     * 
     * @param Request $request this paramenter is the whole request input.
     * 
     * @param String $requestName this parameter is the request name.
     * 
     * @param String $description this parameter is the description of file.
     * 
     * @return Object with key value pair; $isError, $imagedata, $memeType, $description and $message.
     * 
     * =============================================================================================
     */
    public function fileUploadHandlerForExternal($request, $requestName, $description = null){
        try {
            if($request->has($requestName)){
                $datastring = file_get_contents($request->file([$requestName]));
                $mimetype = $request->file($requestName)->getMimeType();
                $imagedata = unpack("H*hex", $datastring);
                $imagedata = '0x' . strtoupper($imagedata['hex']);
                return [
                    'isError' => false,
                    'image' => $imagedata,
                    'description' => $description,
                    'mimetype' => $mimetype,
                ];
            } else {
                return [
                    'isError' => false,
                    'image' => null,
                    'description' => null,
                    'mimetype' => null,
                ];
            }
            
        } catch (Exception $error) {
            echo("<script>console.log('PHP: ". $error->getMessage() ."');</script>");
            return [
                'isError' => true,
                'image' => null,
                'description' => null,
                'mimetype' => null,
                'message' => $error->getMessage()
            ];
        }
    }
}


// $tempFile = TemporaryFile::where('folder', $file)->first();
// if($tempFile){
//     $temporaryPath = "documents/tmp/".$file."/".$tempFile->filename;
//     $info = pathinfo(storage_path().'/documents/tmp/'.$file."/".$tempFile->filename);
//     $ext = $info['extension'];
//     $fileName = $additiveName . $fileDesc . '-' . now()->timestamp.uniqid() . '.' . $ext;
//     Storage::move($temporaryPath, "documents/".$fileName);
//     Storage::deleteDirectory("documents/tmp/".$file);
//     $tempFile->delete();
//     return $fileName;
// }
// throw new Exception("1");