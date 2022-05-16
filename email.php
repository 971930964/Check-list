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
    $assinatura=$_POST['assinatura'];
    $senha=$_POST['senha'];

    // formatando nossa mensagem (que será envaida ao e-mail)
    // >>>>> Aqui vc estava concatenando direto sem a "$mensagem .= "  tem que iniciar com = antes para identificar a variável
    $mensagem = '<b>CHECK-LIST</b><br>Antes da Jornada de Trabalho<br><br>';
    $mensagem.='<b>MOTORISTA: </b>'.$motorista.'<br>';
    $mensagem.='<b>PLACA VEICULO:</b> '.$placa.'<br>';
    $mensagem.='<b>KM INICIAL:</b> '.$km_inicial.'<br>';
    $mensagem.='<b>VIATURA:</b> '.$viatura.'<br>';
    $mensagem.='<b>DATA:</b> '.$date.'<br><br>';

    $mensagem.='<b>Luzes do painel de instrumentos:</b> '.$radio.'<br>';
    $mensagem.='<b>Lampadas de seta dianteira:</b> '.$radio.'<br>';
    $mensagem.='<b>Lampadas de seta traseira:</b> '.$radio.'<br>';
    $mensagem.='<b>Lampadas de freio:</b> '.$radio.'<br>';
    $mensagem.='<b>Lampadas de re:</b> '.$radio.'<br>';
    $mensagem.='<b>Lanternas e farois:</b> '.$radio.'<br>';
    $mensagem.='<b>Buzina:</b> '.$radio.'<br>';
    $mensagem.='<b>Cinto de seguranca fixacao e travamento:</b> '.$radio.'<br>';
    $mensagem.='<b>Calibragem dos pneus e estepe:</b> '.$radio.'<br>';
    $mensagem.='<b>Chave de roda e triangulo:</b> '.$radio.'<br>';
    $mensagem.='<b>Sistema de cameras:</b> '.$radio.'<br><br>';

    $mensagem.='<b>Habilitacao:</b> '.$radio.'<br>';
    $mensagem.='<b>Documento veiculo:</b> '.$radio.'<br>';
    $mensagem.='<b>Uniforme completo:</b> '.$radio.'<br>';
    $mensagem.='<b>Cracha de identificacao:</b> '.$radio.'<br><br>';

    $mensagem= '<b>EQUIPAMENTOS</b><br>';
    $mensagem.='<b>Tablet e cabo:</b> '.$radio.'<br>';
    $mensagem.='<b>PDA e cabo:</b> '.$radio.'<br>';
    $mensagem.='<b>Cartao combustivel:</b> '.$radio.'<br>';
    $mensagem.='<b>Suporte PDA:</b> '.$radio.'<br>';
    $mensagem.='<b>Suporte tablet:</b> '.$radio.'<br>';
    $mensagem.='<b>Protetor salivar:</b> '.$radio.'<br>';
    $mensagem.='<b>Carregador veicular:</b> '.$radio.'<br>';

    $mensagem.='<b>OBSERVACOES:</b> '.$obs.'<br>';

    $mensagem.='<b>ASSINATURA:</b> '.$assinatura.'<br>';
    $mensagem.='<b>SENHA:</b> '.$senha.'<br>';

    // abaixo as requisições do arquivo phpmailer
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require("phpmailer/src/PHPMailer.php");
    require("phpmailer/src/SMTP.php");
    require("phpmailer/src/Exception.php");

    // chamando a função do phpmailer
    $mail = new PHPMailer();

    try{
        $mail->IsSMTP();
        
        $emailRemetente = "informacoes@masilogsolucoes.com.br";
        $emailDestinatário = "checklistgeneral@gmail.com";

        $mail->Username = $emailRemetente;
        $mail->Password = "MSLS@2132#$"; 
        
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;

        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;

        $mail->setFrom($emailRemetente, "Nome remetente"); // Nome do remetente
        
        $mail->addAddress($emailDestinatário, "Nome destinatário"); // Nome do destinatário

        $mail->IsHTML(true);

        $mail->Subject = "Titulo teste";

        $mail->Body   = $mensagem; 

        $mail->Send();

        echo "Enviado com sucesso<br>";
        echo "------------------------------------<br>";
        echo $mensagem; 

      //  header("Location: index.html");

    }catch(Exception $e){
        echo "Não foi possível enviar o e-mail :(";
    }
?>