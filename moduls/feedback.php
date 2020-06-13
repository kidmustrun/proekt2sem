<?php 
$page = $_GET['pg'];
 // осуществляем подключение к базе данных
 $mysqli = mysqli_connect('std-mysql', 'std_933', 'Apokalipsis', 'std_933');
if( mysqli_connect_errno() ) // проверяем корректность подключения
echo 'Ошибка подключения к БД: '.mysqli_connect_error();
 // формируем и выполняем SQL-запрос для определения числа записей
 $sql_res=mysqli_query($mysqli, 'SELECT COUNT(*) FROM std_933.feedback');
// проверяем корректность выполнения запроса и определяем его результат
 if( !mysqli_errno($mysqli) && $row=mysqli_fetch_row($sql_res) )
{
 if( !$TOTAL=$row[0] ) // если в таблице нет записей
 echo '<h3>Нет отзывов. Будьте первым!</h3>'; // возвращаем сообщение
 $PAGES = ceil($TOTAL/3);
 if( $page>=$PAGES ) // если указана страница больше максимальной
$page=$TOTAL-1; // будем выводить последнюю страницу
 $diapazon=$page*3;// вычисляем общее количество страниц
$sql='SELECT * FROM feedback  LIMIT '.$diapazon.', 3';
 $sql_res=mysqli_query($mysqli, $sql);
 $ret='<section class="container"> '; // строка с будущим контентом страницы
 while( $row=mysqli_fetch_assoc($sql_res) ) // пока есть записи
{
 $ret.='<div class="quote dark">
 <blockquote id="'.$row['id'].'">
 <div class="float-right"><button type="button" style="background:transparent; border: none;" onclick="var id = this.parentNode.parentNode.id;
 show_edit(id)");"><img style="height:20px; width:20px;" src="../img/pencil.svg" alt="Иконка редактирования"></button>
 <button type="button" style="background:transparent; border: none;" onclick="var id = this.parentNode.parentNode.id;
 show_delete(id)");"><img style="height:20px; width:20px;" src="../img/delete.svg" alt="Иконка удаления"></button>
 </div>
<p >'.$row['feedback'].'</p></blockquote> 
</div>
<div class="quote-footer">
<div class="quote-author-img"><img src="../img/user.svg" alt="аватар"></div>
<h4>'.$row['name'].'</h4></div>';
}
$ret.='</section>'; 
if( $PAGES>1 ) // если страниц больше одной – добавляем пагинацию
 {
 $ret.='<ul class="pagination justify-content-center">'; // блок пагинации
 for($i=0; $i<$PAGES; $i++) // цикл для всех страниц пагинации
 if( $i != $page ) // если не текущая страница
 $ret.='<li class="page-item"><a class="page-link" href="?p=viewer&pg='.$i.'"> '.($i+1).'</a></li>';
 else // если текущая страница
 $ret.=' <li class="page-item active" aria-current="page"><span class="page-link">'.($i+1).'</span></li>';
 $ret.='</ul>';
 }// заканчиваем формирование таблицы с контентом
 echo $ret; // возвращаем сформированный контент
}
 // если запрос выполнен некорректно


?>