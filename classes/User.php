<!-- 
Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.



Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.

Provate a far interagire tra di loro gli oggetti: ad esempio, l’utente dello shop inserisce una carta di credito...
`$c = new CreditCard(..);
$user->insertCreditCard($c);`


BONUS:
Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php 

require_once __DIR__ . '/Credit_Card.php';

class User 
{
  use Credit_Card;

  private $nome;
  private $cognome;
  private $email;
  private $indirizzo;
  private $carta_di_credito;
  public $username;
  
  public function __construct($_username)
  {
    $this->username = $_username;
  }

  




}

?>