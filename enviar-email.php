<?php
    // Criando nossas variáveis para guardar as informações do formulário
    $motorista=$_POST['motorista'];
    $placa=$_POST['placa'];
    $km_inicial=$_POST['km_inicial'];
    $viatura=$_POST['viatura'];
    $date=date("d/m/Y");
    $radio=$_POST['luzes'];
    $radio=$_POST['seta_diant'];
    $radio=$_POST['seta_tras'];
    $radio=$_POST['freio'];
    $radio=$_POST['re'];
    $radio=$_POST['lant_farol'];
    $radio=$_POST['buzina'];
    $radio=$_POST['cinto'];
    $radio=$_POST['pneus'];
    $radio=$_POST['ch_triang'];
    $radio=$_POST['cameras'];
    $radio=$_POST['habilit'];
    $radio=$_POST['doc_veic'];
    $radio=$_POST['uniforme'];
    $radio=$_POST['cracha'];
    $radio=$_POST['tablet'];
    $radio=$_POST['pda'];
    $radio=$_POST['cartao_comb'];
    $radio=$_POST['sup_pda'];
    $radio=$_POST['sup_tab'];
    $radio=$_POST['protetor'];
    $radio=$_POST['carreg_veic'];
    $number=$_POST['combustivel'];
    $number=$_POST['gnv'];
    $obs=$_POST['obs'];






    // formatando nossa mensagem (que será envaida ao e-mail)
    $mensagem= '<b>CHECK-LIST</b><br>Antes da Jornada de Trabalho<br><br>';
    $motorista.='<b>MOTORISTA: </b>'.$motorista.'<br>';
    $placa.='<b>PLACA VEICULO:</b> '.$placa.'<br>';
    $km_inicial.='<b>KM INICIAL:</b> '.$km_inicial.'<br>';
    $viatura.='<b>VIATURA:</b> '.$viatura.'<br>';
    $date.='<b>DATA:</b> '.$date.'<br><br>';

    $luzes.='<b>Luzes do painel de instrumentos:</b> '.$radio.'<br>';
    $seta_diant.='<b>Lampadas de seta dianteira:</b> '.$radio.'<br>';
    $seta_tras.='<b>Lampadas de seta traseira:</b> '.$radio.'<br>';
    $freio.='<b>Lampadas de freio:</b> '.$radio.'<br>';
    $re.='<b>Lampadas de re:</b> '.$radio.'<br>';
    $lant_farol.='<b>Lanternas e farois:</b> '.$radio.'<br>';
    $buzina.='<b>Buzina:</b> '.$radio.'<br>';
    $cinto.='<b>Cinto de seguranca fixacao e travamento:</b> '.$radio.'<br>';
    $pneus.='<b>Calibragem dos pneus e estepe:</b> '.$radio.'<br>';
    $ch_triang.='<b>Chave de roda e triangulo:</b> '.$radio.'<br>';
    $cameras.='<b>Sistema de cameras:</b> '.$radio.'<br><br>';

    $habilit.='<b>Habilitacao:</b> '.$radio.'<br>';
    $doc_veic.='<b>Documento veiculo:</b> '.$radio.'<br>';
    $uniforme.='<b>Uniforme completo:</b> '.$radio.'<br>';
    $cracha.='<b>Cracha de identificacao:</b> '.$radio.'<br><br>';

    $mensagem= '<b>EQUIPAMENTOS</b><br>';
    $tablet.='<b>Tablet e cabo:</b> '.$radio.'<br>';
    $pda.='<b>PDA e cabo:</b> '.$radio.'<br>';
    $cartao_comb.='<b>Cartao combustivel:</b> '.$radio.'<br>';
    $sup_pda.='<b>Suporte PDA:</b> '.$radio.'<br>';
    $sup_tab.='<b>Suporte tablet:</b> '.$radio.'<br>';
    $protetor.='<b>Protetor salivar:</b> '.$radio.'<br>';
    $carreg_veic.='<b>Carregador veicular:</b> '.$radio.'<br>';




    // abaixo as requisições do arquivo phpmailer
    require("phpmailer/src/PHPMailer.php");
    require("phpmailer/src/SMTP.php");
    require ("phpmailer/src/Exception.php");

    // chamando a função do phpmailer

$mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP(); // Não modifique
    $mail->Host       = 'docs.google.com';  // SEU HOST (HOSPEDAGEM)
    $mail->SMTPAuth   = true;                        // Manter em true
    $mail->Username   = 'checklistgeneral@gmail.com';   //SEU USUÁRIO DE EMAIL
    $mail->Password   = 'general1234#';                   //SUA SENHA DO EMAIL SMTP password
    $mail->SMTPSecure = 'ssl';    //TLS OU SSL-VERIFICAR COM A HOSPEDAGEM
    $mail->Port       = 587;     //TCP PORT, VERIFICAR COM A HOSPEDAGEM
    $mail->CharSet = 'UTF-8';    //DEFINE O CHARSET UTILIZADO
    
    //Recipients
    $mail->setFrom('checklistgeneral@gmail.com', 'Site');  //DEVE SER O MESMO EMAIL DO USERNAME
    $mail->addAddress('checklistgeneral@gmail.com');     // QUAL EMAIL RECEBERÁ A MENSAGEM!
    // $mail->addAddress('ellen@example.com');    // VOCÊ pode incluir quantos receptores quiser
    $mail->addReplyTo($email, $nome);  //AQUI SERA O EMAIL PARA O QUAL SERA RESPONDIDO                  
    // $mail->addCC('cc@example.com'); //ADICIONANDO CC
    // $mail->addBCC('bcc@example.com'); //ADICIONANDO BCC

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mensagem do Formulário'; //ASSUNTO
    $mail->Body    = $mensagem;  //CORPO DA MENSAGEM
    $mail->AltBody = $mensagem;  //CORPO DA MENSAGEM EM FORMA ALT

    // $mail->send();
    if(!$mail->Send()) {
        echo "<script>alert('Erro ao enviar o E-Mail');window.location.assign('index.php');</script>";
     }else{
        echo "<script>alert('E-Mail enviado com sucesso!');window.location.assign('index.php');</script>";
     }
     die
?>
