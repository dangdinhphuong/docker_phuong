<?php
$numbers = array(4, 6, 2, 22, 11);
function SelectionSortAscending($mang)
{
    // Đếm tổng số phần tử của mảng
    $sophantu = count($mang);
  echo $sophantu;
    // Lặp để sắp xếp
    for ($i = 0; $i < $sophantu - 1; $i++)
    {
        // Tìm vị trí phần tử nhỏ nhất
        $min = $i;
       
        for ($j = $i + 1; $j < $sophantu; $j++){
            if ($mang[$j] < $mang[$min]){
                $min = $j;
            }
        }
  
        // Sau khi có vị trí nhỏ nhất thì hoán vị
        // với vị trí thứ $i
        $temp = $mang[$i];
        $mang[$i] = $mang[$min];
        $mang[$min] = $temp;
    }
  
    // Trả về mảng đã sắp xếp
    return $mang;
}
echo"<pre>";
var_dump(SelectionSortAscending($numbers));
echo"</pre>";
?>