<?php
    echo strtoupper ('php') ; // Rabota s registrom slov zadanie 1
    echo '<br>';
    echo strtolower ('PHP'); // Zadanie 2
    echo '<br>';
    echo ucfirst ('london'); // Zadanie 3
    echo '<br>';
    echo strtolower ('London'); //Zadanie 4
    echo '<br>';
    $words = 'london is the capital of greate britane';
    $words = ucwords($words);
    echo $words;
    echo '<br>';
    echo ucfirst (strtolower ('LONDON')); // Zadanie 6
    echo '<br>';
    echo strlen ('html css php'); //Zadanie 7
    echo '<br>';
    $pass = '123314'; //zadanie 8
    if (iconv_strlen($pass) > 5 && iconv_strlen($pass) < 10)
    { 
        echo ('Пароль подходит');
    } else {
        echo ('Пароль не подходит');
    }
    echo '<br>';
    echo substr ('htmlcssphp',7, 3 ); // Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'
    echo '<br>';
    if (substr ('http://masterskikh377/web/',0 ,7) == 'http://') 
        {
            echo ('da');
        } else {
        echo ('net');
        }
    //Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.
$string = 'html css php';
echo  '<br>' . substr($string,0,4);
echo  '<br>' . substr($string,5,3);
echo  '<br>' . substr($string,-3,3);
//Дана строка. Вырежите и выведите на экран последние 3 символа этой строки.
$string = 'Ya antosha';
echo '<br>' . substr($string,-3);
//Дана строка. Проверьте, что она начинается на 'http://'. Если это так, выведите 'да', если не так - 'нет'.
echo '<br>';
$str = 'http://fsafnsjnfaj';
if (substr($str,0,7) == "http://"){
    echo 'da';}
    else {
        echo 'net';
}
//Дана строка. Проверьте, что она начинается на 'http://' или на 'https://'. Если это так, выведите 'да', если не так - 'нет'.
    if (substr($str,0,7 ) == 'http://' || substr($str,0,8) == 'https://'){
        echo '<br>' . 'da';}
    else {echo  '<br>' . 'net';}
    //Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.
$string = 'asdasdsa.jpg';
if (substr($string,-4,4) == '.png'){
    echo '<br>' . 'da';
}
    else {echo '<br>' . 'net';}
//Дана строка. Проверьте, что она заканчивается на '.png' или на '.jpg'. Если это так, выведите 'да', если не так - 'нет'.
if (substr($string,-4,4) == '.png' || substr($string,-4,4) == '.jpg'){
    echo '<br>' . 'da';
}
    else {echo '<br>' . 'net';}
$str = '1234'; //Дана строка. Если в этой строке более 5-ти символов - вырежите из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.
if (strlen($str) > 5) {
    $new_str = substr($str, 0, 5) . '...';
    echo $new_str;
}
if (strlen($str) <= 5) {
    echo $str;
}
echo '<br>';
$str = ['31.12.2013'];    //Дана строка '31.12.2013'. Замените все точки на дефисы.
var_dump(str_replace('.','-',$str));
echo '<br>';
$str = ['a','a','b','b','c'];    //Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.
var_dump(str_replace(['a','b','c'],[1,2,3],$str));
echo '<br>';
$str = ['1a2b3c4b5d6e7f8g9h0'];    // Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. Удалите из нее все цифры. То есть в нашем случае должна получится строка 'abcbdefgh'.
var_dump(str_replace([1,2,3,4,5,6,7,8,9,0],'',$str));
echo '<br>';
$str = ['a','a','b','b','c'];    //Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3. Решите задачу двумя способами работы с функцией strtr (массив замен и две строки замен)
echo strtr('aabbc',['a'=>'1','b'=>'2','c'=>'3']);
echo '<br>';
echo substr_replace('aabadasd','!!!',2);   //Дана строка $str. Вырежите из нее подстроку с 3-го символа (отсчет с нуля), 5 штук и вместо нее вставьте '!!!'.
echo '<br>';
$str = ['abc abc abc'];    // Дана строка 'abc abc abc'. Определите позицию первой буквы 'b'
echo strpos('abc abc abc','b');
echo '<br>';
echo strrpos('abc abc abc','b');
echo '<br>';
echo strpos('abc abc abc','b',3);
echo '<br>';
echo strpos('aaa aaa aaa aaa aaa',' ',4);   //Дана строка 'aaa aaa aaa aaa aaa'. Определите позицию второго пробела.
echo '<br>';
if ( strpos('bab..afas.','..')){
    echo 'есть';}
    else {
        echo 'нет';
    }   //Проверьте, что в строке есть две точки подряд. Если это так - выведите 'есть', если не так - 'нет'.
