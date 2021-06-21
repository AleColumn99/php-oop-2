<!-- 
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.

Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.

Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
`$c = new CreditCard(..);
$user->insertCreditCard($c);`


BONUS:
Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php 

trait Credit_card 
{
  private $number;
  private $expiration_date;
  private $nome_intestatario;
  public $tipo;

  

  public function setCard($_number, $_expiration_date, $_nome_intestatario, $_tipo)
  {
    $this->number = $_number;
    $this->expiration_date = $_expiration_date;
    $this->nome_intestatario = $_nome_intestatario;
    $this->tipo = $_tipo;
  }

  public function addDate($_expiration_date){
    try{
      $this->expiration_date = $this->checkDate($_expiration_date);
      return $_expiration_date;
    }catch(Exception $e){
      echo $e->getMessage();

    }
  }
  
  public function checkDate($_date)
  {
    if(strtotime(date('Y-m')) < strtotime($_date)){
      /* echo strtotime($_date); */
      return $_date;
    }else{
      /* echo strtotime($_date); */
      throw new Exception('carta scaduta');
    }
  }

  /* END controllo data */
  public function getDate()
  {   
   return $this->expiration_date;
   /* return $this->expiration_date; */
  }
    
}

/* controllo data */
/*   function validateDate($date, $format = 'Y-m')
  {
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
  } */

  /* public function checkDate($_date)
  {
    if($_date){
      if(date('Y-m') > $_date){
        return $_date;
      }else{
        return 'data scaduta';
      }
    }else{
      return 'data non valida';
    }
  } */

?>