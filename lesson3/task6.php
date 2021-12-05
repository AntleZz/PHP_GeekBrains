<?php

        $menu = array("Компания"               => array("История", "Коллектив"=>array("Фотогалерея","Дни рождения",), "Мероприятия", "Вакансии"),
                        "Продукция"             => array("Каталог"=>[1,2,3], "Галерея", "Акции", "Новинки"),
                        "Техническая поддержка" => array("Драйвера", "Инструкции","Сервис", "Диагностика"),
                        
                    );
					
		echo "<ul>";
            foreach ($menu as $sup_item => $sub_item) {

                echo "<li>$sup_item</li>";
                    
                    echo "<ul>";
                        foreach($sub_item as $value ){
                          if(is_array($value)){
							  foreach($value as $v){
								  echo "<li>$v</li>";
							  }
						  }
						  else{
							echo "<li>$value</li>";
						  }
                        }
                    echo "</ul>";
            }
        echo "</ul>";