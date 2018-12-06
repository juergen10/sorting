<?php
$categories = [
['id'=>1, 'name'=>'Sport'],
['id'=>2, 'name'=>'Food'],
];
$news = [
['id'=>1, 'title'=>'UEFA League Champion', 'category'=>1],
['id'=>2, 'title'=>'Juara Piala Sudirman', 'category'=>1],
['id'=>3, 'title'=>'Final F1', 'category'=>1],
['id'=>4, 'title'=>'Cara memasak Kue', 'category'=>2],
['id'=>5, 'title'=>'10 Restoran enak', 'category'=>2],
];

function convert($categories, $news)
{
    $object = [];
    foreach($categories as $sort){
      foreach($news as $val){
        if($val['category'] == $sort['id']){
            if (!isset($object[$sort['name']])) {
                $object[$sort['name']]= array();
            }
            $object[$sort['name']][]= $val;
        }
      }
    }
    echo json_encode($object);
}
print_r(convert($categories, $news));

 ?>
