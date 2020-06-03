<?php
function print_title(){
			if(isset($_GET['id'])){
			echo htmlspecialchars($_GET['id']); //htmlspecialchar()는 Xss라는 취약점을 보안하기 위해 사용 <script></script>를 단순한 문자로 읽어드림. 주로 출력 코드(echo)에 적용함 
		}
		else {
			echo "welcome";
		}
}
function print_list(){
			  $list = scandir('./Data');

		  $i = 0;
		  while ($i<count($list)) {
		  	$xsslist = htmlspecialchars($list[$i]);
		  	if($list[$i] != '.' && $list[$i] != '..'){
		   echo "<li><a href= \"board.php?id=$xsslist\">$xsslist</a></li>\n";
		}
		   $i++;
		  }
	     /* echo "<li>$list[0]</li>\n";
		  echo "<li>$list[1]</li>\n";
		  echo "<li>$list[2]</li>\n";
		  echo "<li>$list[3]</li>\n";
		  echo "<li>$list[4]</li>\n";*/
}
function print_description(){
	if(isset($_GET['id'])){
		$basename = basename($_GET['id']); //파일 경로를 보호하기 위해 사용 공격자가 파일 경로를 알고 ID값에 파일의 경로로 침투하는 경우를 대비함.
		echo htmlspecialchars(file_get_contents("Data/". $basename));
	} else{
		echo "Hello, PHP";
	}
 }

?>