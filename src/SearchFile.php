<?php
namespace Mingzhongshui\File;

/**
 * Query directory file
 */
class SearchFile
{
    /**
     * List Folder Contents
     * @param  path $folderName Folder name
     */
    public function searchAllFile ( $folderName )
    {
        $result = array();
        $handle = opendir($folderName);
        if ( $handle ) {
            while ( ( $file = readdir ( $handle ) ) !== false ) {
                if ( $file != '.' && $file != '..') {
                    $sonPath = $folderName . DIRECTORY_SEPARATOR . $file;
                    if ( is_dir ( $sonPath ) ){
                        $result['dir'][$sonPath] = $this->searchAllFile ( $sonPath );
                    } else {
                        $result['file'][] = $sonPath;
                    }
                }
            }
            closedir($handle);
        }
        return $result;
    }
}


