<?php

class Controller_Main extends Controller
{
	function __construct()
	{

		$this->view = new View();
	}

	function action_index()
	{
		$file = file('file/file.txt');
		$data=[];
		$data["file"]=$file;
		if(isset($_FILES) && $_FILES['inputfile']['error'] == 0){ // Проверяем, загрузил ли пользователь файл
				$uploaddir = '/home/host1241978/taishettoday.ru/htdocs/test/file/';
				$destiation_dir = $uploaddir . 'file.txt';

				move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir ); // Перемещаем файл в желаемую директорию
					
				}
				else{

			}
		if(isset($_POST['first_word']) && isset($_POST['second_word'])) {


			$data=preg_replace('/\pP/iu', '', $file);
			$data=mb_strtolower($data[0]);
			$pieces = explode(" ", $data);
				function minDist($arr, $n, $x, $y)
						{
						    $i; $j;
						    $min_dist = PHP_INT_MAX;
						    for ($i = 0; $i < $n; $i++)
						    {
						        for ($j = $i + 1; $j < $n; $j++)
						        {
						            if( ($x == $arr[$i] and $y == $arr[$j] or
						                $y == $arr[$i] and $x == $arr[$j]) and
						                             $min_dist > abs($i - $j))
						            {

						                $min_dist = abs($i - $j);
						            }
						        }
						    }
						    return $min_dist;
						}
				$minDist = 	minDist($pieces,count($pieces),mb_strtolower($_POST['first_word']),mb_strtolower($_POST['second_word']));
				$wordMinDist = $minDist-1;

				$wordArr1=[];
				$wordArr2=[];
				foreach ($pieces as $key => $value) {
					if(trim($value)==mb_strtolower($_POST['first_word'])){
						$wordArr1[]=$key;
					}elseif (trim($value)==mb_strtolower($_POST['second_word'])) {

						$wordArr2[]=$key;
					}

				}
				$maxWord1 = max($wordArr1);
				$maxWord2 = max($wordArr2);
				$minWord1 = min($wordArr1);
				$minWord2 = min($wordArr2);
				if($minWord1<$minWord2){
					$result=$maxWord2-$minWord1;
				}else{
					$result=$maxWord1-$minWord2;
				}

		$wordMaxDist=$result-1;
		$data=array($wordMinDist,$wordMaxDist);
		$data["file"]=$file;
	//	var_dump($data);

		}
		$this->view->generate('main_view.php', 'template_main.php',$data);

	}

}

?>
