<?php 
function getAnimalsList($animal, $page)
{
 // осуществляем подключение к базе данных
 $mysqli = mysqli_connect('std-mysql', 'std_933', 'Apokalipsis', 'std_933');
if( mysqli_connect_errno() ) // проверяем корректность подключения
return 'Ошибка подключения к БД: '.mysqli_connect_error();
 // формируем и выполняем SQL-запрос для определения числа записей
 $sql_res=mysqli_query($mysqli, 'SELECT COUNT(*) FROM std_933.'.$animal);
// проверяем корректность выполнения запроса и определяем его результат
 if( !mysqli_errno($mysqli) && $row=mysqli_fetch_row($sql_res) )
{
 if( !$TOTAL=$row[0] ) // если в таблице нет записей
 return 'Нет данных'; // возвращаем сообщение
 $PAGES = ceil($TOTAL/9);// вычисляем общее количество страниц
 if( $page>=$PAGES ) // если указана страница больше максимальной
$page=$TOTAL-1; // будем выводить последнюю страницу
 $diapazon=$page*9;
$sql='SELECT * FROM '.$animal.' LIMIT '.$diapazon.', 9';
 $sql_res=mysqli_query($mysqli, $sql);
 $ret=''; // строка с будущим контентом страницы
 while( $row=mysqli_fetch_assoc($sql_res) ) // пока есть записи
{
 $ret.='<div class="card text-center"><img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode($row['photo']).'" /><div class="card-body"><div class="card-title">'.$row['name'].'</div><div class="card-text"><p>'.$row['blood'].',</p><p>'.$row['age'].',</p><p>'.$row['geo'].'</p> <a href="#" class="btn btn-warning">Забрать домой!</a></div></div></div>';
}
$ret.='</div>'; // заканчиваем формирование таблицы с контентом
 if( $PAGES>1 ) // если страниц больше одной – добавляем пагинацию
 {
 $ret.='<ul class="pagination justify-content-center">'; // блок пагинации
 for($i=0; $i<$PAGES; $i++) // цикл для всех страниц пагинации
 if( $i != $page ) // если не текущая страница
 $ret.='<li class="page-item"><a class="page-link" href="?p=viewer&pg='.$i.'&animal='.$_GET['animal'].'"> '.($i+1).'</a></li>';
 else // если текущая страница
 $ret.=' <li class="page-item active" aria-current="page"><span class="page-link">'.($i+1).'</span></li>';
 $ret.='</ul>';
 }
 return $ret; // возвращаем сформированный контент
}
 // если запрос выполнен некорректно
return 'Неизвестная ошибка'; // возвращаем сообщение
} 
?>