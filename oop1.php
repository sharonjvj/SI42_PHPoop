<?php

    class Nilai{
        private $status;

        public function setStatus($nilai): void{
            if($nilai>=50){
                $this->status="Lulus";
            }else{
                $this->status="Tidak Lulus";
            }
        }

        public function getStatus(): string{
            return $this->status;
        }
    }

    $objekNilai = new Nilai();
    $objekNilai-> setStatus(nilai: 90);
    echo $objekNilai->getStatus();
?>