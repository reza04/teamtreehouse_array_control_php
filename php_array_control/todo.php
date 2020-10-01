<?php
include 'list.php';


$status = 'all';
$field='title';
$filter=array();
foreach($list as $originalKey => $item)
{
    if($status === 'all' || $item['complete'] == $item){
        if(isset($field) && isset($item[$field]))
        {
            $filter[$originalKey]= $item[$field];
        }else{
            $filter[$originalKey]= $item['priority']+12;
        }
    }
}

asort($filter);
echo '<pre>';
// var_dump($filter);
// var_dump($status, boolval('all'),$status = 'all');
// // var_dump($filter,$list);
echo '</pre>';

echo '<table>';
echo '<tr>';
echo '<th>title</th>';
echo '<th>priority</th>';
echo '<th>due date</th>';
echo '<th>complete</th>';
echo '<tr>';

foreach ($filter as $id=>$value)
{
    echo '<tr>';
    echo '<td>'. $list[$id]["title"]."</td>\n";
    echo '<td>'. $list[$id]["priority"]."</td>\n";
    echo '<td>'. $list[$id]["due"]."</td>\n";
    echo '<td>';
    if ($list[$id]["complete"])
    {
        echo "Yes";
    }else{
        echo "No";
    }
    echo '</td>';
    echo '</tr>';
}
echo '</tr>';
echo '</table>';


?>

