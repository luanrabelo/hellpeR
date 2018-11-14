<?php
//Verifica o Sistema Operacional

// Nome do Arquivo que vai ser criado
$nome_arquivo = "hellpeR.R";

// Dados a ser escrito no arquivo
$Titulo	   = $_POST['Titulo'];
$VarName1  = $_POST['VarName1'];
$DadosVar1 = $_POST['DadosVar1'];

$VarName2  = $_POST['VarName2'];
$DadosVar2 = $_POST['DadosVar2'];
$SubTitle  = $_POST['SubTitle'];
$texto_arquivo = 
"########## Script gerado pelo hellpeR ##########"."\r\n"."############ Criado por Luan Rabelo ############"."\r\n"."############ luanrabelo@outlook.com ############"."\r\n"."{".$VarName1."<-c(".$DadosVar1.")"."\r\n".$VarName2."<-c(".$DadosVar2.")"."\r\n"."barplot(".$VarName1.", names.arg=".$VarName2.","." main=".'"'.$Titulo.'"'.", ylab=".'"'.$VarName1.'"'." ,xlab=".'"'.$VarName2.'",'.'sub="'.$SubTitle.'"'.")}";


 
// se arquivo já existe
if(file_exists("$nome_arquivo")) {
// abre o arquivo para reescrever
$fp = fopen("$nome_arquivo", "w");
// escreve no arquivo
  fwrite($fp, "$texto_arquivo");
// fecha o arquivo
fclose($fp);
 
// ser arquivo não existir
} else {
 
// cria um novo arquivo e abrindo para escrita
$fp = fopen("$nome_arquivo", "w");
// escreve o seu texto no arquivo
fwrite($fp, "$texto_arquivo");
// fecha o arquivo
fclose($fp); // fecha arquivo
} 

$filename = $nome_arquivo;
if(ini_get('zlib.output_compression'))
ini_set('zlib.output_compression', 'Off');
$file_extension = strtolower(substr(strrchr($filename,"."),1));
if($filename=="") {
echo "nenhum arquivo foi especificado para download";
exit;
}
elseif(!file_exists($filename)) {
echo "o arquivo não foi encontrado";
exit;
};
switch($file_extension) {
// cada case é um formato para download
case "pdf": $ctype="application/pdf"; break;
case "exe": $ctype="application/octet-stream"; break;
case "zip": $ctype="application/zip"; break;
case "doc": $ctype="application/msword"; break;
case "xls": $ctype="application/vnd.ms-excel"; break;
case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
case "gif": $ctype="image/gif"; break;
case "png": $ctype="image/png"; break;
case "jpg": $ctype="image/jpg"; break;
default: $ctype="application/force-download";
}

header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);
header("Content-Type: $ctype");
header("Content-Disposition: attachment; filename=\"".basename($filename)."\";" );
header("Content-Transfer-Encoding: binary");
header("Content-Length: ".filesize($filename));
readfile("$filename");
exit();

 
// exibe uma mensagem
echo "arquivo criado e escrito com sucesso";

?>

