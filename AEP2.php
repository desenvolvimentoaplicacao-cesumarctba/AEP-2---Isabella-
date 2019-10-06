<?php

class Pessoa
{
    public $nome;
    public $datanasc;
    public $cpf;
    public $altura;
    public $peso;

    public function Pessoa($n,$data,$c,$a,$p){
        $this->nome=$n;
        $this->datanasc=$data;
        $this->cpf=$c;
        $this->altura=$a;
        $this->peso=$p;
    }

    public function calculaImc(){
        $imc=$this->peso/($this->altura*$this->altura);
        if ($imc<18.5)
        {
            echo "O seu IMC é:".number_format($imc,2),"\n";
            echo "Você está abaixo do peso!\n";
        }
        elseif (($imc>18.5) && ($imc<24.9))
        {
            echo "O seu IMC é:".number_format($imc,2),"\n";
            echo "Você está com o peso normal!\n";
        }
        elseif (($imc>25) && ($imc<29.9))
        {
            echo "O seu IMC é:".number_format($imc,2),"\n";
            echo "Você está com sobrepeso!\n";
        }
        elseif (($imc>30) && ($imc<34.9))
        {
            echo "O seu IMC é:".number_format($imc,2),"\n";
            echo "Você está com Obesidade grau 1!\n";
        }
        elseif (($imc>35) && ($imc<39.9))
        {
            echo "O seu IMC é:".number_format($imc,2),"\n";
            echo "Você está com Obesidade grau 2!\n";
        }
        elseif ($imc>40)
        {
            echo "O seu IMC é:".number_format($imc,2),"\n";
            echo "Você está com Obesidade grau 3!\n";
        }
    }

    public function calculaIdade(){
        $dia=date('d');
        $mes=date('m');
        $ano=date('Y');
        $nasc=explode('/',$this->datanasc);
        $dianasc=($nasc[0]);
        $mesnasc=($nasc[1]);
        $anonasc=($nasc[2]);
        $idade=$ano-$anonasc;
        echo "Você tem $idade anos";
    }

    public function validaCpf($cpf=null){
        if (empty($cpf)){
            return false;
        }
        $cpf=preg_replace("/[^0-9]/","",$cpf);
        $cpf=str_pad($cpf,11,'0',STR-PAD-LEFT);

        if(strlen($cpf)!=11){
            return false;
        }elseif ($cpf=='00000000000'||
            $cpf=='11111111111'||
            $cpf=='22222222222'||
            $cpf=='33333333333'||
            $cpf=='44444444444'||
            $cpf=='55555555555'||
            $cpf=='66666666666'||
            $cpf=='77777777777'||
            $cpf=='88888888888'||
            $cpf=='99999999999'){
            return false;
        }else{
            for($t=9;$t<11;$t++){
                for ($d=0,$c=0;$c<$d;$c++){
                    $d+=$cpf{$c}*(($t+1)-$c);
                }
                $d=((10*$d)%11)%10;
                if($cpf{$c}!=$d){
                    return false;
                }
            }
            return true;
            echo "CPF válido!";
        } 
        return $this->cpf;
    }
}