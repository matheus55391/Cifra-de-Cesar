<?php



    class Cifra{

        private $key;
        private $text;
        
        private $alph_low= array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
        public function __construct(int $key, string $text)
        {
            $this->key = $key;
            $this->text = $text;
                
        }

        public function get_key(){
            return $this->key;
        }
        public function get_text(){
            return $this->text;
        }
        public function ping(){
            return "pong";
        }

        public function criptografar(){
            //primeira camada de divisão 
            //separa as palavras em um array
            $old_arrey = str_split($this->text);          
            $newText = "";
            foreach ($old_arrey as $i){
				
				if (ctype_alpha($i) > 1 ){
					$i = strtolower($i);// deixa low case
				}			
				
					
                
				
                if(in_array($i, $this->alph_low)){
                    //verifica se é uma letra do alfabeto   
                    
                    $arrey_key = array_search($i, $this->alph_low);
                    
                          //letra       //soma
                    $num = $arrey_key + $this->key;
                    
                    while ($num > (count($this->alph_low) - 1)){
                        $num = $num - count($this->alph_low);
                    }
                    while ($num < 0){
                        $num = $num + 26;

                    }   
                    $i = $this->alph_low[$num];  
                }
                
                $newText = $newText."".$i;
            }            
            return  $newText; 

        }

        public function traduzir(){

            $old_arrey = str_split($this->text);          
            $newText = "";
            foreach ($old_arrey as $i){
                if (ctype_alpha($i) > 1 ){
					$i = strtolower($i);// deixa low case
				}	
                if(in_array($i, $this->alph_low)){
                    //verifica se é uma letra do alfabeto   
                    
                    $arrey_key = array_search($i, $this->alph_low);
                    
                          //letra       //soma
                    $num = $arrey_key - $this->key;

                    while ($num > (count($this->alph_low) - 1)){
                        $num = $num - count($this->alph_low);
                    }
                    while ($num < 0){
                        $num = $num + 26;

                    }                
                    
                    $i = $this->alph_low[$num];   


                }
                
                $newText = $newText."".$i;
            }
            echo $newText;
            return  $newText; 


        }
       

    }