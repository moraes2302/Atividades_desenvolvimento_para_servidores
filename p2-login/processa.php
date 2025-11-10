<?php
// Carrega o PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

date_default_timezone_set('America/Sao_Paulo');

// Função para enviar e-mail com PHPMailer
function enviarEmail($destinatario, $assunto, $mensagem) {
    $mail = new PHPMailer(true);
    try {
        // Configurações do servidor SMTP (Gmail)
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'anapontesmoraes123@gmail.com'; 
        $mail->Password   = 'tomx firh comu cqxc'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Configura remetente e destinatário
        $mail->setFrom('anapontesmoraes123@gmail.com', 'Sistema PHP Login');
        $mail->addAddress($destinatario);

        // Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = $assunto;
        $mail->Body    = $mensagem;

        $mail->send();
        echo "<p style='color:green'>E-mail enviado com sucesso para <b>$destinatario</b>!</p>";
    } catch (Exception $e) {
        echo "<p style='color:red'>Erro ao enviar e-mail: {$mail->ErrorInfo}</p>";
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $acao = $_POST['acao'];

    // LOGIN
    if ($acao === 'login') {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        if ($usuario === 'admin' && $senha === '123') {
            $assunto = "Acesso bem-sucedido ao Sistema";
            $mensagem = "O usuário '$usuario' acessou o sistema em " . date("d/m/Y H:i:s");
            
            // enviando notificação para o professor:
            $destinatario = 'marcos.sousa12@fatec.sp.gov.br';
            
            enviarEmail($destinatario, $assunto, $mensagem);

            header("Location: restrita.php");
            exit;
        } else {
            echo "<p>Usuário ou senha incorretos!</p>";
            echo "<a href='index.php'>Voltar</a>";
        }
    }

    // ESQUECEU A SENHA
    if ($acao === 'recuperar') {
        $email = $_POST['email'];

        if ($email === 'teste@fatec.sp.gov.br') {
            $novaSenha = "Fatec2025SI";
            $assunto = "Recuperação de Senha";
            $mensagem = "Sua nova senha temporária é: <b>$novaSenha</b>";
            enviarEmail($email, $assunto, $mensagem);
        } else {
            echo "<p>E-mail não encontrado!</p>";
        }

        echo "<a href='index.php'>Voltar ao Login</a>";
    }
}
?>