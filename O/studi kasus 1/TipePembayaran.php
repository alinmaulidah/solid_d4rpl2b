<?php

abstract class TipePembayaran{
    public function memprosesPembayaran():void{
        $this->memprosesPembayaran();
    }
}
class debit extends TipePembayaran{
    public function menerimaPembayaran( $TipePembayaran):void{
        echo "Pembayaran dilakukan melalui debit";
    }
}
class kredit extends TipePembayaran{
    public function menerimaPembayaran( $TipePembayaran):void{
        echo "Pembayaran dilakukan melalui kredit";
    }
}
class cash extends TipePembayaran{
    public function menerimaPembayaran( $TipePembayaran):void{
        echo "Pembayaran dilakukan melalui cash";
    }
}
class PembayaranCostumer extends TipePembayaran{
    public function menerimaPembayaran( $TipePembayaran):void{
        echo "Pembayaran dilakukan melalui cash";
    }
    }
