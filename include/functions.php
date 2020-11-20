<?php
class Functions{

    //学年の数字を適切な文字列にして返す関数
    function get_grade($grade){
        $r_grade = 'no_grade';
        switch($grade){
            case 1:
                $r_grade = '1年生';
                break;
            case 2:
                $r_grade = '2年生';
                break;
            case 3:
                $r_grade = '3年生';
                break;
            case 4:
                $r_grade = '4年生';
                break;
            case 5:
                $r_grade = '大学院1年生';
                break;
            case 6:
                $r_grade = '大学院2年生';
                break;
            case 9:
                $r_grade = 'その他';
                break;
            default:
                $r_grade = '音楽家';
            break;
        }
        return $r_grade;
    }

    //英語文字列の" "を"_"に変換 -> 引用画像フォルダ指定に使用
    function replace_name(string $e_name){
        return str_replace(" ","_",$e_name);
    }

    //"_"で置き換えられた名前に誕生日情報(ex Yuki_Takeda + 1993-09-09)を連結 => 個人プロフィール画像フォルダ名取得
    function get_images(string $name , string $birthday){
        $replaced_name = $this->replace_name($name);
        return $replaced_name.$birthday;
    }
    //"xxxx-xx-xx"の文字列を"xxxx年xx月xx日"に変換
    function get_birthday(string $birthday){
        $birthday = substr_replace($birthday, "年", 4,1);
        $birthday = substr_replace($birthday, "月", 9,1);
        return $birthday."日";
    }
}

?>
