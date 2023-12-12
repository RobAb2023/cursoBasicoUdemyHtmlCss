
<?
#alterar a variavel abaixo colocando o seu email

$destinario = "robertaabreu77@gmail.com";

$nome = $REQUEST['nome'];
$email = $REQUEST['email'];
$mensagem = $REQUEST['mensagem'];
$assunto = $REQUEST['assunto'];

//monta o e-mail na variavel $body

$body = "=================================" . "\n";
$body = $body . "FALE CONOSCO -  TESTE CORPORATIVO" . "\n";
$body = $body . "=================================" . "\n\n";
$body = $body . "Nome" . $nome . "\n";
$body = $body . "Email" . $email . "\n";
$body = $body . "Senha" . $senha . "\n";
$body = $body . "Assunto" . $assunto . "\n";
$body = $body . "Mensagem" . $mensagem . "\n";
$body = $body . "=================================" . "\n";

// envia o email
mail($destinario,$assunto,$body, "Form: $email\r\n");

// redireciona para a página de obrigado
header("location:obrigado.html");

?>