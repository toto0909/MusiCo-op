<?php
class Functions{

    //学年の数字を適切な文字列にして返す関数
    function get_grade(int $grade){
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
}

?>