echo '<br>';
if(strpos('http://yandex.ru', 'http://') === 0) {
    echo 'да';
} else {
    echo 'нет';
}    //Проверьте, что строка начинается на 'http://'. Если это так - выведите 'да', если не так - 'нет'.
echo '<br>';
$str = 'html css php';    //Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.
$result = explode(' ',$str);
var_dump ($result[0]. '.' . $result[1] . '.' . $result[2]);
echo '<br>';
$str = ['html', 'css', 'php'];  //Дан массив с элементами 'html', 'css', 'php'. С помощью функции implode создайте строку из этих элементов, разделенных запятыми.
echo implode(',',$str);
echo '<br>';
$date = '2013-12-31';
$arr = explode('-', $date);
echo $arr[2].'.'.$arr[1].'.'.$arr[0];    //В переменной $date лежит дата в формате '2013-12-31'. Преобразуйте эту дату в формат '31.12.2013'.
echo '<br>';
$str = '1234567890';    //Дана строка '1234567890'. Разбейте ее на массив с элементами '12', '34', '56', '78', '90'.
var_dump(str_split('1234567890',2));
echo '<br>';
var_dump(str_split('1234567890',1));    //Дана строка '1234567890'. Разбейте ее на массив с элементами '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'.
echo '<br>';
var_dump(implode('-', str_split('1234567890',2)));    // Дана строка '1234567890'. Сделайте из нее строку '12-34-56-78-90' не используя цикл
echo '<br>';
echo (trim(' php '));
echo '<br>';
echo trim('/php/','/');
echo '<br>';
echo trim('слово слово слово','.'). '.'; //Дана строка 'слова слова слова.'. В конце этой строки может быть точка, а может и не быть. Сделайте так, чтобы в конце этой строки гарантировано стояла точка. То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать. Задачу решите через rtrim без всяких ифов.
echo '<br>';
echo strrev('12345');   //Дана строка '12345'. Сделайте из нее строку '54321'.
echo '<br>';
if (strrev('палиндромом') == 'палиндромом') {
    echo 'является одинаковым';
}
    else {
        echo 'не является одинаковым';
    }//Проверьте, является ли слово палиндромом (одинаково читается во всех направлениях, примеры таких слов: madam, otto, kayak, nun, level).
echo '<br>';
echo str_shuffle('6565765765');     //Дана строка. Перемешайте символы этой строки в случайном порядке.
echo '<br>';
echo str_shuffle('abcdef'); //Создайте строку из 6-ти случайных маленьких латинских букв так, чтобы буквы не повторялись. Нужно сделать так, чтобы в нашей строке могла быть любая латинская буква, а не ограниченный набор.
echo '<br>';
echo number_format(1234567); // Дана строка '12345678'. Сделайте из нее строку '12 345 678'.
echo '<br>';
echo str_repeat('x', 1);
echo '<br>';
echo str_repeat('x', 2);
echo '<br>';
echo str_repeat('x', 3);
echo '<br>';
echo str_repeat('x', 4);
echo '<br>';
echo str_repeat('x', 5);
echo '<br>';
  //Нарисуйте пирамиду, как показано на рисунке. Решите задачу с помощью одного цикла и функции str_repeat. (Не смог выполнить)
    //Дана строка 'html, <b>php</b>, js'. Удалите теги из этой строки.
echo strip_tags('html, <b>php</b>, js');
echo '<br>';
    // Дана строка $str. Удалите все теги из этой строки, кроме тегов <b> и <i>.
$str = '\html, <div><i><b>php</b> </i></div>, js\'';
echo strip_tags($str,'<b><i>');
echo '<br>';
    //Дана строка 'html, <b>php</b>, js'. Выведите ее на экран 'как есть': то есть браузер не должен преобразовать <b> в жирный.
echo htmlspecialchars('html, <b>php</b>, js');
echo '<br>';
    //Узнайте код символов 'a', 'b', 'c', пробела.
echo ord('a') . ' Код символа а ';
echo '<br>';
echo ord ('b') . ' Код символа б ';
echo '<br>';
echo ord('c') . ' Код символа с ';
echo '<br>';
echo ord (' ') . ' Код символа пробел ';
echo '<br>';
echo chr(33) .  ' Символ с кодом 33 '; //Выведите на экран символ с кодом 33.
echo '<br>';
echo chr(65); //Запишите в переменную $str случайный символ - большую букву латинского алфавита.
echo '<br>';
$b = ord('A');
if ($b > 64 and $b < 91) {
    echo ' Большая латинская буква';
}
if ($b > 96 and $b<121){
    echo ' Маленькая латинская буква';
} //Дана буква английского алфавита. Узнайте, она маленькая или большая.
echo '<br>';
    //Дана строка 'ab-cd-ef'. С помощью функции strchr выведите на экран строку '-cd-ef'.
echo strchr('ab-cd-ef','-');
echo '<br>';
echo strrchr('ab-cd-ef','-');
echo '<br>';
    // Дана строка 'ab--cd--ef'. С помощью функции strstr выведите на экран строку '--cd--ef'.
echo strstr('ab--cd--ef','-');

?>