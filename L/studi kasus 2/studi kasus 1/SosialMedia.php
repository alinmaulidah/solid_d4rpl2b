<?php

abstract class SosialMedia{

    public function chat(): void{

    }
    public function sendPhotosAndVidios(): void{

    }
}
abstract class VidioGroupManager extends SosialMedia{

    public function callGroupVidio(): void{

    }
}
class WhatsApp extends VidioGroupManager{

    public function chat():void{

    }
    public function sendPhotosAndVidios():void{

    }
    public function callGroupVidio(): void{

    }
}
abstract class PostMediaManager extends SosialMedia{

    public function publishPost():void{

    }
}
class Instagram extends PostMediaManager{

    public function chat():void{

    }
    public function publishPost():void{

    }
    public function sendPhotosAndVidios(): void{

    }


}