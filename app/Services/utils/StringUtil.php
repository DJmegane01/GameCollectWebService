<?php
class StringUtil{
    /**
     * 文字列による文字数チェック(null対応)
     * null・文字数が0文字の場合falseを返す。
     *
     * @param String $chkStr
     * @return boolean
     */
    public function strlenCheck($chkStr){
        if(isNull($chkStr)){
            return false;
        }else if(strlen($chkStr)==0){
            return false;
        }
        return true;
    }
}
?>